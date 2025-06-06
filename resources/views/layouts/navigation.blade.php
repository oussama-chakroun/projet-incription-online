<!-- Main Header-->
<div class="main-header side-header sticky">
    <div class="container-fluid">
        <div class="main-header-left">
            <a class="main-header-menu-icon" href="#" id="mainSidebarToggle"><span></span></a>
        </div>
        <div class="main-header-center">
            <div class="responsive-logo">
                <a href="index.html"><img src="../../assets/img/brand/logo.png" class="mobile-logo" alt="logo"></a>
                <a href="index.html"><img src="../../assets/img/brand/logo-light.png" class="mobile-logo-dark" alt="logo"></a>
            </div>
        </div>
        <div class="main-header-right">
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
                        <a class="dropdown-item d-flex" id="en" onclick="changeLanguage('en')">
                            <span class="avatar mr-3 align-self-center bg-transparent"><img src="../../assets/img/flags/uk.png" alt="img"></span>
                            <div class="d-flex">
                                <span class="mt-2">{{__('messages.english')}}</span>
                            </div>
                        </a>

                    </div>
                @endif
            </div>
            <div class="dropdown d-md-flex">
                <a class="nav-link icon full-screen-link" href="">
                    <i class="fe fe-maximize fullscreen-button fullscreen header-icons"></i>
                    <i class="fe fe-minimize fullscreen-button exit-fullscreen header-icons"></i>
                </a>
            </div>
            <div class="dropdown d-md-flex">
                @include('layouts.lightdarkswitch')
            </div>
            {{-- <div class="dropdown main-header-notification">
                <a class="nav-link icon" href="">
                    <i class="fe fe-bell header-icons"></i>
                    <span class="badge badge-danger nav-link-badge">4</span>
                </a>
                <div class="dropdown-menu">
                    <div class="header-navheading">
                        <p class="main-notification-text">You have 1 unread notification<span class="badge badge-pill badge-primary ml-3">View all</span></p>
                    </div>
                    <div class="main-notification-list">
                        <div class="media new">
                            <div class="main-img-user online"><img alt="avatar" src="../../assets/img/users/5.jpg"></div>
                            <div class="media-body">
                                <p>Congratulate <strong>Olivia James</strong> for New template start</p><span>Oct 15 12:32pm</span>
                            </div>
                        </div>
                        <div class="media">
                            <div class="main-img-user"><img alt="avatar" src="../../assets/img/users/2.jpg"></div>
                            <div class="media-body">
                                <p><strong>Joshua Gray</strong> New Message Received</p><span>Oct 13 02:56am</span>
                            </div>
                        </div>
                        <div class="media">
                            <div class="main-img-user online"><img alt="avatar" src="../../assets/img/users/3.jpg"></div>
                            <div class="media-body">
                                <p><strong>Elizabeth Lewis</strong> added new schedule realease</p><span>Oct 12 10:40pm</span>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-footer">
                        <a href="#">View All Notifications</a>
                    </div>
                </div>
            </div> --}}
            <div class="dropdown main-profile-menu">
                <a class="d-flex" href="">
                    <span class="main-img-user" ><img alt="avatar" src="{{ asset('storage\iamges\default-avatar.jpg') }}"></span>
                </a>
                <div class="dropdown-menu">
                    <div class="header-navheading">
                        <h6 class="main-notification-title">{{ auth()->user()->name }}</h6>
                        <p class="main-notification-text">{{ auth()->user()->roles()->first()->name }}</p>
                    </div>
                    <a class="dropdown-item" href="{{ route('profile.edit')}}">
                        <i class="fe fe-settings"></i> {{__('messages.account_settings')}}
                    </a>
                    @role('super-admin|admin')
                        <a class="dropdown-item" href="{{route('users.index')}}">
                            <i class="si si-energy"></i>{{__('messages.roles_and_permission')}}
                        </a>
                    @endrole
                    <form class="dropdown-item" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <i class="fe fe-power"></i>
                        <button type="submit" class="dropdown-item" style="background-color: transparent ; border: none; margin:0; padding:0;">
                            {{__('messages.log_out')}}
                        </button>
                    </form>
                </div>
            </div>
            <button class="navbar-toggler navresponsive-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
                aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
            </button><!-- Navresponsive closed -->
        </div>
    </div>
    <script>
        function changeLanguage(lang) {
            const userId = {{ $user->id }}; // Get the user ID from the PHP variable
            const url = '{{ route("user.lang", [":user", ":lang"]) }}'
                        .replace(':user', userId)
                        .replace(':lang', lang);
            window.location.href = url;
        }
    </script>
</div>
<!-- End Main Header-->
