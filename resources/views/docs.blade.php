@extends('layouts.app')
@section('title', '文档')
@section('content')
<div class="jumbotron">
    <h1>{{ config('app.name') }}</h1>
    <p class="lead">
        你现在所看到的是 <a href="https://learnku.com/courses/laravel-essential-training">博能是傻逼教程</a> 的示例项目主页。
    </p>
    <p>
        一切，将从这里开始。
    </p>
    <p>
        <a class="btn btn-lg btn-success" href="#" role="button">现在注册</a>
    </p>
</div>
@endsection