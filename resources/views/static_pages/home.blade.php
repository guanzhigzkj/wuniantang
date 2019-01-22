@extends('layouts.default')
@section('title', 'home页')
@section('content')
    <div class="jumbotron">
        <h1>Hello Song</h1>
        <p class="lead">
            这是一件令人高兴的事情,这是美好的一天!
        </p>
        <p>
            一切，将从这里开始。
        </p>
        <p>
            <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">现在注册</a>
        </p>
    </div>
@stop