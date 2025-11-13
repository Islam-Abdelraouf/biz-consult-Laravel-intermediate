@extends('admin.master')

{{-- update title --}}
@section('title', __('keywords.members'))

{{-- content --}}
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                {{-- page navigation head --}}
                <x-page-navigation-header headerTitle="{{ __('keywords.members') }}"
                    btnCaption="{{ __('keywords.add_new_member') }}" btnColor="primary"
                    btnHref="{{ route('admin.members.create') }}">
                </x-page-navigation-header>

                <!-- simple table -->
                <div class="card shadow">
                    <div class="card-body">

                        {{-- success member alert --}}
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
                                @if (count($members) > 0)
                                    @foreach ($members as $member)
                                        <tr>
                                            <td>{{ $members->firstItem() + $loop->index }}</td>
                                            <td>{{ $member->name }}</td>
                                            <td>{{ $member->position }}</td>
                                            <td><img style="width:100px;height:100px;object-fit:cover;" src="{{ asset('assets-front/img/' . $member->image) }}"
                                                    alt="{{ $member->image }}"> </td>
                                            <td>

                                                {{-- edit button --}}
                                                <x-action-button type="edit"
                                                    href="{{ route('admin.members.edit', ['member' => $member]) }}">
                                                </x-action-button>

                                                {{-- show button --}}
                                                <x-action-button type="show"
                                                    href="{{ route('admin.members.show', ['member' => $member]) }}">
                                                </x-action-button>

                                                {{-- delete button --}}
                                                <x-action-button type="delete"
                                                    href="{{ route('admin.members.destroy', ['member' => $member]) }}"
                                                    scriptId="{{ $member->id }}">
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
                        {{ $members->links() }}
                        {{-- {{ $members->render('pagination::bootstrap-4') }} --}}
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->




    @endsection
