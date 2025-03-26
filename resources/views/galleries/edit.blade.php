@extends('layouts.app') @section('content')
    <x-breadcrumb></x-breadcrumb>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="mb-0 text-white">Edit Gallery</h4>
                </div>
                <form action="/admin/galleries/{{ Crypt::encryptString($gallery->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="row pt-3">
                            <div class="col-md-6">

                                <div class="mb-3">
                                    <label class="control-label col-form-label" for="image">Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file"
                                                class="form-control  @error('image') is-invalid  @enderror" id="image"
                                                aria-describedby="inputGroupFileAddon01" name="image">
                                            @error('image')
                                                <div id="validationServer04Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <label class="control-label col-form-label" for="title">Title</label>
                                    <input type="text" id="title"
                                        class="form-control @error('title') is-invalid @enderror"
                                        value="{{ old('title', $gallery->title) }}" placeholder="Please enter title..." name="title">
                                    @error('title')
                                        <div id="validationServer04Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label class="control-label col-form-label @error('category_id') is-invalid @enderror"
                                        for="inlineFormCustomSelect">Select</label>
                                    <select class="form-select mr-sm-2" name="category_id" id="inlineFormCustomSelect">
                                        @foreach ($categories as $category)
                                            @if ($gallery->category_id == $category->id)
                                                <option value="{{ $category->id }}" selected>{{ $category->title }}</option>
                                            @else
                                                <option value="{{ $category->id }}">{{ old('category_id', $category->title) }}</option>
                                            @endif
                                        @endforeach

                                    </select>
                                    @error('category_id')
                                        <div id="validationServer04Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                
                            </div>

                            <div class="col-6 d-flex align-items-center justify-content-center " id="preview">
                                <img src="{{ asset('storage/' . $gallery->image) }}"
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
                                <a href="/admin/galleries/">
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

        // Textarea height adjustment
        document.addEventListener('DOMContentLoaded', function() {
            const textarea = document.querySelectorAll('#longtext');
            textarea.forEach(textarea => {
                // Set initial height based on content
                textarea.style.height = 'auto';
                textarea.style.height = textarea.scrollHeight + 'px';

                // Adjust height on input
                textarea.addEventListener('input', function() {
                    this.style.height = 'auto';
                    this.style.height = this.scrollHeight + 'px';
                });
            });
        });

        //check form is changed or n
        $(document).ready(function() {
            $('form').dirtyForms();
        });
    </script>
    @endpush
@endsection
