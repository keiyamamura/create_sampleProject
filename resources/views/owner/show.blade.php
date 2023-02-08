<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('会員情報') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="py-6 bg-white border-b border-gray-200">
                    <!-- Name -->
                    <div>
                        <x-label for="name" :value="__('名前')" />

                        <x-input id="name" class="block mt-1 w-full bg-gray-300" type="text" name="name"
                            value="{{ $owner->name }}" required autofocus disabled />
                    </div>

                    <!-- Age -->
                    <div class="mt-4">
                        <x-label for="age" :value="__('年齢')" />

                        <x-input id="age" type="text" name="age" value="{{ $age }}" required
                            disabled class="block mt-1 w-full bg-gray-300" />
                    </div>

                    <!-- Gender -->
                    <div class="mt-4">
                        <x-label for="gender" :value="__('性別')" />

                        <x-input id="gender" type="text" name="gender" value="{{ $gender }}" required
                            disabled class="block mt-1 w-full bg-gray-300" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-label for="email" :value="__('Email')" />

                        <x-input id="email" type="email" name="email" value="{{ $owner->email }}" required
                            disabled class="block mt-1 w-full bg-gray-300" />
                    </div>

                    <!-- Prefectures -->
                    <div class="mt-4">
                        <x-label for="prefectures_id" :value="__('都道府県')" />

                        <x-input id="prefectures_id" type="text" name="prefectures_id" value="{{ $prefecture }}"
                            required disabled class="block mt-1 w-full bg-gray-300" />
                    </div>

                    <!-- Municipalities -->
                    <div class="mt-4">
                        <x-label for="municipalities" :value="__('住所')" />

                        <x-input id="municipalities" class="block mt-1 w-full bg-gray-300" type="text"
                            name="municipalities" value="{{ $owner->municipalities }}" required autofocus disabled />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-button class="ml-4">
                            {{ __('編集する') }}
                        </x-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
