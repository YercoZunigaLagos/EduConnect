<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">

                <p class="mt-8 text-2xl font-medium text-gray-900 dark:text-white">publico</p>
                @role('admin')
                <p class="mt-8 text-2xl font-medium text-gray-900 dark:text-white">admin</p>
                @endrole
                @role('docente')
                <p class="mt-8 text-2xl font-medium text-gray-900 dark:text-white">docente</p>
                @endrole
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>

        </div>
    </div>
</x-app-layout>
