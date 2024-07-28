@extends('site.includes.base')
@section('title')
{{ __('Acceuil') }}
@endsection

@section('content')
<div class="banner-area mb-3">
	<div class="d-table">
		<div class="d-table-cell">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="banner-content">
							<span>{{__('Bienvenue au RECOSAC-G')}}</span>
							<h1>{{__('Réseau Confessionnel Sanitaire Chrétien de Guinée (RECOSAC-G).')}}</h1>
							<p>{{__("Suite à l’avènement de la deuxième république en avril 1984, les églises de Guinée ont connu un éveil par le développement des actions humanitaires à l’intention des communautés pauvre…")}}</p>
							<div class="banner-btn-area">
								<a class="common-btn banner-btn" href="{{ route('qui-sommes-nous') }}">{{__('Qui sommes-nous ?')}}</a>
								<a class="common-btn" href="{{ route('dons') }}">{{__('Faire un don')}}</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="banner-img">
							<img src="assets/img/banner/acceuil_recosac.jpg" alt="Banner">
							<div class="video-wrap">
								<button class="js-modal-btn" data-video-id="uemObN8_dcw">
									<i class="icofont-ui-play"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="about-area pt-100 pb-70">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="about-img">
					<img src="assets/img/about/about-main1.jpg" alt="About">
				</div>
			</div>
			<div class="col-lg-6">
				<div class="about-content">
					<div class="section-title">
						<span class="sub-title">{{__('A propose de nous')}}</span>
						<h3>{{__('Réseau Confessionnel Sanitaire Chrétien de Guinée (RECOSAC-G).')}}</h3>
					</div>
					{{-- <span class="about-span">We exist for non-profits, social enterprises, community groups,
						activists,lorem politicians and individual citizens that are making.</span> --}}
					<p>{{__("Suite à l’avènement de la deuxième république en avril 1984, les églises de Guinée ont connu un éveil par le développement des actions humanitaires à l’intention des communautés pauvres. En 1993, le Gouvernement guinéen a reconnu leur rôle important dans le développement durable des communautés.")}}</p>
					<p>{{__("Les domaines d’intervention des Eglises étaient au départ l’éducation de base ; puis, ce champ d’action a été élargi dans les domaines de santé, d’activités génératrices de revenus, de la sécurité alimentaire, de l’Eau-Hygiène-Assainissement, de Développement communautaire, de la consolidation de la paix.")}}</p>
					<div class="about-btn-area">
						<a class="common-btn about-btn" href="#">{{__('Devenir membre du RECOSAC-G')}} </a>
						<a class="common-btn" href="{{ route('qui-sommes-nous') }}">{{__('Lire plus')}}</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="feature-area pt-100 pb-70">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-4 col-lg-3">
				<div class="feature-item">
					<h3>
						<a href="#">Vision</a>
					</h3>
					<p>{{__("Une Guinée où toutes les populations sont en bonne santé, économiquement et socialement productives, bénéficiant d’un accès universel à des services et soins de santé de qualité, avec leur pleine participation.")}}</p>
				</div>
			</div>
			<div class="col-sm-8 col-lg-5">
				<div class="feature-item two">
					<h3>
						<a href="#">Mission</a>
					</h3>
					<p>{{__("La mission de RECOSAC-G est l’amélioration durable de la qualité des offres de soins médicaux aux populations guinéennes démunies à travers un processus qui unit les communautés sans discrimination ethnique, politique, religieuse :")}} </p>
					<ul style="color: white;">
						<li>{{__("En permettant aux populations démunies, leurs familles et communautés de satisfaire leurs besoins sanitaires ;")}}</li>
						<li>{{__("En faisant la promotion des droits humains dans le domaine de santé.")}} </li>
					</ul>
					
				</div>
			</div>
			<div class="col-sm-4 col-lg-3">
				<div class="feature-item three">
					<h3>
						<a href="#">{{__('Valeurs')}}</a>
					</h3>
						<ul style="color: white;">
							<li>{{__('Centré sur le Christ,')}}</li>
							<li>{{__('Respect, intégrité, transparence et responsabilité,')}}</li>
							<li>{{__("Inclusivité, innovation, travail d’équipe et diversité,")}}</li>
							<li>{{__('Professionnalisme et partenariats')}}</li>
						</ul>
				</div>
			</div>
		</div>
	</div>
