<template>
    <div>
        <Head>
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        </Head>
      <nav class="flex justify-between items-center p-4 bg-white shadow text-sm">
        <div>
          <Link href="/" class="text-lg font-bold text-blue-600">Devantary</Link>
        </div>
        <div class="flex items-center space-x-4">
  
          <template v-if="!$page.props.auth.user">
            <Link href="/login" class="text-blue-600 hover:underline">Login</Link>
            <Link href="/register" class="text-blue-600 hover:underline">Register</Link>
          </template>
  
          <template v-else>
            <span class="text-gray-600">Hai, {{ $page.props.auth.user.name }}</span>
            <Link href="/dashboard" class="hover:underline">Dashboard</Link>
            <form method="POST" @submit.prevent="logout">
              <button type="submit" class="text-red-500 hover:underline">Logout</button>
            </form>
          </template>
        </div>
      </nav>
  
      <main class="py-6">
        <slot />
      </main>
    </div>
  </template>
  
  <script setup>
  import { Link, useForm } from '@inertiajs/vue3'
  
  const form = useForm({})
  function logout() {
    form.post(route('logout'))
  }
  </script>
