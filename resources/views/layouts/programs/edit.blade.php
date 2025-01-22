@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <!-- ---------------------
                                                                                                        start Person Info
                                                                                                    ---------------- -->
        <div class="card">
            <div class="card-header bg-primary">
                <h4 class="mb-0 text-white">Edit Photo</h4>
            </div>
            <form action="/program/{{$program->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-body justify-content-center">
                    <div class="row pt-3">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="position-relative d-block" id="display">
                                    <img src="{{ asset('images/programs_images/'.$program->images)}}"
                                    class="card-img-top rounded-0 d-block"
                                    id="preview"
                                    alt="{{$program->title}}">
                                </div>
                            </div>
                            
                        </div>
                        <div class="col">
                            <input type="hidden" name="oldImage" value="{{$program->image}}">
                            <label class="control-label" for="image">Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="form-control"  id="fileInput"
                                        aria-describedby="inputGroupFileAddon01" name="imageUpload" required >
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="control-label" for="title">Title</label>
                                <input type="text" id="title" class="form-control" value="{{ $program->title }}" name="title">
                            </div>
                            <div class="form-group mb-4">
                                <label class="control-label" for="description">Description</label>
                                <textarea id="description" class="form-control" name="description">{{ $program->description }}</textarea>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <div class="form-actions text-end">
                        <div class="card-body border-top">
                            <button type="submit" class="btn btn-primary rounded-pill px-4">
                                <div class="d-flex align-items-center">
                                    <i class="ti ti-plus me-1 fs-4"></i>
                                    Update
                                </div>
                            </button>
                            <a href="/program">
                            <button type="button" class="btn btn-danger rounded-pill px-4 ms-2 text-white">
                                Cancel
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

<script>
    const fileInput = document.getElementById('fileInput');
    const preview = document.getElementById('preview');
    const display = document.getElementById('display');
    fileInput.addEventListener('change', (event) => {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = (e) => {
                preview.src = e.target.result;
                preview.style.display = 'block';
                display.classList.remove('d-none') = 'block';
            };
            reader.readAsDataURL(file);
        } else {
            preview.style.display = 'none';
            preview.src = '';
        }
    });
 </script>
@endsection