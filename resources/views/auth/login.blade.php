<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>

    <div class="mt-6 flex flex-col items-center space-y-4">
        <a href="{{ url('/auth/google') }}"
            class="flex items-center bg-white border border-gray-300 rounded-lg px-6 py-3 text-gray-800 hover:bg-gray-100 transition duration-200">
            <img src="https://img.icons8.com/color/24/google-logo.png" alt="Google Icon" class="w-6 h-6 mr-2">
            <span>{{ __('Login with Google') }}</span>
        </a>
        <a href="{{ url('/auth/facebook') }}"
            class="flex items-center bg-blue-600 rounded-lg px-6 py-3 text-white hover:bg-blue-700 transition duration-200">
            <img src="https://img.icons8.com/color/24/facebook-new.png" alt="Facebook Icon" class="w-6 h-6 mr-2">
            <span>{{ __('Login with Facebook') }}</span>
        </a>
    </div>
</x-guest-layout>
