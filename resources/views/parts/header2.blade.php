<style>
    #buscador {
        display: block;
    }

    @media screen and (max-width: 600px) {

        #buscador {
            display: none;
            
        }

    }
</style>
<!-- Start Header Area -->
<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
             <a class="navbar-brand logo_h" href="/"><img src="{{asset('karma/img/logo.png')}}" width="200" height="70"></a> 
                <img src="{{asset('images/logo-small.png')}}" href="/" alt="" class="hidden-md-up" style="width: 6%;" />
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item" id="buscador">

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
                       
                        <li class="nav-item"><a class="nav-link" href="contact.html" style="color:#db3300">Náuticos</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.html" style="color:#db3300">Inmuebles</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.html" style="color:#db3300">Nosotros</a></li>
                        <li class="nav-item submenu dropdown">
                           

                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        @include('parts.notificaciones')

                       

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
  
</header>

<!-- End Header Area -->