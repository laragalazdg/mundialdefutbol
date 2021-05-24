@extends('layouts.plantilla')
@section('titlePage','Clubes')
@section('contenido')


<h1 class="text-light">Clubes intervinientes</h1>
 
<table class="table table-bordered bg-light p-2" id="tableBusquedas">
  <thead>
    <tr>
        <th class="text-center">Club</th>
        <th class="text-center">Ciudad</th>
        <th class="text-center">Jugadores</th>
    </tr>
  </thead>
  <tbody>
    {{-- @foreach($clubes as $club)
        <tr>
            <td class="text-center">{{ $club->nombre}}</td>
              <td class="text-center">{{ $club->ciudad}}</td>
            <td class="text-center">
                <a href="{{ route('clubes.show', $club->idClub) }}" class="btn btn-secondary">Más Detalles</a>
 
            </td> 
        </tr>
    @endforeach --}}
  </tbody>
  
</table>
@endsection