@extends('layouts.app')

@section('content')

<div class="formContainer">
    
    <h2>Nuovo fumetto</h2>

    @if ($errors->any())
        <div class="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        
        <div class="formLine">
            <label for="title" class="form-label">title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title">
            @error('title')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="formLine">
            <label for="description" class="form-label">description</label>
            <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description"  rows="5"></textarea>
            @error('description')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="formLine">
            <label for="thumb" class="form-label">thumb</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb">
            @error('thumb')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="formLine">
            <label for="price" class="form-label">price</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price">
            @error('price')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="formLine">
            <label for="series" class="form-label">series</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series">
            @error('series')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="formLine">
            <label for="sale_date" class="form-label">sale_date</label>
            <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date">
            @error('sale_date')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="formLine">
            <label for="type" class="form-label">type</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type">
            @error('type')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <button type="submit" class="btn">Inserisci</button>
    </form>
    
</div>



@endsection