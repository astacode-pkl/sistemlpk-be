@extends('frontend.app')
@section('content')
    
    <x-frontend.breadcrumb :image="'frontend/img/hero.jpg'" :title="'Galeri'"></x-frontend.breadcrumb>

    <p class="text-center text-blue-600 mb-10 text-xl font-semibold animate-fade-in" data-aos="fade-up">Foto Kelulusan</p>
    <x-frontend.graduation-photos :graduations="$graduations"></x-frontend.graduation-photos>

    <p class="text-center text-blue-600 mb-10 text-xl font-semibold animate-fade-in" data-aos="fade-up">Foto Kegiatan Lainnya
    </p>
    <x-frontend.other-photos :otherphotos="$otherphotos"></x-frontend.other-photos>
@endsection
