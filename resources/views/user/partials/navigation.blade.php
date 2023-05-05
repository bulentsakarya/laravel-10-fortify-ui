<ul class="sidebar-menu">
    <li class="menu-item {{ request()->routeIs('user.home') ? 'active' : '' }}">
        <a class="d-flex align-items-center justify-content-start" href="{{ route('user.home') }}" title="Başlangıç">
            <i class="ri-home-smile-2-line"></i> <span class="align-middle">Başlangıç</span>
        </a>
    </li>
    <li class="menu-header">Ayarlar</li>
    <li class="menu-item {{ request()->routeIs('user.profile') ? 'active' : '' }}">
        <a class="d-flex align-items-center justify-content-start" href="{{ route('user.profile') }}" title="Bilgilerim">
            <i class="ri-user-follow-line"></i> <span class="align-middle">Bilgilerim</span>
        </a>
    </li>
    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::twoFactorAuthentication()))
    <li class="menu-item {{ request()->routeIs('user.twofactor') ? 'active' : '' }}">
        <a class="d-flex align-items-center justify-content-start" href="{{ route('user.twofactor') }}" title="2 Faktörlü Doğrulama">
            <i class="ri-phone-lock-line"></i> <span class="align-middle">2 Faktörlü Doğrulama</span>
        </a>
    </li>
    @endif
</ul>
