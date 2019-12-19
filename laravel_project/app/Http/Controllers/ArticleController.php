<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Article;
use DB;

class ArticleController extends Controller
{

    public function createArticle()
    {
    	$categories = Category::where('publicationStatus', 1)->get();
    	return view('admin.article.createArticle', ['categories' => $categories]);
    }

    public function saveArticle(Request $request)
    {
    	$this->validate($request, [
    		'articleHeading' => 'required',
    		'articleSlug' => 'required',
    		'articleContent' => 'required'
    	]);

    	$image = $request->file('image');

    	// echo "<pre>";
    	// print_r($image);

        if(!empty($image))
        {
            $imageName = $image->getClientOriginalName();
            $uploadPath = 'featuredImage/';
            $image->move($uploadPath, $imageName);
            $this->saveArticleInformation($request, $imageName);
        }
        else
        {
            $imageName = '';
            $this->saveArticleInformation($request, $imageName);            
        }


    	return redirect('/dashboard')->with('message', 'Article information saved successfully!');
    }

    protected function saveArticleInformation($request, $imageName)
    {
    	$article = new Article();
    	$article->articleHeading = $request->articleHeading;
    	$article->articleSlug = $request->articleSlug;
    	$article->articleContent = $request->articleContent;
    	$article->categoryId = $request->categoryId;
    	$article->image = $imageName;
    	$article->publicationStatus = $request->publicationStatus;
    	$article->save();
    }

    public function manageArticle()
    {
    	$articles = DB::table('articles')
    		->join('categories', 'articles.categoryId', '=', 'categories.id')
    		->select('articles.id', 'articles.articleHeading', 'articles.publicationStatus', 'categories.categoryName')
    		->get();

    	return view('admin.article.articleList', ['articles' => $articles]);   	
    }

    public function editArticle($id)
    {
 		$categories = Category::get();        
        $articleInfoById = Article::where('id', $id)->first();
        return view('admin.article.editArticle', ['articleInfoById' => $articleInfoById, 'categories' => $categories]);
    }

    public function updateArticle(Request $request)
    {
        $imageName = $this->checkImage($request);

        $article = Article::find($request->id);
        $article->articleHeading = $request->articleHeading;
        $article->articleSlug = $request->articleSlug;
        $article->articleContent = $request->articleContent;
        $article->categoryId = $request->categoryId;
        $article->image = $imageName;
        $article->publicationStatus = $request->publicationStatus;
        $article->save();

        return redirect('/dashboard')->with('message', 'Article information updated successfully!');
    }

    private function checkImage($request)
    {
        $articleById = Article::where('id', $request->id)->first();
        $image = $request->file('image');

        if ($image) 
        {
            unlink('featuredImage/'.$articleById->image);
            $imageName = $image->getClientOriginalName();
            $uploadPath = 'featuredImage/';
            $image->move($uploadPath, $imageName);

        } 
        else 
        {
            $imageName = $articleById->image;
        }

        return $imageName;        
    }

    public function deleteArticle($id)
    {
        $articleById = Article::where('id', $id)->first();
        $image = $articleById->image;

       if(!empty($image))
       {
            unlink('featuredImage/'.$image);
       }

        $article = Article::find($id);
        $article->delete();
        return redirect('/dashboard')->with('message', 'Article deleted successfully!');       
    }
}