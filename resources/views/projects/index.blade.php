@extends('layout.app')

@section('content')
    <a href="/create-project" class="btn btn-success mt-5">Create new project</a>
    <table class="table table-bordered mt-5">

        <tr>
            <th>ID</th>
            <th>Project Name</th>
            <th>Project Body</th>
            <th>Actions</th>
        </tr>
        @foreach( $projects as $project)
            <tr>
                <td>{{ $project->id }}</td>
                <td>{{ $project->name }}</td>
                <td>{{ $project->body }}</td>
                <td>
                    <div class="btn-group">
                        <a href="/project/{{ $project->id }}" class="btn btn-info">View</a>
                        <a href="/project/{{ $project->id }}/edit" class="btn btn-warning">Edit</a>

                        <form method="POST" action="/project/{{ $project->id }}/delete" onSubmit="return confirm( 'Do you want to delete?')">
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                    </div>
                </td>
            </tr>
        @endforeach



    </table>
@endsection
