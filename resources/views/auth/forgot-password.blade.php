<x-guest-layout>
<div class="row signpages justify-content-center">
    <div class="col-md-8 col-lg-6">
    @if (Session::has('status'))
        <div class="alert alert-outline-success" role="alert">
            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
            <span aria-hidden="true">&times;</span></button>
            <strong>Well done!</strong> {{ Session::get('status') }}
        </div>
     @endif
        <div class="card">
            <div class="row">
                <div class="col-12 login_form">
                    <div class="container-fluid">
                        <div class="row row-sm">
                            <div class="card-body mt-2 mb-2">
                                <div class="clearfix"></div>
                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                    <h5 class="text-center mb-2">{{ __('Password Reset') }}</h5>
                                    <p class="mb-4 text-muted tx-13 text-center">{{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}</p>
                                    <div class="form-group text-left">
                                        <label for="email"></label>
                                        <input class="form-control @error('email') is-invalid state-invalid @enderror" type="email" name="email" :value="old('email')" placeholder='{{ __("Enter your Email") }}'  required autofocus >
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                    
                                    <div class="d-flex justify-content-start">
                                        <x-primary-button>
                                            {{ __('Email Password Reset Link') }}
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
