@extends('welcome')

@section('content')
<div class="b-example-divider"></div>

    <h1>Proyectos</h1>
   <hr>
    <div class="table-responsive bg-body-secondary">

        
        <table class="table table-bordered table-striped table-hover" id="tabla_proyectos">
            <thead>
                <tr>
                    <th>Proyecto</th>
                    <th>Anio</th>
                    <th>Bloque</th>
                    <th>Tipo</th>
                    <th>Autor</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($datos as $dato)
                        <tr>
                            <td>
                                {{ $dato->PROYECTO}}
                            </td>
                            <td>
                                {{ $dato->ANIO}}
                            </td>
                            <td>
                                {{ $dato->BLOQUE}}
                            </td>
                            <td>
                                {{ $dato->TIPO}}
                            </td>
                            <td>
                                {{ $dato->AUTOR}}
                            </td>
                        </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <hr>

    <script>
        $(document).ready( function () {
            
            /*$('#tabla_proyectos').DataTable({
              order: [[1, 'desc']]
            });*/
  
            let table = new DataTable('#tabla_proyectos', {
               
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
  </script>
@endsection