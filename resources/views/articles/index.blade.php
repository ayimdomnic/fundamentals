@extends('app')

@section('content')
<h1>Articles</h1>

@foreach($article as articles)

<article>
    <h2><a href="#"> {{ $article->tittle}}</a></h2>
    <div class="body">{{$article->body}}</div>
</article>
@endforeach