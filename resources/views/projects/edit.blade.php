@extends('layout.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-7 mt-5">
            <h2>Edit a project</h2>
            <form action="/project/{{ $project->id }}/edit" class="mt-5" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name" class="sr-only">Project Name</label>
                    <input type="text" id="name" class="form-control" name="name" placeholder="Project name" value="{{ $project->name }}">
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                </div>
                <div class="form-group">
                    <label for="details" class="sr-only">Project details</label>
                    <textarea id="details" class="form-control" name="details" placeholder="Project details" rows="5" >{{ $project->body }}</textarea>
                    <span class="text-danger">{{ $errors->first('details') }}</span>
                </div>
                <button class="btn btn-success" type="submit">Update project</button>
            </form>
        </div>
    </div>
@endsection
