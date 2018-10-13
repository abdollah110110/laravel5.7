<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Morilog\Jalali\Jalalian;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $users = User::latest()->paginate(30);
        
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => 'required|max:255|min:3',
            'email' => 'required|email',
            'active' => 'boolean',
        ]);
        
        $save = 0;
        
        if($request->name != $user->name){
            $user->name = $request->name;
            $save = 1;
        }
        
        if($request->email != $user->email){
            $user->email = $request->email;
            $save = 1;
        }
        
        if(isset($request->active) && $request->active != $user->active){
            $user->active = $request->active;
            $save = 1;
        }
        else if(!isset($request->active)){
            $user->active = 0;
            $save = 1;
        }
        
        
        if($save == 1){
            $user->save();
            session()->flash('success', 'ویرایش با موفقیت انجام شد.');
        }
        else if($save == 0)
            session()->flash('warning', 'ویرایش انجام نشد - هیچ تغییری وجود نداشت.');
        
        return redirect(route('users'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        
        session()->flash('success', 'کاربر مورد نظر با موفقیت حذف شد.');
        
        return redirect(route('users'));
    }
}
