@extends('layouts.app') @section('content')
    <x-breadcrumb></x-breadcrumb>
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="mb-0 text-white">Edit Program</h4>
                </div>
                <form action="/admin/programs/{{ Crypt::encryptString($program->id) }}" method="POST" enctype="multipart/form-data" id="form">
                    @csrf
                    @method('patch')
                    <div class="card-body">
                        <div class="row pt-3">
                            <div class="col-md-6">
                                <div class="mb-3 d-flex">
                                    <div>
                                        <label class="control-label col-form-label" for="image">Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="form-control" id="fileInput"
                                                    aria-describedby="inputGroupFileAddon01" value="{{ old('image', $program->image) }}" name="image">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="control-label col-form-label" for="title">Title</label>
                                    <input type="text" id="title"
                                        class="form-control @error('title') is-invalid @enderror"
                                        value="{{ old('title', $program->title) }}" name="title" placeholder="Please enter title..."
                                        required>
                                    @error('title')
                                        <div id="validationServer04Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="control-label col-form-label" for="description">Description</label>
                                    <textarea class="form-control @error('description') is-invalid   @enderror" id="floatingTextarea" name="description"
                                        placeholder="Please enter description..." required>{{ old('description', $program->description) }}</textarea>
                                    @error('description')
                                        <div id="validationServer04Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                
                            </div>

                            <div class="col-6 d-flex align-items-center justify-content-center " id="preview">
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
                                <a href="/admin/programs/">
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
        <script src="{{ asset('js/imagePreview.js') }}"></script>
        <script src="//cdn.jsdelivr.net/jquery.dirtyforms/2.0.0/jquery.dirtyforms.min.js" type="text/javascript"></script>
        <script >
        const textarea = document.getElementById('floatingTextarea')
          textarea.addEventListener('input' , function(){
              textarea.style.height = '';
              textarea.style.height = textarea.scrollHeight + 'px'
          });

          document.getElementById('image').addEventListener('change', function(event) {
                let preview = document.getElementById('priview');
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
            
          //check form is changed or n
          $(document).ready(function() {
                $('form').dirtyForms();
            });
        </script>
    @endpush
@endsection
