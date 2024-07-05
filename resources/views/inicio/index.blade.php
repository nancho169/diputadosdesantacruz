@extends('welcome')

@section('content')


<!-- carousel -->
<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" >
            <svg class="bd-placeholder-img-head"  width="100%" height="100%"
                xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice"
                focusable="false" style="z-index:50;">
                
                
  
                <rect style="z-index:60;" width="100%" style="z-index:50;" height="5%" fill="var(--bs-secondary-color)"  />
                <text style="z-index:100; font-size: 10px;" x="90%" y="3%" alignment-baseline="middle" text-anchor="end" fill="white" >CONTACTO  |  SUSCRIBITE</text>    
                
            </svg>
            <div class="container" >
                <div class="carousel-caption text-start"  >
                    <a class="btn btn-lg text-light " style="background-color: #42BCBC;" href="#">Bienvenidos</a>
                    <h1 style="border-bottom: 3px solid #42BCBC; ">Honorable Cámara de <br>
                        Diputados de Santa Cruz<br>
                        </h1>
                    
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <svg class="bd-placeholder-img-head-1"  width="100%" height="100%"
                xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice"
                focusable="false" style="z-index:50;">
                
                
  
                <rect style="z-index:60;" width="100%" style="z-index:50;" height="5%" fill="var(--bs-secondary-color)"  />
                <text style="z-index:100; font-size: 10px;" x="90%" y="3%" alignment-baseline="middle" text-anchor="end" fill="white" >CONTACTO  |  SUSCRIBITE</text>    
                
            </svg>
            <div class="container" >
                <div class="carousel-caption text-start"  >
                    <a class="btn btn-lg text-light " style="background-color: #42BCBC;" href="#">Bienvenidos</a>
                    <h1 >Honorable Cámara de <br>
                        Diputados de Santa Cruz<br>
                        </h1>
                    
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <svg class="bd-placeholder-img-head-2"  width="100%" height="100%"
            xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice"
            focusable="false" style="z-index:50;">
            
            

            <rect style="z-index:60;" width="100%" style="z-index:50;" height="5%" fill="var(--bs-secondary-color)"  />
            <text style="z-index:100; font-size: 10px;" x="90%" y="3%" alignment-baseline="middle" text-anchor="end" fill="white" >CONTACTO  |  SUSCRIBITE</text>    
            
        </svg>
            <div class="container">
                <div class="carousel-caption text-start" >
                    <a class="btn btn-lg text-light " style="background-color: #42BCBC;" href="#">Bienvenidos</a>
                    <h1>Honorable Cámara de <br>
                        Diputados de Santa Cruz<br>
                        </h1>
                    <hr style="width: 50%; background-color: #42BCBC; opacity: 1; " noshade="noshade" size="8px" color="#42BCBC" >
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- fin carousel -->


<!--<div style="z-index: 5;" class="toast fade show position-fixed bottom-0 start-0 p-3 bg-body-secondary" role="alert" aria-live="assertive" aria-atomic="true" >
    <div class="toast-header">
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Cerca"></button>
        <svg class="bd-placeholder-img rounded me-2" width="15" height="15" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          
            <div class="spinner-grow spinner-grow-sm  text-danger" role="status"></div>
        </svg>
        <strong class="me-auto">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Próxima sesión</font>
            </font>
        </strong>
        
    </div>
    <div class="toast-body">
        <section>
            <span id="days"></span> días  - <span id="hours"></span> horas - <span id="minutes"></span> minutos - <span id="seconds"></span> segundos
        </section>
      
    </div>
  </div>-->


