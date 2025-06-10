<x-guest-layout>
    <!-- Hero Section -->
    <section class="relative flex items-center min-h-screen pt-24 pb-12 overflow-hidden sm:pt-56 sm:pb-16 bg-gradient-to-br from-indigo-50 via-white to-purple-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900">
        <!-- Background SVG/Ornament -->
        <div class="absolute inset-0 z-0 pointer-events-none select-none">
            <!-- Top left blob -->
            <div class="absolute w-64 h-64 rounded-full -top-20 -left-20 bg-indigo-200 dark:bg-indigo-900 mix-blend-multiply filter blur-3xl opacity-30 animate-float-slower"></div>
            <!-- Bottom right blob -->
            <div class="absolute w-64 h-64 rounded-full -bottom-20 -right-20 bg-purple-200 dark:bg-purple-900 mix-blend-multiply filter blur-3xl opacity-20 animate-float-slow"></div>
            <!-- Decorative dots pattern -->
            <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#6E3482 1px, transparent 1px); background-size: 30px 30px;"></div>
            <!-- Decorative lines -->
            {{-- <div class="absolute left-0 w-full h-px top-1/4 bg-gradient-to-r from-transparent via-devantary-accentLight to-transparent opacity-30"></div> --}}
            {{-- <div class="absolute left-0 w-full h-px top-3/4 bg-gradient-to-r from-transparent via-devantary-accentLight to-transparent opacity-30"></div> --}}
        </div>
        
        <div class="relative z-10 w-full px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex flex-col items-center text-center">
                <!-- Badge -->
                <div class="inline-flex items-center px-4 py-1.5 mb-6 text-sm font-medium border rounded-full bg-indigo-50 text-indigo-600 dark:bg-indigo-900/30 dark:text-indigo-300 border-indigo-100 dark:border-indigo-800 animate-pulse-slow">
                    <span class="flex w-2 h-2 mr-2 rounded-full bg-indigo-500 animate-ping"></span>
                    Digital Agency & Web Development
                </div>
                
                <!-- Heading with highlighted words -->
                <h1 class="mb-4 text-4xl font-extrabold leading-tight sm:text-5xl md:text-6xl text-gray-900 dark:text-white">
                    Wujudkan <span class="text-transparent bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 bg-clip-text">Ide Digital</span> Anda
                </h1>
                
                <p class="max-w-2xl mx-auto mb-8 text-lg sm:text-xl text-gray-600 dark:text-gray-300">
                    Kami membantu bisnis Anda berkembang melalui solusi digital inovatif, modern, dan berkualitas tinggi dengan teknologi terkini.
                </p>
                
                <!-- CTA Buttons with icons -->
                <div class="flex flex-col justify-center gap-4 mb-16 sm:flex-row">
                    <a href="/contact" class="inline-flex items-center px-8 py-4 font-semibold text-white transition-all duration-300 bg-gradient-to-r from-indigo-600 to-purple-600 rounded-full shadow-lg hover:shadow-xl hover:-translate-y-1 hover:from-indigo-700 hover:to-purple-700 dark:text-white dark:hover:text-white dark:bg-gradient-to-r dark:from-indigo-800 dark:to-purple-800 dark:hover:from-indigo-900 dark:hover:to-purple-900">
                        <i class="ph-duotone ph-lightning mr-2"></i>
                        Mulai Project
                    </a>
                    <a href="/portfolio" class="inline-flex items-center px-8 py-4 font-semibold transition-all duration-300 bg-white dark:bg-gray-800 border-2 rounded-full shadow-md border-indigo-200 dark:border-gray-700 text-indigo-600 dark:text-indigo-400 hover:shadow-lg hover:-translate-y-1 hover:bg-indigo-50 dark:hover:bg-gray-700 dark:hover:text-white dark:hover:bg-indigo-500">
                        <i class="ph-duotone ph-code mr-2"></i>
                        
                        Lihat Portfolio
                    </a>
                </div>
                
                <!-- Feature Cards with hover effects -->
                <div class="grid w-full max-w-4xl grid-cols-1 gap-6 mt-2 md:grid-cols-3">
                    <!-- Card 1: Clients -->
                    <div class="relative flex flex-col items-center p-8 transition-all duration-500 bg-white border border-gray-100 rounded-2xl shadow-lg group hover:-translate-y-2 hover:shadow-2xl dark:bg-gray-800 dark:border-gray-700 overflow-hidden">
                        <!-- Decorative gradient background -->
                        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500"></div>
                        
                        <!-- Client avatars with improved hover effect -->
                        <div class="relative flex -space-x-3 mb-6 group-hover:-space-x-1 transition-all duration-300">
                            <img class="w-14 h-14 border-4 border-white rounded-full shadow-lg ring-2 ring-indigo-100 dark:ring-gray-700 transition-all duration-300 transform group-hover:scale-110" 
                                 src="https://randomuser.me/api/portraits/men/32.jpg" 
                                 alt="User 1"
                                 style="z-index: 3">
                            <img class="w-14 h-14 border-4 border-white rounded-full shadow-lg ring-2 ring-indigo-100 dark:ring-gray-700 transition-all duration-300 transform group-hover:scale-110" 
                                 src="https://randomuser.me/api/portraits/women/44.jpg" 
                                 alt="User 2"
                                 style="z-index: 2">
                            <img class="w-14 h-14 border-4 border-white rounded-full shadow-lg ring-2 ring-indigo-100 dark:ring-gray-700 transition-all duration-300 transform group-hover:scale-110" 
                                 src="https://randomuser.me/api/portraits/men/65.jpg" 
                                 alt="User 3"
                                 style="z-index: 1">
                        </div>
                        
                        <!-- Card content -->
                        <div class="text-center">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-1">Klien Puas</h3>
                            <p class="text-sm text-indigo-500 dark:text-indigo-400 font-medium mb-6">+50 Project Sukses</p>
                            
                            <!-- Rating -->
                            <div class="bg-gray-50 dark:bg-gray-700/50 rounded-xl p-4">
                                <div class="flex items-center justify-between">
                                    <span class="text-xs font-medium text-gray-500 dark:text-gray-400">Rating</span>
                                    <div class="flex items-center">
                                        <div class="flex">
                                            <i class="ph-fill ph-star-fill text-yellow-400 text-sm"></i>
                                            <i class="ph-fill ph-star-fill text-yellow-400 text-sm"></i>
                                            <i class="ph-fill ph-star-fill text-yellow-400 text-sm"></i>
                                            <i class="ph-fill ph-star-fill text-yellow-400 text-sm"></i>
                                            <i class="ph-fill ph-star-fill text-yellow-400 text-sm"></i>
                                        </div>
                                        <span class="ml-2 text-xs font-bold text-gray-700 dark:text-gray-200">5.0</span>
                                    </div>
                                </div>
                                
                                <!-- Testimonial quote -->
                                <div class="mt-3 text-xs text-gray-600 dark:text-gray-300 italic">
                                    "Hasilnya melebihi ekspektasi!"
                                </div>
                            </div>
                            
                            <!-- View all button -->
                            <button class="mt-6 text-xs font-medium text-indigo-600 dark:text-indigo-400 hover:text-indigo-800 dark:hover:text-indigo-300 transition-colors duration-200 flex items-center justify-center mx-auto">
                                Lihat Semua Testimoni
                                <i class="ph-arrow-right ml-1"></i>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Card 2: Web Development -->
                    <div class="relative flex flex-col p-8 transition-all duration-500 bg-white border border-gray-100 rounded-2xl shadow-lg group hover:-translate-y-2 hover:shadow-2xl dark:bg-gray-800 dark:border-gray-700 overflow-hidden">
                        <!-- Decorative gradient background -->
                        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-blue-500 to-cyan-500"></div>
                        
                        <!-- Icon with gradient background -->
                        <div class="flex items-center justify-center w-16 h-16 mx-auto mb-6 text-white transition-all duration-300 rounded-xl bg-gradient-to-br from-blue-500 to-cyan-500 group-hover:scale-110">
                            <i class="ph-duotone ph-code text-2xl"></i>
                        </div>
                        
                        <!-- Card content -->
                        <div class="text-center">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Web Development</h3>
                            <p class="text-sm text-blue-500 dark:text-cyan-400 font-medium mb-6">Modern, Scalable, & Secure</p>
                            
                            <!-- Tech stack -->
                            <div class="bg-gray-50 dark:bg-gray-700/50 rounded-xl p-4">
                                <div class="grid grid-cols-2 gap-3 text-center">
                                    <div class="flex flex-col items-center">
                                        <i class="ph-duotone ph-brackets-angle text-blue-500 text-xl mb-1"></i>
                                        <span class="text-xs font-medium text-gray-700 dark:text-gray-200">Laravel</span>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <i class="ph-duotone ph-atom text-blue-400 text-xl mb-1"></i>
                                        <span class="text-xs font-medium text-gray-700 dark:text-gray-200">React</span>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <i class="ph-duotone ph-vue-logo text-emerald-500 text-xl mb-1"></i>
                                        <span class="text-xs font-medium text-gray-700 dark:text-gray-200">Vue.js</span>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <i class="ph-duotone ph-terminal text-green-500 text-xl mb-1"></i>
                                        <span class="text-xs font-medium text-gray-700 dark:text-gray-200">Node.js</span>
                                    </div>
                                </div>
                                
                                <!-- Description -->
                                <div class="mt-4 text-xs text-gray-600 dark:text-gray-300">
                                    Full-stack development with modern technologies and best practices
                                </div>
                            </div>
                            
                            <!-- View details button -->
                            <button class="mt-6 text-xs font-medium text-blue-600 dark:text-cyan-400 hover:text-blue-800 dark:hover:text-cyan-300 transition-colors duration-200 flex items-center justify-center mx-auto">
                                Explore Services
                                <i class="ph-arrow-right ml-1"></i>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Card 3: Web Design -->
                    <div class="flex flex-col items-center p-6 transition-all duration-300 bg-white border shadow-xl rounded-2xl border-devantary-accentXlight hover:-translate-y-2 hover:shadow-2xl group">
                        <div class="flex items-center justify-center mb-3 text-white transition-all duration-300 w-14 h-14 rounded-xl bg-gradient-to-br from-purple-600 to-pink-500 group-hover:scale-110">
                            <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                            </svg>
                        </div>
                        <div class="mt-1 text-sm font-bold text-devantary-primary">Web Design</div>
                        <div class="text-xs text-devantary-text-light">UI/UX & Branding</div>
                        <div class="w-full pt-4 mt-4 border-t border-gray-100">
                            <div class="flex items-center justify-between text-xs text-devantary-text-light">
                                <span>Figma</span>
                                <span>Tailwind</span>
                                <span>UI/UX</span>
                                <span>Brand</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Trusted by brands -->
                <div class="w-full max-w-4xl mt-16">
                    <p class="flex items-center justify-center mb-6 text-xs tracking-wider uppercase text-gray-600 dark:text-gray-300">
                        <span class="w-8 h-px mr-3 bg-devantary-text-light/30"></span>
                        Dipercaya oleh
                        <span class="w-8 h-px ml-3 bg-devantary-text-light/30"></span>
                    </p>
                    <div class="flex flex-wrap justify-center gap-8 opacity-60">
                        <img src="https://tailwindui.com/img/logos/tuple-logo-gray-400.svg" alt="Tuple" class="h-8">
                        <img src="https://tailwindui.com/img/logos/mirage-logo-gray-400.svg" alt="Mirage" class="h-8">
                        <img src="https://tailwindui.com/img/logos/statickit-logo-gray-400.svg" alt="StaticKit" class="h-8">
                        <img src="https://tailwindui.com/img/logos/transistor-logo-gray-400.svg" alt="Transistor" class="h-8">
                        <img src="https://tailwindui.com/img/logos/workcation-logo-gray-400.svg" alt="Workcation" class="h-8">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-24 bg-gray-50 dark:bg-gray-900">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base font-semibold tracking-wide uppercase text-indigo-600 dark:text-indigo-400">Tentang Kami</h2>
                <p class="mt-2 text-3xl font-extrabold leading-8 tracking-tight text-transparent sm:text-4xl bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text">
                    Solusi Digital untuk Bisnis Modern
                </p>
                <p class="max-w-3xl mt-4 text-xl text-gray-600 dark:text-gray-300 lg:mx-auto">
                    Devantary adalah agensi digital yang menghadirkan solusi teknologi modern dengan fokus pada inovasi dan kualitas tinggi.
                </p>
            </div>

            <div class="mt-20">
                <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-3 md:gap-x-8 md:gap-y-10">
                    <div class="relative p-6 transition-all duration-300 transform bg-white shadow-lg rounded-2xl hover:-translate-y-2">
                        <dt>
                            <div class="absolute flex items-center justify-center w-12 h-12 text-white rounded-xl bg-gradient-to-br from-devantary-primary to-devantary-accent">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg font-medium leading-6 text-devantary-text">Web Development</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-devantary-text-light">
                            Membangun aplikasi web yang responsif, cepat, dan mudah digunakan dengan teknologi modern seperti Laravel, React, dan Vue.js.
                        </dd>
                    </div>

                    <div class="relative p-6 transition-all duration-300 transform bg-white shadow-lg rounded-2xl hover:-translate-y-2">
                        <dt>
                            <div class="absolute flex items-center justify-center w-12 h-12 text-white rounded-xl bg-gradient-to-br from-devantary-primary to-devantary-accent">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg font-medium leading-6 text-devantary-text">Web Design</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-devantary-text-light">
                            Desain UI/UX yang modern dan intuitif menggunakan Figma dan tools design terkini untuk pengalaman pengguna terbaik.
                        </dd>
                    </div>

                    <div class="relative p-6 transition-all duration-300 transform bg-white shadow-lg rounded-2xl hover:-translate-y-2">
                        <dt>
                            <div class="absolute flex items-center justify-center w-12 h-12 text-white rounded-xl bg-gradient-to-br from-devantary-primary to-devantary-accent">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg font-medium leading-6 text-devantary-text">Custom Software</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-devantary-text-light">
                            Pengembangan software khusus dengan arsitektur modern dan teknologi cloud untuk skala bisnis Anda.
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-gradient-to-r from-indigo-700 to-purple-700">
        <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <h2 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                <span class="block">Siap untuk memulai project?</span>
                <span class="text-indigo-400">Hubungi kami sekarang.</span>
            </h2>
            <div class="flex mt-8 lg:mt-0 lg:flex-shrink-0">
                <div class="inline-flex rounded-md shadow">
                    <a href="/contact" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium transition-colors bg-white border border-transparent rounded-md text-indigo-700 hover:bg-indigo-50">
                        Mulai Diskusi
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
