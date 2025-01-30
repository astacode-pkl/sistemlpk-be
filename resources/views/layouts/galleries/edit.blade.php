<x-layout>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-primary">
                <h4 class="mb-0 text-white">Edit Gallery</h4>
            </div>
            <form action="/galleries/{{ Crypt::encryptString($gallery->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="row pt-3">
                        <div class="col-md-6">
                            <div class="mb-3">
                                
                                <label class="control-label" for="image">Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="form-control  @error('image') is-invalid  @enderror"  id="fileInput"
                                            aria-describedby="inputGroupFileAddon01" name="image" >
                                            @error('image')
                                    <div id="validationServer04Feedback" class="invalid-feedback">
                                      {{$message}}
                                      </div>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="control-label" for="title">Title</label>
                                <input type="text" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ $gallery->title }}" name="title">
                                @error('title')
                                <div id="validationServer04Feedback" class="invalid-feedback">
                                  {{$message}}
                                  </div>
                                @enderror
                            </div>
                            <div class="form-group mb-4">
                                <label class="mr-sm-2 @error('category_id') is-invalid @enderror" for="inlineFormCustomSelect">Select</label>
                                <select class="form-select mr-sm-2" name="category_id" id="inlineFormCustomSelect">
                                  @foreach ($categories as $category)
                                  @if ($gallery->category_id == $category->id)
                                      
                                  <option value="{{$category->id}}">{{$category->title}}</option>   
                                  @else
                                  <option value="{{$category->id}}">{{$category->title}}</option>   

                                  @endif
                                  @endforeach
                                  
                                </select>
                                @error('category_id')
                                <div id="validationServer04Feedback" class="invalid-feedback">
                                    {{$message}}
                                    </div>
                                  @enderror
                            </div>
                        </div>
                        <!--/span-->
                         
                        <div class="position-relative col-md-4 "  id="display">
                            <img src="{{asset('images/galleries/'.$gallery->image)}}" class="card-img-top rounded-1 d-block" id="preview" alt="...">
                        </div>
                    </div>
                    <div class="form-actions text-end">
                        <div class="card-body border-top">
                            <button type="submit" class="btn btn-primary  px-4">
                                <div class="d-flex align-items-center">
                                    <i class="ti ti-plus me-1 fs-4"></i>
                                    Save
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
                                                                                                        end Person Info
                                                                                                    ---------------- -->
    </div>
</div>

</x-layout>
