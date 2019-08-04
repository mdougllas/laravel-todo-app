@extends('layouts.app')

@section('title')
    {{ $task->name }}
@endsection

@section('content')
    <h1 class="text-center my-5">
        {{ $task->name }}
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

        </div>
    </div>
@endsection
