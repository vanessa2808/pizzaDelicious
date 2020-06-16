<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/"><span class="flaticon-pizza-1 mr-1"></span>Golden<br><small>restaurant</small></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="/about" class="nav-link">About</a></li>

                <li class="nav-item active"><a href="/menu" class="nav-link">Menu</a></li>
                <li class="nav-item"><a href="/custom_pizza" class="nav-link">Custom Pizza</a></li>


                <li class="nav-item"><a href="/service" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="/blog" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
                <li>
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
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>


                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <ul>
                                <li><a id="navbarDropdown" class="dropdown-item" href="/admin/users/list_users">Manage</a></li>
                                <li><a class="adminpro-icon adminpro-locked author-log-ic" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">

                                        {{ __('Logout') }}
                                    </a></li>
                            </ul>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>

                        @endguest

                    </li>
                    <li class="nav-item"><a href="/cart" class="nav-link">Cart</a></li>


            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

