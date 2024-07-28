<!--  Start Header  -->
<div class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="left">
                    <ul>
                        <li>
                            <i class="icofont-ui-email"></i>
                            <a href="mailto:recosacguinee2016@gmail.com">recosacguinee2016@gmail.com</a>
                        </li>
                        <li>
                            <i class="icofont-ui-call"></i>
                            <a href="tel:(+224) 620591068">(+224) 620591068</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="right">
                    <ul>
                        <li>
                            <span>{{__('Suivez-nous')}} :</span>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/profile.php?id=61552047937714&mibextid=ZbWKwL" target="_blank">
                                <i class="icofont-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.twitter.com/" target="_blank">
                                <i class="icofont-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/@RECOSACGUINEE" target="_blank">
                                <i class="icofont-youtube-play"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/" target="_blank">
                                <i class="icofont-instagram"></i>
                            </a>
                        </li>
                    </ul>
                    {{-- <div class="language">
                        <select>
                            <option>English</option>
                            <option>العربيّة</option>
                            <option>Deutsch</option>
                            <option>Português</option>
                        </select>
                    </div> --}}
    @include('site.includes.language_switcher')

                    {{-- <div class="header-search">
                        <i id="search-btn" class="icofont-search-2"></i>
                        <div id="search-overlay" class="block">
                            <div class="centered">
                                <div id="search-box">
                                    <i id="close-btn" class="icofont-close"></i>
                                    <form>
                                        <input type="text" class="form-control" placeholder="Search..." />
                                        <button type="submit" class="btn">Search</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>


<div class="navbar-area sticky-top">

    <div class="mobile-nav">
        <a href="index.html" class="logo">
            <img src="assets/img/logo-two.png" alt="Logo">
        </a>
    </div>

    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.html">
                    <img src="assets/img/logo.png" class="logo-one" alt="Logo">
                    <img src="assets/img/logo-two.png" class="logo-two" alt="Logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('home') }}">{{ __('Accueil') }}</a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">{{__('Nous découvrir')}} <i
                                    class="icofont-simple-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{ route('qui-sommes-nous') }}">{{__('Qui sommes-nous ?')}}</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('ce-que-nous-faisons') }}">{{__('Ce que nous faisons')}}</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('notre-gouvernance') }}">{{__('Notre gouvernance')}}</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('contexte-nationnal') }}">{{__('Contexte national')}}</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('nos-partenaires') }}">{{__('Nos partenaires')}}</a></li>
                            </ul>
                        </li>
                        
                        <li class="nav-item {{ request()->routeIs('realisations') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('realisations') }}">{{__('Realisations')}}</a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('activites') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('activites') }}">{{__('Activités')}}</a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('evenements') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('evenements') }}">{{__('Evénements')}}</a>
                        </li>
                        {{-- <li class="nav-item {{ request()->routeIs('adhesion') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('adhesion') }}">{{__('Adhésion')}}</a>
                        </li> --}}
                        <li class="nav-item {{ request()->routeIs('contactez-nous') ? 'bg-warning' : '' }}">
                            <a class="nav-link" href="{{ route('contactez-nous') }}">Contact</a>
                        </li>

                    </ul>
                    <div class="side-nav">
                        <a class="donate-btn" href="{{ route('dons') }}">
                            {{__('Faire un don')}}
                            <i class="icofont-heart-alt"></i>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!--  End Header  -->
