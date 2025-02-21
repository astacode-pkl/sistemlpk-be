@extends('layouts.app') @section('content')
<x-card-header>
    Heroes
</x-card-header>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="mb-0 text-white">Create Hero</h4>
                </div>
                <form action="{{ route('store.heroes') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row pt-3 ">
                            <div class="col-md-6">
                                <div class="mb-3 d-flex">
                                    <div>
                                        <label class="control-label mb-2" for="image">Image</label>
                                        <div class="input-group">
                                            <div class="custom-file ">
                                                <input type="file"
                                                    class="form-control  @error('title') is-invalid @enderror"
                                                    id="fileInput" aria-describedby="inputGroupFileAddon01" name="image"
                                                    required>
                                                @error('image')
                                                    <div id="validationServer04Feedback" class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                    </div>

                                </div>

                                <div class="mb-3 d-none">
                                    <label class="control-label mb-2" for="position">position</label>
                                    <input type="number" id="position"
                                        class="form-control @error('position') is-invalid @enderror" value="{{ $newPosition }}"
                                        name="position" placeholder="Please enter Position..." required>
                                    @error('position')
                                        <div id="validationServer04Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!--/span-->

                            <div class="position-relative col-md-4 d-none " id="display">
                                <img src="" class="card-img-top  rounded-1 " id="preview" alt="">
                            </div>
                        </div>
                        <div class="form-actions text-end">
                            <div class="card-body border-top">
                                <button type="submit" class="btn btn-primary  px-4">
                                    <div class="d-flex align-items-center">
                                        <i class="ti ti-device-floppy me-1 fs-5"></i>
                                        Save
                                    </div>
                                </button>
                                <a href="/cmslpktsukuba/heroes/">
                                    <button type="button" class="btn btn-danger  px-4 ms-2 text-white">
                                        <div class="">
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
    @push('script')

<script src="{{asset('js/imagePreview.js')}}"></script>
@endpush
@endsection
