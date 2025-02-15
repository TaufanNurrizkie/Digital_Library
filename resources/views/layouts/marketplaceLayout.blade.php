<header class="bg-white shadow p-4">
    <div class="container mx-auto flex items-center justify-between">
        <!-- Kiri: Kategori dan Cari Buku -->
        <div class="flex items-center space-x-4">
            <div class="relative group">
                <div class="flex items-center space-x-2 cursor-pointer">
                    <div class="w-20 h-20 rounded-full flex items-center justify-center">
                        <img src="{{ asset('img/Logo.png') }}" alt="Icon" class="w-20 h-20">
                    </div>
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
                <a href="{{ route('keranjang') }}" class="p-2 rounded-full hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#91A8D2" d="M17 18a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2c0-1.11.89-2 2-2M1 2h3.27l.94 2H20a1 1 0 0 1 1 1c0 .17-.05.34-.12.5l-3.58 6.47c-.34.61-1 1.03-1.75 1.03H8.1l-.9 1.63l-.03.12a.25.25 0 0 0 .25.25H19v2H7a2 2 0 0 1-2-2c0-.35.09-.68.24-.96l1.36-2.45L3 4H1zm6 16a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2c0-1.11.89-2 2-2m9-7l2.78-5H6.14l2.36 5z"/></svg>
                </a>
                <a href="/notifications" class="p-2 rounded-full hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#91A8D2" d="M10.146 3.248a2 2 0 0 1 3.708 0A7 7 0 0 1 19 10v4.697l1.832 2.748A1 1 0 0 1 20 19h-4.535a3.501 3.501 0 0 1-6.93 0H4a1 1 0 0 1-.832-1.555L5 14.697V10c0-3.224 2.18-5.94 5.146-6.752M10.586 19a1.5 1.5 0 0 0 2.829 0zM12 5a5 5 0 0 0-5 5v5a1 1 0 0 1-.168.555L5.869 17H18.13l-.963-1.445A1 1 0 0 1 17 15v-5a5 5 0 0 0-5-5"/></svg>
                </a>
            </div>

            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/profile') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Profile</a>
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

        <!-- Footer -->
        <div class=" mx-auto px-4 py-12 z-9999">
            <div class="bg-white  rounded-lg flex flex-wrap md:flex-nowrap p-8">
                <!-- Contact Information -->
                <div class="w-full md:w-1/2">
                    <div class="w-10 h-1 bg-[#91A8D2] mb-2 "></div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Hubungi Kami</h2>
                    <p class="text-gray-600 mb-6">Hubungi kami melalui formulir di samping, atau melalui kontak di bawah</p>
        
                    <div class="space-y-4">
                        <!-- Address -->
                        <div class="flex items-start">
                            <div class="text-[#91A8D2] mr-4">
                                <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">Alamat</h3>
                                <p class="text-[#91A8D2]">Jl. Sunan Kalijaga No.2, Sumber, Kec. Sumber, Kabupaten Cirebon, Jawa Barat 45611</p>
                            </div>
                        </div>
        
                        <!-- Phone -->
                        <div class="flex items-start">
                            <div class="text-[#91A8D2] mr-4">
                                <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M6.62 10.79a15.91 15.91 0 006.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.26 1.12.31 2.33.48 3.57.48.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.24.17 2.45.48 3.57.1.35.01.74-.26 1.02l-2.2 2.2z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">Phone</h3>
                                <p class="text-[#91A8D2]">(0231) 321677 / 0231 321792 atau</p>
                            </div>
                        </div>
        
                        <!-- Email -->
                        <div class="flex items-start">
                            <div class="text-[#91A8D2] mr-4">
                                <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 4c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2zm0 14c-2.67 0-5.2-1.06-7.07-2.93C6.93 15.86 8.93 14.5 12 14.5s5.07 1.36 7.07 3.57C17.2 18.94 14.67 20 12 20z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">Email</h3>
                                <p class="text-[#91A8D2]">pmtkc@cirebonkab.go.id</p>
                            </div>
                        </div>
                    </div>
                </div>
        
                <!-- Map Section -->
                <div class="w-full md:w-1/2 mt-8 md:mt-0 md:ml-8">
                    <iframe class="w-full h-64 rounded-md" src="https://maps.google.com/maps?q=Jl.%20Sunan%20Kalijaga%20No.2,%20Sumber,%20Kec.%20Sumber,%20Kabupaten%20Cirebon,%20Jawa%20Barat&output=embed" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        
        

        
        
        
        
        <!-- Tambahkan jQuery dan jQuery UI dari CDN -->

        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        
        
        <script>
            $(function() {
                $('#yearPicker').datepicker({
                    changeYear: true,
                    showButtonPanel: true,
                    dateFormat: 'yy', // Format hanya tahun
                    onClose: function(dateText, inst) {
                        var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                        $(this).datepicker('setDate', new Date(year, 1));
                    }
                });
            });
        </script>
