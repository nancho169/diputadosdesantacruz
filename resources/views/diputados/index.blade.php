@extends('welcome')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

<style>
  .swiper {
  width: 100%;
  height: auto;
}
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
        .hemiciclo {
        position: relative;
        width: 100%;
        max-width: 500px;
        height: 500px; /* Altura ajustada para semicírculo */
        overflow: hidden;
        margin: 0 auto;
        
        
    }
        .silla {
            width: 20px;
            height: 20px;
        }
        .silla_par1 {
            width: 20px;
            height: 20px;
        }
        .silla_par2 {
            width: 20px;
            height: 20px;
        }
        .silla_par3 {
            width: 20px;
            height: 20px;
        }
    }
</style>

    
<main style="background-color: white;" >
    <svg class=""  width="100%" height="100%"
    xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice"
    focusable="false" style="z-index:50;">
                <rect style="z-index:60;" width="100%" style="z-index:50;" height="20px" fill="var(--bs-secondary-color)"  />
                <text style="z-index:100; font-size: 10px;" x="90%" y="7%" alignment-baseline="middle" text-anchor="end" fill="white" >CONTACTO  |  SUSCRIBITE</text>    
    </svg>
    <div class="" style="width: 100%; margin:0 auto; margin-top:-100px;">
        
        <h1 style="text-align: center;">REPRESENTANTES</h1>
    
    <br>    
        <div class="hemiciclo">
            <!-- Las sillas se generarán aquí -->
        </div>
        <!-- REFERENCIAS -->
  <div class="container-sm container-md" style="margin-top: -40px;">
    
    <div class="row" style="margin: 0 auto; ">
      <div class="col-md-4 col-sm-4" style=" margin: 0 auto;  text-align:center;">
         <span class="badge rounded-pill" style="background-color:#2cabb1;">11</span>
          POR SANTA CRUZ
       
      </div>
      <div class="col-md-4 col-sm-4" style="margin: 0 auto;  text-align:center;">
          <span class="badge rounded-pill " style="background-color: #e95271;">1</span>
          COALICIÓN CÍVICA ARI
      </div>
      <div class="col-md-4 col-sm-4" style="margin: 0 auto;  text-align:center;">
          <span class="badge rounded-pill " style="background-color: #43627a;">12</span>
          UNIÓN POR LA PATRIA
  
      </div>
    </div>
    </div>
    </div>
  

  <br>
    <!-- DIPUTADOS POR DISTRITO SE OCULTA CUANDO LA PANTALLA ES LG-->
    <div class="d-lg-none card" style="width: 80%; margin: 0 auto;">
        <div class="card-header"  style="background-color: #2CABB1; text-align:center; color: white;">
            
            DIPUTADOS POR DISTRITO
        </div>
        <div class="card-body">
            <!-- corousel dentro de card -->
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper" >
                  <!-- Slides -->
                  <div class="swiper-slide " >
                    <div class="overflow-auto">
                    <div class="row">
                        <div class="col-12 ">
                            <div class="card" style=" border: 0px; width: 16rem;">
                                <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                                <div class="card-body">
                                    <h5 class="card-title" style="text-align: center;"> <b>Diego Castro</b> <br> Secretario General</h5>
                                </div>
                            </div>
                        </div>
                     
                      
                      
                    </div>
                  </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="col-12 ">
                        <div class="card" style=" border: 0px; width: 16rem;">
                            <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                            <div class="card-body">
                                <h5 class="card-title" style="text-align: center;"> <b>Diego Castro</b> <br> Secretario General</h5>
                            </div>
                        </div>
                    </div>
                 
                  </div>
                  <div class="swiper-slide">
                    <div class="col-12 ">
                        <div class="card" style=" border: 0px; width: 16rem;">
                            <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                            <div class="card-body">
                                <h5 class="card-title" style="text-align: center;"> <b>Diego Castro</b> <br> Secretario General</h5>
                            </div>
                        </div>
                    </div>
                 
                  </div>
                  <div class="swiper-slide">
                    <div class="col-12 ">
                        <div class="card" style=" border: 0px; width: 16rem;">
                            <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                            <div class="card-body">
                                <h5 class="card-title" style="text-align: center;"> <b>Diego Castro</b> <br> Secretario General</h5>
                            </div>
                        </div>
                    </div>
                 
                  </div>
                  <div class="swiper-slide">
                    <div class="col-12 ">
                        <div class="card" style=" border: 0px; width: 16rem;">
                            <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                            <div class="card-body">
                                <h5 class="card-title" style="text-align: center;"> <b>Diego Castro</b> <br> Secretario General</h5>
                            </div>
                        </div>
                    </div>
                 
                  </div>
                  <div class="swiper-slide">
                    <div class="col-12 ">
                        <div class="card" style=" border: 0px; width: 16rem;">
                            <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                            <div class="card-body">
                                <h5 class="card-title" style="text-align: center;"> <b>Diego Castro</b> <br> Secretario General</h5>
                            </div>
                        </div>
                    </div>
                 
                  </div>
                  
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
              
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
              
                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
              </div>
          
              <!-- Fin carousel interno-->
            
             
        </div>
      
    </div>
      
      <!-- FIN DIPUTADOS POR DISTRITO-->
      <!-- DIPUTADOS POR DISTRITO SE MUESTRA CUANDO LA PANTALLA ES LG-->
    <div class="d-none d-lg-block card" style="width: 80%; margin: 0 auto;">
        <div class="card-header"  style="background-color: #2CABB1; text-align:center; color: white;">
            
            DIPUTADOS POR DISTRITO
        </div>
        <div class="card-body">
            <!-- corousel dentro de card -->
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper" >
                  <!-- Slides -->
                  <div class="swiper-slide " >
                  
                    <div class="row">
                        <div class=" col-3 ">
                            <div class="card" style=" border: 0px; width: 12rem;">
                                <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                                <div class="card-body">
                                    <h5 class="card-title" style="text-align: center;"> <b>Diego Castro</b> <br> Secretario General</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card" style=" border: 0px; width: 12rem;">
                                <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                                <div class="card-body">
                                    <h5 class="card-title" style="text-align: center;"> <b>Diego Castro</b> <br> Secretario General</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card" style=" border: 0px; width: 12rem;">
                                <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                                <div class="card-body">
                                    <h5 class="card-title" style="text-align: center;"> <b>Diego Castro</b> <br> Secretario General</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card" style=" border: 0px; width: 12rem;">
                                <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                                <div class="card-body">
                                    <h5 class="card-title" style="text-align: center;"> <b>Diego Castro</b> <br> Secretario General</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                 
                  </div>
                  <div class="swiper-slide">
                    <div class="row">
                        <div class=" col-3 ">
                            <div class="card" style=" border: 0px; width: 12rem;">
                                <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                                <div class="card-body">
                                    <h5 class="card-title" style="text-align: center;"> <b>Diego Castro</b> <br> Secretario General</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card" style=" border: 0px; width: 12rem;">
                                <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                                <div class="card-body">
                                    <h5 class="card-title" style="text-align: center;"> <b>Diego Castro</b> <br> Secretario General</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card" style=" border: 0px; width: 12rem;">
                                <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                                <div class="card-body">
                                    <h5 class="card-title" style="text-align: center;"> <b>Diego Castro</b> <br> Secretario General</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card" style=" border: 0px; width: 12rem;">
                                <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                                <div class="card-body">
                                    <h5 class="card-title" style="text-align: center;"> <b>Diego Castro</b> <br> Secretario General</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="row">
                        <div class=" col-3 ">
                            <div class="card" style=" border: 0px; width: 12rem;">
                                <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                                <div class="card-body">
                                    <h5 class="card-title" style="text-align: center;"> <b>Diego Castro</b> <br> Secretario General</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card" style=" border: 0px; width: 12rem;">
                                <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                                <div class="card-body">
                                    <h5 class="card-title" style="text-align: center;"> <b>Diego Castro</b> <br> Secretario General</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card" style=" border: 0px; width: 12rem;">
                                <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                                <div class="card-body">
                                    <h5 class="card-title" style="text-align: center;"> <b>Diego Castro</b> <br> Secretario General</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card" style=" border: 0px; width: 12rem;">
                                <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                                <div class="card-body">
                                    <h5 class="card-title" style="text-align: center;"> <b>Diego Castro</b> <br> Secretario General</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  
                </div>
                <!-- If we need pagination -->
               <!-- <div class="swiper-pagination"></div>-->
              
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
              
                <!-- If we need scrollbar -->
              <!-- <div class="swiper-scrollbar"></div>-->
              </div>
          
              <!-- Fin carousel interno-->
            
             
        </div>
      
    </div>
      
      <!-- FIN DIPUTADOS POR DISTRITO-->
      <br>


   <!-- DIPUTADOS POR PUEBLO SE OCULTA CUANDO LA PANTALLA ES LG-->
   <div class="d-lg-none card" style="width: 80%; margin: 0 auto;">
    <div class="card-header"  style="background-color: #19537E; text-align:center; color: white;">
        
        DIPUTADOS POR EL PUEBLO
    </div>
    <div class="card-body">
        <!-- corousel dentro de card -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper" >
              <!-- Slides -->
              <div class="swiper-slide " >
                <div class="overflow-auto">
                <div class="row">
                    <div class="col-12 ">
                        <div class="card" style=" border: 0px; width: 16rem;">
                            <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                            <div class="card-body">
                                <h5 class="card-title" style="text-align: center;"> <b>Diego Castro</b> <br> Secretario General</h5>
                            </div>
                        </div>
                    </div>
                 
                  
                  
                </div>
              </div>
              </div>
              <div class="swiper-slide">
                <div class="col-12 ">
                    <div class="card" style=" border: 0px; width: 16rem;">
                        <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center;"> <b>Diego Castro</b> <br> Secretario General</h5>
                        </div>
                    </div>
                </div>
             
              </div>
              <div class="swiper-slide">
                <div class="col-12 ">
                    <div class="card" style=" border: 0px; width: 16rem;">
                        <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center;"> <b>Diego Castro</b> <br> Secretario General</h5>
                        </div>
                    </div>
                </div>
             
              </div>
              <div class="swiper-slide">
                <div class="col-12 ">
                    <div class="card" style=" border: 0px; width: 16rem;">
                        <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center;"> <b>Diego Castro</b> <br> Secretario General</h5>
                        </div>
                    </div>
                </div>
             
              </div>
              <div class="swiper-slide">
                <div class="col-12 ">
                    <div class="card" style=" border: 0px; width: 16rem;">
                        <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center;"> <b>Diego Castro</b> <br> Secretario General</h5>
                        </div>
                    </div>
                </div>
             
              </div>
              <div class="swiper-slide">
                <div class="col-12 ">
                    <div class="card" style=" border: 0px; width: 16rem;">
                        <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center;"> <b>Diego Castro</b> <br> Secretario General</h5>
                        </div>
                    </div>
                </div>
             
              </div>
              
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
          
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          
            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
          </div>
      
          <!-- Fin carousel interno-->
        
         
    </div>
  
