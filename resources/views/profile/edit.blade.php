<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('messages.profile') }}
        </h2>
    </x-slot> --}}


    <div class="row square">
        <div class="col-lg-12 col-md-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div class="profile-tab tab-menu-heading">
                        <nav class="nav main-nav-line p-3 tabs-menu profile-nav-line bg-gray-100">
                            <a class="nav-link @unless ($errors->getBag('updatePassword')->has('current_password') || 
                                $errors->getBag('updatePassword')->has('password') || 
                                $errors->getBag('updatePassword')->has('password_confirmation'))
                                active
                            @endunless" data-toggle="tab" href="#info">{{__('messages.user_info')}}</a>
                            <a class="nav-link @if ($errors->getBag('updatePassword')->has('current_password') || 
                                $errors->getBag('updatePassword')->has('password') || 
                                $errors->getBag('updatePassword')->has('password_confirmation'))
                                active
                            @endif" data-toggle="tab" href="#pass">{{__('messages.user_pass')}}</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12 col-md-12">
            <div class="card custom-card main-content-body-profile">
                <div class="tab-content">

                    @include('profile.partials.update-profile-information-form')
                    @include('profile.partials.update-password-form')
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->
</x-app-layout>
