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
        // below line shows the data in the reverse order
        // $articles = DB::table('articles')->orderBy('id', 'desc')->get();

        // both up and down codes does the same work
        $articles = Article::all();

        return view('list')->with(compact('articles'));
        // use of compact does the same as ['article'=>$articles]
    }

    public function addArticle()
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
    public function editArticle($id, Request $request)
    {
        //fetch a record form the database
        $article = Article::where('id', $id)->first();
        if (!$article) {
            return redirect(route('articles.show'))->with('errorMsg', 'Record not found.');
        }
        // echo $id;

        return view('edit')->with(compact('article'));
    }
    public function updateArticle($id, Request $request)
    {
        // copy of saveArticle()
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'description' => 'required',
            'author' => 'required|max:100'
        ]);
        if ($validator->passes()) {
            // echo "Validated";
            $article =  Article::find($id); //made changes

            $article->title = $request->title;
            $article->description = $request->description;
            $article->author = $request->author;
            $article->save();

            return redirect()->route('articles.show')->with('success', 'Article updated successfully. ');
        } else {
            return redirect(route('articles.add' . $id))->withErrors($validator)->withInput();
        }
    }
    public function deleteArticle($id, Request $request)
    {
        //copy from edit
        $article = Article::where('id', $id)->first();
        if (!$article) {
            return redirect(route('articles.show'))->with('errorMsg', 'Record not found.');
        }
        Article::where('id', $id)->delete();
        return redirect(route('articles.show'))->with('success', 'Record has been deleted successfully.');
    }
}
