<!-- component -->
<main class="bg-gray-100 dark:bg-gray-800 rounded-2xl relative h-screen overflow-hidden">
<div class="flex items-start justify-between">

<div class="h-screen hidden lg:block my-4 ml-4 shadow-lg relative w-80">
<div class="bg-white h-full rounded-2xl dark:bg-gray-700">
    <div class="flex items-center justify-center pt-12">
        <img src="{{asset('assets/ico/ico8.png')}}" width="50" alt="" srcset="" />
    </div>
    <nav class="mt-6">
        <a href="{{route('dashboard')}}" class="w-full font-thin uppercase text-sky-600 flex 
        items-center p-4 my-2 transition-colors duration-200 justify-start bg-gradient-to-r
        from-white to-sky-100 dark:from-gray-700 dark:to-gray-800 border-r-4 border-sky-700" href="#">
            <span class="text-left">
                <svg width="20" height="20" fill="currentColor" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1070 1178l306-564h-654l-306 564h654zm722-282q0 182-71 348t-191 286-286 191-348 71-348-71-286-191-191-286-71-348 71-348 191-286 286-191 348-71 348 71 286 191 191 286 71 348z">
                    </path>
                </svg>
            </span>
            <span class="mx-4 text-sm font-normal">
                Panel
            </span>
        </a>
        <a href="{{route('admin.direccion.index')}}" class="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500" href="#">
            <span class="text-left">
                <svg width="20" height="20" fill="currentColor" class="m-auto" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                    <path d="M960 0l960 384v128h-128q0 26-20.5 45t-48.5 19h-1526q-28 0-48.5-19t-20.5-45h-128v-128zm-704 640h256v768h128v-768h256v768h128v-768h256v768h128v-768h256v768h59q28 0 48.5 19t20.5 45v64h-1664v-64q0-26 20.5-45t48.5-19h59v-768zm1595 960q28 0 48.5 19t20.5 45v128h-1920v-128q0-26 20.5-45t48.5-19h1782z">
                    </path>
                </svg>
            </span>
            <span class="mx-4 text-sm font-normal">
                Zonas
            </span>
        </a>
    </nav>
</div>
</div>



