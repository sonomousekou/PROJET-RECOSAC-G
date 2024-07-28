<!--  FOOTER START  -->
<footer class="footer-area pt-100">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-logo">
                        <a class="logo" href="index.html">
                            <img src="assets/img/logo-two.png" alt="Logo">
                        </a>
                        <p>{{__("La mission de RECOSAC-G est l’amélioration durable de la qualité des offres de soins médicaux aux populations guinéennes démunies à travers un processus qui unit les communautés sans discrimination ethnique, politique, religieuse.")}}</p>
                        <ul>
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
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-links">
                        <h3>{{__('Nous découvrir')}}</h3>
                        <ul>
                            <li><a href="{{ route('qui-sommes-nous') }}"><i class="icofont-simple-right"></i> {{__('Qui sommes-nous ?')}}</a></li>
                            <li><a href="{{ route('ce-que-nous-faisons') }}"><i class="icofont-simple-right"></i> {{__('Ce que nous faisons')}}</a></li>
                            <li><a href="{{ route('notre-gouvernance') }}"><i class="icofont-simple-right"></i> {{__('Notre gouvernance')}}</a></li>
                            <li><a href="{{ route('contexte-nationnal') }}"><i class="icofont-simple-right"></i> {{__('Contexte national')}}</a></li>
                            <li><a href="{{ route('nos-partenaires') }}"><i class="icofont-simple-right"></i> {{__('Nos partenaires')}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-links">
                        <h3>{{__('Liens utiles')}}</h3>
                        <ul>
                            <li class="active {{ request()->routeIs('realisations') ? 'active' : '' }}">
                                <a href="{{ route('realisations') }}"><i class="icofont-simple-right"></i>{{__('Realisations')}}</a>
                            </li>
                            <li class="{{ request()->routeIs('activites') ? 'active' : '' }}">
                                <a href="{{ route('activites') }}"><i class="icofont-simple-right"></i>{{__('Activités')}}</a>
                            </li>
                            <li class="{{ request()->routeIs('evenements') ? 'active' : '' }}">
                                <a href="{{ route('evenements') }}"><i class="icofont-simple-right"></i>{{__('Evénements')}}</a>
                            </li>
                            <li class="{{ request()->routeIs('adhesion') ? 'active' : '' }}">
                                <a href="{{ route('adhesion') }}"><i class="icofont-simple-right"></i>{{__('Adhésion')}}</a>
                            </li>
                            <li class="{{ request()->routeIs('contactez-nous') ? 'active' : '' }}">
                                <a href="{{ route('contactez-nous') }}"><i class="icofont-simple-right"></i>Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-contact">
                        <h3>Contact info</h3>
                        <div class="contact-inner">
                            <ul>
                                <li>
                                    <i class="icofont-location-pin"></i>
                                    <a href="#">{{__('Siège au Bureau de la Direction de santé de la ville de Conakry')}}</a>
                                </li>
                                <li>
                                    <i class="icofont-ui-email"></i>
                                    <a href="mailto:recosacguinee2016@gmail.com">recosacguinee2016@gmail.com</a>
                                </li>
                            </ul>
                        </div>
                        <div class="contact-inner">
                            <ul>
                                <li>
                                    <i class="icofont-ui-email"></i>
                                    <a href="mailto:contact@recosacguinee.org">contact@recosacguinee.org</a>
                                </li>
                                <li>
                                    <i class="icofont-ui-call"></i>
                                    <a href="tel:(+224) 620591068">(+224) 620591068</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <p>Copyright @ 2023 RECOSAC Guinée.
                {{-- <script>document.write(new Date().getFullYear())</script> Findo. Designed  --}}

            </p>
        </div>
    </div>
</footer>
<!--  FOOTER END  -->