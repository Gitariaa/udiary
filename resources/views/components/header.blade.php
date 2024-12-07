<header id="header" class="header fixed-top">

    <div class="branding d-flex align-items-cente">

        <div class="container position-relative d-flex align-items-center justify-content-between">
            <a href="{{ url('/') }}" class="logo d-flex align-items-center text-decoration-none">
                <h1 class="sitename">UdiarY</h1>
                <span>.</span>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">UdiarY</a>
                    </li>

                    <li class="dropdown"><a href="#"> <span> U </span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            @if (Route::has('login'))
                                @auth
                                    <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            ULogout.
                                        </a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                @else
                                    <li><a href="{{ route('login') }}">ULogin.</a></li>
                                    <li><a href="{{ url('/') }}">UBack.</a></li>
                                @endauth
                            @else
                                <li><a href="{{ url('/') }}">UBack.</a></li>
                            @endif

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/information') }}">
                            <i class="bi bi-info-circle me-2">Uinfo</i>
                        </a>
                    </li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>


    </div>

</header>

