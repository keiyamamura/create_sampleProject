<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
            オーナー用
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-flash-message status="session('status')" />
                    <section class="text-gray-600 body-font">
                        <div class="container px-5 lg:py-12 mx-auto">
                            @forelse ($jobs as $key => $job)
                                <div class="flex flex-col sm:-m-4 -mx-4 -mb-10 -mt-4">
                                    <div
                                        class="flex flex-col md:flex-row lg:justify-around lg:items-center w-full p-4 sm:mb-0 mb-6">
                                        <div class="w-full md:w-1/2 rounded-lg overflow-hidden">
                                            <x-thumbnail :filename="$job->img_path" />
                                        </div>
                                        <div class="w-full md:w-1/2 md:ml-8">
                                            <h2 class="text-xl font-medium title-font text-gray-900 mt-5 truncate">
                                                {{ $job->title }}</h2>
                                            <p class="text-base leading-relaxed truncate">会社名: {{ $job->company_name }}
                                            </p>
                                            <p class="text-base leading-relaxed truncate">給与: {{ $job->salary_amount }}
                                            </p>
                                            <p class="text-base leading-relaxed truncate">雇用形態: {{ $status[$key] }}</p>
                                            <p class="text-base leading-relaxed truncate">勤務地: {{ $prefecture[$key] }}
                                            </p>
                                            <div class="text-right cursor-pointer">
                                                <a href="{{ route('owner.job.edit', ['id' => $job->id]) }}"
                                                    class="text-indigo-500 inline-flex items-center mt-3">編集する
                                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2"
                                                        viewBox="0 0 24 24">
                                                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="flex flex-col text-center w-full mb-20">
                                    <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">
                                        登録している求人がありません
                                    </h1>
                                </div>
                            @endforelse
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
