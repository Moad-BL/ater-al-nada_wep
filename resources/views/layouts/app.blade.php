<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>@yield('title', 'عطر الندى')</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700;900&amp;family=Noto+Naskh+Arabic:wght@400;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#3E6C45",
                        "primary-dark": "#2B4B30",
                        "accent": "#B8860B",
                        "background-light": "#FDFBF5",
                        "background-dark": "#1A1A1A",
                        "text-light": "#3A3A3A",
                        "text-dark": "#E5E5E5",
                    },
                    fontFamily: {
                        "display": ["Cairo", "sans-serif"],
                        "body": ["Noto Naskh Arabic", "serif"],
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: "FILL" 0, "wght" 400, "GRAD" 0, "opsz" 24
        }
        .pattern-bg {
            background-color: #FDFBF5;
            background-image: radial-gradient(#3E6C45 0.5px, transparent 0.5px), radial-gradient(#3E6C45 0.5px, #FDFBF5 0.5px);
            background-size: 20px 20px;
            background-position: 0 0, 10px 10px;
            opacity: 1;
        }
        .dark .dark-pattern-bg {
            background-color: #1A1A1A;
            background-image: radial-gradient(#B8860B 0.5px, transparent 0.5px), radial-gradient(#B8860B 0.5px, #1A1A1A 0.5px);
            background-size: 20px 20px;
            background-position: 0 0, 10px 10px;
        }
    </style>
</head>
<body class="font-body bg-background-light dark:bg-background-dark text-text-light dark:text-text-dark pattern-bg dark:dark-pattern-bg">
    <div class="relative flex min-h-screen w-full flex-col group/design-root overflow-x-hidden">
        @include('partials.navbar')

        <main class="page-transition">
            @yield('content')
        </main>

        @include('partials.footer')

        <!-- WhatsApp Button -->
        <a href="https://wa.me/218923804818" target="_blank" class="fixed bottom-6 left-6 right-auto bg-[#25D366] text-white rounded-full p-4 shadow-lg hover:bg-[#128C7E] transition-colors z-50">
            <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.632 14.939c-.116-.243-.289-.45-.494-.613l-1.637-1.428a2.327 2.327 0 0 0-1.037-.589c-.504-.153-.984-.33-1.442-.533-.761-.337-1.332-.932-1.616-1.683-.243-.655-.25-1.335-.157-1.951.096-.632.32-1.241.656-1.783.339-.54.793-1.026 1.34-1.428.51-.378 1.1-.659 1.742-.821.688-.172 1.432-.14 2.131.098.665.228 1.28.61 1.803 1.115.523.504 1.01 1.109 1.402 1.783.393.673.655 1.442.75 2.247.094.761-.009 1.558-.293 2.29-.284.731-.765 1.385-1.391 1.897-.627.51-1.396.86-2.247 1.004-1.01.172-1.897-.009-2.658-.45zm-4.59-6.309c-.195-.494-.488-.953-.86-1.325-.371-.371-.82-.656-1.316-.848-.494-.195-1.01-.274-1.528-.243-.518.031-1.026.183-1.498.445-.472.262-.897.632-1.258 1.08-.36.45-.632.953-.805 1.488-.172.535-.243 1.092-.204 1.646.039.553.195 1.092.464 1.597.27.504.644.953 1.104 1.316.46.363.984.632 1.546.793.562.161 1.142.204 1.705.148.562-.054 1.118-.228 1.616-.504.5-.275.925-.656 1.258-1.115.333-.46.568-.984.688-1.546.12-.562.128-1.15.022-1.714zM12 2C6.486 2 2 6.486 2 12s4.486 10 10 10c.853 0 1.688-.112 2.493-.324.283.18.58.337.892.464l1.433.562a1.495 1.495 0 0 0 1.821-1.173c.125-.485.18-1 .18-1.524.01-1.616-.597-3.14-1.637-4.32-.422-.485-.893-.922-1.402-1.307a6.99 6.99 0 0 0-1.764-1.156 8.356 8.356 0 0 1-.022-11.992A9.92 9.92 0 0 0 12 2z"></path>
            </svg>
        </a>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const main = document.querySelector('.page-transition');
            if (main) {
                main.classList.add('active');
            }
        });

        window.addEventListener('beforeunload', () => {
            const main = document.querySelector('.page-transition');
            if (main) {
                main.style.opacity = '0';
                main.style.transform = 'translateY(-20px)';
                main.style.transition = 'all 0.4s ease-in-out';
            }
        });
    </script>
</body>
</html>
