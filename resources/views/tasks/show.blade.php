@extends('layouts.app')

@section('content')

    <a class="btn btn-default" href="/tasks">Go back</a>

    <br>
    <br>
    <div class="col-md-12">
        <h1>{{ $task->title }}</h1>
        <p>Category: <a
                href="/categories/{{ $task->category_id }}">{{ App\Models\Category::find($task->category_id)->name }}</a>
        </p>
        <hr>
        <small>Created: {{ $task->created_at }}</small>
    </div>
    <hr>

    <a href="/tasks/{{ $task->id }}/edit" class="btn btn-default"> Edit </a>
    {!! Form::open(['action' => ['App\Http\Controllers\TasksController@destroy', $task->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
    {!! Form::close() !!}

    <hr>

@endsection
