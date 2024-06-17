@extends('welcome')

@section('content')


    <h1>Firmantes</h1>
    <p class="d-flex justify-content-end">
        <a href="" class="btn btn-success"><i class="fas fa-check"></i>Crear</a>
    </p>

 

    <div class="table-responsive bg-body-secondary">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($datos as $dato)
                        <tr>
                            <td>
                                {{ $dato->ID}}
                            </td>
                            <td>
                                {{ $dato->NOMBRES}}
                            </td>
                            <td>
                                <a href="">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="javascript:void(0);" onclick="">
                                    <i class="fas fa-trash"></i>
                                    
                                </a>
                            </td>
                        </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div id="resultado">
    </div>

@endsection


