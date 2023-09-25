@extends('web.layout')
@section('content')
    @include('web.include.banners')
    <div class="md:container md:mx-auto">
        <div class="grid grid-cols-8 md:gap-4 my-6">
            <div class="col-start-2 col-span-6 my-6">
                <p class="text-lg text-justify">
                    Apoyamos, acompañamos y facilitamos tu camino de transformación a ser la mejor versión de ti.
                    Transformamos
                    tu
                    interior para que manifiestes lo más extraordinario de ti misma, generando una experiencia y realidad
                    llena
                    de
                    amor propio, belleza y placer.
                </p>
                <br>
                <p class="text-lg text-justify">
                    Manifiesta con nosotros, tu versión más radiante y brillante, acompañada siempre de la esencia de ser
                    tan
                    única
                    como tú.
                </p>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-6 py-8" style="background: rgba(238, 136, 176, 0.20);" id="servicios">
        <div class="col-span-6 text-center my-4 justify-items-center">
            <p class="text-center"
                style="color: #7F1D80; text-align: justify;font-family: Emola Royce;
            font-size: 32px; font-style: normal;font-weight: 400; line-height: normal;text-align: center !important">
                Servicios</p>
        </div>
        <div class="col-span-6 p-8">
            <p class="text-center text-lg"
                style="color: #000; text-align: center; font-family: Glacial Indifference;font-style: normal;
            font-weight: 400; line-height: normal;">
                Let's Glow! Acompaña y potencializa tu proceso con las mejores herramientas de selflove.
            </p>
        </div>



        <div class="col-span-6 md:col-span-2 my-2 text-center">
            <div class="grid grid-rows-1 grid-flow-col gap-4 justify-center">
                <div>
                    <img src="{{ asset('img/servicio1.png') }}" alt="servicio1" style="width: 303px;height: 303px;"
                        class="a-vibrate-low">
                    <p class=" mt-4"
                        style="color: #7F1D80;text-align: justify;font-family: Emola Royce;
                        font-size: 24px;font-style: normal;font-weight: 400;line-height: normal; text-align: center !important">
                        Reprogramación
                        cuántica</p>
                </div>
            </div>
        </div>
        <div class="col-span-6 md:col-span-2 my-2 text-center">
            <div class="grid grid-rows-1 grid-flow-col gap-4 justify-items-center">
                <div>
                    <img src="{{ asset('img/servicio2.png') }}" alt="servicio2" style="width: 303px;height: 303px;"
                        class="a-vibrate-low">
                    <p class=" mt-4"
                        style="color: #7F1D80;text-align: justify;font-family: Emola Royce;
                        font-size: 24px;font-style: normal;font-weight: 400;line-height: normal; text-align: center !important">
                        Diseño de imagen</p>
                </div>
            </div>
        </div>
        <div class="col-span-6 md:col-span-2 my-2 text-center">
            <div class="grid grid-rows-1 grid-flow-col gap-4 justify-items-center">
                <div class="text-center">
                    <img src="{{ asset('img/servicio3.png') }}" alt="servicio3" style="width: 303px;height: 303px;"
                        class="a-vibrate-low">
                    <p class=" mt-4"
                        style="color: #7F1D80;text-align: justify;font-family: Emola Royce;
                        font-size: 24px;font-style: normal;font-weight: 400;line-height: normal; text-align: center !important">
                        Fotografía
                        boudoir</p>
                </div>
            </div>
        </div>
        <div class="col-span-6 text-center mt-8">
            <a href="{{ URL('/shop') }}"
                class="focus:outline-none text-white hover:bg-purple-800 focus:ring-4
                            focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2"
                style="background-color: #7F1D80">Conocer
                más</a>
        </div>
    </div>

    <div class="md:container md:mx-auto">
        <div class=" block md:hidden grid justify-items-center self-center">
            <img src="" alt="" style="width: 386px; height: 369px;flex-shrink: 0;">
        </div>
        <div class="grid sm:grid-cols-1 md:grid-cols-10 gap-4 my-6" id="productos">
            <div class="md:col-start-2 md:col-span-8 my-6">
                <div class="grid md:grid-rows-1 md:grid-rows-3 md:grid-flow-col gap-4 flex items-stretch">
                    <div class="md:row-span-3 hidden md:block">
                        <img src="" alt="" style="width: 386px; height: 369px;flex-shrink: 0;">
                    </div>
                    <div class="md:row-span-2 px-8 grid justify-items-center self-center" style="width: 100%">
                        <p style="color: #7F1D80;text-align: center !important;font-size: 32px;">
                            Productos
                        </p>
                        <p class="mt-4 text-lg" style="text-align: center !important;">
                            Let's Glow! Acompaña y potencializa tu proceso con las mejores herramientas de selflove.
                        </p>

                    </div>
                    <div class="col-span-2  text-center">
                        <a href="{{ URL('/shop') }}"
                            class="focus:outline-none text-white hover:bg-purple-800 focus:ring-4
                            focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2"
                            style="background-color: #7F1D80">Conocer
                            más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="grid grid-cols-6 gap-4 py-8">
        <div class="col-span-6 text-center my-4 justify-items-center mt-8">
            <p class="text-center"
                style="color: #7F1D80; text-align: justify;font-family: Emola Royce;
            font-size: 32px; font-style: normal;font-weight: 400; line-height: normal;text-align: center !important">
                Lo que dicen de nosotros</p>
        </div>
        <div class="col-span-6 md:col-span-2 my-2 text-center my-4 justify-items-center">
            <div class="grid grid-rows-1 gap-4">
                <div style="color:#EE88B0" class="text-lg">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <div>
                    <p>Nombre <span class="font-bold">Apellido</span></p>
                </div>
                <div class="px-8 text-justify">
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est, tempora ut et assumenda maxime
                        repudiandae quidem delectus provident sequi. Tempora laborum minus maiores alias ipsum vel
                        reiciendis
                        aliquid molestiae perferendis?
                    </p>
                </div>
            </div>
        </div>
        <div class="col-span-6 md:col-span-2 my-2 text-center my-4 justify-items-center">
            <div class="grid grid-rows-1 gap-4">
                <div style="color:#EE88B0" class="text-lg">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <div>
                    <p>Nombre <span class="font-bold">Apellido</span></p>
                </div>
                <div class="px-8 text-justify">
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est, tempora ut et assumenda maxime
                        repudiandae quidem delectus provident sequi. Tempora laborum minus maiores alias ipsum vel
                        reiciendis
                        aliquid molestiae perferendis?
                    </p>
                </div>
            </div>
        </div>
        <div class="col-span-6 md:col-span-2 my-2 text-center my-4 justify-items-center">
            <div class="grid grid-rows-1 gap-4">
                <div style="color:#EE88B0" class="text-lg">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <div>
                    <p>Nombre <span class="font-bold">Apellido</span></p>
                </div>
                <div class="px-8 text-justify">
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est, tempora ut et assumenda maxime
                        repudiandae quidem delectus provident sequi. Tempora laborum minus maiores alias ipsum vel
                        reiciendis
                        aliquid molestiae perferendis?
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="grid grid-cols-8 gap-4 " id="contacto">
        @livewire('form-contact')
    </div>
@endsection
