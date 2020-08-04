<div class="container">
    <div class="flex">
        <div class="w-full md:w-1/2">
            <div class="p-5 bg-white border rounded border-cool-gray-200">
                <h1 class="mb-5 text-lg capitalize text-cool-gray-700">Update your Profile</h1>
                <form wire:submit.prevent="update">
                    <div class="mb-5">
                        <label for="picture" class="block mb-1 font-medium">Your profile picture</label>
                        <input type="file" wire:model="picture" id="picture">
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
