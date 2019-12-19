<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Article;
use DB;

class FrontEnd extends Controller
{
    public function index()
    {
    	// $publishedArticles = Article::where('publicationStatus', 1)->get();

        $publishedArticles = DB::table('articles')
            ->join('categories', 'articles.categoryId', '=', 'categories.id')
            ->select('articles.id', 'articles.articleHeading', 'articles.articleSlug', 'articles.articleContent', 'articles.image', 'articles.created_at', 'categories.categoryName', 'categories.categorySlug')
            ->where('articles.publicationStatus', 1)
            ->get();

        return view('frontEnd.home.home', ['publishedArticles' => $publishedArticles]);
    }

    public function single($slug)
    {
        /**
         *
         * Query to get all published articles
         *
         */
        
        $publishedArticles = DB::table('articles')
            ->join('categories', 'articles.categoryId', '=', 'categories.id')
            ->select('articles.id', 'articles.articleHeading', 'articles.articleSlug', 'articles.articleContent', 'articles.image', 'articles.created_at', 'categories.categoryName', 'categories.categorySlug')
            ->where('articles.publicationStatus', 1)
            ->get();

        /**
         *
         * Query to get article details
         *
         */
        
        $articleInfoBySlug = Article::where('articleSlug', $slug)->first();

    	return view('frontEnd.single.single', ['publishedArticles' => $publishedArticles, 'articleInfoBySlug' => $articleInfoBySlug]);
    }

    public function category($slug)
    {

        $articles = DB::table('articles')
            ->join('categories', 'articles.categoryId', '=', 'categories.id')
            ->select('articles.id', 'articles.articleHeading', 'articles.articleSlug', 'articles.articleContent', 'articles.image', 'articles.created_at', 'categories.categoryName')
            ->where('categories.categorySlug', $slug)
            ->where('articles.publicationStatus', 1)
            ->get();

        $publishedArticles = DB::table('articles')
            ->join('categories', 'articles.categoryId', '=', 'categories.id')
            ->select('articles.id', 'articles.articleHeading', 'articles.articleSlug', 'articles.articleContent', 'articles.image', 'articles.created_at', 'categories.categoryName', 'categories.categorySlug')
            ->where('articles.publicationStatus', 1)
            ->get();

    $categoryInfoBySlug = Category::where('categorySlug', $slug)->first();

    	return view('frontEnd.category.category', ['articles' => $articles, 'categoryInfoBySlug' => $categoryInfoBySlug, 'publishedArticles' => $publishedArticles]);
    }
}
