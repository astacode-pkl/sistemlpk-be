@extends('layouts.app') @section('content')
    <x-card-header>
        Log Histories
    </x-card-header>
    <x-alert></x-alert>
    <div class="row">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="mb-0 text-white">Log Histories</h4>
                </div>
                <div class="card-body ">
                    <table class="table  table-striped table-bordered text-center" id="datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>User Id</th>
                                <th>log Action</th>
                                <th>Description</th>
                                <th>Time</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($loghistories as $loghistory)
                                <tr id="{{ $loop->iteration }}" class="gradeC">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $loghistory->user_id }}</td>
                                    <td>{{ $loghistory->action }}</td>
                                    <td>{{ $loghistory->description }}</td>
                                    <td>{{ $loghistory->created_at }}</td>
                                    <td>
                                        <form action="/loghistories/{{ Crypt::encryptString($loghistory->id) }}"
                                            method="POST" class="d-inline" id="form_delete">

                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger" id="btn_delete"
                                                onclick="deleteItem(event)">
                                                <i class="ti ti-trash fs-5"></i></button>
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
@endsection
