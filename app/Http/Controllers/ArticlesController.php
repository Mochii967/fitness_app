<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\articles;

class ArticlesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show', 'login']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = articles::all();
        return view('articles.index')->with('articles', $articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
            'description' => 'required'
        ]);

        $article = new articles;
        $article->title = $request->input('title');
        $article->body = $request->input('body');
        $article->description = $request->input('description');
        $article->author = auth()->user()->name;
        $article->user_id = auth()->user()->id;
        $article->save();

        return redirect('/articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = articles::find($id);
        return view('articles.show')->with('article', $article);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = articles::find($id);
        if(auth()->user()->id !== $article->user_id){
            return redirect('/articles')->with('error', 'Unauthorized Page');
        }
        return view('articles.edit')->with('article', $article);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
            'description' => 'required'
        ]);

        $article = articles::find($id);
        $article->title = $request->input('title');
        $article->body = $request->input('body');
        $article->description = $request->input('description');
        $article->save();

        return redirect('/articles')->with('success', 'Post updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = articles::find($id);
        if(auth()->user()->id !== $article->user_id){
            return redirect('/articles')->with('error', 'Unauthorized Page');
        }
        $article->delete();
        return redirect('/articles')->with('success', 'Post removed');
    }
}
