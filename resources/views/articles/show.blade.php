@extends('app')
@section('content')

<h1><a href="#"> {{ $article->tittle}}</a></h1>
    <div class="body">{{$article->body}}</div>
    
    @stop