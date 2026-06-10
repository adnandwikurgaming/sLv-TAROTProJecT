<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magical Tarot</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&family=EB+Garamond:ital,wght@0,400;0,500;0,600;1,400&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        magic: ['Cinzel', 'serif'],
                        body: ['EB Garamond', 'serif'],
                    },
                    colors: {
                        horror: {
                            dark: '#030303',
                            blood: '#7a0505',
                            bloodLight: '#ff1a1a',
                            bloodDark: '#3d0000',
                            void: '#0a0a0a'
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'EB Garamond', serif;
            background-color: #030303;
            background-image: 
                radial-gradient(circle at 50% 50%, rgba(61, 0, 0, 0.4), transparent 60%),
                radial-gradient(circle at 10% 90%, rgba(20, 0, 0, 0.8), transparent 50%);
            color: #d4d4d8;
            position: relative;
        }

        h1, h2, h3, .magic-font {
            font-family: 'Cinzel', serif;
        }

        .fog {
            position: fixed;
            top: 0; left: 0; width: 100vw; height: 100vh;
            pointer-events: none;
            z-index: -1;
            background: url('data:image/svg+xml;utf8,<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"><filter id="noiseFilter"><feTurbulence type="fractalNoise" baseFrequency="0.012" numOctaves="3" stitchTiles="stitch"/></filter><rect width="100%" height="100%" filter="url(%23noiseFilter)" opacity="0.08"/></svg>');
            opacity: 0.8;
            mix-blend-mode: overlay;
        }
    </style>
</head>

<body class="min-h-screen antialiased selection:bg-horror-blood selection:text-white">
    <div class="fog"></div>

    <nav class="border-b border-horror-bloodDark/50 bg-horror-dark/90 backdrop-blur-md sticky top-0 z-50 px-8 py-4 flex justify-between items-center transition-all shadow-[0_4px_30px_rgba(122,5,5,0.15)]">
        <a href="{{ route('dashboard') }}" class="text-horror-blood hover:text-horror-bloodLight font-bold text-xl tracking-widest flex items-center gap-3 magic-font transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd" d="M12.963 2.286a.75.75 0 00-1.071-.136 9.742 9.742 0 00-3.539 6.177A7.547 7.547 0 016.648 6.61a.75.75 0 00-1.152.082A9 9 0 1015.68 4.534a7.46 7.46 0 01-2.717-2.248zM15.75 14.25a3.75 3.75 0 11-7.313-1.172c.628.465 1.35.81 2.133 1a5.99 5.99 0 011.925-3.545 3.75 3.75 0 013.255 3.717z" clip-rule="evenodd" />
            </svg>
            THE DARK PROPHET
        </a>
        @auth
            <div class="flex items-center gap-8 font-medium text-sm magic-font tracking-wider">
                <a href="{{ route('dashboard') }}" class="text-zinc-400 hover:text-horror-bloodLight transition-all hover:drop-shadow-[0_0_8px_rgba(255,26,26,0.6)]">Draw</a>
                <a href="{{ route('tarot.history') }}" class="text-zinc-400 hover:text-horror-bloodLight transition-all hover:drop-shadow-[0_0_8px_rgba(255,26,26,0.6)]">Archives</a>
                <form method="POST" action="{{ route('logout') }}" class="m-0 p-0">
                    @csrf
                    <button type="submit" class="text-zinc-400 hover:text-horror-bloodLight transition-all hover:drop-shadow-[0_0_8px_rgba(255,26,26,0.6)]">Vanish</button>
                </form>
            </div>
        @endauth
    </nav>

    <div class="max-w-5xl mx-auto px-6 py-12 relative z-10">
        @yield('content')
    </div>

</body>

</html>