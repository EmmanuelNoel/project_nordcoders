<header class="py-4">



    <nav class="navbar navbar-expand-md fixed-top navbar-light bg-light">
        <div class="container">
            <a href="#" class="navbar-brand text-uppercase fw-bold fs-3">
                BIENVENUE AU COURS
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active fs-5">
                        <a class="nav-link gx-3 fw-bold" href="{{route('accueil')}}">Accueil</a>
                    </li>
{{--                    <li class="nav-item fs-5">--}}
{{--                        <a class="nav-link fw-bold" href="inscription.html">Inscription</a>--}}
{{--                    </li>--}}
                    <li class="nav-item fs-5">
                        <a class="nav-link fw-bold" href="{{route('contact')}}">Contact</a>
                    </li>
                    <li class="nav-item fs-5">
                        <a class="nav-link fw-bold" href="{{route('post.create')}}">Ajouter un post</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
