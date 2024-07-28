@extends('site.includes.base')
@section('title')
{{__('Activités')}}
@endsection

@section('content')
<div class="page-title-area title-bg-twelve">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-item">
                    <h2>{{__('Activités')}}</h2>
                    <ul>
                        <li>
                            <a href="{{ route('home') }}">{{ __('Acceuil') }}</a>
                        </li>
                        <li>
                            <span>{{__('Activités')}}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

    {{-- <div class="faq-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="faq-img">
                        <img src="assets/img/activites/programme pied bot.jpg" alt="programme pied bot">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title">
                            <h5>{{__("Projet de renforcement de la qualité des soins des formations sanitaires confessionnelles chrétiennes de Guinée")}}</h5>
                        </div>
                        <span class="about-span">{{__("C’est un projet de 18 mois axé sur le monitorage amélioré qui est une approche qui permet de situer le niveau d’atteinte des objectifs assignés aux services et FOSA. ")}}</span>
                        <span class="about-span">{{__("Il nécessite la participation de toutes les parties prenantes, depuis la planification jusqu’à l’évaluation des objectifs assignés aux services/FOSA. ")}}</span>
                        <span class="about-span">{{__("Cette activité est un moyen et un espace de communication entre les prestataires de soins, les gestionnaires des FOSA, les personnes ressources et l’équipe cadre du district sanitaire pour analyser les résultats de soins de santé et identifie les facteurs de dysfonctionnements et d’améliorations des services/FOSA en termes de qualité et de quantité de services.")}}</span>
                        <span class="about-span">{{__("")}}</span> 
                        <p>{{__("La Guinée a l’habitude du monitorage « classique » des formation sanitaires, Pendant ces dernières années, des limites de ces dernières ont été observée. Car, il prenait en compte que les aspects quantitatifs de l’évaluation de la performance.")}} </p>
                        <p>{{__("")}} </p>
                        <p>{{__("")}} </p>
                        <p>{{__("")}} </p>
                        <p>{{__("")}} </p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title">
                            <h2>{{__("")}}</h2>
                        </div>
                        <span class="about-span">{{__("")}}</span>
                        <p>{{__("")}} </p>
                        <p>{{__("")}} </p>
                        <p>{{__("")}} </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-img">
                        <img src="assets/img/activites/programme pied bot.jpg" alt="programme pied bot">
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="faq-img">
                        <img src="assets/img/activites/programme pied bot.jpg" alt="programme pied bot">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title">
                            <h2>{{__("")}}</h2>
                        </div>
                        <span class="about-span">{{__("")}}</span>
                        <p>{{__("")}} </p>
                    </div>
                </div>
            </div>

        </div>
    </div> --}}

@endsection
