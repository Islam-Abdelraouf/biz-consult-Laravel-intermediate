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
    'width' => '220px',
])

@php

    $bkColor = $backColor;
    $frColor = $color;
    $text = $caption;
    // prepare Feather Icons text
    $icon = "<i class='fe {{ $icon }} mr-2'></i>";
    $common = $attributes->merge([
        'class' => 'btn rounded border',
        'style' => "width: {$width}; background: {$bkColor}; color: {$frColor};",
    ]);

@endphp

{{-- this block works for both 'create' and 'update' buttons --}}
@if ($type == 'nav')
    <a href="{{ $href }}" {{ $common }}>
        {!! $icon !!}{{ $text }}
    </a>

    {{-- this block works for the 'back' button --}}
@elseif ($type == 'back')
    <button type="button" class="btn rounded border" onclick="window.history.back()"
        style = "width: 220px ; background: {{ $backColor ?: config('colors.back_backColor') }} ; color: {{ $color ?: config('colors.back_color') }} ; ">
        {!! $icon !!}{{ $caption ?: 'Back' }}
    </button>

    {{-- this block works for the 'update' button --}}
@elseif ($type == 'update')
    <button type="submit" form="{{ $formId }}" class="btn rounded border"
        style = "width: 220px ; background: {{ $backColor ?: config('colors.update_backColor') }} ; color: {{ $color ?: config('colors.update_color') }} ; ">
        {!! $icon !!}{{ $caption ?: 'Update' }}
    </button>

    {{-- this block works for the 'save' button --}}
@elseif ($type == 'save')
    <button type="submit" class="btn rounded border" form="{{ $formId }}"
        style = "width: 220px ; background: {{ $backColor ?: config('colors.save_backColor') }} ; color: {{ $color ?: config('colors.save_color') }} ; ">
        {!! $icon !!}{{ $caption ?: 'Save' }}
    </button>
@elseif ($type == 'reset')

@elseif ($type == 'menu')
@endif
