@extends('layouts.app')

@section('content')

    <h1>New Task</h1>

    <hr>

    {!! Form::open(['action' => 'App\Http\Controllers\TasksController@store', 'method' => 'POST']) !!}

    <div class="form-group">
        {{ Form::label('task', 'Task') }}
        {{ Form::text('task', '', ['class' => 'form-control', 'placeholder' => 'Task']) }}
    </div>

    <input type="date" name="date_time" id="date_time">

    {{ Form::submit('Add', ['class' => 'btn btn-primary']) }}

    {!! Form::close() !!}

    <hr>

@endsection
