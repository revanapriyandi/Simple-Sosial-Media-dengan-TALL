<div class="container">
    <div class="flex">
        <div class="w-full md:w-1/2">
            <div class="mb-10 overflow-hidden border rounded-lg border-cool-gray-200">
                <div class="px-4 py-3 font-semibold border-b border-cool-gray-200 bg-cool-gray-100 text-cool-gray-700">
                    Your Status
                </div>
                <form wire:submit.prevent="update">
                    <div class="p-4 bg-cool-gray-50">
                        <textarea wire:model="body" placeholder="What's in your mine"
                            class="w-full p-0 border-0 resize-none form-textarea focus:shadow-none">{{ old('body') ?? $status->body }}</textarea>
                        @error('body')
                        <div class="mt-2 text-sm text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex justify-end px-4 py-2 border-t bg-cool-gray-100 border-cool-gray-200">
                        <x-button.secondary>Update</x-button.secondary>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
