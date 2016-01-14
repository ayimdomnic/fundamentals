@extends('app')
@section('content')
<h1> About me </h1>

<h3> People I like: </h3>
<ul>
    @foreach($people as $person)
        <li>{{$person}}</li>
    @endforeach
</ul>

<p>
    Once installed, the simple laravel new command will create a fresh Laravel installation
    in the directory you specify. For instance, laravel new blog would create a directory
    named blog containing a fresh Laravel installation with all dependencies installed.
    This method of installation is much faster than installing via Composer:


</p>
@stop