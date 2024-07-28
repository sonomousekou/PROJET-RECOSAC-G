@extends('site.includes.base')
@section('title')
{{__('Contexte national')}}
@endsection

@section('content')
<div class="page-title-area title-bg-twelve">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-item">
                    <h2>{{__('Contexte national')}}</h2>
                    <ul>
                        <li>
                            <a href="{{ route('home') }}">{{ __('Accueil') }}</a>
                        </li>
                        <li>
                            <span>{{__('Contexte national')}}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="faq-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            {{-- <div class="col-lg-6">
                <div class="faq-img">
                    <img src="assets/img/faq-main.jpg" alt="FAQ">
                </div>
            </div> --}}
            <div class="col-lg-12">
                <ul class="accordion">
                    <li>
                        <a>
                            {{__("Contexte géographique du pays")}}
                            <i class="icofont-plus"></i>
                            <i class="icofont-minus two"></i>
                        </a>
                        <p>{{__("La République de Guinée est située en Afrique Occidentale. Elle est limitée par la Guinée Bissau au Nord-Ouest, le Sénégal et le Mali au Nord, la Côte d’Ivoire et le Mali à l’Est, le Libéria et la Sierra Leone au Sud et l’Océan Atlantique à l’Ouest. Le pays est bordé par 300 km de côte et s’étend sur 800 km d’Est en Ouest et 500 km du Nord au Sud. Sa superficie totale est de 245 857 km².")}} </p>
                    </li>
                    <li>
                        <a>
                            {{__("Situation démographique du pays")}}
                            <i class="icofont-plus"></i>
                            <i class="icofont-minus two"></i>
                        </a>
                        <p>{{__("Le Recensement Général de la Population et de l'Habitation de 2014 a déterminé la population guinéenne à 10.628.972 habitants. Elle est constituée en majorité de femmes (51,62%). L’enquête MICS 2016, montre que le taux brut de mortalité est de 10,12‰ et le taux brut de natalité de 33,1‰, soit un taux d’accroissement naturel de 2,38% avec un indice synthétique de fécondité de 4,8. L’espérance de vie à la naissance est de 58,9 ans.")}} </p>
                    </li>
                    <li>
                        <a>
                            {{__("Situation politique, administrative et gouvernance du pays")}}
                            <i class="icofont-plus"></i>
                            <i class="icofont-minus two"></i>
                        </a>
                        <p>{{__("Au plan politique, la Guinée s’est engagée dans un processus démocratique qui garantit les libertés et les droits fondamentaux dont le droit à la santé. La Guinée compte huit (8) régions administratives dont la ville de Conakry qui jouit d’un statut de collectivité décentralisée spécifique.")}} </p>
                        <p>{{__("Le pays compte 33 préfectures, 38 communes urbaines dont 5 à Conakry, 324 communes rurales ou sous-préfectures. Ces collectivités se subdivisent en 4142 quartiers/districts et 15741 villages/secteurs. La structure organisationnelle du système de santé est calquée sur le découpage administratif du pays ; il comprend 8 régions sanitaires et 38 districts sanitaires.")}} </p>
                    </li>
                    <li>
                        <a>
                            {{__("Situation socio-économique du pays")}}
                            <i class="icofont-plus"></i>
                            <i class="icofont-minus two"></i>
                        </a>
                        <p>{{__("Le pays dispose d'importantes ressources naturelles. En dépit de ses énormes potentialités naturelles, la Guinée fait partie des pays les plus pauvres du monde. En 2012, elle a occupé le 178ème rang sur 186 pays à l’indice de développement humain durable.")}}</p>
                        <p>{{__("La situation socioéconomique de la Guinée en 2012 est marquée par la persistance de la pauvreté. En effet, les données de l’ELEP 2012 (Enquête Légère pour l’Évaluation de la Pauvreté) indiquent que 55,2 % de la population vivent en dessous du seuil de pauvreté.")}} </p>
                        <p>{{__("La croissance économique est estimée à 3,9%, soit le même niveau qu’en 2011, impulsée principalement par l’augmentation de la production agricole et de la bonne tenue du secteur secondaire. Les recettes fiscales exprimées en pourcentage du produit intérieur brut (PIB) ont augmenté de 16,8% à 19,8%, grâce à l’accroissement des recettes sur les produits pétroliers et des recettes sur le commerce international.")}} </p>
                        <p>{{__("")}} </p>
                    </li>
                    <li>
                        <a>
                            {{__("Situation sanitaire du pays")}}
                            <i class="icofont-plus"></i>
                            <i class="icofont-minus two"></i>
                        </a>
                        <p>{{__("Entre 2012 et 2016, la mortalité maternelle est passée de 724 à 550 pour 100 000 naissances vivantes, la mortalité infanto juvénile a baissé de 123‰ à 88‰ et la mortalité infantile de 67‰ à 44‰. Malgré les diminutions observées, la mortalité maternelle et la mortalité infanto juvénile restent encore très élevées.")}} </p>
                        <p>{{__("Sur le plan épidémiologique, les principales causes de la morbidité et de la mortalité sont liées aux maladies transmissibles dont les maladies à potentiel épidémique, les maladies évitables par la vaccination. Les maladies non transmissibles liées aux modes de vie prennent de plus en plus d’importance.")}} </p>
                        <p>{{__("La prévalence du paludisme reste encore élevée avec une prévalence de la parasitémie chez 15% des enfants. Cette pathologie représente 40,82% des consultations et 45,30% des hospitalisations dans les formations sanitaires publiques et 36% des causes de décès hospitaliers sont dues au paludisme grave. C’est la première cause de mortalité des enfants de moins de 5 ans.")}} </p>
                        <p>{{__("Le VIH/sida demeure un problème de santé publique avec une prévalence stable de 1,7% en 2012. Cette prévalence est élevée au niveau des groupes les plus exposés au risque en particulier les professionnelles de sexe (16,7%). La prévalence du VIH chez les femmes enceintes a connu une augmentation entre 2008 (2,5%, ENSS) et 2015 (3,56%, ENSS) et deux fois plus élevée que celle de la population générale.")}} </p>
                        <p>{{__("La prévalence de la Tuberculose, de 178 TPM+ pour 100.000 habitants, reste encore élevée avec sa double charge de coinfection avec le VIH/sida. Dans le but de donner une réponse globale et effective aux problèmes sanitaires de la population, le Gouvernement envisage de solliciter le secteur privé dans le cadre de partenariats public-privé (PPP) afin de combler le déficit de capital d’investissement, de technologie et de savoir-faire requis pour améliorer l’efficacité et la qualité des prestations de services publics.")}} </p>
                        <p>{{__("Dans le cadre de ces contrats de PPP, le secteur privé serait en mesure de participer au financement ou au préfinancement d’infrastructures. Les PPP permettent également un meilleur partage des risques entre le secteur privé et le secteur public.")}} </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
