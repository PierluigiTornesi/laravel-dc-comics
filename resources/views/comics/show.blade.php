@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                {{-- comic title --}}
                <h2>{{ $comic->title}}</h2>
                {{-- comic series --}}
                <strong>Series : </strong><h6>{{$comic->series}}</h6>
                {{-- comic type --}}
                <strong>Type : </strong><h6>{{$comic->type}}</h6>
                {{-- comic description --}}
                <strong>Description : </strong><p>{{$comic->description}}</p> 
                {{-- comic sale_date --}}
                <strong>Sale Date : </strong><p>{{$comic->sale_date}}</p>
                {{-- comic price --}}
                <strong>Price : </strong><p>{{$comic->price}}</p>
            </div>
            <div class="col">
                {{-- comic image --}}
                <img src="{{ $comic->thumb}}" alt="{{ $comic->title}}">  
            </div>
        </div>
    </div>
@endsection