<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Devantary') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        [x-cloak] { display: none !important; }
        @keyframes fadeInDown {
            from { opacity: 0; transform: translate3d(0, -20px, 0); }
            to { opacity: 1; transform: translate3d(0, 0, 0); }
        }
        .animate-fadeInDown { animation: fadeInDown 0.3s ease-out; }
        
        @keyframes scaleIn {
            from { opacity: 0; transform: scale(0.95); }
            to { opacity: 1; transform: scale(1); }
        }
        .animate-scaleIn { animation: scaleIn 0.2s ease-out; }
    </style>
</head>
<body class="bg-devantary-muted text-devantary-text font-sans antialiased">
    <div class="min-h-screen flex flex-col">
        <!-- Navbar -->
        <nav x-data="{ open: false, scrolled: false, activeSection: 'home' }" @scroll.window="scrolled = window.pageYOffset > 20" class="fixed w-full z-50 flex justify-center items-center">
            <div class="mt-4 w-full max-w-6xl mx-auto px-2">
                <div :class="scrolled ? 'py-2 shadow-2xl bg-white/80' : 'py-3 shadow-xl bg-white/60'" class="flex items-center justify-between backdrop-blur-xl rounded-2xl px-4 transition-all duration-300">
                    <!-- Logo & Brand -->
                    <a href="/" class="flex items-center space-x-2 px-2 py-1 rounded-lg group hover:bg-devantary-accentXXlight transition-all duration-300">
                        <div class="w-10 h-10 bg-gradient-to-br from-devantary-primary to-devantary-accent rounded-xl flex items-center justify-center shadow-lg group-hover:shadow-devantary-accent/30 transition-all duration-300">
                            <span class="text-xl font-bold text-white">D</span>
                        </div>
                        <span class="text-lg font-bold bg-gradient-to-r from-devantary-primary to-devantary-accent bg-clip-text text-transparent">Devantary</span>
                    </a>
                    
                    <!-- Desktop Navigation -->
                    <div class="hidden sm:flex items-center space-x-1 bg-white/90 rounded-xl px-2 py-1 shadow-md">
                        <a href="/" @click="activeSection = 'home'" :class="activeSection === 'home' ? 'bg-devantary-accentXXlight text-devantary-accent' : 'text-devantary-text-light'" class="px-4 py-2 text-sm font-medium rounded-lg hover:bg-devantary-accentXXlight hover:text-devantary-accent transition-all duration-200">
                            Beranda
                        </a>
                        <a href="/services" @click="activeSection = 'services'" :class="activeSection === 'services' ? 'bg-devantary-accentXXlight text-devantary-accent' : 'text-devantary-text-light'" class="px-4 py-2 text-sm font-medium rounded-lg hover:bg-devantary-accentXXlight hover:text-devantary-accent transition-all duration-200">
                            Layanan
                        </a>
                        <a href="/portfolio" @click="activeSection = 'portfolio'" :class="activeSection === 'portfolio' ? 'bg-devantary-accentXXlight text-devantary-accent' : 'text-devantary-text-light'" class="px-4 py-2 text-sm font-medium rounded-lg hover:bg-devantary-accentXXlight hover:text-devantary-accent transition-all duration-200">
                            Portofolio
                        </a>
                        <a href="/demo" @click="activeSection = 'demo'" :class="activeSection === 'demo' ? 'bg-devantary-accentXXlight text-devantary-accent' : 'text-devantary-text-light'" class="px-4 py-2 text-sm font-medium rounded-lg hover:bg-devantary-accentXXlight hover:text-devantary-accent transition-all duration-200">
                            Demo
                        </a>
                        <a href="/contact" class="ml-2 inline-flex items-center px-5 py-2 rounded-full font-semibold shadow-lg hover:shadow-devantary-accent/30 bg-gradient-to-r from-devantary-primary to-devantary-accent text-white hover:from-devantary-primary/90 hover:to-devantary-accent/90 hover:-translate-y-0.5 transition-all duration-300">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                            </svg>
                            Hubungi Kami
                        </a>
                    </div>
                    
                    <!-- Mobile menu button -->
                    <div class="flex items-center sm:hidden">
                        <button @click="open = !open" type="button" class="inline-flex items-center justify-center p-2 rounded-lg text-devantary-text-light hover:text-devantary-accent hover:bg-devantary-accentXXlight transition-all duration-200">
                            <span class="sr-only">Open main menu</span>
                            <svg x-show="!open" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                            </svg>
                            <svg x-show="open" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Mobile menu (improved) -->
            <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-4" class="sm:hidden w-full max-w-6xl mx-auto px-2 mt-2">
                <div class="bg-white/90 backdrop-blur-xl shadow-2xl rounded-2xl py-4 px-4 animate-scaleIn">
                    <!-- Navigation links -->
                    <div class="space-y-2 mb-4">
                        <a href="/" @click="activeSection = 'home'; open = false" :class="activeSection === 'home' ? 'bg-devantary-accentXXlight text-devantary-accent' : 'text-devantary-text-light'" class="flex items-center px-4 py-3 rounded-xl text-devantary-text-light hover:bg-devantary-accentXXlight hover:text-devantary-accent transition-all duration-200">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            <span class="font-medium">Beranda</span>
                        </a>
                        <a href="/services" @click="activeSection = 'services'; open = false" :class="activeSection === 'services' ? 'bg-devantary-accentXXlight text-devantary-accent' : 'text-devantary-text-light'" class="flex items-center px-4 py-3 rounded-xl text-devantary-text-light hover:bg-devantary-accentXXlight hover:text-devantary-accent transition-all duration-200">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span class="font-medium">Layanan</span>
                        </a>
                        <a href="/portfolio" @click="activeSection = 'portfolio'; open = false" :class="activeSection === 'portfolio' ? 'bg-devantary-accentXXlight text-devantary-accent' : 'text-devantary-text-light'" class="flex items-center px-4 py-3 rounded-xl text-devantary-text-light hover:bg-devantary-accentXXlight hover:text-devantary-accent transition-all duration-200">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <span class="font-medium">Portofolio</span>
                        </a>
                        <a href="/demo" @click="activeSection = 'demo'; open = false" :class="activeSection === 'demo' ? 'bg-devantary-accentXXlight text-devantary-accent' : 'text-devantary-text-light'" class="flex items-center px-4 py-3 rounded-xl text-devantary-text-light hover:bg-devantary-accentXXlight hover:text-devantary-accent transition-all duration-200">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span class="font-medium">Demo</span>
                        </a>
                    </div>
                    
                    <!-- CTA Button -->
                    <a href="/contact" class="flex items-center justify-center px-4 py-3 mt-3 rounded-xl font-medium shadow-lg bg-gradient-to-r from-devantary-primary to-devantary-accent text-white text-center hover:shadow-devantary-accent/30 transition-all duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                        Hubungi Kami
                    </a>
                    
                    <!-- Contact Info -->
                    <div class="mt-6 pt-4 border-t border-gray-100 grid grid-cols-2 gap-4 text-sm text-devantary-text-light">
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-2 text-devantary-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span>info@devantary.com</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-2 text-devantary-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <span>+62 812 3456 7890</span>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Add padding top to prevent content from being hidden under fixed navbar -->
        <div class="">
            <main class="flex-grow">
                {{ $slot }}
            </main>
        </div>

        <footer class="text-center py-6 text-sm text-gray-500">
            &copy; {{ date('Y') }} Devantary. All rights reserved.
        </footer>
    </div>
</body>
</html>
