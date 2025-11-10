@extends('admin.master')

{{-- update title --}}
@section('title', __('keywords.testimonials'))

{{-- content --}}
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                {{-- page navigation head --}}
                <x-page-navigation-header headerTitle="{{ __('keywords.testimonials') }}"
                    btnCaption="{{ __('keywords.add_new_testimonial') }}" btnColor="primary"
                    btnHref="{{ route('admin.testimonials.create') }}">
                </x-page-navigation-header>

                <!-- simple table -->
                <div class="card shadow">
                    <div class="card-body">

                        {{-- success testimonial alert --}}
                        <x-success-alert />

                        {{-- services table --}}
                        <table class="table-hover table">
                            <thead class="thead-dark">
                                <tr>
                                    <th width="5%">#</th>
                                    <th>{{ __('keywords.name') }}</th>
                                    <th width="15%">{{ __('keywords.position') }}</th>
                                    <th width="25%">{{ __('keywords.image') }}</th>
                                    <th width="20%">{{ __('keywords.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($testimonials) > 0)
                                    @foreach ($testimonials as $testimonial)
                                        <tr>
                                            <td>{{ $testimonials->firstItem() + $loop->index }}</td>
                                            <td>{{ $testimonial->name }}</td>
                                            <td>{{ $testimonial->position }}</td>
                                            <td><img width="100px" height="100px" src="{{ asset('assets-front/img/' . $testimonial->image) }}"
                                                    alt="{{ $testimonial->image }}"> </td>
                                            <td>

                                                {{-- edit button --}}
                                                <x-action-button type="edit"
                                                    href="{{ route('admin.testimonials.edit', ['testimonial' => $testimonial]) }}">
                                                </x-action-button>

                                                {{-- show button --}}
                                                <x-action-button type="show"
                                                    href="{{ route('admin.testimonials.show', ['testimonial' => $testimonial]) }}">
                                                </x-action-button>

                                                {{-- delete button --}}
                                                <x-action-button type="delete"
                                                    href="{{ route('admin.testimonials.destroy', ['testimonial' => $testimonial]) }}"
                                                    scriptId="{{ $testimonial->id }}">
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
                        {{ $testimonials->links() }}
                        {{-- {{ $testimonials->render('pagination::bootstrap-4') }} --}}
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->




    @endsection
