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
                                      target="_blank">T</a>
                                  <a href="{{ $companyProfile->instagram }}"
                                      class="w-10 h-10 flex items-center justify-center bg-gradient-to-tr from-yellow-400 via-red-500 to-purple-500 text-white rounded-full"
                                      target="_blank">I</a>
                                  <a href="{{ $companyProfile->whatsapp }}"
                                      class="w-10 h-10 flex items-center justify-center bg-green-500 text-white rounded-full hover:bg-green-700"
                                      target="_blank">W</a>
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
