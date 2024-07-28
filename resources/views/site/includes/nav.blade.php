<nav>
    <ul>
        <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
            <a href="{{ route('home') }}">{{ __('Accueil') }}</a>
        </li>

        <li><a href="javascript:void();">{{__('Nous découvrir')}}<i class="fa fa-angle-down"></i></a>
            <!-- Sub Menu -->
            <ul class="sub-menu">
                <li><a href="{{ route('qui-sommes-nous') }}">{{__('Qui sommes-nous ?')}}</a></li>
                <li><a href="{{ route('ce-que-nous-faisons') }}">{{__('Ce que nous faisons')}}</a></li>
                <li><a href="{{ route('notre-gouvernance') }}">{{__('Notre gouvernance')}}</a></li>
                <li><a href="{{ route('contexte-nationnal') }}">{{__('Contexte national')}}</a></li>
                <li><a href="{{ route('nos-partenaires') }}">{{__('Nos partenaires')}}</a></li>
            </ul>
        </li>
        <li class="active {{ request()->routeIs('realisations') ? 'active' : '' }}">
            <a href="{{ route('realisations') }}">{{__('Realisations')}}</a>
        </li>
        <li class="{{ request()->routeIs('activites') ? 'active' : '' }}">
            <a href="{{ route('activites') }}">{{__('Activités')}}</a>
        </li>
        <li class="{{ request()->routeIs('evenements') ? 'active' : '' }}">
            <a href="{{ route('evenements') }}">{{__('Evénements')}}</a>
        </li>
        {{-- <li class="{{ request()->routeIs('adhesion') ? 'active' : '' }}">
            <a href="{{ route('adhesion') }}">{{__('Adhésion')}}</a>
        </li> --}}
        <li class="{{ request()->routeIs('contactez-nous') ? 'active' : '' }}">
            <a href="{{ route('contactez-nous') }}">Contact</a>
        </li>
    </ul>

</nav>