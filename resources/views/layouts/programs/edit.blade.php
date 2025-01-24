<x-layout>
  
    <div class="row">
        <div class="col-lg-12">
     
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="mb-0 text-white">Edit Program</h4>
                </div>
                <form action="/programs/{{$program->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="card-body">
                        <div class="row pt-3">
                            <div class="col-md-6">
                                <div class="mb-3 d-flex">
                                    <div>
                                        <label class="control-label" for="image">Image</label>
                                       <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="form-control" id="fileInput"
                                                aria-describedby="inputGroupFileAddon01" value="" name="image">
                                            </div>
                                         </div>
                                    </div>
    
                                    <div>
                                </div>
     
                                </div>
    
                                <div class="mb-3">
                                    <label class="control-label    @error('title') is-invalid   @enderror" for="title">Title</label>
                                    <input type="text" id="title" class="form-control" value="{{$program->title}}" name="title">
                                    @error('title')
                                    <div id="validationServer04Feedback" class="invalid-feedback">
                                      {{$message}}
                                      </div>
                                    @enderror
                                </div>
                                
                                <div class="form-floating mb-3">
                                    <textarea class="form-control @error('description') is-invalid   @enderror " id="floatingTextarea" name="description">{{$program->description}}</textarea>
                                    <label for="floatingTextarea">description</label>
                                    @error('description')
                                    <div id="validationServer04Feedback" class="invalid-feedback">
                                      {{$message}}
                                      </div>
                                    @enderror
                                 </div>
                            </div>
                            <!--/span-->
                            
                            <div class="position-relative col-md-6 " id="display">
                                <img src="{{ asset('storage/'.$program->images)}}" class="card-img-top rounded-0 " id="preview" alt="{{$program->images}}">
                            </div>
                        </div>
                        <div class="form-actions text-end">
                            <div class="card-body border-top">
                                <button type="submit" class="btn btn-primary py-2 px-4">
                                    <div class="d-flex align-items-center">
                                        <i class="ti ti-plus me-1 fs-4"></i>
                                        Edit
                                    </div>
                                </button>
                                <a href="/programs">
                                <button type="button" class=" btn btn-danger px-4 py-2 text-white">
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
    