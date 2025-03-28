@extends('layouts.app')
@section('content')
<x-breadcrumb></x-breadcrumb>
<x-alert></x-alert>
<div class="card">
    <div class="card-header bg-primary">
        <h4 class="mb-0 text-white">Company Profile</h4>
    </div>
    <form action="/admin/companyprofile/{{ Crypt::encryptString($companyProfile->id) }}" method="post" enctype="multipart/form-data" id="form">
        @csrf
        @method('put')
        <div class="card-body">
            <div class="row pt-3">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="control-label col-form-label" for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control"
                            value="{{ $companyProfile->name }}">
                    </div>
                </div>
                <!--/span-->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="control-label col-form-label" for="slogan">Slogan</label>
                        <input type="text" id="slogan" name="slogan" class="form-control"
                            value="{{ $companyProfile->slogan }}">
                    </div>
                </div>
                <!--/span-->
            </div>
            <div class="row pt-3">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="control-label col-form-label" for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control"
                            value="{{ $companyProfile->email }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="control-label col-form-label" for="ig">Instagram Link</label>
                        <input type="text" id="ig" name="instagram" class="form-control"
                            value="{{ $companyProfile->instagram }}">
                    </div>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="control-label col-form-label" for="wa">WhatsApp Link</label>
                        <input type="text" id="wa" name="whatsapp" class="form-control"
                            value="{{ $companyProfile->whatsapp }}">
                    </div>
                </div>
                <!--/span-->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="control-label col-form-label" for="tiktok">TikTok Link</label>
                        <input type="text" id="tiktok" name="tiktok" class="form-control"
                            value="{{ $companyProfile->tiktok }}">
                    </div>
                </div>
                <!--/span-->
            </div>
            <div class="row pt-3">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="control-label col-form-label">Vision</label>
                        <textarea class="form-control" id="floatingTextarea"
                            name="vision">{{ $companyProfile->vision }}</textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="control-label col-form-label">Mission</label>
                        <textarea class="form-control" name="mission"
                            id="floatingTextarea">{{ $companyProfile->mission }}</textarea>
                    </div>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="control-label col-form-label">Address</label>
                        <textarea class="form-control" name="address"
                            id="floatingTextarea">{{ $companyProfile->address }}</textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="control-label col-form-label">Map</label>
                        <textarea class="form-control" name="map"
                            id="floatingTextarea">{{ $companyProfile->map }}</textarea>
                    </div>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col">
                    <div class="mb-3">
                        <label class="control-label col-form-label" for="history">History</label>
                        <textarea class="form-control" name="history"
                            id="floatingTextarea">{{ $companyProfile->history }}</textarea>
                    </div>
                </div>
            </div>
            <div class="d-flex pt-3 gap-3">

                <div class="mb-3">
                    <label class="control-label col-form-label" for="address">Logo</label>

                        <img src="{{ asset('storage/' . $companyProfile->logo) }}"
                            class="img-fluid rounded-top w-xs-100 d-block my-3" alt="" id="preview"
                            style="max-width:230px;" />
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" id="fileInput"
                                    class="form-control @error('logo') is-invalid @enderror " name="logo"
                                    id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                @error('logo')
                                    <div id="validationServer04Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="control-label" for="address">Logo Mark (Graphical logo)</label>

                        <img src="{{ asset('storage/' . $companyProfile->logo_mark) }}"
                            class="img-fluid rounded-top  w-xs-100 d-block my-3" alt="" id="preview"
                            style="max-width:230px;" />
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" id="fileInput"
                                    class="form-control @error('logo_mark') is-invalid @enderror " name="logo_mark"
                                    id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                @error('logo_mark')
                                    <div id="validationServer04Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="control-label" for="address">Logo Type (Text logo)</label>

                        <img src="{{ asset('storage/' . $companyProfile->logo_type) }}"
                            class="img-fluid rounded-top w-xs-100 d-block my-3" alt="" id="preview"
                            style="max-width:230px;" />
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" id="fileInput"
                                    class="form-control @error('logo_type') is-invalid @enderror " name="logo_type"
                                    id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                @error('logo_type')
                                    <div id="validationServer04Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>

            </div>
            <div class="mb-3">
                <label class="control-label col-form-label" for="address">Advertisement</label>

                    <img src="{{ asset('storage/' . $companyProfile->advertisement) }}"
                        class="img-fluid rounded-top w-xs-100 d-block my-3" alt="" id="preview"
                        style="max-width:230px;" />
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" id="fileInput"
                                class="form-control @error('advertisement') is-invalid @enderror " name="advertisement"
                                id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                            @error('advertisement')
                                <div id="validationServer04Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>


            <div class="form-actions text-end">
                <div class="card-body border-top">
                    <button type="submit" class="btn btn-primary px-4" onclick="Decision(event)">
                        <div class="d-flex align-items-center">
                            <i class="ti ti-device-floppy me-1 fs-4"></i>
                            Save
                        </div>
                    </button>

                </div>
            </div>
        </div>
    </form>
</div>
@push('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="//cdn.jsdelivr.net/jquery.dirtyforms/2.0.0/jquery.dirtyforms.min.js" type="text/javascript"></script>
<script src="{{ asset('js/sweetalert.js') }}"></script>
<script src="{{ asset('js/imagePreview.js') }}"></script>
<script>
    const textarea = document.querySelectorAll('#floatingTextarea')
        for (let i = 0; i < textarea.length; i++) {
          textarea[i].addEventListener('input' , function(){
              textarea[i].style.height = '';
              textarea[i].style.height = textarea[i].scrollHeight + 'px'
          });
        
      }
      //check form is changed or n
      $(document).ready(function() {
                $('form').dirtyForms();
            });
</script>
@endpush
@endsection