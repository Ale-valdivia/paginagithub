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
    <table>
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
                <td><input type="number" id="quantity-1" value="" oninput="updateTotal(1)"></td>
                <td id="unitValue-1">114583.63</td>
                <td id="total-1">0,00</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Lamina de acrílico ahumado 6 mm</td>
                <td>Lamina</td>
                <td><input type="number" id="quantity-2" value="" oninput="updateTotal(2)"></td>
                <td id="unitValue-2">69273.29</td>
                <td id="total-2">0,00</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Lamina de acrílico transparente 6 mm</td>
                <td>Lamina</td>
                <td><input type="number" id="quantity-3" value="" oninput="updateTotal(3)"></td>
                <td id="unitValue-3">53272.58</td>
                <td id="total-3">0,00</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Lamina de acrílico transparente 5 mm</td>
                <td>Lamina</td>
                <td><input type="number" id="quantity-4" value="" oninput="updateTotal(4)"></td>
                <td id="unitValue-4">46244.76</td>
                <td id="total-4">0,00</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>5</td>
                <td>lamina de acrilico transparente 4 mm</td>
                <td>Lamina</td>
                <td><input type="number" id="quantity-5" value="" oninput="updateTotal(5)"></td>
                <td id="unitValue-5">37817,74</td>
                <td id="total-5">0,0</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>6</td>
                <td>lamina de acrilico transparente 3 mm</td>
                <td>Lamina</td>
                <td><input type="number" id="quantity-6" value="" oninput="updateTotal(6)"></td>
                <td id="unitValue-6">26394,92</td>
                <td id="total-6">0,0</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>7</td>
                <td>lamina de acrilico transparente 2 mm</td>
                <td>Lamina</td>
                <td><input type="number" id="quantity-7" value="" oninput="updateTotal(7)"></td>
                <td id="unitValue-7">20688,55</td>
                <td id="total-7">0,0</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>8</td>
                <td>lamina de policarbonato transparente 6 mm</td>
                <td>Lamina</td>
                <td><input type="number" id="quantity-8" value="" oninput="updateTotal(8)"></td>
                <td id="unitValue-8">70935,045</td>
                <td id="total-8">0,0</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>9</td>
                <td>lamina de policarbonato transparente 5 mm</td>
                <td>Lamina</td>
                <td><input type="number" id="quantity-9" value="" oninput="updateTotal(9)"></td>
                <td id="unitValue-9">67165,49</td>
                <td id="total-9">0,0</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>11</td>
                <td>lamina de policarbonato transparente 4 mm</td>
                <td>Lamina</td>
                <td><input type="number" id="quantity-11" value="" oninput="updateTotal(11)"></td>
                <td id="unitValue-11">63392,4</td>
                <td id="total-11">0,0</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>12</td>
                <td>lamina de policarbonato transparente 3 mm</td>
                <td>Lamina</td>
                <td><input type="number" id="quantity-12" value="" oninput="updateTotal(12)"></td>
                <td id="unitValue-12">41594,72</td>
                <td id="total-12">0,0</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>13</td>
                <td>lamina de policarbonato transparente 10 mm</td>
                <td>Lamina</td>
                <td><input type="number" id="quantity-13" value="" oninput="updateTotal(13)"></td>
                <td id="unitValue-13">124212,13</td>
                <td id="total-13">0,0</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>14</td>
                <td>lamina de policarbonato blanco 3 mm 122 cm x 244 cm</td>
                <td>Lamina</td>
                <td><input type="number" id="quantity-14" value="" oninput="updateTotal(14)"></td>
                <td id="unitValue-14">45000</td>
                <td id="total-14">0,0</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>15</td>
                <td>lamina de policarbonato blanco 6 mm 122 cm x 244 cm</td>
                <td>Lamina</td>
                <td><input type="number" id="quantity-15" value="" oninput="updateTotal(15)"></td>
                <td id="unitValue-15">83000</td>
                <td id="total-15">0,0</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>16</td>
                <td>lamina de policarbonato negro 3 mm 122 cm x 244 cm</td>
                <td>Lamina</td>
                <td><input type="number" id="quantity-16" value="" oninput="updateTotal(16)"></td>
                <td id="unitValue-16">49000</td>
                <td id="total-16">0,0</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>17</td>
                <td>lamina de policarbonato negro 6 mm 122 cm x 244 cm</td>
                <td>Lamina</td>
                <td><input type="number" id="quantity-17" value="" oninput="updateTotal(17)"></td>
                <td id="unitValue-17">108000</td>
                <td id="total-17">0,0</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>18</td>
                <td>lamina de policarbonato ahumado 3 mm 122 cm x 244 cm</td>
                <td>Lamina</td>
                <td><input type="number" id="quantity-18" value="" oninput="updateTotal(18)"></td>
                <td id="unitValue-18">45000</td>
                <td id="total-18">0,0</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>19</td>
                <td>lamina de policarbonato ahumado 6 mm 122 cm x 244 cm</td>
                <td>Lamina</td>
                <td><input type="number" id="quantity-19" value="" oninput="updateTotal(19)"></td>
                <td id="unitValue-19">88000</td>
                <td id="total-19">0,0</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>20</td>
                <td>lamina de policarbonato 205 x 305 transparente 3 mm</td>
                <td>Lamina</td>
                <td><input type="number" id="quantity-20" value="" oninput="updateTotal(20)"></td>
                <td id="unitValue-20">82830,69</td>
                <td id="total-20">0,0</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>21</td>
                <td>lamina de policarbonato 205 x 305 transparente 4 mm</td>
                <td>Lamina</td>
                <td><input type="number" id="quantity-21" value="" oninput="updateTotal(21)"></td>
                <td id="unitValue-21">101565,6</td>
                <td id="total-21">0,0</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>22</td>
                <td>lamina de policarbonato 205 x 305 transparente 5 mm</td>
                <td>Lamina</td>
                <td><input type="number" id="quantity-22" value="" oninput="updateTotal(22)"></td>
                <td id="unitValue-22">119962,06</td>
                <td id="total-22">0,0</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>23</td>
                <td>lamina de policarbonato 205 x 305 transparente 6 mm</td>
                <td>Lamina</td>
                <td><input type="number" id="quantity-23" value="" oninput="updateTotal(23)"></td>
                <td id="unitValue-23">148525,47</td>
                <td id="total-23">0,0</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>24</td>
                <td>lamina de policarbonato 205 x 305 transparente 10 mm</td>
                <td>Lamina</td>
                <td><input type="number" id="quantity-24" value="" oninput="updateTotal(24)"></td>
                <td id="unitValue-24">250738,515</td>
                <td id="total-24">0,0</td>
                <td>Poliandina</td>
            </tr>
            <tr>
                <td>25</td>
                <td>suministros acrilico</td>
                <td>Lamina</td>
                <td><input type="number" id="quantity-25" value="" oninput="updateTotal(25)"></td>
                <td id="unitValue-25">2500</td>
                <td id="total-25">0,0</td>
                <td>Linprec</td>
            </tr>
            <tr>
                <td>26</td>
                <td>tornillería</td>
                <td>Lamina</td>
                <td><input type="number" id="quantity-26" value="" oninput="updateTotal(26)"></td>
                <td id="unitValue-26">500</td>
                <td id="total-26">0,0</td>
                <td>Linprec</td>
            </tr>
        </tbody>
    </table>
