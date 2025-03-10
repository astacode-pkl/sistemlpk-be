@extends('layouts.app') @section('content')
    <x-card-header>
        Hero
    </x-card-header>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="mb-0 text-white">Edit Hero</h4>
                </div>
                <form action="{{ route('update.heroes', $hero->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="row pt-3">
                            <div class="col-md-6">
                                <div class="mb-3">

                                    <label class="control-label mb-2" for="image">Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file"
                                                class="form-control  @error('image') is-invalid  @enderror" id="fileInput"
                                                aria-describedby="inputGroupFileAddon01" name="image">
                                            @error('image')
                                                <div id="validationServer04Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 d-none">
                                    <label class="control-label mb-2" for="position">Position</label>
                                    <input type="number" id="position"
                                        class="form-control @error('position') is-invalid @enderror"
                                        value="{{ $hero->position }}" placeholder="Please enter position..."
                                        name="position">
                                    @error('position')
                                        <div id="validationServer04Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                            </div>
                            <!--/span-->

                            <div class="position-relative col-md-4 mb-2" id="display">
                                <img src="{{ asset('images/heroes/' . $hero->image) }}"
                                    class="card-img-top rounded-1 d-block" id="preview" alt="...">
                            </div>
                        </div>
                        <div class="form-actions text-end">
                            <div class="card-body border-top">
                                <button type="submit" class="btn btn-primary  px-4">
                                    <div class="d-flex align-items-center">
                                        <i class="ti ti-circle-check me-1 fs-5"></i>
                                        Update
                                    </div>
                                </button>
                                <a href="/admin/heroes/">
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
    @push('script')
        <script src="{{ asset('js/imagePreview.js') }}"></script>
    @endpush
@endsection
