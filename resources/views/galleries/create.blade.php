@extends('layouts.app') @section('content')
    <x-card-header>
        Galleries
    </x-card-header>
    <div class="row">
        <div class="col-lg-12">
            <!-- ---------------------
                                                                                                                    start Person Info
                                                                                                                ---------------- -->
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="mb-0 text-white">Create Gallery</h4>
                </div>
                <form action="/admin/galleries/" method="POST" enctype="multipart/form-data">
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

                                <div class="mb-3">
                                    <label class="control-label mb-2" for="title">Title</label>
                                    <input type="text" id="title"
                                        class="form-control @error('title') is-invalid @enderror" value=""
                                        name="title" placeholder="Please enter title..." required>
                                    @error('title')
                                        <div id="validationServer04Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-4">
                                    <label class="mr-sm-2 mb-2" for="inlineFormCustomSelect">Category</label>
                                    <select class="form-select mr-sm-2  @error('category_id') is-invalid @enderror"
                                        name="category_id" id="inlineFormCustomSelect" required>
                                        <option value="">Choose: Category</option>
                                        @forelse ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                                        @empty
                                            <option value="">Category not found</option>
                                        @endforelse
                                    </select>
                                    @error('category_id')
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
                                <a href="/admin/galleries/">
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
        <script src="{{ asset('js/imagePreview.js') }}"></script>
    @endpush
@endsection