</body>
<h2 style="text-align: center;">Materiales Varios</h2>
<table>
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
            <td><input type="number" id="quantity-2.1" value="" oninput="updateTotal(2.1)"></td>
            <td id="unitValue-2.1">47,700</td>
            <td id="total-2.1">0,00</td>
            <td>Poliandina</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Tapa de perfil</td>
            <td>3.2 mts</td>
            <td><input type="number" id="quantity-2.2" value="" oninput="updateTotal(2.2)"></td>
            <td id="unitValue-2.2">18362</td>
            <td id="total-2.2">0,00</td>
            <td>Industrial solutions</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Pieza</td>
            <td>Unidad</td>
            <td><input type="number" id="quantity-2.3" value="" oninput="updateTotal(2.3)"></td>
            <td id="unitValue-2.3">4000</td>
            <td id="total-2.3">0,00</td>
            <td>Ferreteria</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Reposabrazos</td>
            <td>Unidad</td>
            <td><input type="number" id="quantity-2.4" value="" oninput="updateTotal(2.4)"></td>
            <td id="unitValue-2.4">40000</td>
            <td id="total-2.4">0,00</td>
            <td>Amazon</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Nylon retazo</td>
            <td>Unidad</td>
            <td><input type="number" id="quantity-2.5" value="" oninput="updateTotal(2.5)"></td>
            <td id="unitValue-2.5">1500</td>
            <td id="total-2.5">0,00</td>
            <td>Ferreteria</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Dowel pin</td>
            <td>Unidad</td>
            <td><input type="number" id="quantity-2.6" value="" oninput="updateTotal(2.6)"></td>
            <td id="unitValue-2.6">1800</td>
            <td id="total-2.6">0,00</td>
            <td>Importacion</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Retazos tapeta y pegamento</td>
            <td>Unidad</td>
            <td><input type="number" id="quantity-2.7" value="" oninput="updateTotal(2.7)"></td>
            <td id="unitValue-2.7">5000</td>
            <td id="total-2.7">0,00</td>
            <td>Impuestos</td>
        </tr>
        <tr>
            <td>8</td>
            <td>Basurero</td>
            <td>Unidad</td>
            <td><input type="number" id="quantity-2.8" value="" oninput="updateTotal(2.8)"></td>
            <td id="unitValue-2.8">172000</td>
            <td id="total-2.8">0,00</td>
            <td>Sanipro</td>
        </tr>
        <tr>
            <td>9</td>
            <td>Material</td>
            <td>Unidad</td>
            <td><input type="number" id="quantity-2.9" value="" oninput="updateTotal(2.9)"></td>
            <td id="unitValue-2.9">6500</td>
            <td id="total-2.9">0,00</td>
            <td>Linprec</td>
        </tr>
        <tr>
            <td>11</td>
            <td>Rodin 2"</td>
            <td>Unidad</td>
            <td><input type="number" id="quantity-2.11" value="" oninput="updateTotal(2.11)"></td>
            <td id="unitValue-2.11">5000</td>
            <td id="total-2.11">0,00</td>
            <td>Mobesa</td>
        </tr>
        <tr>
            <td>12</td>
            <td>Rodin 3"</td>
            <td>Unidad</td>
            <td><input type="number" id="quantity-2.12" value="" oninput="updateTotal(2.12)"></td>
            <td id="unitValue-2.12">9150</td>
            <td id="total-2.12">0,00</td>
            <td>Mobesa</td>
        </tr>
        <tr>
            <td>13</td>
            <td>Rodin 4"</td>
            <td>Unidad</td>
            <td><input type="number" id="quantity-2.13" value="" oninput="updateTotal(2.13)"></td>
            <td id="unitValue-2.13">9800</td>
            <td id="total-2.13">0,00</td>
            <td>Mobesa</td>
        </tr>
        <tr>
            <td>14</td>
            <td>Cinta doble pega</td>
            <td>Unidad</td>
            <td><input type="number" id="quantity-2.14" value="" oninput="updateTotal(2.14)"></td>
            <td id="unitValue-2.14">1500</td>
            <td id="total-2.14">0,00</td>
            <td>EPA</td>
        </tr>
        <tr>
            <td>15</td>
            <td>Regulador de altura de estación</td>
            <td>Unidad</td>
            <td><input type="number" id="quantity-2.15" value="" oninput="updateTotal(2.15)"></td>
            <td id="unitValue-2.15">1000</td>
            <td id="total-2.15">0,00</td>
            <td>Ferreteria</td>
        </tr>
        <tr>
            <td>16</td>
            <td>Tornillos</td>
            <td>Tornillos</td>
            <td><input type="number" id="quantity-2.16" value="" oninput="updateTotal(2.16)"></td>
            <td id="unitValue-2.16">1200</td>
            <td id="total-2.16">0,00</td>
            <td>Linprec</td>
        </tr>
    </tbody>
