@extends('layouts.app')

@section('content')
    <h1>Create Item</h1>
    <br>

    {!! Form::open(['action' => 'ItemsController@store', 'method' => 'POST']) !!}

        <div class = "form-group">
            {{Form::label('Name', 'Name')}}
            {{Form::text('Name', '', ['class' => 'form-control', 'placeholder' => 'Title', 'required'])}}

        </div>

        <div class = "form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body Text', 'required'])}}

        </div>

        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}

@endsection
