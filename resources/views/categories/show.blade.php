@extends('layouts.app')

@section('content')

    <a class="btn btn-default" href="/categories">Go back</a>

    <br>
    <br>
    <div class="col-md-12">
        <h1>{{ $category->name }}</h1>
        <small>Created: {{ $category->created_at }}</small>
    </div>
    <hr>

    <a href="/categories/{{ $category->id }}/edit" class="btn btn-default"> Edit </a>
    {!! Form::open(['action' => ['App\Http\Controllers\CategoriesController@destroy', $category->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
    {!! Form::close() !!}

    <hr>

    @if (count($tasks) > 0)
        <h1>Tasks in this category</h1>
        <div class="card">
            <ul class="list-group list-group-flash">
                @foreach ($tasks as $task)
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-12">
                                <a href="/tasks/{{ $task->id }}">
                                    <h3>{{ $task->title }}</h3>
                                </a>
                                <small>{{ $task->date_time }}</small>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    @else
        <h3>No tasks</h3>
        <a href="/tasks/create" class="btn btn-primary">Create task</a>
    @endif


@endsection
