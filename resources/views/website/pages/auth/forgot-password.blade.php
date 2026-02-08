<x-website.layouts.auth
    title="Forgot your password? No worries, we'll send you a password reset link"
    formTitle="Forgot your password?"
    formDescription="Please enter your email address to receive a password reset link"
>
    <form
        action="#"
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
                required
            >

            <!-- Error Message -->
            @error('email')
                <small class="text-xs text-primary">
                    {{ $message }}
                </small>
            @enderror
        </div>

        <!-- Submit -->
        <div class="text-sm">
            <!-- Button -->
            <button
                type="submit"
                class="w-full bg-primary hover:bg-red-600 rounded-lg p-2.5 font-medium text-center text-white cursor-pointer transition-colors duration-200"
            >
                Send Reset Link
            </button>
        </div>

        <!-- Sign In -->
        <div class="mt-4 flex justify-center items-center space-x-1 text-sm">
            <!-- Text -->
            <p class="text-dark/90">
                Do you remember your password?
            </p>

            <!-- Link -->
            <a
                href="{{ route('website.pages.auth.login') }}"
                class="text-primary hover:underline"
            >
                Sign in
            </a>
        </div>
    </form>
</x-website.layouts.auth>
