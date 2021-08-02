@extends('layouts.app')

@section('content')
    <h1>Categories</h1>

    @if (count($categories) > 0)
        <div class="card">
            <ul class="list-group list-group-flash">
                @foreach ($categories as $category)
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-12">
                                <a href="/categories/{{ $category->id }}">
                                    <h3>{{ $category->name }}</h3>
                                </a>
                                <small>{{ $category->created_at }}</small>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    @else
        <h3>No categories</h3>
        <a href="/categories/create" class="btn btn-primary">Create category</a>
    @endif
@endsection