</div>
  
       <!-- FIN DIPUTADOS POR PREBLO-->
       <!-- DIPUTADOS POR EL PUEBLO-->
       <!-- DIPUTADOS POR PUEBLO SE MUESTRA CUANDO LA PANTALLA ES LG-->
       <div class="d-none d-lg-block card" style="width: 80%; margin: 0 auto;">
        <div class="card-header"  style="background-color: #19537E; text-align:center; color: white;">
            
            DIPUTADOS POR EL PUEBLO
        </div>
        <div class="card-body">
            <!-- corousel dentro de card -->
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper" >
                  <!-- Slides -->
                  <div class="swiper-slide " >
                  
                    <div class="row">
                        <div class=" col-3 ">
                            <div class="card" style=" border: 0px; width: 12rem;">
                                <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                                <div class="card-body">
                                    <h5 class="card-title" style="text-align: center;"> <b>Diego Castro</b> <br> Secretario General</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card" style=" border: 0px; width: 12rem;">
                                <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                                <div class="card-body">
                                    <h5 class="card-title" style="text-align: center;"> <b>Diego Castro</b> <br> Secretario General</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card" style=" border: 0px; width: 12rem;">
                                <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                                <div class="card-body">
                                    <h5 class="card-title" style="text-align: center;"> <b>Diego Castro</b> <br> Secretario General</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card" style=" border: 0px; width: 12rem;">
                                <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                                <div class="card-body">
                                    <h5 class="card-title" style="text-align: center;"> <b>Diego Castro</b> <br> Secretario General</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                 
                  </div>
                  <div class="swiper-slide">
                    <div class="row">
                        <div class=" col-3 ">
                            <div class="card" style=" border: 0px; width: 12rem;">
                                <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                                <div class="card-body">
                                    <h5 class="card-title" style="text-align: center;"> <b>Diego Castro</b> <br> Secretario General</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card" style=" border: 0px; width: 12rem;">
                                <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                                <div class="card-body">
                                    <h5 class="card-title" style="text-align: center;"> <b>Diego Castro</b> <br> Secretario General</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card" style=" border: 0px; width: 12rem;">
                                <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                                <div class="card-body">
                                    <h5 class="card-title" style="text-align: center;"> <b>Diego Castro</b> <br> Secretario General</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card" style=" border: 0px; width: 12rem;">
                                <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                                <div class="card-body">
                                    <h5 class="card-title" style="text-align: center;"> <b>Diego Castro</b> <br> Secretario General</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="swiper-slide"> <div class="row">
                    <div class=" col-3 ">
                        <div class="card" style=" border: 0px; width: 12rem;">
                            <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                            <div class="card-body">
                                <h5 class="card-title" style="text-align: center;"> <b>Diego Castro</b> <br> Secretario General</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card" style=" border: 0px; width: 12rem;">
                            <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                            <div class="card-body">
                                <h5 class="card-title" style="text-align: center;"> <b>Diego Castro</b> <br> Secretario General</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card" style=" border: 0px; width: 12rem;">
                            <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                            <div class="card-body">
                                <h5 class="card-title" style="text-align: center;"> <b>Diego Castro</b> <br> Secretario General</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card" style=" border: 0px; width: 12rem;">
                            <img src="{{ asset('img/firmantes/dipu.png') }}" width="50%"  style="margin: 0 auto;border: 1px solid #868686;border-radius: 50%; background-color: white;" >
                            <div class="card-body">
                                <h5 class="card-title" style="text-align: center;"> <b>Diego Castro</b> <br> Secretario General</h5>
                            </div>
                        </div>
                    </div>
                </div></div>
                  
                </div>
                <!-- If we need pagination -->
               <!-- <div class="swiper-pagination"></div>-->
              
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
              
                <!-- If we need scrollbar -->
              <!-- <div class="swiper-scrollbar"></div>-->
              </div>
          
              <!-- Fin carousel interno-->
            
             
        </div>
      
    </div>
      
      <!-- FIN DIPUTADOS POR DISTRITO-->
      <!-- DIPUTADOS POR EL PUEBLO-->
      <br>
