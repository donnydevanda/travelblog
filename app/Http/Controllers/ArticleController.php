<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    function index(Request $request){
        $auth = Auth::check();
        $role = 0;
        $name = 0;
        if ($auth){
            $role = Auth::user()->role;
            $name = Auth::user()->name;
        }
        $articles = Article::where('title', 'like', "%".$request->search."%")->paginate(6);
        return view('home', ['auth' => $auth, 'role' => $role, 'name' => $name, 'articles' => $articles]);
    }

    function category(Request $request, $slug){
        $auth = Auth::check();
        $role = 0;
        if ($auth){
            $role = Auth::user()->role;
        }
        $articles = Article::where('categories_id', $slug)->paginate(6);
        $title = Article::where('categories_id', $slug)->firstOrFail();
        return view('category', ['auth' => $auth, 'role' => $role, 'articles' => $articles, 'title' => $title]);
    }

    function detail(Request $request, $slug){
        $auth = Auth::check();
        $role = 0;
        if ($auth){
            $role = Auth::user()->role;
        }
        $article = Article::where('id', $slug)->firstOrFail();
        return view('detail', ['auth' => $auth, 'role' => $role, 'article' => $article]);
    }

    function blog(Request $request){
        $auth = Auth::check();
        $role = 0;
        $id = 0;
        if ($auth){
            $role = Auth::user()->role;
            $id = Auth::user()->id;
        }
        $articles = Article::where('users_id', Auth::user()->id)->get();
        return view('blog', ['auth' => $auth, 'role' => $role, 'id' => $id, 'articles' => $articles]);
    }

    function blogAdmin(Request $request){
        $auth = Auth::check();
        $role = 0;
        $id = 0;
        if ($auth){
            $role = Auth::user()->role;
            $id = Auth::user()->id;
        }
        $articles = Article::all();
        return view('blog', ['auth' => $auth, 'role' => $role, 'id' => $id, 'articles' => $articles]);
    }

    function blogAdd(){
        $auth = Auth::check();
        $role = 0;
        if ($auth){
            $role = Auth::user()->role;
        }
        return view('blog-post', ['auth' => $auth, 'role' => $role]);
    }

    function blogAddPost(Request $request){
        $this->validate($request, [
            'categories_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);

        Article::create([
            'users_id' => Auth::user()->id,
            'categories_id' => $request->categories_id,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->file('image')->store('images', 'public')
        ]);

        return redirect()->back();
    }

    function blogDelete(Request $request){
        Article::find($request->id)->delete();
        return redirect()->back();
    }
}
