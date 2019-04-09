<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('main.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\page  $page
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
	return view('main.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(page $page)
    {
        //
    }
}
