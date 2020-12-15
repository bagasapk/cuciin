<div class="sidenav">
    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M6.5 10.995V14.5a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5V11c0-.25-.25-.5-.5-.5H7c-.25 0-.5.25-.5.495z" />
        <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
    </svg>
    <div class="container mt-3 pt-3 pl-3 ml-3 ">
        <img src="img/diza.jpg" class="rounded-circle " alt="Cinque Terre" width="100px" height="100px">
    </div>
    <div class="row d flex justify-content-center mt-3 pt-3">
        <div class="pr-4">
            <a href="{{route('admin')}}">
                <x-feathericon-database class="icons-sidebar " style="color: #555;" />
                Beranda
            </a>
        </div>
    </div>
    <div class="row d flex justify-content-center mt-4">
        <a href="{{route('update')}}">
            <div class="pr-4 mr-1">
                <x-feathericon-archive class="icons-sidebar" style="color: #555;" />
                Riwayat
            </div>
        </a>
    </div>
    <div class="row d flex justify-content-center mt-4">
        <div class="pr-2">
            <a href="/services">
                <x-feathericon-shopping-bag class="icons-sidebar " style="color: #555;" />
                Transakasi
            </a>
        </div>
    </div>
    </br>
    <div class="row d flex justify-content-center mt-5 pt-5">
        <div class="pr-4">
            <!-- <a href="/services" style="color:red;">
                <x-feathericon-log-out class="icons-sidebar " style="color:red; " />
                Keluar
            </a> -->
            <a style="color:red;" class="keluar" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <x-feathericon-log-out class="icons-sidebar " style="color:red; " />Keluar
            </a>
            @guest
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
                @endguest
            </form>
        </div>
    </div>
</div>