@extends('layouts.marketplaceLayout')
{{-- @include('layouts.loader') --}}

@section('content')

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- Header Section -->
  <section data-aos="fade-up"
  data-aos-duration="1500" data-aos-easing="linear" class="relative flex items-center justify-center py-12 bg-white text-black">
    <div class="container mx-auto flex flex-col md:flex-row items-center px-6">
      <div  class="md:w-1/2 text-center md:text-left">
        <h1 class="text-4xl font-extrabold text-gray-800">Solusi Digital Library untuk Semua</h1>
        <p class="mt-4 text-lg text-gray-600">Temukan buku terbaik untuk meningkatkan wawasan dan pengetahuan Anda.</p>
        <div class="mt-6 flex flex-col md:flex-row md:space-x-4">
          <a href="/books" class="px-6 py-3 bg-yellow-500 text-white font-semibold rounded-lg shadow-md hover:bg-yellow-600 transition">Jelajahi Koleksi</a>
          <a href="/contact" class="mt-3 md:mt-0 px-6 py-3 bg-white text-green-700 font-semibold border border-green-700 rounded-lg shadow-md hover:bg-green-100 transition">Hubungi Kami</a>
        </div>
      </div>
      <div  class="md:w-1/2 flex justify-center mt-6 md:mt-0">
        <img src="{{ asset('img/perpusHeader.png') }}" alt="Library Image" class="w-full max-w-lg rounded-lg shadow-lg object-cover">
      </div>
    </div>
  </section>

  <!-- Categories Section -->
  <section   class="px-8 mt-12 text-center">
    <h2 class="text-3xl font-bold text-blue-900">Kategori Buku</h2>
    <div  class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-6">
      <div class="bg-white p-6 rounded-lg  text-xl font-semibold flex flex-col items-center">
        <svg class="w-12 h-12 mb-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
         <path d="M16.613 16.085C13.98 17.568 12.477 20.64 12 21.5V8c.415-.746 1.602-2.884 3.632-4.336c.855-.612 1.282-.918 1.825-.64c.543.28.543.896.543 2.127v8.84c0 .666 0 .999-.137 1.232c-.136.234-.508.443-1.25.862"/><path d="M12 7.806c-.687-.722-2.678-2.436-6.02-3.036c-1.692-.305-2.538-.457-3.26.126C2 5.48 2 6.426 2 8.321v6.809c0 1.732 0 2.598.463 3.139c.462.54 1.48.724 3.518 1.09c1.815.326 3.232.847 4.258 1.37c1.01.514 1.514.771 1.761.771s.752-.257 1.76-.771c1.027-.523 2.444-1.044 4.26-1.37c2.036-.366 3.055-.55 3.517-1.09c.463-.541.463-1.407.463-3.14V8.322c0-1.894 0-2.841-.72-3.425C20.557 4.313 19 4.77 18 5.5"/>
        </svg>
        Fiksi
      </div>
      <div class="bg-white p-6 rounded-lg  text-xl font-semibold flex flex-col items-center">
        <svg class="w-12 h-12 mb-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path fill="currentColor" d="M6.23 21q-.929 0-1.58-.64Q4 19.722 4 18.809V5.23q0-.93.65-1.58Q5.302 3 6.23 3h10.386v14.616H6.23q-.502 0-.866.341Q5 18.3 5 18.804t.365.85t.866.346H19V5h1v16zm2.155-4.384h7.23V4h-7.23zm-1 0V4H6.23q-.523 0-.877.365Q5 4.728 5 5.23v11.79q.27-.171.574-.288t.657-.117zM5 4v13.021z"/>
        </svg>
        Non-Fiksi
      </div>
      <div class="bg-white p-6 rounded-lg  text-xl font-semibold flex flex-col items-center">
        <svg class="w-12 h-12 mb-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path d="M20.5 15v-5c0-2.828 0-4.243-.879-5.121C18.743 4 17.328 4 14.5 4h-5c-2.828 0-4.243 0-5.121.879C3.5 5.757 3.5 7.172 3.5 10v5" opacity="0.5"/><path stroke-linecap="round" d="M5 20h14a3 3 0 0 0 3-3v-1a1 1 0 0 0-1-1h-4.333a2 2 0 0 0-1.2.4l-.934.7a2 2 0 0 1-1.2.4h-2.666a2 2 0 0 1-1.2-.4l-.934-.7a2 2 0 0 0-1.2-.4H3a1 1 0 0 0-1 1v1a3 3 0 0 0 3 3Z"/>
        </svg>
        Teknologi
      </div>
      <div class="bg-white p-6 rounded-lg  text-xl font-semibold flex flex-col items-center">
        <svg class="w-12 h-12 mb-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path fill="currentColor" d="M7.808 20h8.384v-3q0-1.766-1.213-3.017Q13.766 12.73 12 12.73t-2.979 1.254T7.808 17zM12 11.27q1.766 0 2.979-1.255T16.192 7V4H7.808v3q0 1.766 1.213 3.017Q10.234 11.27 12 11.27M5.5 21q-.213 0-.356-.144T5 20.499t.144-.356T5.5 20h1.308v-3q0-1.852 1.135-3.285T10.853 12q-1.774-.3-2.91-1.724T6.808 7V4H5.5q-.213 0-.356-.144T5 3.499t.144-.356T5.5 3h13q.213 0 .356.144t.144.357t-.144.356T18.5 4h-1.308v3q0 1.852-1.135 3.276T13.147 12q1.774.28 2.91 1.715q1.135 1.433 1.135 3.285v3H18.5q.213 0 .356.144t.144.357t-.144.356T18.5 21zM12 4"/>

        </svg>
        Sejarah
      </div>
    </div>
  </section>

