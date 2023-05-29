@extends('layouts/app')

@section('content')

<div class="edit">

  
  
    <h1 class="pt-4 text-uppercase text-center">modifica il testo</h1>
    
      
    <form action="{{route('projects.store')}}" method="POST">
      @csrf
      
      <div class="mb-5">
        <label class="text-uppercase" for="name">nome del testo da modificare</label>
        <input type="text" name="name" id="name" class="form-control ">
      </div>

      <div class="mb-3">
        <label class="text-uppercase" for="description">inserisci le modifiche</label>
          <textarea type="text" name="description" id="description" class="form-control"></textarea>
        </div>
      
        <button class="text-uppercase btn-btn-primary rounded  " type="submit">modifica</button>
        
      </form>
      
  </div>
  
  @endsection