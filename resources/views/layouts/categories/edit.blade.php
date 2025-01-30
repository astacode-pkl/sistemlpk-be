<x-layout>
    <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-primary">
                <h4 class="mb-0 text-white">Edit Category</h4>
            </div>
            <form action="/categories/{{ Crypt::encryptString($category->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="row pt-3">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class=" mb-3">
                                    <label for="floatingInput">title</label>
                                    <input type="text" class="form-control    @error('title') is-invalid
                                    @enderror" name="title" id="floatingInput" value="{{$category->title}}" placeholder="title..." required>
                                    @error('title')
                                    <div id="validationServer04Feedback" class="invalid-feedback">
                                      {{$message}}
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
                                    <i class="ti ti-plus me-1 fs-4"></i>
                                    Update
                                </div>
                            </button>
                            <a href="/categories">
                            <button type="button" class="btn btn-danger  px-4 ms-2 text-white">
                                
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
</x-layout>
