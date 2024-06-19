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
                focusable="false">
                
                <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
            </svg>
            <div class="container" >
                <div class="carousel-caption text-start" >
                    <h1>Visítanos</h1>
                    <p class="opacity-75">Te invitamos a conocer más sobre la Honorable Cámara de Diputados de Río Gallegos y a descubrir cómo trabajamos día a día para construir una provincia más justa, inclusiva y democrática.</p>
                    <p><a class="btn btn-lg btn-light" href="#">Sobre Nosotros</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <svg class="bd-placeholder-img-head-1" width="100%" height="100%"
                xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice"
                focusable="false">
                <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
            </svg>
            <div class="container">
                <div class="carousel-caption">
                    
                        <h1>Visítanos</h1>
                        <p class="opacity-75">Te invitamos a conocer más sobre la Honorable Cámara de Diputados de Río Gallegos y a descubrir cómo trabajamos día a día para construir una provincia más justa, inclusiva y democrática.</p>
                        <p><a class="btn btn-lg btn-light" href="#">Sobre Nosotros</a></p>
                  

                </div>
            </div>
        </div>
        <div class="carousel-item">
            <svg class="bd-placeholder-img-head-2" width="100%" height="100%"
                xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice"
                focusable="false">
                <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
            </svg>
            <div class="container">
                <div class="carousel-caption text-end">
                    
                        <h1>Visítanos</h1>
                        <p class="opacity-75">Te invitamos a conocer más sobre la Honorable Cámara de Diputados de Río Gallegos y a descubrir cómo trabajamos día a día para construir una provincia más justa, inclusiva y democrática.</p>
                        <p><a class="btn btn-lg btn-light" href="#">Sobre Nosotros</a></p>
                  
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


<div class="toast fade show position-fixed bottom-0 start-0 p-3" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Cerca"></button>
        <svg class="bd-placeholder-img rounded me-2" width="15" height="15" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <!--<rect width="100%" height="100%" fill="#FF0000"></rect>-->
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
        <!--<font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">
            <section>
                    <span id="days"></span> días  - <span id="hours"></span> horas <br> <span id="minutes"></span> minutos - <span id="seconds"></span> segundos
            </section>
            </font>
        </font>-->
    </div>
  </div>

<div class="alert alert-dark" role="alert" style="text-align: center; width: 90%; margin: 0 auto;" data-aos="fade-up">
    <h3 >
        Descubre la Honorable Cámara de Diputados de Río Gallegos
        <hr>
    </h3>
    <p class="fst-italic" >
        Bienvenido a la Honorable Cámara de Diputados de Río Gallegos, el órgano legislativo fundamental de la provincia de Santa Cruz, donde se forjan las leyes y se fortalece la democracia. Con una rica historia y un profundo compromiso con nuestra comunidad, la Cámara de Diputados no solo es un símbolo de la voluntad popular, sino también un espacio dinámico de debate y construcción de un futuro mejor para todos los santacruceños.
    </p>
    <button type="button" class="btn btn-light" id="speak-button"><i class="fa fa-volume-up" aria-hidden="true"></i>REPRODUCIR</button>
    <hr>
    
  </div>
<br>
<br>


<div class="b-example-divider"></div>


