<div>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> 
<div class="min-h-full">
    <nav class="bg-white/60 items-center py-1 backdrop-blur-md shadow-md 
        w-full fixed z-10 px-8 md:px-3" x-data="{ open: false }">
    <div class="max-w-7xl mx-auto px-8 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">
    
        <div class="flex items-center">
            <a href=""  class="flex-shrink-0 -mt-1 md:ml-14 xl:ml-12">
                <img class="h-8 w-100" src="{{asset('assets/ico/ey.png')}}" alt="Knowtek LAB"> 
            </a>
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-4">
                
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-500 hover:bg-gray-700 hover:text-white" -->
                <a href="" class="text-blue-600 hover:text-gray-500 px-3 py-2 rounded-md text-sm font-bold">Inicio</a>
                
                <a href="" class="text-blue-600 hover:text-gray-500 px-3 py-2 rounded-md text-sm font-bold">Nosotros</a>

                <a href="" class="text-blue-600 hover:text-gray-500 px-3 py-2 rounded-md text-sm font-bold">Contactanos</a>

                {{--<a href="{{route('equipos.index')}}" class="text-blue-500 hover:text-gray-500 px-3 py-2 rounded-md text-sm font-bold">Grupos</a>--}}
               
                </div>
            </div>
        </div>
    
        <div class="hidden  md:block" >
            <div class="ml-4 flex items-center md:ml-6">
            
                <div class="flex items-center">
                <a href="{{ route('login') }}"  class="block px-4 py-2 rounded-md text-sm font-bold text-blue-500 hover:text-gray-500">Ingresa</a>
                <a href="{{ route('register') }}"  class="block px-4 py-2 rounded-md text-sm font-bold text-blue-500 hover:text-gray-500">Registrate</a>
                </div>
        </div>
        </div>
    
        <div class="-mr-2 flex md:hidden">
            <!-- Mobile menu button -->
            <button  x-on:click="open = true" type="button" class=" inline-flex items-center justify-center p-2 rounded-md text-blue-500 hover:text-blue-500 
                    hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 " aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <!--
                Heroicon name: outline/menu

                Menu open: "hidden", Menu closed: "block"
            -->
            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <!--
                Heroicon name: outline/x

                Menu open: "block", Menu closed: "hidden"
            -->
            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
            </button>
        </div>
    </div>
    </div>
    
    
    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden" id="mobile-menu" x-show="open" x-on:click.away="open = false">
        <div class="px-6 pt-2 pb-3 space-y-1 sm:px-5">
            
            <!-- Current: "bg-indigo-900 text-white", Default: "text-indigo-300 hover:bg-indigo-700 hover:text-white" -->
            <a href="" class="text-blue-500 hover:text-gray-500 px-3 py-2 rounded-md text-sm font-bold">Inicio</a>

            <a href="" class="text-blue-500 hover:text-gray-500 block px-3 py-2 rounded-md text-sm font-bold">Nosotros</a>
    
            <a href="" class="text-blue-500 hover:text-gray-500 block px-3 py-2 rounded-md text-sm font-bold">Contactanos</a>
    
            {{--<a href="{{route('equipos.index')}}" class="text-blue-500 hover:text-gray-500 px-3 py-2 rounded-md text-sm font-bold">Grupos</a>--}}

        </div>

        <div class="pt-4 pb-3 border-t border-gray-50">
            
                <div class="mt-2 pb-2 px-6 space-y-1">
                <a href="{{ route('login') }}"  class="block px-3 py-2 rounded-md text-base font-medium text-blue-500 hover:text-gray-500">Ingresa</a>
                <a href="{{ route('register') }}"  class="block px-3 py-2 rounded-md text-base font-medium text-blue-500 hover:text-gray-500">Registrate</a>
                </div>
        </div>

    </div>

    </nav>
</div>
</div>