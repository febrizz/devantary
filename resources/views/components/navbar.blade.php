<nav class="bg-white border-b border-gray-200 px-4 sm:px-6 lg:px-8 py-4 shadow-sm">
    <div class="flex justify-between items-center max-w-7xl mx-auto">
        <!-- Brand -->
        <div class="flex items-center space-x-2">
            <x-application-logo class="h-8 w-8 text-devantary" />
            <a href="{{ url('/') }}" class="text-xl font-bold text-devantary">
                Devantary
            </a>
        </div>

        <!-- Nav links -->
        <div class="hidden md:flex space-x-6">
            <x-nav-link href="{{ url('/') }}" :active="request()->is('/')">
                Beranda
            </x-nav-link>
            <x-nav-link href="{{ url('/portfolio') }}">
                Portofolio
            </x-nav-link>
            <x-nav-link href="{{ url('/demo') }}">
                Demo App
            </x-nav-link>
            <x-nav-link href="{{ url('/contact') }}">
                Kontak
            </x-nav-link>
        </div>

        <!-- Auth buttons -->
        <div class="space-x-4 hidden md:block">
            @auth
                <x-nav-link href="{{ route('dashboard') }}">
                    Dashboard
                </x-nav-link>
            @else
                <x-nav-link href="{{ route('login') }}">
                    Login
                </x-nav-link>
                <a href="{{ route('register') }}"
                    class="bg-devantary text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-devantary-dark">
                    Register
                </a>
            @endauth
        </div>
    </div>
</nav>
