@extends('admin.master')

{{-- update title --}}
@section('title', __('keywords.testimonials'))

{{-- content --}}
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                {{-- page navigation head --}}
                <x-page-navigation-header
                    headerTitle="{{ __('keywords.testimonials') }}">
                    <x-slot:actions>
                        {{-- create button --}}
                        <x-button.create myHref="{{ route('admin.testimonials.create') }}"
                            myCaption="{{ __('keywords.create_testimonial') }}">
                        </x-button.create>
                    </x-slot:actions>
                </x-page-navigation-header>

                <!-- {{-- main card --}} -->
                <div class="card shadow">
                    <div class="card-body">

                        {{-- success message alert --}}
                        <x-success-alert></x-success-alert>

                        {{-- table card --}}
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
                                            <td><img style="width:100px;height:100px;object-fit:cover;"
                                                    src="{{ asset('assets-front/img/' . $testimonial->image) }}"
                                                    alt="{{ $testimonial->image }}"> </td>
                                            <td>
                                                <div class="d-inline">
                                                    {{-- show button --}}
                                                    <x-button.action type="show"
                                                        href="{{ route('admin.testimonials.show', ['testimonial' => $testimonial]) }}">
                                                    </x-button.action>
                                                    {{-- edit button --}}
                                                    <x-button.action type="edit"
                                                        href="{{ route('admin.testimonials.edit', ['testimonial' => $testimonial]) }}">
                                                    </x-button.action>
                                                    {{-- delete button --}}
                                                    <x-button.action type="delete"
                                                        href="{{ route('admin.testimonials.destroy', ['testimonial' => $testimonial]) }}"
                                                        formId="{{ $testimonial->id }}">
                                                    </x-button.action>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    {{-- zero record alert --}}
                                    <x-empty-alert></x-empty-alert>
                                @endif
                            </tbody>
                        </table>

                        {{-- pagination links --}}
                        {{ $testimonials->links() }}
                        {{-- {{ $testimonials->render('pagination::bootstrap-4') }} --}}
                    </div>
                </div>
            </div>
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
