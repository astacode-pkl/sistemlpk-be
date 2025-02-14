@extends('layouts.app') @section('content')
    <x-card-header>
        Benefits
    </x-card-header>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="mb-0 text-white">Create Benefit</h4>
                </div>
                <form action="/benefits" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row pt-3">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center gap-3">
                                    <div class=" mb-3 flex-grow-1 ">
                                        <label for="floatingTextarea" class="mb-2">Icon</label>
                                        <textarea class="form-control @error('icon') is-invalid      
                                    @enderror w-100  "
                                            placeholder="please enter text svg for icon you can find on web hero icons..." id="floatingTextarea" name="icon" required></textarea>
                                            @error('icon')
                                            <div id="validationServer04Feedback" class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        
                                    <div id="icon-preview" class="w-50 fst-italic "   style="max-width: 40px">icon</div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="form-actions text-end">
                                <div class="card-body border-top">
                                    <button type="submit" class="btn btn-primary  px-4">
                                        <div class="d-flex align-items-center">
                                            <i class="ti ti-device-floppy me-1 fs-5"></i>
                                            Save
                                        </div>
                                    </button>
                                    <a href="/benefits">
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
