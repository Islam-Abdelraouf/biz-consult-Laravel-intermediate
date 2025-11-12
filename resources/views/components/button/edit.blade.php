{{--

--}}




{{-- example
    <x-button.edit
        myCaption="{{ __('keywords.edit') }}"
        myHref="{{ route('admin.features.edit', ['feature' => $feature]) }}">
    </x-button.edit>
--}}


@props([
    'myHref' => null,
    'myCaption' => null,
    'mybackColor' => null,
    'myColor' => null,
])

@php
    $bkColor = $mybackColor ? : config('colors.edit_backColor', 'red');
    $frColor = $myColor ? : config('colors.edit_color', 'white');
    $text = $myCaption ? :  __('keywords.edit') 
@endphp

<x-button.base-button
    type="nav"
    href="{{ $myHref }}"
    color="{{ $frColor }}" 
    backColor="{{ $bkColor }}"
    icon="{{ config('icons.btn_edit') }}"
    caption="{{ $text }}">
</x-button.base-button>
