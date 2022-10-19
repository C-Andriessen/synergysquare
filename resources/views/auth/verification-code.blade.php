<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-error class="mb-4" :status="session('errormessage')" />
        <x-auth-session-status class="mb-4" :status="session('message')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('code.verify') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="code" :value="__('Verificatie code')" />

                <x-input id="code" class="block mt-1 w-full" type="text" name="code" :value="old('code')" required autofocus />
            </div>
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('code.request') }}">
                    {{ __('Geen code ontvangen?') }}
                </a>

                <x-button class="ml-3">
                    {{ __('Verifieer') }}
                </x-button>
            </div>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>