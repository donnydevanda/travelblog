<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    function index(Request $request){
        $articles = Article::all();
        return view('home', ['articles' => $articles]);
    }

    function category(Request $request, $slug){
        $articles = Article::where('categories_id', $slug)->get();
        return view('home', ['articles' => $articles]);
    }
}
