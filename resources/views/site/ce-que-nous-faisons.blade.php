@extends('site.includes.base')
@section('title')
{{__('Ce que nous faisons')}}
@endsection

@section('content')
 
<div class="page-title-area title-bg-fourteen">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-item">
                    <h2>{{__('Ce que nous faisons')}}</h2>
                    <ul>
                        <li>
                            <a href="{{ route('home') }}">{{ __('Accueil') }}</a>
                        </li>
                        <li>
                            <span>{{__('Ce que nous faisons')}}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="dream-area pt-100 pb-70">
    <div class="container">
        {{-- <div class="section-title">
            <span class="sub-title">Fulfill our dream</span>
            <h2>Let's make a change</h2>
            <p>We exist for non-profits, social enterprises, community groups, activists,lorem politicians and
                individual citizens that are making.</p>
        </div> --}}
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="dream-item">
            <p>{{__("Pour faire Représenter les structures sanitaires confessionnelles et œuvres médicales chrétiennes dans le cadre des comités techniques de santé et de la planification des programmes de santé ;")}}</p>
            <span class="sub-span">01</span>
                </div>
            </div>
         
            <div class="col-sm-6 col-lg-4">
                <div class="dream-item">
            <p>{{__("Renforcer la coordination, la régulation et le contrôle du sous-secteur sanitaire privé confessionnel chrétien ;")}}</p>
            <span class="sub-span">02</span>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="dream-item">
            <p>{{__("Renforcer la coopération entre les institutions publiques et privées et les établissements de soins membres du réseau, à travers des actions de plaidoyer, de facilitation et d’assistance ;")}}</p>
            <span class="sub-span">03</span>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="dream-item">
            <p>{{__("Renforcer les capacités des structures sanitaires et œuvres médicales membres à s’engager à la fourniture des services de qualité et à des coûts abordables pour les communautés vulnérables ;")}}</p>
            <span class="sub-span">04</span>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="dream-item">
            <p>{{__("Renforcer la performance des structures sanitaires et œuvres médicales membres ;")}}</p>
            <span class="sub-span">05</span>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="dream-item">
            <p>{{__("Contribuer à l’augmentation de l’accès, à l'utilisation des services et l’accroissement de la demande du paquet de services essentiels ;")}}</p>
            <span class="sub-span">06</span>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="dream-item">
            <p>{{__("Renforcer, accroître et contrôler le mécanisme d’approvisionnement des structures sanitaires et œuvres médicales membres, en médicaments essentiels et équipements médicotechniques dans le strict respect des procédures publiques en vigueur ;")}}</p>
            <span class="sub-span">07</span>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="dream-item">
            <p>{{__("Renforcer l’organisation et la régulation du sous- secteur sanitaire confessionnel Chrétien ;")}}</p>
            <span class="sub-span">08</span>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="dream-item">
            <p>{{__("Renforcer la collecte, le partage et l’utilisation des informations sanitaires pour la prise de décision ;")}}</p>
            <span class="sub-span">09</span>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="dream-item">
            <p>{{__("Renforcer le partage des bonnes pratiques et la formation continue ;")}}</p>
            <span class="sub-span">10</span>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="dream-item">
            <p>{{__("Accroître l’impact des programmes de santé publique, en participant directement ou indirectement dans leurs mises en œuvre ;")}}</p>
            <span class="sub-span">11</span>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="dream-item">
            <p>{{__("Contribuer à la recherche sur les systèmes de santé ;")}}</p>
            <span class="sub-span">12</span>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
