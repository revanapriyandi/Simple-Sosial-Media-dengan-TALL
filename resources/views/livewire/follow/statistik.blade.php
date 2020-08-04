<div class="bg-cool-gray-600 text-cool-gray-300">
    <div class="flex justify-center">
        <div class="flex w-1/3">
            <div class="flex-1 py-2 text-center border-r border-gray-500 ">
                <div>
                    Status
                </div>
                <div class="text-xl font-semibold text-center">
                    250
                </div>
            </div>
            <div class="flex-1 py-2 text-center border-r border-gray-500">
                <div>
                    Following
                </div>
                <div class="text-xl font-semibold text-center">
                    {{ $user->follows()->count() }}
                </div>
            </div>
            <div class="flex-1 py-2 text-center border-r border-gray-500">
                <div>
                    Follower
                </div>
                <div class="text-xl font-semibold text-center">
                    {{ $user->followers()->count() }}
                </div>
            </div>
        </div>
    </div>
</div>
