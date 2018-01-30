<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>

        </div>


        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
                <li><a href="{{ url('/home') }}">Dashboard</a></li>

                @if (!Auth::guest())

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Armario A <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('armarisview/create') }}">Añadir a  Armario A</a></li>
                            <li><a href="{{ url('armarisview/') }}">Lista de Armario A</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ url('datatable') }}">Otros</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Armario B <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('armaribview/create') }}">Nuevo Armario B</a></li>
                            <li><a href="{{ url('armaribview/') }}">Lista de Armario B</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ url('datatable') }}">Otros</a></li>
                        </ul>
                    </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('users') }}">Manage Users</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('settings') }}">Other Settings</a></li>
                    </ul>
                </li>
                @endif

                <li><a href="{{ url('/about') }}">About</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Login</a></li>
                <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->username }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/profile') }}">Edit Profile</a></li>
                        <li><a href="{{ url('/password') }}">Change password</a></li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ url('/logout') }}"
                               onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
