<div class="card">
    <div class="card-header">
        Workorder #{{ $workorder->id }}
    </div>
    <div class="card-body">
        <p>Cliente: {{ $workorder->client->contacto }}</p>
        <!-- Otros detalles de la workorder -->
    </div>
</div>
