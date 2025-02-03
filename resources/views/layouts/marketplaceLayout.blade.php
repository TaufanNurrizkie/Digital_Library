<header class="bg-white shadow p-4">
    <div class="container mx-auto flex items-center justify-between">
        <!-- Kiri: Kategori dan Cari Buku -->
        <div class="flex items-center space-x-4">
            <div class="flex items-center space-x-2">
                <div class="bg-gray-300 w-8 h-8 rounded-full"></div>
                <span class="font-bold text-xl">Kategori</span>
            </div>

            <div class="relative">
                <input type="text" placeholder="Cari Buku" class="border border-gray-300 rounded-lg px-4 py-2 w-96 focus:outline-none">
            </div>
        </div>

        <!-- Kanan: Ikon dan Tombol -->
        <div class="flex items-center space-x-4">
            <div class="flex space-x-4">
                <button>🛒</button>
                <button>🔔</button>
            </div>
            <button class="bg-blue-500 text-white px-4 py-2 rounded-lg">Masuk</button>
            <button class="border border-blue-500 text-blue-500 px-4 py-2 rounded-lg">Daftar</button>
        </div>
    </div>
</header>


@yield('content')