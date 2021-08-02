@extends('layouts.app')

@section('content')

    <h1>Edit Task</h1>

    <hr>

    {!! Form::open(['action' => 'App\Http\Controllers\TasksController@store', 'method' => 'POST']) !!}

    <div class="form-group">
        {{ Form::label('task', 'Task') }}
        {{ Form::text('task', '', ['class' => 'form-control', 'placeholder' => 'Task']) }}
    </div>

    {{ Form::submit('Add', ['class' => 'btn btn-primary']) }}

    {!! Form::close() !!}

    <hr>

@endsection