<div class="flex flex-col w-full pl-0 md:p-4 md:space-y-4 m-5">
<div class="overflow-auto h-screen">
<div class="flex flex-col flex-wrap sm:flex-row">
<div class="w-full w-1/1">
    <div class="mb-4 mx-0 ">
        <div class="shadow-lg rounded-2xl bg-white dark:bg-gray-700 w-full">
        <div class="sm:flex sm:items-center sm:justify-between">
            <p class="font-bold text-md p-5 text-black dark:text-white">
                Cientes Registrados<span class="text-sm text-gray-500 dark:text-white"> ({{$clientes_cant}})</span>
            </p>
            <div class="flex items-center mt-4 gap-x-3  mx-4 m-2">
                
    
                <a href="{{route('admin.clientes.create')}}" class="flex items-center justify-center w-1/2 
                px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200
                 bg-sky-700 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-sky-600 dark:hover:bg-sky-500 dark:bg-sky-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>Agregar Cliente</span>
                </a>
            </div>
        </div>
    
        <div class="relative flex items-center  mx-4 m-2">
            <span class="absolute">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mx-3 text-gray-400 dark:text-gray-600">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </span>
            <input data-table="table_id" type="text" placeholder="Search" class="light-table-filter block w-full py-1.5 pr-5 
             text-gray-700 bg-white border border-gray-200 rounded-lg placeholder-gray-400/70 pl-11 rtl:pr-11 rtl:pl-5 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-sky-400 dark:focus:border-sky-300 focus:ring-sky-300 focus:outline-none focus:ring focus:ring-opacity-40">
        </div>
    
        <!-- Tabla de clientes -->
        <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md p-5">
        <section class="container mx-auto">
            <div class="flex flex-col">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                    <table class="table_id min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-800">
                            <tr>
                                <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <span>Nombres & Apellidos</span></th>
                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    Estado</th>
                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    DNI</th>
                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    Celular</th>
                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    Registrado</th>
                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    Direccion</th>
                                <th scope="col" class="relative py-3.5 px-4"></th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                            @foreach ($clientes as $cliente)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                    <div class="flex items-center gap-x-2">
                                        <img width="48" height="48" class="object-cover w-8 h-8 rounded-full" 
                                        src="https://img.icons8.com/fluency/48/000000/user-male-circle.png" alt="user-male-circle"/>
                                        <div>
                                            <h2 class="text-sm font-medium text-gray-800 dark:text-white ">{{$cliente->name}} {{$cliente->apellido}}</h2>
                                            <p class="text-xs font-normal text-gray-600 dark:text-gray-400">{{$cliente->email}}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                    @if ($cliente->estado == '1')
                                        <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 dark:bg-gray-800">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <h2 class="text-sm font-normal">Activo</h2>
                                        </div>
                                    @else
                                        @if ($cliente->estado == '0')
                                        <div class="inline-flex items-center px-3 py-1 text-red-500 rounded-full gap-x-2 bg-red-100/60 dark:bg-gray-800">
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9 3L3 9M3 3L9 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <h2 class="text-sm font-normal">Suspendido</h2>
                                            </div>
                                        @else
                                            <div class="inline-flex items-center px-3 py-1 text-gray-500 rounded-full gap-x-2 bg-gray-100/60 dark:bg-gray-800">
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4.5 7L2 4.5M2 4.5L4.5 2M2 4.5H8C8.53043 4.5 9.03914 4.71071 9.41421 5.08579C9.78929 5.46086 10 5.96957 10 6.5V10" stroke="#667085" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <h2 class="text-sm font-normal">Reintegrando</h2>
                                            </div>
                                        @endif
                                    @endif
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                    {{$cliente->dni}}
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                    {{$cliente->celular}}
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                    <div class="inline-flex items-center gap-x-3">
                                        <span>{{$cliente->created_at}}</span>
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                    @if ($cliente->direccionn->cuadra_id == null)
                                        @foreach ($cliente->direccionn->manzana as $manzana)
                                            @if ($manzana->sector_manzana->count() > 0)
                                                <ul>
                                                    @foreach ($manzana->sector_manzana as $sector)
                                                        <li>{{ $sector->abreviatura }}</li>
                                                    @endforeach
                                                    <li>M. {{$manzana->abreviatura }}</li>
                                                </ul>
                                            @else
                                                <p>No esxite requistros Jiron
                                            @endif
                                        @endforeach
                                        N° #{{$cliente->direccionn->numerod}} <br>
                                        Piso/Depart. {{$cliente->direccionn->piso_dpto}}
                                    @else
                                        @foreach ($cliente->direccionn->cuadra as $cuadra)
                                            @if ($cuadra->jiron_cuadra->count() > 0)
                                                <ul>
                                                    @foreach ($cuadra->jiron_cuadra as $jiron)
                                                        @foreach ($jiron->sector_jiron as $sector)
                                                            <li>{{ $sector->abreviatura }}</li>
                                                        @endforeach
                                                        <li>Jr. {{$jiron->abreviatura }}</li>
                                                    @endforeach
                                                </ul>
                                            @else
                                                <p>No esxite requistros Jiron</p>
                                            @endif
                                        @endforeach 
                                        Cuadra {{$cliente->direccionn->cuadra_id}} <br>
                                        N° #{{$cliente->direccionn->numerod}} <br>
                                        Piso/Depart. {{$cliente->direccionn->piso_dpto}}
                                    @endif
                                </td>
                                {{------------
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                    <a href="{{route('admin.direccion.edit',$cliente->direccionn->id)}}" class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 dark:bg-gray-800">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <h2 class="text-sm font-normal">Editar Direccion</h2>
                                    </div>
                                </td>-------------}}
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap
                                flex justify-end gap-4">
                                    <a x-data="{ tooltip: 'Edite' }" href="{{route('admin.clientes.edit',$cliente)}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" 
                                        stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-green-600" x-tooltip="tooltip">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"/>
                                        </svg>
                                    </a>
                                    
                                    <div x-data="{ open: false }">
                                        <a x-data="{ tooltip: 'Delete' }" href="#" @click="open = true">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" 
                                            stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-red-600" x-tooltip="tooltip">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"/>
                                            </svg>
                                        </a>
                                        <div x-show="open" class="fixed inset-0 flex items-center justify-center z-50">
                                            <div class="fixed inset-0 bg-black opacity-50"></div>
                                        
                                            <div class="bg-white p-8 rounded shadow-lg z-10">
                                                <!-- Contenido del modal aquí -->
                                                <h2 class="text-xl font-bold mb-4 text-red-500">Advertencia !!!</h2>
                                                <p class="text-base text-red-500">¿Estás seguro que deseas eliminar el registro <strong>
                                                {{$cliente->name}} {{$cliente->apellido}}</strong> ?</p>
                                        
                                                <!-- Botones de confirmación y cancelación -->
                                                <div class="mt-4 flex justify-end">
                                                <button @click="open = false" class="px-4 py-2 bg-gray-300 text-gray-700 rounded mr-4">Cancelar</button>
                                                <a class="px-4 py-2 bg-red-500 text-white rounded">Eliminar</a>
                                                </div>
                                                {{-------
                                                <form action="{{route('admin.estudiante.destroy', $user)}}" method="POST">
                                                @csrf
                                                @method('delete')  
                                                <button class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">
                                                <span aria-hidden
                                                    class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                                                <span class="relative">Borrar</span>
                                                </button> 
                                                </form>---}}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>   
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
            </div>
        </section>
        </div>
        </div>
    </div>
