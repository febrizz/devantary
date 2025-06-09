<x-guest-layout>
    <!-- Hero Section -->
    <section class="relative flex items-center min-h-screen pt-24 pb-12 overflow-hidden sm:pt-56 sm:pb-16 bg-gradient-to-br from-devantary-accentXXlight via-white to-devantary-accentXlight">
        <!-- Background SVG/Ornament -->
        <div class="absolute inset-0 z-0 pointer-events-none select-none">
            <!-- Top left blob -->
            <div class="absolute w-64 h-64 rounded-full -top-20 -left-20 bg-devantary-accentXlight mix-blend-multiply filter blur-3xl opacity-30 animate-float-slower"></div>
            <!-- Bottom right blob -->
            <div class="absolute w-64 h-64 rounded-full -bottom-20 -right-20 bg-devantary-accentLight mix-blend-multiply filter blur-3xl opacity-20 animate-float-slow"></div>
            <!-- Decorative dots pattern -->
            <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#6E3482 1px, transparent 1px); background-size: 30px 30px;"></div>
            <!-- Decorative lines -->
            {{-- <div class="absolute left-0 w-full h-px top-1/4 bg-gradient-to-r from-transparent via-devantary-accentLight to-transparent opacity-30"></div> --}}
            {{-- <div class="absolute left-0 w-full h-px top-3/4 bg-gradient-to-r from-transparent via-devantary-accentLight to-transparent opacity-30"></div> --}}
        </div>
        
        <div class="relative z-10 w-full px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex flex-col items-center text-center">
                <!-- Badge -->
                <div class="inline-flex items-center px-3 py-1 mb-6 text-sm font-medium border rounded-full bg-devantary-accentXXlight text-devantary-accent border-devantary-accentXlight animate-pulse-slow">
                    <span class="flex w-2 h-2 mr-2 rounded-full bg-devantary-accent"></span>
                    Digital Agency & Web Development
                </div>
                
                <!-- Heading with highlighted words -->
                <h1 class="mb-4 text-4xl font-extrabold leading-tight sm:text-5xl md:text-6xl text-devantary-primary">
                    Wujudkan <span class="text-transparent bg-gradient-to-r from-devantary-accent via-devantary-accentLight to-devantary-accentXlight bg-clip-text">Ide Digital</span> Anda
                </h1>
                
                <p class="max-w-2xl mx-auto mb-8 text-lg sm:text-xl text-devantary-text-light">
                    Kami membantu bisnis Anda berkembang melalui solusi digital inovatif, modern, dan berkualitas tinggi dengan teknologi terkini.
                </p>
                
                <!-- CTA Buttons with icons -->
                <div class="flex flex-col justify-center gap-4 mb-16 sm:flex-row">
                    <a href="/contact" class="inline-flex items-center px-8 py-4 font-semibold text-white transition-all duration-300 rounded-full shadow-lg bg-devantary-accent hover:shadow-xl hover:-translate-y-1 hover:bg-devantary-accentDark">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        Mulai Project
                    </a>
                    <a href="/portfolio" class="inline-flex items-center px-8 py-4 font-semibold transition-all duration-300 bg-white border-2 rounded-full shadow-md border-devantary-accent text-devantary-accent hover:shadow-lg hover:-translate-y-1 hover:bg-devantary-accentXXlight">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        Lihat Portfolio
                    </a>
                </div>
                
                <!-- Feature Cards with hover effects -->
                <div class="grid w-full max-w-4xl grid-cols-1 gap-6 mt-2 md:grid-cols-3">
                    <!-- Card 1: Clients -->
                    <div class="flex flex-col items-center p-6 transition-all duration-300 bg-white border shadow-xl rounded-2xl border-devantary-accentXlight hover:-translate-y-2 hover:shadow-2xl group">
                        <div class="flex mb-3 -space-x-4 transition-all duration-300 group-hover:-space-x-2">
                            <img class="w-12 h-12 border-2 border-white rounded-full ring-2 ring-devantary-accentXlight" src="https://randomuser.me/api/portraits/men/32.jpg" alt="User 1">
                            <img class="w-12 h-12 border-2 border-white rounded-full ring-2 ring-devantary-accentXlight" src="https://randomuser.me/api/portraits/women/44.jpg" alt="User 2">
                            <img class="w-12 h-12 border-2 border-white rounded-full ring-2 ring-devantary-accentXlight" src="https://randomuser.me/api/portraits/men/65.jpg" alt="User 3">
                        </div>
                        <div class="mt-1 text-sm font-bold text-devantary-primary">Klien Puas</div>
                        <div class="text-xs text-devantary-text-light">+50 Project Sukses</div>
                        <div class="w-full pt-4 mt-4 border-t border-gray-100">
                            <div class="flex items-center justify-between">
                                <div class="text-xs text-devantary-text-light">Rating</div>
                                <div class="flex">
                                    <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                    <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                    <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                    <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                    <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Card 2: Web Development -->
                    <div class="flex flex-col items-center p-6 transition-all duration-300 bg-white border shadow-xl rounded-2xl border-devantary-accentXlight hover:-translate-y-2 hover:shadow-2xl group">
                        <div class="flex items-center justify-center mb-3 text-white transition-all duration-300 w-14 h-14 rounded-xl bg-gradient-to-br from-devantary-primary to-devantary-accent group-hover:scale-110">
                            <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div class="mt-1 text-sm font-bold text-devantary-primary">Web Development</div>
                        <div class="text-xs text-devantary-text-light">Modern, scalable, & secure</div>
                        <div class="w-full pt-4 mt-4 border-t border-gray-100">
                            <div class="flex items-center justify-between text-xs text-devantary-text-light">
                                <span>Laravel</span>
                                <span>React</span>
                                <span>Vue</span>
                                <span>Node</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Card 3: Web Design -->
                    <div class="flex flex-col items-center p-6 transition-all duration-300 bg-white border shadow-xl rounded-2xl border-devantary-accentXlight hover:-translate-y-2 hover:shadow-2xl group">
                        <div class="flex items-center justify-center mb-3 text-white transition-all duration-300 w-14 h-14 rounded-xl bg-gradient-to-br from-devantary-accent to-devantary-accentLight group-hover:scale-110">
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
                    <p class="flex items-center justify-center mb-6 text-xs tracking-wider uppercase text-devantary-text-light">
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
    <section class="py-24 bg-gray-50">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base font-semibold tracking-wide uppercase text-devantary-accent">Tentang Kami</h2>
                <p class="mt-2 text-3xl font-extrabold leading-8 tracking-tight text-transparent text-devantary-text sm:text-4xl bg-gradient-to-r from-devantary-primary to-devantary-accent bg-clip-text">
                    Solusi Digital untuk Bisnis Modern
                </p>
                <p class="max-w-3xl mt-4 text-xl text-devantary-text-light lg:mx-auto">
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
    <section class="bg-devantary-primary">
        <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <h2 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                <span class="block">Siap untuk memulai project?</span>
                <span class="block text-devantary-accent">Hubungi kami sekarang.</span>
            </h2>
            <div class="flex mt-8 lg:mt-0 lg:flex-shrink-0">
                <div class="inline-flex rounded-md shadow">
                    <a href="/contact" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium bg-white border border-transparent rounded-md text-devantary-primary hover:bg-gray-50">
                        Mulai Diskusi
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
