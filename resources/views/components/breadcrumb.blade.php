<div class="card bg-secondary-subtle shadow-none position-relative overflow-hidden">
    <div class="card-body px-4 py-3">
        <div class="row align-items-center">
            <div class="col-9">
                <h4 class="fw-semibold mb-8 text-capitalize">{{ $currentUrl }}</h4>
                <nav aria-label="breadcrumb" class="breadcrumb">
                    @foreach ($segments as $index => $segment)
                        <li class="breadcrumb-item {{ $loop->last ? 'active' : '' }}">
                            @if (!$loop->last)
                                <a
                                    href="{{ url(implode('/', array_slice($segments, 0, $index + 1))) }}">{{ $segment === 'admin' ? 'Home' : ucfirst($segment) }}</a>
                            @else
                                {{ ucfirst($currentUrl) }}
                            @endif
                        </li>
                    @endforeach
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