<div class="container marketing"  >

    <!-- COLUMNAS -->
    <br>
    <h4 style="text-align: center;" class="display-4" data-aos="fade-right">ACTIVIDAD PARLAMENTARIA</h4>
    <br>
    <div class="row" >
       
        <div class="col-lg-3" >
            
            <div class="card shadow-lg p-3 mb-5 bg-body-tertiary rounded" style="width: 16rem; background-color: rgba(0, 0, 0, .1); border: solid rgba(0, 0, 0, .15);border-width: 1px 0;" data-aos="flip-left">
                <!--<svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                </svg>-->
                <img src="{{ asset('img/logo.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2 class="fw-normal">DIPUTADOS</h2>
                    <p>Con diputados y diputadas elegidos por voto directo, nuestra Cámara es el reflejo de la diversidad y pluralidad de nuestra provincia. Cada uno de ellos trae consigo las aspiraciones y desafíos de sus respectivas regiones, contribuyendo a una representación auténtica y efectiva de todos los sectores de la sociedad santacruceña.</p>
                    <p><a class="btn btn-secondary" href="#">VER &raquo;</a></p>
                </div>
            </div>

        </div><!-- /.col-lg-4 -->
        <div class="col-lg-3" >
          <div class="card shadow-lg p-3 mb-5 bg-body-tertiary rounded" style="width: 16rem; background-color: rgba(0, 0, 0, .1); border: solid rgba(0, 0, 0, .15);border-width: 1px 0;" data-aos="flip-left">
              <!--<svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                  xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder"
                  preserveAspectRatio="xMidYMid slice" focusable="false">
                  <title>Placeholder</title>
                  <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
              </svg>-->
              <img src="{{ asset('img/logo.png') }}" class="card-img-top" alt="...">
              <div class="card-body">
                  <h2 class="fw-normal">PROYECTOS</h2>
                  <p>La misión de la Honorable Cámara de Diputados de Río Gallegos es representar al pueblo de Santa Cruz en la elaboración, discusión y sanción de leyes justas y equitativas que promuevan el bienestar común y fortalezcan la democracia. Trabajamos incansablemente para asegurar que cada voz sea escuchada .</p>
                  <p><a class="btn btn-secondary" href="#">VER &raquo;</a></p>
              </div>
          </div>

      </div><!-- /.col-lg-4 -->
      <div class="col-lg-3" >
        <div class="card shadow-lg p-3 mb-5 bg-body-tertiary rounded" style="width: 16rem; background-color: rgba(0, 0, 0, .1); border: solid rgba(0, 0, 0, .15);border-width: 1px 0;" data-aos="flip-left">
            <!--<svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder"
                preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
            </svg>-->
            <img src="{{ asset('img/logo.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h2 class="fw-normal">CÁMARA</h2>
                <p>Con diputados y diputadas elegidos por voto directo, nuestra Cámara es el reflejo de la diversidad y pluralidad de nuestra provincia. Cada uno de ellos trae consigo las aspiraciones y desafíos de sus respectivas regiones, contribuyendo a una representación auténtica y efectiva de todos los sectores de la sociedad santacruceña.</p>
                <p><a class="btn btn-secondary" href="#">VER &raquo;</a></p>
            </div>
        </div>

    </div><!-- /.col-lg-4 -->
    <div class="col-lg-3" >
        <div class="card shadow-lg p-3 mb-5 bg-body-tertiary rounded" style="width: 16rem; background-color: rgba(0, 0, 0, .1); border: solid rgba(0, 0, 0, .15);border-width: 1px 0;" data-aos="flip-left">
            <!--<svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder"
                preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
            </svg>-->
            <img src="{{ asset('img/logo.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h2 class="fw-normal">SESIONES</h2>
                <p>En la Honorable Cámara de Diputados de Río Gallegos, la transparencia y la rendición de cuentas son pilares fundamentales. Promovemos una gestión abierta y accesible, donde los ciudadanos puedan seguir de cerca el trabajo legislativo, participar activamente y ejercer su derecho a la información con marca nuestra constitución .</p>
                <p><a class="btn btn-secondary" href="#">VER &raquo;</a></p>
            </div>
        </div>

    </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
</div>
<div class="b-example-divider"></div>
<div class="container marketing">

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7" data-aos="fade-up"  data-aos-duration="3000">
           
            <h2 class="featurette-heading fw-normal lh-1">Información <span
                    class="text-body-secondary"> Parlamentaria .</span></h2>
            <p class="lead">
                Es la clave para entender las actividades y decisiones del parlamento, ofreciendo transparencia y acceso a documentos, debates y leyes. ¡Mantente informado y participa activamente en la democracia! 

            </p>
            <hr>
            <span class="badge bg-warning ">#InformaciónParlamentaria</span><span class="badge bg-info "> #Transparencia</span>
        </div>
        <div class="col-md-5" data-aos="zoom-in-down">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img"
                aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" /><text x="50%" y="50%"
                    fill="var(--bs-secondary-color)" dy=".3em">500x500</text>
            </svg>
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 order-md-2"  data-aos="fade-up"  data-aos-duration="3000">
            <h2 class="featurette-heading fw-normal lh-1">Agenda <span
                    class="text-body-secondary">Parlamentaria</span></h2>
            <p class="lead">Es el plan estratégico que define las prioridades legislativas del parlamento, organizando debates, leyes y decisiones clave para impulsar el desarrollo y bienestar de nuestra sociedad. ¡Participa y sé parte del cambio! </p><hr><span class="badge bg-dark ">#AgendaParlamentaria</span> <span class="badge bg-success">#DemocraciaEnAcción</span>
        </div>
        <div class="col-md-5 order-md-1" data-aos="zoom-in-down">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img"
                aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" /><text x="50%" y="50%"
                    fill="var(--bs-secondary-color)" dy=".3em">500x500</text>
            </svg>
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7"  data-aos="fade-up"  data-aos-duration="3000">
            <h2 class="featurette-heading fw-normal lh-1">Ordenes. <span
                    class="text-body-secondary">del  día.</span></h2>
            <p class="lead">Es el programa detallado de los temas y asuntos que se discutirán en cada sesión del parlamento, asegurando una organización efectiva y participación activa. ¡Sigue el ritmo de la democracia!</p>
            <hr>
            <span class="badge bg-primary ">#ÓrdenesDelDía</span><span class="badge bg-secondary  "> #ParticipaciónCiudadana</span>
        </div>
        <div class="col-md-5" data-aos="zoom-in-down">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img"
                aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" /><text x="50%" y="50%"
                    fill="var(--bs-secondary-color)" dy=".3em">500x500</text>
            </svg>
        </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

</div><!-- /.container -->


<!-- Lectura -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
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
});

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
updateCountdown();
// Refresh every second
setInterval(updateCountdown, MILLISECONDS_OF_A_SECOND);





</script>


@endsection