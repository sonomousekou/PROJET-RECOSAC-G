@extends('site.includes.base')
@section('title')
{{__('Realisations')}}
@endsection

@section('content')
<div class="page-title-area title-bg-fourteen">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-item">
                    <h2>{{__('Realisations')}}</h2>
                    <ul>
                        <li>
                            <a href="{{ route('home') }}">{{ __('Accueil') }}</a>
                        </li>
                        <li>
                            <span>{{__('Realisations')}}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="rules-area ptb-100">
    <div class="container">
        <div class="rules-item">
            <h3>1. {{__("Partenaire (CRS)- CATHOLIC RELIEF SERVICES")}}</h3>
            <ul>
                <li>{{__('Projet de renforcement des systèmes de santé du sous-secteur confessionnel Chrétien en République de Guinée, 6 mois')}}.
                    </li>
                <li>{{__("Projet d’Élaboration du plan stratégique du RECOSAC-G 2024 – 2027")}}</li>
            </ul>
            
            <h3>2.	{{__("Partenaire (DIFAEM)-INSTITUT ALLEMAND POUR LA MISSION MEDICALE")}}</h3>
            <ul>
                <li>{{__("Projet de fourniture d’équipements médicaux et systèmes solaires aux structures membres du RECOSAC-G, 7Mois (2018)")}}</li>
                <li>{{__("Projet de visite de terrain des structures confessionnelles membres du RECOSAC-G, 3Mois (2017)")}}</li>
                <li>{{__("Projet de fourniture d’équipements bureautiques à la coordination du RECOSAC-G")}}</li>
                <li>{{__("Projet « Soutien et coordination de RECOSAC », 12 mois du 01/07/2022 au 30/06/2023")}}</li>
                <li>{{__("Projet « Fonds du Projet de Vaccination COVID-19 », 12 mois du 01/07/2022 au 30/06/2023")}}</li>
                <li>{{__("Projet « Diécké, formation du Docteur Bimou », 48 mois du 01/01/2023 au 31/12/2026")}}</li>
                <li>{{__("Projet « Améliorer l'accès aux médicaments de qualité en Guinée », 24 mois du 01/07/2022 au 30/06/2024")}} </li>
                <li>{{__("Projet d’approvisionnement en médicaments et consommables des formations sanitaires (FOSA) de Guinée, 8 mois du 18/10/2022 au 30/06/2023")}}</li>
            </ul>
            
            <h3>3. {{__("Partenaire (PPLM : PAIN POUR LE MONDE) -BROT FÜR DIE WELT")}}</h3>
            <ul>
                <li>{{__("Projet « Renforcement de la qualité des soins des formations sanitaires confessionnelles du RECOSAC-G », 18 mois du 01/11/2022 au 30/04/2024")}}</li>
                <li>{{__("Projet de renforcement organisationnel de RECOSAC et développement des capacités pharmaceutiques du personnel des Etablissements de santé confessionnelle de Guinée, 12 mois")}}</li>
            </ul>
          
            <h3>4. {{__("Partenaire MIRACLEFEET")}}</h3>
            <ul>
                <li>{{__("Projet Programme Pied Bot, 12 mois du 01/07/2022 au 30/06/2023")}}</li>
            </ul>

            <h3>5. {{__("Partenaire ACHAP (AFRICAN CHRISTIAN HEALTH ASSOCIATION PLATFORM) ou PLATFORME DES ASSOCIATIONS CHRETIENNES AFRICAINES DE SANTE.")}}</h3>
            <ul>
                <li>{{__("Projet de renforcement du RECOSAC-G")}}</li>
                {{-- <li>{{__("")}}</li> --}}
            </ul>
            <h3>6. {{__("Partenaire MSHP – MINISTERE DE LA SANTE ET DE L’HYGIENE PUBLIQUE")}}</h3>

        </div>
    </div>
</div>
@endsection
