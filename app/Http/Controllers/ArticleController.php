<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    public function show()
    {
        // return view('list');
        // $articles = DB::table('articles')->orderBy('id', 'desc')->get();
        // both up and down codes does the same work
        $articles = Article::all();

        return view('list')->with(compact('articles'));
        // use of compact does the same as ['article'=>$articles]
    }

    public function add()
    {
        return view('add');
    }

    public function saveArticle(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'description' => 'required',
            'author' => 'required|max:100'
        ]);
        if ($validator->passes()) {
            // echo "Validated";
            $article = new Article;
            $article->title = $request->title;
            $article->description = $request->description;
            $article->author = $request->author;
            $article->save();

            return redirect()->route('articles.show')->with('success', 'Article saved successfully. ');
        } else {
            return redirect(route('articles.add'))->withErrors($validator)->withInput();
        }
    }
}
