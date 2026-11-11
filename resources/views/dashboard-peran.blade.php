<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ $judul }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6 text-gray-900">
                Halo, {{ auth()->user()->name }}. Peran Anda: <b>{{ auth()->user()->role }}</b>.

                @if(auth()->user()->role === 'tu')
                    <div class="mt-4">
                        <a class="text-blue-800 underline" href="{{ route('tu.akun.index') }}">Kelola Akun</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>