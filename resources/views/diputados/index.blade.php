@extends('welcome')

@section('content')
<style>
  
    .hemiciclo {
        position: relative;
        width: 100%;
        max-width: 900px;
        height: 500px; /* Altura ajustada para semicírculo */
        overflow: hidden;
        margin: 0 auto;
        
        
    }
    .silla {
        position: absolute;
        width: 80px;
        height: 80px;
        background: #a8d5ffc7;
        border-radius: 50%;
        box-shadow: 3px 3px 3px 3px rgba(0, 0, 0, 0.521);
        margin-top: -20%;

    }
    .silla_par1 {
        position: absolute;
        width: 80px;
        height: 80px;
        background: #044a8bd7;
        border-radius: 50%;
        box-shadow: 3px 3px 3px 3px rgba(0, 0, 0, 0.521);
        margin-top: -20%;
        margin-left: -5%;

        
    }
    .silla_par2 {
        position: absolute;
        width: 80px;
        height: 80px;
        background: #b13b2bdc;
        border-radius: 50%;
        box-shadow: 3px 3px 3px 3px rgba(0, 0, 0, 0.521);
        margin-top: -20%;
        margin-left: -5%;

    }
    .silla_par3 {
        position: absolute;
        width: 80px;
        height: 80px;
        background: #1f791fe0;
        border-radius: 50%;
        box-shadow: 3px 3px 3px 3px rgba(0, 0, 0, 0.521);
        margin-top: -20%;
        margin-left: -5%;

    }
    @media (max-width: 600px) {
        .silla {
            width: 40px;
            height: 40px;
        }
        .silla_par1 {
            width: 40px;
            height: 40px;
        }
        .silla_par2 {
            width: 40px;
            height: 40px;
        }
        .silla_par3 {
            width: 40px;
            height: 40px;
        }
    }
