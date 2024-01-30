@extends('layouts.app')

@section('content')

<div class="formContainer">
    
    <h2>Modifica 
        fumetto</h2>

    @if ($errors->any())
        <div class="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    
    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="formLine">
            <label for="title" class="form-label">title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{$comic->title}}">
            @error('title')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="formLine">
            <label for="description" class="form-label">description</label>
            <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description"  rows="5">"{{$comic->description}}"</textarea>
            @error('description')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="formLine">
            <label for="thumb" class="form-label">thumb</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{$comic->thumb}}">
            @error('thumb')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="formLine">
            <label for="price" class="form-label">price</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{$comic->price}}">
            @error('price')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="formLine">
            <label for="series" class="form-label">series</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{$comic->series}}">
            @error('series')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="formLine">
            <label for="sale_date" class="form-label">sale_date</label>
            <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
            @error('sale_date')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="formLine">
            <label for="type" class="form-label">type</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{$comic->type}}">
            @error('type')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <button class="btn" type="submit">Modifica</button>
    </form>

    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <input class="btnDelete" type="submit" value="Cancella" >
    </form>
    
</div>



@endsection