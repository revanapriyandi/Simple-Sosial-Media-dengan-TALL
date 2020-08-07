<div class="bg-white border border-cool-gray-300" x-data="{open:false}">
    <div class="flex flex-col items-center justify-between md:flex-row">
        <div class="flex justify-between w-full px-4 py-5 bg-white md:bg-transparent md:w-auto md:border-b-0">
            <div>
                <a href="/" class="text-lg font-semibold text-cool-gray-800">
                    {{ config('app.name') }}
                </a>
            </div>
            <div class="block md:hidden">
                <button @click="open = !open" class="text-cool-gray-800 focus:outline-none">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path x-show="!open" fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div :class="{'hidden' : !open}"
            class="justify-between w-full py-1 leading-loose md:py-0 md:items-center md:flex">
            <div class="flex flex-col py-2 md:items-center md:flex-row md:py-0">
                @auth
                <a href="/timeline" class="block px-4 text-cool-gray-600 hover:text-cool-gray-800 md:py-4">Timeline</a>
                @endauth
            </div>
            <div class="flex flex-col md:items-center md:flex-row">
                @auth
                <div x-data="{ dropdownIsOpen:false }"
                    class="py-4 border-t md:py-0 md:border-transparent border-cool-gray-200">
                    <div>
                        <button @click="dropdownIsOpen = !dropdownIsOpen"
                            class="flex items-center px-4 focus:outline-none md:px-0">
                            <div class="flex-shrink-0 object-cover object-center mr-2">
                                <img class="w-8 h-8 rounded" src="{{ auth()->user()->gravatar() }}">
                            </div>
                            <div class="block pr-4 text-cool-gray-600 hover:text-cool-gray-800 md:py-4">
                                {{ auth()->user()->name }}
                            </div>
                        </button>
                    </div>
                    <div :class="{ 'md:hidden': !dropdownIsOpen}"
                        class="top-0 right-0 block mt-1 leading-normal md:leading-loose md:py-2 md:border border-cool-gray-200 md:rounded md:w-56 md:mr-4 md:absolute md:mt-14 md:bg-cool-gray-50">
                        <a href="{{ route('settings') }}"
                            class="block px-4 text-cool-gray-600 hover:text-cool-gray-800">Settings</a>
                        <a href="{{ route('account.show', auth()->user()->usernameOrHash) }}"
                            class="block px-4 text-cool-gray-600 hover:text-cool-gray-800">Your Profile</a>
                        <a href="" class="block px-4 text-cool-gray-600 hover:text-cool-gray-800">Your Friends</a>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="block px-4 text-cool-gray-600 hover:text-cool-gray-800">
                            Log out
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
                @else
                <a href="{{ route('login') }}"
                    class="block px-4 text-cool-gray-600 hover:text-cool-gray-800 md:py-4">Log in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="block px-4 text-cool-gray-600 hover:text-cool-gray-800 md:py-4">Register</a>
                @endif
                @endauth
            </div>
        </div>
    </div>
</div>
