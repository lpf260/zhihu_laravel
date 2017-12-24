<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;    //调用Article   Model模型

class ArticlesController extends Controller
{
    //
    public function index()
    {
        //查看所有文章
        $articles = Article::all();      //返回json格式

        return view('articles.index',compact('articles'));
    }

    //
    public function show($id)
    {

        $article = Article::findOrFail($id);

        //if(is_null($article)){
        //abort(404);
        //}
        //dd($article); //dd()调试函数
        return view('articles.show',compact('article'));
    }

    /*
     * 创建文章
     */
    public function create()
    {
        return view('articles.create');
    }
}
