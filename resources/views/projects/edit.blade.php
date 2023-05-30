@extends('layouts/app')

@section('content')

<div class="edit">


    <div class="container">

      <form method="POST" action="{{ route('projects.store') }}">
        @csrf

      
      
    
      <h1 class="pt-4 text-uppercase text-center">modifica il testo</h1>
      
        
    
        
        <div class="mb-5">
          <label class="text-uppercase" for="title">nome del testo da modificare</label>
          <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"  value="{{old('title')}}">

                @error('title')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
        </div>

        <div class="mb-3">
          <label class="text-uppercase" for="description">inserisci le modifiche</label>
            <textarea type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror" value="{{old('description')}}"></textarea>

            @error('description')
                    <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>
        
        

          <div class="form-check">
            @foreach ($technologies as $technology)
            <input id="technology_{{$technology->id}}" name="technologies[]" value="{{$technology->id}}" type="checkbox">
            <label for="technology_{{$technology->id}}"> {{$technology->name}} </label>
            @endforeach
                
          </div>
          
          <button class="text-uppercase btn-btn-primary rounded  " type="submit">modifica</button>

      </form>
    </div>
  </div>
  
  @endsection