</table>
<h2 style="text-align: center;">Hierro Negro</h2>
<table>
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
            <td><input type="number" id="quantity-3.1" value="" oninput="updateTotal(3.1)"></td>
            <td id="unitValue-3.1">35,000</td>
            <td id="total-3.1">0,00</td>
            <td>Camara de industrias</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Lamina hierro negro de 122 cm x 244 cm de (1/16"-1.5mm) mm</td>
            <td>Lamina</td>
            <td><input type="number" id="quantity-3.2" value="" oninput="updateTotal(3.2)"></td>
            <td id="unitValue-3.2">29500</td>
            <td id="total-3.2">0,0</td>
            <td>Camara de industrias</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Lamina hierro negro de 122 cm x 305 cm de (1/16"-1.5mm) mm</td>
            <td>Lamina</td>
            <td><input type="number" id="quantity-3.3" value="" oninput="updateTotal(3.3)"></td>
            <td id="unitValue-3.3">23000</td>
            <td id="total-3.3">0,0</td>
            <td>Camara de industrias</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Lamina hierro negro de 122 cm x 244 cm de (3/32"-2mm) mm</td>
            <td>Lamina</td>
            <td><input type="number" id="quantity-3.4" value="" oninput="updateTotal(3.4)"></td>
            <td id="unitValue-3.4">48000</td>
            <td id="total-3.4">0,0</td>
            <td>Camara de industrias</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Lamina hierro negro de 122 cm x 244 cm de (1/8"-3mm) mm</td>
            <td>Lamina</td>
            <td><input type="number" id="quantity-3.5" value="" oninput="updateTotal(3.5)"></td>
            <td id="unitValue-3.5">53000</td>
            <td id="total-3.5">0,0</td>
            <td>Camara de industrias</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Lamina hierro negro de 122 cm x 244 cm de (1/4"-6mm) mm</td>
            <td>Lamina</td>
            <td><input type="number" id="quantity-3.6" value="" oninput="updateTotal(3.6)"></td>
            <td id="unitValue-3.6">115000</td>
            <td id="total-3.6">0,0</td>
            <td>Camara de industrias</td>
        </tr>
        <tr>
            <td>7</td>
            <td>tubo cuadrado de hierro negro de 3/4" x 3/4" x 1.5 mm pared</td>
            <td>Tubo de 6 mts</td>
            <td><input type="number" id="quantity-3.7" value="" oninput="updateTotal(3.7)"></td>
            <td id="unitValue-3.7">5000</td>
            <td id="total-3.7">0,0</td>
            <td>Construplaza</td>
        </tr>
        <tr>
            <td>8</td>
            <td>tubo cuadrado de hierro negro de 1" x 1" x 1.5 mm pared</td>
            <td>Tubo de 6 mts</td>
            <td><input type="number" id="quantity-3.8" value="" oninput="updateTotal(3.8)"></td>
            <td id="unitValue-3.8">5900</td>
            <td id="total-3.8">0,0</td>
            <td>Construplaza</td>
        </tr>
        <tr>
            <td>9</td>
            <td>tubo cuadrado de hierro negro de 1 1/4" x 1 1/4" x 1.5 mm pared/td>
            <td>Tubo de 6 mts</td>
            <td><input type="number" id="quantity-3.9" value="" oninput="updateTotal(3.9)"></td>
            <td id="unitValue-3.9">9000</td>
            <td id="total-3.9">0,0</td>
            <td>Construplaza</td>
        </tr>
        <tr>
            <td>11</td>
            <td>tubo cuadrado de hierro negro de 1 1/2" x 1 1/2" x 1.5 mm pared</td>
            <td>Tubo de 6 mts</td>
            <td><input type="number" id="quantity-3.11" value="" oninput="updateTotal(3.11)"></td>
            <td id="unitValue-3.11">9200</td>
            <td id="total-3.11">0,0</td>
            <td>Construplaza</td>
        </tr>
        <tr>
            <td>12</td>
            <td>tubo cuadrado de hierro negro de 2" x 2" x 1.5 mm pared</td>
            <td>Tubo de 6 mts</td>
            <td><input type="number" id="quantity-3.12" value="" oninput="updateTotal(3.12)"></td>
            <td id="unitValue-3.12">12400</td>
            <td id="total-3.12">0,0</td>
            <td>Construplaza</td>
        </tr>
        <tr>
            <td>13</td>
            <td>tubo de hierro negro de 1" x 2" x 1.5 mm pared</td>
            <td>Tubo de 6 mts</td>
            <td><input type="number" id="quantity-3.13" value="" oninput="updateTotal(3.13)"></td>
            <td id="unitValue-3.13">8700</td>
            <td id="total-3.13">0,0</td>
            <td>Construplaza</td>
        </tr>
        <tr>
            <td>14</td>
            <td>tubo de hierro negro de 2" x 3" x 1.5 mm pared</td>
            <td>Tubo de 6 mts</td>
            <td><input type="number" id="quantity-3.14" value="" oninput="updateTotal(3.14)"></td>
            <td id="unitValue-3.14">14500</td>
            <td id="total-3.14">0,0</td>
            <td>Construplaza</td>
        </tr>
        <tr>
            <td>15</td>
            <td>ltubo de hierro negro de 2" x 4" x 1.5 mm pared</td>
            <td>Tubo de 6 mts</td>
            <td><input type="number" id="quantity-3.15" value="" oninput="updateTotal(3.15)"></td>
            <td id="unitValue-3.15">15400</td>
            <td id="total-3.15">0,0</td>
            <td>Construplaza</td>
        </tr>
        <tr>
            <td>16</td>
            <td>platina hierro negro de 1" x 1/8"</td>
            <td>6 mts</td>
            <td><input type="number" id="quantity-3.16" value="" oninput="updateTotal(3.16)"></td>
            <td id="unitValue-3.16">4300</td>
            <td id="total-3.16">0,0</td>
            <td>Construplaza</td>
        </tr>
        <tr>
            <td>17</td>
            <td>platina hierro negro de 2" x 1/8"</td>
            <td>6 mts</td>
            <td><input type="number" id="quantity-3.17" value="" oninput="updateTotal(3.17)"></td>
            <td id="unitValue-3.17">5500</td>
            <td id="total-3.17">0,0</td>
            <td>Construplaza</td>
        </tr>
        <tr>
            <td>18</td>
            <td>suministros de soldadura</td>
            <td>Suministros</td>
            <td><input type="number" id="quantity-3.18" value="" oninput="updateTotal(3.18)"></td>
            <td id="unitValue-3.18">15000</td>
            <td id="total-3.18">0,0</td>
            <td>Linprec</td>
        </tr>
        <tr>
            <td>19</td>
            <td>suministros de pintura</td>
            <td>Suministros</td>
            <td><input type="number" id="quantity-3.19" value="" oninput="updateTotal(3.19)"></td>
            <td id="unitValue-3.19">7500</td>
            <td id="total-3.19">0,0</td>
            <td>Linprec</td>
        </tr>
        <tr>
            <td>21</td>
            <td>angular de 1" x 1/8"</td>
            <td>6 mts</td>
            <td><input type="number" id="quantity-3.21" value="" oninput="updateTotal(3.21)"></td>
            <td id="unitValue-3.21">5000</td>
            <td id="total-3.21">0,0</td>
            <td>Linprec</td>
        </tr>
        <tr>
            <td>22</td>
            <td>angular de 1 1/2" x 1/8"</td>
            <td>6 mts</td>
            <td><input type="number" id="quantity-3.22" value="" oninput="updateTotal(3.22)"></td>
            <td id="unitValue-3.22">7500</td>
            <td id="total-3.22">0,0</td>
            <td>Linprec</td>
        </tr>
        <tr>
            <td>23</td>
            <td>angular de 1 1/2" x 3/16"</td>
            <td>6 mts</td>
            <td><input type="number" id="quantity-3.23" value="" oninput="updateTotal(3.23)"></td>
            <td id="unitValue-3.23">12000</td>
            <td id="total-3.23">0,0</td>
            <td>Linprec</td>
        </tr>
        <tr>
            <td>24</td>
            <td>angular de 2" x 1/8"</td>
            <td>6 mts</td>
            <td><input type="number" id="quantity-3.24" value="" oninput="updateTotal(3.24)"></td>
            <td id="unitValue-3.24">9500</td>
            <td id="total-3.24">0,0</td>
            <td>Linprec</td>
        </tr>
        <tr>
            <td>25</td>
            <td>langular de 2" x 3/16"</td>
            <td>6 mts</td>
            <td><input type="number" id="quantity-3.25" value="" oninput="updateTotal(3.25)"></td>
            <td id="unitValue-3.25">19000</td>
            <td id="total-3.25">0,0</td>
            <td>Linprec</td>
        </tr>
    </tbody>
</table>
<h2 style="text-align: center;">Acero Inoxidable</h2>
<table>
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
            <td><input type="number" id="quantity-4.1" value="" oninput="updateTotal(4.1)"></td>
            <td id="unitValue-4.1">56,000</td>
            <td id="total-4.1">0,00</td>
            <td>SUMINOX</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Lamina inoxidable 304 de 122 cm x 244 cm de (1/16"-1.5mm)</td>
            <td>Lamina</td>
            <td><input type="number" id="quantity-4.2" value="" oninput="updateTotal(4.2)"></td>
            <td id="unitValue-4.2">62500</td>
            <td id="total-4.2">0,0</td>
            <td>SUMINOX</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Lamina inoxidable de 122 cm x 244 cm de (3/32"-2mm) mm</td>
            <td>Lamina</td>
            <td><input type="number" id="quantity-4.3" value="" oninput="updateTotal(4.3)"></td>
            <td id="unitValue-4.3">90000</td>
            <td id="total-4.3">0,0</td>
            <td>SUMINOX</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Lamina inoxidable de 122 cm x 244 cm de (1/8"-3 mm) mm</td>
            <td>Lamina</td>
            <td><input type="number" id="quantity-4.4" value="" oninput="updateTotal(4.4)"></td>
            <td id="unitValue-4.4">195000</td>
            <td id="total-4.4">0,0</td>
            <td>SUMINOX</td>
        </tr>
        <tr>
            <td>5</td>
            <td>tubo cuadrado inoxidable de 1" x 1" x 1.5 mm pared</td>
            <td>Tubo de 6 mts</td>
            <td><input type="number" id="quantity-4.5" value="" oninput="updateTotal(4.5)"></td>
            <td id="unitValue-4.5">16000</td>
            <td id="total-4.5">0,0</td>
            <td>SUMINOX</td>
        </tr>
        <tr>
            <td>6</td>
            <td>tubo cuadrado inoxidable de 2" x 1.5 mm pared</td>
            <td>Tubo de 6 mts</td>
            <td><input type="number" id="quantity-4.6" value="" oninput="updateTotal(4.6)"></td>
            <td id="unitValue-4.6">36000</td>
            <td id="total-4.6">0,0</td>
            <td>SUMINOX</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Platina inoxidable de 1" x 1/8"</td>
            <td>6 mts</td>
            <td><input type="number" id="quantity-4.7" value="" oninput="updateTotal(4.7)"></td>
            <td id="unitValue-4.7">10000</td>
            <td id="total-4.7">0,0</td>
            <td>SUMINOX</td>
        </tr>
        <tr>
            <td>8</td>
            <td>platina de inoxidable de 1 1/2" x 1/8"</td>
            <td>6 mts</td>
            <td><input type="number" id="quantity-4.8" value="" oninput="updateTotal(4.8)"></td>
            <td id="unitValue-4.8">13000</td>
            <td id="total-4.8">0,0</td>
            <td>SUMINOX</td>
        </tr>
        <tr>
            <td>9</td>
            <td>Suministros de soldadura</td>
            <td>Suministros</td>
            <td><input type="number" id="quantity-4.9" value="" oninput="updateTotal(4.9)"></td>
            <td id="unitValue-4.9">8500</td>
            <td id="total-4.9">0,0</td>
            <td>SUMINOX</td>
        </tr>
        <tr>
            <td>11</td>
            <td>tubo cuadrado inoxidable de 1 1/2" x 1 1/2" x 1.5 mm pared</td>
            <td>Tubo de 6 mts</td>
            <td><input type="number" id="quantity-4.11" value="" oninput="updateTotal(4.11)"></td>
            <td id="unitValue-4.11">23000</td>
            <td id="total-4.11">0,0</td>
            <td>SUMINOX</td>
        </tr>
        <tr>
            <td>12</td>
            <td>lamina de inoxidable de 316L x 1/16" de espesor 122 cm x 244 cm</td>
            <td>Lamina</td>
            <td><input type="number" id="quantity-4.12" value="" oninput="updateTotal(4.12)"></td>
            <td id="unitValue-4.12">87500</td>
            <td id="total-4.12">0,0</td>
            <td>Aceros Monge</td>
        </tr>
        <tr>
            <td>13</td>
            <td>tubo redondo de inoxidable de 1" x 1,5 mm</td>
            <td>6 mts</td>
            <td><input type="number" id="quantity-4.13" value="" oninput="updateTotal(4.13)"></td>
            <td id="unitValue-4.13">14000</td>
            <td id="total-4.13">0,0</td>
            <td>SUMINOX</td>
        </tr>
        <tr>
            <td>14</td>
            <td>tubo redondo de inoxidable de 1 1/2" x 1,5 mm</td>
            <td>6 mts</td>
            <td><input type="number" id="quantity-4.14" value="" oninput="updateTotal(4.14)"></td>
            <td id="unitValue-4.14">22000</td>
            <td id="total-4.14">0,0</td>
            <td>SUMINOX</td>
        </tr>
    </tbody>
</table>
<h2 style="text-align: center;">Perfilería de Aluminio</h2>
<table>
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
            <td><input type="number" id="quantity-5.1" value="" oninput="updateTotal(5.1)"></td>
            <td id="unitValue-5.1">78,696</td>
            <td id="total-5.1">0,00</td>
            <td>MOBESA</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Recubrimiento plástico para perfil de 40 mm MOBESA</td>
            <td>Metro</td>
            <td><input type="number" id="quantity-5.2" value="" oninput="updateTotal(5.2)"></td>
            <td id="unitValue-5.2">1744</td>
            <td id="total-5.2">0,0</td>
            <td>MOBESA</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Escuadra 90 grados para perfil de 40 mm MOBESA</td>
            <td>Unidad</td>
            <td><input type="number" id="quantity-5.3" value="" oninput="updateTotal(5.3)"></td>
            <td id="unitValue-5.3">2099</td>
            <td id="total-5.3">0,0</td>
            <td>MOBESA</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Tapa para escuadra de 45 mm MOBESA</td>
            <td>Unidad</td>
            <td><input type="number" id="quantity-5.4" value="" oninput="updateTotal(5.4)"></td>
            <td id="unitValue-5.4">449</td>
            <td id="total-5.4">0,0</td>
            <td>MOBESA</td>
        </tr>
        <tr>
            <td>5</td>
            <td>lamina HPL 12 mm x 4 ft x 8 ft MOBESA</td>
            <td>Lamina</td>
            <td><input type="number" id="quantity-5.5" value="" oninput="updateTotal(5.5)"></td>
            <td id="unitValue-5.5">134832</td>
            <td id="total-5.5">0,0</td>
            <td>MOBESA</td>
        </tr>
        <tr>
            <td>6</td>
            <td>tornillo autoroscante para perfil de 45 mm MOBESA</td>
            <td>Unidad</td>
            <td><input type="number" id="quantity-5.6" value="" oninput="updateTotal(5.6)"></td>
            <td id="unitValue-5.6">839</td>
            <td id="total-5.6">0,0</td>
            <td>MOBESA</td>
        </tr>
        <tr>
            <td>7</td>
            <td>chanchito y tornillo MOBESA</td>
            <td>Juego</td>
            <td><input type="number" id="quantity-5.7" value="" oninput="updateTotal(5.7)"></td>
            <td id="unitValue-5.7">1146</td>
            <td id="total-5.7">0,0</td>
            <td>MOBESA</td>
        </tr>
        <tr>
            <td>8</td>
            <td>lamina HPL 8 mm x 4 ft x 8 ft MOBESA</td>
            <td>Lamina</td>
            <td><input type="number" id="quantity-5.8" value="" oninput="updateTotal(5.8)"></td>
            <td id="unitValue-5.8">102305</td>
            <td id="total-5.8">0,0</td>
            <td>MOBESA</td>
        </tr>
        <tr>
            <td>9</td>
            <td>recubrimiento plástico para perfil de 30 mm MOBESA</td>
            <td>Metro</td>
            <td><input type="number" id="quantity-5.9" value="" oninput="updateTotal(5.9)"></td>
            <td id="unitValue-5.9">918</td>
            <td id="total-5.9">0,0</td>
            <td>MOBESA</td>
        </tr>
        <tr>
            <td>11</td>
            <td>Tapa para escuadra de 45 mm MOBESA</td>
            <td>Unidad</td>
            <td><input type="number" id="quantity-5.11" value="" oninput="updateTotal(5.11)"></td>
            <td id="unitValue-5.11">1102</td>
            <td id="total-5.11">0,0</td>
            <td>MOBESA</td>
        </tr>
        <tr>
            <td>12</td>
            <td>Perfil de 30 mm x 30 mm x 6 mts de largo MOBESA</td>
            <td>Tubo 6 mts</td>
            <td><input type="number" id="quantity-5.12" value="" oninput="updateTotal(5.12)"></td>
            <td id="unitValue-5.12">61121</td>
            <td id="total-5.12">0,0</td>
            <td>MOBESA</td>
        </tr>
        <tr>
            <td>13</td>
            <td>Perfil de 40 mm x 80 mm x 6 mts de largo MOBESA</td>
            <td>Tubo 6 mts</td>
            <td><input type="number" id="quantity-5.13" value="" oninput="updateTotal(5.13)"></td>
            <td id="unitValue-5.13">163688</td>
            <td id="total-5.13">0,0</td>
            <td>MOBESA</td>
        </tr>
        <tr>
            <td>14</td>
            <td>Perfil de 45 mm x 45 mm x 6 mts de largo NOVATEC</td>
            <td>Tubo 6 mts</td>
            <td><input type="number" id="quantity-5.14" value="" oninput="updateTotal(5.14)"></td>
            <td id="unitValue-5.14">93386</td>
            <td id="total-5.14">0,0</td>
            <td>NOVATEC</td>
        </tr>
        <tr>
            <td>15</td>
            <td>recubrimiento plástico para perfil de 45 mm NOVATEC/td>
            <td>Metro</td>
            <td><input type="number" id="quantity-5.15" value="" oninput="updateTotal(5.15)"></td>
            <td id="unitValue-5.15">2990</td>
            <td id="total-5.15">0,0</td>
            <td>NOVATEC</td>
        </tr>
        <tr>
            <td>16</td>
            <td>Escuadra 90 grados para perfil de 45 mm NOVATEC</td>
            <td>Unidad</td>
            <td><input type="number" id="quantity-5.16" value="" oninput="updateTotal(5.16)"></td>
            <td id="unitValue-5.16">6600</td>
            <td id="total-5.16">0,0</td>
            <td>NOVATEC</td>
        </tr>
        <tr>
            <td>17</td>
            <td>Tapa para escuadra de 45 mm NOVATEC</td>
            <td>Unidad</td>
            <td><input type="number" id="quantity-5.17" value="" oninput="updateTotal(5.17)"></td>
            <td id="unitValue-5.17">1574</td>
            <td id="total-5.17">0,0</td>
            <td>NOVATEC</td>
        </tr>
        <tr>
            <td>18</td>
            <td>lamina HPL 12 mm x 4 ft x 8 ft NOVATEC</td>
            <td>Lamina</td>
            <td><input type="number" id="quantity-2" value="" oninput="updateTotal(5.18)"></td>
            <td id="unitValue-2">192018</td>
            <td id="total-5.18">0,0</td>
            <td>NOVATEC</td>
        </tr>
        <tr>
            <td>19</td>
            <td>tornillo autoroscante para perfil de 45 mm NOVATEC</td>
            <td>Unidad</td>
            <td><input type="number" id="quantity-5.19" value="" oninput="updateTotal(5.19)"></td>
            <td id="unitValue-5.19">1049</td>
            <td id="total-5.19">0,0</td>
            <td>NOVATEC</td>
        </tr>
        <tr>
            <td>21</td>
            <td>chanchito y tornillo NOVATEC</td>
            <td>Juego</td>
            <td><input type="number" id="quantity-5.21" value="" oninput="updateTotal(5.21)"></td>
            <td id="unitValue-5.21">1146</td>
            <td id="total-5.21">0,0</td>
            <td>NOVATEC</td>
        </tr>
        <tr>
            <td>22</td>
            <td>lamina HPL 8 mm x 4 ft x 8 ft NOVATEC</td>
            <td>Lamina</td>
            <td><input type="number" id="quantity-5.22" value="" oninput="updateTotal(5.22)"></td>
            <td id="unitValue-5.22">152670</td>
            <td id="total-5.22">0,0</td>
            <td>NOVATEC</td>
        </tr>
    </tbody>
</table>
<h2 style="text-align: center;">Mano de Obra - Proceso de Manufactura</h2>
<table id="manufacturingTable">
    <table>
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
                <td><input type="number" id="labor-quantity-decimal-1" min="0" step="0.1" class="cantidadDecimal"
                        oninput="updateTotals(1)"></td>
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
        </tbody>
    </table>
    <script>
        function updateLaborTotal(row) {
            const decimalQuantity = parseFloat(document.getElementById(`labor-quantity-decimal-${row}`).value) || 0;
            const unitValue = parseFloat(document.getElementById(`labor-unitValue-${row}`).textContent.replace(',', '.')) || 0;

            // Calcular el total solo con la cantidad en decimales y el valor unitario
            const total = decimalQuantity * unitValue;

            // Actualizar el valor total en la celda correspondiente
            document.getElementById(`labor-total-${row}`).textContent = total.toFixed(2).replace('.', ',');
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
                <td><input type="number" id="labor-quantity-decimal-5.1" value="" step="0.01"
                        oninput="updateLaborTotal(5.1)"></td>
                <td id="labor-unitValue-5.1">7,870</td> <!-- Asegúrate de usar el formato correcto -->
                <td id="labor-total-5.1">0,00</td>
                <td>Linprec</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Metalmecanica</td>
                <td>Unidad</td>
                <td><input type="number" id="labor-quantity-decimal-5.2" value="" step="0.01"
                        oninput="updateLaborTotal(5.2)"></td>
                <td id="labor-unitValue-5.2">26000</td>
                <td id="labor-total-5.2">0,00</td>
                <td>Linprec</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Maquinado</td>
                <td>Maquinado</td>
                <td><input type="number" id="labor-quantity-decimal-5.3" value="" step="0.01"
                        oninput="updateLaborTotal(5.3)"></td>
                <td id="labor-unitValue-5.3">7500</td>
                <td id="labor-total-5.3">0,00</td>
                <td>Linprec</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Corte y doble</td>
                <td>Unidad</td>
                <td><input type="number" id="labor-quantity-decimal-5.4" value="" step="0.01"
                        oninput="updateLaborTotal(5.4)"></td>
                <td id="labor-unitValue-5.4">800</td>
                <td id="labor-total-5.4">0,00</td>
                <td>Linprec</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Corte y doble</td>
                <td>Unidad</td>
                <td><input type="number" id="labor-quantity-decimal-5.5" value="" step="0.01"
                        oninput="updateLaborTotal(5.5)"></td>
                <td id="labor-unitValue-5.5">700</td>
                <td id="labor-total-5.5">0,00</td>
                <td>Linprec</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Majado</td>
                <td>Unidad</td>
                <td><input type="number" id="labor-quantity-decimal-5.6" value="" step="0.01"
                        oninput="updateLaborTotal(5.6)"></td>
                <td id="labor-unitValue-5.6">12000</td>
                <td id="labor-total-5.6">0,00</td>
                <td>Linprec</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Costura</td>
                <td>Hora</td>
                <td><input type="number" id="labor-quantity-decimal-5.7" value="" step="0.01"
                        oninput="updateLaborTotal(5.7)"></td>
                <td id="labor-unitValue-5.7">2500</td>
                <td id="labor-total-5.7">0,00</td>
                <td>Linprec</td>
            </tr>
            <tr>
                <td>8</td>
                <td>Sobre y mueble</td>
                <td>Mueble</td>
                <td><input type="number" id="labor-quantity-decimal-5.8" value="" step="0.01"
                        oninput="updateLaborTotal(5.8)"></td>
                <td id="labor-unitValue-5.8">86566</td>
                <td id="labor-total-5.8">0,00</td>
                <td>Linprec</td>
            </tr>
            <tr>
                <td>9</td>
                <td>Transporte</td>
                <td>Transporte</td>
                <td><input type="number" id="labor-quantity-decimal-9" value="" step="0.01"
                        oninput="updateLaborTotal(9)"></td>
                <td id="labor-unitValue-5.9">15000</td>
                <td id="labor-total-5.9">0,00</td>
                <td>Linprec</td>
            </tr>
        </tbody>
    </table>
    <script>
        function updateLaborTotal(row) {
            const quantity = parseFloat(document.getElementById(`labor-quantity-decimal-${row}`).value) || 0;
            const unitValue = parseFloat(document.getElementById(`labor-unitValue-${row}`).textContent.replace(',', '.')) || 0;
            const total = quantity * unitValue;
            document.getElementById(`labor-total-${row}`).textContent = total.toFixed(2).replace('.', ',');
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
                <td id="total-materiales">0,00</td>
            </tr>
            <tr>
                <td>Mano de Obra</td>
                <td id="total-mano-obra">0,00</td>
            </tr>
            <tr>
                <td>Total 1</td>
                <td id="total1">0,00</td>
            </tr>
            <tr>
                <td>Administrativos</td>
                <td><input type="number" id="administrativos" value="" onchange="updateTotal()" step="0.01">
                    <span>%</span></td>
            </tr>
            <tr>
                <td>Total 2</td>
                <td id="total2">0,00</td>
            </tr>
            <tr>
                <td>Ganancia</td>
                <td><input type="number" id="ganancia" value="" onchange="updateTotal()" step="0.01"> <span>%</span>
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

    <button type="button" onclick="addQuotation()">Agregar Cotización</button>

    <script type="text/javascript" src="./js/formulario.js"></script>


    </body>

    </html>