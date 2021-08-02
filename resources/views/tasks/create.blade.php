@extends('layouts.app')

@section('content')

    <h1>New Task</h1>

    <hr>

    {!! Form::open(['action' => 'App\Http\Controllers\TasksController@store', 'method' => 'POST']) !!}

    <div class="form-group">
        @if (count($categories) > 0)
            <select name="category" id="category" class="form-select form-select-lg mb-3">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        @else
            <h3>No categories</h3>
            <a href="/categories/create" class="btn btn-primary">Create category</a>
        @endif

    </div>

    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Task']) }}
    </div>

    <input type="date" name="date_time" id="date_time">

    {{ Form::submit('Add', ['class' => 'btn btn-primary']) }}

    {!! Form::close() !!}

    <hr>

@endsection
