<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <title>lpk tsubuka</title>
  </head>
  <body>
    <!-- HEADER-->
    <header
      ref="headerRef"
      class="tw-fixed tw-top-0 tw-border-b tw-border-gray-200 tw-flex tw-flex-wrap tw-md:justify-start tw-md:flex-nowrap tw-z-50 tw-h-16 tw-lg:h-20 tw-w-full tw-transition-all tw-duration-300"
      :class="{
                'tw-bg-white/0 tw-backdrop-blur-0 tw-border-transparent': !isScrolled,
                'tw-bg-white/90 tw-backdrop-blur-sm tw-border-gray-200': isScrolled
            }"
    >
      <nav
        class="tw-relative tw-max-w-[85rem] tw-w-full tw-md:flex tw-md:items-center tw-md:justify-between tw-md:gap-3 tw-mx-auto tw-px-4 tw-py-auto tw-sm:px-6 tw-lg:px-8 tw-py-2"
      >
        <!-- Logo w/ Collapse Button -->
        <div class="tw-flex tw-items-center tw-justify-between">
          <a class="tw-flex tw-gap-3" to="#" aria-label="Brand">
            <img src="/assets/img/logo.png" alt="logo" class="tw-w-10" />
            <img src="/assets/img/nama.png" alt="nama" class="tw-w-20" />
          </a>
          <!-- Collapse Button -->
          <div class="tw-md:hidden">
            <button
              type="button"
              class="tw-hs-collapse-toggle tw-relative tw-size-9 tw-flex tw-justify-center tw-items-center tw-text-sm tw-font-semibold tw-rounded-lg tw-border tw-border-gray-200 tw-text-gray-800 tw-bg-gray-100 tw-focus:outline-none tw-focus:bg-gray-100 tw-disabled:opacity-50 tw-disabled:pointer-events-none"
              id="hs-header-classic-collapse"
              aria-expanded="false"
              aria-controls="hs-header-classic"
              aria-label="Toggle navigation"
              data-hs-collapse="#hs-header-classic"
            >
              <svg
                class="tw-hs-collapse-open:hidden tw-size-4"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              >
                <line x1="3" x2="21" y1="6" y2="6" />
                <line x1="3" x2="21" y1="12" y2="12" />
                <line x1="3" x2="21" y1="18" y2="18" />
              </svg>
              <svg
                class="tw-hs-collapse-open:block tw-shrink-0 tw-hidden tw-size-4"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              >
                <path d="M18 6 6 18" />
                <path d="m6 6 12 12" />
              </svg>
              <span class="tw-sr-only">Toggle navigation</span>
            </button>
          </div>
          <!-- End Collapse Button -->
        </div>
        <!-- End Logo w/ Collapse Button -->
        <!-- Collapse -->
        <div
          id="hs-header-classic"
          class="tw-hs-collapse tw-hidden tw-overflow-hidden tw-bg-white tw-w-full tw-md:bg-transparent tw-rounded-lg tw-px-10 tw-pt-3 tw-mt-5 tw-lg:mt-0 tw-lg:pt-0 tw-lg:px-0 tw-transition-all tw-duration-300 tw-basis-full tw-grow tw-md:block"
          aria-labelledby="hs-header-classic-collapse"
        >
          <div
            class="tw-overflow-hidden tw-overflow-y-auto tw-max-h-[75vh] [&::-webkit-scrollbar]:tw-w-2 [&::-webkit-scrollbar-thumb]:tw-rounded-full [&::-webkit-scrollbar-track]:tw-bg-gray-100 [&::-webkit-scrollbar-thumb]:tw-bg-gray-300"
          >
            <div
              class="tw-py-2 tw-md:py-0 tw-flex tw-flex-col tw-md:flex-row tw-md:items-center tw-md:justify-end tw-gap-0.5 tw-md:gap-1"
            >
              <a
                class="tw-p-2 tw-flex tw-items-center tw-text-sm tw-hover:text-blue-600 tw-focus:outline-none tw-focus:text-blue-600"
                to="/"
                aria-current="page"
                :class="{
                'tw-md:text-white': !isScrolled,
                'tw-md:text-gray-800': isScrolled
            }"
              >
                Home
              </a>
              <a
                class="tw-p-2 tw-flex tw-items-center tw-text-sm tw-text-gray-800 tw-hover:text-blue-600 tw-focus:outline-none tw-focus:text-blue-600"
                to="/persyaratan"
                :class="{
                'tw-md:text-white': !isScrolled,
                'tw-md:text-gray-800': isScrolled
            }"
              >
                Persyaratan
              </a>
              <a
                class="tw-p-2 tw-flex tw-items-center tw-text-sm tw-text-gray-800 tw-hover:text-blue-600 tw-focus:outline-none tw-focus:text-blue-600"
                to="/galeri"
                :class="{
                'tw-md:text-white': !isScrolled,
                'tw-md:text-gray-800': isScrolled
            }"
              >
                Galeri
              </a>
              <a
                class="tw-p-2 tw-flex tw-items-center tw-text-sm tw-text-gray-800 tw-hover:text-blue-600 tw-focus:outline-none tw-focus:text-blue-600"
                to="/kontak"
                :class="{
                'tw-md:text-white': !isScrolled,
                'tw-md:text-gray-800': isScrolled
            }"
              >
                Kontak
              </a>
              <a
                class="tw-p-2 tw-flex tw-items-center tw-text-sm tw-text-gray-800 tw-hover:text-blue-600 tw-focus:outline-none tw-focus:text-blue-600"
                to="/tentang"
                :class="{
                'tw-md:text-white': !isScrolled,
                'tw-md:text-gray-800': isScrolled
            }"
              >
                Tentang
              </a>
            </div>
          </div>
        </div>
        <!-- End Collapse -->
      </nav>
    </header>
    <!-- END HEADER  -->

    <!-- hero -->
    <!-- Slider -->
    <div
      data-hs-carousel='{
      "loadingClasses": "tw-opacity-0",
      "dotsItemClasses": "tw-hs-carousel-active:bg-blue-700 tw-hs-carousel-active:border-blue-700 tw-size-3 tw-border tw-border-gray-400 tw-rounded-full tw-cursor-pointer",
      "isAutoPlay": true
  }'
      class="tw-relative"
    >
      <div
        class="tw-hs-carousel tw-relative tw-overflow-hidden tw-h-screen tw-bg-white"
      >
        <div
          class="tw-hs-carousel-body tw-absolute tw-top-0 tw-bottom-0 tw-start-0 tw-flex tw-flex-nowrap tw-transition-transform tw-duration-700 tw-opacity-0"
        >
          <div class="tw-hs-carousel-slide">
            <div
              class="tw-flex tw-justify-center tw-h-full tw-w-full tw-bg-gray-100 tw-relative"
            >
              <img
                src="/assets/img/hero.jpg"
                alt="hero"
                class="tw-object-cover tw-brightness-50 tw-w-full"
              />
            </div>
          </div>
          <div class="tw-hs-carousel-slide">
            <div
              class="tw-flex tw-justify-center tw-h-full tw-w-full tw-bg-gray-200"
            >
              <img
                src="https://images.unsplash.com/photo-1540959733332-eab4deabeeaf?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fHRva3lvfGVufDB8fDB8fHww"
                alt="hero"
                class="tw-object-cover tw-w-full tw-brightness-50"
              />
            </div>
          </div>
          <div class="tw-hs-carousel-slide">
            <div
              class="tw-flex tw-justify-center tw-h-full tw-w-full tw-bg-gray-300"
            >
              <img
                src="/assets/img/hero3.jpg"
                alt="hero"
                class="tw-object-cover tw-w-full tw-brightness-50"
              />
            </div>
          </div>
        </div>
      </div>
      <button
        type="button"
        class="tw-hs-carousel-prev tw-hs-carousel-disabled:tw-opacity-50 tw-hs-carousel-disabled:pointer-events-none tw-absolute tw-inset-y-0 tw-start-0 tw-inline-flex tw-justify-center tw-items-center tw-w-[46px] tw-h-full tw-text-blue-600"
      >
        <span
          class="tw-text-2xl tw-hover:bg-gray-800/30 tw-p-3 tw-rounded-md"
          aria-hidden="true"
        >
          <svg
            class="tw-shrink-0 tw-size-5"
            xmlns="http://www.w3.org/2000/svg"
            width="50"
            height="50"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="5"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <path d="m15 18-6-6 6-6"></path>
          </svg>
        </span>
        <span class="tw-sr-only">Previous</span>
      </button>
      <button
        type="button"
        class="tw-hs-carousel-next tw-hs-carousel-disabled:tw-opacity-50 tw-hs-carousel-disabled:pointer-events-none tw-absolute tw-inset-y-0 tw-end-0 tw-inline-flex tw-justify-center tw-items-center tw-w-[46px] tw-h-full tw-text-blue-600"
      >
        <span class="tw-sr-only">Next</span>
        <span
          class="tw-text-2xl tw-hover:bg-gray-800/40 tw-p-3 tw-rounded-md"
          aria-hidden="true"
        >
          <svg
            class="tw-shrink-0 tw-size-5"
            xmlns="http://www.w3.org/2000/svg"
            width="50"
            height="50"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="5"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <path d="m9 18 6-6-6-6"></path>
          </svg>
        </span>
      </button>
      <div
        class="tw-hs-carousel-pagination tw-flex tw-justify-center tw-absolute tw-bottom-3 tw-start-0 tw-end-0 tw-space-x-2"
      ></div>
    </div>
    <!-- End Slider -->

    <!-- Overlay -->
    <div
      class="tw-absolute tw-top-1/2 tw-left-1/2 tw-transform tw--translate-x-1/2 tw--translate-y-1/2 tw-text-white tw-text-center tw-z-10"
    >
      <h1 class="tw-text-3xl tw-font-semibold">
        lpk tsukuba indonesia <br />職業訓練機関つくばインドネシア
      </h1>
      <div class="tw-flex tw-justify-center tw-mt-10">
        <a to="https://tally.so/r/mOdErY" target="_blank">
          <button
            type="button"
            class="tw-py-3 tw-px-4 tw-inline-flex tw-items-center tw-gap-x-2 tw-text-md tw-rounded-2xl tw-border tw-border-transparent tw-bg-blue-600 tw-text-white tw-hover:bg-transparent tw-hover:scale-105 tw-hover:text-white tw-hover:border tw-hover:border-white tw-disabled:opacity-50 tw-disabled:pointer-events-none tw-font-semibold tw-hover:transition tw-duration-700 tw-mb-5"
          >
            Daftar Sekarang
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="tw-size-6"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
              />
            </svg>
          </button>
        </a>
      </div>
    </div>
    <!-- End Overlay -->
    <!-- end hero -->
    <!-- visi misi -->
    <div
      class="tw-visimisi tw-h-full tw-w-full tw-flex tw-justify-center tw-items-center tw-p-10 tw-my-6"
    >
      <div
        class="tw-grid tw-grid-cols-1 tw-md:grid-cols-3 tw-gap-10 tw-w-full tw-max-w-7xl"
      >
        <div
          class="tw-flex tw-justify-center tw-items-center tw-col-span-1 tw-md:col-span-1 tw-md:order-2 tw-order-1"
          data-aos="fade-up"
          data-aos-delay="200"
        >
          <img
            src="/assets/img/misi.jpg"
            alt="misi"
            class="tw-w-[90%] tw-h-full tw-lg:w-full tw-object-cover tw-bg-gray-50 tw-shadow-lg tw-rounded-lg"
          />
        </div>
        <div
          class="tw-p-10 tw-bg-gray-50 tw-shadow-lg tw-rounded-lg tw-mx-auto tw-col-span-1 tw-md:col-span-2 tw-md:order-1 tw-order-2"
          data-aos="fade-up"
        >
          <h2
            class="tw-text-center tw-text-3xl tw-font-bold tw-text-blue-500 tw-mb-3"
          >
            Visi & Misi
          </h2>
          <h3
            class="tw-font-semibold tw-text-lg tw-text-gray-800 tw-text-center"
          >
            Visi
          </h3>
          <p
            class="tw-mt-4 tw-text-gray-700 tw-leading-relaxed tw-text-center tw-md:text-left"
          >
            Menjadikan LPK Tsukuba Indonesia sebagai sarana generasi muda
            Indonesia untuk mengembangkan potensi dan menghasilkan lulusan yang
            berkualitas dan profesional serta mampu bersaing di kancah
            internasional. Khususnya di Negara Jepang.
          </p>
          <h3
            class="tw-font-semibold tw-text-lg tw-text-gray-800 tw-text-center tw-mt-5"
          >
            Misi
          </h3>
          <p class="tw-mt-4 tw-text-gray-700 tw-leading-relaxed">
            1. Melatih kedisiplinan dan etos kerja sesuai standar di Jepang.<br />
            2. Mengoptimalkan potensi dari setiap peserta melalui Program
            Pemagangan Swasta, dan Program Pekerja Berketerampilan Khusus.<br />
            3. Mendidik dan melatih bahasa Jepang dengan didampingi
            instruktur/pengajar alumni magang Jepang yang profesional dan
            berpengalaman.<br />
            4. Mempersiapkan calon peserta dalam menghadapi seleksi/ujian yang
            dilaksanakan oleh penyelenggara rekrut magang.
          </p>
        </div>
      </div>
    </div>
    <!-- end visi misi -->

    <!-- program -->
    <div
      class="tw-card-container tw-grid tw-grid-cols-1 tw-md:grid-cols-2 tw-gap-8 tw-px-8"
    >
      <div
        class="tw-flex tw-flex-col tw-bg-gray-50 tw-border tw-shadow-sm tw-rounded-xl tw-hover:drop-shadow-lg tw-transition tw-duration-500 tw-hover:scale-110 tw-group"
        data-aos="fade-up"
      >
        <div class="tw-p-4 tw-md:p-7">
          <img
            src="/assets/img/program1.jpg"
            alt="program"
            class="tw-rounded-lg tw-mb-3 tw-group-hover:brightness-90 tw-brightness-75 tw-transition tw-duration-200"
          />
          <h3
            class="tw-text-xl tw-font-bold tw-text-blue-600 tw-transition tw-duration-200"
          >
            Program Pemagangan SO (swasta)
          </h3>
          <p class="tw-mt-2 tw-text-gray-600 tw-font-semibold">
            Program pemagangan SO adalah program magang ke Jepang yang
            diselenggarakan oleh Sending Organization (SO). SO adalah lembaga
            yang telah memiliki izin resmi dari Kementerian Ketenagakerjaan
            untuk mengirimkan tenaga kerja atau magang ke Negara Jepang.
          </p>
        </div>
      </div>
      <div
        class="tw-flex tw-flex-col tw-bg-gray-50 tw-border tw-shadow-sm tw-rounded-xl tw-hover:drop-shadow-lg tw-transition tw-duration-200 tw-hover:scale-110 tw-group"
        data-aos="fade-up"
        data-aos-delay="200"
      >
        <div class="tw-p-4 tw-md:p-7">
          <img
            src="/assets/img/program2.jpg"
            alt="program"
            class="tw-rounded-lg tw-mb-3 tw-group-hover:brightness-90 tw-brightness-75 tw-transition tw-duration-200"
          />
          <h3 class="tw-text-xl tw-font-bold tw-text-blue-600">
            Program Tenaga Kerja Spesifik/Tokutei Ginou (TG)
          </h3>
          <p class="tw-mt-2 tw-text-gray-600 tw-font-semibold">
            Tokutei Ginou merupakan program baru dari pemerintah Jepang, yaitu
            program tenaga kerja dengan keahlian spesifik dengan status visa/
            ijin tinggal bagi warga negara asing di Jepang. Pemegang visa SSW
            dapat bekerja di perusahaan Jepang dengan hak dan kewajiban yang
            sama dengan pekerja Jepang. Kontrak 1 s/d 3 tahun, bisa diperpanjang
            hingga 5 tahun.
          </p>
        </div>
      </div>
    </div>
    <!-- program -->
    <!-- proses -->
    <div class="tw-flex tw-justify-center tw-items-center tw-flex-col tw-mb-20">
      <h3
        class="tw-text-xl tw-text-center tw-mb-5 tw-font-bold tw-text-blue-600"
      >
        Proses Ke Jepang
      </h3>
      <!-- Timeline -->
      <div>
        <!-- Item -->
        <div class="tw-flex tw-gap-x-3">
          <!-- Icon -->
          <div
            class="tw-relative tw-last:after:hidden tw-after:absolute tw-after:top-7 tw-after:bottom-0 tw-after:start-3.5 tw-after:w-px tw-after:-translate-x-[0.5px] tw-after:bg-gray-200"
          >
            <div
              class="tw-relative tw-z-10 tw-size-7 tw-flex tw-justify-center tw-items-center"
            >
              <div class="tw-size-2 tw-rounded-full tw-bg-blue-600"></div>
            </div>
          </div>
          <!-- End Icon -->
          <!-- Right Content -->
          <div class="tw-grow tw-pt-0.5 tw-pb-8">
            <h3 class="tw-flex tw-gap-x-1.5 tw-font-semibold tw-text-gray-800">
              LPK TSUKUBA
            </h3>
            <p class="tw-mt-1 tw-text-sm tw-text-gray-600">
              Find more detailed instructions here.
            </p>
          </div>
          <!-- End Right Content -->
        </div>
        <!-- End Item -->
        <!-- Item -->
        <div class="tw-flex tw-gap-x-3">
          <!-- Icon -->
          <div
            class="tw-relative tw-last:after:hidden tw-after:absolute tw-after:top-7 tw-after:bottom-0 tw-after:start-3.5 tw-after:w-px tw-after:-translate-x-[0.5px] tw-after:bg-gray-200"
          >
            <div
              class="tw-relative tw-z-10 tw-size-7 tw-flex tw-justify-center tw-items-center"
            >
              <div class="tw-size-2 tw-rounded-full tw-bg-blue-600"></div>
            </div>
          </div>
          <!-- End Icon -->
          <!-- Right Content -->
          <div class="tw-grow tw-pt-0.5 tw-pb-8">
            <h3 class="tw-flex tw-gap-x-1.5 tw-font-semibold tw-text-gray-800">
              Seleksi
            </h3>
            <p class="tw-mt-1 tw-text-sm tw-text-gray-600">
              Find more detailed instructions here.
            </p>
          </div>
          <!-- End Right Content -->
        </div>
        <!-- End Item -->
        <!-- Item -->
        <div class="tw-flex tw-gap-x-3">
          <!-- Icon -->
          <div
            class="tw-relative tw-last:after:hidden tw-after:absolute tw-after:top-7 tw-after:bottom-0 tw-after:start-3.5 tw-after:w-px tw-after:-translate-x-[0.5px] tw-after:bg-gray-200"
          >
            <div
              class="tw-relative tw-z-10 tw-size-7 tw-flex tw-justify-center tw-items-center"
            >
              <div class="tw-size-2 tw-rounded-full tw-bg-blue-600"></div>
            </div>
          </div>
          <!-- End Icon -->
          <!-- Right Content -->
          <div class="tw-grow tw-pt-0.5 tw-pb-8">
            <h3 class="tw-flex tw-gap-x-1.5 tw-font-semibold tw-text-gray-800">
              Pelatihan
            </h3>
            <p class="tw-mt-1 tw-text-sm tw-text-gray-600">
              Find more detailed instructions here.
            </p>
          </div>
          <!-- End Right Content -->
        </div>
        <!-- End Item -->
        <!-- Item -->
        <div class="tw-flex tw-gap-x-3">
          <!-- Icon -->
          <div
            class="tw-relative tw-last:after:hidden tw-after:absolute tw-after:top-7 tw-after:bottom-0 tw-after:start-3.5 tw-after:w-px tw-after:-translate-x-[0.5px] tw-after:bg-gray-200"
          >
            <div
              class="tw-relative tw-z-10 tw-size-7 tw-flex tw-justify-center tw-items-center"
            >
              <div class="tw-size-2 tw-rounded-full tw-bg-blue-600"></div>
            </div>
          </div>
          <!-- End Icon -->
          <!-- Right Content -->
          <div class="tw-grow tw-pt-0.5 tw-pb-8">
            <h3 class="tw-flex tw-gap-x-1.5 tw-font-semibold tw-text-gray-800">
              Jepang
            </h3>
            <p class="tw-mt-1 tw-text-sm tw-text-gray-600">
              Find more detailed instructions here.
            </p>
          </div>
          <!-- End Right Content -->
        </div>
        <!-- End Item -->
      </div>
      <!-- End Timeline -->
    </div>
    <!-- end proses -->


     <!-- persyaratan -->
     <div>
      <div class="tw-h-[30vh] tw-w-full tw-relative tw-mb-10 tw-shadow-md tw-flex tw-items-center tw-justify-center">
          <div>
              <!-- Loading Skeleton -->
              <div>
                  <div class="tw-animate-pulse">
                      <!-- Skeleton content -->
                  </div>
              </div>
      
              <!-- Hero Content -->
              <div>
                  <img src="assets/img/program1.jpg" alt="Persyaratan Program" 
                       class="tw-w-full tw-h-full tw-object-cover tw-absolute tw-inset-0">
                  <div class="tw-absolute tw-inset-0 tw-bg-black tw-opacity-60"></div>
                  <div class="tw-absolute tw-top-1/2 tw-left-1/2 tw-transform -tw-translate-x-1/2 -tw-translate-y-1/2 tw-flex tw-flex-col tw-items-center tw-gap-2">
                      <h1 class="tw-text-white tw-text-4xl tw-font-semibold tw-z-10 tw-text-center" data-aos="fade-right">
                          Persyaratan
                      </h1>
                      <nav class="tw-text-white tw-text-base sm:tw-text-lg tw-font-semibold tw-z-10 tw-animate-slide-in-right">
                          <a href="/" class="tw-text-white hover:tw-text-blue-100">Home</a>
                          <span class="tw-mx-2">></span>
                          <span class="tw-text-blue-400">Persyaratan</span>
                      </nav>
                  </div>
              </div>
          </div>
      </div>
  
      <!-- Main Content -->
      <div class="tw-max-w-4xl tw-mx-auto tw-p-4 tw-space-y-8">
          <div class="tw-max-w-4xl tw-mx-auto tw-p-4 tw-space-y-8">
              <!-- Program SO Section -->
              <div class="tw-bg-white tw-rounded-xl tw-shadow-sm">
                <div class="tw-p-6">
                  <h2 class="tw-text-2xl md:tw-text-3xl tw-font-semibold tw-text-blue-600 tw-text-center tw-mb-5" data-aos="fade-down">
                      Program Pemagangan SO (Swasta)
                    </h2>
                  <!-- card -->
          
                  <div class="tw-flex tw-flex-wrap tw-justify-start tw-p-4 tw-text-center tw-gap-5 tw-border tw-rounded-lg tw-shadow-lg">
                      <div class="tw-w-full tw-md:w-1/2">
                        <img src="assets/img/japanimg.jpg" alt="Description" class="tw-w-full tw-h-full tw-rounded-lg tw-mb-4 tw-md:mb-0">
                      </div>
                      <div class="tw-w-full tw-md:w-[39%]">
                        <div class="tw-flex tw-flex-col tw-w-full">
                          <div class="tw-flex tw-items-center tw-gap-x-2 tw-mb-2 tw-hover:scale-105 tw-transition-transform tw-duration-300 tw-cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="tw-size-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                            <span class="tw-text-gray-600 tw-text-start tw-hover:text-gray-900">Laki - laki / Perempuan umur 18 - 35 tahun</span>
                          </div>
                          <div class="tw-flex tw-items-center tw-gap-x-2 tw-mb-2 tw-hover:scale-105 tw-transition-transform tw-duration-300 tw-cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="tw-size-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                            </svg>
                            <span class="tw-text-gray-600 tw-text-justify tw-hover:text-gray-900">Pendidikan minimal SMA/Sederajat</span>
                          </div>
                          <div class="tw-flex tw-items-center tw-gap-x-2 tw-mb-2 tw-hover:scale-105 tw-transition-transform tw-duration-300 tw-cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="tw-size-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                            </svg>
                            <span class="tw-text-gray-600 tw-text-justify tw-hover:text-gray-900">Tinggi badan dan berat badan minimal</span>
                          </div>
                          <div class="tw-flex tw-items-center tw-gap-x-2 tw-mb-2 tw-hover:scale-105 tw-transition-transform tw-duration-300 tw-cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="tw-size-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                            <span class="tw-text-gray-600 tw-text-justify tw-hover:text-gray-900">Laki-laki : 160 cm / 50 kg</span>
                          </div>
                          <div class="tw-flex tw-items-center tw-gap-x-2 tw-mb-2 tw-hover:scale-105 tw-transition-transform tw-duration-300 tw-cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="tw-size-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                            <span class="tw-text-gray-600 tw-text-justify tw-hover:text-gray-900">Perempuan : 150 cm / 40 kg</span>
                          </div>
                          <div class="tw-flex tw-items-center tw-gap-x-2 tw-mb-2 tw-hover:scale-105 tw-transition-transform tw-duration-300 tw-cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="tw-size-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                            </svg>
                            <span class="tw-text-gray-600 tw-text-justify tw-hover:text-gray-900">Sehat jasmani/Rohani</span>
                          </div>
                          <div class="tw-flex tw-items-center tw-gap-x-2 tw-mb-2 tw-hover:scale-105 tw-transition-transform tw-duration-300 tw-cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="tw-size-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                              <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                            <span class="tw-text-gray-600 tw-text-justify tw-hover:text-gray-900">Tidak Buta Warna</span>
                          </div>
                          <div class="tw-flex tw-items-center tw-gap-x-2 tw-mb-2 tw-hover:scale-105 tw-transition-transform tw-duration-300 tw-cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="tw-size-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 0 0 5.636 5.636m12.728 12.728A9 9 0 0 1 5.636 5.636m12.728 12.728L5.636 5.636" />
                            </svg>
                            <span class="tw-text-gray-600 tw-text-justify tw-hover:text-gray-900">Tidak cacat</span>
                          </div>
                          <div class="tw-flex tw-items-center tw-gap-x-2 tw-mb-2 tw-hover:scale-105 tw-transition-transform tw-duration-300 tw-cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="tw-size-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
                            </svg>
                            <span class="tw-text-gray-600 tw-text-justify tw-hover:text-gray-900">Bersedia bekerja keras dan disiplin tinggi</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    
          
                  <!-- Benefits Grid -->
                  <h3 class="tw-text-2xl tw-font-semibold tw-mb-4 tw-text-center tw-text-blue-600 tw-mt-16">Keuntungan Program SO (Swasta)</h3>
                  <div class="tw-grid tw-grid-cols-2 md:tw-grid-cols-4 tw-gap-4">
                      <div data-aos="fade-up" data-aos-duration="3000" class="tw-flex tw-flex-col tw-items-center tw-p-4 tw-text-center tw-border tw-rounded-lg tw-transition-all tw-duration-300 hover:tw-bg-blue-600 hover:tw-transform hover:tw-scale-105 hover:tw-shadow-lg hover:tw-text-white tw-group">
                        <svg class="tw-w-8 tw-h-8 tw-text-blue-500 tw-mb-2 tw-group-hover:tw-text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
                          <circle cx="12" cy="7" r="4" />
                        </svg>
                        <span class="tw-text-sm">Bisa memilih job sesuai keinginan</span>
                      </div>
                    
                      <div data-aos="fade-up" data-aos-duration="2500" class="tw-flex tw-flex-col tw-items-center tw-p-4 tw-text-center tw-border tw-rounded-lg tw-transition-all tw-duration-300 hover:tw-bg-blue-600 hover:tw-transform hover:tw-scale-105 hover:tw-shadow-lg hover:tw-text-white tw-group">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="tw-w-8 tw-h-8 tw-text-blue-500 tw-mb-2 tw-group-hover:tw-text-white">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                          <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                        <span class="tw-text-sm">Mata minus masih bisa</span>
                      </div>
                    
                      <div data-aos="fade-up" data-aos-duration="2000" class="tw-flex tw-flex-col tw-items-center tw-p-4 tw-text-center tw-border tw-rounded-lg tw-transition-all tw-duration-300 hover:tw-bg-blue-600 hover:tw-transform hover:tw-scale-105 hover:tw-shadow-lg hover:tw-text-white tw-group">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="tw-w-8 tw-h-8 tw-text-blue-500 tw-mb-2 tw-group-hover:tw-text-white">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75" />
                        </svg>
                        <span class="tw-text-sm">Proses tidak terlalu ketat</span>
                      </div>
                    
                      <div data-aos="fade-up" data-aos-duration="1000" class="tw-flex tw-flex-col tw-items-center tw-p-4 tw-text-center tw-border tw-rounded-lg tw-transition-all tw-duration-300 hover:tw-bg-blue-600 hover:tw-transform hover:tw-scale-105 hover:tw-shadow-lg hover:tw-text-white tw-group">
                        <svg class="tw-w-8 tw-h-8 tw-text-blue-500 tw-mb-2 tw-group-hover:tw-text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M12 2L2 7l10 5 10-5-10-5z" />
                          <path d="M2 17l10 5 10-5" />
                          <path d="M2 12l10 5 10-5" />
                        </svg>
                        <span class="tw-text-sm">Proses tidak terlalu lama</span>
                      </div>
                    </div>
                    
                </div>
              </div>
          
              <!-- Program TG Section -->
              <div class="tw-max-w-4xl tw-mx-auto tw-p-4">
                  <div class="tw-flex tw-flex-col md:tw-flex-row tw-items-center tw-gap-6 md:tw-gap-8 tw-relative">
                    <!-- Circular Image -->
                    <div class="tw-w-48 tw-h-48 md:tw-w-64 md:tw-h-64 tw-rounded-full tw-overflow-hidden tw-flex-shrink-0 tw-z-10 tw-shadow-md">
                      <img src="assets/img/program2.jpg" alt="Program SSW/TG" class="tw-w-full tw-h-full tw-object-cover" />
                    </div>
                
                    <!-- Content Section -->
                    <div class="tw-flex-1">
                
                      <h2 class="tw-text-2xl md:tw-text-3xl tw-font-semibold tw-text-blue-600 tw-text-center md:tw-text-left tw-mb-5">
                        Program Tenaga Kerja Spesifik (SSW) / Tokutei Ginou (TG)
                      </h2>
                
                      <!-- Requirements List -->
                      <div class="tw-flex tw-flex-col tw-items-center tw-p-5 tw-gap-2 tw-text-center tw-border tw-rounded-lg tw-bg-white md:tw--ml-40 tw-shadow-lg">
                        <div
                          class="tw-flex tw-items-center tw-gap-x-2 tw-w-full md:tw-w-3/4 lg:tw-w-1/2 tw-hover:tw-scale-105 tw-transition-transform tw-duration-300 tw-cursor-pointer">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="tw-size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                              d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                          </svg>
                
                          <span class="tw-text-gray-600 tw-text-justify">Laki - laki / Perempuan umur 18 - 33 tahun</span>
                        </div>
                
                        <div
                          class="tw-flex tw-items-center tw-gap-x-2 tw-w-full md:tw-w-3/4 lg:tw-w-1/2 tw-hover:tw-scale-105 tw-transition-transform tw-duration-300 tw-cursor-pointer">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="tw-size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                              d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                          </svg>
                
                          <span class="tw-text-gray-600 tw-text-justify">Pendidikan minimal SMA/Sederajat</span>
                        </div>
                
                        <div
                          class="tw-flex tw-items-center tw-gap-x-2 tw-w-full md:tw-w-3/4 lg:tw-w-1/2 tw-hover:tw-scale-105 tw-transition-transform tw-duration-300 tw-cursor-pointer">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="tw-size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                              d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                          </svg>
                
                          <span class="tw-text-gray-600 tw-text-justify">Sehat jasmani/Rohani</span>
                        </div>
                
                        <div
                          class="tw-flex tw-items-center tw-gap-x-2 tw-w-full md:tw-w-3/4 lg:tw-w-1/2 tw-hover:tw-scale-105 tw-transition-transform tw-duration-300 tw-cursor-pointer">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="tw-size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                          </svg>
                
                          <span class="tw-text-gray-600 tw-text-justify">Tidak Buta Warna</span>
                        </div>
                
                        <div
                          class="tw-flex tw-items-center tw-gap-x-2 tw-w-full md:tw-w-3/4 lg:tw-w-1/2 tw-hover:tw-scale-105 tw-transition-transform tw-duration-300 tw-cursor-pointer">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="tw-size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                              d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
                          </svg>
                
                          <span class="tw-text-gray-600 tw-text-justify">Bersedia bekerja keras dan disiplin tinggi</span>
                        </div>
                
                        <div
                          class="tw-flex tw-items-center tw-gap-x-2 tw-w-full md:tw-w-3/4 lg:tw-w-1/2 tw-hover:tw-scale-105 tw-transition-transform tw-duration-300 tw-cursor-pointer">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="tw-size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                              d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 0 1-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 0 1 1.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 0 0-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 0 1-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H9.75" />
                          </svg>
                
                          <span class="tw-text-gray-600 tw-text-justify">Memiliki Sertifikat JLPT N4 atau JFT Basic A2</span>
                        </div>
                
                        <div
                          class="tw-flex tw-items-center tw-gap-x-2 tw-w-full md:tw-w-3/4 lg:tw-w-1/2 tw-hover:tw-scale-105 tw-transition-transform tw-duration-300 tw-cursor-pointer">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="tw-size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                              d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 0 1 9 9v.375M10.125 2.25V7.5" />
                          </svg>
                
                          <span class="tw-text-gray-600 tw-text-justify">Memiliki Paspor dan Siap Bekerja di Jepang</span>
                        </div>
                
                      </div>
                    </div>
                  </div>
                </div>
                

                <div class="tw-flex tw-justify-center tw-mt-5 tw-mb-5">
                  <nuxt-link to="https://tally.so/r/mOdErY" target="_blank">
                    <button type="button"
                      class="tw-py-3 tw-px-4 tw-inline-flex tw-items-center tw-gap-x-2 tw-text-md tw-rounded-2xl tw-border tw-border-transparent tw-bg-blue-600 tw-text-white hover:tw-bg-transparent hover:tw-scale-105 hover:tw-text-blue-600 hover:tw-border hover:tw-border-blue-600 disabled:tw-opacity-50 disabled:tw-pointer-events-none tw-font-semibold hover:tw-transition tw-duration-700 tw-mb-5">
                      Daftar Sekarang
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="tw-size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                          d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                      </svg>
                    </button>
                  </nuxt-link>
                </div>
                
            </div>
      </div>
  </div>
  <!-- end persyaratan -->

    <!-- galeri -->
    <div class="tw-galeri">
      <div class="tw-grid tw-grid-cols-1 sm:tw-grid-cols-2 md:tw-grid-cols-4 lg:tw-grid-cols-4 tw-gap-4 sm:tw-gap-6 tw-items-center tw-mx-3 sm:tw-mx-5 tw-mt-5 tw-mb-10">
          <!-- Image Card -->
          <div class="tw-group tw-relative tw-overflow-hidden tw-rounded-lg tw-shadow-md hover:tw-shadow-xl tw-transition-all tw-duration-300 tw-h-full tw-cursor-pointer">
              <div class="tw-absolute tw-inset-0 tw-bg-gray-200"></div>
              <div class="tw-w-full tw-h-full">
                  <img src="your-image-src.jpg" alt="Image title" class="tw-w-full tw-h-64 tw-object-cover tw-transform tw-group-hover:tw-scale-105 tw-transition-transform tw-duration-300" />
              </div>
              <div class="tw-absolute tw-inset-0 tw-bg-black/50 tw-opacity-0 tw-group-hover:tw-opacity-100 tw-transition-all tw-duration-300 tw-flex tw-items-center tw-justify-center">
                  <h3 class="tw-text-white tw-text-base sm:tw-text-lg md:tw-text-xl tw-font-semibold tw-text-center tw-px-4">Image Title</h3>
              </div>
          </div>
          <!-- Repeat the above block for each image -->
  
      </div>
  
      <!-- Modal -->
      <div class="tw-fixed tw-inset-0 tw-z-[60] tw-overflow-hidden tw-bg-black tw-bg-opacity-80 tw-transition-all tw-duration-300" id="modal">
          <div class="tw-flex tw-items-center tw-justify-center tw-min-h-screen tw-p-4">
              <button type="button" class="tw-absolute tw-top-2 tw-right-2 sm:tw-top-3 sm:tw-right-3 tw-z-[70] tw-text-white hover:tw-text-gray-200" id="closeModal">
                  <svg class="tw-w-6 tw-h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                  </svg>
              </button>
  
              <div class="tw-transform tw-transition-all tw-duration-300 tw-max-w-4xl tw-w-80 md:tw-w-96" id="modalContent">
                  <img src="your-selected-image-src.jpg" alt="Selected Image Title" class="tw-w-full tw-rounded-lg tw-shadow-xl" />
                  <h3 class="tw-text-white tw-text-base sm:tw-text-lg md:tw-text-xl tw-font-semibold tw-mt-4 tw-text-center tw-px-2">Selected Image Title</h3>
              </div>
          </div>
      </div>
  </div>
  <!-- end galeri -->

  <!-- foto kelulusan -->
  <div id="gallery" class="tw-galeri">
    <div id="loading" style="display: none;">
        <div id="skeletonCount">
            <!-- Skeleton Loading Placeholder -->
            <div class="tw-bg-gray-500 tw-border-2 tw-border-gray-100 tw-rounded-md tw-mb-4 tw-p-4 tw-flex tw-items-center">
                <div class="tw-w-12 tw-h-12 tw-bg-gray-300 tw-rounded-full tw-mr-4"></div>
                <div class="tw-flex-1">
                    <div class="tw-w-3/4 tw-h-4 tw-bg-gray-300 tw-rounded-md tw-mb-2"></div>
                    <div class="tw-w-1/2 tw-h-3 tw-bg-gray-300 tw-rounded-md"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="tw-relative tw-px-5 tw-mt-5 tw-mb-10">
        <!-- Prev Button -->
        <button onclick="scrollPrev()"
            class="tw-absolute tw-left-2 sm:tw-left-4 md:tw-left-6 lg:tw-left-8 tw-top-1/2 tw--translate-y-1/2 tw-z-10 tw-bg-white/80 hover:tw-bg-white tw-shadow-md tw-rounded-full tw-p-2 sm:tw-p-3 tw-transition-all tw-duration-300">
            <svg class="tw-w-5 tw-h-5 sm:tw-w-6 sm:tw-h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>

        <!-- Next Button -->
        <button onclick="scrollNext()"
            class="tw-absolute tw-right-2 sm:tw-right-4 md:tw-right-6 lg:tw-right-8 tw-top-1/2 tw--translate-y-1/2 tw-z-10 tw-bg-white/80 hover:tw-bg-white tw-shadow-md tw-rounded-full tw-p-2 sm:tw-p-3 tw-transition-all tw-duration-300">
            <svg class="tw-w-5 tw-h-5 sm:tw-w-6 sm:tw-h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>

        <div class="tw-overflow-hidden tw-rounded-md">
            <div id="slider" class="tw-flex tw-gap-4 sm:tw-gap-6 tw-cursor-grab active:tw-cursor-grabbing" 
                onmousedown="touchStart(event)" onmousemove="touchMove(event)" onmouseup="touchEnd()" 
                onmouseleave="touchEnd()" ontouchstart="touchStart(event)" ontouchmove="touchMove(event)" 
                ontouchend="touchEnd()">
                <!-- Images Loop (Replace this with your dynamic image list) -->
                <div class="tw-flex-shrink-0 tw-w-[100%] sm:tw-w-[100%] md:tw-w-[30.5%] lg:tw-w-[23.5%]" onclick="openModal(image)">
                    <div class="tw-group tw-relative tw-overflow-hidden tw-rounded-lg tw-shadow-md hover:tw-shadow-xl tw-transition-all tw-duration-300 tw-h-full tw-cursor-pointer">
                        <div class="tw-absolute tw-inset-0 tw-bg-gray-200 tw-animate-pulse"></div>
                        <div class="tw-w-full tw-h-full">
                            <img src="your-image-src.jpg" alt="Image title" class="tw-w-full tw-h-auto tw-transform tw-group-hover:tw-scale-105 tw-transition-transform tw-duration-300" />
                        </div>
                        <div class="tw-absolute tw-inset-0 tw-bg-black/50 tw-opacity-0 group-hover:tw-opacity-100 tw-transition-all tw-duration-300 tw-flex tw-items-center tw-justify-center">
                            <h3 class="tw-text-white tw-text-base sm:tw-text-lg md:tw-text-xl tw-font-semibold tw-text-center tw-px-4">Image Title</h3>
                        </div>
                    </div>
                </div>
                <!-- Repeat the above block for each image -->
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="modal" style="display: none;" class="tw-fixed tw-inset-0 tw-z-[60] tw-overflow-hidden tw-bg-black tw-bg-opacity-80 tw-transition-all tw-duration-300"
        onclick="closeModal()">
        <div class="tw-flex tw-items-center tw-justify-center tw-min-h-screen tw-p-4">
            <button type="button" class="tw-absolute tw-top-2 tw-right-2 sm:tw-top-3 sm:tw-right-3 tw-z-[70] tw-text-white hover:tw-text-gray-200" onclick="closeModal()">
                <svg class="tw-w-6 tw-h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>

            <div class="tw-transform tw-transition-all tw-duration-300 tw-max-w-4xl tw-w-full md:tw-w-1/2" id="modalContent">
                <img src="your-selected-image-src.jpg" alt="Selected Image Title" class="tw-w-full tw-rounded-lg tw-shadow-xl" />
                <h3 class="tw-text-white tw-text-base sm:tw-text-lg md:tw-text-xl tw-font-semibold tw-mt-4 tw-text-center tw-px-2">
                    Selected Image Title
                </h3>
            </div>
        </div>
    </div>