</div>
<!--  
ruc 
DNI
comprobante de estudios
direccion
numero de cuenta
-->
<div class="w-full sm:w-1/1 xl:w-1/2">
    <div class="mb-4 mr-5">
    <div class="shadow-lg rounded-2xl p-4 bg-white dark:bg-gray-700 w-full">
    <div class="sm:flex sm:items-center sm:justify-between">
            <p class="font-bold text-md p-5 text-black dark:text-white">
                Operarios<span class="text-sm text-gray-500 dark:text-white">(05)</span>
            </p>
            <div class="flex items-center mt-4 gap-x-3  mx-4 m-2">
                <button class="flex items-center justify-center w-1/2 px-5 py-2 text-sm 
                tracking-wide text-white transition-colors duration-200
                 bg-sky-700 rounded-lg shrink-0 sm:w-auto
                 gap-x-2 hover:bg-sky-600 dark:hover:bg-sky-500
                  dark:bg-sky-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>Ver Todos</span>
                </button>
            </div>
        </div>
        <ul>
            <li class="flex items-center my-6 space-x-2">
                <a href="#" class="block relative">
                    <img alt="profil" src="https://images.unsplash.com/photo-1520341280432-4749d4d7bcf9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" class="mx-auto object-cover rounded-full h-10 w-10 "/>
                </a>
                <div class="flex flex-col">
                    <span class="text-sm text-gray-900 font-semibold dark:text-white ml-2">
                        Charlie Rabiller - Cajero - WhatsApp
                    </span>
                </div>
            </li>
        </ul>
    </div>
    </div>
