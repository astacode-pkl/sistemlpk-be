@extends('layouts.app') @section('content')
    <x-card-header>
        Benefits
    </x-card-header>
    <x-alert></x-alert>
    <div class="container-fluid">


        <div class="row">
            <div class="col-sm-12">
                <!-- Column -->
                <div class="card">
                    <div class="border-bottom title-part-padding d-flex justify-content-between">
                        <h4 class="card-title mb-0">Benefits</h4>
                        <a href="/benefits/create">

                            <button class="btn btn-primary">Create</button>
                        </a>
                    </div>

                    <div class="card-body">

                        <table class="table table-striped table-bordered text-center" id="datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>icon</th>
                                    <th>title</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($benefits as $benefit)
                                    <tr id="25" class="gradeA">
                                        <td>{{ $loop->iteration }}</td>
                                        <td style="width: 30px;">{!! $benefit->icon !!}</td>
                                        <td>{{ $benefit->title }}</td>

                                        <td class="center ">
                                            <a href="/benefits/{{ Crypt::encryptString($benefit->id) }}/edit"><button
                                                    class="btn btn-primary px-4 ">Edit</button></a>

                                            <form action="/benefits/{{ Crypt::encryptString($benefit->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger px-4 py-2"
                                                    onclick="deleteItem(event)">Delete</button>
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
