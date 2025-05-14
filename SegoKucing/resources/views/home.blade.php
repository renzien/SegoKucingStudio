@extends('layouts.main')
@section('title', 'Home')
@section('container')
    <section id="home" class="relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-32 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 z-10">
                <h1 class="text-4xl md:text-6xl font-bold font-quicksand mb-6">We Create <span class="text-gray-600">Purr-fect</span> Games</h1>
                <p class="text-lg text-gray-600 mb-8 max-w-lg">Sego Kucing Studio is an independent game development studio focused on creating unique gaming experiences.</p>
                <div class="flex space-x-4">
                    <a href="#games" class="bg-gray-900 hover:bg-gray-700 text-white px-6 py-3 rounded-full font-medium transition duration-300">Our Games</a>
                    <a href="#about" class="border border-gray-900 hover:bg-gray-100 text-gray-900 px-6 py-3 rounded-full font-medium transition duration-300">About Us</a>
                </div>
            </div>
            <div class="md:w-1/2 mt-12 md:mt-0 flex justify-center relative">
                <div class="w-64 h-64 md:w-80 md:h-80 bg-gray-200 rounded-full flex items-center justify-center overflow-hidden">
                    <img src="https://media.istockphoto.com/id/1218481548/vector/cute-cat-waving-paw-cartoon-vector-illustration.jpg?s=612x612&w=0&k=20&c=RciKkd8LHlvJZHqCGR6kz4YUIaEAScuSTkO7tpbvMhE=" alt="Studio Mascot" class="w-full h-full object-cover floating-cat">
                </div>
                <div class="absolute -bottom-10 -right-10 w-32 h-32 bg-gray-300 rounded-full opacity-20 rotate-cat"></div>
            </div>
        </div>
        <div class="absolute top-0 right-0 w-64 h-64 bg-gray-100 rounded-full -mr-32 -mt-32 opacity-50"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-gray-100 rounded-full -ml-64 -mb-64 opacity-30"></div>
    </section>

    {{-- About Section --}}
    <section id="about" class="py-20 bg-gray-50 font-quicksand">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4">About Our Studio</h2>
                <div class="w-20 h-1 bg-gray-900 mx-auto"></div>
            </div>

            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0 md:pr-10">
                    <div class="bg-white p-8 rounded-2xl shadow-lg">
                        <h3 class="text-xl font-bold mb-4">Our Story</h3>
                        <p class="text-gray-600 mb-6">Founded in 2025, Sego Kucing Studio started with a small team of game developers, during a Game Jam. Our name, which translates to "Cat Rice" in English, 
                            reflects our Indonesian roots and our playful approach to Game Development.
                        </p>
                        <p class="text-gray-600 mb-6">We believe games should be competitive and fun, accessible and leave players with a memory. Each of our games incorporates subtle feline elements that our fans have come to love.</p>

                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-gray-900 rounded-full flex items-center justify-center">
                                <i class="fas fa-gamepad text-white text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">Our Mission</h4>
                                <p class="text-gray-600 text-sm">Create games that bring joy and relaxation to players worldwide.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="md:w-1/2">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-white p-6 rounded-xl shadow-md">
                            <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center mb-4">
                                <i class="fas fa-users text-gray-900 text-xl"></i>
                            </div>
                            <h4 class="font-bold mb-2">Team</h4>
                            <p class="text-gray-600 text-sm">A diverse team of 4 developers, artists and designers.</p>
                        </div>
                        <div class="bg-white p-6 rounded-xl shadow-md">
                            <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center mb-4">
                                <i class="fas fa-trophy text-gray-900 text-xl"></i>
                            </div>
                            <h4 class="font-bold mb-2">Achivement</h4>
                            <p class="text-gray-600 text-sm">Participate in Garena Game Jam 2025</p>
                        </div>
                        <div class="bg-white p-6 rounded-xl shadow-md">
                            <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center mb-4">
                                <i class="fas fa-heart text-gray-900 text-xl"></i>
                            </div>
                            <h4 class="font-bold mb-2">Community</h4>
                            <p class="text-gray-600 text-sm">Still building the community step by step.</p>
                        </div>
                        <div class="bg-white p-6 rounded-xl shadow-md">
                            <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center mb-4">
                                <i class="fas fa-paw text-gray-900 text-xl"></i>
                            </div>
                            <h4 class="font-bold mb-2">Mascot</h4>
                            <p class="text-gray-600 text-sm">Our studio mascot, Kucing. Appears in all our games as an easter egg.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Games Section --}}
    <section id="games" class="py-20 font-quicksand">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4">Our Games</h2>
                <div class="w-20 h-1 bg-gray-900 mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 grap-8">
                {{-- Game Melody Knight --}}
                <div class="game-card bg-white rounded-2xl overflow-hidden shadow-lg">
                    <div class="relative">
                        <img src="https://img.itch.zone/aW1nLzE5NTI4MDQwLnBuZw==/315x250%23c/Jz3N6X.png" alt="Melody Knight" class="w-full h-64 object-cover">
                        <div class="absolute top-4 right-4 bg-gray-900 text-white px-3 py-1 rounded-full text-xs font-medium">Rhythm</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Melody Knight</h3>
                        <p class="text-gray-600 mb-4">A Melody Knight who wanted to return to his hometown, found that the place was being controlled by a Buto Ijo figure. 
                            The melody knight rushed to save the hometown he loved.</p>
                        <div class="flex justify-between items-center">
                            <div class="flex space-x-2">
                                <span class="bg-gray-100 px-2 py-1 rounded-full text-xs">Single Player</span>
                                <span class="bg-gray-100 px-2 py-1 rounded-full text-xs">PC</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection