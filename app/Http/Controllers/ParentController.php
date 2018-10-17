<?php

namespace App\Http\Controllers;

use App\Category;
use App\Article;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Morilog\Jalali\Jalalian;

class ParentController extends Controller
{
    public function flashAlert($message = 'عملیات با موفقیت انجام شد.', $class = 'success', $title = '') {
        session()->flash('flash', 
            [
                'class' => $class,
                'title' => $title,
                'message' => $message,
            ]
        );
    }
}
