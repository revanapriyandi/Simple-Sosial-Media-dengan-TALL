<div>
    <div class="py-10 -mt-6 border-b md:py-16 border-cool-gray-200 bg-cool-gray-50">
        <div class="container">
            <div class="flex flex-col items-center md:flex-row">
                <div class="w-full md:w-1/2">
                    <div class="flex flex-col items-center text-center md:text-left md:items-start md:flex-row">
                        <div class="flex-shrink-0 mr-0 md:mr-8 md:mb-0">
                            <img class="object-cover object-center w-24 h-24 rounded-full"
                                src="{{ $user->gravatar() }}">
                        </div>
                        <div>
                            <h1 class="mb-2 text-xl font-semibold text-cool-gray-900">{{ $user->name }}</h1>
                            <div class="mb-5 text-cool-gray-600">
                                <div class="mb-4 leading-relaxed">
                                    {{ $bio }}
                                    @if (strlen($bio) >= 120)
                                    <button wire:click="readMore"
                                        class="{{ $readmore ? 'block' : 'hidden' }} hover:underline text-sm focus:outline-none text-cool-gray-600">
                                        Readmore
                                    </button>
                                    <button wire:click="less"
                                        class="{{ $readmore ? 'hidden' : 'block' }} hover:underline text-sm focus:outline-none text-cool-gray-600">
                                        Less
                                    </button>
                                    @endif
                                </div>
                                <div>
                                    Joined: {{ $user->created_at->format('d F, Y') }}
                                </div>
                            </div>
                            <livewire:follow.button :user="$user">
                        </div>
                        </di>
                    </div>
                </div>
                <div class="flex justify-center w-full md:w-1/2">
                    <livewire:follow.statistik :user="$user">

                </div>
            </div>
        </div>
    </div>
    <div class="container mt-16">
        <div class="w-full md:w-1/2">
            @foreach ($statuses as $status)
            <div class="mb-10">
                <livewire:status.block :status="$status" :key="$status->id">
            </div>
            @endforeach
            @if ($statuses->hasMorePages())
            <div class="flex justify-center">
                <x-button.primary wire:click.prevent="loadMore">
                    <span wire:loading>
                        Please Wait...
                    </span>
                    <span wire:loading.class="hidden">
                        Loadmore
                    </span>
                </x-button.primary>
            </div>
            @endif
        </div>
    </div>
