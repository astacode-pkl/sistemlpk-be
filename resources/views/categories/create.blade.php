@extends('layouts.app')

@section('content')
    <x-breadcrumb></x-breadcrumb>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="mb-0 text-white">Create Category</h4>
                </div>
                <form action="/admin/categories/" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row pt-3">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class=" mb-3">
                                        <label class="mb-2" for="floatingInput">Title</label>
                                        <input type="text" class="form-control  @error('title') is-invalid  @enderror"
                                            name="title" id="floatingInput" placeholder="Please enter title..." required>
                                        @error('title')
                                            <div id="validationServer04Feedback" class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <!--/span-->
                        </div>
                        <div class="form-actions text-end">
                            <div class="card-body border-top">
                                <button type="submit" class="btn btn-primary  px-4">
                                    <div class="d-flex align-items-center">
                                        <i class="ti ti-device-floppy me-1 fs-5"></i>
                                        Save
                                    </div>
                                </button>
                                <a href="/admin/categories/">
                                    <button type="button" class="btn btn-danger  px-4 ms-2 text-white">
                                        <div class="d-flex align-items-center">
                                            <i class="ti ti-circle-x me-1 fs-5"></i>
                                            Cancel
                                        </div>
                                    </button>
                                </a>
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
@endsection
