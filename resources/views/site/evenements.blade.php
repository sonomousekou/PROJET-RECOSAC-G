@extends('site.includes.base')
@section('title')
{{__('Evénements')}}
@endsection

@section('content')
<div class="page-title-area title-bg-four">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-item">
                    <h2>{{__('Evénements')}}</h2>
                    <ul>
                        <li>
                            <a href="{{ route('home') }}">{{ __('Acceuil') }}</a>
                        </li>
                        <li>
                            <span>{{__('Evénements')}}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="event-area four ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="event-item">
                    <img src="assets/img/event/event1.jpg" alt="Event">
                    <div class="inner">
                        {{-- <h4>09 <span>Jan</span></h4> --}}
                        <h3>
                            <a href="{{ route('event-details') }}">{{__("Organisation du premier Atelier des Réseaux Chrétiens de Santé d’Expression Française d’Afrique (ARCSEFA)")}}</a>
                        </h3>
                        {{-- <ul>
                            <li>
                                <i class="icofont-stopwatch"></i>
                                <span>3.30pm - 5.30pm</span>
                            </li>
                            <li>
                                <i class="icofont-location-pin"></i>
                                <span>Russia</span>
                            </li>
                        </ul> --}}
                    </div>
                </div>
            </div>
           
            <div class="col-lg-6">
                <div class="event-item">
                    <img src="assets/img/event/event2.jpg" alt="Event">
                    <div class="inner">
                        <h4>juin <span>2024</span></h4>
                        <h3>
                            <a href="{{ route('event-details') }}">{{__("Célébration de la journée mondiale de pied bot")}} </a>
                        </h3>
                        {{-- <ul>
                            <li>
                                <i class="icofont-stopwatch"></i>
                                <span>3.30pm - 5.30pm</span>
                            </li>
                            <li>
                                <i class="icofont-location-pin"></i>
                                <span>Russia</span>
                            </li>
                        </ul> --}}
                    </div>
                </div>
            </div>

        </div>
       
    </div>
</section>
@endsection
