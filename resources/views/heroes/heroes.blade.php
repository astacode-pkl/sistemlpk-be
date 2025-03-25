@extends('layouts.app') @section('content')
    @push('style')
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.css">
    @endpush
    <x-breadcrumb></x-breadcrumb>
    <x-alert></x-alert>
    <div class="border-bottom title-part-padding d-flex justify-content-between  align-items-center">
        <h4 class="card-title mb-0">heroes</h4>
        <a href="/admin/heroes/create">
            <button class="btn btn-primary">
                <i class="ti ti-plus"></i>
                Create</button>
        </a>
    </div>
    <form action="/admin/heroes/update-position" method="POST">
        @csrf

        <ul id="sortable">

            @foreach ($heroes as $hero)
                <div data-id="{{ $hero->id }}" style=" cursor: grab;">
                    <li class="card w-100 flex overflow-hidden bg-white">
                        <div class="w-100">
                            <div class="row align-content-center">
                                <div class="col-md-3 ">
                                    <img src="{{ asset('images/heroes/' . $hero->image) }}" alt="image-slide"
                                        style="max-width: 250px; min-width: 100%;">
                                </div>
                                <div class="col-md-7 bg-white d-flex align-items-center justify-content-center">
                                    <h3>Slide {{ $hero->position }}</h3>
                                </div>
                                <div class="col-md-2 d-flex align-items-center justify-content-center gap-2 mb-2"
                                    style="cursor: pointer;">
                                    <a href="/admin/heroes/{{ Crypt::encryptString($hero->id) }}/edit"
                                        class="btn btn-primary py-2">

                                        <i class="ti ti-pencil"></i>

                                    </a>
                                    <a href="{{ route('destroyHero', Crypt::encryptString($hero->id)) }}"
                                        class="btn btn-danger py-2">

                                        <i class="ti ti-trash"></i>

                                    </a>

                                </div>

                            </div>
                        </div>
                    </li>
                    <input type="hidden" name="positions[]" value="{{ $hero->id }}" class="d-none">
                </div>
            @endforeach
            <button type="submit" class="btn btn-primary mt-3">Update position</button>
        </ul>
    </form>
    @push('script')
        <!-- datatable -->
        <script src="{{ asset('template/back') }}/dist/libs/jquery/dist/jquery.min.js"></script>
        <script src="{{ asset('js/datatable.js') }}"></script>
        <script src="{{ asset('template/back') }}/dist/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <script>
            $(function() {
                $("#sortable").sortable({
                    update: function(event, ui) {
                        // Perbarui input hidden dengan urutan baru
                        $("#sortable div").each(function(index) {
                            $(this).find("input").val($(this).data("id"));
                        });
                    }
                });
            });
        </script>
    @endpush
@endsection
