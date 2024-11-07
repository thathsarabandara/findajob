<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function viewHome(){

        $categories = Category::all();

        return view('home',['categories' => $categories]);
    }
}
