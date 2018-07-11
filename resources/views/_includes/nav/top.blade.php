<nav class="navbar has-shadow p-l-50 p-r-50">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{ url('/') }}">
            <img src="https://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
        </a>
    </div>

    <div id="navbarExampleTransparentExample" class="navbar-menu">

        <div class="navbar-start">
            <a class="navbar-item is-tab" href="#">Learn</a>
            <a class="navbar-item is-tab" href="#">Discuss</a>
            <a class="navbar-item is-tab" href="#">Share</a>

        </div>

        <div class="navbar-end">
            @guest
                <a class="navbar-item is-tab" href="{{ url('/login') }}">Sign in</a>
                <a class="navbar-item is-tab" href="{{ url('/register') }}">Sign up</a>
            @else
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" href="/documentation/overview/start/">
                        Hey, {{ Auth::user()->name }} !
                    </a>
                    <div class="navbar-dropdown is-right">
                        <a class="navbar-item" href="#">
                            <span class="icon"><i class="fa fa-fw fa-user-circle-o m-r-5"></i></span>
                            Profile
                        </a>
                        <a class="navbar-item" href="#">
                            <span class="icon"><i class="fa fa-fw fa-bell m-r-5"></i></span>
                            Notifications
                        </a>
                        <a class="navbar-item" href="{{url('/manage')}}">
                            <span class="icon"><i class="fa fa-fw fa-cog m-r-5"></i></span>
                            Manage
                        </a>
                        <hr class="navbar-divider">
                        <a class="navbar-item" href="{{route('logout')}}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <span class="icon">
                                <i class="fa fa-fw fa-sign-out m-r-5"></i>
                            </span>
                            Sign out
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: one;">
                                {{ csrf_field() }}
                            </form>
                        </a>
                    </div>
                </div>
            @endguest
        </div>

    </div>
</nav>