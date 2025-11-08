{{--
|--------------------------------------------------------------------------
| Component: <x-page-navigation-header>
|--------------------------------------------------------------------------
| Description:
|   This component creates a standardized page header layout combining
|   a section title and an optional action button (e.g., "Add New",
|   "Create", or "Manage").
|
| Parameters:
|   @param string $headerTitle  → The page or section title.
|   @param string $btnColor     → The color style of the action button.
|   @param string $btnHref      → The link or route for the button action.
|   @param string $btnCaption   → The text label shown on the button.
|
| Example Usage:
|   <x-page-navigation-header
|       headerTitle="Clients List"
|       btnColor="success"
|       btnHref="{{ route('clients.create') }}"
|       btnCaption="Add New Client"
|   />
|
| Output:
|   Renders a card-styled header with a title on the left and an
|   action button on the right, following consistent spacing and
|   alignment with Bootstrap classes.
|
| Purpose:
|   To unify the appearance of top-section headers across all admin
|   and member pages, keeping the layout modular and maintainable.
--}}


<div class="card mb-3 shadow">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center rounded bg-white">
            {{-- page title --}}
            <h2 class="h5">{{ $headerTitle }}</h2>

            @if ($createActionButton)
                {{-- add new button --}}
                <x-action-button
                    type="action"
                    color="{{ $btnColor }}"
                    href="{{ $btnHref }}"
                    caption="{{ $btnCaption }}">
                </x-action-button>
            @endif




        </div>
    </div>
</div>
