@extends('diseño.navbar')

@section('title','Nombre_usuario')

@section('content')

<!--Informacion del perfil de usuario-->
<div class="container-fluid" id="inforPerfil">
    <div class="row">
        <div class="col-10 col-sm-4">
            <div class=" card text-center" style="width: 20rem; margin-top: 50px;">
                <img class="card-img-top rounded-circle mx-auto d-block" style="height: 200px; width: 200px; background-color: #EFEFEF;" src="{{ asset('imagenes/avatar.png') }}" alt="">
                <div class="card-body">
                    <h5 class="card-title">Gerardo Gonzalez Flores</h5>
                    <p class="card-text">Correo: gerardo1997gof@gmail.com</p>
                    <p class="card-text">Facebook: Gerardo Gonzalez</p>
                    <p class="card-text">Telefono: 481-154-1317</p>
                    <button type="submit" class="btn btn-primary">Editar perfil</button>
                </div>
             </div>
        </div>  
    
<!--Registro de productos-->    
        <div class="col-10 col-sm-4" id="perfil" style="width: 20rem; margin-top: 40px;">
            <h5>Ahora puedes registrar tus productos</h5>
             
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
                    <div class="form-group">
                        <input type="text" name="status" placeholder="status" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Guardar</button>
        </div>

        <div class="col-10 col-sm-4" id="reg">
               <h5>Selecciona imagenes del producto</h5>
                        <div class="form-group" id="form"> 
                            <label for="">Photo</label> <br>
                            <input id="file" type="file" name="Imagen" required>
                        </div>  
                        <div class="row">
                            <div class="col-xm preview" id="preview">
                                  
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Guardar</button>
            </div>


            
<!--Productos previamente publicados por el usuario-->
    <div class="container-fluid" id="registrados">
            <h2>Productos registrados</h2>
            <h6>En este apartado podra visualizar los productos que haya registrado</h6>
    <div class="row">  
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
    
        <div class="col-sm">
            <div class="card text-center" style="width: 18rem; margin-top: 40px;">
                <img class="card-img-top rounded-circle mx-auto d-block" style="height: 200px; width: 200px; background-color: #EFEFEF;" src="{{ asset('imagenes/3-leds.gif') }}"" alt="">
                <div class="card-body">
                    <h5 class="card-title">PIC16F84</h5>
                    <p class="card-text"><strong>Precio:</strong> $200</p>
                    <p class="card-text"><strong>Descripción:</strong> Arduino uno de 5° generacion</p>
                    <button type="submit" class="btn btn-primary">Editar</button>
                    <button type="submit" class="btn btn-primary">Eliminar</button>
                </div>
            </div>
        </div>
    
        <div class="col-sm">
            <div class="card text-center" style="width: 18rem; margin-top: 40px;">
                <img class="card-img-top rounded-circle mx-auto d-block" style="height: 200px; width: 200px; background-color: #EFEFEF;" src="{{ asset('imagenes/3-leds.gif') }}" alt="">
                <div class="card-body">
                    <h5 class="card-title">Led infrarrojo</h5>
                    <p class="card-text"><strong>Precio:</strong> $200</p>
                    <p class="card-text"><strong>Descripción:</strong> Arduino uno de 5° generacion</p>
                    <button type="submit" class="btn btn-primary">Editar</button>
                        <button type="submit" class="btn btn-primary">Eliminar</button>
                </div>
            </div>
        </div>

        <div class="col-sm">
                <div class="card text-center" style="width: 18rem; margin-top: 40px;">
                    <img class="card-img-top rounded-circle mx-auto d-block" style="height: 200px; width: 200px; background-color: #EFEFEF;" src="{{ asset('imagenes/descarga.jfif') }}" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Resistencias</h5>
                        <p class="card-text"><strong>Precio:</strong> $200</p>
                        <p class="card-text"><strong>Descripción    :</strong> Arduino uno de 5° generacion</p>
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