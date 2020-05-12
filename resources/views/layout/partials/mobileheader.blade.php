<!--====================  mobile menu overlay ====================-->
<div class="mobile-menu-overlay" id="mobile-menu-overlay">
    <div class="mobile-menu-overlay__inner">
        <div class="mobile-menu-overlay__header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8">
                        <!-- logo -->
                        <div class="logo">
                            <a href="{{ route('home', app()->getLocale())}}">
                                <img src="{{ asset('/images/logo.svg') }}" class="img-fluid width-160" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-4">
                        <!-- mobile menu content -->
                        <div class="mobile-menu-content text-right">
                            <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-menu-overlay__body">
            <nav class="offcanvas-navigation">
                <ul>
                    <li>
                        <a href="{{ route('home', app()->getLocale()) }}"><span>{{ __('Home') }}</span></a>

                    </li>
                    <li>
                        <a href="{{ route('process', app()->getLocale()) }}"><span>{{ __('Our Process') }}</span></a>

                    </li>
                    <li>
                        <a href="{{ route('stack', app()->getLocale()) }}"><span>{{ __('Our Stack') }}</span></a>

                    </li>
                    <li>
                        <a href="{{ route('about', app()->getLocale()) }}"><span>{{ __('About Us') }}</span></a>

                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!--====================  End of mobile menu overlay  ====================-->
