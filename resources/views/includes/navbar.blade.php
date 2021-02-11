<nav class="navbar navbar-expand-lg navbar-light py-3">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}"><b>Travelblog</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            @if($auth && $role == 'User')
                <ul class="navbar-nav mr-auto">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{url('/')}}">Home<span class="sr-only">(current)</span></a>
                            </li>

                            <li class="nav-item dropdown active">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Category
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="{{url('/category/1')}}">Mountain</a>
                                    <a class="dropdown-item" href="{{url('/category/2')}}">Beach</a>
                                    <a class="dropdown-item" href="{{url('/category/3')}}">City</a>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" href="{{url('/profile')}}">Profile</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" href="{{url('/blog')}}">Blog</a>
                            </li>
                        </ul>
                    </div>
                </ul>
            @endif

            @if($auth && $role == 'Admin')
                <ul class="navbar-nav mr-auto">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link active" href="{{url('/')}}">Home<span class="sr-only">(current)</span></a>
                            </li>

                            <li class="nav-item dropdown active">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Category
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="{{url('/category/1')}}">Mountain</a>
                                    <a class="dropdown-item" href="{{url('/category/2')}}">Beach</a>
                                    <a class="dropdown-item" href="{{url('/category/3')}}">City</a>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" href="{{url('/admin')}}">Admin</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" href="{{url('/user')}}">User</a>
                            </li>
                        </ul>
                    </div>
                </ul>
            @endif

            @if(!$auth)
                <ul class="navbar-nav mr-auto">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link active active" href="{{url('/')}}">Home<span class="sr-only">(current)</span></a>
                            </li>

                            <li class="nav-item dropdown active">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Category
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="{{url('/category/1')}}">Mountain</a>
                                    <a class="dropdown-item" href="{{url('/category/2')}}">Beach</a>
                                    <a class="dropdown-item" href="{{url('/category/3')}}">City</a>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" href="#">About Us</a>
                            </li>
                        </ul>
                    </div>
                </ul>
            @endif


            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
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