</div>
<div class="w-full sm:w-1/1 xl:w-1/2">
    <div class="mb-4">
        <div class="shadow-lg rounded-2xl p-4 bg-white dark:bg-gray-700">
            <div class="flex flex-wrap overflow-hidden">
                <div class="w-full rounded shadow-sm">
                    <div class="flex items-center justify-between mb-4">
                        <div class="text-left font-bold text-xl text-black dark:text-white">
                            Dec 2021
                        </div>
                        <div class="flex space-x-4">
                            <button class="p-2 rounded-full bg-sky-500 text-white">
                                <svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M13.83 19a1 1 0 0 1-.78-.37l-4.83-6a1 1 0 0 1 0-1.27l5-6a1 1 0 0 1 1.54 1.28L10.29 12l4.32 5.36a1 1 0 0 1-.78 1.64z">
                                    </path>
                                </svg>
                            </button>
                            <button class="p-2 rounded-full bg-sky-500 text-white">
                                <svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M10 19a1 1 0 0 1-.64-.23a1 1 0 0 1-.13-1.41L13.71 12L9.39 6.63a1 1 0 0 1 .15-1.41a1 1 0 0 1 1.46.15l4.83 6a1 1 0 0 1 0 1.27l-5 6A1 1 0 0 1 10 19z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="-mx-2">
                        <table class="w-full dark:text-white">
                            <tr>
                                <th class="py-3 px-2 md:px-3 ">
                                    S
                                </th>
                                <th class="py-3 px-2 md:px-3 ">
                                    M
                                </th>
                                <th class="py-3 px-2 md:px-3 ">
                                    T
                                </th>
                                <th class="py-3 px-2 md:px-3 ">
                                    W
                                </th>
                                <th class="py-3 px-2 md:px-3 ">
                                    T
                                </th>
                                <th class="py-3 px-2 md:px-3 ">
                                    F
                                </th>
                                <th class="py-3 px-2 md:px-3 ">
                                    S
                                </th>
                            </tr>
                            <tr class="text-gray-400 dark:text-gray-500">
                                <td class="py-3 px-2 md:px-3  text-center text-gray-300 dark:text-gray-500">
                                    25
                                </td>
                                <td class="py-3 px-2 md:px-3  text-center text-gray-300 dark:text-gray-500">
                                    26
                                </td>
                                <td class="py-3 px-2 md:px-3  text-center text-gray-300 dark:text-gray-500">
                                    27
                                </td>
                                <td class="py-3 px-2 md:px-3  text-center text-gray-300 dark:text-gray-500">
                                    28
                                </td>
                                <td class="py-3 px-2 md:px-3  text-center text-gray-300 dark:text-gray-500">
                                    29
                                </td>
                                <td class="py-3 px-2 md:px-3  text-center text-gray-300 dark:text-gray-500">
                                    30
                                </td>
                                <td class="py-3 px-2 md:px-3  hover:text-sky-500 text-center text-gray-800 cursor-pointer">
                                    1
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3 px-2 md:px-3  hover:text-sky-500 text-center cursor-pointer">
                                    2
                                </td>
                                <td class="py-3 relative px-1  hover:text-sky-500 text-center cursor-pointer">
                                    3
                                    <span class="absolute rounded-full h-2 w-2 bg-sky-500 bottom-0 left-1/2 transform -translate-x-1/2">
                                    </span>
                                </td>
                                <td class="py-3 px-2 md:px-3  hover:text-sky-500 text-center cursor-pointer">
                                    4
                                </td>
                                <td class="py-3 px-2 md:px-3  hover:text-sky-500 text-center cursor-pointer">
                                    5
                                </td>
                                <td class="py-3 px-2 md:px-3  hover:text-sky-500 text-center cursor-pointer">
                                    6
                                </td>
                                <td class="py-3 px-2 md:px-3  hover:text-sky-500 text-center cursor-pointer">
                                    7
                                </td>
                                <td class="py-3 px-2 md:px-3 relative lg:px-3 hover:text-sky-500 text-center cursor-pointer">
                                    8
                                    <span class="absolute rounded-full h-2 w-2 bg-yellow-500 bottom-0 left-1/2 transform -translate-x-1/2">
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3 px-2 md:px-3  hover:text-sky-500 text-center cursor-pointer">
                                    9
                                </td>
                                <td class="py-3 px-2 md:px-3  hover:text-sky-500 text-center cursor-pointer">
                                    10
                                </td>
                                <td class="py-3 px-2 md:px-3  hover:text-sky-500 text-center cursor-pointer">
                                    11
                                </td>
                                <td class="py-3 px-2 md:px-3  hover:text-sky-500 text-center cursor-pointer">
                                    12
                                </td>
                                <td class="py-3 px-2 md:px-3  text-center text-white cursor-pointer">
                                    <span class="p-2 rounded-full bg-sky-500">
                                        13
                                    </span>
                                </td>
                                <td class="py-3 px-2 md:px-3  hover:text-sky-500 text-center cursor-pointer">
                                    14
                                </td>
                                <td class="py-3 px-2 md:px-3  hover:text-sky-500 text-center cursor-pointer">
                                    15
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3 px-2 md:px-3  hover:text-sky-500 text-center cursor-pointer">
                                    16
                                </td>
                                <td class="py-3 px-2 md:px-3  hover:text-sky-500 text-center cursor-pointer">
                                    17
                                </td>
                                <td class="py-3 px-2 md:px-3  hover:text-sky-500 text-center cursor-pointer">
                                    18
                                </td>
                                <td class="py-3 px-2 md:px-3  hover:text-sky-500 text-center cursor-pointer">
                                    19
                                </td>
                                <td class="py-3 px-2 md:px-3  hover:text-sky-500 text-center cursor-pointer">
                                    20
                                </td>
                                <td class="py-3 px-2 md:px-3  hover:text-sky-500 text-center cursor-pointer">
                                    21
                                </td>
                                <td class="py-3 px-2 md:px-3  hover:text-sky-500 text-center cursor-pointer">
                                    22
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3 px-2 md:px-3  hover:text-sky-500 text-center cursor-pointer">
                                    23
                                </td>
                                <td class="py-3 px-2 md:px-3  hover:text-sky-500 text-center cursor-pointer">
                                    24
                                </td>
                                <td class="py-3 px-2 md:px-3  hover:text-sky-500 relative text-center cursor-pointer">
                                    25
                                    <span class="absolute rounded-full h-2 w-2 bg-red-500 bottom-0 left-1/2 transform -translate-x-1/2">
                                    </span>
                                </td>
                                <td class="py-3 px-2 md:px-3  hover:text-sky-500 text-center cursor-pointer">
                                    26
                                </td>
                                <td class="py-3 px-2 md:px-3  hover:text-sky-500 text-center cursor-pointer">
                                    27
                                </td>
                                <td class="py-3 px-2 md:px-3  hover:text-sky-500 text-center cursor-pointer">
                                    28
                                </td>
                                <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                    29
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                    30
                                </td>
                                <td class="py-3 px-2 md:px-3  hover:text-blue-500 text-center cursor-pointer">
                                    31
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 11 -->
</div>
</div>

</div>
<!-- 0 -->
</div>
</main>
<!-- Buscador -->
@livewire('componente.js')
    