</div>


{{-- <section class="donations-area pt-100 pb-70">
	<div class="container">
		<div class="section-title">
			<span class="sub-title">Causes to care</span>
			<h2>Be the reason of someone smiles</h2>
			<p>We exist for non-profits, social enterprises, community groups, activists,lorem politicians and
				individual citizens that are making.</p>
		</div>
		<div class="row">
			<div class="col-sm-6 col-lg-4">
				<div class="donation-item">
					<div class="img">
						<img src="assets/img/donation/donation1.jpg" alt="Donation">
						<a class="common-btn" href="donation-details.html">Donate Now</a>
					</div>
					<div class="inner">
						<div class="top">
							<a class="tags" href="#">#Medical</a>
							<h3>
								<a href="donation-details.html">Need help for treatment</a>
							</h3>
							<p>We exist for non-profits, social enterprises, activists. Lorem politicians and
								individual citizens.</p>
						</div>
						<div class="bottom">
							<div class="skill">
								<div class="skill-bar skill1 wow fadeInLeftBig">
									<span class="skill-count1">85%</span>
								</div>
							</div>
							<ul>
								<li>Raised: $5,500.00</li>
								<li>Goal: $7,000.00</li>
							</ul>
							<h4>Donated by <span>60 people</span></h4>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-lg-4">
				<div class="donation-item">
					<div class="img">
						<img src="assets/img/donation/donation2.jpg" alt="Donation">
						<a class="common-btn" href="donation-details.html">Donate Now</a>
					</div>
					<div class="inner">
						<div class="top">
							<a class="tags" href="#">#Education</a>
							<h3>
								<a href="donation-details.html">Education for poor children</a>
							</h3>
							<p>We exist for non-profits, social enterprises, activists. Lorem politicians and
								individual citizens.</p>
						</div>
						<div class="bottom">
							<div class="skill">
								<div class="skill-bar skill2 wow fadeInLeftBig">
									<span class="skill-count2">95%</span>
								</div>
							</div>
							<ul>
								<li>Raised: $6,500.00</li>
								<li>Goal: $8,050.00</li>
							</ul>
							<h4>Donated by <span>50 people</span></h4>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-lg-4">
				<div class="donation-item">
					<div class="img">
						<img src="assets/img/donation/donation3.jpg" alt="Donation">
						<a class="common-btn" href="donation-details.html">Donate Now</a>
					</div>
					<div class="inner">
						<div class="top">
							<a class="tags" href="#">#Family</a>
							<h3>
								<a href="donation-details.html">Financial help for poor</a>
							</h3>
							<p>We exist for non-profits, social enterprises, activists. Lorem politicians and
								individual citizens.</p>
						</div>
						<div class="bottom">
							<div class="skill">
								<div class="skill-bar skill3 wow fadeInLeftBig">
									<span class="skill-count3">90%</span>
								</div>
							</div>
							<ul>
								<li>Raised: $5,540.00</li>
								<li>Goal: $6,055.00</li>
							</ul>
							<h4>Donated by <span>40 people</span></h4>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-lg-4">
				<div class="donation-item">
					<div class="img">
						<img src="assets/img/donation/donation4.jpg" alt="Donation">
						<a class="common-btn" href="donation-details.html">Donate Now</a>
					</div>
					<div class="inner">
						<div class="top">
							<a class="tags" href="#">#Funding</a>
							<h3>
								<a href="donation-details.html">Funding for family</a>
							</h3>
							<p>We exist for non-profits, social enterprises, activists. Lorem politicians and
								individual citizens.</p>
						</div>
						<div class="bottom">
							<div class="skill">
								<div class="skill-bar skill4 wow fadeInLeftBig">
									<span class="skill-count4">80%</span>
								</div>
							</div>
							<ul>
								<li>Raised: $5,56.00</li>
								<li>Goal: $6,85.00</li>
							</ul>
							<h4>Donated by <span>30 people</span></h4>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-lg-4">
				<div class="donation-item">
					<div class="img">
						<img src="assets/img/donation/donation5.jpg" alt="Donation">
						<a class="common-btn" href="donation-details.html">Donate Now</a>
					</div>
					<div class="inner">
						<div class="top">
							<a class="tags" href="#">#Relief</a>
							<h3>
								<a href="donation-details.html">Relief for cyclone-affected</a>
							</h3>
							<p>We exist for non-profits, social enterprises, activists. Lorem politicians and
								individual citizens.</p>
						</div>
						<div class="bottom">
							<div class="skill">
								<div class="skill-bar skill5 wow fadeInLeftBig">
									<span class="skill-count5">75%</span>
								</div>
							</div>
							<ul>
								<li>Raised: $5,5.00</li>
								<li>Goal: $3,85.00</li>
							</ul>
							<h4>Donated by <span>20 people</span></h4>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-lg-4">
				<div class="donation-item">
					<div class="img">
						<img src="assets/img/donation/donation6.jpg" alt="Donation">
						<a class="common-btn" href="donation-details.html">Donate Now</a>
					</div>
					<div class="inner">
						<div class="top">
							<a class="tags" href="#">#Drought</a>
							<h3>
								<a href="donation-details.html">Relief for drought-affected</a>
							</h3>
							<p>We exist for non-profits, social enterprises, activists. Lorem politicians and
								individual citizens.</p>
						</div>
						<div class="bottom">
							<div class="skill">
								<div class="skill-bar skill6 wow fadeInLeftBig">
									<span class="skill-count6">70%</span>
								</div>
							</div>
							<ul>
								<li>Raised: $9,5.00</li>
								<li>Goal: $3,84.00</li>
							</ul>
							<h4>Donated by <span>10 people</span></h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> --}}


