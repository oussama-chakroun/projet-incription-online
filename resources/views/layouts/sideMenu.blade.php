<!-- Sidemenu -->
<div class="main-sidebar main-sidebar-sticky side-menu">
    <div class="sidemenu-logo">
        <a class="main-logo" href="index.html">
            <img src="../../assets/img/brand/logo-light.png" class="header-brand-img desktop-logo" alt="logo">
            <img src="../../assets/img/brand/icon-light.png" class="header-brand-img icon-logo" alt="logo">
            <img src="../../assets/img/brand/logo.png" class="header-brand-img desktop-logo theme-logo" alt="logo">
            <img src="../../assets/img/brand/icon.png" class="header-brand-img icon-logo theme-logo" alt="logo">
        </a>
    </div>
    <div class="main-sidebar-body">
        <ul class="nav">
            <li class="nav-header"><span class="nav-label">{{__('messages.dashboard')}}</span></li>
            <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard') }}"><span class="shape1"></span><span class="shape2"></span><i class="ti-home sidemenu-icon"></i><span class="sidemenu-label">{{__('messages.dashboard')}}</span></a>
            </li>
        </ul>
    </div>
</div>
<!-- End Sidemenu -->