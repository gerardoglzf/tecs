@extends('diseño.interfaz')

@section('title','Inicio')

@section('content')

<!--Productos publicados mostrados en la pagina principal-->
<div class="container" id="principal">
        <form class="buscar" role="search">
           <input class="form-control mr-sm-2" type="text" placeholder="Empieza a buscar" aria-label="Search"><br>
            <center>
                <button class="btn btn-outline-success my-2 my-sm-0" id="btnBuscar" type="submit">Search</button>
            </center>
        </form>

        <div class="row">
            <div class="col-sm">
                <div class="card text-center" style="width: 18rem; margin-top: 40px;">
                        <img class="card-img-top rounded-circle mx-auto d-block" style="height: 200px; width: 200px; background-color: #EFEFEF;" src="{{ asset('imagenes/descarga.jfif') }}" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Resistencias</h5>
                        <p class="card-text"><strong>Precio:</strong> $5</p>
                        <p class="card-text"><strong>Descripción:</strong> resistencias de 10 Ohm</p>
                        <a href="show_Producto" class="btn btn-primary">Ver mas..</a>
                    </div>
                </div>
            </div> 
    
            <div class="col-sm">
                    <div class="card text-center" style="width: 18rem; margin-top: 40px;">
                        <img class="card-img-top rounded-circle mx-auto d-block" style="height: 200px; width: 200px; background-color: #EFEFEF;" src="{{ asset('imagenes/arduino-uno.jpg') }}" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Arduino uno</h5>
                        <p class="card-text"><strong>Precio:</strong> $200</p>
                        <p class="card-text"><strong>Descripción:</strong> Arduino uno de 5° generacion</p>
                        <a href="#" class="btn btn-primary">Ver mas..</a>
                    </div>
                </div>
            </div>
    
            <div class="col-sm">
                    <div class="card text-center" style="width: 18rem; margin-top: 40px;">
                        <img class="card-img-top rounded-circle mx-auto d-block" style="height: 200px; width: 200px; background-color: #EFEFEF;" src="{{ asset('imagenes/3-leds.gif') }}" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Leds de coleres</h5>
                        <p class="card-text"><strong>Precio:</strong> $3 c/u</p>
                        <p class="card-text"><strong>Descripcion:</strong> leds de coleres</p>
                        <a href="#" class="btn btn-primary">Ver mas..</a>
                    </div>
                </div>
            </div>
    
            <div class="col-sm">
                    <div class="card text-center" style="width: 18rem; margin-top: 40px;">
                        <img class="card-img-top rounded-circle mx-auto d-block" style="height: 200px; width: 200px; background-color: #EFEFEF;" src="{{ asset('imagenes/3-leds.gif') }}" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Leds de coleres</h5>
                        <p class="card-text"><strong>Precio:</strong> $3 c/u</p>
                        <p class="card-text"><strong>Descripción:</strong> leds de coleres</p>
                        <a href="#" class="btn btn-primary">Ver mas..</a>
                    </div>
                </div>
            </div>
    
            <div class="col-sm">
                    <div class="card text-center" style="width: 18rem; margin-top: 40px;">
                            <img class="card-img-top rounded-circle mx-auto d-block" style="height: 200px; width: 200px; background-color: #EFEFEF;" src="{{ asset('imagenes/arduino-uno.jpg') }}" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Resistencias</h5>
                            <p class="card-text"><strong>Precio:</strong> $5</p>
                            <p class="card-text"><strong>Descripción:</strong> resistencias de 10 Ohm</p>
                            <a href="#" class="btn btn-primary">Ver mas..</a>
                        </div>
                    </div>
                </div> 
        
                <div class="col-sm">
                        <div class="card text-center" style="width: 18rem; margin-top: 40px;">
                            <img class="card-img-top rounded-circle mx-auto d-block" style="height: 200px; width: 200px; background-color: #EFEFEF;" src="{{ asset('imagenes/descarga.jfif') }}" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Arduino uno</h5>
                            <p class="card-text"><strong>Precio:</strong> $200</p>
                            <p class="card-text"><strong>Descripción:</strong> Arduino uno de 5° generacion</p>
                            <a href="#" class="btn btn-primary">Ver mas..</a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection