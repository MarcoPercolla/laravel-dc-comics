@extends('layouts.app')

@section('content')

<div class="formContainer">
    
    <h2>Nuovo fumetto</h2>
    
    
    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="formLine">
            <label for="title" class="form-label">title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="formLine">
            <label for="description" class="form-label">description</label>
            <textarea name="description" class="form-control" id="description"  rows="5"></textarea>
        </div>
        <div class="formLine">
            <label for="thumb" class="form-label">thumb</label>
            <input type="text" class="form-control" id="thumb" name="thumb">
        </div>
        <div class="formLine">
            <label for="price" class="form-label">price</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>
        <div class="formLine">
            <label for="series" class="form-label">series</label>
            <input type="text" class="form-control" id="series" name="series">
        </div>
        <div class="formLine">
            <label for="sale_date" class="form-label">sale_date</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date">
        </div>
        <div class="formLine">
            <label for="type" class="form-label">type</label>
            <input type="text" class="form-control" id="type" name="type">
        </div>
        <button type="submit" class="btn btn-primary">Inserisci</button>
    </form>
    
</div>



@endsection