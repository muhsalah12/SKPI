<header class="nk-header bg-light has-overlay" id="home">
    <div class="overlay shape shape-a-sm"></div>
    <div class="nk-navbar is-light is-sticky" id="navbar">
        <div class="container">
            <div class="nk-navbar-wrap">
                <div class="nk-navbar-logo logo">
                    <a href="{{ URL::to('/') }}" class="logo-link">
                        <img class="logo-dark" src="{{ asset('covid') }}/images/logo-dark.png" srcset="{{ asset('covid') }}/images/logo-dark2x.png 2x"
                            alt="logo">
                        <img class="logo-light" src="{{ asset('covid') }}/images/logo-white.png" srcset="{{ asset('covid') }}/images/logo-white2x.png 2x"
                            alt="logo">
                    </a>
                </div>
                <div class="nk-navbar-toggle d-lg-none"> 
                    <a href="#" class="toggle" data-menu-toggle="navbar-menu">
                        <em class="icon-menu icon ni ni-menu"></em>
                        <em class="icon-close icon ni ni-cross"></em>
                    </a>
                </div>
                <nav class="nk-navbar-menu" id="navbar-menu">
                    <ul class="nk-menu">
                        <li class="nk-menu-item"><a class="scrollto nav-link nk-menu-link"
                                href="{{ URL::to('/') }}">Home</a>
                        </li>
                        <li class="nk-menu-item"><a class="scrollto nav-link nk-menu-link" href="{{ URL::to('penyedia-swab-test') }}">Penyedia Swab Test</a>
                        <li class="nk-menu-item"><a class="scrollto nav-link nk-menu-link" href="{{ URL::to('login') }}">Login</a>
                        </li>
                        {{-- 
                        <li class="nk-menu-item"><a class="scrollto nav-link nk-menu-link" href="#">Symptoms</a>
                        </li>
                        <li class="nk-menu-item"><a class="scrollto nav-link nk-menu-link"
                                href="#">Prevention</a>
                        </li>
                        <li class="nk-menu-item"><a class="scrollto nav-link nk-menu-link"
                                href="#">Treatment</a>
                        </li>
                        <li class="nk-menu-item"><a class="scrollto nav-link nk-menu-link" href="#">FAQ</a>
                        </li>
                        <li class="nk-menu-item"><a class="scrollto nav-link nk-menu-link" href="#">News</a>
                        </li>
                        <li class="nk-menu-item"><a class="nav-link nk-menu-link nk-menu-toggle"
                                href="#">More</a>
                            <ul class="nk-menu-dropdown nk-menu-sub">
                                <li class="nk-menu-item"><a class="nav-link nk-menu-link"
                                        href="{{ URL::to('/') }}">Landing V1</a>
                                </li>
                                <li class="nk-menu-item"><a class="nav-link nk-menu-link"
                                        href="index-v2.html">Landing V2</a>
                                </li>
                                <li class="nk-menu-item"><a class="nav-link nk-menu-link"
                                        href="prevention.html">Inner Page</a>
                                </li>
                            </ul>
                        </li>
                        --}}
                    </ul>
                    {{-- 
                    <ul class="nk-menu-btns">
                        <li class="nk-menu-item"><a href="#" class="btn btn-sm scrollto nav-link">Do &amp;
                                Don’t</a>
                        </li>
                    </ul>
                    --}}
                </nav>
            </div>
        </div>
    </div>
    <div class="nk-page-head">
        <div class="container">
            <div class="nk-page-head-wrap">
                <div class="nk-page-head-text">
                    <h5 class="subtitle">Pencegahan</h5>
                    <h2 class="title">Lindungi Diri Sendiri dengan Mencegah</h2>
                </div>
                <div class="nk-page-head-image">
                    <img src="images/gfx/page-head.png" alt="">
                </div>
            </div>
        </div>
    </div>
</header>