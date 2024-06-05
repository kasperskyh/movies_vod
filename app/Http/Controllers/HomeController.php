<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome()
    {
        $categories = Category::with('movies')->get();
        return view('welcome', ['categories' => $categories]);
    }
}
