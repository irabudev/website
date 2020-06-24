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
                            <a href="{{ route('home') }}">
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
                                                        <a href="{{ route('home') }}">
                                                            <span>{{ __('Home') }}</span>
                                                        </a>

                                                    </li>
                                                    <li
                                                        class="{{ (request()->is(app()->getLocale().'/process*')) ? 'active' : '' }}">
                                                        <a href="{{ route('process') }}">
                                                            <span>{{ __('Our Process') }}</span>
                                                        </a>

                                                    </li>
                                                    <li
                                                        class="{{ (request()->is(app()->getLocale().'/our-stack*')) ? 'active' : '' }}">
                                                        <a href="{{ route('stack') }}">
                                                            <span>{{ __('Our Stack') }}</span>
                                                        </a>
                                                    </li>
                                                    <li
                                                        class="{{ (request()->is(app()->getLocale().'/about*')) ? 'active' : '' }}">
                                                        <a href="{{ route('about') }}">
                                                            <span>{{ __('About Us') }}</span>
                                                        </a>
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
                                            <a href="#" class="">
                                                <img class="ls-flag" style="height: 2em;"
                                                    src="{{ app()->getLocale() === 'en' ? asset('images/flags/en.svg') : asset('images/flags/sw.svg') }}"
                                                    alt="en" title="English">
                                                <span
                                                    class="wpml-ls-native">{{ app()->getLocale() === 'en' ? 'EN' : 'SW' }}</span>
                                            </a>

                                            <ul class="ls-sub-menu">
                                                <li class="">
                                                    <a href="{{route('home', [], true, 'en')}}">
                                                        <img class="ls-flag" src="{{ asset('images/flags/en.svg') }}"
                                                            alt="en" title="English"><span
                                                            class="wpml-ls-native">English</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="{{route('home', [], true, 'sw')}}">
                                                        <img class="wpml-ls-flag"
                                                            src="{{ asset('images/flags/sw.svg') }}" alt="de"
                                                            title="Kiswahili">
                                                        <span class="wpml-ls-native">Kiswahili</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="hidden-icons-menu d-block d-md-none" id="hidden-icon-trigger">
                                <div class="language-menu" style="padding: 0;">
                                    <ul>
                                        <li>
                                            <a href="#" style="padding: 0;">
                                                <img class="ls-flag" style="height: 1.25em;"
                                                    src="{{ app()->getLocale() === 'en' ? asset('images/flags/en.svg') : asset('images/flags/sw.svg') }}"
                                                    alt="en" title="English">
                                                <span
                                                    class="wpml-ls-native" style="font-size: 12px;">{{ app()->getLocale() === 'en' ? 'EN' : 'SW' }}</span>
                                            </a>

                                            <ul class="ls-sub-menu" style="min-width: 118px;">
                                                <li class="">
                                                    <a href="{{route('home', [], true, 'en')}}">
                                                        <img class="ls-flag" src="{{ asset('images/flags/en.svg') }}"
                                                            alt="en" title="English" style="width: 18px;">
                                                            <span
                                                            class="wpml-ls-native" style="font-size: 12px;">English</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="{{route('home', [], true, 'sw')}}">
                                                        <img class="wpml-ls-flag"
                                                            src="{{ asset('images/flags/sw.svg') }}" style="width: 18px;" alt="de"
                                                            title="Kiswahili">
                                                        <span class="wpml-ls-native" style="font-size: 12px;">Kiswahili</span>
                                                    </a>
                                                </li>
                                            </ul>
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
