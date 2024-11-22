<!DOCTYPE innerHTML>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Cotizaciones</title>
    <link href="./css/formulario.css" rel="stylesheet">

</head>

<body>

    <h1>Formulario de Cotización</h1>
    <form id="quotationForm">
        <label for="companyName">Nombre de la Empresa:</label>
        <input type="text" id="companyName" required>

        <label for="quotationNumber">Número de Cotización:</label>
        <input type="text" id="quotationNumber" required>

        <label for="clientName">Nombre del Cliente:</label>
        <input type="text" id="clientName" required>
    </form>
    <h2 style="text-align: center;">Acrílicos</h2>
    <table id="acrylicsTable">
        <thead>
            <tr>
                <th>Cantidad</th>
                <th>Descripción</th>
                <th>Medida</th>
                <th>Cantidad Decimal</th>
                <th>Valor Unidad</th>
                <th>Valor Total</th>
                <th>Suplidor</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Lamina de acrílico transparente 12 mm</td>
                <td>Lamina</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value" id="precioAcrilico">114583.63</td>
                <td class="currency row-total">0,00</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Lamina de acrílico ahumado 6 mm</td>
                <td>Lamina</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value" id="precioAcrilico">69273.29</td>
                <td class="currency row-total" id="valorTotal">0,00</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Lamina de acrílico transparente 6 mm</td>
                <td>Lamina</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">53272.58</td>
                <td class="currency row-total">0,00</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Lamina de acrílico transparente 5 mm</td>
                <td>Lamina</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">46244.76</td>
                <td class="currency row-total">0,00</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>5</td>
                <td>lamina de acrilico transparente 4 mm</td>
                <td>Lamina</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">37817.74</td>
                <td class="currency row-total">0,0</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>6</td>
                <td>lamina de acrilico transparente 3 mm</td>
                <td>Lamina</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">26394.92</td>
                <td class="currency row-total">0,0</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>7</td>
                <td>lamina de acrilico transparente 2 mm</td>
                <td>Lamina</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">20688.55</td>
                <td class="currency row-total">0,0</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>8</td>
                <td>lamina de policarbonato transparente 6 mm</td>
                <td>Lamina</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">70935.45</td>
                <td class="currency row-total">0,0</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>9</td>
                <td>lamina de policarbonato transparente 5 mm</td>
                <td>Lamina</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">67165.49</td>
                <td class="currency row-total">0,0</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>11</td>
                <td>lamina de policarbonato transparente 4 mm</td>
                <td>Lamina</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">63392.4</td>
                <td class="currency row-total">0,0</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>12</td>
                <td>lamina de policarbonato transparente 3 mm</td>
                <td>Lamina</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">41594.72</td>
                <td class="currency row-total">0,0</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>13</td>
                <td>lamina de policarbonato transparente 10 mm</td>
                <td>Lamina</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">124212,13</td>
                <td class="currency row-total">0,0</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>14</td>
                <td>lamina de policarbonato blanco 3 mm 122 cm x 244 cm</td>
                <td>Lamina</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">45000</td>
                <td class="currency row-total">0,0</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>15</td>
                <td>lamina de policarbonato blanco 6 mm 122 cm x 244 cm</td>
                <td>Lamina</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">83000</td>
                <td class="currency row-total">0,0</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>16</td>
                <td>lamina de policarbonato negro 3 mm 122 cm x 244 cm</td>
                <td>Lamina</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">49000</td>
                <td class="currency row-total">0,0</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>17</td>
                <td>lamina de policarbonato negro 6 mm 122 cm x 244 cm</td>
                <td>Lamina</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">108000</td>
                <td class="currency row-total">0,0</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>18</td>
                <td>lamina de policarbonato ahumado 3 mm 122 cm x 244 cm</td>
                <td>Lamina</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">45000</td>
                <td class="currency row-total">0,0</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>19</td>
                <td>lamina de policarbonato ahumado 6 mm 122 cm x 244 cm</td>
                <td>Lamina</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">88000</td>
                <td class="currency row-total">0,0</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>20</td>
                <td>lamina de policarbonato 205 x 305 transparente 3 mm</td>
                <td>Lamina</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">82830,69</td>
                <td class="currency row-total">0,0</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>21</td>
                <td>lamina de policarbonato 205 x 305 transparente 4 mm</td>
                <td>Lamina</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">101565,6</td>
                <td class="currency row-total">0,0</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>22</td>
                <td>lamina de policarbonato 205 x 305 transparente 5 mm</td>
                <td>Lamina</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">119962,06</td>
                <td class="currency row-total">0,0</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>23</td>
                <td>lamina de policarbonato 205 x 305 transparente 6 mm</td>
                <td>Lamina</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">148525,47</td>
                <td class="currency row-total">0,0</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>24</td>
                <td>lamina de policarbonato 205 x 305 transparente 10 mm</td>
                <td>Lamina</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">250738,515</td>
                <td class="currency row-total">0,0</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>25</td>
                <td>suministros acrilico</td>
                <td>Lamina</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">2500</td>
                <td class="currency row-total">0,0</td>
                <td>Linprec</td>
            </tr>
            <tr>
                <td>26</td>
                <td>tornillería</td>
                <td>Lamina</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">500</td>
                <td class="currency row-total">0,0</td>
                <td>Linprec</td>
            </tr>
</tbody>
            <tfoot>
        <tr class="total-row">
            <td colspan="5">Total General</td>
            <td class="currency" id="grandTotalAcrylicsTable">0,00</td>
            <td></td>
        </tr>
    </tfoot>
</table>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const formatCurrency = (number) => {
            return new Intl.NumberFormat('es-CR', {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            }).format(number);
        };

        const parseAmount = (str) => {
            return parseFloat(str.replace(/\./g, '').replace(',', '.')) || 0;
        };

        const updateTotals = () => {
            let grandTotal = 0;

            document.querySelectorAll('#acrylicsTable .quantity-input').forEach(input => {
                const row = input.closest('tr');
                const quantity = parseFloat(input.value) || 0;
                const unitValue = parseAmount(row.querySelector('.unit-value').textContent);
                const rowTotal = quantity * unitValue;

                row.querySelector('.row-total').textContent = formatCurrency(rowTotal);
                grandTotal += rowTotal;
            });

            document.getElementById('grandTotalAcrylicsTable').textContent = formatCurrency(grandTotal);
        };

        document.querySelectorAll('#acrylicsTable .quantity-input').forEach(input => {
            input.addEventListener('input', updateTotals);
        });

        updateTotals();
    });
