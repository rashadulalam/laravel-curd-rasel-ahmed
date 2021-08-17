@extends('layout.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-7 mt-5">
            <h2>Create new project</h2>
            <form action="/create-project" class="mt-5" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name" class="sr-only">Project Name</label>
                    <input type="text" id="name" class="form-control" name="name" placeholder="Project name" value="{{ old('name') }}">
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                </div>
                <div class="form-group">
                    <label for="details" class="sr-only">Project details</label>
                    <textarea id="details" class="form-control" name="details" placeholder="Project details" rows="5" >{{ old('details') }}</textarea>
                    <span class="text-danger">{{ $errors->first('details') }}</span>
                </div>
                <button class="btn btn-success" type="submit">Create project</button>
            </form>
        </div>
    </div>
@endsection
