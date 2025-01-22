@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <!-- --------------------- start Program ---------------- -->
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="mb-0 text-white">Program</h4>
                </div>
                <form action="/program" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="row pt-3">
                            <div class="col">
                                
                                <div class="mb-3 text-center">
                                        <img src="{{ asset('images/insert-image-here.webp') }}" 
                                             class="img-fluid w-20 shadow-lg" 
                                             alt="" 
                                             id="imagePreview"
                                             ondrop="dropHandler(event);" 
                                             ondragover="dragOverHandler(event);" 
                                             onclick="document.getElementById('inputGroupFile01').click();"
                                             style="border: 1px solid #dfe5ef; border-radius: 10px; "/>
                                        
                                    <div class="input-group justify-content-center mt-2">
                                        <input type="file" 
                                               class="form-control" 
                                               id="inputGroupFile01" 
                                               aria-describedby="inputGroupFileAddon01" 
                                               ondrop="dropHandler(event);" 
                                               ondragover="dragOverHandler(event);" 
                                               onchange="previewImage(event);"
                                               name="image"
                                               style="display: none;">
                                    </div>
                                </div>
                                <div class="feedback">
                                    @error('image')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                            </div>
                        </div>
                    <div class="card-body">
                        <div class="row pt-3">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="control-label" for="title">Program title</label>
                                    <input type="text" id="title" class="form-control" name="title" placeholder="Program title" required>
                                    <div class="feedback">
                                        @error('title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="control-label" for="description">Description</label>
                                    <textarea class="form-control" id="description" name="description" oninput="autoResizeTextarea(this)" placeholder="Description Program" required></textarea>
                                    <div class="feedback">
                                        @error('description')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            
                            <!--/span-->
                        </div>
                        
                        <div class="form-actions text-end">
                            <div class="card-body border-top">
                                <button type="submit" class="btn btn-primary rounded-pill px-4">
                                    <div class="d-flex align-items-center">
                                        <i class="ti ti-device-floppy me-1 fs-4"></i>
                                        Save
                                    </div>
                                </button>
                                <button type="button" class="btn btn-danger rounded-pill px-4 ms-2 text-white">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- --------------------- end Program ---------------- -->
        </div>
    </div>
    <script>
        // function dropHandler(event) {
        //     event.preventDefault();
        //     if (event.dataTransfer.items) {
        //         // Use DataTransferItemList interface to access the file(s)
        //         for (var i = 0; i < event.dataTransfer.items.length; i++) {
        //             if (event.dataTransfer.items[i].kind === 'file') {
        //                 var file = event.dataTransfer.items[i].getAsFile();
        //                 previewImage({ target: { files: [file] } });
        //             }
        //         }
        //     } else {
        //         // Use DataTransfer interface to access the file(s)
        //         for (var i = 0; i < event.dataTransfer.files.length; i++) {
        //             previewImage({ target: { files: [event.dataTransfer.files[i]] } });
        //         }
        //     }
        // }

        function dragOverHandler(event) {
            event.preventDefault();
        }

        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('imagePreview');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }

        function autoResizeTextarea(textarea) {
            textarea.style.height = 'auto';
            textarea.style.height = textarea.scrollHeight + 'px';
        }
    </script>
@endsection
