<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth md:scroll-auto">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>EnvíoEasy</title>
        <link rel="shortcut icon" href="{{url('assets/ico/ey.png')}}" type="image/x-icon">
        
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
        <!-- Favicon LOGO-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <!-- Scripts -->
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <style type="text/tailwindcss">
            @layer utilities {
            .content-auto {
                content-visibility: auto;
            }
            }
        </style>
        @livewireStyles
        </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        @livewire('navigation')

        <div class="min-h-screen bg-gray-100">

            <!-- Page Content@livewire('home') -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @livewireScripts
      
    </body>
</html>
