@extends('layouts.app') @section('content')
    <x-card-header>
        Programs
    </x-card-header>
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="mb-0 text-white">Edit Program</h4>
                </div>
                <form action="/programs/{{ Crypt::encryptString($program->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="card-body">
                        <div class="row pt-3">
                            <div class="col-md-6">
                                <div class="mb-3 d-flex">
                                    <div>
                                        <label class="control-label mb-2" for="image">Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="form-control" id="fileInput"
                                                    aria-describedby="inputGroupFileAddon01" value="" name="image" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="control-label mb-2" for="title">Title</label>
                                    <input type="text" id="title"
                                        class="form-control @error('title') is-invalid   @enderror"
                                        value="{{ $program->title }}" name="title" placeholder="Please enter title..." required>
                                    @error('title')
                                        <div id="validationServer04Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="control-label mb-2" for="description">Description</label>
                                    <textarea class="form-control @error('description') is-invalid   @enderror"
                                     name="description" placeholder="Please enter description..." required>{{ $program->description }}</textarea>
                                    @error('description')
                                        <div id="validationServer04Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!--/span-->

                            <div class="position-relative col-md-4 mb-2" id="display">
                                <img src="{{ asset('images/programs/' . $program->image) }}"
                                    class="card-img-top rounded-1 d-block" id="preview" alt="{{ $program->image }}">
                            </div>
                            <!-- end preview image -->

                        </div>
                        <div class="form-actions text-end">
                            <div class="card-body border-top">
                                <button type="submit" class="btn btn-primary py-2 px-4">
                                    <div class="d-flex align-items-center">
                                        <i class="ti ti-circle-check me-1 fs-5"></i>
                                         Update
                                    </div>
                                </button>
                                <a href="/programs">
                                    <button type="button" class=" btn btn-danger px-4 py-2 text-white">
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
                                                                                                                    end Program
                                                                                                                ---------------- -->
        </div>
    </div>
    @push('script')

<script src="{{asset('js/imagePreview.js')}}"></script>
@endpush
@endsection
