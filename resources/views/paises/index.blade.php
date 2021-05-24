@extends('layouts.plantilla')
@section('titlePage','Paises')
@section('contenido')


<h1 class="text-light">Paises intervinientes</h1>
 
<table class="table table-bordered bg-light p-2" id="tableBusquedas">
  <thead>
    <tr>
        <th class="text-center">Pais</th>
        <th class="text-center">Futbolistas</th>
    </tr>
  </thead>
  <tbody>
    {{-- @foreach($paises as $pais)
        <tr>
            <td class="text-center">{{ $pais->nombre}}</td>
            <td class="text-center">
                <a href="{{ route('paises.show', $pais->idPais) }}" class="btn btn-secondary">Ver Futbolistas</a>
 
            </td> 
        </tr>
    @endforeach --}}
  </tbody>
  
</table>
@endsection