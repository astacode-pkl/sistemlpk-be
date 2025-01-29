<x-layout>

    <div class="row">
        <div class="col-lg-12">
            <!-- ---------------------
                                                                                                            start Program
                                                                                                        ---------------- -->
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="mb-0 text-white">Create Program</h4>
                </div>
                <form action="/programs" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row pt-3">
                            <div class="col-md-6">
                                <div class="mb-3 d-flex">
                                    <div>
                                         <label class="control-label" for="image">Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="form-control  @error('image') is-invalid  @enderror" id="fileInput" aria-describedby="inputGroupFileAddon01" name="image" required>
                                            @error('image')
                                            <div id="validationServer04Feedback" class="invalid-feedback">
                                              {{$message}}
                                              </div>
                                            @enderror
                                        </div>
                                    </div>
                                    </div>
    
                                    <div>
                                        @error('image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3 form-floating">
                                    <input type="text" id="title" class="form-control @error('title') is-invalid   @enderror " value="" name="title" placeholder="Title..." required>
                                    <label class="control-label" for="title">Title</label>
                                    @error('title')
                                    <div id="validationServer04Feedback" class="invalid-feedback">
                                      {{$message}}
                                      </div>
                                    @enderror
                                </div>
                                
                                <div class="mb-3 form-floating">
                                    <textarea class="form-control  @error('description') is-invalid   @enderror" id="floatingTextarea" name="description" placeholder="Description..." required></textarea>
                                    <label for="floatingTextarea">description</label>
                                    @error('description')
                                    <div id="validationServer04Feedback" class="invalid-feedback">
                                      {{$message}}
                                      </div>
                                    @enderror
                                 </div>
                                 @error('description')
                                        <div class="feedback">
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                              </div>
                                        </div>
                                @enderror
                            </div>
                            <!--/span-->
                            
                            <div class="position-relative col-md-4 d-none" id="display">
                                <img src="" class="card-img-top rounded-1 " id="preview" alt="...">
                            </div>
                        </div>
                        <div class="form-actions text-end">
                            <div class="card-body border-top">
                                <button type="submit" class="btn btn-primary  px-4">
                                    <div class="d-flex align-items-center">
                                        <i class="ti ti-plus me-1 fs-4"></i>
                                        Create
                                    </div>
                                </button>
                                <a href="/galleries">
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
                                                                                                            end Program
                                                                                                        ---------------- -->
        </div>
    </div>
    </x-layout>
    