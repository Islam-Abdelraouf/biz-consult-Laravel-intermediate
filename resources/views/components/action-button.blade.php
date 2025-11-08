{{-- 
================================================================================
| Project: Bursa Engineer Admin Panel
| Component: <x-action-button>
| Author: Eng. Islam Abdelraouf
| Updated: 2025-11-08
================================================================================
| Description:
|   A dynamic Blade component that renders either:
|     (1) a standard navigation button, or
|     (2) a secured delete button wrapped inside a form element.
|
|   The delete version automatically includes:
|     - CSRF token for security
|     - HTTP method spoofing (@method('DELETE'))
|     - Inline JavaScript confirmation handler (confirmDelete)
|
| Parameters:
|   @param string $type       → 'link' (default) or 'delete'
|   @param string $color      → Bootstrap color variant (e.g. 'primary', 'danger')
|   @param string $href       → URL or route target
|   @param string $caption    → Displayed button text
|   @param string $scriptID   → Unique identifier for delete form and JS handler
|
| Example Usage:
|   // Standard action button
|   <x-action-button 
|       type="link" or nothing
|       color="success"
|       href="{{ route('clients.create') }}"
|       caption="Add New Client"
|   />
|
|   // Delete button with confirmation
|   <x-action-button 
|       type="delete"
|       color="danger"
|       href="{{ route('clients.destroy', $client->id) }}"
|       caption="Delete"
|       scriptID="{{ $client->id }}"
|   />
|
| Output:
|   - type='link' or ''  → renders an <a> tag styled as a button
|   - type='delete' → renders a <form> with CSRF + DELETE method
|                     and a confirmation-based delete button
|
| Purpose:
|   Centralizes all action buttons across the admin panel while enforcing
|   secure delete operations and consistent design.
|
| Notes:
|   - The confirmDelete() JavaScript function must be defined globally.
|   - Keep $scriptID unique per record to avoid duplicate form IDs.
================================================================================
--}}



@if ($type == 'action')
    <div class="d-inline">
        <a class="btn btn-{{ $color }} rounded border" href="{{ $href }}">
            {!! $caption !!}
        </a>
    </div>
@elseif ($type == 'submit')
    <div class="d-inline">
        <button class="btn btn-{{ "primary" }} rounded border" type="submit">
            {!! $caption !!}
        </button>
    </div>
@elseif ($type == 'edit')
    <div class="d-inline">
        <a class="btn btn-{{ "success" }} rounded border" href="{{ $href }}">
            {!! "<i class='fe fe-edit fe-2x'></i>" !!}
        </a>
    </div>
@elseif ($type == 'show')
    <div class="d-inline">
        <a class="btn btn-{{ "primary" }} rounded border" href="{{ $href }}">
            {!! "<i class='fe fe-eye fe-2x'></i>" !!}
        </a>
    </div>
@elseif ($type == 'delete')
    <form action="{{ $href }}" method="post" id="deleteForm-{{ $scriptId }}" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="button" class="btn btn-{{ "danger" }} text-light"
            onclick="confirmDelete({{ $scriptId }})">
            {!! "<i class='fe fe-trash fe-2x'></i>" !!}
            </a>
    </form>
@endif
