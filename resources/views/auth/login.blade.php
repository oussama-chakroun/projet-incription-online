<x-guest-layout>
    <!-- Row -->
    <div class="row signpages text-center">
        <div class="col-md-12">
            <div class="card">
                <div class="row row-sm">
                    <div class="col-lg-6 col-xl-5 d-none d-lg-block text-center bg-primary details">
                        <div class="mt-5 pt-4 p-2 pos-absolute">
                            <img src="../../assets/img/brand/logo-light.png" class="header-brand-img mb-4" alt="logo">
                            <div class="clearfix"></div>
                            <img src="../../assets/img/svgs/user.svg" class="ht-100 mb-0" alt="user">
                            <h5 class="mt-4 text-white">{{ __('Create Your Account') }}</h5>
                            <span class="tx-white-6 tx-13 mb-5 mt-xl-0">{{ __('Signup to create, discover and connect with the global community') }}</span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
                        <div class="container-fluid">
                            <div class="row row-sm">
                                <div class="card-body mt-2 mb-2">
                                    <img src="../../assets/img/brand/logo.png" class=" d-lg-none header-brand-img text-left float-left mb-4" alt="logo">
                                    <div class="clearfix"></div>
                                    <form method="POST" action="{{ route('login') }}" data-parsley-validate="">
                                        @csrf

                                        <h5 class="text-left mb-2">{{ __('Signin to Your Account') }}</h5>
                                        <p class="mb-4 text-muted tx-13 ml-0 text-left">{{ __('Signin to create, discover and connect with the global community') }}</p>
                                        <div class="form-group text-left">
                                            <label></label>
                                            <input class="form-control @error('email') is-invalid state-invalid @enderror" placeholder={{ __('Enter your Email') }} name="email" value="{{ old('email') }}" required="" type="email">
                                            <x-input-error :messages="$errors->get('email')" class="invalid-feedback" />	
                                        </div>
                                        <div class="form-group text-left">
                                            <label>{{ __('Password') }}</label>
                                            <input class="form-control @error('password') is-invalid state-invalid @enderror" name="password" value="{{ old('password') }}" placeholder="{{ __('Enter your password') }}" type="password">
                                            <x-input-error :messages="$errors->get('password')" class="invalid-feedback" />
                                        </div>
                                        <button class="btn ripple btn-main-primary btn-block" type="submit">{{ __('Log in') }}</button>
                                    </form>
                                    <div class="text-left mt-5 ml-0">
                                        @if (Route::has('password.request'))
                                            <div class="mb-1"><a href="{{ route('password.request') }}">{{ __('Forgot password?') }}</a></div>
                                        @endif
                                        <div>{{ __("Don't have an account?") }}  @if (Route::has('register'))<a href="{{ route('register') }}">{{ __('Register Here') }}</a> @endif</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->
</x-guest-layout>
