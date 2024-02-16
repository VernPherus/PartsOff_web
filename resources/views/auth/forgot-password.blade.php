<x-app-layout>
    <div class="w-96 mx-auto p-6 my-16">
        <div class="border border-gray-200 rounded-lg shadow bg-white p-6 w-[400px] mx-auto p-6 my-16">
            <form action="{{ route('password.email') }}" method="post">
                @csrf
                <h2 class="text-2xl font-semibold text-center mb-5">
                    Enter your Email to reset password
                </h2>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')"/>

                <p class="text-center text-gray-500 mb-6">
                    or
                    <a
                        href="{{ route('login') }}"
                        class="text-purple-600 hover:text-purple-500"
                    >
                        login with existing account
                    </a>
                </p>

                <div class="mb-4">
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                             autofocus placeholder="Enter your Email Address"/>
                </div>
                <button
                    class="btn-primary bg-emerald-500 hover:bg-emerald-600 active:bg-emerald-700 w-full"
                >
                    Email Password Reset Link
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
