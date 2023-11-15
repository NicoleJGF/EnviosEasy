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
            <div class="w-full lg:w-10/12 px-4 mx-auto mt-6">
            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                <div class="rounded-t bg-white mb-0 px-6 py-6">
                <div class="text-center flex justify-between">
                    <h6 class="text-sky-700 text-xl font-bold">Registrando Manzana Nueva</h6>
                    {{----------
                    <button class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md 
                    outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button"> Settings </button>-----------}}
                </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                {!!Form::open(['route' => 'admin.manzana.store'])!!}
                    <div class="flex flex-wrap">
                        {{--- Creador 
                        {!! Form::hidden('creador_id', auth()->user()->id) !!}---}}
                    
                    <div class="w-full lg:w-12/12 px-4 mt-4">
                        <div class="relative w-full mb-3">
                        {!! Form::label('abreviatura', 'Abreviatura', ['class' => 'block text-sm font-medium text-sky-600 mb-2']) !!}
                        {!! Form::text('abreviatura', null, ['class' => 'border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white
                            rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150','placeholder' => 'AV.']) !!}
                            @error('abreviatura')
                                <span class="text-pink-800">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    {{--- Estado Activo = 2 / Suspendido = 3 ---}}
                    <div class="w-full lg:w-6/12 px-4 mt-4">
                      <div class="relative w-full mb-5">
                                {!! Form::label('sector_id', 'Sectores:', ['class' => 'block text-sm font-medium text-sky-600 mb-2']) !!}
                                {!! Form::select('sector_id', $sector_id, null, ['class' => 'bg-teal p-3 rounded text-sky-700 shadow-inner w-full']) !!}
                            
                            @error('sector_id')
                                <samp class="text-danger">{{$message}}</samp>
                            @enderror
                      </div>
                    </div>
                    <div class="w-full lg:w-6/12 px-4 mt-4">
                        <div class="relative w-full mb-5">
                            <p class="block text-sm font-medium text-sky-600 mb-2">Estado: </p>
                            <label class="mr-16 text-gray-500">{!! Form::radio('estado', '1', true, 
                            ['class' => 'mr-2 focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 
                                rounded']) !!} Activo</label>
                            <label class=" text-gray-500">{!! Form::radio('estado', '0', true,
                            ['class' => 'mr-2 focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 
                                rounded']) !!} Suspendido</label> 
                            @error('estado')
                            <span class="invalid-feedback text-red-600"><strong><i class="fa-solid fa-xmark pr-3"></i>{{$message}}</strong></span>
                            @enderror
                        </div>
                    </div>
                    {{----}}
                    <div class="w-full lg:w-12/12 px-4">
                        <div class="relative w-full mb-3">
                        {!! Form::label('descripcion', 'Descripcion', ['class' => 'block text-sm font-medium text-sky-600 mb-2']) !!}
                        {!! Form::textarea('descripcion', null, ['class' => 'border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white
                            rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150',
                            'placeholder' => 'Escribe una descripcion ...']) !!}
                            @error('descripcion')
                                <span class="text-pink-800">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    
                    {{--- Slug ---}}
                    <div class="w-full lg:w-12/12 px-4">
                        <div class="relative w-full mb-3 hidden">
                        {!! Form::label('slug', 'Slug:', ['class' => 'block text-sm font-medium text-sky-600']) !!}
                        {!! Form::text('slug', null, ['class' => 'mt-1 ring-sky-500 border-sky-500 block w-full shadow-sm sm:text-sm rounded-md bg-blue-200 ', 'readonly' ,
                        'placeholder' => 'av.' ]) !!}
                        @error('slug')
                            <span class="invalid-feedback text-red-600"><strong><i class="fa-solid fa-xmark pr-3"></i>{{$message}}</strong></span>
                        @enderror
                        </div>
                    </div>
                    </div>

                    <div class="w-full lg:w-12/12 px-4">
                        <div class="relative w-full mb-3  flex justify-end ">
                            {!! Form::submit('Registrar Manzana', ['class' => 'text-white bg-gradient-to-r from-sky-500 via-sky-600 to-sky-800 
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
</div>
</div>
</div>
</div>
</main>
<!-- script -->
    <script src="https://code.jquery.com/jquery-3.6.3.js" 
    integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
    crossorigin="anonymous"></script>

    <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

    <script>
    /**/

    $(document).ready(function(){
    $("#abreviatura").stringToSlug({
        setEvents: 'keyup keydown blur',
        getPut: '#slug',
        space:'-'
    });

    }); 

    </script>
<!-- commerce slide cards -->
@livewire('btn.btnmanzana')
</x-app-layout>