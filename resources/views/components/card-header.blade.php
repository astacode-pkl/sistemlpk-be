<div class="card bg-primary shadow-none position-relative overflow-hidden mb-4 mt-4">
    <div class="card-body px-4 py-3">
        <div class="row align-items-center">
            <div class="col-9">
                <h4 class="fw-semibold tw-text-2xl mb-8 text-white">{{ $slot }}</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-white">
                        <li class="breadcrumb-item"><a class="text-muted text-white" href="/admin">Dashboard</a></li>
                        <li class="breadcrumb-item" aria-current="page">{{ $slot }}</li>
                    </ol>
                </nav>
            </div>
            <div class="col-3">
                <div class="text-center mb-n5">
                    <img src="{{ asset('template/back') }}/dist/images/breadcrumb/ChatBc.png" alt=""
                        class="img-fluid mb-n4">
                </div>
            </div>
        </div>
    </div>
</div>
