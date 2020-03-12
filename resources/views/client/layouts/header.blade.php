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
                <li>
                    <img src="{{ asset('images/img_avatar.png') }}" alt="" class="avatar1">
                </li>
                <li class="has-menu-child current-menu-item">
                    <a href="javascript:void(0);">Username</a>
                    <ul class="sub-menu">
                        <li><a href="#">Profile</a></li>
                        <li><a href="{{ url('login') }}">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>