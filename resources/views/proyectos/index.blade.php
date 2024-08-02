@extends('welcome')

@section('content')

<style>
    p {
         color:#19537E;
         font-size: 13px;
     }
 </style>
<main style="background-color: white;" >

    <svg class=""  width="100%" height="15%"
    xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice"
    focusable="false" style="z-index:50;">
                <rect style="z-index:60;" width="100%" style="z-index:50;" height="20px" fill="var(--bs-secondary-color)"  />
                <text style="z-index:100; font-size: 10px;" x="90%" y="11%" alignment-baseline="middle" text-anchor="end" fill="white" >CONTACTO  |  SUSCRIBITE</text>    
    </svg>
    <div class="" style="width: 100%; margin:0 auto;">
        
        <h1 style="text-align: center; color: #19537E; text-shadow: #9e9e9e 1px 0 5px;">PROYECTOS</h1>
    </div>
    <div style="max-width: fit-content;margin-left: 15%; margin-right: 10%; " >
   <p > Se denominan proyectos a las iniciativas legislativas de los Diputados ,Senadores y Poder Ejecutivo.
    Hay distintos tipos de proyectos:
    <br><br>
    <b >Proyectos de ley</b><br>
    Destinados a crear, modificar, sustituir o abrogar una ley, institución o norma de carácter general.
    <br><br>
    <b >Proyectos de resolución</b><br>
    Destinados a la adopción de medidas relativas a la composición u organización interna del cuerpo, las modificaciones del
    reglamento y, en general, de toda disposición de carácter imperativo que pueda adoptar la Cámara.
    <br><br>
    <b >Proyectos de declaración</b><br>
    Destinados a expresar una opinión del cuerpo sobre cualquier hecho de carácter público o privado, o manifestar la voluntad de que
    el Poder Ejecutivo practique algún acto en particular.</p>
    <br><br>
    </div> 
</main>
<main style="background-color: #E0E0E0; " >

    <h4 style="text-align: left; color: #19537E; text-shadow: #9e9e9e 1px 0 5px;">ÚLTIMAS NOTICIAS</h4>
</main>
@endsection 
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