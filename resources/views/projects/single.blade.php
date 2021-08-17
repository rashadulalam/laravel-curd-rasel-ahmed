@extends('layout.app')

@section('content')

    <h1 class="my-2">{{ $project->name }}</h1>
    <hr>
    <div class="mt-4">
        {{ $project->body }}
    </div>
    <a href="/projects" class="btn btn-info mt-5">Back to projects</a>
    <a href="/project/{{ $project->id }}/delete" class="btn btn-info mt-5">Delete projects</a>
@endsection