<div class="container marketing"  >

    <!-- COLUMNAS -->
    <br>
    <h4 style="text-align: left; color:white;"  data-aos="fade-right">ACTIVIDAD PARLAMENTARIA</h4>
    <br>
    <div class="row" >
       
        <div class="col-lg-3 col-md-3" >
            
            <div class="card shadow-lg p-3 mb-5 text-light" style="border-radius: 0px; width: 16rem; background-color: rgba(0, 0, 0, .1); border: solid rgba(0, 0, 0, .15);border-width: 1px 0;" data-aos="flip-left">
              
                <div class="card-body">
                  
                    <div class="row">
                        <div class="col-2">  <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                          </svg>
                        </div>
                        <div class="col-10"> 
                            <h4 class="fw-normal">
                                DIPUTADOS
                            </h4>
                        </div>
                      </div>
                </div>
            </div>

        </div><!-- /.col-lg-4 -->
        <div class="col-lg-3 col-md-3" >
          <div class="card shadow-lg p-3 mb-5 text-light" style="border-radius: 0px;width: 16rem; background-color: rgba(0, 0, 0, .1); border: solid rgba(0, 0, 0, .15);border-width: 1px 0;" data-aos="flip-left">
             
              <div class="card-body">
                <div class="row">
                    <div class="col-2"> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
                        <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
                        <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2"/>
                        <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z"/>
                      </svg>
                    </div>
                    <div class="col-10"> 
                        <h4 class="fw-normal">
                            PROYECTOS
                        </h4>
                    </div>
                  </div>
              </div>
          </div>

      </div><!-- /.col-lg-4 -->
      <div class="col-lg-3 col-md-3" >
        <div class="card shadow-lg p-3 mb-5 text-light" style="border-radius: 0px;width: 16rem; background-color: rgba(0, 0, 0, .1); border: solid rgba(0, 0, 0, .15);border-width: 1px 0;" data-aos="flip-left">
             
            <div class="card-body">
              <div class="row">
                  <div class="col-2"> 
                   <!-- <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                        <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6m0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
                      </svg>-->
                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  fill="currentColor" width="36" height="36" x="0px" y="0px" viewBox="0 0 256 256" enable-background="new 0 0 256 256" xml:space="preserve">
                        <g><g><g><path fill="#FFFFFF" d="M69,14.8c-2.8,1.2-4.9,3.4-6.3,6.2l-1.1,2.3v35.8V95h3.7H69V59c0-35.4,0-36,0.9-36.9c0.9-0.9,1.5-0.9,43.3-0.9c41.8,0,42.4,0,43.3,0.9s0.9,1.5,0.9,47c0,45.5,0,46.1-0.9,47c-0.9,0.9-1.5,0.9-11.3,0.9c-6.3,0-10.7,0.2-11.4,0.5c-0.6,0.3-4.1,5.1-8.4,11.6c-4.1,6.1-7.4,11.2-7.5,11.4c-0.2,0.6,5.5,4.3,5.9,3.9c0.2-0.2,3.3-4.8,6.9-10.2l6.5-9.8h8.8c5.6,0,9.5-0.2,10.7-0.6c2.5-0.7,6.8-5,7.6-7.6c0.4-1.4,0.6-13.1,0.6-47.5V23.3l-1.1-2.3c-1.3-2.8-4.6-5.9-7.1-6.6c-1.3-0.4-12.9-0.6-43.7-0.6C71.9,13.8,71,13.9,69,14.8z"/><path fill="#FFFFFF" d="M106.8,29.3c-8.3,1.7-13.3,7.1-14.9,16.2c-1.5,8.4-0.2,16.7,3.8,23.4c1.9,3.3,3.1,2.1-9.7,10.4l-9.5,6.2l0,4.7V95h3.7h3.7v-2.8v-2.8l9.4-6.2l9.4-6.3l2.6,1.2c5.6,2.6,11.4,2.6,16.6,0l2.3-1.2l9.4,6.3l9.4,6.3v4.2c0,4.5-0.9,7.5-2.3,8.3c-0.5,0.3-5,0.5-10.3,0.5h-9.5v3.7v3.7h9.8c11.3,0,12.2-0.2,15.4-3.9c3.1-3.6,3.9-6.3,4.1-13.8l0.1-6.5l-10.2-6.7c-5.6-3.7-10.3-6.8-10.4-7c-0.1-0.1,0.5-1.5,1.4-3c6.4-10.7,5.6-27.5-1.5-34.7C124.7,29.5,115.6,27.5,106.8,29.3z M119.9,36.7c3.6,1,5.3,2.2,6.6,5.2c1,2.1,1.2,3.5,1.4,8c0.4,8.6-1.2,14.3-4.8,18.4c-3.1,3.5-5.1,4.4-9.8,4.4c-4.7,0-6.7-0.9-9.8-4.4c-3.7-4.1-5.2-9.8-4.8-18.4c0.4-8.5,2.2-11.7,7.8-13.1C109.7,35.8,116.5,35.8,119.9,36.7z"/><path fill="#FFFFFF" d="M172.3,69.1v3.7h32.3c31.7,0,32.3,0,33.2,0.9c0.9,0.9,0.9,1.5,0.9,47c0,45.5,0,46.1-0.9,47c-0.9,0.9-1.5,0.9-11.5,0.9h-10.6l-24.9,12.4l-24.9,12.4l5-10.2c2.8-5.6,5.1-10.5,5.1-10.8c0-1.2-1.1-2.9-2.2-3.4c-0.7-0.3-4.8-0.5-11.4-0.5c-9.8,0-10.4,0-11.3-0.9c-0.9-0.9-0.9-1.5-0.9-18.4v-17.5h-3.7h-3.7v17.1c0,11.8,0.2,17.7,0.6,18.9c0.7,2.5,3.8,5.8,6.6,7.1c2.1,1,3,1.1,9.3,1.1h7.1l-6.3,12.6c-6.5,13.1-6.8,13.9-4.9,15.7c1.9,1.9,1.6,2.1,32.8-13.5l29.6-14.8h9.6c9.1,0,9.6,0,11.8-1.1c2.8-1.3,4.9-3.5,6.2-6.3c0.9-2,1-2.8,1-47.9V74.9l-1.1-2.3c-1.3-2.8-4.6-5.9-7.1-6.6c-1.3-0.4-10.6-0.6-33.7-0.6h-31.8V69.1z"/><path fill="#FFFFFF" d="M187.9,80.9c-8.3,1.7-13.3,7.1-14.9,16.2c-1.5,8.4-0.2,16.7,3.7,23.4c0.9,1.5,1.4,2.9,1.2,3c-0.2,0.2-4.9,3.4-10.5,7.1l-10,6.8l0.2,6.5c0.1,5.8,0.3,6.8,1.4,9.1c1.5,3.3,4.2,6.3,6.6,7.4c1.7,0.8,3.7,0.9,28.8,0.9c30.4,0,29,0.1,32.4-3.6c3.5-3.9,4.7-7.8,4.4-15.5l-0.1-5l-9.9-6.6c-5.4-3.6-10-6.7-10.3-7c-0.2-0.2,0.4-1.6,1.2-3.1c6.4-10.8,5.6-27.6-1.6-34.8C205.9,81.1,196.8,79.2,187.9,80.9z M201,88.3c3.6,1,5.3,2.2,6.6,5.2c1,2.1,1.2,3.5,1.4,8c0.4,8.6-1.2,14.3-4.8,18.4c-3.1,3.5-5.1,4.4-9.8,4.4c-4.7,0-6.7-0.9-9.8-4.4c-3.7-4.1-5.2-9.8-4.8-18.4c0.2-4.7,0.4-5.8,1.5-8c1.5-3,3-4.1,6.3-5.1C190.8,87.5,197.6,87.4,201,88.3z M186,129.8c5.1,2.6,10.9,2.6,16.5,0l2.6-1.2l9.4,6.3l9.4,6.2v4.1c0,4.5-0.9,7.5-2.4,8.3c-1.1,0.6-53.2,0.6-54.3,0c-1.5-0.8-2.4-3.8-2.4-8.3v-4.1l9.3-6.2c5.2-3.4,9.4-6.2,9.5-6.2C183.7,128.6,184.8,129.1,186,129.8z"/><path fill="#FFFFFF" d="M17.4,103.3c-2.8,1.2-4.9,3.4-6.3,6.2l-1.1,2.3v45.6c0,33.6,0.1,46,0.6,47.4c0.7,2.5,3.8,5.8,6.6,7.1c2.2,1.1,2.8,1.1,11.8,1.1h9.6l29.6,14.8c31.2,15.6,30.8,15.4,32.8,13.5c1.8-1.8,1.6-2.5-4.9-15.7L89.7,213h6.8c3.9,0,7.5-0.2,8.6-0.6c2.7-0.8,6.8-5,7.6-7.7c0.5-1.6,0.6-12.8,0.5-47.9l-0.1-45.9l-1-1.8c-1.3-2.4-3.6-4.6-6.1-5.7c-2-0.9-2.8-1-44.3-1S19.4,102.4,17.4,103.3z M105,110.6c0.9,0.9,0.9,1.5,0.9,47c0,45.5,0,46.1-0.9,47c-0.9,0.9-1.5,0.9-11.3,0.9c-6.6,0-10.7,0.2-11.4,0.5c-1.1,0.5-2.2,2.2-2.2,3.4c0,0.3,2.3,5.2,5.1,10.8l5.1,10.2L65.3,218l-24.9-12.4H29.8c-10,0-10.6,0-11.5-0.9c-0.9-0.9-0.9-1.5-0.9-47c0-45.5,0-46.1,0.9-47c0.9-0.9,1.5-0.9,43.3-0.9C103.4,109.7,104,109.7,105,110.6z"/><path fill="#FFFFFF" d="M55.1,117.8c-8.3,1.7-13.3,7.1-14.9,16.2c-1.5,8.4-0.2,16.7,3.8,23.4c1.9,3.3,3.1,2.1-9.7,10.4l-9.4,6.2v5.5c0,7.7,1,11.2,4.5,15.1c3.4,3.7,2,3.6,32.4,3.6c30.7,0,29,0.2,32.6-3.9c3.1-3.6,3.9-6.3,4.1-13.8l0.1-6.5l-10.2-6.7c-5.6-3.7-10.3-6.8-10.4-7c-0.1-0.1,0.5-1.5,1.4-3c6.4-10.7,5.6-27.5-1.5-34.7C73.1,118,64,116,55.1,117.8z M68.3,125.2c3.6,1,5.3,2.2,6.6,5.2c1,2.1,1.2,3.5,1.4,8c0.4,8.6-1.2,14.3-4.8,18.4c-3.1,3.5-5.1,4.4-9.8,4.4s-6.7-0.9-9.8-4.4c-3.7-4.1-5.2-9.8-4.8-18.4c0.4-8.5,2.2-11.7,7.8-13.1C58.1,124.3,64.9,124.3,68.3,125.2z M54.5,167.1c5.2,2.2,10.6,2,15.6-0.5l2.3-1.2l9.4,6.3l9.4,6.3v4.2c0,4.5-0.9,7.5-2.4,8.3c-1.1,0.6-53.2,0.6-54.3,0c-1.5-0.8-2.4-3.8-2.4-8.3v-4.2l9.4-6.2c5.1-3.4,9.5-6.1,9.8-6C51.5,165.8,53,166.4,54.5,167.1z"/><path fill="#FFFFFF" d="M124.3,224v3.7h3.7h3.7V224v-3.7H128h-3.7V224z"/><path fill="#FFFFFF" d="M139.1,224v3.7h3.7h3.7V224v-3.7h-3.7h-3.7V224z"/><path fill="#FFFFFF" d="M153.8,224v3.7h3.7h3.7V224v-3.7h-3.7h-3.7V224z"/><path fill="#FFFFFF" d="M168.6,224v3.7h3.7h3.7V224v-3.7h-3.7h-3.7V224z"/></g></g></g>
                        </svg>
                  </div>
                  <div class="col-10"> 
                      <h4 class="fw-normal">
                          COMISIONES
                      </h4>
                  </div>
                </div>
            </div>
        </div>


    </div><!-- /.col-lg-4 -->
    

    

    <div class="col-lg-3" >
        <div class="card shadow-lg p-3 mb-5 text-light" style="width: 16rem; background-color: rgba(0, 0, 0, .1); border: solid rgba(0, 0, 0, .15);border-width: 1px 0;" data-aos="flip-left">
             
            <div class="card-body">
              <div class="row">
                  <div class="col-2"> 
                    <svg xmlns="http://www.w3.org/2000/svg"  width="36" height="36"  data-name="Слой 1" viewBox="0 0 875.51 549.51">
                        <defs>
                            <style>
                                .cls-1
                                {stroke:#fff;stroke-miterlimit:10;}
                                
                                .cls-2
                                {fill:#fff;}

                                .cls-3
                                {
                                    fill:white;
                                }
                            </style>
                            </defs>
                        <path class="cls-1" d="M560.48,677.11s-2.54-96.43,29.19-126.89,79.94-33.62,79.94-33.62l57.1,139.57,11.42-97.7L715.92,516.6l27.92-12.69,24.74,15.22-20.3,37.44,20.3,102.14L816.8,519.77s56.47,7,82.48,27.91,31.72,118,31.72,118-61.54,55.2-185.26,52.66S560.48,677.11,560.48,677.11Z" transform="translate(-559.93 -267.49)"></path>
                        <path class="cls-3" d="M663.23,314.62c-2.76,9.24-3.79,18.86-4.25,28.44a244.23,244.23,0,0,0,.47,28.76q1,14.35,3.29,28.57t5.59,28.2l-.14-.41a135,135,0,0,0,10.26,17.31c1.84,2.8,4,5.35,6.1,8,1.06,1.3,2.24,2.49,3.36,3.74l1.69,1.85c.57.6,1.2,1.16,1.8,1.74A100.17,100.17,0,0,0,707,473.34a89.46,89.46,0,0,0,17.71,9.14,87.38,87.38,0,0,0,19.21,5.07l4.87.53c.78,0,1.54,0,2.35,0s1.6-.05,2.41-.16a53.23,53.23,0,0,0,9.59-1.85,79.78,79.78,0,0,0,18.18-7.91,102.15,102.15,0,0,0,16.16-11.73,86.22,86.22,0,0,0,13.37-14.76,66.17,66.17,0,0,0,5.13-8.48c.74-1.45,1.41-3,2.09-4.55l1-2.32,1-2.34c1.32-3.11,2.43-6.3,3.59-9.48s2.14-6.41,3-9.67,1.72-6.54,2.52-9.83c.42-1.64.68-3.31,1-5s.72-3.31,1-5a172.76,172.76,0,0,0,2.06-40.51A155.4,155.4,0,0,0,825,314.62a144.73,144.73,0,0,1,10.06,39.73,167.53,167.53,0,0,1-.75,41.19c-.19,1.71-.55,3.4-.82,5.1s-.55,3.41-.94,5.09c-.74,3.36-1.43,6.74-2.36,10.07s-1.87,6.63-2.86,9.94-2.19,6.55-3.47,9.76l-.92,2.42-1,2.39c-.68,1.59-1.33,3.18-2.13,4.78a70.25,70.25,0,0,1-5.34,9.11,90.79,90.79,0,0,1-13.88,15.72,100.62,100.62,0,0,1-16.86,12.41,84.16,84.16,0,0,1-19.26,8.47A57.46,57.46,0,0,1,754,492.87a46.78,46.78,0,0,1-5.47.21c-1.78-.16-3.54-.4-5.31-.59a92.26,92.26,0,0,1-20.3-5.45,94.58,94.58,0,0,1-18.58-9.69c-.72-.48-1.48-.92-2.18-1.45l-2.1-1.56c-1.39-1.07-2.84-2-4.14-3.22l-4-3.41c-1.27-1.2-2.5-2.44-3.75-3.65-.62-.62-1.26-1.21-1.85-1.85l-1.74-1.95c-1.15-1.31-2.36-2.57-3.45-3.93-2.13-2.75-4.36-5.44-6.23-8.37a126.58,126.58,0,0,1-10.3-18.07l-.1-.2,0-.21c-2-9.48-3.72-19-5-28.61s-2.09-19.25-2.48-28.91a233.83,233.83,0,0,1,.63-29c.39-4.82,1.09-9.61,1.91-14.37A94.06,94.06,0,0,1,663.23,314.62Z" transform="translate(-559.93 -267.49)"></path>
                        <path class="cls-3" d="M659.19,385.3s22.19-54.9,43.49-57.27,25.25,14.2,45.77,14.2,30-18.14,45-18.14S834,385.3,834,385.3s6.79-104.61-49.23-108.56S641.75,252.4,659.19,385.3Z" transform="translate(-559.93 -267.49)"></path>
                        <path class="cls-1" d="M1064.41,677s-2.54-96.44,29.19-126.89,79.94-33.63,79.94-33.63L1230.64,656l11.42-97.7-22.21-41.88,27.92-12.69L1272.51,519l-20.3,37.43,20.3,102.15,48.22-138.94s56.47,7,82.48,27.91,31.72,118,31.72,118-61.54,55.2-185.26,52.66S1064.41,677,1064.41,677Z" transform="translate(-559.93 -267.49)"></path>
                        <path class="cls-3" d="M1167.16,314.48c-2.76,9.25-3.79,18.87-4.24,28.44a242.26,242.26,0,0,0,.46,28.77q1,14.35,3.29,28.57t5.59,28.2l-.14-.42a134.39,134.39,0,0,0,10.26,17.32c1.84,2.8,4,5.35,6.1,8,1.06,1.3,2.25,2.49,3.36,3.73l1.69,1.85c.57.61,1.2,1.17,1.8,1.75a100.58,100.58,0,0,0,15.55,12.54,90.32,90.32,0,0,0,17.71,9.15,87.38,87.38,0,0,0,19.21,5.07l4.87.53c.78,0,1.54,0,2.35,0s1.6-.05,2.41-.16a53.06,53.06,0,0,0,9.59-1.85A79.19,79.19,0,0,0,1285.2,478a101.46,101.46,0,0,0,16.16-11.72,86.66,86.66,0,0,0,13.37-14.77,65.38,65.38,0,0,0,5.13-8.47c.74-1.45,1.41-3,2.09-4.56l1-2.31,1-2.34c1.32-3.11,2.43-6.3,3.59-9.48s2.14-6.41,3-9.68,1.73-6.53,2.53-9.82c.41-1.64.67-3.32,1-5s.72-3.31,1-5a172.76,172.76,0,0,0,2.06-40.51,155.56,155.56,0,0,0-8.16-39.92A144.89,144.89,0,0,1,1339,354.22a167.53,167.53,0,0,1-.75,41.19c-.19,1.71-.55,3.4-.82,5.1s-.55,3.41-.93,5.08c-.75,3.37-1.44,6.75-2.37,10.07s-1.87,6.64-2.86,9.95-2.19,6.55-3.46,9.76l-.93,2.42-1,2.39c-.68,1.59-1.33,3.18-2.13,4.78a70.25,70.25,0,0,1-5.34,9.11,91.53,91.53,0,0,1-13.88,15.72,100.62,100.62,0,0,1-16.86,12.41,84.4,84.4,0,0,1-19.26,8.47,58.36,58.36,0,0,1-10.48,2.06,47,47,0,0,1-5.48.21c-1.78-.16-3.54-.39-5.31-.59a92,92,0,0,1-20.29-5.44,94.66,94.66,0,0,1-18.59-9.69c-.72-.49-1.48-.93-2.18-1.45l-2.1-1.56c-1.39-1.07-2.84-2-4.14-3.22l-4-3.42c-1.27-1.19-2.5-2.43-3.75-3.65-.62-.61-1.26-1.2-1.85-1.84l-1.74-1.95c-1.15-1.32-2.36-2.57-3.44-3.93-2.14-2.76-4.37-5.44-6.24-8.37a126.69,126.69,0,0,1-10.3-18.08l-.1-.2-.05-.21c-2-9.47-3.72-19-5-28.6s-2.09-19.25-2.48-28.92a233.67,233.67,0,0,1,.63-29c.39-4.82,1.09-9.62,1.91-14.37A94.52,94.52,0,0,1,1167.16,314.48Z" transform="translate(-559.93 -267.49)"></path>
                        <path class="cls-3" d="M1163.13,385.16s22.18-54.89,43.48-57.26,25.25,14.2,45.77,14.2,30-18.15,45-18.15,40.56,61.21,40.56,61.21,6.78-104.61-49.24-108.55S1145.68,252.27,1163.13,385.16Z" transform="translate(-559.93 -267.49)"></path>
                        <path d="M997.21,814c-65.48,0-123-17.88-159.67-32.88-39.78-16.26-64.47-32.78-64.72-33l-1.48-1,.18-1.78c0-.27,2.74-27.2,7.66-54.84,10.17-57.2,19.79-61.73,23-63.22,14.08-6.62,87.43-27.84,122.36-37.79-44-3.15-72.78-16.1-74.15-16.72l-4.26-2,3.56-3.06c27.47-23.55,30.62-81.39,33.67-137.33,1.84-33.88,3.58-65.88,10.35-91.37,17.72-66.69,94.07-68.62,102.72-68.62h.91c43.07,1.14,69.11,19.51,83.37,34.73,15.5,16.53,20.7,32.64,20.91,33.32l0,.13c6.77,25.49,8.51,57.49,10.36,91.37,3,55.94,6.19,113.78,33.66,137.33l3.57,3.06-4.27,1.95c-1.37.62-30.17,13.57-74.15,16.71,34.93,10,108.28,31.18,122.36,37.8,3.16,1.49,12.78,6,23,63.22,4.91,27.64,7.63,54.57,7.66,54.84l.18,1.78-1.49,1c-.25.16-25.16,16.79-65.15,33.15C1120.41,796,1062.69,814,997.21,814Z" transform="translate(-559.93 -267.49)"></path>
                        <path class="cls-2"  d="M996.38,273.49h.83c81.37,2.14,101.5,65.95,101.5,65.95,18.2,68.53,0,191.66,45,230.21,0,0-37.47,17.13-92.08,17.13,0,0,122.06,34.26,140.26,42.83s28.91,115.64,28.91,115.64S1123,811,997.21,811,774.5,745.69,774.5,745.69s10.71-107.08,28.91-115.64,140.26-42.83,140.26-42.83c-54.6,0-92.08-17.13-92.08-17.13,45-38.55,26.77-161.68,45-230.21,17.13-64.49,91.18-66.39,99.82-66.39m0-6c-8.88,0-87.33,2-105.62,70.85-6.84,25.78-8.6,57.94-10.45,92-3,55.31-6.13,112.5-32.62,135.21l-7.13,6.11,8.54,3.91c1.21.55,23.9,10.75,59.56,15.4-37.73,10.85-95.37,27.82-107.81,33.67-6.6,3.11-15.37,13.35-24.63,65.41-4.93,27.74-7.66,54.79-7.69,55.06l-.36,3.57,3,2c1,.68,25.19,16.86,65.26,33.24A462.32,462.32,0,0,0,908,806.64a388.78,388.78,0,0,0,178.56-.06,465.21,465.21,0,0,0,71.88-22.9c40.27-16.48,64.66-32.76,65.68-33.45l3-2-.36-3.57c0-.27-2.75-27.32-7.69-55.06-9.26-52.06-18-62.3-24.63-65.41-12.44-5.85-70.08-22.82-107.8-33.67,35.65-4.65,58.34-14.85,59.55-15.4l8.54-3.91-7.12-6.11c-26.5-22.71-29.62-79.9-32.63-135.21-1.85-34-3.6-66.2-10.45-92l0-.13,0-.13c-.22-.7-5.62-17.45-21.58-34.47a107.86,107.86,0,0,0-32.89-23.9c-15.5-7.3-33.2-11.27-52.59-11.78Z" transform="translate(-559.93 -267.49)"></path>
                        <path class="cls-2" d="M998,343.63s-37.46,54.85-81.6,70.9c0,0-8,117.72,81.6,121.74s81.6-119.06,81.6-119.06S1020.75,398.48,998,343.63Z" transform="translate(-559.93 -267.49)"></path>
                        <path class="cls-2" d="M902.45,625.23s31-32.12,42.83-35.33c0,0,35.33,70.66,36.4,123.13C981.68,713,953.84,631.66,902.45,625.23Z" transform="translate(-559.93 -267.49)"></path>
                        <path class="cls-2" d="M1090.67,622.42s-31.05-32.12-42.83-35.34c0,0-35.33,70.67-36.4,123.14C1011.44,710.22,1039.27,628.84,1090.67,622.42Z" transform="translate(-559.93 -267.49)">
                        </path>
                    </svg> 
                  </div>
                  <div class="col-10"> 
                      <h3 class="fw-normal">
                          SESIONES
                      </h3>
                  </div>
                </div>
            </div>
        </div>


    </div><!-- /.col-lg-4 -->


    <!-- 3 columnas-->
    <div class="row" style="margin: 0 auto; margin-left: 30px;" >
        <div class="col-md-4 col-lg-4"  style="margin: 0 auto; ">

            <div class="card shadow-lg bg-light" style="border-radius: 0px;width: 16rem; background-color: rgba(0, 0, 0, .1); border: solid rgba(0, 0, 0, .15);border-width: 1px 0;" data-aos="flip-left">
             
                <div class="card-body" style="text-align: center;">
                  
                      
                          Información parlamentaria
                      
                  
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-4"  style="margin: 0 auto; ">
            <div class="card  shadow-lg bg-light" style="border-radius: 0px;width: 16rem; background-color: rgba(0, 0, 0, .1); border: solid rgba(0, 0, 0, .15);border-width: 1px 0;" data-aos="flip-left">
             
                <div class="card-body" style="text-align: center;">
                   
                        
                            Agenda parlamentaria
                        
                     
                  </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-4"  style="margin: 0 auto; ">
            <div class="card shadow-lg bg-light" style="border-radius: 0px;width: 16rem; background-color: rgba(0, 0, 0, .1); border: solid rgba(0, 0, 0, .15);border-width: 1px 0;" data-aos="flip-left">
             
                <div class="card-body" style="text-align: center;">
                 
                            Ódenes del día
                        
                     
                  </div>
            </div>
        </div>
    </div>
 <!-- fin  3 columnas-->
<br>

    </div><!-- /.row -->
</div>
<div style="width: 100%"  class="bg-light" >

    <!-- NOTICIAS -->

    <hr class="featurette-divider">
    <div class="container text-center">
       
        <div class="row">
           
          <div class="col-md-8 "><!-- inicio 8 columnas-->
            <h4 style="text-align: left; color: #19537E;">ÚLTIMAS NOTICIAS</h4>
            <div class="row" >

                <div class="col-md-4" >
                    <div class="card" style="text-align: left; color:#19537E; border-style: none;">
                        <img src="{{asset('img/noticia.png')}}" class="card-img-top" alt="...">
                        <div class="card-body" >
                          <h5 class="card-title">Título</h5>
                          <p class="card-text " >This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="text-align: left; color:#19537E; border-style: none;">
                        <img src="{{asset('img/noticia.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Título</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="text-align: left; color:#19537E; border-style: none;">
                        <img src="{{asset('img/noticia.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Título</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                      <a class="btn btn-light end-0" style="text-align: right; color: grey;">VER MÁS NOTICIAS<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right" viewBox="0 0 16 16">
                        <path d="M6 12.796V3.204L11.481 8zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753"/>
                      </svg></a>
                </div>
                
            </div>
           
          </div><!-- Fin 8 columnas-->
          
          <div class="col-md-4"><!-- col destacado-->
            <div class="row" >
                <div class="col-10">
                    <h4 style="text-align: left; color: #19537E; ">DESTACADO</h4>
                    <div class="card" style="text-align: left; color:#19537E; border-style: none;">
                        <img src="{{asset('img/noticia.png')}}" class="card-img-top" alt="...">
                        <div class="card-body" style="background-color: #72CEC9; color: white;">
                        <h5 class="card-title">Proyecto de ley</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <p class="card-text"><small class="text-body-light">Last updated 3 mins ago</small></p>
                        <div class="position-relative">
                            <a class="position-absolute end-0"  style="margin-top:-10px; text-align: right; color: grey;">VER MÁS<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right" viewBox="0 0 16 16">
                                <path d="M6 12.796V3.204L11.481 8zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753"/>
                              </svg></a>
                        </div>
                    </div>
                    
                    </div>
                </div>
            </div>
          </div>
        
        
        </div>
      </div>
    

   

    

    <!-- /FIN NOTICIAS -->
<br><br><br>
</div><!-- /.container -->


<!-- Lectura -->
<script>
    /*document.addEventListener('DOMContentLoaded', function () {
    // Verificar si el navegador soporta la síntesis de voz
    if ('speechSynthesis' in window) {
        // Agregar evento al botón para iniciar la síntesis de voz
        document.getElementById('speak-button').addEventListener('click', function () {
            // Crear una instancia de SpeechSynthesisUtterance
            var to_speak = new SpeechSynthesisUtterance();

            // Establecer el texto a ser hablado
            to_speak.text = "Bienvenido a la Honorable Cámara de Diputados de Río Gallegos, el órgano legislativo fundamental de la provincia de Santa Cruz, donde se forjan las leyes y se fortalece la democracia. Con una rica historia y un profundo compromiso con nuestra comunidad, la Cámara de Diputados no solo es un símbolo de la voluntad popular, sino también un espacio dinámico de debate y construcción de un futuro mejor para todos los santacruceños.";

            // Configurar propiedades adicionales
            to_speak.lang = "es-AR"; // Establece el idioma a español (puedes ajustar según sea necesario)
            to_speak.rate = 0.9; // Velocidad de habla (1 es el valor por defecto)
          
            to_speak.pitch = 1; // Tono de voz (1 es el valor por defecto)

            // Reproducir el texto usando la síntesis de voz
            window.speechSynthesis.speak(to_speak);
        });
    } else {
        // Manejar el caso donde la síntesis de voz no está soportada
        console.log('La API de síntesis de voz no es soportada en este navegador.');
        alert('La API de síntesis de voz no es soportada en este navegador.');
    }
});*/

//Contador


//===
// VARIABLES
//===
const DATE_TARGET = new Date('06/27/2024 0:01 PM');
// DOM for render
const SPAN_DAYS = document.querySelector('span#days');
const SPAN_HOURS = document.querySelector('span#hours');
const SPAN_MINUTES = document.querySelector('span#minutes');
const SPAN_SECONDS = document.querySelector('span#seconds');
// Milliseconds for the calculations
const MILLISECONDS_OF_A_SECOND = 1000;
const MILLISECONDS_OF_A_MINUTE = MILLISECONDS_OF_A_SECOND * 60;
const MILLISECONDS_OF_A_HOUR = MILLISECONDS_OF_A_MINUTE * 60;
const MILLISECONDS_OF_A_DAY = MILLISECONDS_OF_A_HOUR * 24

//===
// FUNCTIONS
//===

/**
 * Method that updates the countdown and the sample
 */
function updateCountdown() {
    // Calcs
    const NOW = new Date()
    const DURATION = DATE_TARGET - NOW;
    const REMAINING_DAYS = Math.floor(DURATION / MILLISECONDS_OF_A_DAY);
    const REMAINING_HOURS = Math.floor((DURATION % MILLISECONDS_OF_A_DAY) / MILLISECONDS_OF_A_HOUR);
    const REMAINING_MINUTES = Math.floor((DURATION % MILLISECONDS_OF_A_HOUR) / MILLISECONDS_OF_A_MINUTE);
    const REMAINING_SECONDS = Math.floor((DURATION % MILLISECONDS_OF_A_MINUTE) / MILLISECONDS_OF_A_SECOND);
    // Thanks Pablo Monteserín (https://pablomonteserin.com/cuenta-regresiva/)

    // Render
    SPAN_DAYS.textContent = REMAINING_DAYS;
    SPAN_HOURS.textContent = REMAINING_HOURS;
    SPAN_MINUTES.textContent = REMAINING_MINUTES;
    SPAN_SECONDS.textContent = REMAINING_SECONDS;
}

//===
// INIT
//===
//updateCountdown();
// Refresh every second
//setInterval(updateCountdown, MILLISECONDS_OF_A_SECOND);





</script>


@endsection