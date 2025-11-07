@extends('admin.master')

{{-- update title --}}
@section('title', __('keywords.services'))

{{-- content --}}
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                {{-- head container --}}
                <div class="card mb-3 shadow">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center rounded bg-white">
                            {{-- page title --}}
                            <h2 class="h5">{{ __('keywords.services') }}</h2>
                            {{-- add new button --}}
                            <div>
                                <a class="btn btn-primary rounded border" href="{{ route('admin.services.create') }}">
                                    {{ __('keywords.add_new_service') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- simple table -->
                <div class="card shadow">
                    <div class="card-body">

                        {{-- success message alert --}}
                        @if (session('success'))
                            <div class="alert alert-success rounded-0 alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        {{-- services table --}}
                        <table class="table-hover table">
                            <thead>
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
                                            <td><i class="fe fe-edit fa-2x"></i></td>
                                            <td>
                                                {{-- edit button --}}
                                                <a href="{{ route('admin.services.edit', ['service' => $service]) }}"
                                                    class="btn btn-success text-light">
                                                    <i class="fe fe-edit fa-2x"></i>
                                                </a>
                                                {{-- show button --}}
                                                <a href="{{ route('admin.services.show', ['service' => $service]) }}"
                                                    class="btn btn-primary text-light">
                                                    <i class="fe fe-eye fa-2x"></i>
                                                </a>
                                                {{-- delete button --}}
                                                <form
                                                    action="{{ route('admin.services.destroy', ['service' => $service]) }}"
                                                    method="post" id="deleteForm-{{ $service->id }}" class="d-inline">

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="button" class="btn btn-danger text-light"
                                                        onclick="confirmDelete({{ $service->id }})">
                                                        <i class="fe fe-trash-2 fa-2x"></i>
                                                        </a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="4">
                                            <div class="alert alert-danger">{{ __('keywords.no-record') }}</div>
                                        </td>
                                    </tr>
                                @endif

                            </tbody>
                        </table>

                        {{-- pagination links --}}
                        {{ $services->links() }}
                        {{-- {{ $services->render('pagination::bootstrap-4') }} --}}
                    </div>
                </div>
            </div> <!-- .row -->

            <script>
                function confirmDelete($id) {
                    if (confirm("Are you sure you want to delete record nmber " + $id)) {
                        document.getElementById('deleteForm-' + $id).submit();
                    }
                }
            </script>


        </div> <!-- .container-fluid -->




    @endsection
