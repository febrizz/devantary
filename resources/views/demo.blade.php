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
                    Live Demo Applications
                </div>
                
                <!-- Heading with highlighted words -->
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-devantary-primary mb-4 leading-tight">
                    Experience Our <span class="bg-gradient-to-r from-devantary-accent via-devantary-accentLight to-devantary-accentXlight bg-clip-text text-transparent">Solutions</span>
                </h1>
                
                <p class="max-w-2xl mx-auto text-lg sm:text-xl text-devantary-text-light mb-8">
                    Rasakan langsung pengalaman menggunakan aplikasi yang kami kembangkan dengan teknologi terkini
                </p>
                
                <!-- CTA Buttons with icons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center mb-10">
                    <a href="#demo-apps" class="inline-flex items-center px-8 py-4 rounded-full font-semibold bg-devantary-accent text-white shadow-lg hover:shadow-xl hover:-translate-y-1 hover:bg-devantary-accentDark transition-all duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Try Our Demos
                    </a>
                    <a href="/contact" class="inline-flex items-center px-8 py-4 rounded-full font-semibold border-2 border-devantary-accent bg-white text-devantary-accent shadow-md hover:shadow-lg hover:-translate-y-1 hover:bg-devantary-accentXXlight transition-all duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Demo Apps Filter Navigation (Interactive) -->
    <div class="absolute w-full -mt-12 z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-xl p-6 border border-devantary-accentXXlight/50 backdrop-blur-lg">
                <div x-data="{ activeTab: 'all' }" class="flex flex-wrap justify-center">
                    <button @click="activeTab = 'all'" :class="{ 'bg-devantary-accent text-white shadow-md': activeTab === 'all', 'bg-gray-100 text-devantary-text-light hover:bg-devantary-accentXXlight hover:text-devantary-accent': activeTab !== 'all' }" class="px-5 py-2 m-1 rounded-full text-sm font-medium transition-all duration-300 hover:-translate-y-0.5">
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                            </svg>
                            All Demos
                        </span>
                    </button>
                    <button @click="activeTab = 'ecommerce'" :class="{ 'bg-devantary-accent text-white shadow-md': activeTab === 'ecommerce', 'bg-gray-100 text-devantary-text-light hover:bg-devantary-accentXXlight hover:text-devantary-accent': activeTab !== 'ecommerce' }" class="px-5 py-2 m-1 rounded-full text-sm font-medium transition-all duration-300 hover:-translate-y-0.5">
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                            E-commerce
                        </span>
                    </button>
                    <button @click="activeTab = 'crm'" :class="{ 'bg-devantary-accent text-white shadow-md': activeTab === 'crm', 'bg-gray-100 text-devantary-text-light hover:bg-devantary-accentXXlight hover:text-devantary-accent': activeTab !== 'crm' }" class="px-5 py-2 m-1 rounded-full text-sm font-medium transition-all duration-300 hover:-translate-y-0.5">
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                            CRM
                        </span>
                    </button>
                    <button @click="activeTab = 'lms'" :class="{ 'bg-devantary-accent text-white shadow-md': activeTab === 'lms', 'bg-gray-100 text-devantary-text-light hover:bg-devantary-accentXXlight hover:text-devantary-accent': activeTab !== 'lms' }" class="px-5 py-2 m-1 rounded-full text-sm font-medium transition-all duration-300 hover:-translate-y-0.5">
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                            LMS
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Demo Apps Showcase -->
    <div id="demo-apps" class="bg-gradient-to-br from-white to-devantary-accentXXlight/30 py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-devantary-accent font-semibold tracking-wide uppercase">Featured Demos</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-devantary-text sm:text-4xl bg-gradient-to-r from-devantary-primary to-devantary-accent bg-clip-text text-transparent">
                    Demo Aplikasi Unggulan
                </p>
                <p class="mt-4 max-w-2xl text-xl text-devantary-text-light lg:mx-auto">
                    Jelajahi demo aplikasi kami dan rasakan pengalaman menggunakan solusi digital yang kami kembangkan
                </p>
            </div>

            <div class="mt-16 grid gap-8 lg:grid-cols-3 lg:gap-x-8 lg:gap-y-12">
                <!-- E-commerce Demo -->
                <div class="group relative bg-white rounded-2xl shadow-xl overflow-hidden transform hover:-translate-y-3 transition-all duration-300" x-show="activeTab === 'all' || activeTab === 'ecommerce'">
                    <!-- Badge di pojok kanan atas -->
                    <div class="absolute top-4 right-4 z-10">
                        <span class="px-3 py-1 text-xs font-bold bg-green-500 text-white rounded-full shadow-lg">Live</span>
                    </div>
                    
                    <!-- Image container with overlay -->
                    <div class="relative h-48 overflow-hidden">
                        <img class="w-full h-full object-cover transform group-hover:scale-110 transition-all duration-500" src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&auto=format&fit=crop&w=2850&q=80" alt="E-commerce Demo">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300"></div>
                    </div>
                    
                    <!-- Content -->
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-devantary-text group-hover:text-devantary-accent transition-colors duration-300">E-commerce Platform</h3>
                        <p class="mt-3 text-devantary-text-light">
                            Platform e-commerce modern dengan fitur pembayaran terintegrasi, manajemen produk, dan analitik real-time.
                        </p>
                        
                        <!-- Tech stack tags -->
                        <div class="mt-6 flex flex-wrap gap-2 mb-6">
                            <span class="px-3 py-1 text-xs font-medium bg-devantary-accentXXlight text-devantary-accent rounded-full">
                                <img src="{{ asset('svg/icon-tech/laravel.svg') }}" alt="Laravel" class="inline-block w-3 h-3 mr-1">
                                Laravel
                            </span>
                            <span class="px-3 py-1 text-xs font-medium bg-devantary-accentXXlight text-devantary-accent rounded-full">
                                <img src="{{ asset('svg/icon-tech/vue.svg') }}" alt="Vue.js" class="inline-block w-3 h-3 mr-1">
                                Vue.js
                            </span>
                            <span class="px-3 py-1 text-xs font-medium bg-devantary-accentXXlight text-devantary-accent rounded-full">
                                <img src="{{ asset('svg/icon-tech/tailwind.svg') }}" alt="Tailwind" class="inline-block w-3 h-3 mr-1">
                                Tailwind
                            </span>
                        </div>
                        
                        <!-- Action buttons -->
                        <div class="flex items-center justify-between">
                            <a href="https://demo-ecommerce.devantary.com" target="_blank" class="inline-flex items-center px-6 py-3 text-base font-medium rounded-full text-white bg-gradient-to-r from-devantary-accent to-devantary-accentDark hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-300">
                                Try Demo
                                <svg class="ml-2 -mr-1 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                            </a>
                            <a href="/docs/ecommerce" class="inline-flex items-center text-sm font-semibold text-devantary-primary hover:text-devantary-accent transition-colors">
                                Documentation
                                <svg class="ml-2 w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- CRM Demo -->
                <div class="group relative bg-white rounded-2xl shadow-xl overflow-hidden transform hover:-translate-y-3 transition-all duration-300" x-show="activeTab === 'all' || activeTab === 'crm'">
                    <!-- Badge di pojok kanan atas -->
                    <div class="absolute top-4 right-4 z-10">
                        <span class="px-3 py-1 text-xs font-bold bg-green-500 text-white rounded-full shadow-lg">Live</span>
                    </div>
                    
                    <!-- Image container with overlay -->
                    <div class="relative h-48 overflow-hidden">
                        <img class="w-full h-full object-cover transform group-hover:scale-110 transition-all duration-500" src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-1.2.1&auto=format&fit=crop&w=2850&q=80" alt="CRM Demo">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300"></div>
                    </div>
                    
                    <!-- Content -->
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-devantary-text group-hover:text-devantary-accent transition-colors duration-300">CRM System</h3>
                        <p class="mt-3 text-devantary-text-light">
                            Sistem manajemen pelanggan modern dengan fitur tracking, analitik, dan integrasi multi-platform.
                        </p>
                        
                        <!-- Tech stack tags -->
                        <div class="mt-6 flex flex-wrap gap-2 mb-6">
                            <span class="px-3 py-1 text-xs font-medium bg-devantary-accentXXlight text-devantary-accent rounded-full">
                                <img src="{{ asset('svg/icon-tech/react.svg') }}" alt="React" class="inline-block w-3 h-3 mr-1">
                                React
                            </span>
                            <span class="px-3 py-1 text-xs font-medium bg-devantary-accentXXlight text-devantary-accent rounded-full">
                                Node.js
                            </span>
                            <span class="px-3 py-1 text-xs font-medium bg-devantary-accentXXlight text-devantary-accent rounded-full">
                                MongoDB
                            </span>
                        </div>
                        
                        <!-- Action buttons -->
                        <div class="flex items-center justify-between">
                            <a href="https://demo-crm.devantary.com" target="_blank" class="inline-flex items-center px-6 py-3 text-base font-medium rounded-full text-white bg-gradient-to-r from-devantary-accent to-devantary-accentDark hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-300">
                                Try Demo
                                <svg class="ml-2 -mr-1 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                            </a>
                            <a href="/docs/crm" class="inline-flex items-center text-sm font-semibold text-devantary-primary hover:text-devantary-accent transition-colors">
                                Documentation
                                <svg class="ml-2 w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- LMS Demo -->
                <div class="group relative bg-white rounded-2xl shadow-xl overflow-hidden transform hover:-translate-y-3 transition-all duration-300" x-show="activeTab === 'all' || activeTab === 'lms'">
                    <!-- Badge di pojok kanan atas -->
                    <div class="absolute top-4 right-4 z-10">
                        <span class="px-3 py-1 text-xs font-bold bg-green-500 text-white rounded-full shadow-lg">Live</span>
                    </div>
                    
                    <!-- Image container with overlay -->
                    <div class="relative h-48 overflow-hidden">
                        <img class="w-full h-full object-cover transform group-hover:scale-110 transition-all duration-500" src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&auto=format&fit=crop&w=2850&q=80" alt="LMS Demo">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300"></div>
                    </div>
                    
                    <!-- Content -->
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-devantary-text group-hover:text-devantary-accent transition-colors duration-300">Learning Management System</h3>
                        <p class="mt-3 text-devantary-text-light">
                            Platform pembelajaran online interaktif dengan video streaming, quiz, dan sistem sertifikasi.
                        </p>
                        
                        <!-- Tech stack tags -->
                        <div class="mt-6 flex flex-wrap gap-2 mb-6">
                            <span class="px-3 py-1 text-xs font-medium bg-devantary-accentXXlight text-devantary-accent rounded-full">
                                <img src="{{ asset('svg/icon-tech/laravel.svg') }}" alt="Laravel" class="inline-block w-3 h-3 mr-1">
                                Laravel
                            </span>
                            <span class="px-3 py-1 text-xs font-medium bg-devantary-accentXXlight text-devantary-accent rounded-full">
                                Alpine.js
                            </span>
                            <span class="px-3 py-1 text-xs font-medium bg-devantary-accentXXlight text-devantary-accent rounded-full">
                                MySQL
                            </span>
                        </div>
                        
                        <!-- Action buttons -->
                        <div class="flex items-center justify-between">
                            <a href="https://demo-lms.devantary.com" target="_blank" class="inline-flex items-center px-6 py-3 text-base font-medium rounded-full text-white bg-gradient-to-r from-devantary-accent to-devantary-accentDark hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-300">
                                Try Demo
                                <svg class="ml-2 -mr-1 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                            </a>
                            <a href="/docs/lms" class="inline-flex items-center text-sm font-semibold text-devantary-primary hover:text-devantary-accent transition-colors">
                                Documentation
                                <svg class="ml-2 w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <section class="py-24 bg-gradient-to-br from-white to-devantary-accentXXlight/30 relative overflow-hidden">
        <!-- Background elements -->
        <div class="absolute inset-0 pointer-events-none select-none z-0">
            <!-- Top right blob -->
            <div class="absolute -top-20 -right-20 w-64 h-64 bg-devantary-accentXlight rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-float-slower"></div>
            <!-- Bottom left blob -->
            <div class="absolute -bottom-20 -left-20 w-64 h-64 bg-devantary-accentLight rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-float-slow"></div>
            <!-- Decorative dots pattern -->
            <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#6E3482 1px, transparent 1px); background-size: 30px 30px;"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="lg:text-center">
                <h2 class="text-base text-devantary-accent font-semibold tracking-wide uppercase">Demo Features</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-devantary-text sm:text-4xl bg-gradient-to-r from-devantary-primary to-devantary-accent bg-clip-text text-transparent">
                    Fitur Unggulan Demo
                </p>
                <p class="mt-4 max-w-2xl text-xl text-devantary-text-light lg:mx-auto">
                    Fitur-fitur yang dapat Anda coba dalam demo aplikasi kami
                </p>
            </div>

            <div class="mt-16 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Feature 1 -->
                <div class="relative group bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-devantary-accentXXlight/30">
                    <div class="absolute right-8 top-8">
                        <div class="flex items-center justify-center h-12 w-12 rounded-full bg-devantary-accentXXlight text-devantary-accent group-hover:bg-devantary-accent group-hover:text-white transition-colors duration-300">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-devantary-text group-hover:text-devantary-accent transition-colors duration-300">Live Preview</h3>
                    <p class="mt-4 text-devantary-text-light">Akses langsung ke sistem dengan data dummy yang realistis</p>
                </div>

                <!-- Feature 2 -->
                <div class="relative group bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-devantary-accentXXlight/30">
                    <div class="absolute right-8 top-8">
                        <div class="flex items-center justify-center h-12 w-12 rounded-full bg-devantary-accentXXlight text-devantary-accent group-hover:bg-devantary-accent group-hover:text-white transition-colors duration-300">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-devantary-text group-hover:text-devantary-accent transition-colors duration-300">30-Day Trial</h3>
                    <p class="mt-4 text-devantary-text-light">Coba semua fitur premium selama 30 hari tanpa biaya</p>
                </div>

                <!-- Feature 3 -->
                <div class="relative group bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-devantary-accentXXlight/30">
                    <div class="absolute right-8 top-8">
                        <div class="flex items-center justify-center h-12 w-12 rounded-full bg-devantary-accentXXlight text-devantary-accent group-hover:bg-devantary-accent group-hover:text-white transition-colors duration-300">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-devantary-text group-hover:text-devantary-accent transition-colors duration-300">Sample Data</h3>
                    <p class="mt-4 text-devantary-text-light">Dataset lengkap untuk mensimulasikan penggunaan real</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-devantary-primary relative overflow-hidden">
        <!-- Background elements -->
        <div class="absolute inset-0 pointer-events-none select-none">
            <!-- Decorative dots pattern -->
            <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 30px 30px;"></div>
            
            <!-- Floating elements -->
            <div class="absolute top-1/4 left-1/4 animate-float-slow opacity-20">
                <div class="w-24 h-24 rounded-xl bg-white/10 backdrop-blur-lg border border-white/10 rotate-12"></div>
            </div>
            <div class="absolute bottom-1/4 right-1/4 animate-float-slower opacity-20">
                <div class="w-32 h-32 rounded-full bg-white/10 backdrop-blur-lg border border-white/10 -rotate-12"></div>
            </div>
        </div>
        
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between relative z-10">
            <div>
                <h2 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                    <span class="block">Tertarik dengan demo kami?</span>
                    <span class="block bg-gradient-to-r from-devantary-accentXlight via-white to-devantary-accentXlight bg-clip-text text-transparent">Mari Diskusikan Kebutuhan Anda</span>
                </h2>
                <p class="mt-4 text-lg text-gray-300 max-w-xl">
                    Tim kami siap membantu mewujudkan solusi digital yang sesuai dengan kebutuhan bisnis Anda. Hubungi kami untuk konsultasi gratis.
                </p>
                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="/contact" class="inline-flex items-center px-8 py-4 rounded-full font-semibold bg-white text-devantary-primary shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        Hubungi Kami
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                    <a href="/portfolio" class="inline-flex items-center px-8 py-4 rounded-full font-semibold border-2 border-white/20 text-white hover:bg-white/10 backdrop-blur-lg transform hover:-translate-y-1 transition-all duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        Lihat Portfolio
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>