@extends('layouts.app')

@section('content')
<h1 class="text-center">Edit Task</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">Update the title or detail for this task</div>
            <div class="card-body">
                <form action="/tasks/{{ $task->id }}" method="POST">
                    @method('PATCH')
                    @csrf

                    <div class="form-group">
                        <input type="text" name="title" placeholder="Title" class="form-control @error('title') is-invalid @enderror" value="{{ $task->title }}">
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <textarea name="description" placeholder="Description" cols="5" rows="5" class="form-control @error('description') is-invalid @enderror">{{ $task->description }}</textarea>
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success">Update Task</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
