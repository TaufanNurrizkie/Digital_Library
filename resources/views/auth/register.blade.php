@vite('resources/css/app.css')

<div class="flex justify-center items-center min-h-screen bg-gradient-to-b from-purple-300 to-pink-300">
    <div class="bg-white p-8 rounded-lg shadow-lg w-[1000px] flex">
        <!-- Gambar Placeholder -->
        <div class="w-1/3 bg-gray-300 rounded-lg"></div>

        <!-- Formulir Pendaftaran -->
        <div class="w-2/3 p-6">
            <h2 class="text-2xl font-bold mb-4 text-center">Daftar Akun</h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Email -->
                <div>
                    <x-text-input id="email" class="block w-full border-gray-300 rounded-lg" type="email" name="email" :value="old('email')" required placeholder="Email"/>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Nama Lengkap -->
                <div class="mt-4">
                    <x-text-input id="name" class="block w-full border-gray-300 rounded-lg" type="text" name="name" :value="old('name')" required placeholder="Nama Lengkap"/>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Kata Sandi -->
                <div class="mt-4">
                    <x-text-input id="password" class="block w-full border-gray-300 rounded-lg" type="password" name="password" required placeholder="Kata Sandi"/>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Konfirmasi Kata Sandi -->
                <div class="mt-4">
                    <x-text-input id="password_confirmation" class="block w-full border-gray-300 rounded-lg" type="password" name="password_confirmation" required placeholder="Konfirmasi Kata Sandi"/>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <!-- Checkbox Kebijakan Privasi -->
                <div class="mt-4 flex items-center">
                    <input type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded" required>
                    <label class="ml-2 text-sm text-gray-600">Dengan mendaftar, kamu menyetujui <a href="#" class="text-blue-500 font-semibold">Kebijakan Privasi</a></label>
                </div>

                <!-- Tombol Daftar -->
                <div class="mt-4">
                    <button type="submit" class="w-full px-4 py-2 text-white bg-blue-600 rounded-lg hover:bg-blue-700">Daftar</button>
                </div>

                <!-- Sudah punya akun? -->
                <div class="text-center mt-4 text-sm">
                    <p>Sudah punya akun? <a href="{{ route('login') }}" class="text-blue-500 font-semibold">Masuk</a></p>
                </div>
            </form>
        </div>
    </div>
</div>