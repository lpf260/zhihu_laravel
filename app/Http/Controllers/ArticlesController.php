<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Article;    //调用Article   Model模型

class ArticlesController extends Controller
{
    //
    public function index()
    {
        //查看所有文章
            //$articles = Article::latest()->where('published_at','<=',Carbon::now())->get();  //获取所有最新在前 默认根据created_at   //返回对象格式
        $articles = Article::latest()->published()->get(); //这个published()会调用model中的scopePublished
        //carbon中的diffForHumans
        // return $articles; 这里可以将对象转为json返回
        return view('articles.index',compact('articles'));
    }

    //
    public function show($id)
    {

        $article = Article::findOrFail($id);
        //dd($article->published_at); //这个不是Carbon对象
        //dd($article->published_at->diffForHumans()); //这个是个Carbon对象
        //dd($article->created_at->diffForHumans());
        //if(is_null($article)){
        //abort(404);
        //}
        //dd($article); //dd()调试函数
        return view('articles.show',compact('article'));
    }

    /**
     * 创建文章
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * 发表文章
     *
     */
    public function store(Request $request)
    {
        //只获取title的值 $request->get('title');
        //dd($request->all());
        $input = $request->all();

        //存入数据库
        //$input['published_at'] = Carbon::now();


        Article::create($input);
        return redirect('/articles');
    }
}