</div>
<!-- end kelulusa -->
  </body>
</html>


<!-- galeri script -->
<script>
  // JavaScript for opening and closing the modal (you can replace this with your own logic)
  const modal = document.getElementById('modal');
  const closeModalButton = document.getElementById('closeModal');

  // Open Modal (you can add event listeners or JavaScript to open modal when an image is clicked)
  function openModal() {
      modal.classList.remove('tw-hidden');
      modal.classList.add('tw-block');
  }

  // Close Modal
  closeModalButton.addEventListener('click', function () {
      modal.classList.add('tw-hidden');
      modal.classList.remove('tw-block');
  });
</script>
<!-- end galeri script -->


<!-- foto kelulusan script -->
<script>
  let images = []; // Replace with your actual image list
  let loadedImages = new Set();
  let selectedImage = null;
  let currentIndex = 0;
  let isVisible = false;
  let modalVisible = false;
  let isDragging = false;
  let startPos = 0;
  let currentTranslate = 0;
  let prevTranslate = 0;

  window.onload = function() {
    setTimeout(function() {
      document.getElementById('loading').style.display = 'none';
      isVisible = true;
    }, 2000);
  };

  function onImageLoad(index) {
    loadedImages.add(index);
  }

  function openModal(image) {
    selectedImage = image;
    currentIndex = images.findIndex(img => img.id === image.id);
    setTimeout(function() {
      modalVisible = true;
      document.getElementById('modal').style.display = 'block';
    }, 50);
  }

  function closeModal() {
    modalVisible = false;
    setTimeout(function() {
      selectedImage = null;
      document.getElementById('modal').style.display = 'none';
    }, 300);
  }

  function touchStart(e) {
    isDragging = true;
    startPos = e.type === 'mousedown' ? e.clientX : e.touches[0].clientX;
    const slider = document.getElementById('slider');
    slider.style.transition = 'none';
  }

  function touchMove(e) {
    if (!isDragging) return;
    const currentPosition = e.type === 'mousemove' ? e.clientX : e.touches[0].clientX;
    const diff = currentPosition - startPos;
    const slider = document.getElementById('slider');
    const maxTranslate = -(slider.scrollWidth - slider.offsetWidth);

    currentTranslate = Math.max(Math.min(prevTranslate + diff, 0), maxTranslate);
    updateSliderPosition();
  }

  function touchEnd() {
    isDragging = false;
    prevTranslate = currentTranslate;
    const slider = document.getElementById('slider');
    slider.style.transition = 'transform 0.3s ease';
  }

  function updateSliderPosition() {
    const slider = document.getElementById('slider');
    if (slider) {
      slider.style.transform = `translateX(${currentTranslate}px)`;
    }
  }

  function scrollPrev() {
    const slider = document.getElementById('slider');
    const itemWidth = slider.offsetWidth;
    currentTranslate = Math.min(currentTranslate + itemWidth, 0);
    prevTranslate = currentTranslate;
    slider.style.transition = 'transform 0.3s ease';
    updateSliderPosition();
  }

  function scrollNext() {
    const slider = document.getElementById('slider');
    const itemWidth = slider.offsetWidth;
    const maxTranslate = -(slider.scrollWidth - slider.offsetWidth);
    currentTranslate = Math.max(currentTranslate - itemWidth, maxTranslate);
    prevTranslate = currentTranslate;
    slider.style.transition = 'transform 0.3s ease';
    updateSliderPosition();
  }
