<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /*
     * 你也可以使用 create 方法通过一行代码来保存一个新模型。被插入数据库的模型实例将会返回给你。不过，在这样做之前，你需要先在你的模型上定义一个 fillable 或 guarded 属性，因为所有的 Eloquent 模型都针对批量赋值（Mass-Assignment）做了保护
     * >>> $articles = App\Article::create(['title'=>'Second Title','content'=>'>>> $articles = App\Article::create(['title'=>'Second Title','content'=>'Second Content','published_a']);
        t'=>Carbon\Carbon::now()]);

     */
    protected $fillable = ['title','content','published_at'];

    protected $dates = ['published_at']; //将published_at转化为Carbon对象

    //set Attribute预处理 保存到数据库前进行预处理 set+字段名+Attribute
    public function setPublishedAtAttribute($date)
    {
        //这个会将日期转换成带时分秒的
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d',$date);
    }

    //scope+方法名字驼峰命名法
    public function scopePublished($query)
    {
        $query->where('published_at','<=',Carbon::now());
    }
}
