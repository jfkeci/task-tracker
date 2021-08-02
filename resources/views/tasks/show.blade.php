@extends('layouts.app')

@section('content')

    <a class="btn btn-default" href="/tasks">Go back</a>

    <br>
    <br>
    <div class="col-md-12">
        <h1>{{ $task->title }}</h1>
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

    {{-- @if (count($notes) > 0)
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Notes by Category: {{ $category->name }}</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <a href="/notes/create" class="btn btn-primary">Create Note</a>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <h3>No notes found for this category</h3>
    @endif --}}


@endsection
