<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Activation;
use Carbon\Carbon;

class HomeController extends Controller {

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $articles = Article::latest()->paginate(10);
        return view('site.index', compact('articles'));
    }

    public function activation($token) {
        
        $codeActivation = Activation::whereCode($token)->first();

        if (!$codeActivation) {
            session()->flash('danger', 'کد فعال سازی معتبر نیست.');
        } elseif ($codeActivation->expire < Carbon::now()) {
            session()->flash('danger', 'زمان فعال سازی کد تمام شده است. لطفا به صفحه ورود رفته و کد فعال سازی دیگری بفرستید.');
        } elseif ($codeActivation->used) {
            session()->flash('danger', 'کد فعالسازی قبلا استفاده شده است.');
        } else {
            $codeActivation->used = 1;
            $codeActivation->save();

            $user = $codeActivation->user;
            $user->active = 1;
            $user->save();

            session()->flash('success', $user->name . ' گرامی، اکانت شما با موفقیت فعال شد.');

            auth()->loginUsingId($codeActivation->user->id);
        }

        return redirect('/');
    }

}
