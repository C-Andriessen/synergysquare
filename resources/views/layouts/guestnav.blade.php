<div x-data="{ solutions: false, more: false }" class="relative bg-white">
    <div class="pointer-events-none absolute inset-0 z-30 shadow" aria-hidden="true"></div>
    <div class="relative z-20">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-5 sm:px-6 sm:py-4 md:justify-start md:space-x-10 lg:px-8">
            <div>
                <a href="{{ route('home') }}" class="flex">
                    <span class="sr-only">SynergySquare</span>
                    <!-- <img class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt=""> -->
                    <h2 class="text-xl">SynergySquare</h2>
                </a>
            </div>
            <div class="-my-2 -mr-2 md:hidden">
                <button type="button" class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                    <span class="sr-only">Open menu</span>
                    <!-- Heroicon name: outline/bars-3 -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <div class="hidden md:flex md:flex-1 md:items-center md:justify-between">
                <nav class="flex space-x-10">
                    <div>
                        <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
                        <button @click="solutions = ! solutions, more = false" type="button" class="text-gray-500 group inline-flex items-center rounded-md bg-white text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" aria-expanded="false">
                            <span>Investments</span>
                            <!--
                Heroicon name: mini/chevron-down

                Item active: "text-gray-600", Item inactive: "text-gray-400"
              -->
                            <svg class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div x-show="solutions" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-1" x-cloack class="absolute inset-x-0 top-full z-10 hidden bg-white shadow-lg md:block">
                            <div class="mx-auto grid max-w-7xl gap-y-6 px-4 py-6 sm:grid-cols-2 sm:gap-8 sm:px-6 sm:py-8 lg:grid-cols-4 lg:px-8 lg:py-12 xl:py-16">
                                <a href="{{ route('pages.startup.index') }}" class="-m-3 flex flex-col justify-between rounded-lg p-3 hover:bg-gray-50">
                                    <div class="flex md:h-full lg:flex-col">
                                        <div class="flex-shrink-0">
                                            <span class="inline-flex h-10 w-10 items-center justify-center rounded-md bg-indigo-500 text-white sm:h-12 sm:w-12">
                                                <!-- Heroicon name: outline/chart-bar -->
                                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="ml-4 md:flex md:flex-1 md:flex-col md:justify-between lg:ml-0 lg:mt-4">
                                            <div>
                                                <p class="text-base font-medium text-gray-900">Startups</p>
                                                <p class="mt-1 text-sm text-gray-500">See what startups can do on our site and what you can invest in</p>
                                            </div>
                                            <p class="mt-2 text-sm font-medium text-indigo-600 lg:mt-4">
                                                Learn more
                                                <span aria-hidden="true"> &rarr;</span>
                                            </p>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="-m-3 flex flex-col justify-between rounded-lg p-3 hover:bg-gray-50">
                                    <div class="flex md:h-full lg:flex-col">
                                        <div class="flex-shrink-0">
                                            <span class="inline-flex h-10 w-10 items-center justify-center rounded-md bg-indigo-500 text-white sm:h-12 sm:w-12">
                                                <!-- Heroicon name: outline/cursor-arrow-rays -->
                                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59" />
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="ml-4 md:flex md:flex-1 md:flex-col md:justify-between lg:ml-0 lg:mt-4">
                                            <div>
                                                <p class="text-base font-medium text-gray-900">Real estate</p>
                                                <p class="mt-1 text-sm text-gray-500">With not to much money you can invest in our real estate items.</p>
                                            </div>
                                            <p class="mt-2 text-sm font-medium text-indigo-600 lg:mt-4">
                                                Learn more
                                                <span aria-hidden="true"> &rarr;</span>
                                            </p>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="-m-3 flex flex-col justify-between rounded-lg p-3 hover:bg-gray-50">
                                    <div class="flex md:h-full lg:flex-col">
                                        <div class="flex-shrink-0">
                                            <span class="inline-flex h-10 w-10 items-center justify-center rounded-md bg-indigo-500 text-white sm:h-12 sm:w-12">
                                                <!-- Heroicon name: outline/shield-check -->
                                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="ml-4 md:flex md:flex-1 md:flex-col md:justify-between lg:ml-0 lg:mt-4">
                                            <div>
                                                <p class="text-base font-medium text-gray-900">Stocks</p>
                                                <p class="mt-1 text-sm text-gray-500">See what we offer you in stocks</p>
                                            </div>
                                            <p class="mt-2 text-sm font-medium text-indigo-600 lg:mt-4">
                                                Learn more
                                                <span aria-hidden="true"> &rarr;</span>
                                            </p>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="-m-3 flex flex-col justify-between rounded-lg p-3 hover:bg-gray-50">
                                    <div class="flex md:h-full lg:flex-col">
                                        <div class="flex-shrink-0">
                                            <span class="inline-flex h-10 w-10 items-center justify-center rounded-md bg-indigo-500 text-white sm:h-12 sm:w-12">
                                                <!-- Heroicon name: outline/squares-2x2 -->
                                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="ml-4 md:flex md:flex-1 md:flex-col md:justify-between lg:ml-0 lg:mt-4">
                                            <div>
                                                <p class="text-base font-medium text-gray-900">Crypto</p>
                                                <p class="mt-1 text-sm text-gray-500">We can learn you about crypto and let you buy them right here on our platform</p>
                                            </div>
                                            <p class="mt-2 text-sm font-medium text-indigo-600 lg:mt-4">
                                                Learn more
                                                <span aria-hidden="true"> &rarr;</span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">News</a>
                    <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">Forum</a>
                    <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">About</a>
                    <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">Contact</a>
                </nav>
                <div class="flex items-center md:ml-12">
                    @guest
                    <a href="{{ route('login') }}" class="ml-8 inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Sign in</a>
                    @else
                    <a href="{{ route('dashboard') }}" class="ml-8 inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Dashboard</a>
                    @endguest
                </div>
            </div>
        </div>
    </div>

    <!--
    Mobile menu, show/hide based on mobile menu state.

    Entering: "duration-200 ease-out"
      From: "opacity-0 scale-95"
      To: "opacity-100 scale-100"
    Leaving: "duration-100 ease-in"
      From: "opacity-100 scale-100"
      To: "opacity-0 scale-95"
  -->
    <div class="absolute inset-x-0 top-0 z-30 origin-top-right transform p-2 transition md:hidden">
        <div class="divide-y-2 divide-gray-50 rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5">
            <div class="px-5 pt-5 pb-6 sm:pb-8">
                <div class="flex items-center justify-between">
                    <div>
                        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
                    </div>
                    <div class="-mr-2">
                        <button type="button" class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                            <span class="sr-only">Close menu</span>
                            <!-- Heroicon name: outline/x-mark -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="mt-6 sm:mt-8">
                    <nav>
                        <div class="grid gap-7 sm:grid-cols-2 sm:gap-y-8 sm:gap-x-4">
                            <a href="{{ route('pages.startup.index') }}" class="-m-3 flex items-center rounded-lg p-3 hover:bg-gray-50">
                                <div class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-indigo-500 text-white sm:h-12 sm:w-12">
                                    <!-- Heroicon name: outline/chart-bar -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                                    </svg>
                                </div>
                                <div class="ml-4 text-base font-medium text-gray-900">Analytics</div>
                            </a>

                            <a href="#" class="-m-3 flex items-center rounded-lg p-3 hover:bg-gray-50">
                                <div class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-indigo-500 text-white sm:h-12 sm:w-12">
                                    <!-- Heroicon name: outline/cursor-arrow-rays -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59" />
                                    </svg>
                                </div>
                                <div class="ml-4 text-base font-medium text-gray-900">Engagement</div>
                            </a>

                            <a href="#" class="-m-3 flex items-center rounded-lg p-3 hover:bg-gray-50">
                                <div class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-indigo-500 text-white sm:h-12 sm:w-12">
                                    <!-- Heroicon name: outline/shield-check -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                                    </svg>
                                </div>
                                <div class="ml-4 text-base font-medium text-gray-900">Security</div>
                            </a>

                            <a href="#" class="-m-3 flex items-center rounded-lg p-3 hover:bg-gray-50">
                                <div class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-indigo-500 text-white sm:h-12 sm:w-12">
                                    <!-- Heroicon name: outline/squares-2x2 -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                                    </svg>
                                </div>
                                <div class="ml-4 text-base font-medium text-gray-900">Integrations</div>
                            </a>
                        </div>
                        <div class="mt-8 text-base">
                            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                                View all products
                                <span aria-hidden="true"> &rarr;</span>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="py-6 px-5">
                <div class="grid grid-cols-2 gap-4">
                    <a href="#" class="rounded-md text-base font-medium text-gray-900 hover:text-gray-700">Pricing</a>
                    <a href="#" class="rounded-md text-base font-medium text-gray-900 hover:text-gray-700">Docs</a>
                    <a href="#" class="rounded-md text-base font-medium text-gray-900 hover:text-gray-700">Company</a>
                    <a href="#" class="rounded-md text-base font-medium text-gray-900 hover:text-gray-700">Resources</a>
                    <a href="#" class="rounded-md text-base font-medium text-gray-900 hover:text-gray-700">Blog</a>
                    <a href="#" class="rounded-md text-base font-medium text-gray-900 hover:text-gray-700">Contact Sales</a>
                </div>
                <div class="mt-6">
                    <a href="#" class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Sign up</a>
                    <p class="mt-6 text-center text-base font-medium text-gray-500">
                        Existing customer?
                        <a href="#" class="text-indigo-600 hover:text-indigo-500">Sign in</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>