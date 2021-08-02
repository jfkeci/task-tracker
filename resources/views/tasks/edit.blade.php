@extends('layouts.app')

@section('content')
    <h1>Edit Task</h1>

    {!! Form::open(['action' => ['App\Http\Controllers\TasksController@update', $task->id], 'method' => 'POST']) !!}

    <div class="form-group">
        <label for="category">Category: </label>
        <select name="category" id="category" class="form-select form-select-lg mb-3">
            @if (count($categories) > 0)
                @foreach ($categories as $category)
                    @if ($category->id === $task->category_id)
                        <option selected value="{{ $category->id }}">{{ $category->name }}</option>
                    @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                @endforeach
            @endif

        </select>
    </div>
    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', $task->title, ['class' => 'form-control', 'placeholder' => 'Title']) }}
    </div>

    {{ Form::hidden('_method', 'PUT') }}

    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}

    {!! Form::close() !!}

@endsection
