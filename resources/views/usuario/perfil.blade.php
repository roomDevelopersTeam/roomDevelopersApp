@extends('layouts.master')
@section('content')
        <!-- Se crea un cntenedor para la fato y nombre  del video tutoriales en un boton-->
<div class="box-shadow--3dp ">
    <div class="container-fluid " id="contenedorPerfil">
        <div class="row">
            <div class="col-sm-12" align="center">
                <div id="moverBoton">
                    <a href="{{URL::to('tutorial/logout')}}" class="btn btn-info" id="botonSalir">Salir</a>
                </div>
                <img src="https://yt3.ggpht.com/-SN1RQ4kN5bM/AAAAAAAAAAI/AAAAAAAAAAA/T39gSKk4e2g/s88-c-k-no-rj-c0xffffff/photo.jpg"
                     id="nttLogo" class="img-circle">
                <h3 align="center">{{Auth::user()->name}} </h3>
            </div>
        </div>
    </div>


    <!-- Se crea para el progreso de video tutoriales en un boton-->
    <div class="container-fluid" id="contenedorVer">
        <div class="row">
            <div class="col-xs-12" align="center">
                <button type="button" class="btn btn-default" id="NegrillasPalabras" data-toggle="collapse"
                        data-target="#videosCompletados">
                    Tutoriales Completados
                </button>
                <div id="videosCompletados" class="collapse">
                    @foreach($tutorialesCompletados as $tutorialCompletado)
                        <div class="row">
                            <div class="col-xs-4" align="center">
                                <h4 id="NegrillasPalabras">Tutorials</h4>
                                <h5>{{$tutorialCompletado->titulo}}</h5>
                            </div>

                            <div class="col-xs-4" align="center">
                                <h4 id="NegrillasPalabras">Progress</h4>
                                <div class="progress">
                                    <div class="progress-bar" id="modificarProgreso" role="progressbar"
                                         aria-valuenow="100"
                                         aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                        <span class="sr-only">100% Complete</span></div>
                                </div>
                            </div>
                            <div class="col-xs-4" align="center">
                                <h4 id="NegrillasPalabras">Completed</h4>
                                <a href="{{URL::to('tutorial/'.$tutorialCompletado->id)}}"
                                   class="btn btn-info btn-lg" id="modificarBotonOK">
                                    <span class="glyphicon glyphicon-ok"></span>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-xs-12" align="center">
                <button type="button" class="btn btn-default" id="NegrillasPalabras" data-toggle="collapse"
                        data-target="#videosProgreso">
                    En progreso
                </button>
                <div id="videosProgreso" class="collapse">
                    @foreach($tutorialesEnProgreso as $tutorialEnProgreso)
                        <div class="row">
                            <div class="col-xs-4" align="center">
                                <h4 id="NegrillasPalabras">Tutoriales</h4>
                                <h5>{{$tutorialEnProgreso->titulo}}</h5>
                            </div>
                            <div class="col-xs-4" align="center">
                                <h4 id="NegrillasPalabras">Progreso</h4>
                                <div class="progress">
                                    <div class="progress-bar" id="modificarProgreso" role="progressbar"
                                         aria-valuenow="100"
                                         aria-valuemin="0" aria-valuemax="100"
                                         style="width:{{ Auth::user()->porcentaje($tutorialEnProgreso->id) }}%">

                                        <span class="sr-only">100% Complete</span></div>
                                </div>
                            </div>
                            <div class="col-xs-4" align="center">
                                <h4 id="NegrillasPalabras">Incompleto</h4>
                                <a href="{{URL::to('tutorial/'.$tutorialEnProgreso->id)}}" class="btn btn-info btn-sm">
                                    IR!
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>
@endsection