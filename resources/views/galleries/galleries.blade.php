@extends('layouts.app') @section('content')
<x-card-header>
    Galleries
</x-card-header>
<x-alert />
<section class="datatables">
    <div class="card">
        <div class="card-body">
            <div class="mb-2">
                <div class="d-flex align-items-end flex-column mb-2">
                    <a href="/admin/galleries/create">
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
                                <th>Image</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($galleries as $gallery)
                            <tr id="{{ $loop->iteration }}" class="gradeC">
                                <td>{{ $loop->iteration }}</td>
                                <td><a data-bs-toggle="modal" data-bs-target="#imageModal{{ $loop->iteration }}"><img
                                            src="{{ asset('images/galleries/' . $gallery->image) }}" alt="img-gallery"
                                            style="max-width:100px;" class="w-100"></a></td>
                                <!-- Modal -->
                                <div class="modal fade" id="imageModal{{ $loop->iteration }}" tabindex="-1"
                                    aria-labelledby="imageModalLabel{{ $loop->iteration }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="imageModalLabel{{ $loop->iteration }}">
                                                    {{ $gallery->title }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="{{ asset('images/galleries/' . $gallery->image) }}"
                                                    alt="img-gallery" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <td>{{ $gallery->title }}</td>
                                <td>{{ $gallery->categories->title }}</td>
                                <td>
                                    <a href="/admin/galleries/{{ Crypt::encryptString($gallery->id) }}/edit"><button
                                            class="btn btn-primary px-4">
                                            <i class="ti ti-pencil fs-5"></i>
                                            Edit</button></a>
                                    <form action="/admin/galleries/{{ Crypt::encryptString($gallery->id) }}"
                                        method="POST" class="d-inline ">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger px-4 " id="delete"
                                            onclick="deleteItem(event)">
                                            <i class="ti ti-trash fs-5"></i>
                                            Delete</button>
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
@push('style')
<link rel="stylesheet"
    href="{{ asset('template/back') }}/dist/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
@endpush
@endsection