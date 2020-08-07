<div class="container">
    <div class="flex">
        <div class="w-1/2">
            <div class="p-5 mb-5 border rounded-lg border-cool-gray-300">
                <livewire:status.block :status="$status" :key="$status->id" />
            </div>
            <livewire:comment.index :status="$status" :key="$status->id" />
            @auth
            <livewire:comment.create :status="$status" :key="$status->id" />
            @endauth
        </div>
    </div>
</div>
