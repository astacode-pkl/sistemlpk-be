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
                <form action="{{ route('store.heroes') }}" method="POST" enctype="multipart/form-data" id="form">
                    @csrf
                    <div class="card-body">
                        <div class="row pt-3 ">
                            <div class="col-md-6">
                                <div class="">
                                    <label class="control-label col-form-label" for="image">Gambar</label>
                                    <div class="">
                                        <div class="custom-file">
                                            <input type="file"
                                                class="form-control @error('image') is-invalid @enderror" name="image"
                                                id="image" aria-describedby="inputGroupFileAddon01">
                                            @error('image')
                                                <div id="validationServer04Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 d-flex align-items-center justify-content-center border-dashed border-dark-subtle"
                                id="preview">
                                <div class="">Image preview here</div>
                            </div>
                        </div>

                        <div class="mb-3 d-none">
                            <label class="control-label col-form-label" for="position">position</label>
                            <input type="number" id="position"
                                class="form-control @error('position') is-invalid @enderror"
                                value="{{ old('position') }}" name="position" placeholder="Please enter Position..."
                                required>
                            @error('position')
                                <div id="validationServer04Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
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
                            <a href="/admin/heroes/">
                                <button type="button" class="btn btn-danger  px-4 ms-2 text-white">
                                    <div class="">
                                        <i class="ti ti-circle-x me-1 fs-5"></i>
                                        Cancel
                                    </div>
                                </button>
                            </a>
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
        <script src="//cdn.jsdelivr.net/jquery.dirtyforms/2.0.0/jquery.dirtyforms.min.js" type="text/javascript"></script>
        <script>
            document.getElementById('image').addEventListener('change', function(event) {
                let preview = document.getElementById('preview');
                preview.classList.remove('border-dashed');
                let file = event.target.files[0];

                if (file) {
                    let reader = new FileReader();
                    reader.onload = function(e) {
                        preview.innerHTML = `<img src="${e.target.result}" class="img-fluid rounded" width="250">`;
                    };
                    reader.readAsDataURL(file);
                } else {
                    preview.innerHTML = '<div class="">Image preview here</div>';
                }
            });

            $(document).ready(function() {
                $('form').dirtyForms();
            });
        </script>
    @endpush
@endsection
