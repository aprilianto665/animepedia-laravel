<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Animepedia')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            background-image:
                url('{{ asset('background.png') }}'),
                linear-gradient(#dddddd6f 1px, transparent 1px),
                linear-gradient(90deg, #dddddd6f 1px, transparent 1px);
            background-size: 800px auto, 20px 20px, 20px 20px;
            background-position: 140% bottom, 0 0, 0 0;
            background-repeat: no-repeat, repeat, repeat;
        }
        @media (max-width: 768px) {
            body {
                background-image:
                    linear-gradient(#dddddd6f 1px, transparent 1px),
                    linear-gradient(90deg, #dddddd6f 1px, transparent 1px);
                background-size: 20px 20px, 20px 20px;
                background-position: 0 0, 0 0;
                background-repeat: repeat, repeat;
            }
        }
    </style>
</head>
<body class="font-inter bg-gray-bg min-h-screen flex flex-col text-dark">
    <header class="bg-linear-to-br from-dark to-dark-light p-4 md:p-8 border-b-2 border-gray-border shadow-header text-white">
        <div class="text-center mb-4 md:mb-6">
            <h1 class="text-[1.8rem] md:text-[2.5rem] font-extrabold text-white tracking-tight flex flex-col md:flex-row items-center justify-center gap-2 md:gap-4 text-shadow-title">
                ANIMEPEDIA
                <span class="text-[1rem] md:text-[1.5rem] text-amber-400 font-normal tracking-widest">
                    アニメ百科事典
                </span>
            </h1>
        </div>
        <nav aria-label="Main navigation">
            <ul class="flex justify-center list-none gap-2 md:gap-4 flex-wrap">
                <li>
                    <a href="{{ route('home') }}" class="text-white no-underline font-medium text-[0.8rem] md:text-[0.9rem] py-2 px-4 md:py-3 md:px-6 transition-colors duration-300 uppercase tracking-wider hover:text-amber-400">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#" class="text-white no-underline font-medium text-[0.8rem] md:text-[0.9rem] py-2 px-4 md:py-3 md:px-6 transition-colors duration-300 uppercase tracking-wider hover:text-amber-400">
                        Anime
                    </a>
                </li>
                <li>
                    <a href="#" class="text-white no-underline font-medium text-[0.8rem] md:text-[0.9rem] py-2 px-4 md:py-3 md:px-6 transition-colors duration-300 uppercase tracking-wider hover:text-amber-400">
                        Favorites
                    </a>
                </li>
                <li>
                    <a href="#" class="text-white no-underline font-medium text-[0.8rem] md:text-[0.9rem] py-2 px-4 md:py-3 md:px-6 transition-colors duration-300 uppercase tracking-wider hover:text-amber-400">
                        Profile
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <main class="flex flex-col md:flex-row flex-1 gap-4 md:gap-8 p-4 md:p-8 max-w-[1400px] mx-auto w-full">
        @yield('content')
    </main>

    <footer class="bg-dark text-gray-300 text-center p-6 text-[0.85rem]" role="contentinfo">
        <small>&copy; {{ date('Y') }} Animepedia. All rights reserved.</small>
    </footer>

    @stack('scripts')
</body>
</html>