</style>

    
<main style="background-color: white;">
    <svg class=""  width="100%" height="100%"
    xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice"
    focusable="false" style="z-index:50;">
                <rect style="z-index:60;" width="100%" style="z-index:50;" height="5%" fill="var(--bs-secondary-color)"  />
                <text style="z-index:100; font-size: 10px;" x="90%" y="3%" alignment-baseline="middle" text-anchor="end" fill="white" >CONTACTO  |  SUSCRIBITE</text>    
    </svg>
    <div class="" style="width: 100%; margin:0 auto; ">
        <br><br><br><br>
        <h1 style="text-align: center;">REPRESENTANTES</h1>
    
    <br>    
        <div class="hemiciclo">
            <!-- Las sillas se generarán aquí -->
        </div>
        
    </div>

    <!-- DIPUTADOS POR DISTRITO-->
    <div class="card" style="width: 80%; margin: 0 auto;">
        <div class="card-header"  style="background-color: #2CABB1; text-align:center; color: white;">
            DIPUTADOS POR DISTRITO
        </div>
        <div class="card-body">
            <!-- corousel dentro de card -->
            <div id="carouselExample" class="carousel slide" style="height: 150px;">
                <div class="carousel-inner">
                    <!-- PRIMERI SLIDER-->
                  <div class="carousel-item active">
                    <div class="row" >
                        <div class="col-sm-1 col-md-2 col-lg-2" style="margin: 0 auto;">
                                <div class="card" style=" border: 0px;">
                                <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                                <div class="card-body">
                                <h5 class="card-title" style="text-align: center;"> Diego Castro <br> Secretario General</h5>
                                
                                </div>
                                </div>
                        </div>
                        <div class="col-sm-1 col-md-2 col-lg-2" style="margin: 0 auto;" >
                            <div class="card" style=" border: 0px;">
                            <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                            <div class="card-body">
                            <h5 class="card-title" style="text-align: center;"> Diego Castro <br> Secretario General</h5>
                            
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-1 col-md-2 col-lg-2" style="margin: 0 auto;">
                            <div class="card" style=" border: 0px;">
                            <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                            <div class="card-body">
                            <h5 class="card-title" style="text-align: center;"> Diego Castro <br> Secretario General</h5>
                            
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-1 col-md-2 col-lg-2" style="margin: 0 auto;">
                            <div class="card" style="border: 0px;">
                            <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                            <div class="card-body">
                            <h5 class="card-title" style="text-align: center;"> Diego Castro <br> Secretario General</h5>
                            
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-1 col-md-2 col-lg-2" style="margin: 0 auto;">
                            <div class="card" style=" border: 0px;">
                            <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                            <div class="card-body">
                            <h5 class="card-title" style="text-align: center;"> Diego Castro <br> Secretario General</h5>
                            
                            </div>
                            </div>
                    </div>
                    </div>

                  </div>
                    <!-- SEGUNDO SLIDER-->
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col">
                                    <div class="card" style=" border: 0px;">
                                    <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                                    <div class="card-body">
                                    <h5 class="card-title" style="text-align: center;"> Diego Castro <br> Secretario General</h5>
                                    
                                    </div>
                                    </div>
                            </div>
                            <div class="col">
                                <div class="card" style=" border: 0px;">
                                <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                                <div class="card-body">
                                <h5 class="card-title" style="text-align: center;"> Diego Castro <br> Secretario General</h5>
                                
                                </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" style=" border: 0px;">
                                <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                                <div class="card-body">
                                <h5 class="card-title" style="text-align: center;"> Diego Castro <br> Secretario General</h5>
                                
                                </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" style="border: 0px;">
                                <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                                <div class="card-body">
                                <h5 class="card-title" style="text-align: center;"> Diego Castro <br> Secretario General</h5>
                                
                                </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" style=" border: 0px;">
                                <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                                <div class="card-body">
                                <h5 class="card-title" style="text-align: center;"> Diego Castro <br> Secretario General</h5>
                                
                                </div>
                                </div>
                        </div>
                        </div>
    
                      </div>
                    <!-- TERCER SLIDER-->
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col">
                                    <div class="card" style=" border: 0px;">
                                    <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                                    <div class="card-body">
                                    <h5 class="card-title" style="text-align: center;"> Diego Castro <br> Secretario General</h5>
                                    
                                    </div>
                                    </div>
                            </div>
                            <div class="col">
                                <div class="card" style=" border: 0px;">
                                <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                                <div class="card-body">
                                <h5 class="card-title" style="text-align: center;"> Diego Castro <br> Secretario General</h5>
                                
                                </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" style=" border: 0px;">
                                <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                                <div class="card-body">
                                <h5 class="card-title" style="text-align: center;"> Diego Castro <br> Secretario General</h5>
                                
                                </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" style="border: 0px;">
                                <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                                <div class="card-body">
                                <h5 class="card-title" style="text-align: center;"> Diego Castro <br> Secretario General</h5>
                                
                                </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" style=" border: 0px;">
                                <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                                <div class="card-body">
                                <h5 class="card-title" style="text-align: center;"> Diego Castro <br> Secretario General</h5>
                                
                                </div>
                                </div>
                        </div>
                        </div>
    
                      </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" style="background-color: black; margin-left: -150px;"  aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" style="background-color: black; margin-right: -150px;" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              <!-- Fin carousel interno-->
        </div>
      </div>
      <!-- FIN DIPUTADOS POR DISTRITO-->
      <br>


      <!-- DIPUTADOS POR EL PUEBLO-->
    <div class="card" style="width: 80%;  margin: 0 auto;">
        <div class="card-header"  style="background-color: #19537E; text-align:center; color: white;">
            DIPUTADOS POR EL PRUEBLO
        </div>
        <div class="card-body" >
            <!-- corousel dentro de card -->
            <div id="carouselExample" class="carousel slide" style="height: 150px;">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">
                        <div class="col">
                                <div class="card" style=" border: 0px;">
                                <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                                <div class="card-body">
                                <h5 class="card-title" style="text-align: center;"> Diego Castro <br> Secretario General</h5>
                                
                                </div>
                                </div>
                        </div>
                        <div class="col">
                            <div class="card" style=" border: 0px;">
                            <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                            <div class="card-body">
                            <h5 class="card-title" style="text-align: center;"> Diego Castro <br> Secretario General</h5>
                            
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style=" border: 0px;">
                            <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                            <div class="card-body">
                            <h5 class="card-title" style="text-align: center;"> Diego Castro <br> Secretario General</h5>
                            
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="border: 0px;">
                            <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                            <div class="card-body">
                            <h5 class="card-title" style="text-align: center;"> Diego Castro <br> Secretario General</h5>
                            
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style=" border: 0px;">
                            <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                            <div class="card-body">
                            <h5 class="card-title" style="text-align: center;"> Diego Castro <br> Secretario General</h5>
                            
                            </div>
                            </div>
                    </div>
                    </div>



                  </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                    </div>
                  <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" style="background-color: black; margin-left: -150px;"  aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" style="background-color: black; margin-right: -150px;" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
              </div>
            
              <!-- Fin carousel interno-->
        </div>
      
      </div>
      <!-- DIPUTADOS POR EL PUEBLO-->
      <br>
</main>

    <script>

function hemiciclo(puestos,radio,estilo){
        const hemiciclo = document.querySelector('.hemiciclo');
        const totalSillas = puestos;
        const radius = radio; // Radio del semicírculo en px (ajustar según el tamaño del contenedor)

        for (let i = 0; i < totalSillas; i++) {
            const angle = Math.PI * i / (totalSillas - 1); // Ángulo en radianes
            const x = 50 + (radius * Math.cos(angle)) / hemiciclo.offsetWidth * 100;
            const y = 100 - (radius * Math.sin(angle)) / hemiciclo.offsetHeight * 100;

            const silla = document.createElement('div');
            silla.classList.add(estilo);
          
            silla.style.left = `${x}%`;
            silla.style.top = `${y}%`;

            hemiciclo.appendChild(silla);
        }
      }
      //hemiciclo(5,0,'silla');
      hemiciclo(5,120,"silla_par1");
      hemiciclo(8,230,'silla_par2');
      hemiciclo(11,320,'silla_par3');

      $('.silla').on('click',function (){
        alert("silla");
        
      });
      $('.silla_par1').on('click',function (){
        alert("silla_par1");
      });
      $('.silla_par2').on('click',function (){
        alert("silla_par2");
      });
      $('.silla_par3').on('click',function (){
        alert("silla_par3");
      });
    </script>
    <script>
        $(document).ready( function () {
            
            /*$('#tabla_proyectos').DataTable({
              order: [[1, 'desc']]
            });*/
  
            let table = new DataTable('#tabla_firmantes', {
               autoWidth:false,
                responsive: true,
                "language": {
                "url":"{{ asset('Spanish.json') }}"
            },
            
            
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



