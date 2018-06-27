@extends('layouts.app')

@section('content')

    <a href="/items" class="btn btn-success">Back</a>
    <br></br>

    <h1>{{$item -> Name}}</h1>
    <small>Offer Valid from : {{$item -> created_at}}</small>

    <hr>
    <div>
        Dealer : {{$item -> body}}
    </div>
    <hr>
    <br>


    {!!Form::open(['action' => ['ItemsController@destroy', $item->id], 'method' => 'POST' ,'class' => 'pull-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}

    <a href="/items/{{$item -> id}}/edit" class="btn btn-warning">Edit</a>

    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}


@endsection
