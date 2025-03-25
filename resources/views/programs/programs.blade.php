@extends('layouts.app')
@section('content')
<x-breadcrumb />
<x-alert />

<section class="datatables">
    <div class="card">
        <div class="card-body">
            <div class="mb-2">
                <div class="d-flex align-items-end flex-column mb-2">
                    <a href="/admin/programs/create">
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
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($programs as $programs)
                            <tr id="{{ $loop->iteration }}" class="gradeC">
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <a href="#" data-bs-toggle="modal"
                                        data-bs-target="#imageModal{{ $loop->iteration }}">
                                        <img src="{{ asset('images/programs/' . $programs->image) }}" alt="img-gallery"
                                            width="100">
                                    </a>
                                    <!-- Modal -->
                                    <div class="modal fade" id="imageModal{{ $loop->iteration }}" tabindex="-1"
                                        aria-labelledby="imageModalLabel{{ $loop->iteration }}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="imageModalLabel{{ $loop->iteration }}">
                                                        {{ $programs->title }}</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="{{ asset('images/programs/' . $programs->image) }}"
                                                        alt="img-gallery" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $programs->title }}</td>
                                <td class="center" style="max-width: 250px;">
                                    <span id="short-description-{{ $loop->iteration }}">
                                        {{ Str::words($programs->description, 10, '') }}
                                        @if (strlen($programs->description) > 50)
                                        <a class="fst-italic text-primary" href="javascript:void(0);"
                                            onclick="document.getElementById('short-description-{{ $loop->iteration }}').style.display='none'; document.getElementById('full-description-{{ $loop->iteration }}').style.display='block';">...expand</a>
                                        @endif
                                    </span>
                                    <span id="full-description-{{ $loop->iteration }}" style="display:none;">
                                        {{ $programs->description }}
                                        <a class="fst-italic text-primary" href="javascript:void(0);"
                                            onclick="document.getElementById('full-description-{{ $loop->iteration }}').style.display='none'; document.getElementById('short-description-{{ $loop->iteration }}').style.display='block';">collapse</a>
                                    </span>
                                </td>
                                <td class="center">
                                    <a href="/admin/programs/{{ Crypt::encryptString($programs->id) }}/edit"><button
                                            class="btn btn-primary px-4 ">
                                            <i class="ti ti-pencil fs-5"></i>
                                            Edit</button></a>

                                    <form action="/admin/programs/{{ Crypt::encryptString($programs->id) }}"
                                        method="POST" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger  px-4 " onclick="deleteItem(event)">
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
@endsection