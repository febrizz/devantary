<x-guest-layout>
    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center overflow-hidden pt-24 pb-12 sm:pt-56 sm:pb-16 bg-gradient-to-br from-devantary-accentXXlight via-white to-devantary-accentXlight">
        <!-- Background SVG/Ornament -->
        <div class="absolute inset-0 pointer-events-none select-none z-0">
            <!-- Top left blob -->
            <div class="absolute -top-20 -left-20 w-64 h-64 bg-devantary-accentXlight rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-float-slower"></div>
            <!-- Bottom right blob -->
            <div class="absolute -bottom-20 -right-20 w-64 h-64 bg-devantary-accentLight rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-float-slow"></div>
            <!-- Decorative dots pattern -->
            <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#6E3482 1px, transparent 1px); background-size: 30px 30px;"></div>
            
            <!-- Floating elements -->
            <div class="absolute top-1/4 left-1/4 animate-float-slow opacity-70">
                <div class="w-24 h-24 rounded-xl bg-devantary-accentXlight/20 backdrop-blur-lg border border-devantary-accentXlight/30 rotate-12"></div>
            </div>
            <div class="absolute bottom-1/4 right-1/4 animate-float-slower opacity-70">
                <div class="w-32 h-32 rounded-full bg-devantary-accentLight/20 backdrop-blur-lg border border-devantary-accentLight/30 -rotate-12"></div>
            </div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full relative z-10">
            <div class="flex flex-col items-center text-center">
                <!-- Badge -->
                <div class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-devantary-accentXXlight text-devantary-accent border border-devantary-accentXlight mb-6 animate-pulse-slow">
                    <span class="flex h-2 w-2 rounded-full bg-devantary-accent mr-2"></span>
                    Portfolio & Case Studies
                </div>
                
                <!-- Heading with highlighted words -->
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-devantary-primary mb-4 leading-tight">
                    Karya <span class="bg-gradient-to-r from-devantary-accent via-devantary-accentLight to-devantary-accentXlight bg-clip-text text-transparent">Terbaik</span> Kami
                </h1>
                
                <p class="max-w-2xl mx-auto text-lg sm:text-xl text-devantary-text-light mb-8">
                    Setiap project adalah cerita sukses kolaborasi kami dengan klien dalam mewujudkan solusi digital yang inovatif dan berkualitas tinggi.
                </p>
                
                <!-- CTA Buttons with icons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center mb-10">
                    <a href="#projects" class="inline-flex items-center px-8 py-4 rounded-full font-semibold bg-devantary-accent text-white shadow-lg hover:shadow-xl hover:-translate-y-1 hover:bg-devantary-accentDark transition-all duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        Lihat Semua Project
                    </a>
                    <a href="/contact" class="inline-flex items-center px-8 py-4 rounded-full font-semibold border-2 border-devantary-accent bg-white text-devantary-accent shadow-md hover:shadow-lg hover:-translate-y-1 hover:bg-devantary-accentXXlight transition-all duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        Mulai Project Anda
                    </a>
                </div>
                
                <!-- Scroll indicator with text -->
                <div class="mt-8 flex flex-col items-center animate-pulse-slow">
                    <span class="text-xs uppercase tracking-wider text-devantary-text-light mb-2">Scroll untuk melihat</span>
                    <svg class="w-6 h-6 text-devantary-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Filter Navigation (Interactive) -->
    <div class="w-full -mt-12 z-10 absolute">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-xl p-6 border border-devantary-accentXXlight/50 backdrop-blur-lg">
                <div x-data="{ activeTab: 'all' }" class="flex flex-wrap justify-center">
                    <button @click="activeTab = 'all'" :class="{ 'bg-devantary-accent text-white shadow-md': activeTab === 'all', 'bg-gray-100 text-devantary-text-light hover:bg-devantary-accentXXlight hover:text-devantary-accent': activeTab !== 'all' }" class="px-5 py-2 m-1 rounded-full text-sm font-medium transition-all duration-300 hover:-translate-y-0.5">
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                            </svg>
                            Semua Project
                        </span>
                    </button>
                    <button @click="activeTab = 'web'" :class="{ 'bg-devantary-accent text-white shadow-md': activeTab === 'web', 'bg-gray-100 text-devantary-text-light hover:bg-devantary-accentXXlight hover:text-devantary-accent': activeTab !== 'web' }" class="px-5 py-2 m-1 rounded-full text-sm font-medium transition-all duration-300 hover:-translate-y-0.5">
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            Web Development
                        </span>
                    </button>
                    <button @click="activeTab = 'mobile'" :class="{ 'bg-devantary-accent text-white shadow-md': activeTab === 'mobile', 'bg-gray-100 text-devantary-text-light hover:bg-devantary-accentXXlight hover:text-devantary-accent': activeTab !== 'mobile' }" class="px-5 py-2 m-1 rounded-full text-sm font-medium transition-all duration-300 hover:-translate-y-0.5">
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            </svg>
                            Mobile Apps
                        </span>
                    </button>
                    <button @click="activeTab = 'design'" :class="{ 'bg-devantary-accent text-white shadow-md': activeTab === 'design', 'bg-gray-100 text-devantary-text-light hover:bg-devantary-accentXXlight hover:text-devantary-accent': activeTab !== 'design' }" class="px-5 py-2 m-1 rounded-full text-sm font-medium transition-all duration-300 hover:-translate-y-0.5">
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                            </svg>
                            UI/UX Design
                        </span>
                    </button>
                    <button @click="activeTab = 'branding'" :class="{ 'bg-devantary-accent text-white shadow-md': activeTab === 'branding', 'bg-gray-100 text-devantary-text-light hover:bg-devantary-accentXXlight hover:text-devantary-accent': activeTab !== 'branding' }" class="px-5 py-2 m-1 rounded-full text-sm font-medium transition-all duration-300 hover:-translate-y-0.5">
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg>
                            Branding
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Projects -->
    <div id="projects" class="bg-gradient-to-br from-white to-devantary-accentXXlight/30 py-24 ">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-devantary-accent font-semibold tracking-wide uppercase">Featured Projects</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-devantary-text sm:text-4xl bg-gradient-to-r from-devantary-primary to-devantary-accent bg-clip-text text-transparent">
                    Karya Unggulan Kami
                </p>
                <p class="mt-4 max-w-3xl text-xl text-devantary-text-light lg:mx-auto">
                    Beberapa project terbaik yang telah kami selesaikan dengan kolaborasi bersama klien
                </p>
            </div>

            <div class="mt-16 grid gap-8 lg:grid-cols-3 lg:gap-x-8 lg:gap-y-12">
                <!-- Project 1 -->
                <!-- Contoh card project yang ditingkatkan -->
                <div class="group relative bg-white rounded-2xl shadow-xl overflow-hidden transform hover:-translate-y-3 transition-all duration-300">
                    <!-- Badge di pojok kanan atas -->
                    <div class="absolute top-4 right-4 z-10">
                        <span class="px-3 py-1 text-xs font-bold bg-green-500 text-white rounded-full shadow-lg">Live</span>
                    </div>
                    
                    <!-- Gambar dengan overlay yang lebih interaktif -->
                    <div class="relative h-80 w-full overflow-hidden">
                        <img class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500" src="https://picsum.photos/800/600?random=1" alt="Project Title">
                        <div class="absolute inset-0 bg-gradient-to-t from-devantary-accent/80 via-devantary-accent/40 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300"></div>
                        
                        <!-- Konten overlay yang muncul saat hover -->
                        <div class="absolute inset-0 flex flex-col justify-end p-6 text-white transform translate-y-8 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300">
                            <h3 class="text-xl font-bold mb-2">Project Title</h3>
                            <p class="text-sm mb-4">Deskripsi singkat project dengan detail yang menarik dan hasil yang dicapai.</p>
                            <div class="flex space-x-2">
                                <span class="px-2 py-1 text-xs font-medium bg-white/20 rounded-full backdrop-blur-sm">Laravel</span>
                                <span class="px-2 py-1 text-xs font-medium bg-white/20 rounded-full backdrop-blur-sm">Vue.js</span>
                                <span class="px-2 py-1 text-xs font-medium bg-white/20 rounded-full backdrop-blur-sm">Tailwind</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Konten card -->
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="text-xl font-bold text-devantary-primary">Project Title</h3>
                            <div class="flex items-center space-x-1">
                                <span class="inline-block w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
                                <span class="text-sm text-devantary-text-light">Live</span>
                            </div>
                        </div>
                        
                        <!-- Progress bar atau metrics -->
                        <div class="mb-4">
                            <div class="flex justify-between text-xs mb-1">
                                <span class="font-medium text-devantary-text-light">Completion</span>
                                <span class="font-bold text-devantary-accent">100%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-1.5">
                                <div class="bg-gradient-to-r from-devantary-primary to-devantary-accent h-1.5 rounded-full" style="width: 100%"></div>
                            </div>
                        </div>
                        
                        <!-- Tech stack badges -->
                        <div class="mt-4 flex flex-wrap gap-2 mb-4">
                            <span class="px-3 py-1 text-xs font-medium bg-devantary-accentXXlight text-devantary-accent rounded-full">Laravel</span>
                            <span class="px-3 py-1 text-xs font-medium bg-devantary-accentXXlight text-devantary-accent rounded-full">Vue.js</span>
                            <span class="px-3 py-1 text-xs font-medium bg-devantary-accentXXlight text-devantary-accent rounded-full">Tailwind</span>
                        </div>
                        
                        <!-- CTA button -->
                        <a href="/portfolio/detail" class="mt-2 w-full inline-flex items-center justify-center px-4 py-2 rounded-xl font-medium bg-devantary-accent text-white hover:bg-devantary-accentDark transition-all duration-200">
                            View Case Study
                            <svg class="ml-2 w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Project 2 -->
                <!-- Contoh card project yang ditingkatkan -->
                <div class="group relative bg-white rounded-2xl shadow-xl overflow-hidden transform hover:-translate-y-3 transition-all duration-300">
                    <!-- Badge di pojok kanan atas -->
                    <div class="absolute top-4 right-4 z-10">
                        <span class="px-3 py-1 text-xs font-bold bg-green-500 text-white rounded-full shadow-lg">Live</span>
                    </div>
                    
                    <!-- Gambar dengan overlay yang lebih interaktif -->
                    <div class="relative h-80 w-full overflow-hidden">
                        <img class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500" src="https://picsum.photos/800/600?random=2" alt="Project Title">
                        <div class="absolute inset-0 bg-gradient-to-t from-devantary-accent/80 via-devantary-accent/40 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300"></div>
                        
                        <!-- Konten overlay yang muncul saat hover -->
                        <div class="absolute inset-0 flex flex-col justify-end p-6 text-white transform translate-y-8 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300">
                            <h3 class="text-xl font-bold mb-2">Project Title</h3>
                            <p class="text-sm mb-4">Deskripsi singkat project dengan detail yang menarik dan hasil yang dicapai.</p>
                            <div class="flex space-x-2">
                                <span class="px-2 py-1 text-xs font-medium bg-white/20 rounded-full backdrop-blur-sm">Laravel</span>
                                <span class="px-2 py-1 text-xs font-medium bg-white/20 rounded-full backdrop-blur-sm">Vue.js</span>
                                <span class="px-2 py-1 text-xs font-medium bg-white/20 rounded-full backdrop-blur-sm">Tailwind</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Konten card -->
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="text-xl font-bold text-devantary-primary">Project Title</h3>
                            <div class="flex items-center space-x-1">
                                <span class="inline-block w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
                                <span class="text-sm text-devantary-text-light">Live</span>
                            </div>
                        </div>
                        
                        <!-- Progress bar atau metrics -->
                        <div class="mb-4">
                            <div class="flex justify-between text-xs mb-1">
                                <span class="font-medium text-devantary-text-light">Completion</span>
                                <span class="font-bold text-devantary-accent">100%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-1.5">
                                <div class="bg-gradient-to-r from-devantary-primary to-devantary-accent h-1.5 rounded-full" style="width: 100%"></div>
                            </div>
                        </div>
                        
                        <!-- Tech stack badges -->
                        <div class="mt-4 flex flex-wrap gap-2 mb-4">
                            <span class="px-3 py-1 text-xs font-medium bg-devantary-accentXXlight text-devantary-accent rounded-full">Laravel</span>
                            <span class="px-3 py-1 text-xs font-medium bg-devantary-accentXXlight text-devantary-accent rounded-full">Vue.js</span>
                            <span class="px-3 py-1 text-xs font-medium bg-devantary-accentXXlight text-devantary-accent rounded-full">Tailwind</span>
                        </div>
                        
                        <!-- CTA button -->
                        <a href="/portfolio/detail" class="mt-2 w-full inline-flex items-center justify-center px-4 py-2 rounded-xl font-medium bg-devantary-accent text-white hover:bg-devantary-accentDark transition-all duration-200">
                            View Case Study
                            <svg class="ml-2 w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Project 3 -->
                <!-- Contoh card project yang ditingkatkan -->
                <div class="group relative bg-white rounded-2xl shadow-xl overflow-hidden transform hover:-translate-y-3 transition-all duration-300">
                    <!-- Badge di pojok kanan atas -->
                    <div class="absolute top-4 right-4 z-10">
                        <span class="px-3 py-1 text-xs font-bold bg-green-500 text-white rounded-full shadow-lg">Live</span>
                    </div>
                    
                    <!-- Gambar dengan overlay yang lebih interaktif -->
                    <div class="relative h-80 w-full overflow-hidden">
                        <img class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500" src="https://picsum.photos/800/600?random=3" alt="Project Title">
                        <div class="absolute inset-0 bg-gradient-to-t from-devantary-accent/80 via-devantary-accent/40 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300"></div>
                        
                        <!-- Konten overlay yang muncul saat hover -->
                        <div class="absolute inset-0 flex flex-col justify-end p-6 text-white transform translate-y-8 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300">
                            <h3 class="text-xl font-bold mb-2">Project Title</h3>
                            <p class="text-sm mb-4">Deskripsi singkat project dengan detail yang menarik dan hasil yang dicapai.</p>
                            <div class="flex space-x-2">
                                <span class="px-2 py-1 text-xs font-medium bg-white/20 rounded-full backdrop-blur-sm">Laravel</span>
                                <span class="px-2 py-1 text-xs font-medium bg-white/20 rounded-full backdrop-blur-sm">Vue.js</span>
                                <span class="px-2 py-1 text-xs font-medium bg-white/20 rounded-full backdrop-blur-sm">Tailwind</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Konten card -->
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="text-xl font-bold text-devantary-primary">Project Title</h3>
                            <div class="flex items-center space-x-1">
                                <span class="inline-block w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
                                <span class="text-sm text-devantary-text-light">Live</span>
                            </div>
                        </div>
                        
                        <!-- Progress bar atau metrics -->
                        <div class="mb-4">
                            <div class="flex justify-between text-xs mb-1">
                                <span class="font-medium text-devantary-text-light">Completion</span>
                                <span class="font-bold text-devantary-accent">100%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-1.5">
                                <div class="bg-gradient-to-r from-devantary-primary to-devantary-accent h-1.5 rounded-full" style="width: 100%"></div>
                            </div>
                        </div>
                        
                        <!-- Tech stack badges -->
                        <div class="mt-4 flex flex-wrap gap-2 mb-4">
                            <span class="px-3 py-1 text-xs font-medium bg-devantary-accentXXlight text-devantary-accent rounded-full">Laravel</span>
                            <span class="px-3 py-1 text-xs font-medium bg-devantary-accentXXlight text-devantary-accent rounded-full">Vue.js</span>
                            <span class="px-3 py-1 text-xs font-medium bg-devantary-accentXXlight text-devantary-accent rounded-full">Tailwind</span>
                        </div>
                        
                        <!-- CTA button -->
                        <a href="/portfolio/detail" class="mt-2 w-full inline-flex items-center justify-center px-4 py-2 rounded-xl font-medium bg-devantary-accent text-white hover:bg-devantary-accentDark transition-all duration-200">
                            View Case Study
                            <svg class="ml-2 w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tech Stack Section -->
    <section class="py-24 bg-white relative overflow-hidden">
        <!-- Background elements -->
        <div class="absolute inset-0 pointer-events-none select-none z-0">
            <div class="absolute -top-20 -right-20 w-64 h-64 bg-devantary-accentXlight rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-float-slower"></div>
            <div class="absolute -bottom-20 -left-20 w-64 h-64 bg-devantary-accentLight rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-float-slow"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="lg:text-center">
                <h2 class="text-base text-devantary-accent font-semibold tracking-wide uppercase">Our Tech Stack</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-devantary-text sm:text-4xl bg-gradient-to-r from-devantary-primary to-devantary-accent bg-clip-text text-transparent">
                    Teknologi Terdepan
                </p>
                <p class="mt-4 max-w-3xl text-xl text-devantary-text-light lg:mx-auto">
                    Kami menggunakan teknologi modern dan terpercaya untuk membangun solusi digital berkualitas tinggi
                </p>
            </div>

            <div class="mt-16">
                <div class="grid grid-cols-2 gap-8 md:grid-cols-4">
                    <div class="col-span-1 flex justify-center">
                        <div class="group relative">
                            <div class="relative h-16 w-16">
                                <img src="{{ asset('svg/icon-tech/laravel.svg') }}" alt="Laravel" class="h-16 w-16 filter grayscale group-hover:grayscale-0 transition-all duration-300">
                            </div>
                            <div class="mt-2 text-center">
                                <p class="text-sm font-medium text-devantary-text">Laravel</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1 flex justify-center">
                        <div class="group relative">
                            <div class="relative h-16 w-16">
                                <img src="{{ asset('svg/icon-tech/react.svg') }}" alt="React" class="h-16 w-16 filter grayscale group-hover:grayscale-0 transition-all duration-300">
                            </div>
                            <div class="mt-2 text-center">
                                <p class="text-sm font-medium text-devantary-text">React</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1 flex justify-center">
                        <div class="group relative">
                            <div class="relative h-16 w-16">
                                <img src="{{ asset('svg/icon-tech/vue.svg') }}" alt="Vue.js" class="h-16 w-16 filter grayscale group-hover:grayscale-0 transition-all duration-300">
                            </div>
                            <div class="mt-2 text-center">
                                <p class="text-sm font-medium text-devantary-text">Vue.js</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1 flex justify-center">
                        <div class="group relative">
                            <div class="relative h-16 w-16">
                                <img src="{{ asset('svg/icon-tech/tailwind.svg') }}" alt="Tailwind CSS" class="h-16 w-16 filter grayscale group-hover:grayscale-0 transition-all duration-300">
                            </div>
                            <div class="mt-2 text-center">
                                <p class="text-sm font-medium text-devantary-text">Tailwind CSS</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-24 bg-gradient-to-br from-devantary-accentXXlight via-white to-devantary-accentXlight relative overflow-hidden">
        <!-- Background SVG/Ornament -->
        <div class="absolute inset-0 pointer-events-none select-none z-0">
            <!-- Top left blob -->
            <div class="absolute -top-20 -left-20 w-64 h-64 bg-devantary-accentXlight rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-float-slower"></div>
            <!-- Bottom right blob -->
            <div class="absolute -bottom-20 -right-20 w-64 h-64 bg-devantary-accentLight rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-float-slow"></div>
            <!-- Decorative dots pattern -->
            <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#6E3482 1px, transparent 1px); background-size: 30px 30px;"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="lg:text-center mb-16">
                <h2 class="text-base text-devantary-accent font-semibold tracking-wide uppercase">Testimonials</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-devantary-text sm:text-4xl bg-gradient-to-r from-devantary-primary to-devantary-accent bg-clip-text text-transparent">
                    Apa Kata Klien Kami
                </p>
                <p class="mt-4 max-w-3xl text-xl text-devantary-text-light lg:mx-auto">
                    Kami bangga dengan apa yang klien katakan tentang kerja sama dengan tim kami
                </p>
            </div>
    
            <!-- Testimonial Slider -->
            <div x-data="{ active: 0, testimonials: [
                {
                    brand: 'Devantary',
                    logo: 'DV',
                    quote: 'Devantary bener-bener ngebantu digitalisasi bisnis gue. Prosesnya smooth, hasilnya keren, dan timnya responsif banget!',
                    name: 'Rizky Pratama',
                    role: 'Owner, Kopi Mantap',
                    photo: 'https://randomuser.me/api/portraits/men/32.jpg'
                },
                {
                    brand: 'Devantary',
                    logo: 'DV',
                    quote: 'Kerja bareng Devantary itu asik, mereka ngerti kebutuhan startup dan selalu kasih solusi out of the box!',
                    name: 'Dewi Lestari',
                    role: 'CTO, EduTech.id',
                    photo: 'https://randomuser.me/api/portraits/women/44.jpg'
                },
                {
                    brand: 'Devantary',
                    logo: 'DV',
                    quote: 'Website company profile kami jadi jauh lebih profesional dan modern. Support after sales-nya juga mantap!',
                    name: 'Budi Santoso',
                    role: 'CEO, Santoso Group',
                    photo: 'https://randomuser.me/api/portraits/men/65.jpg'
                }
            ] }" class="relative">
                <!-- Testimonial Card -->
                <template x-for="(item, idx) in testimonials" :key="idx">
                    <div x-show="active === idx" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="flex flex-col md:flex-row items-center bg-white rounded-2xl shadow-xl p-8 md:p-12 gap-8 md:gap-12 max-w-4xl mx-auto">
                        <!-- Kiri: Logo & Brand -->
                        <div class="flex flex-col items-center md:items-start min-w-[120px]">
                            <div class="h-10 w-10 rounded-full bg-gradient-to-br from-devantary-accent to-devantary-accentLight flex items-center justify-center mb-2">
                                <span class="text-white font-bold text-lg" x-text="item.logo"></span>
                            </div>
                            <span class="text-devantary-text font-semibold text-base" x-text="item.brand"></span>
                        </div>
                        <!-- Tengah: Quote & Nama -->
                        <div class="flex-1 text-center md:text-left">
                            <p class="text-xl md:text-2xl text-devantary-text font-medium mb-4" x-text="item.quote"></p>
                            <div class="mt-4">
                                <span class="font-bold text-devantary-primary" x-text="item.name"></span>
                                <span class="text-devantary-text-light" x-text="' — ' + item.role"></span>
                            </div>
                        </div>
                        <!-- Kanan: Foto User -->
                        <div class="flex-shrink-0">
                            <img :src="item.photo" :alt="item.name" class="h-20 w-20 rounded-full object-cover border-4 border-devantary-accentXXlight shadow-md">
                        </div>
                    </div>
                </template>
                <!-- Slider Navigation -->
                <div class="flex justify-center mt-8 space-x-2">
                    <template x-for="(item, idx) in testimonials" :key="'nav-'+idx">
                        <button @click="active = idx" :class="active === idx ? 'bg-devantary-accent' : 'bg-gray-300'" class="w-3 h-3 rounded-full focus:outline-none transition-colors duration-300"></button>
                    </template>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-devantary-primary">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <h2 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                <span class="block">Siap untuk memulai project?</span>
                <span class="block text-devantary-accent">Hubungi kami sekarang.</span>
            </h2>
            <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                <div class="inline-flex rounded-md shadow">
                    <a href="/contact" class="inline-flex items-center px-8 py-4 rounded-full font-semibold bg-devantary-accent text-white shadow-lg hover:shadow-xl hover:-translate-y-1 hover:bg-devantary-accentDark transition-all duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        Mulai Project
                    </a>
                </div>
                <div class="ml-4 inline-flex rounded-md shadow">
                    <a href="/services" class="inline-flex items-center px-8 py-4 rounded-full font-semibold border-2 border-white/20 bg-white text-devantary-primary shadow-md hover:shadow-lg hover:-translate-y-1 hover:bg-gray-50 transition-all duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        Layanan Kami
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>