{{-- <section class="work-area pt-100 pb-70">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="work-content">
					<div class="section-title">
						<span class="sub-title">How we work</span>
						<h2>We exist for non-profits, social enterprises, community groups</h2>
					</div>
					<ul>
						<li>
							<h3><span>01</span>Raise money from different sources</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, pariatur esse
								animi temporibus iusto at dolorum</p>
						</li>
						<li>
							<h3><span>02</span>Giving relief in rural area all over the world</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, pariatur esse
								animi temporibus iusto at dolorum</p>
						</li>
						<li>
							<h3><span>03</span>Gather all the money and giving relief in need</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, pariatur esse
								animi temporibus iusto at dolorum</p>
						</li>
						<li>
							<h3><span>04</span>Go to the country that really needs help</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, pariatur esse
								animi temporibus iusto at dolorum</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="work-img">
					<img src="assets/img/work/work1.jpg" alt="Work">
					<img src="assets/img/work/work2.jpg" alt="Work">
				</div>
			</div>
		</div>
	</div>
</section> --}}


{{-- <div class="benefit-area pt-100 pb-70">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-lg-3">
				<div class="benefit-item">
					<i class="flaticon-house"></i>
					<h3>Build home</h3>
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique illum excepturi ab quam
						magnam earum</p>
				</div>
			</div>
			<div class="col-sm-6 col-lg-3">
				<div class="benefit-item two">
					<i class="flaticon-hospital"></i>
					<h3>Medical facilities</h3>
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique illum excepturi ab quam
						magnam earum</p>
				</div>
			</div>
			<div class="col-sm-6 col-lg-3">
				<div class="benefit-item three">
					<i class="flaticon-fast-food"></i>
					<h3>Food & water</h3>
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique illum excepturi ab quam
						magnam earum</p>
				</div>
			</div>
			<div class="col-sm-6 col-lg-3">
				<div class="benefit-item four">
					<i class="flaticon-graduation-cap"></i>
					<h3>Education facilities</h3>
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique illum excepturi ab quam
						magnam earum</p>
				</div>
			</div>
		</div>
	</div>
</div> --}}


