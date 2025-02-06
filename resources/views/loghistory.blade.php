@extends('layouts.app') @section('content')
    <x-card-header>
        Log Histories
    </x-card-header>
    <x-alert></x-alert>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 ">
                <div class="card">
                    <div class="border-bottom title-part-padding d-flex justify-content-between align-items-center">
                        <h4 class="card-title mb-0">Log Histories</h4>
                    </div>
                    <div class="card-body ">
                        <table class="table  table-striped table-bordered text-center" id="datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>User Id</th>
                                    <th>log Action</th>
                                    <th>Description</th>
                                    <th>Date Create</th>
                                    <th>Date Update</th>
                                  
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
                                        <td>{{ $loghistory->updated_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('script')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="{{ asset('js/sweetalert.js') }}"></script>
          <!-- datatable -->
          <script src="{{ asset('template/back') }}/dist/libs/jquery/dist/jquery.min.js"></script>
          <script src="{{asset('js/datatable.js')}}"></script>
         <script src="{{ asset('template/back') }}/dist/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    @endpush
@endsection
