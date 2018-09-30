<?php

namespace App\Http\Controllers;

use App\Category;
use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $articles = Article::latest()->paginate(30);
        
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('id')->get();
        
        return view('articles.create', compact('categories'));
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
            'category_id' => 'integer',
            'title' => 'required|unique:articles|max:255|min:3',
            'body' => 'required'
        ]);
        
//        return $request->all();
        
        $article = new Article();
        $article->category_id = $request->category_id;
        $article->title = $request->title;
        $article->body = $request->body;
        $article->save();
        
        session()->flash('success', 'مقاله جدید با موفقیت ثبت شد.');
        
        return redirect(route('articles'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $categories = Category::orderBy('id')->get();
        
        return view('articles.edit', compact('article', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $this->validate($request, [
            'category_id' => 'integer',
            'title' => 'required|max:255|min:3',
            'body' => 'required'
        ]);
        
        $save = 0;
        
        if($request->category_id != $article->category_id){
            $article->category_id = $request->category_id;
            $save = 1;
        }
        
        if($request->title != $article->title){
            $article->title = $request->title;
            $save = 1;
        }
        
        if($request->body != $article->body){
            $article->body = $request->body;
            $save = 1;
        }
        
        if(isset($request->active) && $request->active != $article->active){
            $article->active = $request->active;
            $save = 1;
        }
        else if(!isset($request->active)){
            $article->active = 0;
            $save = 1;
        }
        
        
        if($save == 1){
            $article->save();
            session()->flash('success', 'ویرایش با موفقیت انجام شد.');
        }
        else if($save == 0)
            session()->flash('warning', 'ویرایش انجام نشد - هیچ تغییری وجود نداشت.');
        
        return redirect(route('articles'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        
        session()->flash('success', 'مقاله مورد نظر با موفقیت حذف شد.');
        
        return redirect(route('articles'));
    }
}
