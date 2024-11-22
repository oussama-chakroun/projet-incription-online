<x-guest-layout>
    <div class="row signpages justify-content-center">
    <div class="col-md-8 col-lg-6">
        <div class="card">
            <div class="row">
                <div class="col-12 login_form">
                    <div class="container-fluid">
                        <div class="row row-sm">
                            <div class="card-body mt-2 mb-2">
                                <div class="clearfix"></div>
                                <form method="POST" action="{{ route('password.store') }}">
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                    <h5 class="text-center mb-2">{{ __('Password Reset') }}</h5>

                                    <div class="form-group text-left">
                                        <label for="email"></label>
                                        <input class="form-control @error('email') is-invalid state-invalid @enderror" type="email"  placeholder="{{ __('Email') }}" name="email" value="{{old('email', $request->email)}}" required autofocus autocomplete="email" >
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>

                                    <div class="form-group text-left">
                                        <label for="password"></label>
                                        <input class="form-control" type="password" name="password"  placeholder="{{ __('Password') }}" required >
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>

                                    <div class="form-group text-left">
                                        <label for="password"></label>
                                        <input class="form-control" type="password" name="password_confirmation" placeholder="{{ __('Password Confirmation') }}" required">
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                    </div>
                                    
                                    <div class="d-flex justify-content-start">
                                        <x-primary-button>
                                        {{ __('Reset Password') }}
                                        </x-primary-button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-guest-layout>
