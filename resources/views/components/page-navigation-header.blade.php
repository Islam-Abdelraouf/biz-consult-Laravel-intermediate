{{--


--}}

@props([
    'headerTitle' => null,
])

@php
    use Illuminate\Support\Str;
    $sidebarTabsCollection = collect([
        'dashboard' => 'dashboardIcon',
        'service' => 'servicesIcon',
        'feature' => 'featuresIcon',
        'message' => 'messagesIcon',
        'subscriber' => 'subscribersIcon',
        'testimonial' => 'testimonialsIcon',
        'member' => 'membersIcon',
        'compan' => 'companiesIcon',
        'heroSection' => 'heroSectionIcon',
    ]);

    $title = Str::lower($headerTitle ?? '');

    $icon = $sidebarTabsCollection->first(function (string $tab, string $icon) use ($title) {
        return str_contains($title, $icon);
    });
    $icon = config("icons.{$icon}");
    $icon = $icon ? "<i class='fe {$icon} fe-32 mr-3'></i>" : '';
@endphp

<div class="card mb-3 shadow">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center rounded bg-white">
            {{-- page title --}}
            <h2 class="h5">{!! $icon !!}{!! $headerTitle !!}</h2>

            <div class="d-inline">
                {{ $actions ?? '' }}
            </div>
        </div>
    </div>
</div>
