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
                    Inventario
                </div>
                <div>
                    <div><a href="{{route('addInventario')}}">Agregar producto</a></div>
                    <br>
                    <table class='table datatable' id='inventario'>
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>Usuario</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script type='text/javascript'>
    $(document).ready(function(){
        console.log("Entra aqui");
        // creacion de datatable
        let table = new DataTable('#inventario',
            {
                ajax: '{{route('getInventario')}}',
                serverSide: 'false',
                processing: 'false',
                columns: [  //or different depending on the structure of the object
                        {data: 'nombre'},           
                        {data: 'descripcion'},           
                        {data: 'cantidad'},           
                        {data: 'precio'},           
                        {data: 'user_id'},
                        {"render": function(data, type, row){
                            let url = "/editInventario/"+row.id;
                            return "<a href='"+url+"'>Editar</a>   <a href='javascript:;' onclick='deleteProducto("+row.id+")'>Eliminar</a>";
                            },
                            "targets":5
                        }         
                    ]
            }
        );
    });

    function deleteProducto(id){
        let confirmar = confirm("Estas seguro que deseas eliminar el producto "+id);
        if(confirmar){
            var urlDel = '{{"deleteInventario"}}';
            $.ajax({
            url: urlDel,
            data : { 
                _token: "{{ csrf_token() }}" ,
                id: id
            },
            type: 'get',
            success: function(response) {
                window.location="inventario";
            }
        });
        }
    }
</script>
