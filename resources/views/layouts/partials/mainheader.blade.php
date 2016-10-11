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
            @if (Auth::user())
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('home') }}">Home</a></li>
                    <li><a href="{{ url('causes') }}">Causes</a></li>
                </ul>
            @endif
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <!-- User Account Menu-->
                    <li class="dropdown">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                           <div class="profile-img">
                                @if ( Auth::user()->avatar )
                                    <img src="{{Auth::user()->avatar}}"
                                    alt="Alternate Text" class="img-responsive" />
                                @else
                                   <img src="http://placehold.it/120x120"
                                    alt="Alternate Text" class="img-responsive" />
                                @endif
                            </div>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">                                   
                            <li>
                                <div class="navbar-content">
                                    <div class="row">
                                        <div class="col-md-5">
                                            @if ( Auth::user()->avatar )
                                                <img src="{{Auth::user()->avatar}}"
                                                alt="Alternate Text" class="img-responsive" />
                                            @else
                                               <img src="http://placehold.it/120x120"
                                                alt="Alternate Text" class="img-responsive" />
                                            @endif
                                            
                                            <p class="text-center small">
                                                <a href="#">Change Photo</a></p>
                                        </div>
                                        <div class="col-md-7">
                                            <span>{{ Auth::user()->name }}</span>
                                            <p class="text-muted small">
                                                {{ Auth::user()->email }}</p>
                                            <div class="divider">
                                            </div>
                                            <a href="#" class="btn btn-primary btn-sm active">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="navbar-footer">
                                    <div class="navbar-footer-content">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <a href="#" class="btn btn-default btn-sm">Lock</a>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="{{ url('/logout') }}"
                                                    onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();" class="btn btn-default btn-sm pull-right">Sign Out
                                                </a>
                                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>