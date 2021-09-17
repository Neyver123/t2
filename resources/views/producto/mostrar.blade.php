<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($titulo) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table w-full">
                        <tr>
                            <th>id</th>
                            <th>nombre del producto</th>
                            <th>nombre del stock</th>
                            <th>nombre del vecimiento</th>
                            <th>&nbsp</th>
                            <th>&nbsp</th>
                        </tr>

                        @foreach ($producto as $pro)
                            <tr>
                                <td>{{$pro->id}}</td>
                                <td>{{$pro->nombre}}</td>
                                <td>{{$pro->stock}}</td>
                                <td>{{$pro->vencimiento}}</td>
                                <td>
                                    <form method='get' action='produtos/{{$pro->id}}/edit'>
                                        <input type='submit' value='Actualizar'>
                                        @csrf
                                        @method("GET")
                                    </form>
                                <td>
                                    <form method='post' action='produtos/{{$pro->id}}'>
                                        <input type='submit' value='Elimnar'>
                                        @csrf
                                        @method("DELETE")
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <a href="{{Route("productos.create")}}">Agregar productos</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
