<div class="flex w-full" wire:poll.1000ms>
    <div class="flex-shrink-0 mr-3">
        <a href="{{ route('account.show',['identifier' => $status->user->usernameOrHash]) }}">
            <img class="object-cover object-center w-16 h-16 rounded-full" src="{{ $status->user->gravatar() }}" alt="">
        </a>
    </div>
    <div class="relative w-full">
        <div class="flex justify-between" x-data="{ dropdownIsOpen : false }">
            <a href="{{ route('account.show',['identifier' => $status->user->usernameOrHash]) }}"
                class="font-semibold text-cool-gray-900 hover:underline">
                {{ $status->user->name }} </a>
            @can('update',$status)
            <button @click="dropdownIsOpen = !dropdownIsOpen"
                class="p-1 rounded-full hover:bg-cool-gray-100 focus:outline-none">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <div :class="{ 'hidden': !dropdownIsOpen }"
                class="absolute top-0 right-0 w-48 py-2 mt-8 text-sm bg-white border rounded-lg border-cool-gray-200">
                <a href="{{ route('status.edit',$status->hash) }}"
                    class="block px-2 py-1 hover:bg-cool-gray-100 hover:text-cool-gray-800 text-cool-gray-600">Edit the
                    Status</a>
                <a href="{{ route('status.delete',$status->hash) }}"
                    class="block px-2 py-1 hover:bg-cool-gray-100 hover:text-cool-gray-800 text-cool-gray-600">Remove
                    the Status</a>
            </div>
            @endcan
        </div>

        <a href="{{ route('status.show', $status->hash) }}">
            <div class="mb-3 text-sm text-cool-gray-400">{{ $status->published }}</div>
            <div class="leading-relaxed text-cool-gray-700">{!! nl2br($status->body) !!}</div>
            <div class="flex mt-4 -mx-4 text-sm text-cool-gray-400 item-center">
                <div class="flex mx-4 item-center">
                    <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z">
                        </path>
                        <path
                            d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z">
                        </path>
                    </svg>
                    {{ $status->comments_count }} {{ Str::plural('Comment',$status->comments_count) }}
                </div>
                <div class="flex mx-4 item-center">
                    <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z">
                        </path>
                    </svg>
                    150 like
                </div>
            </div>
        </a>
    </div>
</div>
