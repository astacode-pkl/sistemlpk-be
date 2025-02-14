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
                 <form action="/cmslpktsukuba/benefits/{{ Crypt::encryptString($benefit->id) }}" method="POST"
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

                                     <div class="d-flex align-items-center gap-3">
                                        <div class=" mb-3 flex-grow-1 ">
                                            <label for="floatingTextarea" class="mb-2">Icon</label>
                                            <textarea class="form-control @error('icon') is-invalid      
                                        @enderror w-100  "
                                                placeholder="please enter text svg for icon you can find on web hero icons..." id="floatingTextarea" name="icon" required>{{ $benefit->icon }}</textarea>
                                                @error('icon')
                                                <div id="validationServer04Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            
                                        <div id="icon-preview" class="w-50 fst-italic "   style="max-width: 40px">{!! $benefit->icon !!}</div>
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
                                             placeholder="Please enter title...">

                                         @error('title')
                                             <div id="validationServer04Feedback" class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
                                 </div>
                                 <div class="form-group mb-4">
                                    <label class="mr-sm-2 mb-2 @error('category_id') is-invalid @enderror"
                                        for="inlineFormCustomSelect">Select</label>
                                    <select class="form-select mr-sm-2" name="program_id" id="inlineFormCustomSelect">
                                        @foreach ($programs as $program)
                                            @if ($benefit->program_id == $program->id)
                                                <option value="{{ $program->id }}" selected>{{ $program->title }}</option>
                                            @else
                                                <option value="{{ $program->id }}">{{ $program->title }}</option>
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
     @push('script')
     <script src="{{ asset('template/back') }}/dist/libs/jquery/dist/jquery.min.js"></script>
     <script>
         $(document).ready(function(){
             $('#floatingTextarea').on('keyup',function(){
                 $('#icon-preview').html($(this).val());
             });
         });
     </script>
     @endpush
 @endsection