</script>
<h2 style="text-align: center;">Materiales Varios</h2>
<table id="miscTable">
    <thead>
        <tr>
            <th>Cantidad Entera</th>
            <th>Descripción</th>
            <th>Medida</th>
            <th>Cantidad Decimal</th>
            <th>Valor Unidad</th>
            <th>Valor Total</th>
            <th>Suplidor</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Llave para garrafa</td>
            <td>Unidad</td>
            <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
            <td class="currency unit-value">47.700</td>
            <td class="currency row-total">0,00</td>
            <td>Poliandina</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Tapa de perfil</td>
            <td>3.2 mts</td>
            <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
            <td class="currency unit-value">18362</td>
            <td class="currency row-total">0,00</td>
            <td>Industrial solutions</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Pieza</td>
            <td>Unidad</td>
            <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
            <td class="currency unit-value">4000</td>
            <td class="currency row-total">0,00</td>
            <td>Ferreteria</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Reposabrazos</td>
            <td>Unidad</td>
            <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
            <td class="currency unit-value">40000</td>
            <td class="currency row-total">0,00</td>
            <td>Amazon</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Nylon retazo</td>
            <td>Unidad</td>
            <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
            <td class="currency unit-value">1500</td>
            <td class="currency row-total">0,00</td>
            <td>Ferreteria</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Dowel pin</td>
            <td>Unidad</td>
            <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
            <td class="currency unit-value">1800</td>
            <td class="currency row-total">0,00</td>
            <td>Importacion</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Retazos tapeta y pegamento</td>
            <td>Unidad</td>
            <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
            <td class="currency unit-value">5000</td>
            <td class="currency row-total">0,00</td>
            <td>Impuestos</td>
        </tr>
        <tr>
            <td>8</td>
            <td>Basurero</td>
            <td>Unidad</td>
            <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
            <td class="currency unit-value">172000</td>
            <td class="currency row-total">0,00</td>
            <td>Sanipro</td>
        </tr>
        <tr>
            <td>9</td>
            <td>Material</td>
            <td>Unidad</td>
            <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
            <td class="currency unit-value">6500</td>
            <td class="currency row-total">0,00</td>
            <td>Linprec</td>
        </tr>
        <tr>
            <td>11</td>
            <td>Rodin 2"</td>
            <td>Unidad</td>
            <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
            <td class="currency unit-value">5000</td>
            <td class="currency row-total">0,00</td>
            <td>Mobesa</td>
        </tr>
        <tr>
            <td>12</td>
            <td>Rodin 3"</td>
            <td>Unidad</td>
            <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
            <td class="currency unit-value">9150</td>
            <td class="currency row-total">0,00</td>
            <td>Mobesa</td>
        </tr>
        <tr>
            <td>13</td>
            <td>Rodin 4"</td>
            <td>Unidad</td>
            <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
            <td class="currency unit-value">9800</td>
            <td class="currency row-total">0,00</td>
            <td>Mobesa</td>
        </tr>
        <tr>
            <td>14</td>
            <td>Cinta doble pega</td>
            <td>Unidad</td>
            <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
            <td class="currency unit-value">1500</td>
            <td class="currency row-total">0,00</td>
            <td>EPA</td>
        </tr>
        <tr>
            <td>15</td>
            <td>Regulador de altura de estación</td>
            <td>Unidad</td>
            <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
            <td class="currency unit-value">1000</td>
            <td class="currency row-total">0,00</td>
            <td>Ferreteria</td>
        </tr>
        <tr>
            <td>16</td>
            <td>Tornillos</td>
            <td>Tornillos</td>
            <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
            <td class="currency unit-value">1200</td>
            <td class="currency row-total">0,00</td>
            <td>Linprec</td>
              </tr>
              </tbody>
    <tfoot>
        <tr class="total-row">
            <td colspan="5">Total General</td>
            <td class="currency" id="grandTotalMiscTable">0,00</td>
            <td></td>
        </tr>
    </tfoot>
</table>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Formato de moneda sin el símbolo de colones
        const formatCurrency = (number) => {
            return new Intl.NumberFormat('es-CR', {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            }).format(number);
        };

        // Función para convertir texto a número (reemplazando puntos y comas)
        const parseAmount = (str) => {
            return parseFloat(str.replace(/\./g, '').replace(',', '.')) || 0;
        };

        // Actualización de totales
        const updateTotals = () => {
            let grandTotal = 0;

            document.querySelectorAll('#miscTable .quantity-input').forEach(input => {
                const row = input.closest('tr');
                const quantity = parseFloat(input.value) || 0;
                const unitValue = parseAmount(row.querySelector('.unit-value').textContent);
                const rowTotal = quantity * unitValue;

                row.querySelector('.row-total').textContent = formatCurrency(rowTotal);
                grandTotal += rowTotal;
            });

            // Total general en el pie de tabla
            document.getElementById('grandTotalMiscTable').textContent = formatCurrency(grandTotal);
        };

        // Eventos para actualizar el total al cambiar cantidad decimal
        document.querySelectorAll('#miscTable .quantity-input').forEach(input => {
            input.addEventListener('input', updateTotals);
        });

        // Llamada inicial para calcular totales al cargar la página
        updateTotals();
    });
