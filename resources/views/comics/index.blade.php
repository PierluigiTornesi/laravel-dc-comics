@extends('layouts.app');

@section('content')
    <div class="container">
        <h1>List of Comics </h1>
        <div class="text-end">
            <a class="btn btn-primary" href="{{ route('comics.create')}}">New Comic Book</a>
        </div>
        
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Series</th>
                <th scope="col">Type</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->id}}</th>
                        <td>{{ $comic->title}}</td>
                        <td>{{ $comic->series}}</td>
                        <td>{{ $comic->type}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{route('comics.show' , ['comic' => $comic->id]) }}" > Details</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection