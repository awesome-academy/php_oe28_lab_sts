<header class="header">
    <div class="container">
        <nav class="navbar">
            <a href="{{ url('/') }}" class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="">
            </a>
            <a href="javascript:void(0);" id="mobile-menu-toggler">
                <i class="ti-align-justify"></i>
            </a>
            <ul class="navbar-nav">
                @if (Auth::user())
                    <li>
                        <img src="{{ Auth::user()->avatar }}" alt="" class="avatar1">
                    </li>
                    <li class="has-menu-child current-menu-item">
                        <a href="javascript:void(0);">{{ Auth::user()->username }}</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('profile.index') }}">{{__('Profile')}}</a></li>
                            <li><a href="{{ route('logout') }}">{{__('Logout')}}</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
</header>
