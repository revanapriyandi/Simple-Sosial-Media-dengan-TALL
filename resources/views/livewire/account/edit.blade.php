<div class="container">
    <div class="flex">
        <div class="w-full md:w-1/2">
            <div class="border rounded bg-cool-gray-50 border-cool-gray-200">
                <h1
                    class="px-5 py-2 text-lg font-semibold capitalize border-b border-cool-gray-200 bg-cool-gray-100 text-cool-gray-700">
                    Update your Profile</h1>
                <form wire:submit.prevent="update" class="p-5">
                    <div class="mb-5">
                        <div class="flex items-center">
                            @if($picture)
                            <img src="{{ $picture->temporaryUrl() }}"
                                class="object-cover object-center w-16 h-16 mr-3 rounded-full">
                            @else
                            <img src="{{ auth()->user()->gravatar() }}"
                                class="object-cover object-center w-16 h-16 mr-3 rounded-full">
                            @endif
                            <label for="picture" class="px-4 py-2 bg-white border rounded-lg border-cool-gray-200">
                                Upload Image
                                <input type="file" wire:model="picture" class="sr-only" id="picture">
                            </label>
                        </div>
                        @error('picture')
                        <div class="mt-2 text-sm text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="username" class="block mb-1 font-medium">Username</label>
                        <input type="text" wire:model="username" id="username" class="w-full form-input">
                        @error('username')
                        <div class="mt-2 text-sm text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="name" class="block mb-1 font-medium">Your Name</label>
                        <input type="text" wire:model="name" id="name" class="w-full form-input">
                        @error('name')
                        <div class="mt-2 text-sm text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="deskription" class="block mb-1 font-medium">Biodata</label>
                        <textarea type="text" wire:model="deskription" id="deskription"
                            class="w-full form-textarea"></textarea>
                        @error('deskription')
                        <div class="mt-2 text-sm text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <x-button.primary>Update</x-button.primary>
                </form>
            </div>
        </div>
    </div>
</div>
