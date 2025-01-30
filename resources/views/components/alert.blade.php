@if (session('success'))
<div class="alert alert-info alert-dismissible fade show" role="alert" id="alert">
   {{ session('success') }}
    
        {{-- <p>hsisa</p> --}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   
</div>
@endif
@if (session('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert" id="alert">
   {{ session('error') }}
    
        {{-- <p>hsisa</p> --}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   
</div>
@endif