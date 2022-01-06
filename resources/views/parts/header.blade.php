
<!-- Start Header Area -->
<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                {{-- <a class="navbar-brand logo_h" href="index.html"><img src="{{asset('karma/img/logo.png')}}" alt=""></a> --}}
                <img src="{{asset('images/logo-small.png')}}" href="/productos" alt="" class="hidden-md-up" style="width: 6%;"/>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item">

                            <form method="post" action="{{ URL::route('busca') }}">
                                @csrf
                                <div class="input-group mb-2">
                                    <input type="text" class="form-control" placeholder="Buscar" name="texto" aria-label="" aria-describedby="basic-addon2" size="35">
                                    <div class="input-group-append">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </form>

                        </li>
                        <li class="nav-item active"><a class="nav-link" href="/prod">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Nosotros</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contacto</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contacto</a></li>
                        <!--
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                             aria-expanded="false"><span class="ti-user"> {{Auth::user()->name}}</a>
                            <ul class="dropdown-menu">
                                {{-- <li class="nav-item"><a class="nav-link" href="{{ URL::action('RegisterCompleteController@show', Auth::user()->id) }}">Datos Personales</a></li> --}} {{-- este lleva al ediar --}}
                                <li class="nav-item"><a class="nav-link" href="{{ URL::action('RegisterCompleteController@index') }}">Datos Personales</a></li>
                                @if(Auth::user()->role == 'admin')
                                    <li class="nav-item"><a class="nav-link" href="{{ url('/productosAdmin') }}">Administrador</a></li>
                                @endif
                                <li class="nav-item"><a class="nav-link" href="{{ url('/logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Cerrar Sessión</a>
                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form> 
                                </li>
                            </ul>
                            <li class="nav-item"><a class="nav-link" href="{{route('product.carro')}}" class="cart"><span class="ti-shopping-cart"> {{Session::has('cart') ? Session::get('cart')->totalCantidad : '0'}}</span></a></li>
                        </li>
                    </ul>
                    -->
                </div>
            </div>
        </nav>
    </div>
    @include('parts.notificaciones')


        
        <div id="salida"></div>
    
        

</header>

<!-- End Header Area -->

<script>
    /* $(document).ready(function(){
        var route = "http://localhost:8000/buscador";

        $("#txtbusca").keyup(function(){
            var parametros = "txtbusca"+$(this).val()
            $.ajax({
                data: parametros,
                url:'parts.search',
                type: 'post',
                    beforeSend: function(){ },
                    success: function(response){
                        $(".salida").html(response);
                    },
                    error:function(){
                        alert("error")
                    }
            });
        })
}) */
    
</script>
<style>
   
 /*   .nav-item {
    
    font-size: 20px !important;
    
} */
    
</style>