@extends('layouts.app')

@section('content')
    <h1>Items</h1>

    <a href="/items/create" class="btn btn-primary">Add item</a>
    <br></br>

    @if(count($items)>0)

        <ul class = "list-group">
        @foreach($items as $item)

                <div class="card card-block bg-faded p-3">
                    <h3><a href="/items/{{$item->id}}" class="nounderline">{{$item->Name}}</a></h3>
                    <small>Valid from{{$item->created_at}}</small>
                </div><br>

            @endforeach
        </ul>
        <br>
        {{$items->links()}}
    @else
    <p>Oops! No items found</p>
    @endif
@endsection
