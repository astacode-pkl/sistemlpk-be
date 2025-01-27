<x-layout>

<x-card-header>
    Company Profile
</x-card-header>
    <div class="row">
        <div class="col-lg-12">
         
                
              </div>
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="mb-0 text-white">Company Profile</h4>
                </div>
                <form action="/companyprofile/1" method="post" enctype="multipart/form-data">
                    @csrf 
                    @method('put')
                    <div class="card-body">
                        <div class="row pt-3">
                            @foreach ($companyProfile as $profile)
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="control-label" for="name">Name</label>
                                    <input type="text" id="name" name="name" class="form-control" value="{{$profile->name}}">
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="control-label" for="slogan">Slogan</label>
                                    <input type="text" id="slogan" name="slogan" class="form-control" value="{{$profile->slogan}}">
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <div class="row pt-3">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="control-label" for="email">Email</label>
                                    <input type="email" id="email" name="email" class="form-control" value="{{$profile->email}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="control-label" for="ig">Instagram Link</label>
                                    <input type="text" id="ig" name="instagram" class="form-control" value="{{$profile->instagram}}">
                                </div>
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="control-label" for="wa">WhatsApp Link</label>
                                    <input type="text" id="wa" name="whatsapp" class="form-control" value="{{$profile->whatsapp}}">
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="control-label" for="tiktok">TikTok Link</label>
                                    <input type="text" id="tiktok" name="tiktok" class="form-control" value="{{$profile->tiktok}}">
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <div class="row pt-3">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="control-label" for="vision">Vision</label>
                                    <textarea class="form-control" id="vision" name="vision">{{$profile->vision}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="control-label" for="mission">Mission</label>
                                    <textarea class="form-control" name="mission" id="mission">{{$profile->mission}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="control-label" for="address">Address</label>
                                    <textarea class="form-control" name="address" id="address">{{$profile->address}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="control-label" for="map">Map</label>
                                    <textarea class="form-control" name="map" id="map">{{$profile->map}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="control-label" for="history">History</label>
                                    <textarea class="form-control" name="history" id="history">{{$profile->history}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col">
                                
                                <div class="mb-3">
                                    <label class="control-label"  for="address">Logo</label>
                                    
                                    <img
                                        src="{{ asset('storage/'.$profile->logo) }}"
                                        class="img-fluid rounded-top w-20 w-xs-100"
                                        alt="" id="preview"
                                        
                                    />
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" id="fileInput" class="form-control" name="logo" id="inputGroupFile01"
                                                aria-describedby="inputGroupFileAddon01">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                
                            @endforeach
                        <div class="form-actions text-end">
                            <div class="card-body border-top">
                                <button type="submit" class="btn btn-primary px-4" onclick="return confirm('are you sure ?')">
                                    <div class="d-flex align-items-center">
                                        <i class="ti ti-device-floppy me-1 fs-4"></i>
                                        Save
                                    </div>
                                </button>
                                <a href="/profile">
                                <button type="button" class="btn btn-danger px-4 ms-2 text-white">
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