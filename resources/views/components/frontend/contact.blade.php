  <!-- form kontak -->
  <section id="kontak">
      <div class="min-h-screen bg-gray-50 mt-5 py-5 px-4 sm:px-6 lg:px-8 mb-10">
          <div class="max-w-7xl mx-auto">
              <h2 class="text-center text-3xl font-bold text-blue-500 mb-3">Hubungi Kami</h2>
              <div class="mx-auto h-1 w-16 bg-blue-600 rounded mb-4 mt-4"></div>
              <p class="text-center text-gray-600 mb-10">Jangan ragu untuk menghubungi kami melalui informasi
                  kontak di
                  bawah ini</p>

              <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                  <div>
                      <div class="space-y-7 ms-5">
                          <div class="flex items-start space-x-5">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none"
                                  viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                              </svg>
                              <div>
                                  <h3 class="font-semibold">Alamat:</h3>
                                  <p class="text-gray-600">{{ $companyProfile->address }}</p>
                              </div>
                          </div>

                          <div class="flex items-start space-x-5">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none"
                                  viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                              </svg>
                              <div>
                                  <h3 class="font-semibold">Email:</h3>
                                  <a href="mailto:{{ $companyProfile->email }}"
                                      class="text-gray-600">{{ $companyProfile->email }}</a>
                              </div>
                          </div>

                          <div>
                              <h3 class="font-semibold mb-3 ms-5">Sosial Media:</h3>
                              <div class="flex space-x-6 ms-6">
                                  <a href="{{ $companyProfile->tiktok }}"
                                      class="w-10 h-10 flex items-center justify-center bg-black text-white rounded-full hover:bg-gray-900"
                                      target="_blank"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                          viewBox="0 0 448 512" width="25" height="25">
                                          <path
                                              d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z">
                                          </path>
                                      </svg></a>
                                  <a href="{{ $companyProfile->instagram }}"
                                      class="w-10 h-10 flex items-center justify-center bg-gradient-to-tr from-yellow-400 via-red-500 to-purple-500 text-white rounded-full"
                                      target="_blank"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                          viewBox="0 0 448 512" width="25" height="25">
                                          <path
                                              d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                          </path>
                                      </svg></a>
                                  <a href="{{ $companyProfile->whatsapp }}"
                                      class="w-10 h-10 flex items-center justify-center bg-green-500 text-white rounded-full hover:bg-green-700"
                                      target="_blank">
                                      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512"
                                          width="25" height="25">
                                          <path
                                              d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z">
                                          </path>
                                      </svg></a>
                              </div>
                          </div>

                          <div class="card rounded-2xl">
                              <div class="mt-6">
                                  <iframe src="{{ $companyProfile->map }}" width="95%" height="270"
                                      style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                                      class="rounded-2xl"></iframe>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="bg-white p-8 rounded-lg shadow-lg">
                      <form action="/kontak" method="post" class="space-y-6">
                          @csrf
                          <div>
                              <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                              <input type="text" id="nama" name="name"
                                  class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500">
                          </div>
                          <div>
                              <label for="no" class="block text-sm font-medium text-gray-700">Nomor
                                  Ponsel</label>
                              <input type="text" id="no" name="phone_number"
                                  class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500">
                          </div>
                          <div>
                              <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                              <input type="email" id="email" name="email"
                                  class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500">
                          </div>
                          <div>
                              <label for="pesan" class="block text-sm font-medium text-gray-700">Pesan</label>
                              <textarea id="pesan" name="message"
                                  class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500"
                                  rows="4"></textarea>
                          </div>
                          <div>
                              <button type="submit"
                                  class="bg-blue-500 text-white py-2 px-6 rounded-md hover:bg-blue-600">Kirim</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- end  form-->
