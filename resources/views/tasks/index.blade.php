@extends('layouts.app')

@section('content')


    @if (count($tasks) > 0)
        <h1>Tasks</h1>
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
