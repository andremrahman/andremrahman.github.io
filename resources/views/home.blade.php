<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  {{-- <section class="w-full min-h-[calc(100vh-4rem)] flex items-center justify-center px-6">
    <div class="max-w-6xl w-full">
      <div class="text-xl">
        <h2 class="text-3xl md:text-5xl lg:text-6xl font-bold mb-4">PT Gajahmada Karya Mandiri</h2>
        <p class="text-base md:text-lg lg:text-xl text-gray-600 mb-6 font-montserrat">
          Kami berkomitmen menghadirkan hasil <strong>konstruksi</strong> terbaik
          dengan mengutamakan ketepatan waktu, mutu, dan kepuasan klien.
        </p>
        <a href="/layanan"
          class="relative inline-flex items-center justify-start py-3 pl-4 pr-12 overflow-hidden font-semibold text-indigo-600 transition-all duration-150 ease-in-out rounded hover:pl-10 hover:pr-6 bg-gray-50 group">
          <span
            class="absolute bottom-0 left-0 w-full h-1 transition-all duration-150 ease-in-out bg-indigo-600 group-hover:h-full"></span>
          <span class="absolute right-0 pr-4 duration-200 ease-out group-hover:translate-x-12">
            <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
            </svg>
          </span>
          <span class="absolute left-0 pl-2.5 -translate-x-12 group-hover:translate-x-0 ease-out duration-200">
            <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
            </svg>
          </span>
          <span
            class="relative w-full text-left transition-colors duration-200 ease-in-out group-hover:text-white">Lihat
            Layanan Kami</span>
        </a>
      </div>
    </div>

  </section> --}}

  <section id="hero" class="relative w-full min-h-screen overflow-hidden bg-black flex items-center">
    <!-- Gambar background -->
    <img src="{{ asset('img/hero.webp') }}" alt="Hero Image"
      class="absolute inset-0 w-full h-full object-cover object-[70%_100%] md:object-center md:mask-l-from-20% mask-b-from-90%" />

    <!-- Overlay gelap biar teks terbaca -->
    <div class="absolute inset-0 bg-black/30 md:hidden"></div>

    <!-- Konten teks -->
    <div class="w-full">
      <div class="mx-auto px-4 max-w-7xl mt-16 py-8 md:py-16 sm:px-6 lg:px-8">
        <div class="md:w-1/2 relative z-10 flex flex-col justify-center items-start text-start h-full text-white">
          <h1 class="text-base md:text-lg lg:text-xl [text-shadow:1px_2px_2px_black]">Welcome to</h1>
          <h1 class="text-3xl md:text-5xl lg:text-6xl font-bold [text-shadow:2px_4px_4px_black] leading-tight">
            PT Gajahmada Karya Mandiri</h1>
          <p class="italic text-xs md:text-sm lg:text-base my-2 [text-shadow:1px_2px_2px_black]">We Build More Than
            Structures — We Build Trust</p>
          <p class="text-base md:text-lg lg:text-xl my-4 [text-shadow:1px_2px_2px_black]">
            From concept to completion, we build with precision, dedication, and care to bring your vision to life.
          </p>

          {{-- button --}}
          <a href="/services"
            class="relative inline-flex items-center justify-start py-3 pl-4 pr-12 overflow-hidden font-semibold text-black transition-all duration-150 ease-in-out rounded hover:pl-10 hover:pr-6 bg-gray-50 group mt-5">
            <span
              class="absolute bottom-0 left-0 w-full h-1 transition-all duration-100 ease-in-out bg-merah group-hover:h-full group-active:h-full"></span>
            <span class="absolute right-0 pr-4 duration-200 ease-out group-hover:translate-x-12">
              <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                </path>
              </svg>
            </span>
            <span class="absolute left-0 pl-2.5 -translate-x-12 group-hover:translate-x-0 ease-out duration-200">
              <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                </path>
              </svg>
            </span>
            <span
              class="relative w-full text-left transition-colors duration-200 ease-in-out group-hover:text-white group-active:text-white">Discover
              Our Services</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  {{-- rail text --}}
  <div
    class="scrolling-text overflow-hidden min-h-1/5 w-full bg-black text-black text-shadow-lg text-shadow-white flex items-center py-[5vh] shadow-[0_-1px_0_#000]">
    <div class="rail flex text-[5vh] md:text-[10vh] font-bold">
      <p class="rail-text whitespace-nowrap px-2 py-4">
        construct design foundation</p>
      <p class="rail-text whitespace-nowrap px-2 py-4">
        work build scaffolding blueprint</p>
      <p class="rail-text whitespace-nowrap px-2 py-4">
        plan site structure layout</p>
      <p class="rail-text whitespace-nowrap px-2 py-4">
        project develop architecture</p>
    </div>
  </div>


  <section class="h-screen w-screen"></section>
  <div class="section">
    <div class="cover"></div>
    <div class="reveal-line rounded-3xl"></div>
    <div class="content">
      <h1>Judul Konten</h1>
      <p>Isi konten panjang di sini...</p>
    </div>
  </div>
  <section class="h-screen w-screen"></section>


  {{-- <section id="profil" class="bg-black shadow-[0_-1px_0_#000] text-white">
    <div class="mx-auto px-4 max-w-7xl py-8 md:py-16 sm:px-6 lg:px-8">
      <h1 class="text-3xl md:text-5xl lg:text-6xl font-bold leading-tight">Profil Perusahaan</h1>
      <div class="text-base md:text-lg lg:text-xl my-4">
        <p class="mb-5">
          Berbekal keahlian dan pengalaman dalam menangani proyek-proyek konstruksi berskala menengah hingga besar,
          <strong>PT Gajahmada Karya Mandiri</strong> telah berperan dalam perencanaan dan pembangunan pabrik,
          apartemen,
          gedung komersial,
          hotel, rumah sakit, pemancangan tiang pancang, serta beragam infrastruktur seperti jembatan, kawasan industri,
          jalan tol, jalan raya,
          dan flyover di berbagai wilayah Indonesia.
        </p>

        <p class="mb-5">
          Kami berkomitmen memberikan hasil sesuai kontrak dengan kualitas terbaik.
          Didukung oleh sumber daya manusia profesional dan berpengalaman, kami selalu menghadirkan solusi konstruksi
          yang
          efektif, efisien, dan tepat waktu.
        </p>

        <p class="mb-5">
          Sebagai kontraktor umum, kami menyediakan layanan menyeluruh mulai dari perencanaan, desain, hingga
          pembangunan
          (plan, design, and build),
          termasuk pelaksanaan proyek melalui kerja sama operasi (joint operation) dengan mitra lokal maupun
          internasional.
        </p>
      </div>
    </div>
  </section>

  <section id="visimisi" class="bg-black shadow-[0_-1px_0_#000] text-white">
    <h2>Visi</h2>
    <p>Menjadi Perusahaan Jasa Konstruksi yang terkemuka dan terpecaya dengan menyediakan produk-produk berkualitas
      dan
      menciptakan nilai yang optimal bagi pelanggan, pemegang saham, karyawan dan masyarakat Mendukung kemajuan
      pembangunan bangsa Indonesia melalui pembangunan proyek berskala besar maupun kecil, untuk memberikan kepuasan
      pelanggan melalui ketepatan dalam segi kualitas, waktu penyelesaian pekerjaan dan biaya dengan didukung oleh
      kehandalan Sumber Daya Manusia dan menggunakan teknologi yang paling efisien
    </p>
    <h2>Misi</h2>
    <ul>
      <li>Memastikan kepuasan klien</li>
      <li>Usaha perbaikan pelayanan secara berkesinambungan</li>
      <li>Lugas dan jelas dalam memberi jasa konsultasi</li>
      <li>Tepat waktu dalam pengerjaan</li>
      <li>Informatif</li>
      <li>Patuh terhadap persyaratan klien dan peraturan perundang-undangan</li>
      <li>Lihai dalam melihat peluang perbaikan</li>
      <li>Edukasi terencana untuk peningkatan kompetensi karyawan</li>
    </ul>
  </section>
  <section id="sdm" class="">
    <h2>Sumber Daya Manusia</h2>
    <p>Tim kami mempunyai komitmen tinggi untuk memenuhi kebutuhan proyek dengan keahlian yang mereka miliki. Kami
      mempunyai sumber daya manusia dari berbagai disiplin ilmu untuk memaksimalkan kualitas yang akan kami sampaikan
      ke
      klien.
    </p>
    <p>GKM dapat memenuhi harapan mitra sekarang dan nanti. GKM selalu berusaha menjaga kualitas sumber daya manusia.
      Dengan menciptakan lingkungan perusahaan yang membuat tim kami terus belajar dan berkembang. Menyelesaikan
      pekerjaan dengan cepat dan solutif menjadi komitmen bersama.
    </p>
  </section> --}}
</x-layout>
