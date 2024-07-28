@extends('site.includes.base')
@section('title')
{{__('Adhésion')}}
@endsection

@section('content')
<div class="page-title-area title-bg-eight">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-item">
                    <h2>{{__('Adhésion')}}</h2>
                    <ul>
                        <li>
                            <a href="{{ route('home') }}">{{ __('Acceuil') }}</a>
                        </li>
                        <li>
                            <span>{{__('Adhésion')}}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="contact-area pb-70 mt-5">
    <div class="container">
        <form id="contactForm">
            <h2>Let's talk...!</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, iusto possimus doloremque amet
                vitae facere blanditiis nulla explicabo obcaecati nihil ipsam deleniti nesciunt illo, non iure</p>
            <div class="row">
                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                <i class="icofont-user-alt-3"></i>
                            </label>
                            <input type="text" name="first_name" id="first_name" class="form-control"
                                placeholder="{{ __('Prenom') }}*" value="{{ old('first_name') }}" required
                                data-error="Please enter your name">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                <i class="icofont-user-alt-3"></i>
                            </label>
                            <input type="text" name="last_name" id="last_name" class="form-control"
                                placeholder="{{ __('Nom de famille') }}*" value="{{ old('last_name') }}" required
                                data-error="Please enter your name">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                <i class="icofont-ui-email"></i>
                            </label>
                            <input type="email" name="email" id="email" class="form-control"
                                placeholder="Email*" value="{{ old('email') }}" required
                                data-error="Please enter your email">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                <i class="icofont-ui-call"></i>
                            </label>
                            <input type="text" name="phone_number" id="phone_number" placeholder="{{__('Telephone')}}" required
                                data-error="Please enter your number" class="form-control">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                <i class="icofont-notepad"></i>
                            </label>
                            <input type="text" name="profession" id="profession" class="form-control"
                                placeholder="{{ __('Profession') }}" value="{{ old('profession') }}" required
                                data-error="Please enter your subject">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>
                                <i class="icofont-notepad"></i>
                            </label>
                            <input type="text" name="pays" id="pays" class="form-control"
                                placeholder="{{ __('Pays') }}" value="{{ old('pays') }}" required
                                data-error="Please enter your subject">
                                {{-- <select class="form-control">
                                    <option>Guinee</option>
                                    <option>Togo</option>
                                    <option>Bénin</option>
                                </select> --}}
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>
                                <i class="icofont-comment"></i>
                            </label>
                            <textarea name="message" class="form-control" id="message" cols="30" rows="8" placeholder="Write message"
                                required data-error="Write your message">{{ old('message') }}</textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <div class="form-check agree-label">
                                <input name="gridCheck" value="I agree to the terms and privacy policy."
                                    class="form-check-input" type="checkbox" id="gridCheck" required>
                                <label class="form-check-label" for="gridCheck">
                                    Accept <a href="terms-condition.html">Terms & Conditions</a> And <a
                                        href="privacy-policy.html">Privacy Policy.</a>
                                </label>
                                <div class="help-block with-errors gridCheck-error"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <button type="submit" class="btn common-btn">
                            {{ __('Soumettre la demande') }}
                        </button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </form>
                @if (session('success'))
                    <div class="alert alert-success mt-3">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
        </form>
    </div>
</div>
@endsection
