<!-- Sidemenu -->
<div class="main-sidebar main-sidebar-sticky side-menu">
    <div class="sidemenu-logo">
        <a class="main-logo" href="/dashboard">
            <img src="../../assets/img/brand/logo-light.png" class="header-brand-img desktop-logo" alt="logo">
            <img src="../../assets/img/brand/icon-light.png" class="header-brand-img icon-logo" alt="logo">
        </a>
    </div>
    <div class="main-sidebar-body">
        <ul class="nav">
            <li class="nav-header"><span class="nav-label">{{__('messages.dashboard')}}</span></li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}"><span class="shape1"></span><span class="shape2"></span><i class="ti-home sidemenu-icon"></i><span class="sidemenu-label">{{__('messages.dashboard')}}</span></a>
            </li>

            @role('super-admin|admin')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pre_inscription.list') }}"><span class="shape1"></span><span class="shape2"></span><i class="mdi mdi-account-multiple sidemenu-icon"></i><span class="sidemenu-label">{{__('Pre inscription list')}}</span></a>
                </li>
            @endrole

            @role('super-admin|admin')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('concour.index') }}"><span class="shape1"></span><span class="shape2"></span><i class="mdi mdi-account-multiple sidemenu-icon"></i><span class="sidemenu-label">{{__('Condidature List')}}</span></a>
                </li>
            @endrole
        </ul>
    </div>
</div>
<!-- End Sidemenu -->
