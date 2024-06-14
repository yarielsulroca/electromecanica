<x-app-layout>
    <div class="container mx-auto p-4">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h1 class="text-2xl font-bold text-blue-500 mb-4">Detalles del Cliente</h1>
            <p class="mb-2"><span class="font-semibold">Nombre:</span> {{ $client->contacto }}</p>
            <h2 class="text-lg font-bold mb-2">Órdenes de Trabajo:</h2>
            <ul class="list-disc pl-6">
                @foreach($orders as $order)
                    <li>{{ $order->id }}</li>
                    <!-- Agrega más detalles de la orden aquí -->
                @endforeach
            </ul>

            <!-- Botón para crear una nueva orden -->
            <div class="mt-4">
                <a href="{{ route('workorders.create', ['cliente_id' => $client->id]) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded inline-flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                 <path fill-rule="evenodd" d="M10">
</x-app-layout>
