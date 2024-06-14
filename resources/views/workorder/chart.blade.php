<x-app-layout>
<!-- resources/views/workorders/chart.blade.php -->
<canvas id="workordersChart"></canvas>
<script>
    var ctx = document.getElementById('workordersChart').getContext('2d');
    var data = @json($clients);

    // Configura los datos y opciones del gráfico aquí (usando Chart.js)
    var chart = new Chart(ctx, {
        type: 'bar', // Tipo de gráfico (puede ser 'bar', 'line', 'pie', etc.)
        data: {
            labels: data.map(client => client.name), // Nombres de los clientes
            datasets: [{
                label: 'Órdenes de trabajo por cliente',
                data: data.map(client => client.workorders_count), // Cantidad de workorders por cliente
                backgroundColor: 'rgba(75, 192, 192, 0.2)', // Color de fondo de las barras
                borderColor: 'rgba(75, 192, 192, 1)', // Color del borde de las barras
                borderWidth: 1 // Ancho del borde
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true // Iniciar el eje Y desde cero
                }
            }
        }
    });
</script>
</x-app-layout>
