<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /*
     * 你也可以使用 create 方法通过一行代码来保存一个新模型。被插入数据库的模型实例将会返回给你。不过，在这样做之前，你需要先在你的模型上定义一个 fillable 或 guarded 属性，因为所有的 Eloquent 模型都针对批量赋值（Mass-Assignment）做了保护
     * >>> $articles = App\Article::create(['title'=>'Second Title','content'=>'>>> $articles = App\Article::create(['title'=>'Second Title','content'=>'Second Content','published_a']);
        t'=>Carbon\Carbon::now()]);

     */
    protected $fillable = ['title','content','published_at'];
}
