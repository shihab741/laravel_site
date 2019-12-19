<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use DB;

class CategoryController extends Controller
{
    
    public function createCategory()
    {
    	return view('admin.category.createCategory');
    }

    public function saveCategory(Request $request)
    {
    	// return $request->all();

        /**
         *
         * Serverside validation
         *
         */
        

        $this->validate($request, [
            'categoryName' => 'required',
            'categorySlug' => 'required',
            'categoryDescription' => 'required'
        ]);


    	/**
    	 *
    	 * 1st process
    	 *
    	 *	Eloquent
    	 */   	
    	$category = new Category();
    	$category->categoryName = $request->categoryName;
    	$category->categorySlug = $request->categorySlug;
    	$category->categoryDescription = $request->categoryDescription;
    	$category->publicationStatus = $request->publicationStatus;
    	$category->save();

    	/**
    	 *
    	 * 2nd process
    	 *
    	 * Eloquent
    	 * 
    	 * suitable for small tasks
    	 * 
    	 * not suitable for inserting data to multiple tables at a time
    	 */

    	// Category::create($request->all());

    	/**
    	 *
    	 * 3rd method
    	 *
    	 * Query builder, DB class is used for this purpose (use DB)
    	 *
    	 * Model not required
    	 *
    	 */
    	// DB::table('categories')->insert([
    	// 	'categoryName' => $request->categoryName,
    	// 	'categorySlug' => $request->categorySlug,
    	// 	'categoryDescription' => $request->categoryDescription,
    	// 	'publicationStatus' => $request->publicationStatus,
    	// ]);

    	
    	// return 'Category information saved successfully!';

    	return redirect('/dashboard')->with('message', 'Category information saved successfully!');
    }

    public function manageCategory()
    {
    	$categories = Category::all();
    	return view('admin.category.categoryList', ['categories' => $categories]);
    }

    public function editCategory($id)
    {
        // return $id;
        // die();
        $categoryInfoById = Category::where('id', $id)->first();
        return view('admin.category.editCategory', ['categoryInfoById' => $categoryInfoById]);
    }

    public function updateCategory(Request $request)
    {
        /**
         *
         * dd() method can be used to display submitted data as array.
         *
         */
        
        // dd($request->all());

        $category = Category::find($request->id);
        $category->categoryName = $request->categoryName;
        $category->categorySlug = $request->categorySlug;
        $category->categoryDescription = $request->categoryDescription;
        $category->publicationStatus = $request->publicationStatus;
        $category->save();   

        return redirect('/dashboard')->with('message', 'Category information updated successfully!');   
    }

    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/dashboard')->with('message', 'Category deleted successfully!'); 
    }
}
