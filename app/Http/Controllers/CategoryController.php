<?php

namespace App\Http\Controllers;

use App\Models\Category;
// use App\Http\Requests\StoreCategoryRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $request->image
        ]);
        $request = session();
        $request->flash('success', 'Registration successfull! Please login');
        return view('category.index', [
            "categories" => Category::all()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('category.edit', [
            'category' => $category,
            "categories" => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
        // $image = $category->image;
        // if ($request->hasFile('image')) {
        //     Category::delete($category->image);
        //     $image = $request->file('image')->store('public/categories');
        // }
        Category::where('id', $category->id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $request->image
        ]);
        return redirect('/category')->with('success', 'update successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        Category::destroy($category->id);
        return redirect('/category')->with('success', 'data deleted successfully');
    }
}
