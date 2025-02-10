<header class="bg-white shadow">
    <!-- Header Utama -->
    <div class="p-4">
        <div class="container mx-auto flex items-center justify-between">
            <!-- Kiri: Foto Profil -->
            <div class="flex items-center space-x-4">
                <div class="bg-gray-300 w-10 h-10 rounded-full"></div> <!-- Foto Profil -->
            </div>
            
            <!-- Tengah: Navigasi Utama -->
            <!-- Tengah: Navigasi Utama -->
<nav class="flex space-x-6 text-gray-800 font-semibold">
    <a href="#" class="hover:text-blue-500 relative after:content-[''] after:absolute after:w-full after:h-[2px] after:bg-blue-500 after:left-0 after:bottom-0 after:scale-x-0 after:transition-transform after:duration-300 hover:after:scale-x-100">Home</a>
    <a href="#" class="hover:text-blue-500 relative after:content-[''] after:absolute after:w-full after:h-[2px] after:bg-blue-500 after:left-0 after:bottom-0 after:scale-x-0 after:transition-transform after:duration-300 hover:after:scale-x-100">Baca Online</a>
    <a href="#" class="hover:text-blue-500 relative after:content-[''] after:absolute after:w-full after:h-[2px] after:bg-blue-500 after:left-0 after:bottom-0 after:scale-x-0 after:transition-transform after:duration-300 hover:after:scale-x-100">Marketplace</a>
    <a href="#" class="hover:text-blue-500 relative after:content-[''] after:absolute after:w-full after:h-[2px] after:bg-blue-500 after:left-0 after:bottom-0 after:scale-x-0 after:transition-transform after:duration-300 hover:after:scale-x-100">Pinjam</a>
</nav>

            
            <!-- Kanan: Login/Daftar atau Dashboard -->
            <div class="flex space-x-4">
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
    </div>

    <!-- Sub-header: Kategori, Pencarian, Keranjang, dan Lonceng -->
    <div class="bg-gray-50 py-4 shadow">
        <div class="container mx-auto flex items-center justify-center space-x-8">
            <!-- Kategori -->
            <div class="relative group">
                <div class="flex items-center space-x-2 cursor-pointer">
                    <span class="font-bold text-lg text-gray-800">Kategori</span>
                    <svg class="w-4 h-4 text-gray-600 group-hover:text-gray-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M6 9l6 6l6-6" />
                    </svg>
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

            <!-- Pencarian -->
            <div class="relative">
                <input type="text" placeholder="Cari Buku" class="border border-gray-300 rounded-2xl px-4 py-2 pl-10 w-[500px] focus:outline-none focus:ring-2 focus:ring-blue-400">
                <div class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="#91A8D2" d="m19.6 21l-6.3-6.3q-.75.6-1.725.95T9.5 16q-2.725 0-4.612-1.888T3 9.5t1.888-4.612T9.5 3t4.613 1.888T16 9.5q0 1.1-.35 2.075T14.7 13.3l6.3 6.3zM9.5 14q1.875 0 3.188-1.312T14 9.5t-1.312-3.187T9.5 5T6.313 6.313T5 9.5t1.313 3.188T9.5 14"/>
                    </svg>
                </div>
            </div>
            

            <!-- Keranjang -->
            <button class="p-2 rounded-full hover:bg-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#91A8D2" d="M17 18a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2c0-1.11.89-2 2-2M1 2h3.27l.94 2H20a1 1 0 0 1 1 1c0 .17-.05.34-.12.5l-3.58 6.47c-.34.61-1 1.03-1.75 1.03H8.1l-.9 1.63l-.03.12a.25.25 0 0 0 .25.25H19v2H7a2 2 0 0 1-2-2c0-.35.09-.68.24-.96l1.36-2.45L3 4H1zm6 16a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2c0-1.11.89-2 2-2m9-7l2.78-5H6.14l2.36 5z"/></svg>
            </button>

            <!-- Lonceng -->
            <button class="p-2 rounded-full hover:bg-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#91A8D2" d="M10.146 3.248a2 2 0 0 1 3.708 0A7 7 0 0 1 19 10v4.697l1.832 2.748A1 1 0 0 1 20 19h-4.535a3.501 3.501 0 0 1-6.93 0H4a1 1 0 0 1-.832-1.555L5 14.697V10c0-3.224 2.18-5.94 5.146-6.752M10.586 19a1.5 1.5 0 0 0 2.829 0zM12 5a5 5 0 0 0-5 5v5a1 1 0 0 1-.168.555L5.869 17H18.13l-.963-1.445A1 1 0 0 1 17 15v-5a5 5 0 0 0-5-5"/></svg>
            </button>
        </div>
    </div>
</header>

<!-- Konten -->
<main>
    @yield('content')
</main>
