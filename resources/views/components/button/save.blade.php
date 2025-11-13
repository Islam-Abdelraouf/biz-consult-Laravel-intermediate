
{{-- calling the baseButton component
    inside the save button component --}}
    

{{-- example
<x-button.save
        myFormId="main-form">
</x-button.save> 
--}}

@props([
    'myCaption' => null,
    'mybackColor' => null,
    'myColor' => null,
    'myFormId' => null,
])

@php
    $bkColor = $mybackColor ? : config('colors.save_backColor', 'blue') ;
    $frColor = $myColor ? : config('colors.save_color', 'white') ;
    $text = $myCaption ? :  __('keywords.save') ;
    $form = $myFormId ? : "main-form" ;
@endphp

<x-button.base-button
    type="save"
    formId="{{ $form }}"
    color="{{ $frColor }}" 
    backColor="{{ $bkColor }}"
    icon="{{ config('icons.btn_save') }}"
    caption="{{ $text }}">
</x-button.base-button>
