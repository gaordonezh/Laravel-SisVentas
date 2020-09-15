<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bienvenidos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!--<x-jet-welcome />-->
                <div style="padding: 20px">
                    <a style="border: 2px solid #2f2f2f;padding:10px 30px;color:white;background-color:#2f2f2f" href="/ventas/venta">Ir al sistema de ventas</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
