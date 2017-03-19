@extends('layouts.app')

@section('content')
<html>
    <style>
        hr{
            height:3px;
            border:none;
            border-top:3px double red;
            width:800px;
        }
    </style>
</html>
    @foreach($articles as $article)
            <div class="" style="margin:10px 200px 10px 400px">
    <div class="row">
        <div class="col-lg-10" >
            <a href="{{url('article',['id' => $article->id])}}">
                <h2>{{$article->name}}</h2>
            </a>
            <p>{{substr(strip_tags($article->content),0,400)}}...</p>
            <div class="row">
                <div class="col-md-2 pull-right" style="margin-top:10px;">
                    <div class="small text-right">
                        <a href="{{url('article',['id' => $article->id])}}"><button type="button" class="btn btn-w-m btn-danger">查看全文</button></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
        </div>
        <hr/>
    @endforeach
<div class="pull-left" style="margin-left: 20px;">
    {{$articles->render()}}
</div>
@stop