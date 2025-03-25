@extends('layouts.app')
@section('content')
<x-breadcrumb></x-breadcrumb>
<x-alert><x-alert />
<section class="datatables">
    <div class="card">
        <div class="card-body">
            <div class="mb-2">
                <div class="d-flex align-items-end flex-column mb-2">
                    <a href="/admin/benefits/create">
                        <button class="btn btn-primary">
                            <i class="ti ti-plus"></i>
                            Create
                        </button>
                    </a>
                </div>
                <div class="table-responsive m-t-40">
                    <table id="datatable" class="table border display table-bordered overflow-x-auto">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Icon</th>
                                <th>Title</th>
                                <th>Program</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($benefits as $benefit)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td style="width: 30px;">{!! $benefit->icon !!}</td>
                                <td>{{ $benefit->title }}</td>
                                <td>{{ $benefit->programs->title }}</td>
                                <td class="no-wrap">
                                    <a href="/admin/benefits/{{ Crypt::encryptString($benefit->id) }}/edit">
                                        <button class="btn btn-primary px-4">
                                            <i class="ti ti-pencil fs-5"></i>
                                            Edit
                                        </button>
                                    </a>
                                    <form action="/admin/benefits/{{ Crypt::encryptString($benefit->id) }}"
                                        method="POST" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger px-4 py-2"
                                            onclick="deleteItem(event)">
                                            <i class="ti ti-trash fs-5"></i>
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@push('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('js/sweetalert.js') }}"></script>
<!-- datatable -->
<script src="{{ asset('template/back') }}/dist/libs/jquery/dist/jquery.min.js"></script>
<script src="{{ asset('js/datatable.js') }}"></script>
<script src="{{ asset('template/back') }}/dist/libs/datatables.net/js/jquery.dataTables.min.js"></script>
@endpush

@endsection