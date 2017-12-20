@extends('layouts.default')
@section('content')
    @if(count($people))
        <ul>
        @foreach($people as $value)
            <li>{{$value}}</li>
        @endforeach
        </ul>
    @else
        <span>没有数据可以显示</span>
    @endif
@stop