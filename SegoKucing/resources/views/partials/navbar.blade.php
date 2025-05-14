<nav class="bg-white/80 backdrop-blur-md sticky top-0 z-50 border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <div class="flex items-center">
                <div class="flex-shrink-0 flex items-center">
                    <div class="w-10 h-10 rounded-full bg-gray-900 flex items-center justify-center">
                        <i class="fas fa-paw text-white text-xl"></i>
                    </div>
                    <span class="ml-3 text-xl font-bold">Sego Kucing Studio</span>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-8">
                    <a href="#home" class="text-gray-900 px-3 py-2 text-sm font-medium">Home</a>
                    <a href="#about" class="text-gray-900 px-3 py-2 text-sm font-medium">About</a>
                    <a href="#games" class="text-gray-900 px-3 py-2 text-sm font-medium">Games</a>
                    <a href="#contact" class="text-gray-900 px-3 py-2 text-sm font-medium">Contact</a>
                </div>
            </div>
            <div class="-mr-2 flex md:hidden">
                <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-gray-900 hover:bg-gray-100 focus:outline-none" aria-controls="mobile-menu"
                aria-expanded="false" id="mobile-menu-button">
                    <span class="sr-only">Open Main Menu</span>
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div class="hidden md:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="#home" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-100">Home</a>
            <a href="#about" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-100">About</a>
            <a href="#games" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-100">Games</a>
            <a href="#contact" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-100">Contact</a>
        </div>
    </div>
</nav>