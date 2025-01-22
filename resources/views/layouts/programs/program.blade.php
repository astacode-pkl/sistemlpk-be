@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <!-- ---------------------
                                                                                                        start Person Info
                                                                                                    ---------------- -->
        <div class="card">
            <div class="card-header bg-primary">
                <h4 class="mb-0 text-white">Program</h4>
            </div>
            <div class="card-body d-flex justify-content-end">
                <a href="/program/create" class="btn btn-success mb-3">Add Program</a>
            </div>
            @foreach ($program as $data)
              <div class="card-body">
                  <div class="row pt-3">
                      <div class="col-md-12">
                          <div class="card mb-3">
                              <div class="row g-0">
                                  <div class="col-md-4">
                                      <img src="{{ asset('images/programs_images/'.$data->images) }}" 
                                           class="img-fluid rounded-2 m-3" 
                                           alt="{{$data->images}}">
                                  </div>
                                  <div class="col-md-8">
                                      <div class="card-body">
                                          <h5 class="card-title">{{$data->title}}</h5>
                                          <p class="card-text">{{$data->description}}</p>
                                      </div>
                                  </div>
                                  <div class="d-flex justify-content-end">
                                    <a href="/program/{{ $data->id }}/edit"><button class="btn btn-primary px-3 py-2 me-2">Edit</button></a>
                                    <form action="/program/{{ $data->id}}" method="POST" class="d-inline">
                                      @csrf
                                      @method('delete')
                                  <button type="submit" class="btn btn-danger px-3 py-2 me-2" onclick="return confirm('are you sure')">Delete</button>
                                  </form>
          
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              @endforeach
        </div>
@endsection