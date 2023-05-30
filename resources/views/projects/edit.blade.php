@extends('layouts/app')

@section('content')

<div class="edit">


    <div class="container">

      
      
    
      <h1 class="pt-4 text-uppercase text-center">modifica il testo</h1>
      
        
    
        
        <div class="mb-5">
          <label class="text-uppercase" for="name">nome del testo da modificare</label>
          <input type="text" name="name" id="name" class="form-control ">
        </div>

        <div class="mb-3">
          <label class="text-uppercase" for="description">inserisci le modifiche</label>
            <textarea type="text" name="description" id="description" class="form-control"></textarea>
          </div>
        
          <button class="text-uppercase btn-btn-primary rounded  " type="submit">modifica</button>
        

        <div class="form-check">
          @foreach ($technologies as $technology)
          <input id="technology_{{$technology->id}}" name="technologies[]" type="checkbox">
          <label for="technology_{{$technology->id}}"> {{$technology->name}} </label>
          @endforeach
              
      </div>
      
    </div>
  </div>
  
  @endsection