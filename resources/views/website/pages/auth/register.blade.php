<x-website.layouts.auth
    title="Create an account to nanage your URLS"
    formTitle="Create an account"
    formDescription="Please enter your information to create an account"
>
    <form
        method="POST"
        action="{{ route('auth.register') }}"
        class="w-[94%] sm:w-[400px] md:w-[320px] lg:w-[420px] flex flex-col space-y-4 text-dark/90"
        novalidate
    >
        @csrf

        <!-- Name -->
        <div class="flex flex-col space-y-2 text-sm">
            <!-- Label -->
            <label for="name">
                Name
            </label>

            <!-- Input -->
            <input
                type="text"
                name="name"
                id="name"
                class="border border-dark/20 rounded-lg shadow-sm px-3 py-2 focus:outline"
                placeholder="John Doe"
                value="{{ old('name') }}"
                maxlength="255"
                required
            >

            <!-- Error Message -->
            @error('name')
                <small class="text-xs text-primary">
                    {{ $message }}
                </small>
            @enderror
        </div>

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
                placeholder="johndoe@example.com"
                value="{{ old('email') }}"
                maxlength="255"
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

            <!-- Input -->
            <div class="w-full relative flex flex-col space-y-2">
                <input
                    type="password"
                    name="password"
                    id="password"
                    class="password-input w-full border border-dark/20 rounded-lg shadow-sm px-3 py-2 focus:outline placeholder:leading-8"
                    placeholder="•••••••••••"
                    maxlength="255"
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

        <!-- Password Confirmation -->
        <div class="flex flex-col space-y-2 text-sm">
            <!-- Label -->
            <label for="password-confirmation">
                Password Confirmation
            </label>

            <!-- Input & Password Visibility Togglers -->
            <div class="w-full relative flex flex-col space-y-2">
                <!-- Input -->
                <input
                    type="password"
                    name="password_confirmation"
                    id="password-confirmation"
                    class="password-input w-full border border-dark/20 rounded-lg shadow-sm px-3 py-2 focus:outline placeholder:leading-8"
                    placeholder="•••••••••••"
                    maxlength="255"
                    required
                >

                <!-- Error Message -->
                @error('password_confirmation')
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

        <!-- Accept Terms of Use & Privacy Policy -->
        <div class="flex items-center space-x-2 text-sm">
            <!-- Input -->
            <input
                type="checkbox"
                name="accept"
                id="accept"
                style="accent-color: #E94F37;"
                @checked(old('accept'))
                required
            >

            <!-- Label & Links -->
            <label for="accept">
                I agree to the

                <!-- Terms of Use -->
                <a
                    target="_blank"
                    href="{{ route('website.pages.terms') }}"
                    class="text-primary hover:underline"
                >
                    Terms of Use
                </a>

                and

                <!-- Privacy Policy -->
                <a
                    target="_blank"
                    href="{{ route('website.pages.privacy') }}"
                    class="text-primary hover:underline"
                >
                    Privacy Policy
                </a>
            </label>
        </div>

        <!-- Error Message -->
        @error('accept')
            <p class="text-xs text-red-500 -mt-1">
                {{ $message }}
            </p>
        @enderror

        <!-- Submit -->
        <div class="text-sm">
            <!-- Button -->
            <button
                type="submit"
                class="w-full bg-primary hover:bg-red-600 rounded-lg p-2.5 font-medium text-center text-white cursor-pointer transition-colors duration-200"
            >
                Create Account
            </button>
        </div>

        <!-- Sign In -->
        <div class="mt-4 flex justify-center items-center space-x-1 text-sm">
            <!-- Text -->
            <p class="text-dark/90">
                Already have an account?
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
