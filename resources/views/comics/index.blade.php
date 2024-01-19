@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>List of Comics </h1>
        <div class="text-end">
            <a class="btn btn-primary" href="{{ route('comics.create')}}">New Comic Book</a>
        </div>

        {{-- message to warn that the comic has been deleted --}}
        @if (Session::has('message'))
            <div class="alert alert-success">
                {{ Session::get('message') }}
            </div> 
        @endif
        
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
                            {{-- button for more details --}}
                            <a class="btn btn-success" href="{{route('comics.show' , ['comic' => $comic->id]) }}" > Details <i class="fa-solid fa-file-lines"></i> </a>
                            {{-- button for edit the selected comic --}}
                            <a class="btn btn-warning" href="{{route('comics.edit' , ['comic' => $comic->id]) }}"> Edit <i class="fa-solid fa-file-signature"></i> </a>
                            <form action="{{ route('comics.destroy', ['comic' => $comic->id])}}" class="d-inline-block" method="POST">
                                @csrf
                                @method('DELETE')
                                {{-- button for cancel the selected comic --}}
                                <button class="btn btn-danger" type="submit"> Delete <i class="fa-solid fa-trash"></i> </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection