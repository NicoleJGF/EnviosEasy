<x-app-layout>
<!-- component -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'> 
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet"> 
    
<main class="bg-gray-100 dark:bg-gray-800 rounded-2xl relative h-screen overflow-hidden">
<div class="flex items-start justify-between">
<div class="h-screen hidden lg:block my-4 ml-4 shadow-lg relative w-80">
    <div class="bg-white h-full rounded-2xl dark:bg-gray-700">
    <div class="flex items-center justify-center pt-12">
        <img src="{{asset('assets/ico/ico8.png')}}" width="50" alt="" srcset="" />
    </div>
    <nav class="mt-6">
        <a href="{{route('dashboard')}}" class="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500">
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
    <div class="w-full sm:w-1/1 xl:w-1/2">
        {{--------------------}}
        <div class="mb-4 sm:ml-4 xl:mr-4">
        <div class="shadow-lg rounded-2xl bg-white dark:bg-gray-700 w-full">
            <!-- component -->
            <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
            <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
            <section class=" py-1 bg-white">
            <div class="w-full px-4 mx-auto mt-6">
            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                <div class="rounded-t bg-white mb-0 px-6 py-6">
                <div class="text-center flex justify-between">
                    <h6 class="text-blueGray-500 text-xl font-bold">
                    Registrando Direccion
                    </h6>
                </div>
                </div>
                {!!Form::model($direccion, ['route' => ['admin.direccion.update',$direccion],'method'=>'put'])!!}
                 
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                <div class="flex flex-wrap py-2 mt-4">
                       {{--- Creador 
                        {!! Form::hidden('creador_id', auth()->user()->id) !!}---}}
                    {{--- Beneficiario  $beneficiario
                    <div class="w-full px-4">
                        <div class="relative w-full mb-5">
                            {!! Form::label('cliente_id', 'Cliente', ['class' => 'block text-sm font-medium text-teal-600']) !!}
                            {!! Form::select('cliente_id', , null, ['class' => 'mt-1 focus:ring-teal-500 focus:border-teal-500 block w-full 
                            shadow-sm sm:text-sm border-gray-300 rounded-md p-3']) !!}
                            @error('cliente_id')
                                <span class="invalid-feedback text-red-600"><strong>
                                    <i class="fa-solid fa-xmark pr-3"></i>{{$message}}</strong></span>
                            @enderror
                    </div></div>---}}
                    
                    <div class="w-full lg:w-3/12 px-4">
                        <div class="relative w-full mb-3">
                        {!! Form::label('numerod', 'Numero', ['class' => 'block text-sm font-medium text-sky-600 mb-2']) !!}
                        {!! Form::text('numerod', null, ['class' => 'border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white
                            rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150','placeholder' => '450']) !!}
                            @error('numerod')
                                <span class="text-pink-800">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                        <div class="relative w-full mb-3">
                        {!! Form::label('piso_dpto', 'Piso / Departamento', ['class' => 'block text-sm font-medium text-sky-600 mb-2']) !!}
                        {!! Form::text('piso_dpto', null, ['class' => 'border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white
                            rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all 
                            duration-150','placeholder' => '2']) !!}
                            @error('piso_dpto')
                                <span class="text-pink-800">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    {{--- Estado Activo = 2 / Suspendido = 3 ---}}
                    <div class="w-full lg:w-4/12 px-4">
                        <div class="relative w-full mb-5">
                            <p class="block text-sm font-medium text-sky-600 mb-2">Estado: </p>
                            <label class="mr-12 text-gray-500">{!! Form::radio('estadod', '1', true, 
                            ['class' => 'mr-2 focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 
                                rounded']) !!} Activo</label>
                            <label class=" text-gray-500">{!! Form::radio('estadod', '0', true,
                            ['class' => 'mr-2 focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 
                                rounded']) !!} Suspendido</label> 
                            @error('estado')
                            <span class="invalid-feedback text-red-600"><strong><i class="fa-solid fa-xmark pr-3"></i>{{$message}}</strong></span>
                            @enderror
                        </div>
                    </div>
                    {{--- Slug ---}}
                    <div class="w-full lg:w-12/12 px-4">
                        <div class="relative w-full mb-3 hidden">
                        {!! Form::label('slugd', 'Slug:', ['class' => 'block text-sm font-medium text-sky-600']) !!}
                        {!! Form::text('slugd', null, ['class' => 'mt-1 ring-sky-500 border-sky-500 block w-full shadow-sm sm:text-sm rounded-md bg-blue-200 ', 'readonly' ,
                        'placeholder' => '450' ]) !!}
                        @error('slugd')
                            <span class="invalid-feedback text-red-600"><strong><i class="fa-solid fa-xmark pr-3"></i>{{$message}}</strong></span>
                        @enderror
                        </div>
                    </div>
                </div>
                    
                    <hr class="mt-6 border-b-1 border-blueGray-300">
                    
                    <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                        Zona 
                    </h6>
                <div class="flex flex-wrap">

                    {{---@livewire('admin.select')    Beneficiario  $beneficiario
                    <div class="w-full px-4">
                        <div class="relative w-full mb-5">
                            {!! Form::label('sector', 'Sector', ['class' => 'block text-sm font-medium text-sky-600']) !!}
                            {!! Form::select('sector',$sector, null, ['class' => 'mt-1 focus:ring-sky-500 focus:border-sky-500 block w-full 
                            shadow-sm sm:text-sm border-gray-300 rounded-md p-3']) !!}
                            @error('sector')
                                <span class="invalid-feedback text-red-600"><strong>
                                    <i class="fa-solid fa-xmark pr-3"></i>{{$message}}</strong></span>
                            @enderror
                    </div></div>---}}
                    
                    {{--- Select Collection varios
                    {!! Form::select('sector', ['' => 'Selecciona una'] + 
                        $sector->pluck('abreviatura', 'id')->map(function ($item, $key) use ($sector) {
                        $descripcion = $sector->find($key)->descripcion;
                        return $item . ' - ' . $descripcion;
                    })->toArray(), null, ['class' => 'mt-1 focus:ring-sky-500 focus:border-sky-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-3', 'id' => 'sector']) !!}
                        --}}
                    {{--- Beneficiario  $beneficiario---}}
                    <div class="w-full px-4">
                        <div class="relative w-full mb-5">
                            {!! Form::label('cuadra_id', 'cuadra', ['class' => 'block text-sm font-medium text-sky-600']) !!}
                            <select class="js-select2 mt-1 focus:ring-sky-500 focus:border-sky-500 block w-full shadow-sm sm:text-sm" 
                                name="{{$direccion->cuadra_id}}">
                                <option value="" > Selecciona tu Ubicacion Segun Jiron </option> 
                                    @foreach ($cuadra_id as $cuadra)
                                    <option value="{{$cuadra->id}}"> 
                                        #
                                        @if ($cuadra->jiron_cuadra->count() > 0)
                                            <ul>
                                                @foreach ($cuadra->jiron_cuadra as $cua)
                                                    @if ($cua->sector_jiron->count() > 0)
                                                        <ul>
                                                            @foreach ($cua->sector_jiron as $cu)
                                                                <li>{{ $cu->abreviatura }}</li>
                                                            @endforeach
                                                        </ul>
                                                    @else
                                                        <p> </p>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        @else
                                            <p> </p>
                                        @endif
                                        -
                                        @if ($cuadra->jiron_cuadra->count() > 0)
                                            <ul>
                                                @foreach ($cuadra->jiron_cuadra as $cua)
                                                    <li>{{ $cua->abreviatura }}</li>
                                                @endforeach
                                            </ul>
                                        @else
                                            <p> </p>
                                        @endif
                                        -
                                        Cuadra {{ $cuadra->abreviatura }}</option> 
                                    @endforeach
                            </select>
                            
                            @error('cuadra_id')
                                <span class="invalid-feedback text-red-600"><strong>
                                    <i class="fa-solid fa-xmark pr-3"></i>{{$message}}</strong></span>
                            @enderror
                    </div></div>
                    {{--- Beneficiario  $beneficiario---}}
                    <div class="w-full px-4">
                        <div class="relative w-full mb-5">
                            {!! Form::label('manzana_id', 'manzana', ['class' => 'block text-sm font-medium text-sky-600']) !!}
                            <select class="js-select2 mt-1 focus:ring-sky-500 focus:border-sky-500 block w-full shadow-sm sm:text-sm border-gray-300 
                            rounded-md p-3" name="manzana_id" >
                                <option value=""> Selecciona tu Ubicacion Segun Manzana </option> 
                                    @foreach ($manzana_id as $manzana)
                                        <option value="{{$manzana->id}}"> 
                                        #
                                        @if ($manzana->sector_manzana->count() > 0)
                                            <ul>
                                                @foreach ($manzana->sector_manzana as $cua)
                                                    <li>{{ $cua->abreviatura }}</li>
                                                @endforeach
                                            </ul>
                                        @else
                                            <p> </p>
                                        @endif
                                        -
                                        Manzana {{ $manzana->abreviatura }}</option> 
                                    @endforeach
                            </select>
                            @error('manzana_id')
                                <span class="invalid-feedback text-red-600"><strong>
                                    <i class="fa-solid fa-xmark pr-3"></i>{{$message}}</strong></span>
                            @enderror
                    </div></div>
                </div> 

                    <div class="w-full lg:w-12/12 px-4">
                        <div class="relative w-full mb-3  flex justify-end ">
                            {!! Form::submit('Registrar Cliente', ['class' => 'text-white bg-gradient-to-r from-sky-500 via-sky-600 to-sky-800 
                            hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-sky-300 dark:focus:ring-sky-800
                            font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2']) !!}
                        </div>
                    </div>
            {!!Form::close()!!}
                </div>
            </div>
            </div>
            </section>
        </div>
        </div>
    </div>
    <!-- -->
</div>
</div>
</div>
</div>
</main>
<!-- script -->
    <script src="https://code.jquery.com/jquery-3.6.3.js" 
    integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/livewire@0.6.1/lib/compiler.min.js"></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>  
    <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    <!-- Enlaces a las librerías de jQuery, Select2 y Tailwind CSS -->
    
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

    <script>
    /**/
    $(document).ready(function(){
    $("#dni").stringToSlug({
        setEvents: 'keyup keydown blur',
        getPut: '#slug',
        space:'-'
    });

    }); 
    </script>
    <script>
    $(document).ready(function(){
    $("#numerod").stringToSlug({
        setEvents: 'keyup keydown blur',
        getPut: '#slugd',
        space:'-'
    });
    }); 

    </script>
    
    <script>
        $(document).ready(function() {
            // Selecciona el elemento con la clase js-select2 y aplica el componente select2
            $('.js-select2').select2();
        });
    </script>

    <script>
        $(document).ready(function() {
            // Selecciona el elemento con la clase js-select2 y aplica el componente select2
            $('#js-select2').select2();
        });
    </script>

<!-- script -->
</x-app-layout>