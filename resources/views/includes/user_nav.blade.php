<!-- Start header section -->
<header id="aa-header">

    <!-- start header top  -->
 <div class="aa-header-top">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="aa-header-top-area">
                <!-- start header top left -->
                <div class="aa-header-top-left">
                  <!-- start language -->
                  <div class="aa-language">
                    <div class="dropdown">
                      <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <img src="{{ asset('front/img/flag/english.jpg')}}" alt="english flag">ENGLISH
                        <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#"><img src="{{ asset('front/img/flag/french.jpg')}}" alt="">FRENCH</a></li>
                        <li><a href="#"><img src="{{ asset('front/img/flag/english.jpg')}}" alt="">ENGLISH</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- / language -->
    
                  <!-- start currency -->
                  <div class="aa-currency">
                    <div class="dropdown">
                      <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <i class="fa fa-usd"></i>USD
                        <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#"><i class="fa fa-euro"></i>EURO</a></li>
                        <li><a href="#"><i class="fa fa-jpy"></i>YEN</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- / currency -->
                  <!-- start cellphone -->
                  <div class="cellphone hidden-xs">
                    <p><span class="fa fa-phone"></span>00-62-658-658</p>
                  </div>
                  <!-- / cellphone -->
                </div>
                <!-- / header top left -->
                <div class="aa-header-top-right">
                  <ul class="nav navbar-nav navbar-right">
                    
                    <li class="hidden-xs"><a href="wishlist.html">Wishlist</a></li>
                    <li class="hidden-xs"><a href="cart.html">My Cart</a></li>
                    <li class="hidden-xs"><a href="checkout.html">Checkout</a></li>                                                
                    <li>
                            @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- / header top  -->

</header>