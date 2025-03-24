@extends('layouts.app') @section('content')
<x-card-header>
    Programs
</x-card-header>
<div class="row">

    <div class="col-lg-12">
        <!-- ---------------------
                                                                                                                                start Program
                                                                                                                            ---------------- -->
        <div class="card">
            <div class="card-header bg-primary">
                <h4 class="mb-0 text-white">Create Program</h4>
            </div>
            <form action="/admin/programs/" method="POST" enctype="multipart/form-data" id="form">
                @csrf
                <div class="card-body">
                    <div class="row pt-3">
                        <div class="col-md-6">

                            <div class="mb-3">
                                <label class="control-label col-form-label" for="image">Image</label>
                                <div class="input-group">
                                    <div class="custom-file ">
                                        <input type="file"
                                            class="form-control  @error('image') is-invalid @enderror"
                                            id="image" aria-describedby="inputGroupFileAddon01" name="image"
                                            required>
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
                                <input type="text" id="title" class="form-control @error('title') is-invalid @enderror "
                                    value="{{ old('title') }}" name="title" placeholder="Please enter title..."
                                    required>
                                @error('title')
                                <div id="validationServer04Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="control-label col-form-label" for="description">Description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror"
                                    id="floatingTextarea" name="description" placeholder="Please enter description..."
                                    required>{{ old('description') }}</textarea>
                                @error('description')
                                <div id="validationServer04Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            
                        </div>

                        <div class="col-6 d-flex align-items-center justify-content-center border-dashed border-dark-subtle"
                            id="priview">
                            <div class="">Image preview here</div>
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
                            <a href="/admin/programs/">
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
                                                                                                                                end Program
                                                                                                                            ---------------- -->
    </div>
</div>
@push('script')
<script src="//cdn.jsdelivr.net/jquery.dirtyforms/2.0.0/jquery.dirtyforms.min.js" type="text/javascript"></script>
<script>
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

          $(document).ready(function() {
                $('form').dirtyForms();
            });
</script>
@endpush
@endsection