<div>
    <div class="py-10 -mt-6 bg-cool-gray-700">
        <div class="container">
            <di class="flex items-start mr-3">
                <div class="flex-shrink-0">
                    <img class="object-contain object-center w-16 h-16 rounded-full" src="{{ $user->gravatar() }}">
                </div>
                <div>
                    <h1 class="mb-2 text-xl font-semibold text-white">{{ $user->name }}</h1>
                    <div class="mb-5 text-cool-gray-400">
                        <div>
                            {{ $user->deskription }}
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
    <livewire:follow.statistik :user="$user">
</div>
