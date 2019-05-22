@extends('diseño.navbar')

@section('title','Nombre_usuario')

@section('content')

<?php $message = Session::get('message') ?>

@if ($message == 'store')
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        ¡Usuarios creado exitosamente!
    </div>
@endif

@include('ventanas.errors')
<!--Informacion del perfil de usuario-->
<div class="container-fluid" id="inforPerfil">
    <div class="row">
        <div class="col-10 col-sm-4">
            <div class=" card text-center" style="width: 20rem; margin-top: 50px;">
                <img class="card-img-top rounded-circle mx-auto d-block" style="height: 200px; width: 200px; background-color: #EFEFEF;" src="{{ asset('imagenes/avatar.png') }}" alt="">
                <div class="card-body">

                    <h5 class="card-title">Nombre:</h5>
                    <p class="card-text">Apellido</p>
                    <p class="card-text">Correo</p>
                    <p class="card-text">Num_telefono</p>
                    <button type="submit" class="btn btn-primary">Editar perfil</button>
                </div>
             </div>
        </div>  

<!--Registro de productos-->    
        <div class="col-10 col-sm-4" id="perfil" style="width: 20rem; margin-top: 40px;">
            <h5>Ahora puedes registrar tus productos</h5>
            {!! Form::open(['route'=>'productos.store', 'method'=>'POST', 'files' => true, 'role' => 'form']) !!}
             
                    <div class="form-group">    
                        <input type="text" name="nom_producto" value="" placeholder="Name" class="form-control"  required>
                    </div>
             
                    <div class="form-group">    
                         <input type="text" style="height: 7rem;" name="descripcion" placeholder="Description" class="form-control" required>
                     </div>
                                  
                    <div class="form-group">    
                        <input type="text" name="cantidad" placeholder="Precio" class="form-control" required>
                    </div>
             
                    <div class="form-group">
                        <input type="text" name="precio" placeholder="Cantidad" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Guardar</button>
                {!! Form::close() !!}
        </div>

        <div class="col-10 col-sm-4" id="reg">
               <h5>Selecciona imagenes del producto</h5>
                    <form action="/file-upload" class="dropzone" id="my-awesome-dropzone">
                        <div class="fallback">
                            <input type="file" name="file" multiple>                         
                        </div>
                    </form>    
                        <button type="submit" class="btn btn-primary">Guardar</button>
            </div>


            
<!--Productos previamente publicados por el usuario-->
    <div class="container-fluid" id="registrados">
            <h2>Productos registrados</h2>
            <h6>En este apartado podra visualizar los productos que haya registrado</h6>
    <div class="row">  
        {{-- productos del usuario --}}
        
            <div class="col-sm">
                <div class="card text-center" style="width: 18rem; margin-top: 40px;">
                    <img class="card-img-top rounded-circle mx-auto d-block" style="height: 200px; width: 200px; background-color: #EFEFEF;" src="{{ asset('imagenes/arduino-uno.jpg') }}" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Arduino uno</h5>
                        <p class="card-text"><strong>Precio:</strong> $200</p>
                        <p class="card-text"><strong>Descripción:</strong> Arduino uno de 5° generacion</p>
                        <button type="submit" class="btn btn-primary">Editar</button>
                        <button type="submit" class="btn btn-primary">Eliminar</button>
                    </div>
                </div>
            </div>
    </div>
</div>

</div>

<script src="{{ asset('js/logica.js') }}"></script>


@endsection