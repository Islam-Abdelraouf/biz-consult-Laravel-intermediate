@extends('admin.master')

{{-- update title --}}
@section('title', __('keywords.services'))

{{-- content --}}
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                {{-- page navigation head --}}
                <x-page-navigation-header 
                    headerTitle="{{ __('keywords.services') }}"
                    
                    btnCaption="{{ __('keywords.add_new_service') }}" 
                    btnColor="primary" 
                    btnHref="{{ route('admin.services.create') }}">
                </x-page-navigation-header>

                <!-- simple table -->
                <div class="card shadow">
                    <div class="card-body">

                        {{-- success message alert --}}
                        <x-success-alert />

                        {{-- services table --}}
                        <table class="table-hover table">
                            <thead class="thead-dark">
                                <tr>
                                    <th width="5%">#</th>
                                    <th>{{ __('keywords.title') }}</th>
                                    <th width="10%">{{ __('keywords.icon') }}</th>
                                    <th width="25%">{{ __('keywords.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($services) > 0)
                                    @foreach ($services as $service)
                                        <tr>
                                            <td>{{ $services->firstItem() + $loop->index }}</td>
                                            <td>{{ $service->title }}</td>
                                            <td><i class="fe {{ $service->icon }} fe-2x"></i></td>
                                            <td>

                                                {{-- edit button --}}
                                                <x-action-button  
                                                    type="edit"
                                                    href="{{ route('admin.services.edit', ['service' => $service]) }}">
                                                </x-action-button>

                                                {{-- show button --}}
                                                <x-action-button  
                                                    type="show"
                                                    href="{{ route('admin.services.show', ['service' => $service]) }}">
                                                </x-action-button>

                                                {{-- delete button --}}
                                                <x-action-button  
                                                    type="delete"
                                                    href="{{ route('admin.services.destroy', ['service' => $service]) }}"
                                                    scriptId="{{ $service->id }}">
                                                </x-action-button>

                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <x-empty-alert />
                                @endif

                            </tbody>
                        </table>

                        {{-- pagination links --}}
                        {{ $services->links() }}
                        {{-- {{ $services->render('pagination::bootstrap-4') }} --}}
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->




    @endsection
