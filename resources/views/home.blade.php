<x-guest-layout>
    <div class="relative overflow-hidden bg-gray-50 min-h-screen items-center flex flex-column justify-center">
        <div class="hidden sm:absolute sm:inset-y-0 sm:block sm:h-full sm:w-full" aria-hidden="true">
            <div class="relative mx-auto h-full max-w-7xl">
                <svg class="absolute right-full translate-y-1/4 translate-x-1/4 transform lg:translate-x-1/2" width="404" height="784" fill="none" viewBox="0 0 404 784">
                    <defs>
                        <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="404" height="784" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)" />
                </svg>
                <svg class="absolute left-full -translate-y-3/4 -translate-x-1/4 transform md:-translate-y-1/2 lg:-translate-x-1/2" width="404" height="784" fill="none" viewBox="0 0 404 784">
                    <defs>
                        <pattern id="5d0dd344-b041-4d26-bec4-8d33ea57ec9b" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="404" height="784" fill="url(#5d0dd344-b041-4d26-bec4-8d33ea57ec9b)" />
                </svg>
            </div>
        </div>

        <div class="relative pt-6 pb-16 sm:pb-24">
            <div>
                <main class="mx-auto mt-16 max-w-7xl px-4 sm:mt-24">
                    <div class="text-center">
                        <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl md:text-6xl">
                            <p class="block">Welcome to the <span class="text-indigo-600">SynergySquare</span></p>
                            <p class="block">investing platform</p>
                        </h1>
                        <p class="mx-auto mt-3 max-w-md text-base text-gray-500 sm:text-lg md:mt-5 md:max-w-3xl md:text-xl">Choose the option that is most suited for your intrests on this website!</p>
                        <div class="mx-auto mt-5 max-w-md sm:flex sm:justify-center md:mt-8">
                            <div class="rounded-md shadow mr-10">
                                <a href="{{ route('invest.home') }}" class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 md:py-4 md:px-20 md:text-lg">Investor</a>
                            </div>
                            <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                                <a href="{{ route('startup.home') }}" class="flex w-full items-center justify-center rounded-md border border-transparent bg-white px-8 py-3 text-base font-medium text-indigo-600 hover:bg-gray-50 md:py-4 md:px-20 md:text-lg">Startup</a>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
</x-guest-layout>