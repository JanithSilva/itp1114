@extends('layouts.app')

@section('content')
    <h1>Edit Item</h1>
    <br>

    {!! Form::open(['action' => ['ItemsController@update', $item->id], 'method' => 'POST']) !!}

    <div class = "form-group">
        {{form::label('Name', 'Name')}}
        {{form::text('Name', $item->Name, ['class' => 'form-control', 'placeholder' => 'Title', 'required'])}}

    </div>

    <div class = "form-group">
        {{form::label('body', 'Body')}}
        {{form::textarea('body', $item->body, ['class' => 'form-control', 'placeholder' => 'Body Text', 'required'])}}

    </div>

    {{form::hidden('_method', 'PUT')}}
    {{form::submit('Submit', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}

@endsection
