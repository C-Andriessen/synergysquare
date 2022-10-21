<x-guest-layout>
    <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
    <div class="relative overflow-hidden bg-gray-800">
        <div class="hidden sm:absolute sm:inset-0 sm:block" aria-hidden="true">
            <svg class="absolute bottom-0 right-0 mb-48 translate-x-1/2 transform text-gray-700 lg:top-0 lg:mt-28 lg:mb-0 xl:translate-x-0 xl:transform-none" width="364" height="384" viewBox="0 0 364 384" fill="none">
                <defs>
                    <pattern id="eab71dd9-9d7a-47bd-8044-256344ee00d0" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="364" height="384" fill="url(#eab71dd9-9d7a-47bd-8044-256344ee00d0)" />
            </svg>
        </div>
        <div class="relative pt-6 pb-16 sm:pb-24">


            <main class="mt-16 sm:mt-24">
                <div class="mx-auto max-w-7xl">
                    <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                        <div class="px-4 sm:px-6 sm:text-center md:mx-auto md:max-w-2xl lg:col-span-6 lg:flex lg:items-center lg:text-left">
                            <div>
                                <h1 class="mt-4 text-4xl font-bold tracking-tight text-white sm:text-5xl md:text-6xl">Do you want to become an investor</h1>
                                <p class="mt-3 text-base text-gray-300 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">Fill in your details and we'll be in contact with you as soon as possible to start listing your startup</p>
                                <p class="mt-8 text-base font-semibold text-white sm:mt-10">Used by</p>
                                <div class="mt-5 w-full sm:mx-auto sm:max-w-lg lg:ml-0">
                                    <div class="flex flex-wrap items-start justify-between">
                                        <div class="flex justify-center px-1">
                                            <img class="h-9 sm:h-10" src="https://tailwindui.com/img/logos/tuple-logo-gray-400.svg" alt="Tuple">
                                        </div>
                                        <div class="flex justify-center px-1">
                                            <img class="h-9 sm:h-10" src="https://tailwindui.com/img/logos/workcation-logo-gray-400.svg" alt="Workcation">
                                        </div>
                                        <div class="flex justify-center px-1">
                                            <img class="h-9 sm:h-10" src="https://tailwindui.com/img/logos/statickit-logo-gray-400.svg" alt="StaticKit">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-16 sm:mt-24 lg:col-span-6 lg:mt-0">
                            <div class="bg-white sm:mx-auto sm:w-full sm:max-w-md sm:overflow-hidden sm:rounded-lg">
                                <div class="px-4 py-8 sm:px-10">

                                    <div class="mt-6">
                                        <form action="#" method="POST" class="space-y-6">
                                            <div>
                                                <label for="name" class="sr-only">Full name</label>
                                                <input type="text" name="name" id="name" autocomplete="name" placeholder="Full name" required class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                            </div>

                                            <div>
                                                <label for="mobile-or-email" class="sr-only">Mobile number or email</label>
                                                <input type="text" name="mobile-or-email" id="mobile-or-email" autocomplete="email" placeholder="Mobile number or email" required class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                            </div>

                                            <div>
                                                <label for="password" class="sr-only">Password</label>
                                                <input id="password" name="password" type="password" placeholder="Password" autocomplete="current-password" required class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                            </div>

                                            <div>
                                                <button type="submit" class="flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Create your account</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="border-t-2 border-gray-200 bg-gray-50 px-4 py-6 sm:px-10">
                                    <p class="text-xs leading-5 text-gray-500">By signing up, you agree to our <a href="#" class="font-medium text-gray-900 hover:underline">Terms</a>, <a href="#" class="font-medium text-gray-900 hover:underline">Data Policy</a> and <a href="#" class="font-medium text-gray-900 hover:underline">Cookies Policy</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

</x-guest-layout>