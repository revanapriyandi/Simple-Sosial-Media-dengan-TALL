<div class="flex p-5 border rounded-lg border-cool-gray-200">
    <div class="flex-shrink-0 mr-4">
        <img class="object-cover object-center w-16 h-16 rounded-full" src="{{ auth()->user()->gravatar() }}">
    </div>
    <div class="w-full">
        <div class="mb-3 text-lg font-semibold">{{ auth()->user()->name }}</div>
        <div>
            <form wire:submit.prevent="store">
                <div class="mb-3">
                    <textarea wire:model="body" class="w-full p-0 border-0 resize-none form-textarea focus:shadow-none"
                        placeholder="write your idea...."></textarea>
                </div>
                <div class="flex justify-end">
                    <x-button.secondary>Comment</x-button.secondary>
                </div>
            </form>
        </div>
    </div>
</div>
