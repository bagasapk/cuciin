<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #d3e3fd;">
    <div class="d-flex justify-content-between w-100">
        <div class="d-flex justify-content-start">
            @guest
            @if (Route::has('login'))
            <a href="{{url('/')}}"><img src="img/Logo.png" alt="Logo Laundry" class="navbar-brand logo pl-2" href="/"></a>
            @endif
            @else
            @if(Auth::user()->level=='admin')
            <a href="{{route('admin')}}"><img src="img/Logo.png" alt="Logo Laundry" class="navbar-brand logo pl-2" href="/"></a>
            @else
            <a href="{{route('homepage')}}"><img src="img/Logo.png" alt="Logo Laundry" class="navbar-brand logo pl-2" href="/"></a>
            @endif
            @endguest
            <a class="nav-link" style="color:black" href="{{route('about')}}">About Cuciin </a>
            <a class="nav-link" style="color:black" href="{{route('faq')}}">FAQ Cuciin</a>
            <a class="nav-link" style="color:black" href="#">Contacts</a>
        </div>
        <div class="d-flex justify-content-end">
            @guest
            @if (Route::has('login'))
            <a class="nav-link" style="color:black" href="{{ route('login') }}">{{ __('Login') }}</a>
            @endif
            @if (Route::has('register'))
            <a class="nav-link" style="color:black" href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
            @else
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
                @endguest
            </form>
        </div>
    </div>
</nav>