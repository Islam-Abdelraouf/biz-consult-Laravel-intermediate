{{-- button types
    nav
    back
    button
    update
    reset
    menu
--}}

@props([
    // core attributes
    'type' => null,
    'formId' => null, // used for submit buttons ( save and update )
    'href' => null, // used for linked buttons ( save and update )
    'caption' => null,
    'icon' => null,
    // styling attributes
    'color' => null,
    'backColor' => null,
    'min_width' => '270px',
    'min_height' => '70px',
])

@php

    $bkColor = $backColor;
    $frColor = $color;
    $text = $caption;
    // prepare Feather Icons text
    $icon = "<i class='fe {{ $icon }} mr-2'></i>";
    $common = $attributes->merge([
        'class' => 'btn rounded border btn-create',
        'style' => "min_height: {$min_height}; min_width: {$min_width}; background: {$bkColor}; color: {$frColor};",
    ]);

@endphp

{{-- this block works for both 'create' and 'update' buttons --}}
@if ($type == 'nav')
    <a href="{{ $href }}" {{ $common }} class="p-4">
        {!! $icon !!}{{ $text }}
    </a>

    {{-- this block works for the 'back' button --}}
@elseif ($type == 'back')
    <button type="button" onclick="window.history.back()" {{ $common }}>
        {!! $icon !!}{{ $caption ?: 'Back' }}
    </button>

    {{-- this block works for the 'update' button --}}
@elseif ($type == 'update')
    <button type="submit" form="{{ $formId }}" {{ $common }}>
        {!! $icon !!}{{ $caption ?: 'Update' }}
    </button>

    {{-- this block works for the 'save' button --}}
@elseif ($type == 'save')
    <button type="submit" form="{{ $formId }}" {{ $common }}>
        {!! $icon !!}{{ $caption ?: 'Save' }}
    </button>
@elseif ($type == 'reset')

@elseif ($type == 'menu')
@endif
