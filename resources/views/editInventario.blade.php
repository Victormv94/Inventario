<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div>
                    @include('alerts.error')
                    @include('alerts.success')
                    @include('alerts.request')
                </div>
                <div class="p-6 text-gray-900">
                    Editar producto
                </div>
                <div>
                    <form action="{{route('updateInventario')}}" method='put'>
                        @csrf
                        <div class='row'>
                            <div class='col-lg-3 col-md-3 col-sm-3'>
                                <label>Nombre</label>
                                <input type='text' name='nombre'/>
                            </div>
                            <br>
                            <div class='col-lg-3 col-md-3 col-sm-3'>
                                <label>Descripcion</label>
                                <input type='text' name='descripcion'/>
                            </div>
                            <br>
                            <div class='col-lg-3 col-md-3 col-sm-3'>
                                <label>Cantidad</label>
                                <input type='number' name='cantidad'/>
                            </div>
                            <br>
                            <div class='col-lg-3 col-md-3 col-sm-3'>
                                <label>Precio</label>
                                <input type='number' name='precio'/>
                            </div>
                            <br>
                            <div class='col-lg-3 col-md-3 col-sm-3'>
                                <button type='submit'>Agregar producto</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>