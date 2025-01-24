<x-layout>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-primary">
                <h4 class="mb-0 text-white">Add Photo</h4>
            </div>
            <form action="/categories" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row pt-3">
                        <div class="col-md-6">
                           
                            <div class="mb-3">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="slug" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">slug</label>
                                  </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="title" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">title</label>
                                  </div>
                            </div>
                           
                        </div>
                        <!--/span-->
                    </div>
                    <div class="form-actions text-end">
                        <div class="card-body border-top">
                            <button type="submit" class="btn btn-primary rounded-pill px-4">
                                <div class="d-flex align-items-center">
                                    <i class="ti ti-plus me-1 fs-4"></i>
                                    Add
                                </div>
                            </button>
                            <a href="/categories">
                            <button type="button" class="btn btn-danger rounded-pill px-4 ms-2 text-white">
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

<script>
    const fileInput = document.getElementById('fileInput');
     const preview = document.getElementById('preview');
     const display = document.getElementById('display');


     fileInput.addEventListener('change', (event) => {
         const file = event.target.files[0];
         if (file) {
             const reader = new FileReader();

             reader.onload = (e) => {
                 preview.src = e.target.result;
                 preview.style.display = 'block';
                 display.classList.remove('d-none') = 'block';

             };

             reader.readAsDataURL(file);
         } else {
             display.style.display = 'none';
             preview.src = '';
         }
     });
 </script>
 </x-layout>