</script>
<!-- end foto kelulusan -->


 <!-- Tentang page -->

    <!-- Hero Section -->
    <div class="tw-h-[30vh] tw-w-full tw-relative tw-mb-10 tw-shadow-md tw-flex tw-items-center tw-justify-center">
      <img src="/assets/img/bg-tentang.webp" alt="foto-persyaratan1" class="tw-w-full tw-h-full tw-object-cover tw-absolute tw-inset-0" />
      <div class="tw-absolute tw-inset-0 tw-bg-black tw-opacity-60"></div>
      <div class="tw-absolute tw-top-1/2 tw-left-1/2 tw-transform -tw-translate-x-1/2 -tw-translate-y-1/2 tw-flex tw-flex-col tw-items-center tw-gap-2">
          <h1 class="tw-text-white tw-text-4xl tw-font-semibold tw-z-10 tw-text-center">Tentang</h1>
          <h4 class="tw-text-white tw-text-base sm:tw-text-lg tw-font-semibold tw-z-10 tw-text-center">
              <a href="index.html" class="tw-text-white hover:tw-text-blue-100">Home</a> >
              <a href="tentang.html" class="tw-text-blue-400">Tentang</a>
          </h4>
      </div>
  </div>
  <!-- end hero -->

<!-- History Section -->
<div class="tw-max-w-6xl tw-mx-auto tw-px-4">
  <h3 class="tw-text-xl tw-md:text-2xl tw-font-bold tw-text-blue-600 tw-mb-6 tw-text-center tw-animate-slideDown tw-opacity-100">
    Sejarah LPK Tsukuba Indonesia
  </h3>

  <div class="tw-bg-gray-50 tw-rounded-lg tw-shadow-md tw-overflow-hidden tw-mb-12 tw-animate-slideUp tw-opacity-100">
    <div class="tw-p-4 tw-md:p-8">
      <div class="tw-grid tw-grid-cols-1 tw-lg:grid-cols-2 tw-gap-6 tw-md:gap-12">
        <div class="tw-space-y-4 tw-md:space-y-6 tw-text-base tw-md:text-lg tw-text-center tw-lg:text-left">
          <p class="tw-text-gray-600 tw-leading-relaxed">
            LPK Tsukuba Indonesia didirikan pada bulan Agustus 2024 di Ciawi, Kabupaten Tasikmalaya, Jawa Barat
            Indonesia. LPK Tsukuba Indonesia adalah lembaga pendidikan bahasa Jepang untuk Program Pemagang ke
            Jepang, dan telah mendapatkan izin resmi dari pemerintah Indonesia.
          </p>
          <p class="tw-text-gray-600 tw-leading-relaxed">
            LPK Tsukuba Indonesia membuka kelas pendidikan Bahasa Jepang yang berorientasi memberikan pembekalan
            sikap, mental, serta bahasa dan budaya Jepang bagi calon peserta magang, dan melatih calon peserta
            magang agar menjadi pemagang yang andal dan sesuai dengan kompetensi yang dibutuhkan oleh perusahaan
            Jepang.
          </p>
        </div>
        <div class="tw-order-first tw-lg:order-last">
          <div class="tw-relative tw-h-64 tw-lg:h-full tw-w-full tw-rounded-lg tw-overflow-hidden">
            <img src="assets/img/hero.jpg" alt="LPK TSUKUBA INDONESIA"
              class="tw-absolute tw-inset-0 tw-w-full tw-h-full tw-object-cover tw-transition-transform tw-duration-300 tw-ease-in-out tw-transform hover:tw-scale-110" />
            <div class="tw-absolute tw-inset-0 tw-bg-black tw-bg-opacity-40 tw-flex tw-flex-col tw-justify-center tw-items-center tw-p-6">
              <h4 class="tw-text-white tw-text-xl tw-font-bold tw-mb-2 tw-text-center">LPK TSUKUBA INDONESIA</h4>
              <p class="tw-text-white tw-text-sm tw-text-center">職業訓練機関つくばインドネシア</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end history -->

  <!-- Separator Line -->
  <div class="tw-w-1/2 tw-h-px tw-bg-gray-300 tw-mx-auto tw-mb-12"></div>
