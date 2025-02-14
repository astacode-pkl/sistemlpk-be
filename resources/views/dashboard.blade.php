@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-6 col-md-6 mb-4">
            <a href="/cmslpktsukuba/categories">
                <div class="card border-bottom border-danger">
                    <div class="card-body">
                        <div class="d-flex no-block align-items-center">
                            <div>
                                <h2 class="fs-7">{{ $categories }}</h2>
                                <h6 class="fw-medium text-danger mb-0">Categories</h6>
                            </div>
                            <div class="ms-auto">
                                <span class="text-danger display-6"><i class="ti ti-list-details"></i></span>
                            </div>
                        </div>
                        <h7 class="text-muted">Last created: {{ $categoriesLastcreated }}</h7>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-6 col-md-6 mb-4">
            <a href="/cmslpktsukuba/galleries">
                <div class="card border-bottom border-primary">
                    <div class="card-body">
                        <div class="d-flex no-block align-items-center">
                            <div>
                                <h2 class="fs-7">{{ $galleries }}</h2>
                                <h6 class="fw-medium text-primary mb-0">Galeries</h6>
                            </div>
                            <div class="ms-auto">
                                <span class="text-primary display-6"> <i class="ti ti-photo"></i></span>
                            </div>
                        </div>
                        <h7 class="text-muted">Last created: {{ $galleriesLastcreated }}</h7>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-6 col-md-6 mb-4">
            <a href="/cmslpktsukuba/regulations">
                <div class="card border-bottom border-success">
                    <div class="card-body">
                        <div class="d-flex no-block align-items-center">
                            <div>
                                <h2 class="fs-7">{{ $regulations }}</h2>
                                <h6 class="fw-medium text-success mb-0">Regulations</h6>
                            </div>
                            <div class="ms-auto">
                                <span class="text-success display-6"><i class="ti ti-book"></i></span>
                            </div>
                        </div>
                        <h7 class="text-muted">Last created: {{ $regulationsLastcreated }}</h7>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-6 col-md-6 mb-4">
            <a href="/cmslpktsukuba/programs">
                <div class="card border-bottom border-danger">
                    <div class="card-body">
                        <div class="d-flex no-block align-items-center">
                            <div>
                                <h2 class="fs-7">{{ $programs }}</h2>
                                <h6 class="fw-medium text-danger mb-0">Programs</h6>
                            </div>
                            <div class="ms-auto">
                                <span class="text-danger display-6"><i class="ti ti-layout"></i></span>
                            </div>
                        </div>
                        <h7 class="text-muted">Last created: {{ $programsLastcreated }}</h7>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-6 col-md-6 mb-4">
            <a href="/cmslpktsukuba/benefits">
                <div class="card border-bottom border-info">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h2 class="fs-7">{{ $benefits }}</h2>
                                <h6 class="fw-medium text-info mb-0">Benefits</h6>
                            </div>
                            <div class="ms-auto">
                                <span class="text-info display-6"><i class="ti ti-chart-pie"></i></span>
                            </div>
                        </div>
                        <h7 class="text-muted">Last created: {{ $benefitsLastcreated }}</h7>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-6 col-md-6 mb-4">
            <a href="/cmslpktsukuba/inbox">
                <div class="card border-bottom border-success">
                    <div class="card-body">
                        <div class="d-flex no-block align-items-center">
                            <div>
                                <h2 class="fs-7">{{ $inbox }}</h2>
                                <h6 class="fw-medium text-success mb-0">Inbox</h6>
                            </div>
                            <div class="ms-auto">
                                <span class="text-success display-6"><i class="ti ti-inbox"></i></span>
                            </div>
                        </div>
                        <h7 class="text-muted">Last message: {{ $inboxLastcreated }}</h7>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-6 col-md-6 mb-4">
            <a href="/heroes">
                <div class="card border-bottom border-success">
                    <div class="card-body">
                        <div class="d-flex no-block align-items-center">
                            <div>
                                <h2 class="fs-7">{{ $heroes }}</h2>
                                <h6 class="fw-medium text-success mb-0">Heroes</h6>
                            </div>
                            <div class="ms-auto">
                                <span class="text-success display-6"><i class="ti ti-slideshow"></i></span>
                            </div>
                        </div>
                        <h7 class="text-muted">Last message: {{ $heroLastcreated }}</h7>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
