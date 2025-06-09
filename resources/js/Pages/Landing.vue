<template>
  <div class="">
    <!-- Header Section -->
    <header class="py-4 bg-black sm:py-6" x-data="{expanded: false}">
      <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex items-center justify-between">
          <div class="shrink-0">
            <a href="#" title="" class="flex">
              <img class="w-auto h-9" src="https://landingfoliocom.imgix.net/store/collection/dusk/images/logo.svg" alt="" />
            </a>
          </div>

          <div class="flex md:hidden">
            <button type="button" class="text-white" @click="expanded = !expanded" :aria-expanded="expanded">
              <span x-show="!expanded" aria-hidden="true">
                <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
              </span>

              <span x-show="expanded" aria-hidden="true">
                <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </span>
            </button>
          </div>

          <nav class="hidden md:flex md:items-center md:justify-end md:space-x-12">
            <a href="#" title="" class="text-base font-normal text-gray-400 transition-all duration-200 hover:text-white"> Products </a>
            <a href="#" title="" class="text-base font-normal text-gray-400 transition-all duration-200 hover:text-white"> Features </a>
            <a href="#" title="" class="text-base font-normal text-gray-400 transition-all duration-200 hover:text-white"> Pricing </a>
            <a href="#" title="" class="text-base font-normal text-gray-400 transition-all duration-200 hover:text-white"> Support </a>
          </nav>
        </div>

        <nav x-show="expanded" x-collapse>
          <div class="flex flex-col pt-8 pb-4 space-y-6">
            <a href="#" title="" class="text-base font-normal text-gray-400 transition-all duration-200 hover:text-white"> Products </a>
            <a href="#" title="" class="text-base font-normal text-gray-400 transition-all duration-200 hover:text-white"> Features </a>
            <a href="#" title="" class="text-base font-normal text-gray-400 transition-all duration-200 hover:text-white"> Pricing </a>
            <a href="#" title="" class="text-base font-normal text-gray-400 transition-all duration-200 hover:text-white"> Support </a>
          </div>
        </nav>
      </div>
    </header>

    <!-- Hero Section -->
    <section class="py-12 bg-black sm:pb-16 lg:pb-20 xl:pb-24">
      <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
        <div class="relative">
          <div class="lg:w-2/3">
            <p class="text-sm font-normal tracking-widest text-gray-300 uppercase">A Hub for Designers, Developers & Marketers</p>
            <h1 class="mt-6 text-4xl font-normal text-white sm:mt-10 sm:text-5xl lg:text-6xl xl:text-8xl">
              <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-500 to-purple-500">Unlimited Design</span> Inspiration
            </h1>
            <p class="max-w-lg mt-4 text-xl font-normal text-gray-400 sm:mt-8">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat.</p>
            <div class="relative inline-flex items-center justify-center mt-8 sm:mt-12 group">
              <div class="absolute transition-all duration-200 rounded-full -inset-px bg-gradient-to-r from-cyan-500 to-purple-500 group-hover:shadow-lg group-hover:shadow-cyan-500/50"></div>
              <a href="#" title="" class="relative inline-flex items-center justify-center px-8 py-3 text-base font-normal text-white bg-black border border-transparent rounded-full" role="button"> Start Exploring Inspiration </a>
            </div>

            <div>
              <div class="inline-flex items-center pt-6 mt-8 border-t border-gray-800 sm:pt-10 sm:mt-14">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke-width="1.5" xmlns="http://www.w3.org/2000/svg">
                  <path d="M13 7.00003H21M21 7.00003V15M21 7.00003L13 15L9 11L3 17" stroke="url(#a)" stroke-linecap="round" stroke-linejoin="round" />
                  <defs>
                    <linearGradient id="a" x1="3" y1="7.00003" x2="22.2956" y2="12.0274" gradientUnits="userSpaceOnUse">
                      <stop offset="0%" style="stop-color: var(--color-cyan-500)" />
                      <stop offset="100%" style="stop-color: var(--color-purple-500)" />
                    </linearGradient>
                  </defs>
                </svg>
                <span class="ml-2 text-base font-normal text-white"> 42 new design inspiration was added last week </span>
              </div>
            </div>
          </div>

          <div class="mt-8 md:absolute md:mt-0 md:top-32 lg:top-0 md:right-0">
            <img class="w-full max-w-xs mx-auto lg:max-w-lg xl:max-w-xl" src="https://landingfoliocom.imgix.net/store/collection/dusk/images/hero/1/3d-illustration.png" alt="" />
          </div>
        </div>
      </div>
    </section>

    <!-- Services Section -->
    <section class="py-20 px-4 sm:px-6 lg:px-8 bg-white">
      <div class="max-w-7xl mx-auto">
        <h2 class="text-3xl sm:text-4xl font-bold text-center text-secondary-900 mb-12">Layanan Kami</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <!-- Web Development -->
          <div class="bg-secondary-50 p-8 rounded-xl shadow-sm hover:shadow-md transition duration-300">
            <div class="text-primary-600 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
            </div>
            <h3 class="text-xl font-bold text-secondary-800 mb-2">Web Development</h3>
            <p class="text-secondary-600">Website profesional dan e-commerce yang dioptimalkan untuk bisnis Anda.</p>
          </div>

          <!-- Inventory Management -->
          <div class="bg-secondary-50 p-8 rounded-xl shadow-sm hover:shadow-md transition duration-300">
            <div class="text-primary-600 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
              </svg>
            </div>
            <h3 class="text-xl font-bold text-secondary-800 mb-2">Manajemen Inventaris</h3>
            <p class="text-secondary-600">Sistem stock opname dan asset tracking yang efisien untuk kontrol inventaris
              yang lebih baik.</p>
          </div>

          <!-- Fashion Store -->
          <div class="bg-secondary-50 p-8 rounded-xl shadow-sm hover:shadow-md transition duration-300">
            <div class="text-primary-600 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
              </svg>
            </div>
            <h3 class="text-xl font-bold text-secondary-800 mb-2">Fashion Store</h3>
            <p class="text-secondary-600">Koleksi pakaian eksklusif dengan desain yang unik dan berkualitas tinggi.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section class="py-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-b from-white to-primary-50">
      <div class="max-w-4xl mx-auto text-center animate-fadeInUp">
        <h2 class="text-3xl sm:text-4xl font-bold text-secondary-900 mb-6">Tentang Devantary</h2>
        <p class="text-lg text-secondary-700 mb-8">
          Devantary adalah platform all-in-one yang menggabungkan kreativitas digital dengan solusi bisnis praktis. Kami
          tidak hanya menyediakan jasa pembuatan website dan desain, tetapi juga menghadirkan produk fashion eksklusif
          dan solusi manajemen bisnis yang inovatif.
        </p>
        <p class="text-lg text-secondary-700 mb-8">
          Spesialisasi kami dalam pengembangan sistem manajemen inventaris dan aset membantu perusahaan mengoptimalkan
          operasional mereka melalui teknologi modern.
        </p>
        <img src="https://images.unsplash.com/photo-1506748686214-e9b1b1c1c1c1?auto=format&fit=crop&w=800&q=80" 
          alt="Tentang Devantary" class="mx-auto mb-8 rounded-lg shadow-lg w-full max-w-2xl h-64 object-cover transition-transform transform hover:scale-105" />
      </div>
    </section>

    <!-- Portfolio Section -->
    <section class="py-16 px-6 text-center bg-white">
      <div class="max-w-7xl mx-auto">
        <h2 class="text-3xl sm:text-4xl font-bold text-secondary-900 mb-6 animate-fadeInUp">Portofolio</h2>
        <p class="text-lg text-secondary-600 mb-8">
          Beberapa aplikasi demo yang bisa Anda coba langsung:
        </p>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
          <div
            class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl hover:-translate-y-2 transition duration-300 animate-fadeInUp">
            <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=600&q=80"
              alt="Stock Opname App" class="w-full h-40 object-cover" />
            <div class="p-6">
              <h3 class="text-xl font-bold text-secondary-800 mb-2">Stock Opname App</h3>
              <p class="text-secondary-600 mb-4">Sistem manajemen inventaris yang efisien untuk gudang dan aset
                perusahaan.</p>
              <Link href="#" class="text-primary-600 font-medium hover:text-primary-700 transition">Lihat Demo →</Link>
            </div>
          </div>

          <div
            class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl hover:-translate-y-2 transition duration-300 animate-fadeInUp delay-100">
            <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80"
              alt="Aplikasi Arus Kas" class="w-full h-40 object-cover" />
            <div class="p-6">
              <h3 class="text-xl font-bold text-secondary-800 mb-2">Aplikasi Arus Kas</h3>
              <p class="text-secondary-600 mb-4">Solusi pencatatan keuangan yang simpel dan efektif untuk UKM.</p>
              <Link href="#" class="text-primary-600 font-medium hover:text-primary-700 transition">Lihat Demo →</Link>
            </div>
          </div>

          <div
            class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl hover:-translate-y-2 transition duration-300 animate-fadeInUp delay-200">
            <img src="https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=600&q=80"
              alt="Fashion Store Demo" class="w-full h-40 object-cover" />
            <div class="p-6">
              <h3 class="text-xl font-bold text-secondary-800 mb-2">Fashion Store Demo</h3>
              <p class="text-secondary-600 mb-4">E-commerce modern dengan fitur lengkap untuk bisnis fashion.</p>
              <Link href="#" class="text-primary-600 font-medium hover:text-primary-700 transition">Lihat Demo →</Link>
            </div>
          </div>

          <!-- Menambahkan Kartu Manajemen Inventaris -->
          <div
            class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl hover:-translate-y-2 transition duration-300 animate-fadeInUp delay-300">
            <img src="https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=600&q=80"
              alt="Manajemen Inventaris" class="w-full h-40 object-cover" />
            <div class="p-6">
              <h3 class="text-xl font-bold text-secondary-800 mb-2">Manajemen Inventaris</h3>
              <p class="text-secondary-600 mb-4">Aplikasi untuk mengelola stok dan aset perusahaan secara efisien.</p>
              <Link href="#" class="text-primary-600 font-medium hover:text-primary-700 transition">Lihat Demo →</Link>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-b from-primary-600 to-primary-700 text-white">
      <div class="max-w-4xl mx-auto text-center animate-fadeInUp">
        <h2 class="text-3xl sm:text-4xl font-bold mb-6">Punya Ide Aplikasi?</h2>
        <p class="text-lg text-primary-50 mb-8">
          Mari diskusikan bagaimana kami dapat membantu mewujudkan ide Anda menjadi solusi digital yang inovatif.
        </p>
        <Link href="/contact"
          class="inline-block bg-white text-primary-600 px-8 py-4 rounded-lg font-medium hover:bg-primary-50 transition duration-300">
        Hubungi Kami
        </Link>
      </div>
    </section>
  </div>
</template>

<style>
  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(30px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .animate-fadeInUp {
    animation: fadeInUp 1s cubic-bezier(0.23, 1, 0.32, 1);
  }

  .animate-fadeIn {
    animation: fadeIn 2s cubic-bezier(0.23, 1, 0.32, 1);
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
    }

    to {
      opacity: 1;
    }
  }
</style>

<script setup>
  import AppLayout from "@/Layouts/AppLayout.vue";
  defineOptions({ layout: AppLayout });
  import { Link } from "@inertiajs/vue3";
</script>