<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>roomDevelopers</title>
    {!!Html::style('css/bootstrap.css')!!}
    {!!Html::style('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css')!!}
    {!!Html::style('css/estilosrd.css')!!}
    {!!Html::style('https://fonts.googleapis.com/css?family=Alegreya+Sans')!!}
    {!!Html::style('https://fonts.googleapis.com/css?family=Lato')!!}
</head>
<body>
<header>
    <nav class="navbar navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle  collapsed" data-toggle="collapse"
                        data-target="#navegacion-rd">
                    <span class="sr-only">Desplegar / Ocultar Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{URL::to('/tutorial')}}" class="navbar-brand">
                    <img src="{{asset("images/rd.png")}}" class="img-responsive" id="modificarLogo"/>
                </a>
            </div>
            <!--Inicia menu-->
            <div class="collapse navbar-collapse" id="navegacion-rd">
                <ul class="nav navbar-nav pull-right">
                    @if(!Auth::check())
                        <li><a class="text-center" href="#" data-toggle="modal"
                               data-target="#signUpModal" style="color: #ffffff;">Regístrate</a></li>
                        <li><a class="text-center" href="#" data-toggle="modal" data-target="#logInModal"
                               style="color: #FFFFFF">Inicia
                                Sesión</a></li>
                    @else
                        <li><a class="text-center" href="{{URL::to('usuario/perfil')}}">{{Auth::user()->name}}</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>

<section class="main container-fluid">
    @yield('content')
</section>


{!!Html::script('js/jquery.min.js')!!}
{!!Html::script('js/bootstrap.min.js')!!}
{!!Html::script('js/scriptsrd.js')!!}
{!!Html::script('js/iframeApi.js')!!}
@include('usuario.signUpModal')
@include('usuario.logInModal')
@show


</body>
</html>
