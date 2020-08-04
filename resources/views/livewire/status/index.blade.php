<div>
    @foreach ($statuses as $status)
    <a href="" class="flex mb-5" wire:poll.1000ms>
        <div class="flex-shrink-0 mr-3">
            <img class="object-cover object-center w-10 h-10 rounded-full" src="{{ $status->user->gravatar() }}" alt="">
        </div>
        <div>
            <div class="font-semibold text-cool-gray-900"> {{ $status->user->name }} </div>
            <div>{{ $status->body }}</div>
            <div class="text-sm text-cool-gray-400">{{ $status->published }}</div>
        </div>
    </a>
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
