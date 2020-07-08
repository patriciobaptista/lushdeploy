
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic|Raleway&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/34b9ea8fdc.js"></script>
    <link rel="stylesheet" type = "text/css" href="{{ asset('css/theme.css') }}">
    <link rel="stylesheet" type = "text/css" href="{{ asset('css/general.css') }}">
    @yield('title')

  </head>
  <body>
     @php
      if(session()->has('cart')){
       $cart = (session()->get('cart'));
       $total = 0;
       foreach($cart as $product){
          $total += $product['quantity'];
        }
     }
     @endphp
     <header id="header" class="container-fluid">
       <nav class="nav row pt-0 navbar-light bg-faded">
         <div class="col-2 col-md-2 col-lg-3" style="display:inline-block">
           <a href="/"><img class="logo-left pull-left ml-3" src="{{asset('/storage/logo-blanco.png')}}" style="display:inline-block"alt="logo"></a>
           <button id="switch" class="ml-4">Dark/Light theme</button>
         </div>
         <div class="col-6 col-md-7 col-lg-6 text-center" style="display:inline-block">
           <ul class="mt-3">
             @guest
             <li><a href="/destinos">Destinations</a></li>
             <li><a href="/faq">FAQ</a></li>
             <li><a href="/nosotros">About</a></li>
             <li style=><a href="/contacto">Contact</a></li>
            @else
              <li><a href="/destinos">Destinations</a></li>
              <li><a href="/faq">FAQ</a></li>
              <li><a href="/nosotros">About</a></li>
              <li style=><a href="/contacto">Contact</a></li>
              @if(Auth::check() && Auth::user()->isAdmin())
              <li><a href="/ABM/main">edit products</a></li>
              @endif
            @endguest
           </ul>
         </div>

         <div class="offset col-4 col-md-3 col-lg-3 pr-4 text-right" style="display:inline-block">
            @guest
          <ul class="pl-0 mt-3 mb-0 pb-0">
            <li><a href="/register">@if (Route::has('register'))Register/</a>@endif<a href="/login">Log in</a></li>
            <li><a class="" href="/carrito"><i class="fas fa-shopping-cart"></i></a>@if (session()->has('cart'))
              <a id="cart_counter"href="/carrito">{{$total}}</a></li>@endif
          </ul>
           @else
          <div id="dropdown-big" class="dropdown col-lg-4 text-right mt-1">
                   <a class="btn dropdown-toggle pr-2 pt-3 styledropdown" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    welcome {{ Auth::user()->name }}
                   </a>

                   <div class="dropdown-menu mt-2 p-0 m-0" style="background-color: rgba(108, 108, 106, 0.5);" aria-labelledby="dropdownMenuLink">
                     <ul class="pl-0 ml-0 mt-4 row pt-0 mt-0">
                       <li class="dropdown-item styledropdown col-12 pt-0 mt-0"><a href="/perfil">My account</a></li>
                       <li class="dropdown-item col-12 pt-0 mt-0"><a href="/carrito"><i class="fas fa-shopping-cart"></i></a>@if (session()->has('cart'))
                         <a id="cart_counter"href="/carrito">{{$total}}</a></li>@endif
                        <li class="dropdown-item styledropdown col-12 pt-0 mt-0"><a href="" onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">Log out</a></li>
                     </ul>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                   </div>
             </div>
             @endguest
         </div>
       </nav>
       <div id="dropdown-small" class="dropdown">

           <div onclick="myFunction(this)" class="container1 btn btn-secondary dropdown-toggle pt-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <div class="bar1"></div>
         <div class="bar2"></div>
         <div class="bar3"></div>
       </div>
           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
             @guest
               <a class="dropdown-item" href="/register">@if (Route::has('register'))Register</a>@endif<a class="dropdown-item" href="/login">Log in</a>
               <a class="dropdown-item styledropdown" href="/destinos">Destinations</a>
               <a class="dropdown-item" href="/carrito">My cart</a>
               <a class="dropdown-item" href="/faq">About</a>
              <!-- AUTH   <a class="dropdown-item" href="../perfil/perfil.php">Perfil</a> -->
              @else
                <a class="dropdown-item" href="/perfil">My account</a>
                <a class="dropdown-item styledropdown" href="/destinos">Destinations</a>
                <a class="dropdown-item" href="/carrito">My cart</a>
                <a class="dropdown-item" href="/faq">About</a>
                <a class="dropdown-item styledropdown" href="" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                  Log out</a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                 </form>
              @endguest
            <!-- ADMIN MIDDLEWARE <a style=""class="dropdown-item styledropdown" href="../admin/ABM.php">Editar viajes</a> -->
           </div>
         </div>
         <img class="logo-name" src="{{asset('/storage/nombre-blanco.png')}}" alt="">
     </header>

     <script>
     function myFunction(x) {
       x.classList.toggle("change");
     }
     </script>
    <main id="main">
      @yield('main')
</main>


    <footer id="footer" class="container-fluid row pt-4">
        <div class="footer-social col-12 text-center col-lg-6 text-center">
          <p>social media</p>
          <ul>
            <li><a href="https://facebook.com"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://twitter.com"><i class="fab fa-twitter-square"></i></a></li>
            <li><a href="https://instagram.com"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
        <div class="footer-legal col-12 text-center col-lg-6 text-center">
          <ul>
            <li><a href="/contacto">Contact</a></li>
            <li><a href="/faq">FAQ</a></li>
            <li><a href="#">Legal</a></li>
          </ul>
          <ul>
            <li><a href="http://www.credit-card-logos.com/"><img alt="Credit Card Logos" title="Credit Card Logos" src="http://www.credit-card-logos.com/images/multiple_credit-card-logos-2/credit_card_logos_42.gif" width="220" height="40" border="0" class = "mt-2" /></a></li>
          </ul>
        </div>
      </footer>
  <script src="{{ asset('js/themes.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
