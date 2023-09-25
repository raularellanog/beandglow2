@extends('web.layout')
@section('content')
    @include('include.breadcrumb')
    <div class="container mx-auto">
        <div class="grid grid-cols-1 gap-2 mt-4">
            <div class="mb-4 border-b border-gray-200 ">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab"
                    data-tabs-toggle="#myTabContent" role="tablist">
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile"
                            type="button" role="tab" aria-controls="profile" aria-selected="false"><i
                                class="fa-regular fa-user"></i> Perfil</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 "
                            id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                            aria-controls="dashboard" aria-selected="false"><i class="fa-regular fa-address-card"></i>
                            Direcciones</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 "
                            id="settings-tab" data-tabs-target="#settings" type="button" role="tab"
                            aria-controls="settings" aria-selected="false"><i class="fa-solid fa-cart-shopping"></i>
                            Ordenes</button>
                    </li>
                    <li role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 "
                            id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab"
                            aria-controls="contacts" aria-selected="false"><i class="fa-solid fa-key"></i> Cambiar
                            contraseña</button>
                    </li>
                </ul>
            </div>
            <div id="myTabContent">
                <div class="hidden p-4 rounded-lg bg-gray-50 " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    @livewire('profile')
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 " id="dashboard" role="tabpanel"
                    aria-labelledby="dashboard-tab">
                    @livewire('address')
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 " id="settings" role="tabpanel"
                    aria-labelledby="settings-tab">
                    @livewire('orders')
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 " id="contacts" role="tabpanel"
                    aria-labelledby="contacts-tab">
                   @livewire('change-pass')
                </div>
            </div>
        </div>
    </div>
@endsection
