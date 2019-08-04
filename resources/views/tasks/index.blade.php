@extends('layouts.app')

@section('title')
    Todo List
@endsection

@section('content')
    <h1 class="text-center my-5">TO DO LIST PAGE</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">
                    To Do List
                </div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach ($tasks as $task)
                            <li class="list-group-item">
                                {{ $task->name }}
                                <a href="/tasks/{{ $task->id }}" class="btn btn-primary btn-sm float-right">View</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </div>
@endsection
