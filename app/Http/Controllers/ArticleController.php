<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    public function show()
    {
        return view('list');
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
            //
        } else {
            return redirect(route('articles.add'))->withErrors($validator)->withInput();
        }
    }
}
