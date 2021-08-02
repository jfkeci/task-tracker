@extends('layouts.app')

@section('content')

    <h1>New Category</h1>

    <hr>

    {!! Form::open(['action' => 'App\Http\Controllers\CategoriesController@store', 'method' => 'POST']) !!}

    <div class="form-group">
        {{ Form::label('category', 'Category') }}
        {{ Form::text('category', '', ['class' => 'form-control', 'placeholder' => 'Category']) }}
    </div>

    {{ Form::submit('Add', ['class' => 'btn btn-primary']) }}

    {!! Form::close() !!}

    <hr>

@endsection
