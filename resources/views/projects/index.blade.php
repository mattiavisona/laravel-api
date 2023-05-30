@extends('layouts/app')

@section('content')

<h1>
    Progetti <a href="{{ route('projects.create') }}" class="btn btn-success pull-right">Crea nuovo + </a>
</h1>

<table>
    <thead>
        <th>Titolo</th>
        <th>Azioni</th>
    </thead>
@foreach ($projects as $project)
<tr>
    <td>
    {{ $project->title }}
</td>

<td>
    <div class="btn-group">
        <a href="{{ route('projects.edit', $project) }}" class="btn btn-primary">
            Modifica
        </a>
        <a href="" class="btn btn-danger">
            Elimina
        </a>
        
    </div>
</td>

</div>
    
@endforeach
</table>


<a href="{{ route('home') }}" class="btn btn-primary btn-lg" type="button">Torna alla home</a>
@endsection


