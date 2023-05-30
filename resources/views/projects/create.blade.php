@extends('layouts/app')

@section('content')

<div class="create ">

    <div class="container">

        <h1 class="pt-4 text-uppercase text-center">aggiungi del testo</h1>
        
    
   
        
        
        <div class="mb-3">
            <label class="text-uppercase" for="name">nome</label>
            <input type="text" name="name" id="name" class="form-control ">
        </div>

        <div class="mb-3">
            <label class="text-uppercase" for="description">descrizione</label>
            <textarea type="text" name="description" id="description" class="form-control"></textarea>
        </div>
        
        <button class="text-uppercase btn-btn-primary rounded  " type="submit">aggiungi</button>

        <div class="mb-3 form-group">

            <h4>
                Tecnologie
            </h4>

            <div class="form-check">
                @foreach ($technologies as $technology)
                <input id="technology_{{$technology->id}}" name="technologies[]" type="checkbox">
                <label for="technology_{{$technology->id}}"> {{$technology->name}} </label>
                @endforeach
                    
            </div>
            
            
        </div>
    </div>
        
    
    
</div>
  
  
  @endsection