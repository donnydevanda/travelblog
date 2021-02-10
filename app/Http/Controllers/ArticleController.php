<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    function index(Request $request){
        $auth = Auth::check();
        if ($auth){
            $role = Auth::user()->role;
            $name = Auth::user()->name;
        }
        $articles = Article::where('title', 'like', "%".$request->search."%")->paginate(6);
        return view('home', ['auth' => $auth, 'role' => $role, 'name' => $name, 'articles' => $articles]);
    }

    function category(Request $request, $slug){
        $auth = Auth::check();
        if ($auth){
            $role = Auth::user()->role;
        }
        $articles = Article::where('categories_id', $slug)->paginate(6);
        return view('category', ['auth' => $auth, 'role' => $role, 'articles' => $articles]);
    }

    function detail(Request $request, $slug){
        $auth = Auth::check();
        if ($auth){
            $role = Auth::user()->role;
        }
        $article = Article::where('id', $slug)->firstOrFail();
        return view('detail', ['auth' => $auth, 'role' => $role, 'article' => $article]);
    }

    function blog(Request $request){
        $auth = Auth::check();
        if ($auth){
            $role = Auth::user()->role;
        }
        $articles = Article::where('users_id', Auth::user()->id)->get();
        return view('blog', ['auth' => $auth, 'role' => $role, 'articles' => $articles]);
    }

    function delete(Request $request){
        Article::find($request->id)->delete();
        return redirect('/blog');
    }
}
