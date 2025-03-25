@extends('layouts.app')
@section('content')
<x-breadcrumb></x-breadcrumb>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-primary">
                <h4 class="mb-0 text-white">Create Benefit</h4>
            </div>
            <form action="/admin/benefits" method="POST" enctype="multipart/form-data" id="form">
                @csrf
                <div class="card-body">
                    <div class="row pt-3">
                        <div class="col-md-12">

                            <div class="mb-3 col-8">
                                <div class="d-flex align-items-center gap-3">
                                    <div class=" mb-3 flex-grow-1 ">
                                        <label for="floatingTextarea" class="control-label col-form-label">Icon</label>
                                        <textarea class="form-control @error('icon') is-invalid @enderror w-100"
                                            id="icon"
                                            placeholder="please enter text svg for icon you can find on web hero icons..."
                                            name="icon" required>{{ old('icon') }}</textarea>
                                        @error('icon')
                                        <div id="validationServer04Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div id="icon-preview" class="w-50 fst-italic ms-4" style="max-width: 40px"></div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class=" mb-3">
                                    <label for="floatingInput" class="control-label col-form-label">Title</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                        name="title" id="floatingInput" placeholder="please enter title..."
                                        value="{{ old('title') }}" required>
                                    @error('title')
                                    <div id="validationServer04Feedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <label class="control-label col-form-label" for="inlineFormCustomSelect">Program</label>
                                <select class="form-select mr-sm-2  @error('category_id') is-invalid @enderror"
                                    name="program_id" id="inlineFormCustomSelect" required>
                                    <option value="">Choose: Program</option>
                                    @forelse ($programs as $program)
                                    <option value="{{ $program->id }}">{{ old('program_id', $program->title) }}</option>
                                    @empty
                                    <option value="">Program not found</option>
                                    @endforelse
                                </select>
                                @error('program_id')
                                <div id="validationServer04Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-actions text-end">
                        <div class="card-body border-top">
                            <button type="submit" class="btn btn-primary  px-4">
                                <div class="d-flex align-items-center">
                                    <i class="ti ti-device-floppy me-1 fs-5"></i>
                                    Save
                                </div>
                            </button>
                            <a href="/admin/benefits">
                                <button type="button" class="btn btn-danger  px-4 ms-2 text-white">
                                    <div class="d-flex align-items-center">
                                        <i class="ti ti-circle-x me-1 fs-5"></i>
                                        Cancel
                                    </div>
                                </button>
                            </a>
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
<script src="//cdn.jsdelivr.net/jquery.dirtyforms/2.0.0/jquery.dirtyforms.min.js" type="text/javascript"></script>
<script>
    $('#icon').on('keyup', function() {
                $('#icon-preview').html($(this).val());
            });

            // check form is changed or n
            $(document).ready(function() {
                $('form').dirtyForms();
            });
</script>
@endpush
@endsection