@extends('layouts.app')

@section('content')
    <h1>Tasks</h1>

    @if (count($tasks) > 0)
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
    @endif
@endsection
