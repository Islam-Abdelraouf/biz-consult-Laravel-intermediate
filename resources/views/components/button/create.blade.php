{{-- calling the baseButton component
    inside the save button component --}}

{{-- example
    <x-button.create
        myHref="{{ route('admin.features.create') }}"
        myCaption="{{ __('keywords.create_feature') }}">
    </x-button.create> 
--}}

@props([
    'myHref' => null,
    'myCaption' => null,
    'mybackColor' => null,
    'myColor' => null,
])

@php
    $bkColor = $mybackColor ? : config('colors.create_backColor', 'red');
    $frColor = $myColor ? : config('colors.create_color', 'white');
    $text = $myCaption ? :  __('keywords.create') 
@endphp

<x-button.base-button
    type="nav"
    href="{{ $myHref }}"
    color="{{ $frColor }}" 
    backColor="{{ $bkColor }}"
    icon="{{ config('icons.btn_create') }}"
    caption="{{ $text }}">
</x-button.base-button>