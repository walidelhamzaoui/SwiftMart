<nav class="navbar navbar-expand-md navbar-white shadow-sm  " >
    <div class="container">
        <a class="navbar-brand text-white" href="{{ url('/') }}">
        <img src="/logo.png " class="img-fluid  rounded-circle" alt="" style="width:40px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
             <ul class="navbar-nav ms-auto  gap-lg-5 gap-2 pt-2">
               <li> <a class="navbar-brand fs-5" href="{{ url('/') }}"  style="color:#0d0d0e">
                    Home
                 </a></li>
                <li><a class="navbar-brand  fs-5" href="/#contact" style="color:#0a0a0b">
                    Contact us
                 </a></li>
               <li> <a class="navbar-brand fs-5" href="{{ url('/') }}" style="color:#131213">
                    Shopping
                 </a> </li> 
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                <div class="form-group" style="fit-content">
              
                    
                    <a href="{{route('cart.index')}}" class="nav-link mt-2 p-lg-2 p-3" style="background-color:rgb(189, 62, 24);color:antiquewhite; border-radius:7px;width:fit-content">
                    
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16" >
                            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                          </svg>
                          {{Cart::instance('cart')->count()}}
                    
                    </a>
                    </div>
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item ">
                            <a class="nav-link " href="{{ route('login') }}"><button class="btn text-white" style="background-color:#660F56">{{ __('Login') }}</button></a>
                        </li>
                    @endif 

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}"><button class="btn text-white " style="background-color:#AE2D68">{{ __('Register') }}</button></a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>