<div class="container">
    <div class="w-full p-5 text-center bg-white border rounded-lg border-cool-gray-200 lg:w-1/2 lg:mx-auto">
        <div class="text-cool-gray-700">
            <div class="mb-5 text-xl font-bold">
                Are you sure ?
            </div>
            <div class="flex p-4 mb-5 border rounded-lg item-start border-cool-gray-200 bg-cool-gray-50">
                <img class="object-cover object-center w-16 h-16 mr-3 rounded-full"
                    src="{{ $status->user->gravatar() }}" alt="">
                <div class="text-left">
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
                            23 Comments
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
                </div>
            </div>
            <button wire:click="destroy"
                class="inline-block px-4 py-2 text-center text-white bg-red-500 border border-red-500 rounded-lg hover:bg-red-600">Delete</button>
            <a class="inline-block px-4 py-2 text-center bg-white border rounded-lg hover:bg-cool-gray-100 border-cool-gray-200"
                href="{{ route('status.show',$status->hash) }}">Cancel</a>
        </div>
    </div>
</div>
