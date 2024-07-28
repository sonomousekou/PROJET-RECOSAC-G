@extends('site.includes.base')
@section('title')
{{__('Qui sommes-nous ?')}}
@endsection

@section('content')
<div class="page-title-area title-bg-fourteen">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-item">
                    <h2>{{__('Qui sommes-nous ?')}}</h2>
                    <ul>
                        <li>
                            <a href="{{ route('home') }}">{{ __('Accueil') }}</a>
                        </li>
                        <li>
                            <span>{{__('Qui sommes-nous ?')}}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ptb-100">
    {{-- rules-area  --}}
    <div class="container">
        {{-- <div class="rules-item"> --}}
            <h3>{{__("Historique du RECOSAC-G")}}</h3>
            
            <p>{{__("Suite à l’avènement de la deuxième république en avril 1984, les églises de Guinée ont connu un éveil par le développement des actions humanitaires à l’intention des communautés pauvres. En 1993, le Gouvernement guinéen a reconnu leur rôle important dans le développement durable des communautés. ")}}</p>
            <p>{{__("Les domaines d’intervention des Eglises étaient au départ l’éducation de base ; puis, ce champ d’action a été élargi dans les domaines de santé, d’activités génératrices de revenus, de la sécurité alimentaire, de l’Eau-Hygiène-Assainissement, de Développement communautaire, de la consolidation de la paix. Ce sont entre autres les axes sur lesquels s’est construite de manière progressive depuis des années, l’expérience des églises pour la promotion humaine.")}}</p>
            <p>{{__("Dans le domaine médical, les églises ont commencé séparément et de façon progressive par la construction et l’ouverture des dispensaires, des centres de santé, des cliniques, puis des hôpitaux. L’intervention des églises dans la lutte contre la maladie à virus Ebola l’a illustrée encore davantage comme partenaires crédibles aux yeux du Gouvernement à travers le Ministère de la Santé et des Institutions internationales (UNICEF, USAID, PAM).")}}</p>
            <p>{{__("D’une part, les activités n’étaient ni coordonnées, ni intégrées dans le système national de santé. Cela est venu se greffer à un problème sous-jacent car les structures sanitaires isolées appartenant à différentes églises chrétiennes fonctionnaient en solos sans base évidente capable d’informer les politiques gouvernementales et la prise de décision. Le besoin des structures sanitaires de se mettre ensemble est devenu une nécessité urgente face aux difficultés (approvisionnement en intrants de prévention et contrôle des infections, formation du personnel en prévention et contrôle des infections…) auxquelles beaucoup de structures sanitaires faisaient face pendant Ebola.")}}</p>
            <p>{{__("En effet, sous les directives du Président de la République d’alors, le gouvernement guinéen en collaboration avec ses partenaires, ont organisé des Etats Généraux de la Santé (EGS) suivi d’un audit institutionnel, organisationnel et fonctionnel à la recherche des causes du dysfonctionnement et de la faible performance du système de santé. Les réflexions menées ont permis à la Guinée de se doter d’un Plan National de Développement Sanitaire (PNDS) 2015-2024 qui repose essentiellement sur les soins de santé primaires et le renforcement du système de santé visant à favoriser l’accès universel aux services de santé.")}}</p>
            <p>{{__("Deux des faiblesses et non des moindres, relevées par le PNDS dans le cadre de la gouvernance et le leadership, était l’absence de coordination du secteur privé (numériquement important en zone urbaine) et le manque de régulation et de contrôle des structures de prestation de soins du secteur privé. Ce même document souligne que le défi majeur du système de santé pour les années à venir, est l’élargissement de la couverture sanitaire à l’ensemble de la population par le renforcement des prestations de services. Pour relever ce défi, le système de santé doit faire face à l’amélioration globale de la gouvernance du secteur tout en renforçant tous les autres piliers du système de santé.")}}</p>
            <p>{{__("D’autre part et eu égard à ces faiblesses et à l’engagement de l’Eglise chrétienne de Guinée de contribuer à travers ses formations sanitaires à l’amélioration de l’état de santé des populations et par ricochet au développement humain intégral des communautés, associée à la volonté du ministère de la santé d’intégrer le secteur privé de la santé dans l’offre globale des soins et soutenue par les partenaires techniques et financiers tels que CRS et DIFAEM, a abouti en juin 2016 à une assemblée générale constitutive (12 structures sanitaires présentes) de création du Réseau Confessionnel Sanitaire Chrétien de Guinée (RECOSAC-G), qui est la plate-forme nationale des structures sanitaires confessionnelles chrétiennes, et ouvert à toutes les structures sanitaires ou œuvres médicales sous les conditions définis dans les statuts et règlement intérieur de l’organisation, conformément aux dispositions de la loi  L/2005/013 du 4 juillet 2005, fixant le régime des associations en République de Guinée. Et s’est engagé dans son protocole d’accord avec le Ministère de la Santé et de l’Hygiène Publique (MSHP), à participer à la mise en œuvre de la Politique Nationale de la Santé (PNS), du Plan National du Développement Sanitaire (PNDS) et du Plan de Relance et de Résilience du Système de Santé (PRRSS).")}}</p>
            <p>{{__("Cependant, l’appui technique et financier coordonné de CRS (Catholic Relief Services), DIFAEM (Institut Allemand pour la Mission Médicale) et Pain Pour le Monde, ainsi que la volonté des pouvoirs publiques, ont apporté un coup d’accélérateur dans la mise en place effective et l’opérationnalisation du RECOSAC-G dès 2017. Il s’agissait pour l’Eglise, d’apporter sa contribution dans le renforcement du sous-secteur confessionnel.")}}</p>
            {{-- <p>{{__("")}}</p> --}}


        {{-- </div> --}}
    </div>
</div>

@endsection
