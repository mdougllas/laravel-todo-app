@extends('layouts.app')

@section('content')
<h1 class="text-center">Create Task</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">Create new Task</div>
            <div class="card-body">
                <form action="create-task" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="title" placeholder="Title" class="form-control">
                    </div>
                    <div class="form-group">
                        <textarea name="description" placeholder="Description" cols="5" rows="5" class="form-control"></textarea>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success">Create Task</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
