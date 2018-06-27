@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="panel-body">
                        <h2>Your Items</h2>

                        @if(count($items)>0)

                        <table class="table table-striped">
                            <tr>
                                <th>Name</th>
                                <th></th>
                                <th></th>
                            </tr>


                            @foreach($items as $item)
                            <tr>
                                <th>{{$item->Name}}</th>
                                <th><a href="/items/{{$item->id}}/edit" class="btn btn-primary">Edit</a></th>

                            </tr>
                            @endforeach
                        </table>

                            @endif


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
