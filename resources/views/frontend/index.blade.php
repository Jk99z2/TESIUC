@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
    <section class="bg-gray-100 mb-20">
        <div class="container mx-auto flex px-1 sm:px-20 py-20 md:flex-row flex-col items-center">
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
                <img class="object-cover object-center rounded" alt="hero" src="{{ asset('img/tesiuc-square.png') }}">
            </div>
            <div
                class="lg:flex-grow md:w-1/2 px-4 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                <h1 class="title-font sm:text-8xl text-5xl mb-4 font-medium text-gray-800">
                    {{ app_name() }}
                </h1>
                <p class="mb-8 sm:text-4xl text-3xl">
                    {!! setting('meta_description') !!}
                </p>
                <div class="flex justify-center">
                    <a href="https://github.com/Jk99z2/TESIUC"
                        class="inline-flex text-white bg-gray-700 border-0 py-2 px-8 focus:outline-none hover:bg-gray-800 rounded text-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="w-8 h-8" viewBox="0 0 18 18">
                            <path
                                d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.40.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.20-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.20-.36-1.02.08-2.12 0 0 .67-.21 2.20.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.20-.82 2.20-.82.44 1.10.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.20 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                        </svg>
                        Github
                    </a>
                </div>

                @include('frontend.includes.messages')

            </div>
        </div>
    </section>

    <section class="mb-20">
        <div class="container mx-auto flex flex-col md:flex-row items-center">
            <div class="flex flex-col w-full justify-center items-start md:text-left md:mr-10">
                <h1 class="my-4 text-5xl font-bold leading-tight mb-8">
                    ¿Qué es TESIUC?
                </h1>
                <p class="leading-normal text-2xl mb-8 ml-3 text-justify">
                    TESIUC es la plataforma de control y seguimiento de tesis en línea de la Universidad de Colima. Esta
                    plataforma integra herramientas para la gestión de tesis, la gestión de presentaciones, la revisión e
                    interacción entre autores, así como el seguimiento y evaluación de los estudiantes.
                </p>
            </div>
            <div class="w-full md:w-1/3 py-6 text-center rounded">
                <img class="w-full md:w-4/5 z-50 rounded-lg" src="{{ asset('img/student.jpg') }}">
            </div>
        </div>
    </section>

    <section class="mb-20">
        <!-- Four columns container with some information about the application -->
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap">
                <!-- Card 1 -->
                <div class="w-full md:w-4/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                    <div class="px-6 py-6 rounded-lg shadow-lg text-center border-0 bg-white mb-6">
                        <div
                            class="w-20 h-20 p-3 shadow-lg rounded-full bg-gray-800 mx-auto mb-4 flex items-center justify-center">
                            <i class="fas fa-graduation-cap text-xl text-white"></i>
                        </div>
                        <h6 class="text-xl font-semibold">Gestiona tu tesis</h6>
                        <p class="mt-2 text-gray-600">
                            TESIUC te permite gestionar tu tesis de manera sencilla y eficiente.
                        </p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="w-full md:w-4/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                    <div class="px-6 py-6 rounded-lg shadow-lg text-center border-0 bg-white mb-6">
                        <div
                            class="w-20 h-20 p-3 shadow-lg rounded-full bg-gray-800 mx-auto mb-4 flex items-center justify-center">
                            <i class="fas fa-calendar-alt text-xl text-white"></i>
                        </div>
                        <h6 class="text-xl font-semibold">Programa tus presentaciones</h6>
                        <p class="mt-2 text-gray-600">
                            TESIUC te permite programar tus presentaciones de tesis de manera organizada.
                        </p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="w-full md:w-4/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                    <div class="px-6 py-6 rounded-lg shadow-lg text-center border-0 bg-white mb-6">
                        <div
                            class="w-20 h-20 p-3 shadow-lg rounded-full bg-gray-800 mx-auto mb-4 flex items-center justify-center">
                            <i class="fas fa-comments text-xl text-white"></i>
                        </div>
                        <h6 class="text-xl font-semibold">Interactúa con otros autores</h6>
                        <p class="mt-2 text-gray-600">
                            TESIUC te permite interactuar y colaborar con otros autores de tesis.
                        </p>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="w-full md:w-4/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                    <div class="px-6 py-6 rounded-lg shadow-lg text-center border-0 bg-white mb-6">
                        <div
                            class="w-20 h-20 p-3 shadow-lg rounded-full bg-gray-800 mx-auto mb-4 flex items-center justify-center">
                            <i class="fas fa-chart-bar text-xl text-white"></i>
                        </div>
                        <h6 class="text-xl font-semibold">Realiza seguimiento y evaluación</h6>
                        <p class="mt-2 text-gray-600">
                            TESIUC te permite realizar el seguimiento y evaluación de los estudiantes.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
