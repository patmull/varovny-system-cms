<?php

namespace App\Http\Controllers\Administration;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\Post;

class CategoriesController extends AdministrationController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::with('posts')->orderBy('title')->paginate(10);
        $categoriesCount = Category::count();

        return view("administration.categories.index", compact('categories', 'categoriesCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = new Category();

        return view("administration.categories.create", compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\CategoryStoreRequest $request)
    {
        Category::create($request->all());

        return redirect("/administration/categories")->with("message", "Nová kategorie byla vytvořena");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $categoryFound = Category::findOrFail($category->id);

        return view('administration.categories.edit', compact('categoryFound'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

      public function update(Requests\CategoryUpdateRequest $request, Category $category){

      Category::findOrFail($category->id)->update($request->all());

      return redirect("/administration/categories")->with("message", "Kategorie byla aktualizována.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Requests\CategoryDestroyRequest $request, Category $category)
    {
        Post::withTrashed()->where('category_id', $category->id)->update(['category_id' => config('cms.default_category_id')]);

        $categoryFound = Category::findOrFail($category->id);
        $categoryFound->delete();

        return redirect('/administration/categories')->with("message", "Kategorie byla úspěšně smazána.");
    }
}
