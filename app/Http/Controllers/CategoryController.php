<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $categories = Category::latest()->paginate(30);
        
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3'
        ]);
        
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        
        session()->flash('success', 'موضوع جدید با موفقیت ثبت شد.');
        
        return redirect(route('categories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'active' => 'boolean',
        ]);
        
        $save = 0;
        
        if($request->name != $category->name){
            $category->name = $request->name;
            $save = 1;
        }
        
        if(isset($request->active) && $request->active != $category->active){
            $category->active = $request->active;
            $save = 1;
        }
        else if(!isset($request->active)){
            $category->active = 0;
            $save = 1;
        }
        
        if($save == 1){
            $category->save();
            session()->flash('success', 'ویرایش با موفقیت انجام شد.');
        }
        else if($save == 0)
            session()->flash('warning', 'ویرایش انجام نشد - هیچ تغییری وجود نداشت.');
        
        return redirect(route('categories'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        
        session()->flash('success', 'موضوع مورد نظر با موفقیت حذف شد.');
        
        return redirect(route('categories'));
    }
}
