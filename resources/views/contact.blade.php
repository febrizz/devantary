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
                    Hubungi Kami
                </div>
                
                <!-- Heading with highlighted words -->
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-devantary-primary mb-4 leading-tight">
                    Mari <span class="bg-gradient-to-r from-devantary-accent via-devantary-accentLight to-devantary-accentXlight bg-clip-text text-transparent">Berkolaborasi</span>
                </h1>
                
                <p class="max-w-2xl mx-auto text-lg sm:text-xl text-devantary-text-light mb-8">
                    Bersama wujudkan ide digitalmu menjadi kenyataan
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <div class="relative -mt-20 z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-xl p-6 border border-devantary-accentXXlight/50 backdrop-blur-lg">
                <div class="lg:text-center mb-6">
                    <h2 class="text-base text-devantary-accent font-semibold tracking-wide uppercase">Hubungi Kami</h2>
                    <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-devantary-text sm:text-4xl bg-gradient-to-r from-devantary-primary to-devantary-accent bg-clip-text text-transparent">
                        Diskusikan Projectmu
                    </p>
                    <p class="mt-4 max-w-2xl text-xl text-devantary-text-light lg:mx-auto">
                        Ceritakan ide dan kebutuhan Anda, kami siap membantu mewujudkannya
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="bg-gradient-to-br from-white to-devantary-accentXXlight/30">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="relative">
                <!-- Contact Form Card -->
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden transform hover:scale-[1.01] transition-all duration-300 border border-devantary-accentXXlight/30">
                    <div class="grid grid-cols-1 lg:grid-cols-2">
                        <!-- Form Section -->
                        <div class="p-6 sm:p-8 lg:p-12">
                            <div class="mx-auto">
                                <h2 class="text-2xl font-bold text-devantary-text mb-8 relative">
                                    Form Kontak
                                    <span class="absolute bottom-0 left-0 w-20 h-1 bg-gradient-to-r from-devantary-accent to-devantary-accentLight"></span>
                                </h2>
                                <form action="/contact" method="POST" class="space-y-6">
                                    @csrf
                                    
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div class="relative group">
                                            <label for="name" class="block text-sm font-medium text-devantary-text mb-1">Nama</label>
                                            <div class="relative">
                                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-devantary-accent" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                                <input type="text" name="name" id="name" autocomplete="name" class="py-3 pl-10 pr-4 block w-full shadow-sm border-gray-300 rounded-xl focus:ring-devantary-accent focus:border-devantary-accent bg-white/50 transition duration-200 ease-in-out transform group-hover:shadow-md" placeholder="Nama lengkap Anda">
                                            </div>
                                        </div>
                                        
                                        <div class="relative group">
                                            <label for="email" class="block text-sm font-medium text-devantary-text mb-1">Email</label>
                                            <div class="relative">
                                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-devantary-accent" viewBox="0 0 20 20" fill="currentColor">
                                                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                                    </svg>
                                                </div>
                                                <input type="email" name="email" id="email" autocomplete="email" class="py-3 pl-10 pr-4 block w-full shadow-sm border-gray-300 rounded-xl focus:ring-devantary-accent focus:border-devantary-accent bg-white/50 transition duration-200 ease-in-out transform group-hover:shadow-md" placeholder="email@example.com">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div class="relative group">
                                            <label for="phone" class="block text-sm font-medium text-devantary-text mb-1">Nomor Telepon</label>
                                            <div class="relative">
                                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-devantary-accent" viewBox="0 0 20 20" fill="currentColor">
                                                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                                    </svg>
                                                </div>
                                                <input type="text" name="phone" id="phone" autocomplete="tel" class="py-3 pl-10 pr-4 block w-full shadow-sm border-gray-300 rounded-xl focus:ring-devantary-accent focus:border-devantary-accent bg-white/50 transition duration-200 ease-in-out transform group-hover:shadow-md" placeholder="+62 xxx xxxx xxxx">
                                            </div>
                                        </div>
                                        
                                        <div class="relative group">
                                            <label for="service" class="block text-sm font-medium text-devantary-text mb-1">Layanan</label>
                                            <div class="relative">
                                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-devantary-accent" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                                <select id="service" name="service" class="py-3 pl-10 pr-4 block w-full shadow-sm border-gray-300 rounded-xl focus:ring-devantary-accent focus:border-devantary-accent bg-white/50 transition duration-200 ease-in-out transform group-hover:shadow-md appearance-none">
                                                    <option value="">Pilih layanan</option>
                                                    <option value="web-development">Web Development</option>
                                                    <option value="mobile-app">Mobile App</option>
                                                    <option value="ui-ux">UI/UX Design</option>
                                                    <option value="other">Lainnya</option>
                                                </select>
                                                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-devantary-text-light" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="relative group">
                                        <label for="message" class="block text-sm font-medium text-devantary-text mb-1">Pesan</label>
                                        <div class="relative">
                                            <div class="absolute top-3 left-3 flex items-start pointer-events-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-devantary-accent" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <textarea id="message" name="message" rows="4" class="py-3 pl-10 pr-4 block w-full shadow-sm border-gray-300 rounded-xl focus:ring-devantary-accent focus:border-devantary-accent bg-white/50 transition duration-200 ease-in-out transform group-hover:shadow-md" placeholder="Ceritakan tentang project Anda..."></textarea>
                                        </div>
                                    </div>
                                    
                                    <div>
                                        <button type="submit" class="w-full inline-flex justify-center items-center py-3 px-6 border border-transparent shadow-md text-base font-medium rounded-xl text-white bg-gradient-to-r from-devantary-primary to-devantary-accent hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-devantary-accent transition duration-300 ease-in-out transform hover:-translate-y-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" />
                                            </svg>
                                            Kirim Pesan
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Info Section -->
                        <div class="bg-gradient-to-br from-devantary-primary to-devantary-accent p-6 sm:p-8 lg:p-12 text-white relative overflow-hidden rounded-r-2xl">
                            <!-- Floating Elements -->
                            <div class="absolute top-20 right-10 w-20 h-20 bg-white/10 rounded-full blur-2xl animate-float-slow"></div>
                            <div class="absolute bottom-40 left-10 w-32 h-32 bg-white/10 rounded-full blur-3xl animate-float-slower"></div>
                            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-40 h-40 bg-white/5 rounded-full blur-2xl"></div>
                            
                            <!-- Decorative pattern -->
                            <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(white 1px, transparent 1px); background-size: 20px 20px;"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/[0.2] to-transparent"></div>
                            
                            <div class="relative z-10 mx-auto space-y-8">
                                <div class="transform hover:scale-[1.02] transition-transform duration-300 p-5 rounded-xl bg-white/5 backdrop-blur-sm border border-white/10">
                                    <h3 class="text-xl font-semibold flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-devantary-accentXlight" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        Tentang Devantary
                                    </h3>
                                    <p class="mt-4 text-white/90 leading-relaxed">
                                        Devantary adalah brand personal yang fokus dalam pengembangan solusi digital modern dan inovatif. Dengan pengalaman di industri teknologi, saya siap membantu mewujudkan visi digital Anda.
                                    </p>
                                </div>

                                <div class="transform hover:scale-[1.02] transition-transform duration-300 p-5 rounded-xl bg-white/5 backdrop-blur-sm border border-white/10">
                                    <h3 class="text-xl font-semibold flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-devantary-accentXlight" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                        </svg>
                                        Kontak Langsung
                                    </h3>
                                    <div class="mt-4 space-y-4">
                                        <a href="mailto:info@devantary.com" class="flex items-center group hover:translate-x-2 transition-transform duration-300">
                                            <div class="h-10 w-10 rounded-full bg-white/10 flex items-center justify-center mr-3 group-hover:bg-white/20 transition-colors duration-300">
                                                <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                                </svg>
                                            </div>
                                            <div>
                                                <p class="text-xs text-white/70">Email</p>
                                                <span class="text-white/90 group-hover:text-white transition-colors">info@devantary.com</span>
                                            </div>
                                        </a>
                                        <a href="https://wa.me/6281234567890" target="_blank" class="flex items-center group hover:translate-x-2 transition-transform duration-300">
                                            <div class="h-10 w-10 rounded-full bg-white/10 flex items-center justify-center mr-3 group-hover:bg-white/20 transition-colors duration-300">
                                                <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                                </svg>
                                            </div>
                                            <div>
                                                <p class="text-xs text-white/70">WhatsApp</p>
                                                <span class="text-white/90 group-hover:text-white transition-colors">+62 812 3456 7890</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="transform hover:scale-[1.02] transition-transform duration-300 p-5 rounded-xl bg-white/5 backdrop-blur-sm border border-white/10">
                                    <h3 class="text-xl font-semibold flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-devantary-accentXlight" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                        </svg>
                                        Media Sosial
                                    </h3>
                                    <div class="mt-4 flex space-x-4">
                                        <a href="#" class="h-10 w-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-all duration-300 hover:scale-110">
                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                        <a href="#" class="h-10 w-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-all duration-300 hover:scale-110">
                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                            </svg>
                                        </a>
                                        <a href="#" class="h-10 w-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-all duration-300 hover:scale-110">
                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                </div>

                                <div class="pt-8 transform hover:scale-[1.02] transition-transform duration-300">
                                    <div class="p-6 bg-white/10 rounded-xl backdrop-blur-sm border border-white/10 relative overflow-hidden">
                                        <!-- Decorative elements -->
                                        <div class="absolute -top-4 -left-4 w-16 h-16 bg-devantary-accentLight/20 rounded-full blur-xl"></div>
                                        <div class="absolute -bottom-4 -right-4 w-16 h-16 bg-devantary-accentLight/20 rounded-full blur-xl"></div>
                                        
                                        <!-- Quote marks -->
                                        <svg class="absolute top-2 left-2 h-8 w-8 text-white/20" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                                        </svg>
                                        
                                        <div class="relative">
                                            <p class="text-base text-white/90 italic leading-relaxed pl-6">
                                                "Setiap project adalah kesempatan untuk menciptakan solusi yang tidak hanya fungsional, tapi juga memberikan dampak positif bagi pengguna."
                                            </p>
                                            <p class="text-sm text-white/70 mt-3 text-right font-medium">
                                                — Devantary Team
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout> 