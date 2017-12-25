@extends('app')
@section('title','文章标题页')
@section('content')
    <h1>Articles<span class="pull-right"><a href="{{ url('articles','create') }}" target="_blank">添加文章</a></span></h1>
    <hr/>

    @foreach($articles as $article)
        <h2><a href="{{ url('articles',$article->id) }}">{{ $article->title }}</a></h2>
        <article>
                <div clss="body">
                    {{ $article->content }}
                </div>
        </article>
    @endforeach
@stop