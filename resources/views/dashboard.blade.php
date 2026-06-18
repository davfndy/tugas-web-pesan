{{--<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
--}}

<x-app-layout>
    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4">

            <h1 class="text-3xl font-bold mb-2">
                Halo, Administrator {{ Auth::user()->name }} 👋
            </h1>

            <p class="text-gray-500 mb-8">
                Selamat datang di Sistem Informasi Persuratan (SIPS)
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                <div class="bg-blue-500 text-white rounded-xl p-6 shadow">
                    <h2 class="text-lg font-semibold">Surat Masuk</h2>
                    <p class="text-4xl font-bold mt-4">0</p>
                </div>

                <div class="bg-green-500 text-white rounded-xl p-6 shadow">
                    <h2 class="text-lg font-semibold">Surat Keluar</h2>
                    <p class="text-4xl font-bold mt-4">0</p>
                </div>

                <div class="bg-yellow-500 text-white rounded-xl p-6 shadow">
                    <h2 class="text-lg font-semibold">Disposisi</h2>
                    <p class="text-4xl font-bold mt-4">0</p>
                </div>

                <div class="bg-purple-500 text-white rounded-xl p-6 shadow">
                    <h2 class="text-lg font-semibold">Total User</h2>
                    <p class="text-4xl font-bold mt-4">
                        {{ \App\Models\User::count() }}
                    </p>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>