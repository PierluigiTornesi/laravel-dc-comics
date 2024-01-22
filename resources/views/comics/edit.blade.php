@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h2>Comic to edit : {{ $comic->title}}</h2>

        <div class="row justify-content-center mt-5">
            <div class="col-6">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error}}</li>
                        @endforeach
                    </div>
                @endif

                <form action=" {{ route('comics.update', ['comic' => $comic->id])}}" method="POST">
                    {{-- security token --}}
                    @csrf
                    {{-- change the form method --}}
                    @method('PUT')

                    {{-- title input --}}
                    <div class="mb-3">
                        <label for="title" class="form-label"><strong>Title</strong></label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $comic->title)}}">
                    </div>

                    {{-- series input --}}
                    <div class="mb-3">
                        <label for="series" class="form-label"><strong>Series</strong></label>
                        <input type="text" class="form-control" id="series" name="series" value="{{ old('series', $comic->series)}}">
                    </div>

                    {{-- sale_date input --}}
                    <div class="mb-3">
                        <label for="sale_date" class="form-label"><strong>Sale Date (Y-m-d) </strong></label>
                        <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date', $comic->sale_date)}}">
                    </div>

                    {{-- thumb input --}}
                    <div class="mb-3">
                        <label for="thumb" class="form-label"><strong>Thumb Image</strong></label>
                        <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb', $comic->thumb)}}">
                    </div>

                    {{-- price input --}}
                    <div class="mb-3">
                        <label for="price" class="form-label"><strong>Price</strong></label>
                        <input type="text" class="form-control" id="price" name="price" value="{{ old('price', $comic->price)}}">
                    </div>

                    {{-- type input --}}
                    <div class="mb-3">
                        <label for="type" class="form-label"><strong>Type</strong></label>
                        <select class="form-select" name="type">
                            <option @selected( old('type', $comic->type)  === 'graphic novel') value="graphic novel">Graphic Novel</option>
                            <option @selected( old('type', $comic->type) === 'comic book')  value="comic book">Comic Book</option>
                        </select>
                    </div>

                    {{-- description input --}}
                    <div class="mb-3">
                        <label for="description" class="form-label"><strong>Description</strong></label>
                        <textarea class="form-control" id="description" rows="3" name="description" > {{ old('description', $comic->description)}}</textarea>
                    </div>

                    {{-- buttonf for edit the selected comic --}}
                    <button class="btn btn-warning" type="submit">Save the changes</button>
                </form>
            </div>
        </div>
    </div>
@endsection