@extends('web.layout')
@section('content')
    @include('web.include.banners')


    <div class="grid grid-cols-8 md:my-10 my-2">
        <div class=" block md:hidden grid col-span-8 justify-items-center self-center">
            <img src="" alt="" style="width: 386px; height: 369px;flex-shrink: 0;">
        </div>
        <div class="col-span-8 md:col-span-6 md:col-start-2">
            <div class="grid md:grid-rows-3 grid-flow-col gap-4">
                <div class="hidden md:block md:row-span-3 m-2 rounded-lg" style="width: 383px;background-color: #D9D9D9;">

                </div>
                <div class="md:row-span-3">
                    <p class="my-4"
                        style="color: #7F1D80; text-align: center;font-family: Emola Royce;
                     font-size: 32px;font-style: normal;font-weight: 400;line-height: normal;">
                        Conoce un poco más
                        sobre nosotros</p>
                    <p class="p-4 text-justify" style=""><span style="color: #EE88B0">Be & Glow</span> nace como una
                        respuesta a la necesidad de ser la mejor
                        versión de nosotras mismas. Nuestros
                        productos y servicios consisten en canalizar belleza, placer y abundancia principalmente para
                        mujeres.

                        Nuestra misión es ayudar a que cada mujer pueda verse así misma con el más puro e <span
                            style="color: #EE88B0">infinito amor</span>, que
                        pueda experimentarse en la certeza de ser la más bella creación, que se viva plena, en paz y feliz
                        con ella misma, que se permita vivir y experimentar en placer y disfrute de todo en su vida, y que
                        todo ello le permita no solo auto reconocerse como bella y hermosa, sino también como una mujer
                        <span style="color:
                            #EE88B0">radiante, brillante, poderosa</span> y
                        llena
                        de abundancia a su alrededor.
                    </p>
                </div>

            </div>
        </div>
    </div>

    <div class="my-4" style="height: 328px;background-color: #D9D9D9">
        <div class="flex items-center justify-center" style="height: 100%">
            <p
                style="color: #7F1D80;text-align: center;font-family: Emola Royce;font-size: 32px; font-style: normal;
            font-weight: 400; line-height: normal;">
                Nuestro objetivo...</p>
        </div>
    </div>

    <div class="grid grid-cols-8 my-10">
        <div class=" block md:hidden grid col-span-8 justify-items-center self-center">
            <img src="" alt="" style="width: 386px; height: 369px;flex-shrink: 0;">
        </div>
        <div class="col-span-8 md:col-span-6 md:col-start-2">
            <div class="grid grid-rows-1 md:grid-rows-3 grid-flow-col gap-4">

                <div class="md:row-span-3 p-4">
                    <p class="p-4 text-justify" style="">
                        Nuestro objetivo es apoyar la transformación de cada mujer, partiendo de lo interno, donde debemos
                        sanar y trascender la información consciente o
                        inconsciente que le genera una experiencia de falta de amor propio y autoestima, ello a través de
                        terapias y muchos y distintos <span style="color:
                        #EE88B0">hábitos de
                            autoamor y autocuidado,</span>
                        llenos de suavidad y belleza, hasta generar una experiencia y realidad distinta donde ella pueda
                        sentirse y proyectarse radiante, brillante,
                        segura y poderosa, en un autoamor pleno y donde además podremos darle tangibilidad a esa
                        experiencia a través de un cambio de imagen personalizado y de plasmar esta nueva versión en una
                        experiencia de <span style="color:
                        #EE88B0">fotografía budoir.</span>
                    </p>
                </div>
                <div class="hidden md:block md:row-span-3 m-2 rounded-lg" style="width: 383px;background-color: #D9D9D9;">

                </div>

            </div>
        </div>
    </div>

    <div class="grid grid-cols-8 my-10">
        <div class=" block md:hidden grid col-span-8 justify-items-center self-center">
            <img src="" alt="" style="width: 386px; height: 369px;flex-shrink: 0;">
        </div>
        <div class="col-span-8 md:col-span-6 md:col-start-2">
            <div class="grid md:grid-rows-3 grid-flow-col gap-4">
                <div class="hidden md:block md:row-span-3 m-2 rounded-lg" style="width: 383px;background-color: #D9D9D9;">

                </div>
                <div class="row-span-3 p-4">
                    <p class="p-4 text-justify" style="">
                        Lo anterior, puede tratarse con el nivel de profundidad deseado,
                        es decir podemos apoyarte, acompañarte y facilitar tu camino de sanación interno o ir directamente a
                        lo
                        tangible y externo, ayudándote a <span style="color:
                        #EE88B0">proyectar tu
                            mejor y más bonita imagen personal </span>o, llevando a cabo
                        junto contigo,
                        un proceso de transformación y experiencia integrales, todo ello a través de los distintos servicios
                        y productos con que contamos.
                    </p>
                </div>

            </div>
        </div>
    </div>
    <div class="grid grid-cols-8 my-10 py-8" style="background: rgba(238, 136, 176, 0.20);">
        <div class="col-span-6 col-start-2 mb-4">
            <p class="my-4"
                style="color: #7F1D80; text-align: center;font-family: Emola Royce; font-size: 32px;
            font-style: normal; font-weight: 400; line-height: normal;">
                Misión</p>
            <p class="text-justify ">Ayudar a que cada mujer pueda verse así misma con el más puro e infinito amor, que
                pueda experimentarse en
                la certeza de ser la más bella creación,<span class="font-bold"> que viva plena, en paz y feliz con ella
                    misma,</span> que se permita
                vivir y experimentar en placer y disfrute de todo en su vida, que todo ello le permita no solo auto
                reconocerse como bella y hermosa, sino también como una mujer radiante, brillante, poderosa y llena de
                abundancia a su alrededor.</p>
        </div>
    </div>



    <div class="grid grid-cols-8 gap-4 " id="contacto">
        @livewire('form-contact')
    </div>
@endsection
