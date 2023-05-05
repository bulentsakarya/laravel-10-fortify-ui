<aside id="sidebar" class="sidebar">
    <div class="logo-area d-flex align-items-start justify-content-between">
        <a class="logo" href="index.html">
            <img src="{{ asset('laravel-logo.png') }}" alt="Fortify Panel">
        </a>
        <span class="d-block d-md-none close"><i class="ri-close-circle-line"></i></span>
    </div>
    <div class="sidebar-content" data-simplebar>
        @include('user.partials.navigation')
    </div>
</aside>
