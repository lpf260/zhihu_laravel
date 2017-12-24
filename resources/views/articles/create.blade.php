@extends('app')
@section('title','创建文章')

@section('content')
    <h1>撰写新文章</h1>
    {!! Form::open() !!}.
        <div class="form-group">
        {!! Form::label('name') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>

    <!--Content Field -->
    <div class="form-group">
        {!! Form::label('content','Content:') !!}
        {!! Form::textarea('content',null,['class' => 'form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop