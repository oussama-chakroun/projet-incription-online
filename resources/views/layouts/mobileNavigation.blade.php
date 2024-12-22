<!-- Mobile-header -->
<div class="mobile-main-header">
    <div class="mb-1 navbar navbar-expand-lg  nav nav-item  navbar-nav-right responsive-navbar navbar-dark  ">
        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
            <div class="d-flex order-lg-2 ml-auto">
                {{-- <div class="dropdown d-md-flex">
                    @include('layouts.lightdarkswitch')
                </div> --}}
                <div class="dropdown main-header-notification flag-dropdown">
                    @php
                        $user = auth()->user();
                    @endphp
                    @if ($user->lang == 'en')
                        <a class="nav-link" >
                            <span class="avatar mr-3 align-self-center bg-transparent"><img src="../../assets/img/flags/uk.png" alt="img"></span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item d-flex" id="fr" onclick="changeLanguage('fr')">
                                <span class="avatar mr-3 align-self-center bg-transparent"><img src="../../assets/img/flags/french_flag.jpg" alt="img"></span>
                                <div class="d-flex">
                                    <span class="mt-2">{{__('messages.french')}}</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex" id="ar" onclick="changeLanguage('ar')">
                                <span class="avatar mr-3 align-self-center bg-transparent"><img src="../../assets/img/flags/ma.png" alt="img"></span>
                                <div class="d-flex">
                                    <span class="mt-2">{{__('messages.arab')}}</span>
                                </div>
                            </a>

                        </div>
                    @endif
                    @if ($user->lang == 'fr')
                        <a class="nav-link" >
                            <span class="avatar mr-3 align-self-center bg-transparent"><img src="../../assets/img/flags/french_flag.jpg" alt="img"></span>

                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item d-flex" id="fr" onclick="changeLanguage('en')">
                                <span class="avatar mr-3 align-self-center bg-transparent"><img src="../../assets/img/flags/uk.png" alt="img"></span>
                                <div class="d-flex">
                                    <span class="mt-2">{{__('messages.english')}}</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex" id="ar" onclick="changeLanguage('ar')">
                                <span class="avatar mr-3 align-self-center bg-transparent"><img src="../../assets/img/flags/ma.png" alt="img"></span>
                                <div class="d-flex">
                                    <span class="mt-2">{{__('messages.arab')}}</span>
                                </div>
                            </a>

                        </div>
                    @endif
                    @if ($user->lang == 'ar')
                        <a class="nav-link" >
                            <span class="avatar mr-3 align-self-center bg-transparent"><img src="../../assets/img/flags/ma.png" alt="img"></span>

                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item d-flex" id="fr" onclick="changeLanguage('fr')">
                                <span class="avatar mr-3 align-self-center bg-transparent"><img src="../../assets/img/flags/french_flag.jpg" alt="img"></span>
                                <div class="d-flex">
                                    <span class="mt-2">{{__('messages.french')}}</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex" id="en" onclick="changeLanguage('ar')">
                                <span class="avatar mr-3 align-self-center bg-transparent"><img src="../../assets/img/flags/uk.png" alt="img"></span>
                                <div class="d-flex">
                                    <span class="mt-2">{{__('messages.english')}}</span>
                                </div>
                            </a>

                        </div>
                    @endif
                </div>
            <div class="dropdown ">
                <a class="nav-link icon full-screen-link">
                    <i class="fe fe-maximize fullscreen-button fullscreen header-icons"></i>
                    <i class="fe fe-minimize fullscreen-button exit-fullscreen header-icons"></i>
                </a>
            </div>
            <div class="dropdown main-header-notification">
                <a class="nav-link icon" href="">
                    <i class="fe fe-bell header-icons"></i>
                    <span class="badge badge-danger nav-link-badge">4</span>
                </a>
            </div>
            <div class="dropdown main-profile-menu">
                <a class="d-flex" href="">
                    <span class="main-img-user" ><img alt="avatar" src="../../assets/img/users/1.jpg"></span>
                </a>
                <div class="dropdown-menu">
                    <div class="header-navheading">
                        <h6 class="main-notification-title">{{ auth()->user()->name }}</h6>
                        <p class="main-notification-text">{{ auth()->user()->roles()->first()->name }}</p>
                    </div>
                    <a class="dropdown-item" href="{{ route('profile.edit')}}">
                        <i class="fe fe-settings"></i> Account Settings
                    </a>
                    @role('super-admin|admin')
                        <a class="dropdown-item" href="{{route('users.index')}}">
                            <i class="si si-energy"></i> Roles And Permission
                        </a>
                    @endrole

                    <a class="dropdown-item" href="profile.html">
                        <i class="fe fe-compass"></i> Activity
                    </a>
                    <form class="dropdown-item" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <i class="fe fe-power"></i>
                        <button type="submit" class="dropdown-item" style="background-color: transparent ; border: none; margin:0; padding:0;">
                            {{ __('Log Out') }}
                        </button>
                    </form>
                </div>
            </div>
            <div class="dropdown  header-settings">
                <a href="#" class="nav-link icon" data-toggle="sidebar-right" data-target=".sidebar-right">
                    <i class="fe fe-align-right header-icons"></i>
                </a>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile-header closed -->
