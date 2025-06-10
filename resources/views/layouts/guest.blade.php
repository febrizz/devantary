<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Devantary') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- PhosphorIcon CDN --}}

    <script src="
https://cdn.jsdelivr.net/npm/phosphor-icons@1.4.2/src/index.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/phosphor-icons@1.4.2/src/css/icons.min.css
" rel="stylesheet">

    <style>
        [x-cloak] {
            display: none !important;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translate3d(0, -20px, 0);
            }

            to {
                opacity: 1;
                transform: translate3d(0, 0, 0);
            }
        }

        .animate-fadeInDown {
            animation: fadeInDown 0.3s ease-out;
        }

        @keyframes scaleIn {
            from {
                opacity: 0;
                transform: scale(0.95);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .animate-scaleIn {
            animation: scaleIn 0.2s ease-out;
        }
    </style>
</head>

<body class="bg-devantary-muted text-devantary-text font-sans antialiased">
    <div class="min-h-screen flex flex-col">
        <x-navbar />

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
