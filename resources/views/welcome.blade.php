<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EnvíoEasy</title>
  <link rel="shortcut icon" href="{{url('assets/ico/ey.png')}}" type="image/x-icon">
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700 display=swap">
  <!-- Scripts -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
</head>
<body class="antialiased">
    
@livewire('componente.menug')

    {{----------------------}}
    <section class="bg-white pt-36">
      <div class="mx-auto text-center">
          <div class="flex justify-center">
          <img class=" w-full object-cover" src="{{url('assets/ico/ba1.png')}}" />
          </div>
      </div>
    </section>

    {{----------------------}}

    <main>
        
        <!-- Valores -->
        <div class="bg-[#004AAD] flex items-center justify-center min-h-[400px] relative z-10">
            <div class="w-full px-6 sm:px-8 md:px-16 py-10 md:py-20 rounded-xl min-h-[200px] m-2">
                <ul class="flex items-start justify-between gap-8 mt-10 md:flex-row flex-col">
                    <li class="w-full px-10 pt-16 pb-8 bg-white rounded-lg self-stretch hover:scale-105
                        hover:shadow-[0px_14px_28px_-5px_rgba(0,0,0,0.1)] transition-all duration-150 ease-in">
                        <h2 class="text-center font-semibold text-lg tracking-wider mb-3 
                        drop-shadow-[3px_3px_5px_rgba(91,91,91,0.58)]">
                            Somos</h2>
                        <p class="text-center tracking-tighter block mb-14">
                            <span class="text-4xl font-bold">Eficiencia</span>
                        </p>
                    </li>
                    <li class="w-full  px-10 pt-16 pb-8 bg-white rounded-lg self-stretch hover:scale-105 hover:shadow-[0px_14px_28px_-5px_rgba(0,0,0,0.1)] transition-all duration-150 ease-in relative group">
                        <h2 class="text-center font-semibold text-lg tracking-wider mb-3 drop-shadow-[3px_3px_5px_rgba(91,91,91,0.58)]">
                            Siempre con</h2>
                        <p class="text-center tracking-tighter block mb-14">
                            <span class="text-4xl font-bold">Honestidad</span>
                        </p>
                    </li>
                    <li class="w-full  px-10 pt-16 pb-8 bg-white rounded-lg self-stretch hover:scale-105 hover:shadow-[0px_14px_28px_-5px_rgba(0,0,0,0.1)] transition-all duration-150 ease-in relative group">
                        <h2 class="text-center font-semibold text-lg tracking-wider mb-3 drop-shadow-[3px_3px_5px_rgba(91,91,91,0.58)]">
                            Y primero la</h2>
                        <p class="text-center tracking-tighter block mb-14">
                            <span class="text-4xl font-bold">Responsabilidad</span>
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Nuestros Servicios -->
        <div class="bg-white flex items-center justify-center min-h-screen font-nunito text-slate-600">
            <section class="max-w-[968px] w-full mx-4 mt-12">
                <p class="flex justify-center w-full ">
                    <img src="{{url('assets/ico/ey.png')}}" class="max-w-[100px] slide-in-elliptic-top-fwd">
                </p>
                <h1 class="mx-2 my-10 font-semibold text-center text-3xl">Nuestros Servicios</h1>
                <ul class="w-full bg-white p-8 rounded-lg gap-3 flex items-start justify-center shadow-[0px_10px_15px_9px_#DDE4F1] flex-col sm:flex-row mb-10">
                    <li class="pr-4 grow">
                        <h2 class="mb-3 text-xl font-[800] mt-3">Servicio de Reparto Local B2C:</h2>
                        <p class="max-w-lg text-lg">EnvíoEasy ofrece un servicio de entrega local Business-to-Consumer (B2C) 
                            que garantiza la distribución rápida y confiable de productos directamente a los clientes
                            finales. Desde productos minoristas hasta servicios a domicilio, nuestro servicio de 
                            reparto local B2C se adapta a las necesidades de las empresas para satisfacer las 
                            expectativas de sus clientes.</p>
                    </li>
                    <li
                        class="bg-[#f4faff] px-4 rounded-md min-w-[240px] self-stretch flex items-start justify-center flex-col">
                        <label for="six" class="flex items-center justify-start w-full gap-0 p-3 font-semibold cursor-pointer">
                            <input type="radio" class="w-[20px] aspect-square" name="period" id="six"> <span class="inline-block pl-3 text-xl">$99 <span class="text-sm text-slate-800">/ 6 months</span></span>
                        </label>
                        <label for="twelve" class="flex items-center justify-start w-full gap-2 p-3 font-semibold cursor-pointer">
                            <input type="radio" class="w-[20px] aspect-square" name="period" id="twelve" checked> <span class="text-xl">$189 <span class="text-sm text-slate-800">/ 12 months</span></span>
                        </label>
                    </li>
                </ul>
                <ul
                    class="w-full bg-white p-8  rounded-lg gap-3 flex items-start justify-center shadow-[0px_10px_15px_9px_#DDE4F1] flex-col sm:flex-row relative overflow-hidden mb-10">
                    <li class="pr-4 overflow-hidden grow">
                        <span class="absolute slide-in-top bg-gradient-to-r from-[#6c73ff] to-[#676bbe]
                        text-white px-24 py-[4px] rounded-br-lg left-0 top-0 text-sm">Servicio más Popular</span>
                        <h2 class="mb-3 text-xl font-[800] mt-3">Sistema de Gestión Integral</h2>
                        <p class="max-w-lg text-lg">Además del servicio de reparto, EnvíoEasy proporciona un 
                            sistema integral de gestión de solicitudes y asignación de pedidos. Este sistema permite
                            a las empresas clientes realizar pedidos de manera eficiente, rastrear el estado de sus
                            entregas y optimizar la asignación de trabajadores (motos y a pie) para una distribución
                            efectiva. La solución se adapta a las necesidades específicas de cada 
                            cliente, mejorando la eficiencia operativa y la experiencia del cliente final.</p>
                    </li>
                    <li
                        class="bg-[#f4faff] px-4 rounded-md min-w-[240px] self-stretch flex items-start justify-center flex-col">
                        <label for="msix" class="flex items-center justify-start w-full gap-0 p-3 font-semibold cursor-pointer">
                            <input type="radio" class="w-[20px] aspect-square" name="period" id="msix"> <span class="inline-block pl-3 text-xl">$99 <span class="text-sm text-slate-800">/ 6 months</span></span>
                        </label>
                        <label for="mtwelve" class="flex items-center justify-start w-full gap-2 p-3 font-semibold cursor-pointer">
                            <input type="radio" class="w-[20px] aspect-square" name="period" id="mtwelve"> <span class="text-xl">$189 <span class="text-sm text-slate-800">/ 12 months</span></span>
                        </label>
                    </li>
                </ul>
            </section>
        </div>

        <!-- Preguntas Preguntas -->
        <div class=" mx-auto px-5 my-24 bg-white min-h-sceen mb-48">
            <div class="flex flex-col items-center">
                <h2 class="font-bold text-5xl mt-3 tracking-tight"> EnvíoEasy</h2>
                <p class="text-neutral-500 text-xl mt-2">Preguntas Frecuentes</p>
            </div>
            <div class="grid divide-y divide-neutral-200 max-w-[968px] mx-auto mt-8">
                <div class="py-5">
                    <details class="group">
                        <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                            <span> ¿Cuál es el propósito de este sistema de gestión para reparto local?</span>
                            <span class="transition group-open:rotate-180">
                        <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path>
                    </svg>
                    </span>
                        </summary>
                        <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                            Nuestro sistema tiene como objetivo principal facilitar la gestión eficiente
                            de las solicitudes de entrega local B2C, optimizando la asignación de pedidos 
                            a nuestra flota de trabajadores.
                        </p>
                    </details>
                </div>
                <div class="py-5">
                    <details class="group">
                        <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                            <span> ¿Cómo beneficia este sistema a las empresas clientes?</span>
                            <span class="transition group-open:rotate-180">
                        <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path>
                    </svg>
                    </span>
                        </summary>
                        <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                            Permite a las empresas clientes realizar y dar seguimiento a sus pedidos de manera 
                            más eficiente, garantizando entregas rápidas y mejorando la experiencia del cliente final.
                        </p>
                    </details>
                </div>
                <div class="py-5">
                    <details class="group">
                        <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                            <span> ¿Qué funcionalidades ofrece el sistema para la recepción y asignación de pedidos?</span>
                            <span class="transition group-open:rotate-180">
                        <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path>
                    </svg>
                    </span>
                        </summary>
                        <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                            El sistema cuenta con características como la recepción automatizada de solicitudes,
                            la asignación inteligente de pedidos a nuestra flota de trabajadores (motos y a pie)
                            y la monitorización en tiempo real.
                        </p>
                    </details>
                </div>
                <div class="py-5">
                    <details class="group">
                        <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                            <span>¿Cómo se realiza la asignación de pedidos entre la flota de trabajadores?</span>
                            <span class="transition group-open:rotate-180">
                        <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path>
                    </svg>
                    </span>
                        </summary>
                        <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                            Utilizamos algoritmos de asignación que consideran factores como la ubicación, 
                            capacidad y disponibilidad de los trabajadores para garantizar la eficiencia 
                            en las entregas.
                        </p>
                    </details>
                </div>
            </div>
        </div>

        <!-- Planes -->

        <!-- Equipo -->
    
    </main>

    {{----------------------}}

    @livewire('componente.footer')

</body>
</html>