</div>


      <!-- Curriculum Section -->
      <div class="tw-max-w-5xl tw-mx-auto">
          <div class="tw-text-center tw-mb-8">
            <h2 class="tw-text-2xl tw-md:text-3xl tw-font-bold tw-text-blue-600 tw-relative tw-inline-block tw-animate-slideDown tw-opacity-100">
              Kurikulum Dan Metode Pengajaran
            </h2>
          </div>
        
          <div class="tw-text-center tw-mb-8 tw-md:mb-16 tw-animate-slideUp tw-opacity-100">
            <p class="tw-text-base tw-md:text-lg tw-text-gray-600 tw-max-w-3xl tw-mx-auto">
              Sebagai acuan untuk dapat mengikuti keinginan dan harapan dari LPK SO kami menggunakan modul sebagai berikut:
            </p>
          </div>
        
          <div class="tw-grid tw-grid-cols-1 tw-sm:grid-cols-2 tw-md:grid-cols-3 tw-gap-4 tw-md:gap-6 tw-px-4">
            <div class="tw-group tw-animate-slideUp tw-opacity-100">
              <div class="tw-bg-gray-50 tw-rounded-2xl tw-shadow-lg tw-p-4 tw-md:p-5 tw-transform tw-transition-all tw-duration-300 hover:tw--translate-y-2 hover:tw-shadow-xl">
                <div class="tw-flex tw-flex-col tw-items-center tw-space-y-4">
                  <div class="tw-w-12 tw-md:w-16 tw-h-12 tw-md:h-16 tw-bg-blue-100 tw-rounded-lg tw-flex tw-items-center tw-justify-center group-hover:tw-bg-blue-200 tw-transition-colors tw-duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="tw-w-6 tw-md:w-8 tw-h-6 tw-md:h-8 tw-text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                  </div>
                  <h3 class="tw-text-lg tw-md:text-xl tw-font-semibold tw-text-gray-900 tw-text-center">Minna No Nihongo I dan II</h3>
                  <div class="tw-opacity-0 group-hover:tw-opacity-100 tw-transition-opacity tw-duration-300">
                    <p class="tw-text-sm tw-text-gray-600 tw-text-center">
                      Pembelajaran dasar bahasa Jepang yang sistematis
                    </p>
                  </div>
                </div>
              </div>
            </div>
        
            <div class="tw-group tw-animate-slideUp tw-opacity-100">
              <div class="tw-bg-gray-50 tw-rounded-2xl tw-shadow-lg tw-p-4 tw-md:p-5 tw-transform tw-transition-all tw-duration-300 hover:tw--translate-y-2 hover:tw-shadow-xl">
                <div class="tw-flex tw-flex-col tw-items-center tw-space-y-4">
                  <div class="tw-w-12 tw-md:w-16 tw-h-12 tw-md:h-16 tw-bg-blue-100 tw-rounded-lg tw-flex tw-items-center tw-justify-center group-hover:tw-bg-blue-200 tw-transition-colors tw-duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="tw-w-6 tw-md:w-8 tw-h-6 tw-md:h-8 tw-text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                    </svg>
                  </div>
                  <h3 class="tw-text-lg tw-md:text-xl tw-font-semibold tw-text-gray-900 tw-text-center">Irodori</h3>
                  <div class="tw-opacity-0 group-hover:tw-opacity-100 tw-transition-opacity tw-duration-300">
                    <p class="tw-text-sm tw-text-gray-600 tw-text-center">
                      Pembelajaran praktis untuk kehidupan di Jepang
                    </p>
                  </div>
                </div>
              </div>
            </div>
        
            <div class="tw-group tw-animate-slideUp tw-opacity-100">
              <div class="tw-bg-gray-50 tw-rounded-2xl tw-shadow-lg tw-p-4 tw-md:p-5 tw-transform tw-transition-all tw-duration-300 hover:tw--translate-y-2 hover:tw-shadow-xl">
                <div class="tw-flex tw-flex-col tw-items-center tw-space-y-4">
                  <div class="tw-w-12 tw-md:w-16 tw-h-12 tw-md:h-16 tw-bg-blue-100 tw-rounded-lg tw-flex tw-items-center tw-justify-center group-hover:tw-bg-blue-200 tw-transition-colors tw-duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="tw-w-6 tw-md:w-8 tw-h-6 tw-md:h-8 tw-text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                    </svg>
                  </div>
                  <h3 class="tw-text-lg tw-md:text-xl tw-font-semibold tw-text-gray-900 tw-text-center">Marugoto</h3>
                  <div class="tw-opacity-0 group-hover:tw-opacity-100 tw-transition-opacity tw-duration-300">
                    <p class="tw-text-sm tw-text-gray-600 tw-text-center">
                      Pembelajaran secara aktif & dinamis mencakup informasi budaya Jepang
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end Curriculum -->
        
        <!-- Separator Line -->
        <div class="tw-w-1/2 tw-h-px tw-bg-gray-300 tw-mx-auto tw-my-12"></div>
  

    <!-- Licensing Section -->
    <div class="tw-mt-12 tw-md:mt-16 tw-mb-16 tw-md:mb-20">
      <div class="tw-text-center tw-mb-8">
        <h2 class="tw-text-2xl tw-md:text-3xl tw-font-bold tw-text-blue-600 tw-transition-all tw-duration-700 tw-animate-slideDown tw-opacity-100">
          Perizinan
          <div class="tw-mt-2 tw-mx-auto tw-h-1 tw-w-16 tw-bg-blue-600 tw-rounded"></div>
        </h2>
      </div>

      <div class="tw-bg-gradient-to-r tw-from-blue-50 tw-to-blue-100 tw-rounded-lg tw-p-4 tw-md:p-8 tw-lg:p-12 tw-shadow-lg tw-max-w-4xl tw-mx-auto tw-transition-all tw-duration-700 tw-delay-300 tw-animate-slideUp tw-opacity-100 tw-hover:shadow-2xl tw-hover:scale-105">
        <p class="tw-text-base tw-md:text-xl tw-font-semibold tw-text-gray-700 tw-text-center tw-mb-4">
          Sertifikat Standar: <span class="tw-font-bold tw-text-blue-600">14082400621380001</span>
        </p>
        <p class="tw-text-base tw-md:text-xl tw-text-gray-700 tw-text-center">
          Akta Notaris: <span class="tw-font-bold tw-text-blue-600">Mohamad Hikmat, S.H.</span> Nomor 12 Tanggal 26 Juli
          2024
        </p>
      </div>
    </div>
    <!-- end licensing -->



  <!-- kontak page -->
