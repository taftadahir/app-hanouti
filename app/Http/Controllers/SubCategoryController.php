<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subCategories = SubCategory::all();
        return $subCategories;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $response = Gate::inspect('create', SubCategory::class);
        if ($response->allowed()){
            return view('layouts.subCategory.create',['categories'=>Category::all()]);
        }else{
            echo $response->message();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $response = Gate::inspect('create', SubCategory::class);
        if ($response->allowed()) {
            // Validate data
            $request->validate([
                'name'=>'bail|required|string|max:255',
                'category_id'=>'bail|required|numeric'
            ]);

            $category = Category::where('id', $request['category_id'])->first();
            if ($category == null) {
                // Do something
            }

            $subCategory = new SubCategory([
                'name'=>$request['name']
            ]);

            // Store in database
            $category->subCategories()->save($subCategory);

            // Do something after creating subCategory
            return $this->show($subCategory);
        }else {
            echo $response->message();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subCategory)
    {
        $response = Gate::inspect('view', $subCategory);
        if ($response->allowed()) {
            return view('layouts.subCategory.show', ['subCategory'=>$subCategory]);
        }else{
            echo $response->message();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subCategory)
    {
        $response = Gate::inspect('update',$subCategory);
        if ($response->allowed()) {
            return view('layouts.subCategory.edit', ['subCategory'=>$subCategory, 'categories'=>Category::all()]);
        }else{
            echo $response->message();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $subCategory)
    {
        $response = Gate::inspect('update',$subCategory);
        if ($response->allowed()){
            // Validate data
            $request->validate([
                'name'=>'nullable|string|max:255',
                'category_id'=>'nullable|numeric'
            ]);

            if ($request->has('name') && $request['name']) {
                $subCategory->name=$request['name'];
            }
            if ($request->has('category_id') && $request['category_id']) {
                $category = Category::where('id', $request['category_id'])->first();
                if ($category == null) {
                }
                $subCategory->category()->associate($category);
            }

            $subCategory->save();
            // Do something after creating category
            return $this->show($subCategory);
        }
        else{
            echo $response->message();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subCategory)
    {
        $response = Gate::inspect('delete',$subCategory);
        if ($response->allowed()){
            $subCategory->delete();
           // Return to dashboard with a message
           return redirect()->route('home');
        }else{
            echo $response->message();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function forceDelete(SubCategory $subCategory)
    {
        $response = Gate::inspect('forceDelete',$subCategory);
        if ($response->allowed()){
            $subCategory->forceDelete();
            // Return to dashboard with a message
            return redirect()->route('home');
        }else{
            echo $response->message();
        }
    }
    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Product  $product
     * @return mixed
     */
    public function restore( $id)
    {
        $subCategory = SubCategory::withTrashed()->find($id);
        $response = Gate::inspect('restore',$subCategory);
        if ($response->allowed()){
            // Do some restore
            $subCategory->restore();
        }
        else{
            echo $response->message();
        }
    }
}
