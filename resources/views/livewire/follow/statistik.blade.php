<div class="block mt-8 bg-white rounded-lg shadow md:mt-0 md:inline-block text-cool-gray-600">
    <div class="flex justify-center">
        <div class="flex">
            <div class="flex-1 px-6 py-2 text-center border-r border-gray-100 ">
                <div>
                    Status
                </div>
                <div class="text-xl font-semibold text-cool-gray-800">
                    250
                </div>
            </div>
            <div class="flex-1 px-6 py-2 text-center border-r border-gray-100">
                <div>
                    Following
                </div>
                <div class="text-xl font-semibold text-cool-gray-800">
                    {{ $user->follows()->count() }}
                </div>
            </div>
            <div class="flex-1 px-6 py-2 text-center border-r border-gray-100">
                <div>
                    Follower
                </div>
                <div class="text-xl font-semibold text-cool-gray-800">
                    {{ $user->followers()->count() }}
                </div>
            </div>
        </div>
    </div>
</div>
