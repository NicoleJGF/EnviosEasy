<x-app-layout>
<!-- component -->
<main class="bg-gray-100 dark:bg-gray-800 rounded-2xl relative h-screen overflow-hidden">
<div class="flex items-start justify-between">
<div class="h-screen hidden lg:block my-4 ml-4 shadow-lg relative w-80">
    <div class="bg-white h-full rounded-2xl dark:bg-gray-700">
    <div class="flex items-center justify-center pt-12">
        <img src="{{asset('assets/ico/ico8.png')}}" width="50" alt="" srcset="" />
    </div>
    <nav class="mt-6">
        <a href="{{route('dashboard')}}" class="w-full font-thin uppercase
        text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors 
        duration-200 justify-start hover:text-sky-500" href="#">
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
        <a href="{{route('admin.direccion.index')}}" class="w-full font-thin uppercase text-sky-600 flex 
            items-center p-4 my-2 transition-colors duration-200 justify-start bg-gradient-to-r
         from-white to-sky-100 dark:from-gray-700 dark:to-gray-800 border-r-4 border-sky-700" href="#">
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

<div class="flex flex-col w-full pl-0 md:p-4 md:space-y-4">
<div class="overflow-auto h-screen pb-24 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
<div class="flex flex-col flex-wrap sm:flex-row ">

    {{-------------------}}
    <div class="w-full sm:w-1/1">
        <div class="mb-4 mx-0 sm:ml-4 xl:mr-4">
            <div class="bg-white md:flex md:items-center md:justify-between shadow rounded-lg p-4 md:p-6 xl:p-8 my-6 ">
                <h6 class="text-skyGray-700 text-lg font-semibold">Administrando Direcciones</h6>
                <div class="flex items-center mt-4 gap-x-3  mx-4 m-2">
                    <a href="{{route('admin.sector.index')}}" class="flex items-center justify-center  px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200
                        bg-sky-700 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-sky-600 dark:hover:bg-sky-500 dark:bg-sky-600"><span>Sector</span>
                    </a>
                    <a href="{{route('admin.manzana.index')}}" class="flex items-center justify-center w-1/2 px-5 py-2 text-sm text-sky-700 transition-colors duration-200
                    bg-white border rounded-lg gap-x-2 sm:w-auto dark:hover:bg-gray-800 dark:bg-gray-900 hover:bg-gray-100
                    dark:text-gray-200 dark:border-gray-700"><span>Manzana</span>
                    </a>
                    <a href="{{route('admin.cuadra.index')}}" class="flex items-center justify-center w-1/2 px-5 py-2 text-sm text-sky-700 transition-colors duration-200
                        bg-white border rounded-lg gap-x-2 sm:w-auto dark:hover:bg-gray-800 dark:bg-gray-900 hover:bg-gray-100
                        dark:text-gray-200 dark:border-gray-700"><span>Cuadra</span>
                    </a>
                </div>
            </div> 
        </div>
        <div class="mb-4 sm:ml-4 xl:mr-4"><div class="relative flex items-center  m-2">
                    <span class="absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mx-3 text-gray-400 dark:text-gray-600">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                    </span>
                    <input data-table="table_id" type="text" placeholder="Search" class="light-table-filter block w-full py-1.5 pr-5 
                     text-gray-700 bg-white border border-gray-200 rounded-lg placeholder-gray-400/70 pl-11 rtl:pr-11 rtl:pl-5 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-sky-400 dark:focus:border-sky-300 focus:ring-sky-300 focus:outline-none focus:ring focus:ring-opacity-40">
                </div>
            <div class="shadow-lg rounded-2xl bg-white dark:bg-gray-700 w-full">
              <main>
                
              <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="table_id w-full text-sm text-left text-sky-500 dark:text-sky-400">
                  <thead class="text-xs text-sky-700 uppercase bg-sky-50 dark:bg-sky-700 dark:text-sky-400">
                      <tr>
                          <th scope="col" class="px-6 py-3">Cliente</th>
                          <th scope="col" class="px-6 py-3">Direccion</th>
                          <th scope="col" class="px-6 py-3">Estado</th>
                          <th scope="col" class="px-6 py-3">Fecha</th>
                          <th scope="col" class="px-6 py-3"><span class="sr-only">Edit</span></th>
                      </tr>
                  </thead>
                  <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                    @foreach ($direccions as $direccion)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                            <div class="flex items-center gap-x-2">
                                <img width="24" height="24" src="https://img.icons8.com/fluency/48/000000/map-pin.png" alt="map-pin"/>
                                @foreach ($direccion->cliente as $cliente)
                                    <strong>{{ $cliente->name }} {{ $cliente->apellido }}</strong> 
                                @endforeach
                            </div>
                        </td>
                        <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                            <div class="flex items-center gap-x-2">
                                <img width="36" height="36" src="https://img.icons8.com/fluency/48/000000/country.png" alt="country"/>
                                <div>
                                    <h2 class="text-sm font-medium text-gray-800 dark:text-white ">
                                        @if ($direccion->cuadra == null)
                                            @foreach ($direccion->manzana as $manzana)
                                                @if ($manzana->sector_manzana->count() > 0)
                                                    @foreach ($manzana->sector_manzana as $sector)
                                                        Sector: {{$sector->abreviatura }}
                                                    @endforeach
                                                    M. {{$manzana->abreviatura }}
                                                @else
                                                    <p>No esxite requistros Jiron
                                                @endif
                                            @endforeach
                                            N° #{{$direccion->numerod}} <br>
                                            Piso/Depart. {{$direccion->piso_dpto}}
                                        @else
                                            @foreach ($direccion->cuadra as $cuadra)
                                                @if ($cuadra->jiron_cuadra->count() > 0)
                                                    <ul>
                                                        @foreach ($cuadra->jiron_cuadra as $jiron)
                                                            @foreach ($jiron->sector_jiron as $sector)
                                                            Sector {{ $sector->abreviatura }}
                                                            @endforeach
                                                            <li>Jiron/Avenida Jr. {{$jiron->abreviatura }}</li> 
                                                        @endforeach
                                                    </ul>
                                                @else
                                                    <p>No esxite requistros Jiron</p>
                                                @endif
                                                Cuadra {{$cuadra->abreviatura }} →
                                            @endforeach 
                                            N° #{{$direccion->numerod}} →
                                            Piso/Depart. {{$direccion->piso_dpto}}
                                        @endif
                                    </h2>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                            @if ($direccion->estadod == '1')
                                <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 dark:bg-gray-800">
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <h2 class="text-sm font-normal">Activo</h2>
                                </div>
                            @else
                                @if ($direccion->estadod == '0')
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
                            <div class="inline-flex items-center gap-x-3">
                                <span>{{$direccion->created_at}}</span>
                            </div>
                        </td>
                        <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap
                        flex justify-end gap-4">
                            <a href="{{route('admin.direccion.edit', $direccion)}}">
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
                                        @foreach ($direccion->cliente as $cliente)
                                            <strong>{{ $cliente->name }} {{ $cliente->apellido }}</strong> 
                                        @endforeach</strong> ?</p>
                                
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
              </main>
            </div>
          </div>
    </div>
</div>
</div>
</div>

</div>
</main>

<!-- Buscador -->
@livewire('componente.js')
</x-app-layout>