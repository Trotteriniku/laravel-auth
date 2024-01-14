@extends('layouts.app')
@section('content')
    <section class="container">
        <h1 class=" text-uppercase ">Project List</h1>
        <ul class="list-unstyled">
        @foreach ($projects as $project)
            <li><a href="{{route('admin.projects.show', $project->id)}}">{{$project->title}}</a></li>
        @endforeach
        </ul>


    </section>
@endsection
