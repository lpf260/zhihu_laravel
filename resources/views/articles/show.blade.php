@extends('app')
@section('title','文章详情页')
@section('content')
    <h1>{{ $article->title }}</h1>
    <hr/>

    <article>
            <div clss="body">
                {{ $article->content }}
            </div>
            <hr/>
            <span class="pull-right">发表时间：{{ $article->published_at }}</span>
    </article>
@stop