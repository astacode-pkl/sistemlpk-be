@extends('errors.layout')
@section('content')
    <img src="{{ asset('images/errors/404-error-idea.gif') }}" alt="" class="img-fluid" width="100%">
    <h1 class="fw-semibold mb-7 fs-9">Opps!!! There is something wrong</h1>
    <h4 class="fw-semibold mb-7">{{ $message }}</h4>
    <button onclick="history.back()" class="btn btn-primary" role="button">Back</button>
@endsection
