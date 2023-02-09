<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('求人一覧') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-flash-message status="info" />



                    <div class="flex items-center justify-end mt-4">
                        <x-a href="" class="ml-4">
                            {{ __('確認する') }}
                        </x-a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
