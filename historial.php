<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Historial de Cotizaciones</title>
</head>
<body>
    <h2>Historial de Cotizaciones</h2>
    <table>
        <thead>
            <tr>
                <th>Empresa</th>
                <th>Número de Cotización</th>
                <th>Nombre del Cliente</th>
                <th>Precio Total</th>
                <th>Horas Soldadura</th>
                <th>Horas Ensamble</th>
                <th>Horas Polímeros</th>
                <th>Horas Pintura</th>
                <th>Horas Ayudantes</th>
                <th>Horas Supervisor</th>
                <th>Horas Instalación</th>
                <th>Total de Horas</th>
            </tr>
        </thead>
        <tbody id="historyTableBody">
            <!-- Las cotizaciones se cargarán aquí -->
        </tbody>
    </table>
    <button type="button" onclick="downloadHistory()">Descargar Historial</button>

    <script>
        // Cargar cotizaciones desde el localStorage
        function loadHistory() {
            const quotations = JSON.parse(localStorage.getItem('quotations')) || [];
            const tableBody = document.getElementById('historyTableBody');

            quotations.forEach(quotation => {
                const newRow = document.createElement('tr');
                newRow.innerHTML = `
                    <td>${quotation.companyName}</td>
                    <td>${quotation.quotationNumber}</td>
                    <td>${quotation.clientName}</td>
                    <td>${quotation.totalPrice}</td>
                    <td>${quotation.soldaduraHours}</td>
                    <td>${quotation.ensambleHours}</td>
                    <td>${quotation.polímerosHours}</td>
                    <td>${quotation.pinturaHours}</td>
                    <td>${quotation.ayudantesHours}</td>
                    <td>${quotation.supervisorHours}</td>
                    <td>${quotation.instalacionHours}</td>
                    <td>${quotation.totalHours}</td>
                `;
                tableBody.appendChild(newRow);
            });
        }

        // Descargar historial como CSV
        function downloadHistory() {
            const tableBody = document.getElementById('historyTableBody');
            let csvContent = "data:text/csv;charset=utf-8,";

            // Encabezados de la tabla
            csvContent += "Empresa,Número de Cotización,Nombre del Cliente,Precio Total,Horas Soldadura,Horas Ensamble,Horas Polímeros,Horas Pintura,Horas Ayudantes,Horas Supervisor,Horas Instalación,Total de Horas\n";

            // Agregar cada fila de la tabla
            Array.from(tableBody.rows).forEach(row => {
                const rowData = Array.from(row.cells).map(cell => cell.textContent).join(",");
                csvContent += rowData + "\n";
            });

            // Crear un enlace y descargar el archivo
            const encodedUri = encodeURI(csvContent);
            const link = document.createElement("a");
            link.setAttribute("href", encodedUri);
            link.setAttribute("download", "pagina", "historial_cotizaciones.csv");
            document.body.appendChild(link);

            link.click();
            document.body.removeChild(link);
        }

        // Cargar el historial al abrir la página
        window.onload = loadHistory;
    </script>
</body>
</html>