{{-- <section class="event-area pt-100 pb-70">
	<div class="container">
		<div class="section-title">
			<span class="sub-title">Our events</span>
			<h2>Upcoming events near you</h2>
		</div>
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="event-item">
					<img src="assets/img/event/event1.jpg" alt="Event">
					<div class="inner">
						<h4>04 <span>Jan</span></h4>
						<h3>
							<a href="event-details.html">Fundraising for MQ</a>
						</h3>
						<ul>
							<li>
								<i class="icofont-stopwatch"></i>
								<span>2.00pm - 5.00pm</span>
							</li>
							<li>
								<i class="icofont-location-pin"></i>
								<span>Australia</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="event-item">
					<img src="assets/img/event/event2.jpg" alt="Event">
					<div class="inner">
						<h4>05 <span>Jan</span></h4>
						<h3>
							<a href="event-details.html">Shout about it with us</a>
						</h3>
						<ul>
							<li>
								<i class="icofont-stopwatch"></i>
								<span>1.00pm - 2.00pm</span>
							</li>
							<li>
								<i class="icofont-location-pin"></i>
								<span>Canada</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="event-item">
					<img src="assets/img/event/event3.jpg" alt="Event">
					<div class="inner">
						<h4>10 <span>Jan</span></h4>
						<h3>
							<a href="event-details.html">Relief giving - Providing relief</a>
						</h3>
						<ul>
							<li>
								<i class="icofont-stopwatch"></i>
								<span>3.00pm - 4.00pm</span>
							</li>
							<li>
								<i class="icofont-location-pin"></i>
								<span>USA</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="event-item-right">
					<h4>06 <span>Jan</span></h4>
					<h3>
						<a href="event-details.html">Challenge is right for you</a>
					</h3>
					<ul>
						<li>
							<i class="icofont-stopwatch"></i>
							<span>10.00am - 11.00am</span>
						</li>
						<li>
							<i class="icofont-location-pin"></i>
							<span>UK</span>
						</li>
					</ul>
				</div>
				<div class="event-item-right">
					<h4>07 <span>Jan</span></h4>
					<h3>
						<a href="event-details.html">Fundraising is going</a>
					</h3>
					<ul>
						<li>
							<i class="icofont-stopwatch"></i>
							<span>11.00am - 12.00pm</span>
						</li>
						<li>
							<i class="icofont-location-pin"></i>
							<span>France</span>
						</li>
					</ul>
				</div>
				<div class="event-item-right">
					<h4>08 <span>Jan</span></h4>
					<h3>
						<a href="event-details.html">Bowling for a cause</a>
					</h3>
					<ul>
						<li>
							<i class="icofont-stopwatch"></i>
							<span>1.00pm - 1.30pm</span>
						</li>
						<li>
							<i class="icofont-location-pin"></i>
							<span>Spain</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section> --}}


