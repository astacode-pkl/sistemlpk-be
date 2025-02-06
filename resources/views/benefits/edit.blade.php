 @extends('layouts.app') @section('content')
 <x-card-header>
    Benefits
</x-card-header>
     <div class="row">
         <div class="col-lg-12">
             <div class="card">
                 <div class="card-header bg-primary">
                     <h4 class="mb-0 text-white">Edit Benefit</h4>
                 </div>
                 <form action="/benefits/{{ Crypt::encryptString($benefit->id) }}" method="POST"
                     enctype="multipart/form-data">
                     @method('put')
                     @csrf
                     <div class="card-body">
                         <div class="row pt-3">
                             <div class="col-md-6">
                                 <div class="mb-3">
                                     <div class="position-relative d-none " id="display">
                                         <img src="" class="card-img-top rounded-0 d-block" id="preview"
                                             alt="Icon">
                                     </div>

                                     <div class="mb-3">
                                         <label class="control-label mb-2" for="floatingTextarea">Icon</label>
                                         <textarea
                                             class="form-control @error('icon')
                                            is-invalid
                                            @enderror "
                                             placeholder="Please insert the text svg for icon you can find on web hero icons..." id="floatingTextarea" name="icon">{{ $benefit->icon }}</textarea>
                                     </div>

                                     @error('icon')
                                         <div id="validationServer04Feedback" class="invalid-feedback">
                                             {{ $message }}
                                         </div>
                                     @enderror
                                 </div>

                                 <div class="mb-3">
                                     <div class="mb-3">
                                         <label class="control-label mb-2" for="floatingInput">Title</label>
                                         <input type="text"
                                             class="form-control @error('title')
                                            is-invalid
                                            @enderror "
                                             name="title" id="floatingInput" value="{{ $benefit->title }}"
                                             placeholder="Please enter the title...">

                                         @error('title')
                                             <div id="validationServer04Feedback" class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
                                 </div>

                             </div>
                             <!--/span-->
                         </div>
                         <div class="form-actions text-end">
                             <div class="card-body border-top">
                                 <button type="submit" class="btn btn-primary px-4">
                                     <div class="d-flex align-items-center">
                                         <i class="ti ti-circle-check me-1 fs-5"></i>
                                         Update
                                        </div>
                                    </button>
                                    <a href="/benefits">
                                        <button type="button" class="btn btn-danger px-4 ms-2 text-white">
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
     
 @endsection
