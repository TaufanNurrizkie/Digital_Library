@vite('resources/css/app.css')

    <div class="flex items-center justify-center min-h-screen bg-gradient-to-b from-purple-300 to-pink-200">
        <div class="bg-white p-10 rounded-2xl shadow-lg flex w-3/4 max-w-4xl">
            <!-- Image Placeholder -->
            <div class="w-1/2 bg-gray-300 rounded-xl"></div>
            
            <!-- Form Section -->
            <div class="w-1/2 px-8">
                <h2 class="text-2xl font-semibold text-center mb-6">Masuk Akun</h2>
                
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />
                
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    
                    <!-- Email Address -->
                    <div>
                        <x-text-input id="email" class="w-full px-4 py-2 border rounded-lg" type="email" name="email" :value="old('email')" placeholder="Email" required autofocus />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    
                    <!-- Password -->
                    <div class="mt-4">
                        <x-text-input id="password" class="w-full px-4 py-2 border rounded-lg" type="password" name="password" placeholder="Kata Sandi" required />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    
                    <!-- Forgot Password -->
                    <div class="text-right mt-2">
                        <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">Lupa Kata Sandi</a>
                    </div>
                    
                    <!-- Login Button -->
                    <div class="mt-4">
                        <button class="w-full py-2 border border-blue-500 text-blue-500 rounded-lg hover:bg-blue-100">Masuk</button>
                    </div>
                    
                    <div class="text-center my-4 text-gray-600">Atau</div>
                    
                    <!-- Google Login -->
                    <div>
                        <button class="w-full py-2 border rounded-lg flex items-center justify-center">
                            <img src="img/googleLogo.png" class="w-5 h-5 mr-2" alt="Google Logo">
                            Masuk Dengan Google
                        </button>
                    </div>
                    
                    <div class="text-center mt-4 text-sm">
                        Belum punya akun? <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Daftar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

