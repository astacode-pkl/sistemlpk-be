@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <!-- ---------------------
                                                                                                            start Person Info
                                                                                                        ---------------- -->
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="mb-0 text-white">Add Photo</h4>
                </div>
                <form action="#">
                    <div class="card-body">
                        <div class="row pt-3">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="control-label" for="image">Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="form-control" id="image"
                                                aria-describedby="inputGroupFileAddon01">
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="control-label" for="title">Title</label>
                                    <input type="text" id="title" class="form-control" value="">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="mr-sm-2" for="inlineFormCustomSelect">Select</label>
                                    <select class="form-select mr-sm-2" id="inlineFormCustomSelect">
                                        <option selected>Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <div class="form-actions text-end">
                            <div class="card-body border-top">
                                <button type="submit" class="btn btn-primary rounded-pill px-4">
                                    <div class="d-flex align-items-center">
                                        <i class="ti ti-plus me-1 fs-4"></i>
                                        Add
                                    </div>
                                </button>
                                <button type="button" class="btn btn-danger rounded-pill px-4 ms-2 text-white">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- ---------------------
                                                                                                            end Person Info
                                                                                                        ---------------- -->
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="mb-0 text-white">Galleries</h4>
                </div>
                <div class="card-body">
                    <div class="row pt-3">
                        <div class="col-md-6 col-lg-3">
                            <div class="card rounded-2 overflow-hidden">
                                <div class="position-relative">
                                    <img src="../../dist/images/products/s4.jpg"
                                            class="card-img-top rounded-0" alt="...">
                                </div>
                                <small class="mt-3 ms-3">Category</small>
                                <div class="card-body p-4">
                                    <h5 class="fw-semibold fs-4 mb-2 text-center">Title</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="card rounded-2 overflow-hidden">
                                <div class="position-relative">
                                    <img src="../../dist/images/products/s4.jpg"
                                            class="card-img-top rounded-0" alt="...">
                                </div>
                                <small class="mt-3 ms-3">Category</small>
                                <div class="card-body p-4">
                                    <h5 class="fw-semibold fs-4 mb-2 text-center">Title</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="card rounded-2 overflow-hidden">
                                <div class="position-relative">
                                    <img src="../../dist/images/products/s4.jpg"
                                            class="card-img-top rounded-0" alt="...">
                                </div>
                                <small class="mt-3 ms-3">Category</small>
                                <div class="card-body p-4">
                                    <h5 class="fw-semibold fs-4 mb-2 text-center">Title</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="card rounded-2 overflow-hidden">
                                <div class="position-relative">
                                    <img src="../../dist/images/products/s4.jpg"
                                            class="card-img-top rounded-0" alt="...">
                                </div>
                                <small class="mt-3 ms-3">Category</small>
                                <div class="card-body p-4">
                                    <h5 class="fw-semibold fs-4 mb-2 text-center">Title</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="card rounded-2 overflow-hidden">
                                <div class="position-relative">
                                    <img src="../../dist/images/products/s4.jpg"
                                            class="card-img-top rounded-0" alt="...">
                                </div>
                                <small class="mt-3 ms-3">Category</small>
                                <div class="card-body p-4">
                                    <h5 class="fw-semibold fs-4 mb-2 text-center">Title</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="card rounded-2 overflow-hidden">
                                <div class="position-relative">
                                    <img src="../../dist/images/products/s4.jpg"
                                            class="card-img-top rounded-0" alt="...">
                                </div>
                                <small class="mt-3 ms-3">Category</small>
                                <div class="card-body p-4">
                                    <h5 class="fw-semibold fs-4 mb-2 text-center">Title</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="card rounded-2 overflow-hidden">
                                <div class="position-relative">
                                    <img src="../../dist/images/products/s4.jpg"
                                            class="card-img-top rounded-0" alt="...">
                                </div>
                                <small class="mt-3 ms-3">Category</small>
                                <div class="card-body p-4">
                                    <h5 class="fw-semibold fs-4 mb-2 text-center">Title</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ---------------------
                                                                                                            end Person Info
                                                                                                        ---------------- -->
        </div>
    </div>
@endsection
