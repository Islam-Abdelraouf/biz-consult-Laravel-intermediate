{{-- calling the baseButton component
    inside the back button component --}}


{{-- example
    <x-button.back>
    </x-button.back> 
--}}



@props([
    'myCaption' => null,
    'mybackColor' => null,
    'myColor' => null,
])

@php
    $bkColor = $mybackColor ? : config('colors.back_backColor', 'red');
    $frColor = $myColor ? : config('colors.back_color', 'white');
    $text = $myCaption ? :  __('keywords.back') 
@endphp

<x-button.base-button 
    type="back" 
    color="{{ $frColor }}" 
    backColor="{{ $bkColor }} "
    icon="{{ config('icons.btn_back') }}"
    caption="{{ $myCaption ?: $text }}">
</x-button.base-button>
