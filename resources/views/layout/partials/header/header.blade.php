<!--====================  header area ====================-->
<div class="header-area header-area--default">

    <!-- Header Bottom Wrap Start -->
    <div class="header-bottom-wrap header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header default-menu-style position-relative">
                        <!-- brand logo -->
                        <div class="header__logo">
                            <a href="{{ route('home', app()->getLocale()) }}">
                                <img src="{{ asset('/images/logo.svg') }}" class="img-fluid" alt="irabu.co.tz">
                            </a>
                        </div>

                        <!-- header midle box  -->
                        <div class="header-midle-box">
                            <div class="header-bottom-wrap d-md-block d-none">
                                <div class="header-bottom-inner">
                                    <div class="header-bottom-left-wrap">
                                        <!-- navigation menu -->
                                        <div class="header__navigation d-none d-xl-block">
                                            <nav class="navigation-menu primary--menu">
                                                <ul>
                                                    <li
                                                        class="{{ (request()->is(app()->getLocale())) ? 'active' : '' }}">
                                                        <a
                                                            href="{{ route('home',app()->getLocale()) }}"><span>{{ __('Home') }}</span></a>

                                                    </li>
                                                    <li
                                                        class="{{ (request()->is(app()->getLocale().'/process*')) ? 'active' : '' }}">
                                                        <a
                                                            href="{{ route('process', app()->getLocale()) }}"><span>{{ __('Our Process') }}</span></a>

                                                    </li>
                                                    <li
                                                        class="{{ (request()->is(app()->getLocale().'/our-stack*')) ? 'active' : '' }}">
                                                        <a
                                                            href="{{ route('stack', app()->getLocale()) }}"><span>{{ __('Our Stack') }}</span></a>

                                                    </li>
                                                    <li
                                                        class="{{ (request()->is(app()->getLocale().'/about*')) ? 'active' : '' }}">
                                                        <a
                                                            href="{{ route('about', app()->getLocale()) }}"><span>{{ __('About Us') }}</span></a>

                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- header right box -->
                        <div class="header-right-box">
                            <div class="header-right-inner" id="hidden-icon-wrapper">
                                <!-- language-menu -->
                                <div class="language-menu">
                                    <ul>
                                        <li>
                                            {{-- <a href="#" class="">
                                                <img class="ls-flag" src="{{asset('images/flags/en.png')}}" alt="en"
                                            title="English">
                                            <span class="wpml-ls-native">English</span>
                                            </a>

                                            <ul class="ls-sub-menu">
                                                <li class="">
                                                    <a href="l#" class="">
                                                        <img class="ls-flag"
                                                            src="{{ asset('images/flags/tanzania.svg')}}" alt="en"
                                                            title="Kiswahili"><span
                                                            class="wpml-ls-native">Kiswahili</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#" class="">
                                                        <img class="wpml-ls-flag" src="{{asset('images/flags/en.png')}}"
                                                            alt="de" title="English"><span
                                                            class="wpml-ls-native">English</span>
                                                    </a>
                                                </li>

                                            </ul> --}}
                                            <language-switcher locale="{{ app()->getLocale() }}"
                                                link-en="{{ route(Route::currentRouteName(), 'en') }}"
                                                link-sw="{{ route(Route::currentRouteName(), 'sw') }}">
                                            </language-switcher>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- mobile menu -->
                            <div class="mobile-navigation-icon d-block d-xl-none" id="mobile-menu-trigger">
                                <i></i>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Bottom Wrap End -->

</div>
<!--====================  End of header area  ====================-->
