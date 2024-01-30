@extends('layouts.app')

@section('content')


    
    
        
        

<div class=bluBand>
    <img class="imgSolo" src="{{ $comic["thumb"] }}" alt="">  
</div>
<h3>{{strtoupper($comic["title"])}}</h3>
<h2> {{$comic ['title'] }}<h2>
<p> {{$comic ['description'] }}<p>
<p> {{$comic ['thumb'] }}<p>
<p> {{$comic ['price'] }}<p>
<p> {{$comic ['series'] }}<p>
<p> {{$comic ['sale_date'] }}<p>
<p> {{$comic ['type'] }}<p>
        
        
<a href="{{ route('comics.edit' , $comic->id)}}">
     <h2>change</h2>
</a>

    
    
@include('partials.prodotti')

@endsection

<style>
.imgSolo{
    width:10vw;
    position:absolute;
    bottom:1.5rem;
    left:5rem;
}

.bluBand{
    height: 3rem;
    position: relative;
    background-color: rgb(21, 169, 255)
    
}


</style>    