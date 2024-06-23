@extends('welcome')

@section('content')
<div class="b-example-divider"></div>
    <br>

        <div class="row g-0">


          <div class="card" style="width:   30rem; margin: 0 auto;">
            <img src="{{ asset('img/logo.png')}}"  class="card-img-top">
            <div class="card-body">
              <h5 class="card-title" style="text-align: center;">Ingreso</h5>
              <hr>
              <form action="{{route('acceso_login_post')}}" method="POST" >
                <div class="form-group">
                    <label for="correo">E-mail</label>
                    <input type="text" class="form-control" id="correo" name="correo" value="{{old('correo')}}">
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" >
                </div>
                <hr>
                {{csrf_field()}}
                <input type="submit" value="Ingresar" class="btn btn-primary">
                <a type="button" href="{{route('acceso_registro')}}"  class="btn btn-secondary">Registrarse</a>
             </form>
            </div>
          </div>


        
        </div>
        <br>
      
      <x-flash />
    
    
    
@endsection