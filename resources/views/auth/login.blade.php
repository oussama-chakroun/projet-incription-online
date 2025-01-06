<x-guest-layout>
    <!-- Row -->
    <div class="row signpages text-center vh-100">
        <div class="col-md-12">
            <div class="card h-100 shadow-sm border-0">
                <div class="row g-0 h-100">
                    <!-- Section gauche -->
                    <div class="col-lg-6 col-xl-5 d-none d-lg-block text-center" style="background: linear-gradient(to bottom, #6cb4e4, #4a8dcb);">
                        <div class="d-flex flex-column justify-content-center align-items-center h-100">
                            <!-- Icône utilisateur -->
                            <div class="bg-white p-3 rounded-circle shadow-sm mb-4" style="width: 100px; height: 100px;">
                                <img src="../../assets/img/svgs/user.svg" class="w-75" alt="user">
                            </div>

                            <!-- Titre -->
                            <h5 class="mt-4 text-white fw-bold" style="font-size: 1.8rem; text-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);">
                                {{ __('Create Your Account') }}
                            </h5>

                            <!-- Sous-titre -->
                            <p class="tx-white-6 tx-14 mt-2" style="font-size: 1rem; color: rgba(255, 255, 255, 0.8); text-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3);">
                                {{ __('Veuillez entrer le login et le mot de passe') }}
                            </p>
                        </div>
                    </div>




                    <!-- Section droite -->
                    <div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form d-flex align-items-center justify-content-center">
                        <div class="container px-4">
                            <div class="row justify-content-center">
                                <div class="card-body p-4">
                                    <!-- Logo mobile -->
                                    <img src="../../assets/img/brand/logo.png" class="d-lg-none mb-4 mx-auto" alt="logo" style="width: 80px;">
                                    <!-- Formulaire -->
                                    <img src="../../assets/img/brand/logo-light.png" class="header-brand-img mb-4" alt="logo" style="filter: brightness(1.5);">

                                    <form method="POST" action="{{ route('login') }}" data-parsley-validate>
                                        @csrf
                                        <h5 class="text-left mb-2 fw-bold">{{ __('Sign in') }}</h5>
                                        <p class="text-muted tx-14 mb-4 text-left">{{ __('Signin to create, discover and connect with the global community') }}</p>
                                        <div class="form-group mb-3 text-left">
                                            <label class="form-label">{{ __('Email') }}</label>
                                            <input class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('Enter your Email') }}" name="email" value="{{ old('email') }}" required type="email">
                                            <x-input-error :messages="$errors->get('email')" class="invalid-feedback" />
                                        </div>
                                        <div class="form-group mb-3 text-left">
                                            <label class="form-label">{{ __('Password') }}</label>
                                            <input class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Enter your password') }}" type="password">
                                            <x-input-error :messages="$errors->get('password')" class="invalid-feedback" />
                                        </div>
                                        <button class="btn btn-primary btn-block" type="submit">{{ __('Log in') }}</button>
                                    </form>
                                    <!-- Liens additionnels -->
                                    <div class="text-left mt-4">
                                        @if (Route::has('password.request'))
                                            <div class="mb-2"><a href="{{ route('password.request') }}">{{ __('Forgot password?') }}</a></div>
                                        @endif
                                        <div>{{ __("Don't have an account?") }}
                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}">{{ __('Register Here') }}</a>
                                            @endif
                                        </div>
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
