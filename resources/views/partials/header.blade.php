    <div class="navmenu navmenu-fixed-right" id="rightmenu">

        <a href="#" class="navmenu-brand">
            <span class="btn-close" data-toggle="offcanvas"
            data-target=".navmenu" data-canvas="body">&times;</span>
        </a>
        <ul class="nav navmenu-nav">
            <li class="open">
                <span class="dropdown-toggle">Discover</span>
                <ul class="dropdown-menu navmenu-nav">
                    <li><a href="{{ URL::route('browse') }}">Browse</a></li>
                    <li><a href="{{ URL::route('search') }}">Search</a></li>
                    <li><a href="{{ URL::route('artists') }}">Artists</a></li>
                    <li><a href="{{ URL::route('popular') }}">Popular</a></li>
                </ul>
            </li>
            <li class="open">
            <span class="dropdown-toggle">Organize</span>
                <ul class="dropdown-menu navmenu-nav">

                    @if(Auth::guest())
                    <li><a href="{{ URL::route('login') }}">Log In</a></li>
                    <li><a href="{{ URL::route('register') }}">Join Now</a></li>
                    @else
                    <li><a href="{{ URL::route('dashboard') }}">My Dashboard</a></li>
                    @endif
                    <li><a href="{{ URL::route('learn') }}">Learn More</a></li>


                </ul>
            </li>
            <li class="open">
             <span class="dropdown-toggle">More</span>
                <ul class="dropdown-menu navmenu-nav">
                    <li><a href="{{ URL::route('contact') }}">Contact</a></li>
                    <li><a href="{{ URL::route('help') }}">Help</a></li>
                    @if(!Auth::guest())
                        <li><a href="{{ URL::route('logout') }}">Logout</a></li>
                    @endif
                </ul>
            </li>
        </ul>
        <ul class="list-inline">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        </ul>
    </div>
    <header class="navbar intro-header">
        <div class="col-md-6">
            <a href="/"><span class="brand">Our<span>ASMR</span></span></a>
        </div>
        <div class="col-md-6">
            <a href="#" class="pull-right navbar-btn" id="menuToggle"
            data-target=".navmenu" data-canvas="body">
            <i class="fa fa-reorder"></i>
            </a>
        </div>
    </header>