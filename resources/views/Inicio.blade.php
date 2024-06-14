<x-app-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-center text-2xl font-bold text-blue-500 mb-4">Clientes</h1>
        <div class="p-4">
            <label for="clientes" class="block text-sm font-medium text-gray-700">Selecciona un cliente:</label>
            <select id="clientes" name="clientes" class="mt-1 block w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <option value="">Selecciona un cliente...</option> <!-- Opción en blanco -->
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->contacto }}</option>
                @endforeach
            </select>
            <button id="verCliente" class="mt-4 bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">Ver Cliente</button>
        </div>

        <!-- Área para mostrar los detalles del cliente -->
        <div id="detallesCliente" class="mt-4 p-4 border rounded">
            <!-- Aquí se mostrarán los datos del cliente seleccionado -->
        </div>
    </div>

    <script>
        document.getElementById('verCliente').addEventListener('click', function() {
            var clientId = document.getElementById('clientes').value;
            // Redirigir al usuario a la ruta clientes.show con el ID del cliente
            window.location.href = '/inicio-sow/' + clientId;
        });
    </script>
</x-app-layout>
