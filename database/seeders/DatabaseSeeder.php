<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Profile;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\CompanyProfile;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'LPK tsukuba',
            'email' => 'lpktsukuba@gmail.com',
            'password' => '123456'
        ]);
        Category::create([
            'title' => 'Kelulusan'
        ]);
        Category::create([
            'title' => 'Kegiatan lainnya'
        ]);
        CompanyProfile::factory()->create([
            'name' => 'lpk tsukuba indonesia',
            'slogan' => '職業訓練機関つくばインドネシア',
            'history' => 'LPK Tsukuba Indonesia didirikan pada bulan Agustus 2024 di Ciawi, Kabupaten Tasikmalaya, Jawa Barat Indonesia. LPK Tsukuba Indonesia adalah lembaga pendidikan bahasa Jepang untuk Program Pemagang ke Jepang, dan telah mendapatkan izin resmi dari pemerintah Indonesia.
                        LPK Tsukuba Indonesia membuka kelas pendidikan Bahasa Jepang yang berorientasi memberikan pembekalan sikap, mental, serta bahasa dan budaya Jepang bagi calon peserta magang, dan melatih calon peserta magang agar menjadi pemagang yang andal dan sesuai dengan kompetensi yang dibutuhkan oleh perusahaan Jepang.',
            'vision' => 'Menjadikan LPK Tsukuba Indonesia sebagai sarana generasi muda Indonesia untuk mengembangkan potensi dan menghasilkan lulusan yang berkualitas dan profesional serta mampu bersaing di kancah internasional. Khususnya di Negara Jepang.',
            'mission' => '1. Melatih kedisiplinan dan etos kerja sesuai standar di Jepang.
                        2. Mengoptimalkan potensi dari setiap peserta melalui Program Pemagangan Swasta, dan Program Pekerja Berketerampilan Khusus.
                        3. Mendidik dan melatih bahasa Jepang dengan didampingi instruktur/pengajar alumni magang Jepang yang profesional dan berpengalaman.
                        4. Mempersiapkan calon peserta dalam menghadapi seleksi/ujian yang dilaksanakan oleh penyelenggara rekrut magang.',
            'email' => 'tsukubaindonesia@gmail.com',
            'instagram' => 'https://www.instagram.com/lpk.tsukubaindonesia/',
            'whatsapp' => 'https://wa.me/6282316396737',
            'tiktok' => 'https://www.tiktok.com/@tsukuba.indonesia',
            'address' => 'Perum Puri Ciawi Kencana, Pasirhuni, Kec. Ciawi, Kabupaten Tasikmalaya, Jawa Barat 46156',
            'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.9013908491333!2d108.14592479999999!3d-7.137400899999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f495efa140885%3A0xdf0a87b6588b1161!2sPerum%20Puri%20Ciawi%20Kencana!5e0!3m2!1sen!2sid!4v1736971326002!5m2!1sen!2sid" width="95%" height="270" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded-2xl"></iframe>',
            'logo' => 'logo.webp',
            'logo_type' => 'logo_type.webp',
            'logo_mark' => 'logo_mark.webp',
            'advertisement' => 'advertisement.webp',

        ]);
    }
}
