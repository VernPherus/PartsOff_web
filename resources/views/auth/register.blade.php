<x-app-layout>
    <div class="w-96 mx-auto p-6 my-16">
        <form method="POST" action="{{ route('register') }}" class="border border-gray-200 rounded-lg shadow bg-white p-6 w-[400px] mx-auto p-6 my-16">
            <h2 class="text-2xl font-semibold text-center mb-5">
                Create an account
            </h2>
            <p class="text-center text-gray-500 mb-6">
                or
                <a href="{{ route('login') }}" class="text-sm text-purple-700 hover:text-purple-600">
                    login with existing account
                </a>
            </p>

            @csrf

            @if (session('error'))
                <div class="py-2 px-3 bg-red-500 text-white mb-4 rounded">
                    {{ session('error') }}
                </div>
            @endif

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')"/>

            <div class="mb-4">
                <x-input placeholder="Your name" type="text" name="name" :value="old('name')" required autofocus />
            </div>
            <div class="mb-4">
                <x-input placeholder="Your Email" type="email" name="email" :value="old('email')" required />
            </div>
            <div class="mb-4">
                <x-input placeholder="Password" type="password" name="password" required autocomplete="new-password" />
            </div>
            <div class="mb-5">
                <x-input placeholder="Repeat Password" type="password" name="password_confirmation" required />
            </div>

            <button class="btn-primary bg-emerald-500 hover:bg-emerald-600 active:bg-emerald-700 w-full">
                Signup
            </button>
        </form>
    </div>
</x-app-layout>
