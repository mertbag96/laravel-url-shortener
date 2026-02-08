<x-website.layouts.auth
    title="Login to manage your URLs"
    formTitle="Welcome back"
    formDescription="Please enter your credentials to sign in"
>
    <form
        method="POST"
        action="{{ route('auth.login') }}"
        class="w-[94%] sm:w-[400px] md:w-[320px] lg:w-[420px] flex flex-col space-y-4 text-dark/90"
    >
        @csrf

        <!-- Email -->
        <div class="flex flex-col space-y-2 text-sm">
            <!-- Label -->
            <label for="email">
                Email address
            </label>

            <!-- Input -->
            <input
                type="email"
                name="email"
                id="email"
                class="border border-dark/20 rounded-lg shadow-sm px-3 py-2 focus:outline"
                placeholder="name@example.com"
                value="{{ old('email') }}"
                required
            >

            <!-- Error Message -->
            @error('email')
                <small class="text-xs text-primary">
                    {{ $message }}
                </small>
            @enderror
        </div>

        <!-- Password -->
        <div class="flex flex-col space-y-2 text-sm">
            <!-- Label -->
            <label for="password">
                Password
            </label>

            <!-- Input & Password Visibility Togglers -->
            <div class="w-full relative flex flex-col space-y-2">
                <!-- Input -->
                <input
                    type="password"
                    name="password"
                    id="password"
                    class="password-input w-full border border-dark/20 rounded-lg shadow-sm px-3 py-2 focus:outline placeholder:leading-8"
                    placeholder="•••••••••••"
                    required
                >

                <!-- Error Message -->
                @error('password')
                    <small class="text-xs text-primary">
                        {{ $message }}
                    </small>
                @enderror

                <!-- Show Password -->
                <i
                    data-lucide="eye"
                    class="password-eye absolute top-2.5 right-2.5 w-5 h-5 text-dark/50 hover:text-primary/90 cursor-pointer transition duration-200"
                ></i>

                <!-- Hide Password -->
                <i
                    data-lucide="eye-off"
                    class="password-eye-off hidden absolute top-2.5 right-2.5 w-5 h-5 text-dark/50 hover:text-primary/90 cursor-pointer transition duration-200"
                ></i>
            </div>
        </div>

        <!-- Remember Me & Forgot Password -->
        <div class="flex justify-between items-end text-sm">
            <!-- Remember Me  -->
            <div class="flex items-center space-x-2">
                <!-- Input -->
                <input
                    type="checkbox"
                    name="remember"
                    id="remember"
                    style="accent-color: #E94F37;"
                >

                <!-- Label -->
                <label for="remember">
                    Remember me
                </label>
            </div>

            <!-- Forgot Password -->
            <a
                href="{{ route('website.pages.auth.forgot-password') }}"
                class="text-xs text-primary hover:underline"
            >
                Forgot password?
            </a>
        </div>

        <!-- Submit -->
        <div class="text-sm">
            <!-- Button -->
            <button
                type="submit"
                class="w-full bg-primary hover:bg-red-600 rounded-lg p-2.5 font-medium text-center text-white cursor-pointer transition-colors duration-200"
            >
                Log in
            </button>
        </div>

        <!-- Sign Up -->
        <div class="mt-4 flex justify-center items-center space-x-1 text-sm">
            <!-- Text -->
            <p class="text-dark/90">
                Don't have an account?
            </p>

            <!-- Link -->
            <a
                href="{{ route('website.pages.auth.register') }}"
                class="text-primary hover:underline"
            >
                Sign up
            </a>
        </div>
    </form>
</x-website.layouts.auth>
