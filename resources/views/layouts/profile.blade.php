@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <!-- --------------------- start Person Info ---------------- -->
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="mb-0 text-white">Company Profile</h4>
                </div>
                <form action="#">
                    <div class="card-body">
                        <div class="row pt-3">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="control-label" for="name">Name</label>
                                    <input type="text" id="name" class="form-control" value="lpk tsukuba indonesia">
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="control-label" for="slogan">Slogan</label>
                                    <input type="text" id="slogan" class="form-control" value="職業訓練機関つくばインドネシア">
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <div class="row pt-3">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="control-label" for="email">Email</label>
                                    <input type="email" id="email" class="form-control" value="tsukubaindonesia@gmail.com">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="control-label" for="ig">Instagram Link</label>
                                    <input type="text" id="ig" class="form-control" value="https://www.instagram.com/lpk.tsukubaindonesia/">
                                </div>
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="control-label" for="wa">WhatsApp Link</label>
                                    <input type="text" id="wa" class="form-control" value="https://wa.me/6282316396737">
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="control-label" for="tiktok">TikTok Link</label>
                                    <input type="text" id="tiktok" class="form-control" value="https://www.tiktok.com/@tsukuba.indonesia">
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <div class="row pt-3">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="control-label" for="vision">Vision</label>
                                    <textarea class="form-control" id="vision">Menjadikan LPK Tsukuba Indonesia sebagai sarana generasi muda Indonesia untuk mengembangkan potensi dan menghasilkan lulusan yang berkualitas dan profesional serta mampu bersaing di kancah internasional. Khususnya di Negara Jepang.</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="control-label" for="mission">Mission</label>
                                    <textarea class="form-control" id="mission">1. Melatih kedisiplinan dan etos kerja sesuai standar di Jepang.
2. Mengoptimalkan potensi dari setiap peserta melalui Program Pemagangan Swasta, dan Program Pekerja Berketerampilan Khusus.
3. Mendidik dan melatih bahasa Jepang dengan didampingi instruktur/pengajar alumni magang Jepang yang profesional dan berpengalaman.
4. Mempersiapkan calon peserta dalam menghadapi seleksi/ujian yang dilaksanakan oleh penyelenggara rekrut magang.</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="control-label" for="address">Address</label>
                                    <textarea class="form-control" id="address">Perum Puri Ciawi Kencana, Pasirhuni, Kec. Ciawi, Kabupaten Tasikmalaya, Jawa Barat 46156</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="control-label" for="map">Map</label>
                                    <textarea class="form-control" id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.9013908491333!2d108.14592479999999!3d-7.137400899999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f495efa140885%3A0xdf0a87b6588b1161!2sPerum%20Puri%20Ciawi%20Kencana!5e0!3m2!1sen!2sid!4v1736971326002!5m2!1sen!2sid" width="95%" height="270" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded-2xl"></iframe></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="control-label" for="history">History</label>
                                    <textarea class="form-control" id="history">LPK Tsukuba Indonesia didirikan pada bulan Agustus 2024 di Ciawi, Kabupaten Tasikmalaya, Jawa Barat Indonesia. LPK Tsukuba Indonesia adalah lembaga pendidikan bahasa Jepang untuk Program Pemagang ke Jepang, dan telah mendapatkan izin resmi dari pemerintah Indonesia.

LPK Tsukuba Indonesia membuka kelas pendidikan Bahasa Jepang yang berorientasi memberikan pembekalan sikap, mental, serta bahasa dan budaya Jepang bagi calon peserta magang, dan melatih calon peserta magang agar menjadi pemagang yang andal dan sesuai dengan kompetensi yang dibutuhkan oleh perusahaan Jepang.</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col">
                                
                                <div class="mb-3">
                                    <label class="control-label" for="address">Logo</label>
                                    <img
                                        src="{{ asset('images/logo.png') }}"
                                        class="img-fluid rounded-top w-20 w-xs-100"
                                        alt=""/>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="form-control" id="inputGroupFile01"
                                                aria-describedby="inputGroupFileAddon01">
                                        </div>
                                    </div>
                                </div>
                            </div>
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
            <!-- --------------------- end Person Info ---------------- -->
        </div>
    </div>
@endsection
