@extends('layouts.app')

@section('title')
    {{ $task->title }}
@endsection

@section('content')
    <h1 class="text-center my-5">
        {{ $task->title }}
    </h1>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header">
                    Details
                </div>

                <div class="card-body">
                    {{ $task->description }}
                </div>
            </div>

            <form action="/tasks/{{ $task->id }}" method="POST">
                @method('DELETE')
                @csrf
                <a href="/tasks/{{ $task->id }}/edit" class="btn btn-info btn-sm my-2">Edit</a>
                <button type="submit" class="btn btn-danger btn-sm">DELETE</button>
            </form>

        </div>
    </div>
@endsection
