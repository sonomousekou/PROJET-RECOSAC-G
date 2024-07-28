@extends('site.includes.base')
@section('title')
Détails {{__('Evénements')}}
@endsection

@section('content')
<div class="page-title-area title-bg-four">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-item">
                    <h2>Détails {{__('Evénements')}}</h2>
                    <ul>
                        <li>
                            <a href="{{ route('home') }}">{{ __('Acceuil') }}</a>
                        </li>
                        <li>
                            <span>Détails {{__('Evénements')}}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="event-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="details-item">
                    <div class="details-img">
                        <img src="assets/img/event/event-details1.jpg" alt="Details">
                        <h2>Fund collection for cyclone effected people in Australia, fundraising donkey basketball
                        </h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labor et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                            dolor in reprehenderit in sed quia non numquam eius modi tempora incidunt ut labore et
                            dolore magnam aliquam quaerat voluptatem.</p>
                        <p>It is a long established fact that a reader will be distracted by the readable content of
                            a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less</p>
                        <ul>
                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                            <li>It is a long established fact that a reader will be distracted by the readable</li>
                            <li>Contrary to popular belief, Lorem Ipsum is not simply random text</li>
                            <li>There are many variations of passages of Lorem Ipsum available</li>
                            <li>The standard chunk of Lorem Ipsum used since the 1500s is reproduced</li>
                        </ul>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which don't
                            look</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labor et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                            dolor in reprehenderit in sed quia non numquam eius modi tempora incidunt ut labore et
                            dolore magnam aliquam quaerat voluptatem.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget-area">
                    <div class="search widget-item">
                        <form>
                            <input type="text" class="form-control" placeholder="Search...">
                            <button type="submit" class="btn">
                                <i class="icofont-search-1"></i>
                            </button>
                        </form>
                    </div>
                    <div class="information widget-item">
                        <h3>Event information</h3>
                        <ul>
                            <li>
                                <span>Organizer:</span>
                                Charity Society
                            </li>
                            <li>
                                <span>Start:</span>
                                09 July, 2024
                            </li>
                            <li>
                                <span>Finish:</span>
                                10 July, 2024
                            </li>
                            <li>
                                <span>Location:</span>
                                <a href="#">6B, Helvetica street, Jordan</a>
                            </li>
                            <li>
                                <span>Phone:</span>
                                <a href="tel:123456789">+123-456-789</a>
                            </li>
                            <li>
                                <span>Email:</span>
                                <a
                                    href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#d1b9b4bdbdbe91b7b8bfb5beffb2bebc"><span
                                        class="__cf_email__"
                                        data-cfemail="721a171e1e1d32141b1c161d5c111d1f">[email&#160;protected]</span></a>
                            </li>
                        </ul>
                    </div>
                    {{-- <div class="common-right-content widget-item">
                        <h3>Categories</h3>
                        <ul>
                            <li>
                                <a href="#">Education (10)</a>
                            </li>
                            <li>
                                <a href="#">Medical (25)</a>
                            </li>
                            <li>
                                <a href="#">Food & Water (14)</a>
                            </li>
                            <li>
                                <a href="#">National Charity (2)</a>
                            </li>
                            <li>
                                <a href="#">Cloth (4)</a>
                            </li>
                        </ul>
                    </div>
                    <div class="instagram widget-item">
                        <h3>Instagram post</h3>
                        <div class="row m-0">
                            <div class="col-4 col-sm-3 col-lg-4 p-0">
                                <div class="instagram-item">
                                    <img src="assets/img/blog/instagram1.jpg" alt="Instagram">
                                    <a href="#">
                                        <i class="icofont-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 col-sm-3 col-lg-4 p-0">
                                <div class="instagram-item">
                                    <img src="assets/img/blog/instagram2.jpg" alt="Instagram">
                                    <a href="#">
                                        <i class="icofont-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 col-sm-3 col-lg-4 p-0">
                                <div class="instagram-item">
                                    <img src="assets/img/blog/instagram3.jpg" alt="Instagram">
                                    <a href="#">
                                        <i class="icofont-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 col-sm-3 col-lg-4 p-0">
                                <div class="instagram-item">
                                    <img src="assets/img/blog/instagram4.jpg" alt="Instagram">
                                    <a href="#">
                                        <i class="icofont-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 col-sm-3 col-lg-4 p-0">
                                <div class="instagram-item">
                                    <img src="assets/img/blog/instagram5.jpg" alt="Instagram">
                                    <a href="#">
                                        <i class="icofont-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 col-sm-3 col-lg-4 p-0">
                                <div class="instagram-item">
                                    <img src="assets/img/blog/instagram6.jpg" alt="Instagram">
                                    <a href="#">
                                        <i class="icofont-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
