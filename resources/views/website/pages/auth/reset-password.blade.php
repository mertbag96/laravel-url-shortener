<x-website.layouts.auth
    title="Reset your password and continue managing your URLs"
    formTitle="Reset your password"
    formDescription="Please reset your password by entering a strong password"
>
    <form
        action="#"
        class="w-[94%] sm:w-[400px] md:w-[320px] lg:w-[420px] flex flex-col space-y-4 text-dark/90"
    >
        @csrf
        <!-- Password -->
        <div class="flex flex-col space-y-2 text-sm">
            <!-- Label -->
            <label for="password">
                Password
            </label>

            <!-- Input & Password Visibility Togglers -->
            <div class="w-full relative">
                <!-- Input -->
                <input
                    type="password"
                    name="password"
                    id="password"
                    class="password-input w-full border border-dark/20 rounded-lg shadow-sm px-3 py-2 focus:outline placeholder:leading-8"
                    placeholder="•••••••••••"
                    required
                >

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

            <!-- Error Message -->
            @error('password')
                <small class="text-xs text-primary">
                    {{ $message }}
                </small>
            @enderror
        </div>

        <!-- Password Confirmation -->
        <div class="flex flex-col space-y-2 text-sm">
            <!-- Label -->
            <label for="password-confirmation">
                Password Confirmation
            </label>

            <!-- Input & Password Visibility Togglers -->
            <div class="w-full relative">
                <!-- Input -->
                <input
                    type="password"
                    name="password_confirmation"
                    id="password-confirmation"
                    class="password-input w-full border border-dark/20 rounded-lg shadow-sm px-3 py-2 focus:outline placeholder:leading-8"
                    placeholder="•••••••••••"
                    required
                >

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

            <!-- Error Message -->
            @error('password_confirmation')
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
                Reset Password
            </button>
        </div>

        <!-- Contact -->
        <div class="mt-4 flex justify-center items-center space-x-1 text-sm">
            <!-- Text -->
            <p class="text-dark/90">
                Do you need help?
            </p>

            <!-- Link -->
            <a
                href="{{ route('website.contact.show') }}"
                class="text-primary hover:underline"
            >
                Contact us
            </a>
        </div>
    </form>
</x-website.layouts.auth>
