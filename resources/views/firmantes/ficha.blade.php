@extends('welcome')

@section('content')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    
    
    <p class="d-inline-flex gap-1">
  
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            <h3 class="border-bottom pb-2 mb-0">Firmantes</h3>
         </button>
    </p>
    <div class="collapse" id="collapseExample">
  
  
  


    <div class="">
    

      <table id="tabla_firmantes" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Imagen</th>
                    <th>Ape. Nom.</th>
                <th>Periodo</th>
                <th>Bloque</th>
                <th>Localidad</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
       
        </tbody>
    </table>

    <hr>
   

    </div>

    </div>
    
  </div>

@endsection