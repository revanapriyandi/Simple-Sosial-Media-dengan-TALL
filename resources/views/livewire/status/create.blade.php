<div class="mb-5 overflow-hidden border rounded-lg border-cool-gray-300">
    <div class="p-4 bg-cool-gray-200 text-cool-gray-700">
        Your Status
    </div>
    <div class="p-4 card-body">
        <form wire:submit.prevent="store">
            <textarea wire:model="body" placeholder="What's in your mine"
                class="w-full resize-none form-textarea"></textarea>
            @error('body')
            <div class="mt-2 text-sm text-red-500">{{ $message }}</div>
            @enderror
            <div class="flex justify-end">
                <x-button.primary>Post</x-button.primary>
            </div>
        </form>
    </div>
</div>
