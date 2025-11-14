<!-- navbar start -->
<nav class="topnav navbar navbar-light">
    <div></div> {{-- pseudo div to keep pushing the buttons to the end --}}
    <ul class="nav">
        <li class="nav-item">
            {{-- language switcher --}}
            @include('admin.dashboard.partials.lang-switcher')
        </li>
        <li class="nav-item">
            <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="light">
                <i class="fe fe-sun fe-16"></i>
            </a>
        </li>
    </ul>
</nav>
