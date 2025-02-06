@extends('layouts.app') @section('content')
    <x-card-header>
        Category
    </x-card-header>
    <x-alert></x-alert>

    <div class="container-fluid   ">


        <div class="row">
            <div class="col-sm-12">

                <!-- Column -->
                <div class="card">
                    <div class="border-bottom title-part-padding d-flex justify-content-between">
                        <h4 class="card-title mb-0">Categories</h4>
                        <a href="/categories/create">

                            <button class="btn btn-primary">
                                <i class="ti ti-plus"></i>
                                Create</button>
                        </a>
                    </div>

                    <div class="card-body">

                        <table class="table table-striped table-bordered text-center" id="datatable">

                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th style="width:50%">Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($categories as $category)
                                    <tr id="25" class="gradeA">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $category->title }}</td>

                                        <td class="center">

                                            <a href="/categories/{{ Crypt::encryptString($category->id) }}/edit"><button
                                                    class="btn btn-primary px-4">
                                                    <i class="ti ti-pencil fs-5"></i>
                                                    Edit</button></a>

                                            <form action="/categories/{{ Crypt::encryptString($category->id) }}"
                                                method="POST" class="d-inline" id="form_delete">

                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger px-4" id="btn_delete"
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
        @push('script')
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="{{ asset('js/sweetalert.js') }}"></script>
            <!-- datatable -->
            <script src="{{ asset('template/back') }}/dist/libs/jquery/dist/jquery.min.js"></script>
            <script src="{{ asset('js/datatable.js') }}"></script>
            <script src="{{ asset('template/back') }}/dist/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        @endpush
    </div>
@endsection
