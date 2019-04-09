<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests\ArticleFormRequest;

class ArticlesController extends Controller
{
    public function index(){
    	$articles = Article::orderBy('id','DESC')->paginate(5);
    	return view('articles.index', compact('articles'));
    }

    public function blog(){
        $articles = Article::where('class', 'blog')->orWhere('class','my')->orWhere('class','share')->orderBy('id','DESC')->paginate(5);
        return view('articles.index', compact('articles'));
    }

    public function my(){
        $articles = Article::where('class', 'my')->orderBy('id','DESC')->paginate(5);
        return view('articles.index', compact('articles'));
    }

    public function share(){
        $articles = Article::where('class', 'share')->orderBy('id','DESC')->paginate(5);
        return view('articles.index', compact('articles'));
    }

    public function news(){
        $articles = Article::where('class', 'news')->orWhere('class','sport')->orWhere('class','hot')->orWhere('class','music')->orderBy('id','DESC')->paginate(5);
        return view('articles.index', compact('articles'));
    }

    public function sport(){
        $articles = Article::where('class', 'sport')->orderBy('id','DESC')->paginate(5);
        return view('articles.index', compact('articles'));
    }

    public function hot(){
        $articles = Article::where('class', 'hot')->orderBy('id','DESC')->paginate(5);
        return view('articles.index', compact('articles'));
    }

    public function music(){
        $articles = Article::where('class', 'music')->orderBy('id','DESC')->paginate(5);
        return view('articles.index', compact('articles'));
    }

    public function show($id){
    	$article = Article::find($id);
    	return view('articles.show')->with('article', $article);
    }

    public function create(){
    	return view('articles.create');
    }

    public function edit($id){
    	$article = Article::find($id);
    	return view('articles.edit')->with('article', $article);
    }

    public function store(ArticleFormRequest $request){
    	Article::create([
            'class' => $request->get('txtclass'),
    		'title' => $request->get('txttitle'),
    		'meta' => $request->get('txtmeta'),
    		'image' => $request->get('txtimage'),
    		'content' => $request->get('txtcontent')
    	]);

    	return redirect()->route('article.index');
    }

    public function update($id, ArticleFormRequest $request){
    	$article = Article::find($id);

    	$article->update([
            'class' => $request->get('txtclass'),
    		'title' => $request->get('txttitle'),
    		'meta' => $request->get('txtmeta'),
    		'image' => $request->get('txtimage'),
    		'content' => $request->get('txtcontent')
    	]);

    	return redirect()->route('article.index');
    }

    public function destroy($id){
        $article = Article::find($id);

        $article->delete();

        return redirect()->route('article.index');
    }
}