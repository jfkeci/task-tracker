@extends('layouts.app')

@section('content')

    <a class="btn btn-default" href="/categories">Go back</a>

    <br>
    <br>
    <div class="col-md-12">
        <h1>{{ $category->name }}</h1>
        <hr>
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
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Tasks by Category: {{ $category->name }}</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <a href="/tasks/create" class="btn btn-primary">Create Task</a>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <h3>No tasks found for this category</h3>
    @endif


@endsection
