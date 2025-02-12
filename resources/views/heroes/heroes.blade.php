@extends('layouts.app')
@section('content')
<x-card-header></x-card-header>
    <div
        class="card bg-light-info shadow-none position-relative overflow-hidden"
    >
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Draggable</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted" href="./index.html"
                                    >Dashboard</a
                                >
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                Draggable
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-3">
                    <div class="text-center mb-n5">
                        <img
                            src="../../dist/images/breadcrumb/ChatBc.png"
                            alt=""
                            class="img-fluid mb-n4"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h4 class="mb-3 fs-5">Basic Draggable options</h4>
            <div class="row draggable-cards" id="draggable-area">
                <div class="col-md-6 col-sm-12">
                    <div class="card card-hover">
                        <div class="card-header bg-info">
                            <h4 class="mb-0 text-white fs-5">Card Title</h4>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Special title treatment</h3>
                            <p class="card-text">
                                With supporting text below as a natural lead-in
                                to additional content.
                            </p>
                            <a href="javascript:void(0)" class="btn btn-inverse"
                                >Go somewhere</a
                            >
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="card card-hover">
                        <div class="card-header bg-danger">
                            <h4 class="mb-0 text-white fs-5">Card Title</h4>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Special title treatment</h3>
                            <p class="card-text">
                                With supporting text below as a natural lead-in
                                to additional content.
                            </p>
                            <a href="javascript:void(0)" class="btn btn-inverse"
                                >Go somewhere</a
                            >
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="card card-hover">
                        <div class="card-header bg-success">
                            <h4 class="mb-0 text-white fs-5">Card Title</h4>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Special title treatment</h3>
                            <p class="card-text">
                                With supporting text below as a natural lead-in
                                to additional content.
                            </p>
                            <a href="javascript:void(0)" class="btn btn-inverse"
                                >Go somewhere</a
                            >
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="card card-hover">
                        <div class="card-header bg-warning">
                            <h4 class="mb-0 text-white fs-5">Card Title</h4>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Special title treatment</h3>
                            <p class="card-text">
                                With supporting text below as a natural lead-in
                                to additional content.
                            </p>
                            <a href="javascript:void(0)" class="btn btn-inverse"
                                >Go somewhere</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <h4 class="mb-3 mt-5 fs-5">Move card and apply color</h4>
            <div class="row draggable-cards" id="card-colors">
                <div class="col-md-6 col-sm-12">
                    <div class="card card-hover">
                        <div class="card-header">
                            <h4 class="mb-0 text-dark fs-5">Card Title</h4>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Special title treatment</h3>
                            <p class="card-text">
                                With supporting text below as a natural lead-in
                                to additional content.
                            </p>
                            <a
                                href="javascript:void(0)"
                                class="btn btn-light-primary text-primary"
                                >Go somewhere</a
                            >
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="card card-hover">
                        <div class="card-header">
                            <h4 class="mb-0 text-dark fs-5">Card Title</h4>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Special title treatment</h3>
                            <p class="card-text">
                                With supporting text below as a natural lead-in
                                to additional content.
                            </p>
                            <a
                                href="javascript:void(0)"
                                class="btn btn-light-primary text-primary"
                                >Go somewhere</a
                            >
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="card card-hover">
                        <div class="card-header">
                            <h4 class="mb-0 text-dark fs-5">Card Title</h4>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Special title treatment</h3>
                            <p class="card-text">
                                With supporting text below as a natural lead-in
                                to additional content.
                            </p>
                            <a
                                href="javascript:void(0)"
                                class="btn btn-light-primary text-primary"
                                >Go somewhere</a
                            >
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="card card-hover">
                        <div class="card-header">
                            <h4 class="mb-0 text-dark fs-5">Card Title</h4>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Special title treatment</h3>
                            <p class="card-text">
                                With supporting text below as a natural lead-in
                                to additional content.
                            </p>
                            <a
                                href="javascript:void(0)"
                                class="btn btn-light-primary text-primary"
                                >Go somewhere</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection