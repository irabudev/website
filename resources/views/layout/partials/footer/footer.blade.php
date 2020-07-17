<div class="footer-area-wrapper bg-gray">
    <div class="footer-area section-space--ptb_80">
        <div class="container">
            <div class="row footer-widget-wrapper">
                <div class="col-lg-4 col-md-6 col-sm-6 footer-widget">
                    <div class="footer-widget__logo mb-30" style="width: 30%;">
                        <img src="{{ asset('/images/logo.svg') }}" class="img-fluid" alt="">
                    </div>
                    <ul class="footer-widget__list">
                        <li>Irabu | Kiotani, Dar es Salaam</li>
                        <li>
                            <a href="https://g.page/kiotani?share" target="_blank" class="hover-style-link">
                                {{__('Find us on google map')}}
                            </a>
                        </li>
                        <li><a href="mailto:info@irabu.co.tz" class="hover-style-link">info@irabu.co.tz</a></li>
                        <li>
                            <a href="tel:+255764556463" class="hover-style-link text-black font-weight--bold">
                                (+255)764 556 463
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                    <h6 class="footer-widget__title mb-20">{{__('What we do')}}</h6>
                    <ul class="footer-widget__list">
                        <li><a href="#" class="hover-style-link">{{__('Consultation')}}</a></li>
                        <li><a href="#" class="hover-style-link">{{__('Design')}}</a></li>
                        <li><a href="#" class="hover-style-link">{{__('Development')}}</a></li>
                        <li><a href="#" class="hover-style-link">{{__('Testing')}}</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                    <h6 class="footer-widget__title mb-20">Anza</h6>
                    <ul class="footer-widget__list">
                        <li>
                            <a href="#" class="hover-style-link">
                                {{ __('Careers')}}
                            </a>
                        </li>
                        <li><a href="#" class="hover-style-link">{{ __('Internship')}}</a></li>
                        <li><a href="#" class="hover-style-link">{{ __('Open source')}}</a></li>

                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                    <h6 class="footer-widget__title mb-20">
                        {{ __('Legal')}}
                    </h6>
                    <ul class="footer-widget__list">
                        <li>
                            <a href="{{ route('legal.disclaimer')}}" class="hover-style-link">
                                {{ __('Disclaimer')}}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('legal.privacy')}}" class="hover-style-link">
                                {{ __('Privacy')}}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('legal.conditions')}}" class="hover-style-link">
                                {{ __('Terms and Condition')}}
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <div class="footer-copyright-area section-space--pb_30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-left">
                    <span class="copyright-text">
                        &copy; <span id="year"></span> | {{ __('Built with ♥ by irabu team')}} </span>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <ul class="list ht-social-networks solid-rounded-icon">

                        <li class="item">
                            <a href="https://twitter.com/irabudev" target="_blank" aria-label="@irabudev"
                                class="social-link hint--bounce hint--top hint--primary">
                                <i class="fa fa-twitter"></i>
                                {{-- <img src="{{ asset('images/icons/twitter.svg') }}" alt="twitter"> --}}
                            </a>
                        </li>
                        <li class="item">
                            <a href="https://fb.me/irabudev" target="_blank" aria-label="Facebook"
                                class="social-link hint--bounce hint--top hint--primary">
                                <i class="fa fa-facebook"></i>
                                {{-- <img src="{{ asset('images/icons/facebook.svg') }}" alt="Facebook"> --}}
                            </a>
                        </li>
                        <li class="item text-center">
                            <a href="https://www.instagram.com/irabu.dev/" target="_blank" aria-label="@irabudev"
                                class="social-link hint--bounce hint--top hint--primary">
                                <i class="fa fa-instagram"></i>

                                {{-- <img src="{{ asset('images/icons/instagram.svg') }}" alt="Instagram"
                                style="margin-bottom: .25em;"> --}}
                            </a>
                        </li>
                        <li class="item">
                            <a href="https://www.linkedin.com/company/irabu/" target="_blank" aria-label="irabu"
                                class="social-link hint--bounce hint--top hint--primary">
                                <i class="fa fa-linkedin"></i>
                                {{-- <img src="{{ asset('images/icons/linkedin.svg') }}" alt="linkedin"
                                style="margin-bottom: .25em;"> --}}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
