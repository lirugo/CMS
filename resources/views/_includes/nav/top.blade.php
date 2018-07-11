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
                <a class="navbar-item is-tab" href="#">Sign out</a>
            @else
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" href="/documentation/overview/start/">
                        Docs
                    </a>
                    <div class="navbar-dropdown is-right">
                        <a class="navbar-item" href="/documentation/overview/start/">
                            Overview
                        </a>
                        <a class="navbar-item" href="https://bulma.io/documentation/modifiers/syntax/">
                            Modifiers
                        </a>
                        <a class="navbar-item" href="https://bulma.io/documentation/columns/basics/">
                            Columns
                        </a>
                        <a class="navbar-item" href="https://bulma.io/documentation/layout/container/">
                            Layout
                        </a>
                        <a class="navbar-item" href="https://bulma.io/documentation/form/general/">
                            Form
                        </a>
                        <hr class="navbar-divider">
                        <a class="navbar-item" href="https://bulma.io/documentation/elements/box/">
                            Elements
                        </a>
                        <a class="navbar-item is-active" href="https://bulma.io/documentation/components/breadcrumb/">
                            Components
                        </a>
                    </div>
                </div>
            @endguest
        </div>

    </div>
</nav>