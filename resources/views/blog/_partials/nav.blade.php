<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="dist/index.html">Start Bootstrap</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="dist/index.html">Pradžia</a></li>
                <li class="nav-item"><a class="nav-link" href="dist/about.html">Parduoda</a></li>
                <li class="nav-item"><a class="nav-link" href="dist/post.html">Ieško</a></li>
                @if (Auth::check())
                    <li class="nav-item"><a class="nav-link colored" href="/logout">Logout</a> </li>
                @else
                    <li class="nav-item"><a class="nav-link colored" href="/login">Login</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
