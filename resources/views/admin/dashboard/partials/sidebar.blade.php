<!-- sidebar main -->
<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->

        {{-- Main Avatar --}}
        <div class="w-100 d-flex flex-column bd-highlight align-items-center justify-content-center mb-2 rounded"
            style="background-color: #f8f8f8;">
            <div class="mb-2">
                <a class="navbar-brand flex-fill mx-auto mt-2 text-center" href="./index.html">
                    <span class="avatar avatar-xl mt-2">
                        <img src="{{ asset('assets-admin') }}/assets/avatars/face-1.jpg" alt="..."
                            class="avatar-img rounded-circle">
                    </span>
                </a>
            </div>
            <div class="text-light mb-2">
                <h4><span>Admin</span></h4>
            </div>
        </div>

        {{-- side menu items --}}

        {{-- dashboard --}}
        <x-side-menu-item href="{{ route('admin.dashboard') }}" icon="{{ config('icons.dashboardIcon') }}"
            name="{{ __('keywords.dashboard') }}">
        </x-side-menu-item>

        <hr class="side-menu">

        {{-- Services --}}
        <x-side-menu-item href="{{ route('admin.services.index') }}" icon="{{ config('icons.servicesIcon') }}"
            name="{{ __('keywords.services') }}">
        </x-side-menu-item>

        {{-- Features --}}
        <x-side-menu-item href="{{ route('admin.features.index') }}" icon="{{ config('icons.featuresIcon') }}"
            name="{{ __('keywords.features') }}">
        </x-side-menu-item>

        {{-- Messages --}}
        <x-side-menu-item href="{{ route('admin.messages.index') }}" icon="{{ config('icons.messagesIcon') }}"
            name="{{ __('keywords.messages') }}">
        </x-side-menu-item>

        {{-- Subscribers --}}
        <x-side-menu-item href="{{ route('admin.subscribers.index') }}" icon="{{ config('icons.subscribersIcon') }}"
            name="{{ __('keywords.subscribers') }}">
        </x-side-menu-item>

        {{-- Testimonials --}}
        <x-side-menu-item href="{{ route('admin.testimonials.index') }}" icon="{{ config('icons.testimonialsIcon') }}"
            name="{{ __('keywords.testimonials') }}">
        </x-side-menu-item>

        {{-- Members --}}
        <x-side-menu-item href="{{ route('admin.members.index') }}" icon="{{ config('icons.membersIcon') }}"
            name="{{ __('keywords.members') }}">
        </x-side-menu-item>

        {{-- Companies --}}
        <x-side-menu-item href="{{ route('admin.companies.index') }}" icon="{{ config('icons.companiesIcon') }}"
            name="{{ __('keywords.companies') }}">
        </x-side-menu-item>

        {{-- public website --}}
        <x-side-menu-item href="{{ route('front.home') }}" icon="{{ config('icons.publicSiteIcon') }}"
            name="{{ __('keywords.public_website') }}">
        </x-side-menu-item>

        {{-- Settings --}}
        <x-side-menu-item href="{{ route('admin.settings.index') }}" icon="{{ config('icons.settingsIcon') }}"
            name="{{ __('keywords.settings') }}">
        </x-side-menu-item>

        {{-- logout --}}
        <form action="{{ route('admin.logout') }}" method="post" style="width: 100%">
            @csrf
            <button class="btn btn-outline-danger btn-sm btn-block mt-2" type="submit">
                <i class="fe {{ config('icons.logoutIcon') }} fe-22 p-0"></i>
                <span class="item-text ml-3 p-0">{{ __('keywords.logout') }}</span>
            </button>
        </form>
    </nav>
</aside>