</main>

<script src="js/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@floating-ui/core@1.6.4"></script>
<script src="https://cdn.jsdelivr.net/npm/@floating-ui/dom@1.6.7"></script>
    
 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>       
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





            if("silla_par1"==estilo&&i>=2)
                {
                    let fondo = "#43627a";//unión por la patria
                    silla.style.background = fondo;
                    silla.dataset.bsTitle = "UNIÓN POR LA PATRIA";
                }
            if("silla_par1"==estilo&&i==1)
                {
                    let fondo = "#e95271";//coalición cívica
                    silla.style.background = fondo;
                    silla.dataset.bsTitle = "COALICIÓN CÍVICA";
                }   
                
            if("silla_par1"==estilo&&i==0){
                let fondo = "#2cabb1";//por santa cruz
                silla.style.background = fondo;
                silla.dataset.bsTitle = "POR SANTA CRUZ";
            }   



            if("silla_par2"==estilo&&i<=4)
                {
                    let fondo = "#2cabb1";//por santa cruz
                    silla.style.background = fondo;
                    silla.dataset.bsTitle = "POR SANTA CRUZ";
                    
                }
            if("silla_par2"==estilo&&i>=4)
                {
                    let fondo = "#43627a";
                    silla.style.background = fondo;
                    silla.dataset.bsTitle = "UNIÓN POR LA PATRIA";
                }   
            if("silla_par3"==estilo&&i<=5)
                {
                    let fondo = "#2cabb1";//por santa cruz
                    silla.style.background = fondo;
                    silla.dataset.bsTitle = "POR SANTA CRUZ";
                }
            if("silla_par3"==estilo&&i>=6)
                {
                    let fondo = "#43627a";
                    silla.style.background = fondo;
                    silla.dataset.bsTitle = "UNIÓN POR LA PATRIA";
                }       
                
           
            silla.classList.add(estilo);
            silla.dataset.bsToggle = "tooltip";
            silla.dataset.bsCustomClass = "custom-tooltip";
            silla.dataset.bsPlacement = "left";
            
            bootstrap.Tooltip.getOrCreateInstance(silla);
            
                        //console.log(res);
                        //silla.dataset.bsTitle = res;

            
            silla.style.left = `${x}%`;
            silla.style.top = `${y}%`;

            hemiciclo.appendChild(silla);
        }
      }
      //hemiciclo(5,0,'silla');
      hemiciclo(5,120,"silla_par1");
      hemiciclo(8,230,'silla_par2');
      hemiciclo(11,320,'silla_par3');

     
    </script>
    <script>
         const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,

            // If we need pagination
            pagination: {
            el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
            el: '.swiper-scrollbar',
            },
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


