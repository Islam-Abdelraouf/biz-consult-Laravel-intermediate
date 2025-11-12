{{--

--}}

{{-- example
<x-button.update
        myFormId="main-form">
</x-button.update>
--}}

@props([
    'myCaption' => null,
    'mybackColor' => null,
    'myColor' => null,
    'myFormId' => null,
])

@php
    $bkColor = $mybackColor ? : config('colors.update_backColor', 'blue') ;
    $frColor = $myColor ? : config('colors.update_color', 'white') ;
    $text = $myCaption ? :  __('keywords.update') ;
    $form = $myFormId ? : "main-form" ;
@endphp

<x-button.base-button
    type="update"
    formId="{{ $form }}"
    color="{{ $frColor }}"
    backColor="{{ $bkColor }}"
    icon="{{ config('icons.btn_update') }}"
    caption="{{ $text }}">
</x-button.base-button>
