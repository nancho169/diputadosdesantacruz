@extends('welcome')

@section('content')
<div class="b-example-divider"></div>

    <h1>Firmantes</h1>
    <hr>

 

    <div class="table-responsive bg-body-secondary">
        <table class="table table-bordered table-striped table-hover" id="tabla_firmantes">
            <thead>
                <tr>
                    
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Tipo</th>
                    <th>Acciones</th>
                   
                </tr>
            </thead>
            <tbody>
                @foreach ($datos as $dato)
                        <tr >
                            
                            <td>
                                {{ $dato->NOMBRES}}
                            </td>
                            <td>
                                {{ $dato->DESCRIPCION}}
                            </td>
                            <td>
                                {{ $dato->ST_TIPOD}}
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $dato->ID}}" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                                      </svg>
                                  </button>
                                  <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{ $dato->ID}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel"> {{ $dato->NOMBRES}}</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <!-- col1 -->
                                                    <div class="col-mb-12 col-md-12">
                                                          <div class="card mb-3" style="max-width: 540px;">
                                                            <div class="row g-0">
                                                                <div class="col-md-4">
                                                                <img src="http://172.22.1.191:8001/img/firmantes/dipu.png" class="img-fluid rounded-start" alt="...">
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title">{{ $dato->DESCRIPCION}}</h5>
                                                                            <ul style="width:100%;">
                                                                                <li > <b>Bloque:</b>  {{ $dato->ST_BLOQUE}}</li>
                                                                                <li ><b>Periodo:</b> {{ $dato->TERMINA}}</li>
                                                                                <li ><b>Localidad:</b>  {{ $dato->LOCALIDAD}}</li>
                                                                            </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                                            <button type="button" class="btn btn-primary">Ver ficha completa</button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                            </td>
                          
                        </tr>
                        

                @endforeach
            </tbody>
        </table>
    </div>
    <hr>


    <div id="resultado">
    </div>

    <script>
        $(document).ready( function () {
            
            /*$('#tabla_proyectos').DataTable({
              order: [[1, 'desc']]
            });*/
  
            let table = new DataTable('#tabla_firmantes', {
               
                responsive: true,
                "language": {
                "url":"{{ asset('Spanish.json') }}"
            },
            
            dom: 'Bfrtip',
                buttons: [
                    'csvHtml5',
                    'excelHtml5',
                    'pdfHtml5'
                ],
                order: [[1, 'asc']]        
                
            });

            
          });

          function muestra_ficha_firmante(){

            alert('muestra firmante ');

          }
  </script>
@endsection