<section class="gallery-area pt-100 pb-70">
	<div class="container">
		<div class="section-title">
			{{-- <span class="sub-title">Our gallery</span> --}}
			<h2>{{__("Quelques images des activités du RECOSAC-Guinée")}}</h2>
			{{-- <p>We exist for non-profits, social enterprises, community groups, activists,lorem politicians and
				individual citizens that are making.</p> --}}
		</div>
		<div class="row">
			<div class="col-sm-6 col-lg-4">
				<div class="gallery-item">
					<a href="assets/img/gallery/gallery1.jpg" data-lightbox="roadtrip">
						<img src="assets/img/gallery/gallery1.jpg" alt="Gallery">
						<i class="icofont-eye"></i>
					</a>
				</div>
			</div>
			<div class="col-sm-6 col-lg-4">
				<div class="gallery-item">
					<a href="assets/img/gallery/gallery2.jpg" data-lightbox="roadtrip">
						<img src="assets/img/gallery/gallery2.jpg" alt="Gallery">
						<i class="icofont-eye"></i>
					</a>
				</div>
			</div>
			<div class="col-sm-6 col-lg-4">
				<div class="gallery-item">
					<a href="assets/img/gallery/gallery3.jpg" data-lightbox="roadtrip">
						<img src="assets/img/gallery/gallery3.jpg" alt="Gallery">
						<i class="icofont-eye"></i>
					</a>
				</div>
			</div>
			<div class="col-sm-6 col-lg-4">
				<div class="gallery-item">
					<a href="assets/img/gallery/gallery4.jpg" data-lightbox="roadtrip">
						<img src="assets/img/gallery/gallery4.jpg" alt="Gallery">
						<i class="icofont-eye"></i>
					</a>
				</div>
			</div>
			<div class="col-sm-6 col-lg-4">
				<div class="gallery-item">
					<a href="assets/img/gallery/gallery5.jpg" data-lightbox="roadtrip">
						<img src="assets/img/gallery/gallery5.jpg" alt="Gallery">
						<i class="icofont-eye"></i>
					</a>
				</div>
			</div>
			<div class="col-sm-6 col-lg-4">
				<div class="gallery-item">
					<a href="assets/img/gallery/gallery6.jpg" data-lightbox="roadtrip">
						<img src="assets/img/gallery/gallery6.jpg" alt="Gallery">
						<i class="icofont-eye"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="blog-area pt-100 pb-70">
	<div class="container">
		<div class="section-title">
			{{-- <span class="sub-title">Latest news & blog</span> --}}
			<h2>{{__('Nos partenaires')}}</h2>
		</div>
		<div class="gallery-slider owl-theme owl-carousel">
			<div class="gallery-item">
				<a href="https://africachap.org/" target="_blank"  title="Partenaire ACHAP (AFRICAN CHRISTIAN HEALTH ASSOCIATION PLATFORM) ou PLATFORME DES ASSOCIATIONS CHRETIENNES AFRICAINES DE SANTE.">
					<img src="assets/img/partenaires/ACHAP.png" alt="Gallery">
					<i class="icofont-eye"></i>
				</a>
			</div>
			<div class="gallery-item">
				<a href="https://www.crs.org/guinea" target="_blank"
				title="Partenaire (CRS) - CATHOLIC RELIEF SERVICES">
					<img src="assets/img/partenaires/catholic-relief-services-crs-vector-logo.png" alt="Gallery">
					<i class="icofont-eye"></i>
				</a>
			</div>
			<div class="gallery-item">
				<a href="https://difaem.de/"  target="_blank" title="Partenaire (DIFAEM)-INSTITUT ALLEMAND POUR LA MISSION MEDICALE">
					<img src="assets/img/partenaires/difaem.png" alt="Gallery">
					<i class="icofont-eye"></i>
				</a>
			</div>
			<div class="gallery-item">
				<a href="https://www.miraclefeet.org" target="_blank" title="Partenaire MIRACLEFEET">
					<img src="assets/img/partenaires/Miraclefeet.jpeg" alt="Miraclefeet">
					<i class="icofont-eye"></i>
				</a>
			</div>
			<div class="gallery-item">
				<a href="https://portail.sante.gov.gn" title="Partenaire MSHP – MINISTERE DE LA SANTE ET DE L’HYGIENE PUBLIQUE"
				target="_blank">
					<img src="assets/img/partenaires/mshp.png" alt="mshp">
					<i class="icofont-eye"></i>
				</a>
			</div>
			<div class="gallery-item">
				<a href="https://www.brot-fuer-die-welt.de/fr/pain-pour-le-monde/" target="_blank" title="Partenaire (PPLM : PAIN POUR LE MONDE) -BROT FÜR DIE WELT">
					<img src="assets/img/partenaires/PpLM.png" alt="PpLM">
					<i class="icofont-eye"></i>
				</a>
			</div>
		</div>
	</div>
</section>
@endsection
