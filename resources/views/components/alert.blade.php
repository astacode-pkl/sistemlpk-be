@if (session('success'))
<div class="alert alert-info alert-dismissible fade show" role="alert">
   {{ session('success') }}
    
        {{-- <p>hsisa</p> --}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    @endif
</div>