@extends('welcome')

@section('content')
<form><fieldset ><div class='row'><div class="col-mb-3 col-sm-3">
    <div class="col-auto">
    <label for="id" class="col-form-label">id</label>
    </div>
    <div class="col-auto">
        <input  type="number" class="form-control"> 
    </div>
    <div class="col-auto">
    <span id="passwordHelpInline" class="form-text">
        Must be 8-20 characters long.
    </span>
    </div>
</div> <div class="col-mb-3 col-sm-3">
     <div class="col-auto">
     <label for="apliacion_url" class="col-form-label">apliacion_url</label>
     </div>
     <div class="col-auto">
         <input  type="text" class="form-control"> 
     </div>
     <div class="col-auto">
     <span id="passwordHelpInline" class="form-text">
         Must be 8-20 characters long.
     </span>
     </div>
 </div> <div class="col-mb-3 col-sm-3">
     <div class="col-auto">
     <label for="aplicacion_nombre" class="col-form-label">aplicacion_nombre</label>
     </div>
     <div class="col-auto">
         <input  type="text" class="form-control"> 
     </div>
     <div class="col-auto">
     <span id="passwordHelpInline" class="form-text">
         Must be 8-20 characters long.
     </span>
     </div>
 </div> <div class="col-mb-3 col-sm-3">
     <div class="col-auto">
     <label for="funcion" class="col-form-label">funcion</label>
     </div>
     <div class="col-auto">
         <input  type="text" class="form-control"> 
     </div>
     <div class="col-auto">
     <span id="passwordHelpInline" class="form-text">
         Must be 8-20 characters long.
     </span>
     </div>
 </div><div class="col-mb-3 col-sm-3">
    <div class="col-auto">
    <label for="permiso_alta" class="col-form-label">permiso_alta</label>
    </div>
    <div class="col-auto">
        <input  type="number" class="form-control"> 
    </div>
    <div class="col-auto">
    <span id="passwordHelpInline" class="form-text">
        Must be 8-20 characters long.
    </span>
    </div>
</div><div class="col-mb-3 col-sm-3">
    <div class="col-auto">
    <label for="permiso_baja" class="col-form-label">permiso_baja</label>
    </div>
    <div class="col-auto">
        <input  type="number" class="form-control"> 
    </div>
    <div class="col-auto">
    <span id="passwordHelpInline" class="form-text">
        Must be 8-20 characters long.
    </span>
    </div>
</div><div class="col-mb-3 col-sm-3">
    <div class="col-auto">
    <label for="permiso_modificacion" class="col-form-label">permiso_modificacion</label>
    </div>
    <div class="col-auto">
        <input  type="number" class="form-control"> 
    </div>
    <div class="col-auto">
    <span id="passwordHelpInline" class="form-text">
        Must be 8-20 characters long.
    </span>
    </div>
</div></div><fieldset ></form>        
@endsection