<!-- About Section -->
<section  class="px-8 mt-12 text-center">
  <h2 class="text-3xl font-bold text-blue-900">Tentang Digital Library</h2>
  <div class="flex flex-col md:flex-row items-center mt-6 gap-8">
    
    <!-- Gambar -->
    <div data-aos="fade-right"
    data-aos-offset="300"
     data-aos-duration="500"
     class="w-full md:w-1/2 flex justify-center">
      <img src="{{ asset('img/about.png') }}" alt="Tentang Kami" class="rounded-lg shadow-md w-full md:w-[90%] lg:w-[80%]">
    </div>

    <!-- Deskripsi -->
    <div data-aos="fade-left"
    data-aos-offset="300"
     data-aos-duration="500"
     class="w-full md:w-1/2 text-left">
      <p class="text-lg text-gray-700 leading-relaxed">
        Digital Library adalah platform perpustakaan online yang menyediakan berbagai koleksi buku elektronik 
        dalam berbagai kategori. Kami berkomitmen untuk memberikan akses mudah dan cepat ke sumber daya pendidikan 
        bagi semua orang.
      </p>
      <p class="mt-4 text-lg text-gray-700 leading-relaxed">
        Dengan teknologi canggih, pencarian buku menjadi lebih efisien, dan pengguna dapat membaca buku kapan saja, di mana saja.
      </p>
      <button class="mt-6 px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 transition-all">
        Pelajari Lebih Lanjut
      </button>
    </div>

  </div>
</section>

  <!-- Featured Books -->
  <section class="px-8 mt-12 text-center mb-2">
    <h2 class="text-3xl font-bold text-blue-900 mb-4">Koleksi Unggulan</h2>
    <div class="overflow-x-auto">
      <div class="grid grid-cols-5 gap-4 my-4">
        @foreach($topbooks as $book)
            <a href="{{ route('books.show', $book->id) }}" class="border rounded-lg p-2 flex flex-col items-center bg-white shadow-md hover:shadow-lg transition-shadow duration-300" style="width: 214px; height: 333px;">
                <img src="{{ asset('storage/'.$book->cover_img) }}" alt="{{ $book->title }}" class="w-full h-60 object-cover rounded mb-4">
                <div class="text-start">
                    <p class="font-semibold">{{ $book->title }}</p>
                    <p class="text-sm text-gray-700">{{ $book->author }}</p>
                </div>
            </a>
        @endforeach
    </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section data-aos="fade-up" data-aos-duration="700" class=" text-black py-16 text-center mt-12">
    <div class="text-center py-10">
        <h1 class="text-3xl font-bold">
            AYO BERGABUNG DENGAN 
            <span class="text-green-500">KAMI</span>
        </h1>
        <p class="text-gray-600 mt-2">Keuntungan Menjadi Anggota Perpustakaan</p>
    </div>

    <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8 px-4 text-center">
        <!-- Card 1 -->
        <div class="flex flex-col items-center">
            <img src="{{ asset('img/joinLogo2.png') }}" class="w-24 h-24" alt="Akses Koleksi">
            <p class="mt-4 font-semibold">Akses ke berbagai koleksi menarik yang bisa dipinjam</p>
        </div>

        <!-- Card 2 -->
        <div class="flex flex-col items-center">
            <img src="{{ asset('img/joinLogo4.png') }}" class="w-24 h-24" alt="Komunitas">
            <p class="mt-4 font-semibold">Bergabung dengan ribuan komunitas pengguna aktif</p>
        </div>

        <!-- Card 3 -->
        <div class="flex flex-col items-center">
            <img src="{{ asset('img/joinLogo3.png') }}" class="w-24 h-24" alt="Informasi Menarik">
            <p class="mt-4 font-semibold">Dapatkan berbagai informasi menarik</p>
        </div>

        <!-- Card 4 -->
        <div class="flex flex-col items-center">
            <img src="{{ asset('img/joinLogo1.png') }}" class="w-24 h-24" alt="Kegiatan">
            <p class="mt-4 font-semibold">Ikuti berbagai kegiatan dan acara menarik bersama anggota lain</p>
        </div>
    </div>
  </section>

  <!-- Work Process -->
  <section class="px-8 mt-12 text-center">
    <h2 class="text-3xl font-bold text-blue-900">Proses Kerja Standar</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
      <div class="bg-gray-200 p-6 rounded-lg shadow-md text-lg font-semibold">Pilih Buku</div>
      <div class="bg-gray-200 p-6 rounded-lg shadow-md text-lg font-semibold">Baca Secara Digital</div>
      <div class="bg-gray-200 p-6 rounded-lg shadow-md text-lg font-semibold">Bagikan & Review</div>
    </div>
  </section> 
<script>
  AOS.init();
</script>
@endsection
