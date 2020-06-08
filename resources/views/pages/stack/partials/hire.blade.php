<section class="layouts-section-wrap bg-gray">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="layouts-images text-right">
                    <img class="img-fluid" src="{{ asset('images/vertical.png') }}" alt="Let's figure out how we could step in and help
                    you out">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="layouts-section-text">
                    <h3 class="heading">
                        <span class="text-color-primary">
                            {{__('stack.cta')}}
                        </span>
                    </h3>
                    <p class="text mt-30">
                        {{ __('stack.p1') }}
                    </p>

                    <p class="text mt-30">
                        {{ __('stack.p2') }}
                    </p>

                    <div class="sider-title-button-box mt-30">
                        <a href="{{ mailto(
'Hire a team',
'Tell us as much as you can about
- where you are stuck
- the current state and planning of the project
- your budget
- …

Anything that helps us to start straightforward!'
                        ) }}" class="ht-btn ht-btn-md"> {{__('Hire our team')}}</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
