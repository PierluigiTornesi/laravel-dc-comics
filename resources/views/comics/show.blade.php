@extends('layouts.app');

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>{{ $comic->title}}</h2>
                <strong>Series : </strong><h6>{{$comic->series}}</h6>
                <strong>Type : </strong><h6>{{$comic->type}}</h6>
                <strong>Description : </strong><p>{{$comic->description}}</p> 
                <strong>Sale Date : </strong><p>{{$comic->sale_date}}</p>
                <strong>Price : </strong><p>{{$comic->price}}</p>
            </div>
            <div class="col">
                <img src="{{ $comic->thumb}}" alt="{{ $comic->title}}">  
            </div>
        </div>
    </div>
@endsection