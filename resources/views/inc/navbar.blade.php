  <style>
      .nav-item{
          color:black;
          font-size:20px;
        }
  </style>
  <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" >
    <div class="container">

        <a class="navbar-brand" href="/" style="max-width: 5%;">
            <img src="https://static.vecteezy.com/system/resources/previews/001/200/952/non_2x/music-note-logo-png.png" class="img-fluid">
         </a>
      
        <a class="navbar-brand" href="{{ url('/') }}" style="color:black;font-size:23px;">
            <!--{{ config('app.name', 'Laravel') }}--> Music lovers
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <ul class="navbar-nav">
              <li><a class="nav-link" href="/" style="font-size:20px;">Početna</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/services">Usluge</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/posts">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">O nama</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/posts/create">Kreiraj post</a>
              </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
                    
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a href="/home">Kontrolna tabla</a> 
                          
                          
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
