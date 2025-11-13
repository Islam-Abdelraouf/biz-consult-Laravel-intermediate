{{-- table action buttons
    show
    edit
    delete
--}}

@props([
    // core attributes
    'type' => null,
    'href' => null,
    'icon' => null,
    'formName' => null, //for delete button
    'formId' => null, //for delete button
    // styling attributes
    'backColor' => null,
    'color' => null,
    'width' => '38px',
    'height' => '38px',
])

@php
    // get the config saved data
    $bkColor = $backColor ?: config("colors.action_btn_{$type}_backColor");
    $frColor = $color ?: config("colors.action_btn_{$type}_color");
    $icon = $color ?: config("icons.action_btn_{$type}");
    // prepare Feather Icons text
    $icon = "<i class='fe {{ $icon }} mr-2'></i>";

    $formName = $formName ?: 'deleteForm-';
    $formFullId = $formName . $formId;
    $common = $attributes->merge([
        'class' => 'btn rounded-1 p-2',
        'style' => "height: {$height}; width: {$width}; background:{$bkColor}; color:{$frColor};",
    ]);
@endphp

{{-- if the button is 'delete' type --}}
@if ($type == 'delete')
    <form action="{{ $href }}" method="post" id="{{ $formFullId }}" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="button" {{ $common }} onclick="confirmDelete({{ $formId }})">
            {!! $icon !!}
        </button>
    </form>
@else
    {{-- if the button is 'show' or 'edit' type --}}
    <a href="{{ $href }}" {{ $common }}>
        {!! $icon !!}
    </a>
@endif
