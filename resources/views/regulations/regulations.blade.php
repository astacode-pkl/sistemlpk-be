@extends('layouts.app') @section('content')
    <x-card-header>
        Regulations
    </x-card-header>
    @if (session('success'))
        <div class="alert alert-info alert-dismissible fade show mb-3" role="alert">
            <div class="text-primary">{{ session('success') }}</div>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


        <div class="row">
            <div class="col-sm-12">
                <!-- Column -->
                <div class="card">
                    <div class="border-bottom title-part-padding d-flex justify-content-between">
                        <h4 class="card-title mb-0">Regulations</h4>
                        <a href="/regulations/create">

                            <button class="btn btn-primary">
                                <i class="ti ti-plus"></i>
                                Create</button>
                        </a>
                    </div>

                    <div class="card-body overflow-x-auto">

                        <table class="table table-striped table-bordered text-center" id="datatable">
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
                                @foreach ($regulations as $regulation)
                                    <tr id="25" class="gradeA">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{!! $regulation->icon !!}</td>
                                        <td>{{ $regulation->title }}</td>
                                        <td>{{ $regulation->programs->title }}</td>

                                        <td class="center ">
                                            <a href="/regulations/{{ Crypt::encryptString($regulation->id) }}/edit"><button
                                                    class="btn btn-primary px-4 ">
                                                    <i class="ti ti-pencil fs-5"></i>
                                                    Edit</button></a>
                                            <form action="/regulations/{{ Crypt::encryptString($regulation->id) }}"
                                                method="POST" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger px-4 py-2"
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
          <script src="{{asset('js/sweetalert.js')}}"></script>
            <!-- datatable -->
            <script src="{{ asset('template/back') }}/dist/libs/jquery/dist/jquery.min.js"></script>
          <script src="{{asset('js/datatable.js')}}"></script>
         <script src="{{ asset('template/back') }}/dist/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    @endpush
@endsection
