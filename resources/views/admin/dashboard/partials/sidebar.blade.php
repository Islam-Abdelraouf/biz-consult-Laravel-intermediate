<!-- sidebar main -->
<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->

        {{-- main icon --}}
        <div class="w-100 d-flex mb-4">
            <a class="navbar-brand flex-fill mx-auto mt-2 text-center" href="./index.html">
                <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120"
                    xml:space="preserve">
                    <g>
                        <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                        <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                        <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                    </g>
                </svg>
            </a>
        </div>


        {{-- side menu items --}}

        {{-- dashboard --}}
        <x-side-menu-item
            href="{{ route('admin.dashboard') }}"
            icon="fe-home"
            name="{{ __('keywords.dashboard') }}">
        </x-side-menu-item>

        <p class="text-muted nav-heading mb-1 mt-4">
            <span>Components</span>
        </p>

        {{-- Services --}}
        <x-side-menu-item
            href="{{ route('admin.services.index') }}"
            icon="fe-codesandbox"
            name="{{ __('keywords.services') }}">
        </x-side-menu-item>

        {{-- Features --}}
        <x-side-menu-item
            href="{{ route('admin.features.index') }}"
            icon="fe-bookmark"
            name="{{ __('keywords.features') }}">
        </x-side-menu-item>

        {{-- Messages --}}
        <x-side-menu-item
            href="{{ route('admin.messages.index') }}"
            icon="fe-mail"
            name="{{ __('keywords.messages') }}">
        </x-side-menu-item>

        {{-- Subscribers --}}
        <x-side-menu-item
            href="{{ route('admin.subscribers.index') }}"
            icon="fe-users"
            name="{{ __('keywords.subscribers') }}">
        </x-side-menu-item>

        {{-- Testimonials --}}
        <x-side-menu-item
            href="{{ route('admin.testimonials.index') }}"
            icon="fe-thumbs-up"
            name="{{ __('keywords.testimonials') }}">
        </x-side-menu-item>

        {{-- Members --}}
        <x-side-menu-item
            href="{{ route('admin.members.index') }}"
            icon="fe-smile"
            name="{{ __('keywords.members') }}">
        </x-side-menu-item>

        {{-- public website --}}
        <x-side-menu-item
            href="{{ route('front.home') }}"
            icon="fe-chrome"
            name="{{ __('keywords.public_website') }}">
        </x-side-menu-item>

        {{-- hero section --}}
        <x-side-menu-item
            href="{{ route('admin.services.index') }}"
            icon="fe-settings"
            name="{{ __('keywords.hero_section') }}">
        </x-side-menu-item>

        {{-- our clients --}}
        <x-side-menu-item
            href="{{ route('admin.services.index') }}"
            icon="fe-smile"
            name="{{ __('keywords.our_clients') }}">
        </x-side-menu-item>



    </nav>
</aside>
