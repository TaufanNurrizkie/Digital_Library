<header class="bg-white shadow p-4">
    <div class="container mx-auto flex items-center justify-between">
        <!-- Kiri: Kategori dan Cari Buku -->
        <div class="flex items-center space-x-4">
            <div class="relative group">
                <div class="flex items-center space-x-2 cursor-pointer">
                    <div class="bg-gray-300 w-8 h-8 rounded-full"></div>
                    <span class="font-bold text-xl">Kategori </span>
                </div>
                <!-- Dropdown menu -->
                <div class="absolute bg-white shadow-lg rounded-lg mt-2 w-40 hidden group-hover:block z-50">
                    <ul class="py-2">
                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Buku</li>
                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Majalah</li>
                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Koran</li>
                    </ul>
                </div>
            </div>

            <div class="relative">
                <input type="text" placeholder="Cari Buku" class="border border-gray-300 rounded-2xl px-4 py-2 w-96 focus:outline-none">
            </div>
            
        </div>

        <!-- Kanan: Ikon dan Tombol -->
        <div class="flex items-center space-x-4">
            <div class="flex space-x-4">
                <button class="p-2 rounded-full hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#91A8D2" d="M17 18a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2c0-1.11.89-2 2-2M1 2h3.27l.94 2H20a1 1 0 0 1 1 1c0 .17-.05.34-.12.5l-3.58 6.47c-.34.61-1 1.03-1.75 1.03H8.1l-.9 1.63l-.03.12a.25.25 0 0 0 .25.25H19v2H7a2 2 0 0 1-2-2c0-.35.09-.68.24-.96l1.36-2.45L3 4H1zm6 16a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2c0-1.11.89-2 2-2m9-7l2.78-5H6.14l2.36 5z"/></svg>
                </button>
                <button class="p-2 rounded-full hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#91A8D2" d="M10.146 3.248a2 2 0 0 1 3.708 0A7 7 0 0 1 19 10v4.697l1.832 2.748A1 1 0 0 1 20 19h-4.535a3.501 3.501 0 0 1-6.93 0H4a1 1 0 0 1-.832-1.555L5 14.697V10c0-3.224 2.18-5.94 5.146-6.752M10.586 19a1.5 1.5 0 0 0 2.829 0zM12 5a5 5 0 0 0-5 5v5a1 1 0 0 1-.168.555L5.869 17H18.13l-.963-1.445A1 1 0 0 1 17 15v-5a5 5 0 0 0-5-5"/></svg>
                </button>
            </div>

            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Masuk</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="border border-blue-500 text-blue-500 px-4 py-2 rounded-lg">Daftar</a>
                    @endif
                @endauth
            @endif

        </div>
    </div>
</header>

@yield('content')
