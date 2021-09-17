<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('DETALLES') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="post" action="{{route('detalle.store')}}">
                        @csrf
                        <input type="text" name="entrada" placeholder="ingrese entrada producto" value="{{old("entrada")}}"><br>
                        <input type="text" name="salida" placeholder="ingrese salida producto" value="{{old("salida")}}"><br>
                        <input type="submit" value="Enviar">
                    </form>

                    @if ($errors->any())
                        <div style="color:red">
                            @foreach($errors->all() as $error)
                                {{$error}}<br>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
