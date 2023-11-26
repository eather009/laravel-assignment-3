<div class="main_menu">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand" href="{{route('web.home')}}"><img src="{{ asset('web/img') }}/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav justify-content-end">
                    <li class="nav-item {{ request()->routeIs('web.home') ? 'active' : '' }}"><a class="nav-link" href="{{route('web.home')}}">Home</a></li>
                    <li class="nav-item {{ request()->routeIs('web.about') ? 'active' : '' }}"><a class="nav-link" href="{{route('web.about')}}">About</a></li>
                    <li class="nav-item {{ request()->routeIs('web.project') ? 'active' : '' }}"><a class="nav-link" href="{{route('web.project')}}">Projects</a></li>
                    <li class="nav-item {{ request()->routeIs('web.contact') ? 'active' : '' }}"><a class="nav-link" href="{{route('web.contact')}}">Contact</a></li>
                    <li class="nav-item"><a class="nav-link text-success" href="{{route('login')}}">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
