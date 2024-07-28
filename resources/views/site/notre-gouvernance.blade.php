@extends('site.includes.base')
@section('title')
{{__('Notre gouvernance')}}
@endsection

@section('content')
<div class="page-title-area title-bg-ten">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-item">
                    <h2>{{__('Notre gouvernance')}}</h2>
                    <ul>
                        <li>
                            <a href="{{ route('home') }}">{{ __('Accueil') }}</a>
                        </li>
                        <li>
                            <span>{{__('Notre gouvernance')}}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="testimonial-area two ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="testimonial-img text-center">
                    <img src="assets/img/testimonial/Dr GOUMOU Emmanuel.jpg" alt="Testimonial">
                    <h3>Dr GOUMOU Emmanuel</h3>
                    <span>{{__("Coordinateur du RECOSAC-G")}} </span>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="testimonial-content">
                    {{-- <ul>
                        <li>
                            <i class="icofont-star checked"></i>
                        </li>
                        <li>
                            <i class="icofont-star checked"></i>
                        </li>
                        <li>
                            <i class="icofont-star checked"></i>
                        </li>
                        <li>
                            <i class="icofont-star checked"></i>
                        </li>
                        <li>
                            <i class="icofont-star checked"></i>
                        </li>
                    </ul> --}}
                    <p>{{__("Dr GOUMOU Emmanuel, est médecin spécialiste en santé publique (MPH, Nutrition) avec 10 ans d’expériences dont plus de 5 ans à l’international avec des ONG (MSF, ACF) et des Agence des Nations Unies (UNICEF et PAM).")}} </p>
                    <br>
                    <p>{{__("Il est le 1er vice-président du réseau des cliniques privées de Guinée (RENOSPAC : Réseau National des Organisations Sanitaires Privées, Associatives et Confessionnelles), il est membre de la Coalition nationale des organisations de la Société civile pour la santé de la reproduction et le repositionnement de la planification familiale ")}} </p>
                    <br>
                    <p>{{__("Il est consultant du Consortium CAEB et Ebenezer International. Pour ce faire, il appui des ONG en Guinée, au Niger et au Mali dans la mise en œuvre des projets de DSSR et de la SSR PF au compte des projet AmplifyChange et Dambe Funds Sahel.")}} </p>
                    <br>
                    <p>{{__("Il coordonne l’intégration des activités de la planification familiale des Partenaires du Projet Notre Santé et de l’ONG Jhpiego dans les cliniques privées (plus de 70 à date). ")}} </p>
                    <br>
                    <p>{{__("Il a des compétences suivantes : ")}} </p>
                    <ul>
                        <li>&bull; {{__("Conception, mise en œuvre des activités de projets en nutrition santé.")}}</li>
                        <li>&bull; {{__("Gestion des données et élaboration de rapports de progression de projets.")}}</li>
                        <li>&bull; {{__("Gestion des mécanismes de coordination sectorielle et intersectorielle en nutrition santé.")}}</li>
                        <li>&bull; {{__("Mobilisation ressources, renforcement des capacités et gestion des partenariats organisationnels.")}}</li>
                        <li>&bull; {{__("Renforcement de la capacité organisationnelle des organisations de la société civile en DSSR (Consultant AmplifyChange, Dambe Funds Sahel, Coalition National des OSC SR/PF…).")}}</li>
                    </ul>
                    
                    <i class="icofont-quote-left quote"></i>
                </div>
            </div>
        </div>
        {{-- <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="testimonial-img">
                    <img src="assets/img/testimonial/M. Alain Tamba MILLIMOUNO.jpg" alt="Testimonial">
                    <h3>Tom Henry</h3>
                    <span>Manager</span>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="testimonial-content">
                    <ul>
                        <li>
                            <i class="icofont-star checked"></i>
                        </li>
                        <li>
                            <i class="icofont-star checked"></i>
                        </li>
                        <li>
                            <i class="icofont-star checked"></i>
                        </li>
                        <li>
                            <i class="icofont-star checked"></i>
                        </li>
                        <li>
                            <i class="icofont-star checked"></i>
                        </li>
                    </ul>
                    <p>The legal definition of a charitable organization (and of charity) varies between countries
                        and in some instances regions of the country. The regulation, the tax treatment.</p>
                    <i class="icofont-quote-left quote"></i>
                </div>
            </div>
        </div> --}}
        {{-- <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="testimonial-img">
                    <img src="assets/img/testimonial/testimonial3.jpg" alt="Testimonial">
                    <h3>Micheal Shon</h3>
                    <span>Director</span>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="testimonial-content">
                    <ul>
                        <li>
                            <i class="icofont-star checked"></i>
                        </li>
                        <li>
                            <i class="icofont-star checked"></i>
                        </li>
                        <li>
                            <i class="icofont-star checked"></i>
                        </li>
                        <li>
                            <i class="icofont-star checked"></i>
                        </li>
                        <li>
                            <i class="icofont-star checked"></i>
                        </li>
                    </ul>
                    <p>The legal definition of a charitable organization (and of charity) varies between countries
                        and in some instances regions of the country. The regulation, the tax treatment.</p>
                    <i class="icofont-quote-left quote"></i>
                </div>
            </div>
        </div> --}}
        {{-- <div class="pagination-area">
            <ul>
                <li>
                    <a href="#">Prev</a>
                </li>
                <li>
                    <a class="active" href="#">1</a>
                </li>
                <li>
                    <a href="#">2</a>
                </li>
                <li>
                    <a href="#">3</a>
                </li>
                <li>
                    <a href="#">Next</a>
                </li>
            </ul>
        </div> --}}
    </div>
</section>
@endsection
