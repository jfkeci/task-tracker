@extends('layouts.app')

@section('content')

    <h1>New Task</h1>

    <hr>




    @if (count($categories) > 0)
        {!! Form::open(['action' => 'App\Http\Controllers\TasksController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            <select name="category" id="category" class="form-select form-select-lg mb-3">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Task']) }}
        </div>

        <input type="date" name="date_time" id="date_time">

        {{ Form::submit('Add', ['class' => 'btn btn-primary']) }}

        {!! Form::close() !!}

        <hr>
    @else
        <h3>No categories</h3>
        <p>Create a category to create a task</p>
        <a href="/categories/create" class="btn btn-primary">Create category</a>
    @endif





@endsection