<!-- Hero Section -->
  <div class="tw-h-[30vh] tw-w-full tw-relative tw-mb-10 tw-shadow-md tw-flex tw-items-center tw-justify-center">
      <img src="assets/img/japan.jpg" alt="foto-persyaratan1"class="tw-w-full tw-h-full tw-object-cover tw-absolute tw-inset-0" />
      <div class="tw-absolute tw-inset-0 tw-bg-black tw-opacity-60"></div>
      <div class="tw-absolute tw-top-1/2 tw-left-1/2 tw-transform -tw-translate-x-1/2 -tw-translate-y-1/2 tw-flex tw-flex-col tw-items-center tw-gap-2">
                  <h1 class="tw-text-white tw-text-4xl tw-font-semibold tw-z-10 tw-text-center" data-aos="fade-right">Kontak</h1>
                  <h4 class="tw-text-white tw-text-base sm:tw-text-lg tw-font-semibold tw-z-10 tw-opacity-100 tw-text-center">
                      <a href="index.html" class="tw-text-white hover:tw-text-blue-100">Home</a> >
                      <a href="kontak.html" class="tw-text-blue-400">Kontak</a>
          </h4>
      </div>
  </div>
  <!-- end hero -->

  <!-- form -->
<section id="kontak">
  <div class="tw-min-h-screen tw-bg-gray-50 tw-mt-5 tw-py-5 tw-px-4 sm:tw-px-6 lg:tw-px-8 tw-mb-10">
      <div class="tw-max-w-7xl tw-mx-auto">
          <h2 class="tw-text-center tw-text-3xl tw-font-bold tw-text-blue-500 tw-mb-3">Hubungi Kami</h2>
          <div class="tw-mx-auto tw-h-1 tw-w-16 tw-bg-blue-600 tw-rounded tw-mb-4 tw-mt-4"></div>
          <p class="tw-text-center tw-text-gray-600 tw-mb-10">Jangan ragu untuk menghubungi kami melalui informasi kontak di bawah ini</p>
          
          <div class="tw-grid tw-grid-cols-1 md:tw-grid-cols-2 tw-gap-10">
              <div>
                  <div class="tw-space-y-7 tw-ms-5">
                      <div class="tw-flex tw-items-start tw-space-x-5">
                          <svg xmlns="http://www.w3.org/2000/svg" class="tw-h-6 tw-w-6 tw-text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                          </svg>
                          <div>
                              <h3 class="tw-font-semibold">Alamat:</h3>
                              <p class="tw-text-gray-600">Perum Puri Ciawi Kencana Blok J3,<br>Pasirjuni, Kec. Ciawi, Kab. Tasikmalaya,<br>Jawa Barat 46156</p>
                          </div>
                      </div>
                      
                      <div class="tw-flex tw-items-start tw-space-x-5">
                          <svg xmlns="http://www.w3.org/2000/svg" class="tw-h-6 tw-w-6 tw-text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                          </svg>
                          <div>
                              <h3 class="tw-font-semibold">Email:</h3>
                              <p class="tw-text-gray-600">tsukubaindonesia@gmail.com</p>
                          </div>
                      </div>
                      
                      <div>
                          <h3 class="tw-font-semibold tw-mb-3 tw-ms-5">Sosial Media:</h3>
                          <div class="tw-flex tw-space-x-6 tw-ms-6">
                              <a href="https://www.tiktok.com/@tsukuba.indonesia" class="tw-w-10 tw-h-10 tw-flex tw-items-center tw-justify-center tw-bg-black tw-text-white tw-rounded-full hover:tw-bg-gray-900" target="_blank">T</a>
                              <a href="https://www.instagram.com/lpk.tsukubaindonesia/" class="tw-w-10 tw-h-10 tw-flex tw-items-center tw-justify-center tw-bg-gradient-to-tr tw-from-yellow-400 tw-via-red-500 tw-to-purple-500 tw-text-white tw-rounded-full" target="_blank">I</a>
                              <a href="https://wa.me/6282316396737" class="tw-w-10 tw-h-10 tw-flex tw-items-center tw-justify-center tw-bg-green-500 tw-text-white tw-rounded-full hover:tw-bg-green-700" target="_blank">W</a>
                          </div>
                      </div>
                      
                      <div class="tw-card tw-rounded-2xl">
                          <div class="tw-mt-6">
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.9013908491333!2d108.14592479999999!3d-7.137400899999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f495efa140885%3A0xdf0a87b6588b1161!2sPerum%20Puri%20Ciawi%20Kencana!5e0!3m2!1sen!2sid!4v1736971326002!5m2!1sen!2sid" width="95%" height="270" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="tw-rounded-2xl"></iframe>
                          </div>
                      </div>
                  </div>
              </div>
              
              <div class="tw-bg-white tw-p-8 tw-rounded-lg tw-shadow-lg">
                  <form class="tw-space-y-6">
                      <div>
                          <label for="nama" class="tw-block tw-text-sm tw-font-medium tw-text-gray-700">Nama</label>
                          <input type="text" id="nama" name="nama" class="tw-w-full tw-px-4 tw-py-2 tw-border tw-border-gray-300 tw-rounded-md tw-shadow-sm focus:tw-ring-2 focus:tw-ring-blue-500">
                      </div>
                      <div>
                          <label for="no" class="tw-block tw-text-sm tw-font-medium tw-text-gray-700">Nomor Ponsel</label>
                          <input type="text" id="no" name="nomor-ponsel" class="tw-w-full tw-px-4 tw-py-2 tw-border tw-border-gray-300 tw-rounded-md tw-shadow-sm focus:tw-ring-2 focus:tw-ring-blue-500">
                      </div>
                      <div>
                          <label for="email" class="tw-block tw-text-sm tw-font-medium tw-text-gray-700">Email</label>
                          <input type="email" id="email" name="email" class="tw-w-full tw-px-4 tw-py-2 tw-border tw-border-gray-300 tw-rounded-md tw-shadow-sm focus:tw-ring-2 focus:tw-ring-blue-500">
                      </div>
                      <div>
                          <label for="pesan" class="tw-block tw-text-sm tw-font-medium tw-text-gray-700">Pesan</label>
                          <textarea id="pesan" name="pesan" class="tw-w-full tw-px-4 tw-py-2 tw-border tw-border-gray-300 tw-rounded-md tw-shadow-sm focus:tw-ring-2 focus:tw-ring-blue-500" rows="4"></textarea>
                      </div>
                      <div>
                          <button type="submit" class="tw-bg-blue-500 tw-text-white tw-py-2 tw-px-6 tw-rounded-md hover:tw-bg-blue-600">Kirim</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- end  form-->

    @vite('resources/js/app.js')

</body>
</html>



  
 

