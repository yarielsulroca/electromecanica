<!-- resources/views/components/ClientCard.blade.php -->
<div class="bg-white rounded-lg shadow-md p-4">
    <p class="text-gray-600"> {{ $client->id }}</p>
    <p class="text-gray-800 font-semibold">{{ $client->contacto }}</p>
    <p class="text-gray-400 text-xs">Creado el {{ $client->created_at->format('d/m/Y') }}</p>
</div>
