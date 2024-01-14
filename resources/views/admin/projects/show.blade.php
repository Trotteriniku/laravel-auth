@extends('layouts.app')
@section('content')
    <section class="container">
        <h1 class=" text-uppercase ">{{$project->title}}</h1>
        <h2><a href="{{$project->link}}">Pagina uffuciale</a></h2>
        <p>{{$project->body}}</p>
    </section>
@endsection