</script>
<h2 style="text-align: center;">Hierro Negro</h2>
<table id="blackIronTable">
    <thead>
        <tr>
            <th>Cantidad Entera</th>
            <th>Descripción</th>
            <th>Medida</th>
            <th>Cantidad Decimal</th>
            <th>Valor Unidad</th>
            <th>Valor Total</th>
            <th>Suplidor</th>
        </tr>
    </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Lamina hierro negro de 122 cm x 244 cm de 1.2 mm</td>
                <td>Lamina</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">35,000</td>
                <td class="currency row-total">0,00</td>
                <td>Camara de industrias</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Lamina hierro negro de 122 cm x 244 cm de (1/16"-1.5mm) mm</td>
                <td>Lamina</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">29500</td>
                <td class="currency row-total">0,0</td>
                <td>Camara de industrias</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Lamina hierro negro de 122 cm x 305 cm de (1/16"-1.5mm) mm</td>
                <td>Lamina</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">23000</td>
                <td class="currency row-total">0,0</td>
                <td>Camara de industrias</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Lamina hierro negro de 122 cm x 244 cm de (3/32"-2mm) mm</td>
                <td>Lamina</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">48000</td>
                <td class="currency row-total">0,0</td>
                <td>Camara de industrias</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Lamina hierro negro de 122 cm x 244 cm de (1/8"-3mm) mm</td>
                <td>Lamina</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">53000</td>
                <td class="currency row-total">0,0</td>
                <td>Camara de industrias</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Lamina hierro negro de 122 cm x 244 cm de (1/4"-6mm) mm</td>
                <td>Lamina</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">115000</td>
                <td class="currency row-total">0,0</td>
                <td>Camara de industrias</td>
            </tr>
            <tr>
                <td>7</td>
                <td>tubo cuadrado de hierro negro de 3/4" x 3/4" x 1.5 mm pared</td>
                <td>Tubo de 6 mts</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">5000</td>
                <td class="currency row-total">0,0</td>
                <td>Construplaza</td>
            </tr>
            <tr>
                <td>8</td>
                <td>tubo cuadrado de hierro negro de 1" x 1" x 1.5 mm pared</td>
                <td>Tubo de 6 mts</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">5900</td>
                <td class="currency row-total">0,0</td>
                <td>Construplaza</td>
            </tr>
            <tr>
                <td>9</td>
                <td>tubo cuadrado de hierro negro de 1 1/4" x 1 1/4" x 1.5 mm pared</td>
                <td>Tubo de 6 mts</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">9000</td>
                <td class="currency row-total">0,0</td>
                <td>Construplaza</td>
            </tr>
            <tr>
                <td>11</td>
                <td>tubo cuadrado de hierro negro de 1 1/2" x 1 1/2" x 1.5 mm pared</td>
                <td>Tubo de 6 mts</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">9200</td>
                <td class="currency row-total">0,0</td>
                <td>Construplaza</td>
            </tr>
            <tr>
                <td>12</td>
                <td>tubo cuadrado de hierro negro de 2" x 2" x 1.5 mm pared</td>
                <td>Tubo de 6 mts</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">12400</td>
                <td class="currency row-total">0,0</td>
                <td>Construplaza</td>
            </tr>
            <tr>
                <td>13</td>
                <td>tubo de hierro negro de 1" x 2" x 1.5 mm pared</td>
                <td>Tubo de 6 mts</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">8700</td>
                <td class="currency row-total">0,0</td>
                <td>Construplaza</td>
            </tr>
            <tr>
                <td>14</td>
                <td>tubo de hierro negro de 2" x 3" x 1.5 mm pared</td>
                <td>Tubo de 6 mts</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">14500</td>
                <td class="currency row-total">0,0</td>
                <td>Construplaza</td>
            </tr>
            <tr>
                <td>15</td>
                <td>Tubo de hierro negro de 2" x 4" x 1.5 mm pared</td>
                <td>Tubo de 6 mts</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">15400</td>
                <td class="currency row-total">0,0</td>
                <td>Construplaza</td>
            </tr>
            <tr>
                <td>16</td>
                <td>platina hierro negro de 1" x 1/8"</td>
                <td>6 mts</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">4300</td>
                <td class="currency row-total">0,0</td>
                <td>Construplaza</td>
            </tr>
            <tr>
                <td>17</td>
                <td>platina hierro negro de 2" x 1/8"</td>
                <td>6 mts</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">5500</td>
                <td class="currency row-total">0,0</td>
                <td>Construplaza</td>
            </tr>
            <tr>
                <td>18</td>
                <td>suministros de soldadura</td>
                <td>Suministros</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">15000</td>
                <td class="currency row-total">0,0</td>
                <td>Linprec</td>
            </tr>
            <tr>
                <td>19</td>
                <td>suministros de pintura</td>
                <td>Suministros</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">7500</td>
                <td class="currency row-total">0,0</td>
                <td>Linprec</td>
            </tr>
            <tr>
                <td>21</td>
                <td>angular de 1" x 1/8"</td>
                <td>6 mts</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">5000</td>
                <td class="currency row-total">0,0</td>
                <td>Linprec</td>
            </tr>
            <tr>
                <td>22</td>
                <td>angular de 1 1/2" x 1/8"</td>
                <td>6 mts</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">7500</td>
                <td class="currency row-total">0,0</td>
                <td>Linprec</td>
            </tr>
            <tr>
                <td>23</td>
                <td>angular de 1 1/2" x 3/16"</td>
                <td>6 mts</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">12000</td>
                <td class="currency row-total">0,0</td>
                <td>Linprec</td>
            </tr>
            <tr>
                <td>24</td>
                <td>angular de 2" x 1/8"</td>
                <td>6 mts</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">9500</td>
                <td class="currency row-total">0,0</td>
                <td>Linprec</td>
            </tr>
            <tr>
                <td>25</td>
                <td>angular de 2" x 3/16"</td>
                <td>6 mts</td>
                <td><input type="number" class="quantity-input" step="0.1" min="0"></td>
                <td class="currency unit-value">19000</td>
                <td class="currency row-total">0,0</td>
                <td>Linprec</td>
                </tr>
    </tbody>
    <tfoot>
    <tr class="total-row">
        <td colspan="5">Total General</td>
        <td id="grandTotalBlackIronTable">0,00</td>
        <td></td>
    </tr>
</tfoot>
</table>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Formato de moneda sin el símbolo de colones
        const formatCurrency = (number) => {
            return new Intl.NumberFormat('es-CR', {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            }).format(number);
        };

        // Función para convertir texto a número
        const parseAmount = (str) => {
            return parseFloat(str.replace(/\./g, '').replace(',', '.')) || 0;
        };

        // Actualización de totales
        const updateTotals = () => {
            let grandTotal = 0;

            document.querySelectorAll('#blackIronTable .quantity-input').forEach(input => {
                const row = input.closest('tr');
                const quantity = parseFloat(input.value) || 0;
                const unitValue = parseAmount(row.querySelector('.unit-value').textContent);
                const rowTotal = quantity * unitValue;

                row.querySelector('.row-total').textContent = formatCurrency(rowTotal);
                grandTotal += rowTotal;
            });

            // Total general en el pie de tabla
            document.getElementById('grandTotalBlackIronTable').textContent = formatCurrency(grandTotal);
        };

        // Eventos para actualizar el total al cambiar cantidad decimal
        document.querySelectorAll('#blackIronTable .quantity-input').forEach(input => {
            input.addEventListener('input', updateTotals);
        });

        // Llamada inicial para calcular totales al cargar la página
        updateTotals();
    });
</script>
<h2 style="text-align: center;">Acero Inoxidable</h2>
<table id="stainlessSteelTable">
    <thead>
        <tr>
            <th>Cantidad Entera</th>
            <th>Descripción</th>
            <th>Medida</th>
            <th>Cantidad Decimal</th>
            <th>Valor Unidad</th>
            <th>Valor Total</th>
            <th>Suplidor</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Lamina inoxidable 304 de 122 cm x 244 cm de 1.2 mm</td>
            <td>Lamina</td>
            <td><input type="number" class="quantity-input" id="quantity-4.1" value="" oninput="updateTotal(4.1)"></td>
            <td class="unit-value" id="unitValue-4.1">56000</td>
            <td class="row-total" id="total-4.1">0,00</td>
            <td>SUMINOX</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Lamina inoxidable 304 de 122 cm x 244 cm de (1/16"-1.5mm)</td>
            <td>Lamina</td>
            <td><input type="number" class="quantity-input" id="quantity-4.2" value="" oninput="updateTotal(4.2)"></td>
            <td class="unit-value" id="unitValue-4.2">62500</td>
            <td class="row-total" id="total-4.2">0,0</td>
            <td>SUMINOX</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Lamina inoxidable de 122 cm x 244 cm de (3/32"-2mm)</td>
            <td>Lamina</td>
            <td><input type="number" class="quantity-input" id="quantity-4.3" value="" oninput="updateTotal(4.3)"></td>
            <td class="unit-value" id="unitValue-4.3">90000</td>
            <td class="row-total" id="total-4.3">0,0</td>
            <td>SUMINOX</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Lamina inoxidable de 122 cm x 244 cm de (1/8"-3 mm)</td>
            <td>Lamina</td>
            <td><input type="number" class="quantity-input" id="quantity-4.4" value="" oninput="updateTotal(4.4)"></td>
            <td class="unit-value" id="unitValue-4.4">195000</td>
            <td class="row-total" id="total-4.4">0,0</td>
            <td>SUMINOX</td>
        </tr>
        <tr>
            <td>5</td>
            <td>tubo cuadrado inoxidable de 1" x 1" x 1.5 mm pared</td>
            <td>Tubo de 6 mts</td>
            <td><input type="number" class="quantity-input" id="quantity-4.5" value="" oninput="updateTotal(4.5)"></td>
            <td class="unit-value" id="unitValue-4.5">16000</td>
            <td class="row-total" id="total-4.5">0,0</td>
            <td>SUMINOX</td>
        </tr>
        <tr>
            <td>6</td>
            <td>tubo cuadrado inoxidable de 2" x 1.5 mm pared</td>
            <td>Tubo de 6 mts</td>
            <td><input type="number" class="quantity-input" id="quantity-4.6" value="" oninput="updateTotal(4.6)"></td>
            <td class="unit-value" id="unitValue-4.6">36000</td>
            <td class="row-total" id="total-4.6">0,0</td>
            <td>SUMINOX</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Platina inoxidable de 1" x 1/8"</td>
            <td>6 mts</td>
            <td><input type="number" class="quantity-input" id="quantity-4.7" value="" oninput="updateTotal(4.7)"></td>
            <td class="unit-value" id="unitValue-4.7">10000</td>
            <td class="row-total" id="total-4.7">0,0</td>
            <td>SUMINOX</td>
        </tr>
        <tr>
            <td>8</td>
            <td>platina de inoxidable de 1 1/2" x 1/8"</td>
            <td>6 mts</td>
            <td><input type="number" class="quantity-input" id="quantity-4.8" value="" oninput="updateTotal(4.8)"></td>
            <td class="unit-value" id="unitValue-4.8">13000</td>
            <td class="row-total" id="total-4.8">0,0</td>
            <td>SUMINOX</td>
        </tr>
        <tr>
            <td>9</td>
            <td>Suministros de soldadura</td>
            <td>Suministros</td>
            <td><input type="number" class="quantity-input" id="quantity-4.9" value="" oninput="updateTotal(4.9)"></td>
            <td class="unit-value" id="unitValue-4.9">8500</td>
            <td class="row-total" id="total-4.9">0,0</td>
            <td>SUMINOX</td>
        </tr>
        <tr>
            <td>11</td>
            <td>tubo cuadrado inoxidable de 1 1/2" x 1 1/2" x 1.5 mm pared</td>
            <td>Tubo de 6 mts</td>
            <td><input type="number" class="quantity-input" id="quantity-4.11" value="" oninput="updateTotal(4.11)"></td>
            <td class="unit-value" id="unitValue-4.11">23000</td>
            <td class="row-total" id="total-4.11">0,0</td>
            <td>SUMINOX</td>
        </tr>
        <tr>
            <td>12</td>
            <td>lamina de inoxidable de 316L x 1/16" de espesor 122 cm x 244 cm</td>
            <td>Lamina</td>
            <td><input type="number" class="quantity-input" id="quantity-4.12" value="" oninput="updateTotal(4.12)"></td>
            <td class="unit-value" id="unitValue-4.12">87500</td>
            <td class="row-total" id="total-4.12">0,0</td>
            <td>Aceros Monge</td>
        </tr>
        <tr>
            <td>13</td>
            <td>tubo redondo de inoxidable de 1" x 1,5 mm</td>
            <td>6 mts</td>
            <td><input type="number" class="quantity-input" id="quantity-4.13" value="" oninput="updateTotal(4.13)"></td>
            <td class="unit-value" id="unitValue-4.13">14000</td>
            <td class="row-total" id="total-4.13">0,0</td>
            <td>SUMINOX</td>
        </tr>
        <tr>
            <td>14</td>
            <td>tubo redondo de inoxidable de 1 1/2" x 1,5 mm</td>
            <td>6 mts</td>
            <td><input type="number" class="quantity-input" id="quantity-4.14" value="" oninput="updateTotal(4.14)"></td>
            <td class="unit-value" id="unitValue-4.14">22000</td>
            <td class="row-total" id="total-4.14">0,0</td>
            <td>SUMINOX</td>
        </tr>
        </tbody>
            <tfoot>
        <tr class="total-row">
            <td colspan="5">Total General</td>
            <td class="currency" id="grandTotalStainlessSteelTable">0,00</td>
            <td></td>
        </tr>
    </tfoot>
</table>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const formatCurrency = (number) => {
            return new Intl.NumberFormat('es-CR', {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            }).format(number);
        };

        const parseAmount = (str) => {
            return parseFloat(str.replace(/\./g, '').replace(',', '.')) || 0;
        };

        const updateTotals = () => {
            let grandTotal = 0;

            document.querySelectorAll('#stainlessSteelTable .quantity-input').forEach(input => {
                const row = input.closest('tr');
                const quantity = parseFloat(input.value) || 0;
                const unitValue = parseAmount(row.querySelector('.unit-value').textContent);
                const rowTotal = quantity * unitValue;

                row.querySelector('.row-total').textContent = formatCurrency(rowTotal);
                grandTotal += rowTotal;
            });

            document.getElementById('grandTotalStainlessSteelTable').textContent = formatCurrency(grandTotal);
        };

        document.querySelectorAll('#stainlessSteelTable .quantity-input').forEach(input => {
            input.addEventListener('input', updateTotals);
        });

        updateTotals();
    });
</script>
    <h2 style="text-align: center;">Perfilería de Aluminio</h2>
    <table id="aluminumProfileTable">
        <thead>
            <tr>
                <th>Cantidad Entera</th>
                <th>Descripción</th>
                <th>Medida</th>
                <th>Cantidad Decimal</th>
                <th>Valor Unidad</th>
                <th>Valor Total</th>
                <th>Suplidor</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Perfil de 40 mm x 40 mm x 6 mts de largo MOBESA</td>
                <td>Tubo 6 mts</td>
                <td><input type="number" class="quantity-input" id="quantity-5.1" value="" oninput="updateTotal(5.1)"></td>
                <td class="unit-value" id="unitValue-5.1">78,696</td>
                <td class="row-total" id="total-5.1">0,00</td>
                <td>MOBESA</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Recubrimiento plástico para perfil de 40 mm MOBESA</td>
                <td>Metro</td>
                <td><input type="number" class="quantity-input" id="quantity-5.2" value="" oninput="updateTotal(5.2)"></td>
                <td class="unit-value" id="unitValue-5.2">1744</td>
                <td class="row-total" id="total-5.2">0,00</td>
                <td>MOBESA</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Escuadra 90 grados para perfil de 40 mm MOBESA</td>
                <td>Unidad</td>
                <td><input type="number" class="quantity-input" id="quantity-5.3" value="" oninput="updateTotal(5.3)"></td>
                <td class="unit-value" id="unitValue-5.3">2099</td>
                <td class="row-total" id="total-5.3">0,00</td>
                <td>MOBESA</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Tapa para escuadra de 45 mm MOBESA</td>
                <td>Unidad</td>
                <td><input type="number" class="quantity-input" id="quantity-5.4" value="" oninput="updateTotal(5.4)"></td>
                <td class="unit-value" id="unitValue-5.4">449</td>
                <td class="row-total" id="total-5.4">0,00</td>
                <td>MOBESA</td>
            </tr>
            <tr>
                <td>5</td>
                <td>lamina HPL 12 mm x 4 ft x 8 ft MOBESA</td>
                <td>Lamina</td>
                <td><input type="number" class="quantity-input" id="quantity-5.5" value="" oninput="updateTotal(5.5)"></td>
                <td class="unit-value" id="unitValue-5.5">134832</td>
                <td class="row-total" id="total-5.5">0,00</td>
                <td>MOBESA</td>
            </tr>
            <tr>
                <td>6</td>
                <td>tornillo autoroscante para perfil de 45 mm MOBESA</td>
                <td>Unidad</td>
                <td><input type="number" class="quantity-input" id="quantity-5.6" value="" oninput="updateTotal(5.6)"></td>
                <td class="unit-value" id="unitValue-5.6">839</td>
                <td class="row-total" id="total-5.6">0,00</td>
                <td>MOBESA</td>
            </tr>
            <tr>
                <td>7</td>
                <td>chanchito y tornillo MOBESA</td>
                <td>Juego</td>
                <td><input type="number" class="quantity-input" id="quantity-5.7" value="" oninput="updateTotal(5.7)"></td>
                <td class="unit-value" id="unitValue-5.7">1146</td>
                <td class="row-total" id="total-5.7">0,00</td>
                <td>MOBESA</td>
            </tr>
            <tr>
                <td>8</td>
                <td>lamina HPL 8 mm x 4 ft x 8 ft MOBESA</td>
                <td>Lamina</td>
                <td><input type="number" class="quantity-input" id="quantity-5.8" value="" oninput="updateTotal(5.8)"></td>
                <td class="unit-value" id="unitValue-5.8">102305</td>
                <td class="row-total" id="total-5.8">0,00</td>
                <td>MOBESA</td>
            </tr>
            <tr>
                <td>9</td>
                <td>recubrimiento plástico para perfil de 30 mm MOBESA</td>
                <td>Metro</td>
                <td><input type="number" class="quantity-input" id="quantity-5.9" value="" oninput="updateTotal(5.9)"></td>
                <td class="unit-value" id="unitValue-5.9">918</td>
                <td class="row-total" id="total-5.9">0,00</td>
                <td>MOBESA</td>
            </tr>
            <tr>
                <td>11</td>
                <td>Tapa para escuadra de 45 mm MOBESA</td>
                <td>Unidad</td>
                <td><input type="number" class="quantity-input" id="quantity-5.11" value="" oninput="updateTotal(5.11)"></td>
                <td class="unit-value" id="unitValue-5.11">1102</td>
                <td class="row-total" id="total-5.11">0,00</td>
                <td>MOBESA</td>
            </tr>
            <tr>
                <td>12</td>
                <td>Perfil de 30 mm x 30 mm x 6 mts de largo MOBESA</td>
                <td>Tubo 6 mts</td>
                <td><input type="number" class="quantity-input" id="quantity-5.12" value="" oninput="updateTotal(5.12)"></td>
                <td class="unit-value" id="unitValue-5.12">61121</td>
                <td class="row-total" id="total-5.12">0,00</td>
                <td>MOBESA</td>
            </tr>
            <tr>
                <td>13</td>
                <td>Perfil de 40 mm x 80 mm x 6 mts de largo MOBESA</td>
                <td>Tubo 6 mts</td>
                <td><input type="number" class="quantity-input" id="quantity-5.13" value="" oninput="updateTotal(5.13)"></td>
                <td class="unit-value" id="unitValue-5.13">163688</td>
                <td class="row-total" id="total-5.13">0,00</td>
                <td>MOBESA</td>
            </tr>
            <tr>
                <td>14</td>
                <td>Perfil de 45 mm x 45 mm x 6 mts de largo NOVATEC</td>
                <td>Tubo 6 mts</td>
                <td><input type="number" class="quantity-input" id="quantity-5.14" value="" oninput="updateTotal(5.14)"></td>
                <td class="unit-value" id="unitValue-5.14">93386</td>
                <td class="row-total" id="total-5.14">0,00</td>
                <td>NOVATEC</td>
            </tr>
            <tr>
                <td>15</td>
                <td>recubrimiento plástico para perfil de 45 mm NOVATEC</td>
                <td>Metro</td>
                <td><input type="number" class="quantity-input" id="quantity-5.15" value="" oninput="updateTotal(5.15)"></td>
                <td class="unit-value" id="unitValue-5.15">2990</td>
                <td class="row-total" id="total-5.15">0,00</td>
                <td>NOVATEC</td>
            </tr>
            <tr>
                <td>16</td>
                <td>Escuadra 90 grados para perfil de 45 mm NOVATEC</td>
                <td>Unidad</td>
                <td><input type="number" class="quantity-input" id="quantity-5.16" value="" oninput="updateTotal(5.16)"></td>
                <td class="unit-value" id="unitValue-5.16">6600</td>
                <td class="row-total" id="total-5.16">0,00</td>
                <td>NOVATEC</td>
            </tr>
            <tr>
                <td>17</td>
                <td>Tapa para escuadra de 45 mm NOVATEC</td>
                <td>Unidad</td>
                <td><input type="number" class="quantity-input" id="quantity-5.17" value="" oninput="updateTotal(5.17)"></td>
                <td class="unit-value" id="unitValue-5.17">1574</td>
                <td class="row-total" id="total-5.17">0,00</td>
                <td>NOVATEC</td>
            </tr>
            <tr>
                <td>18</td>
                <td>lamina HPL 12 mm x 4 ft x 8 ft NOVATEC</td>
                <td>Lamina</td>
                <td><input type="number" class="quantity-input" id="quantity-5.18" value="" oninput="updateTotal(5.18)"></td>
                <td class="unit-value" id="unitValue-5.18">192018</td>
                <td class="row-total" id="total-5.18">0,00</td>
                <td>NOVATEC</td>
            </tr>
            <tr>
                <td>19</td>
                <td>tornillo autoroscante para perfil de 45 mm NOVATEC</td>
                <td>Unidad</td>
                <td><input type="number" class="quantity-input" id="quantity-5.19" value="" oninput="updateTotal(5.19)"></td>
                <td class="unit-value" id="unitValue-5.19">1049</td>
                <td class="row-total" id="total-5.19">0,00</td>
                <td>NOVATEC</td>
            </tr>
            <tr>
                <td>21</td>
                <td>chanchito y tornillo NOVATEC</td>
                <td>Juego</td>
                <td><input type="number" class="quantity-input" id="quantity-5.21" value="" oninput="updateTotal(5.21)"></td>
                <td class="unit-value" id="unitValue-5.21">1146</td>
                <td class="row-total" id="total-5.21">0,00</td>
                <td>NOVATEC</td>
            </tr>
            <tr>
                <td>22</td>
                <td>lamina HPL 8 mm x 4 ft x 8 ft NOVATEC</td>
                <td>Lamina</td>
                <td><input type="number" class="quantity-input" id="quantity-5.22" value="" oninput="updateTotal(5.22)"></td>
                <td class="unit-value" id="unitValue-5.22">152670</td>
                <td class="row-total" id="total-5.22">0,00</td>
                <td>NOVATEC</td>
            </tr>
            </tbody>
            <tfoot> 
        <tr class="total-row">
            <td colspan="5">Total General</td>
            <td class="currency" id="grandTotalAluminumProfileTable">0,00</td>
            <td></td>
        </tr>
    </tfoot>
</table>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const formatCurrency = (number) => {
        return new Intl.NumberFormat('es-CR', {
            minimumFractionDigits: 2,
            maximumFractionDigits: 2
        }).format(number);
    };

    const parseAmount = (str) => {
        return parseFloat(str.replace(/\./g, '').replace(',', '.')) || 0;
    };

    const updateTotals = () => {
        let grandTotal = 0;

        document.querySelectorAll('#aluminumProfileTable .quantity-input').forEach(input => {
            const row = input.closest('tr');
            const quantity = parseFloat(input.value) || 0;
            const unitValue = parseAmount(row.querySelector('.unit-value').textContent);
            const rowTotal = quantity * unitValue;

            row.querySelector('.row-total').textContent = formatCurrency(rowTotal);
            grandTotal += rowTotal;
        });

        document.getElementById('grandTotalAluminumProfileTable').textContent = formatCurrency(grandTotal);
    };

    document.querySelectorAll('#aluminumProfileTable .quantity-input').forEach(input => {
        input.addEventListener('input', updateTotals);
    });

    updateTotals();
});
</script>
    <h2 style="text-align: center;">Mano de Obra - Proceso de Manufactura</h2>
    <table id="manufacturingTable">
            <thead>
                <tr>
                    <th>Cantidad Entera</th>
                    <th>Proceso</th>
                    <th>Medida</th>
                    <th>Cantidad Decimal</th>
                    <th>Valor</th>
                    <th>Valor Total</th>
                    <th>Suplidor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Horas de Soldadura Oridinaria</td>
                    <td>40,17</td>
                    <td><input type="number" min="0" step="0.1" class="cantidadDecimal" oninput="updateTotals()"></td>
                    <td>4300</td>
                    <td class="total">0,00</td>
                    <td>Linprec</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Horas de Soldadura Extras</td>
                    <td>-</td>
                    <td><input type="number" min="0" step="0.1" class="cantidadDecimal" oninput="updateTotals()"></td>
                    <td>6450</td>
                    <td class="total">0,00</td>
                    <td>Linprec</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Horas de Polimeros Oridinaria</td>
                    <td>16,07</td>
                    <td><input type="number" min="0" step="0.1" class="cantidadDecimal" oninput="updateTotals()"></td>
                    <td>4300</td>
                    <td class="total">0,00</td>
                    <td>Linprec</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Horas de Polimeros Extras</td>
                    <td>-</td>
                    <td><input type="number" min="0" step="0.1" class="cantidadDecimal" oninput="updateTotals()"></td>
                    <td>6450</td>
                    <td class="total">0,00</td>
                    <td>Linprec</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Horas de Pintura Oridinaria</td>
                    <td>16,07</td>
                    <td><input type="number" min="0" step="0.1" class="cantidadDecimal" oninput="updateTotals()"></td>
                    <td>4300</td>
                    <td class="total">0,00</td>
                    <td>Linprec</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Horas de Pintura Extras</td>
                    <td>-</td>
                    <td><input type="number" min="0" step="0.1" class="cantidadDecimal" oninput="updateTotals()"></td>
                    <td>6450</td>
                    <td class="total">0,00</td>
                    <td>Linprec</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Horas de Ensamble Oridinaria</td>
                    <td>16,07</td>
                    <td><input type="number" min="0" step="0.1" class="cantidadDecimal" oninput="updateTotals()"></td>
                    <td>4300</td>
                    <td class="total">0,00</td>
                    <td>Linprec</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Horas de Ensamble Extras</td>
                    <td>-</td>
                    <td><input type="number" min="0" step="0.1" class="cantidadDecimal" oninput="updateTotals()"></td>
                    <td>6450</td>
                    <td class="total">0,00</td>
                    <td>Linprec</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Horas de Ayudantes Oridinaria</td>
                    <td>24,1</td>
                    <td><input type="number" min="0" step="0.1" class="cantidadDecimal" oninput="updateTotals()"></td>
                    <td>4300</td>
                    <td class="total">0,00</td>
                    <td>Linprec</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Horas de Ayudante Extras</td>
                    <td>-</td>
                    <td><input type="number" min="0" step="0.1" class="cantidadDecimal" oninput="updateTotals()"></td>
                    <td>6450</td>
                    <td class="total">0,00</td>
                    <td>Linprec</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Horas de Supervisor Oridinaria</td>
                    <td>8,03</td>
                    <td><input type="number" min="0" step="0.1" class="cantidadDecimal" oninput="updateTotals()"></td>
                    <td>4300</td>
                    <td class="total">0,00</td>
                    <td>Linprec</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Horas de Supervisor Extras</td>
                    <td>16,07</td>
                    <td><input type="number" min="0" step="0.1" class="cantidadDecimal" oninput="updateTotals()"></td>
                    <td>6450</td>
                    <td class="total">0,00</td>
                    <td>Linprec</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Visita</td>
                    <td>salario hora</td>
                    <td><input type="number" min="0" step="0.1" class="cantidadDecimal" oninput="updateTotals()"></td>
                    <td>7200</td>
                    <td class="total">0,00</td>
                    <td>Linprec</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>Cotizaciones</td>
                    <td>salario hora</td>
                    <td><input type="number" min="0" step="0.1" class="cantidadDecimal" oninput="updateTotals()"></td>
                    <td>7200</td>
                    <td class="total">0,00</td>
                    <td>Linprec</td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>Calidad</td>
                    <td>salario hora</td>
                    <td><input type="number" min="0" step="0.1" class="cantidadDecimal" oninput="updateTotals()"></td>
                    <td>4300</td>
                    <td class="total">0,00</td>
                    <td>Linprec</td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>Almuerzo/Cena</td>
                    <td>Unidad</td>
                    <td><input type="number" min="0" step="0.1" class="cantidadDecimal" oninput="updateTotals()"></td>
                    <td>5500</td>
                    <td class="total">0,00</td>
                    <td>Linprec</td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>horas instalacion tiempo ordinario</td>
                    <td>salario hora</td>
                    <td><input type="number" min="0" step="0.1" class="cantidadDecimal" oninput="updateTotals()"></td>
                    <td>4300</td>
                    <td class="total">0,00</td>
                    <td>Linprec</td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>horas instalacion tiempo extra</td>
                    <td>salario hora</td>
                    <td><input type="number" min="0" step="0.1" class="cantidadDecimal" oninput="updateTotals()"></td>
                    <td>6450</td>
                    <td class="total">0,00</td>
                    <td>Linprec</td>
                </tr>
                <tr>
            <td><strong>Total General:</strong></td>
            <td colspan="4" style="text-align: right;"></td>
            <td id="totalGeneral">0,00</td>
            <td></td>
        </tr>
    </tbody>
</table>

<script>
    function updateTotals() {
        const rows = document.querySelectorAll('#manufacturingTable tbody tr');
        let totalGeneral = 0;

        rows.forEach(row => {
            const cantidadDecimalInput = row.querySelector('.cantidadDecimal'); // Encuentra la entrada de cantidad decimal en cada fila
            const totalCell = row.querySelector('.total'); // Encuentra la celda de total

            if (cantidadDecimalInput && totalCell) { // Asegura que existan tanto el input como la celda total en cada fila
                const cantidadDecimal = parseFloat(cantidadDecimalInput.value) || 0; // Lee el valor decimal o usa 0 si está vacío
                const valor = parseFloat(row.cells[4].textContent.replace('.', '').replace(',', '.')) || 0; // Lee el valor numérico en la columna "Valor"
                const total = cantidadDecimal * valor; // Calcula el total de la fila
                
                totalCell.textContent = total.toFixed(2).replace('.', ','); // Muestra el total formateado en la celda correspondiente
                totalGeneral += total; // Suma al total general
            }
        });

        document.getElementById('totalGeneral').textContent = totalGeneral.toFixed(2).replace('.', ','); // Muestra el total general formateado
    }
</script>
        <h2 style="text-align: center;">Outsourcing</h2>
<table>
  <thead>
    <tr>
      <th>Cantidad Entera</th>
      <th>Proceso</th>
      <th>Medida</th>
      <th>Cantidad Decimal</th>
      <th>Valor Unidad</th>
      <th>Valor Total</th>
      <th>Suplidor</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Diseño</td>
      <td>Salario hora</td>
      <td><input type="number" id="labor-quantity-decimal-5.1" value="" step="0.01" oninput="updateLaborTotal(5.1)"></td>
      <td id="labor-unitValue-5.1">7,870</td>
      <td id="labor-total-5.1">0,00</td>
      <td>Linprec</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Metalmecanica</td>
      <td>Unidad</td>
      <td><input type="number" id="labor-quantity-decimal-5.2" value="" step="0.01" oninput="updateLaborTotal(5.2)"></td>
      <td id="labor-unitValue-5.2">26000</td>
      <td id="labor-total-5.2">0,00</td>
      <td>Linprec</td>
    </tr>
    <tr>
      <td>3</td>
      <td>Maquinado</td>
      <td>Maquinado</td>
      <td><input type="number" id="labor-quantity-decimal-5.3" value="" step="0.01" oninput="updateLaborTotal(5.3)"></td>
      <td id="labor-unitValue-5.3">7500</td>
      <td id="labor-total-5.3">0,00</td>
      <td>Linprec</td>
    </tr>
    <tr>
      <td>4</td>
      <td>Corte y doble</td>
      <td>Unidad</td>
      <td><input type="number" id="labor-quantity-decimal-5.4" value="" step="0.01" oninput="updateLaborTotal(5.4)"></td>
      <td id="labor-unitValue-5.4">800</td>
      <td id="labor-total-5.4">0,00</td>
      <td>Linprec</td>
    </tr>
    <tr>
      <td>5</td>
      <td>Corte y doble</td>
      <td>Unidad</td>
      <td><input type="number" id="labor-quantity-decimal-5.5" value="" step="0.01" oninput="updateLaborTotal(5.5)"></td>
      <td id="labor-unitValue-5.5">700</td>
      <td id="labor-total-5.5">0,00</td>
      <td>Linprec</td>
    </tr>
    <tr>
      <td>6</td>
      <td>Majado</td>
      <td>Unidad</td>
      <td><input type="number" id="labor-quantity-decimal-5.6" value="" step="0.01" oninput="updateLaborTotal(5.6)"></td>
      <td id="labor-unitValue-5.6">12000</td>
      <td id="labor-total-5.6">0,00</td>
      <td>Linprec</td>
    </tr>
    <tr>
      <td>7</td>
      <td>Costura</td>
      <td>Hora</td>
      <td><input type="number" id="labor-quantity-decimal-5.7" value="" step="0.01" oninput="updateLaborTotal(5.7)"></td>
      <td id="labor-unitValue-5.7">2500</td>
      <td id="labor-total-5.7">0,00</td>
      <td>Linprec</td>
    </tr>
    <tr>
      <td>8</td>
      <td>Sobre y mueble</td>
      <td>Mueble</td>
      <td><input type="number" id="labor-quantity-decimal-5.8" value="" step="0.01" oninput="updateLaborTotal(5.8)"></td>
      <td id="labor-unitValue-5.8">86566</td>
      <td id="labor-total-5.8">0,00</td>
      <td>Linprec</td>
    </tr>
    <tr>
      <td>9</td>
      <td>Transporte</td>
      <td>Transporte</td>
      <td><input type="number" id="labor-quantity-decimal-5.9" value="" step="0.01" oninput="updateLaborTotal(5.9)"></td>
      <td id="labor-unitValue-5.9">15000</td>
      <td id="labor-total-5.9">0,00</td>
      <td>Linprec</td>
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <td style="text-align: left;"><strong>Total General:</strong></td>
      <td colspan="4"></td>
      <td id="total-general" style="text-align: left; padding-left: 10px;">0,00</td>
      <td></td>
    </tr>
  </tfoot>
</table>

<script>
function updateLaborTotal(row) {
  const quantity = parseFloat(document.getElementById(`labor-quantity-decimal-${row}`).value) || 0;
  const unitValue = parseFloat(document.getElementById(`labor-unitValue-${row}`).textContent.replace(',', '.')) || 0;
  const total = (quantity * unitValue).toFixed(2).replace('.', ',');

  document.getElementById(`labor-total-${row}`).textContent = total;
  updateTotalGeneral();
}

function updateTotalGeneral() {
  let totalGeneral = 0;

  for (let i = 1; i <= 9; i++) {
    const total = parseFloat(document.getElementById(`labor-total-5.${i}`).textContent.replace(',', '.')) || 0;
    totalGeneral += total;
  }

  document.getElementById('total-general').textContent = totalGeneral.toFixed(2).replace('.', ',');
}
</script>
<h2 style="text-align: center;">Costo Total</h2> 
<table>
    <thead>
        <tr>
            <th>Tipo de Costeo</th>
            <th>Valor</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Materiales</td>
            <td><input type="number" id="materiales" value="234133.80" step="0.01"></td>
        </tr>
        <tr>
            <td>Mano de Obra</td>
            <td><input type="number" id="mano-obra" value="3296.00" step="0.01"></td>
        </tr>
        <tr>
            <td>Total 1</td>
            <td id="total1">0,00</td>
        </tr>
        <tr>
            <td>Administrativos</td>
            <td>
                <input type="number" id="administrativos" value="20" step="0.01">
                <span>%</span>
            </td>
        </tr>
        <tr>
            <td>Total 2</td>
            <td id="total2">0,00</td>
        </tr>
        <tr>
            <td>Ganancia</td>
            <td>
                <input type="number" id="ganancia" value="40" step="0.01">
                <span>%</span>
            </td>
        </tr>
        <tr>
            <td>Total 3</td>
            <td id="total3">0,00</td>
        </tr>
        <tr>
            <td>Dólares</td>
            <td id="dolares">0,00</td>
        </tr>
        <tr>
            <td>Diferencia</td>
            <td id="diferencia">0,00</td>
        </tr>
    </tbody>
</table>

<script>
    console.log('Iniciando archivo');

    function updateTotal() {
        // Obtener valores de materiales y mano de obra
        const materiales = parseFloat(document.getElementById('materiales').value) || 0;
        const manoObra = parseFloat(document.getElementById('mano-obra').value) || 0;

        // Calcular Total 1
        const total1 = materiales + manoObra;
        document.getElementById('total1').innerText = formatearNumero(total1);

        // Obtener y calcular el total administrativo
        const administrativos = parseFloat(document.getElementById('administrativos').value) || 0;
        const total2 = total1 + (administrativos / 100 * total1);
        document.getElementById('total2').innerText = formatearNumero(total2);

        // Obtener y calcular la ganancia
        const ganancia = parseFloat(document.getElementById('ganancia').value) || 0;
        const total3 = total2 + (ganancia / 100 * total2);
        document.getElementById('total3').innerText = formatearNumero(total3);

        // Calcular Dólares
        const exchangeRate = 524.64; // Tasa de cambio
        const dolares = total3 / exchangeRate;
        document.getElementById('dolares').innerText = formatearNumero(dolares);

        // Calcular Diferencia
        const diferencia = total3 - total2;
        document.getElementById('diferencia').innerText = formatearNumero(diferencia);
    }

    // Función para formatear los números
    function formatearNumero(numero) {
        return numero.toLocaleString('es-ES', { minimumFractionDigits: 2 }).replace(".", ",");
    }

    // Asignar la función updateTotal a los inputs de materiales y mano de obra
    document.getElementById('materiales').addEventListener('input', updateTotal);
    document.getElementById('mano-obra').addEventListener('input', updateTotal);
    document.getElementById('administrativos').addEventListener('input', updateTotal);
    document.getElementById('ganancia').addEventListener('input', updateTotal);

    // Llamar a updateTotal inicialmente para establecer los totales
    updateTotal();
</script>
        <button type="button" id="btnAgregarCotizacion">Agregar Cotización</button>


        <!-- Bootstrap core JavaScript-->
        <script src="./vendor/jquery/jquery.min.js"></script>
        <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="./vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="./js/sb-admin-2.min.js"></script>

        <!-- datatables JS -->
        <script type="text/javascript" src="./vendor/datatables-1.13.4/datatables.min.js"></script>

        <!-- para usar botones en datatables JS -->
        <script src="vendor/datatables-1.13.4/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>
        <script src="vendor/datatables-1.13.4/JSZip-2.5.0/jszip.min.js"></script>
        <script src="vendor/datatables-1.13.4/pdfmake-0.1.36/pdfmake.min.js"></script>
        <script src="vendor/datatables-1.13.4/pdfmake-0.1.36/vfs_fonts.js"></script>
        <script src="vendor/datatables-1.13.4/Buttons-1.5.6/js/buttons.html5.min.js"></script>

        <!-- jQuery, Popper.js, Bootstrap JS -->
        <script src="./vendor/popper/popper.min.js"></script>
        <script src="./vendor/bootstrap/js/bootstrap.min.js"></script>


        <!-- Código propio -->
        <script src="./vendor/jquery-easing/jquery.easing.min.js"></script>
        <script type="text/javascript" src="js/formulario.js"></script>
        <script src="formulario.js"></script>
</body>
</html>