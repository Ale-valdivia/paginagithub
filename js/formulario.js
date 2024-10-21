$(document).ready(function () {

    function updateTotal() {
        // Sumar valores de materiales
        const totalMateriales = calcularTotalMateriales(); // Función que debes implementar
        document.getElementById('total-materiales').innerText = totalMateriales.toFixed(2).replace('.', ',');
        // Sumar valores de mano de obra
        const totalManoObra = calcularTotalManoObra(); // Función que debes implementar
        document.getElementById('total-mano-obra').innerText = totalManoObra.toFixed(2).replace('.', ',');
        // Calcular Total 1
        const total1 = totalMateriales + totalManoObra;
        document.getElementById('total1').innerText = total1.toFixed(2).replace('.', ',')
        // Obtener administrativos y calcular Total 2
        const administrativos = parseFloat(document.getElementById('administrativos').value) / 100;
        const total2 = total1 + (total1 * administrativos);
        document.getElementById('total2').innerText = total2.toFixed(2).replace('.', ',');
        // Obtener ganancia y calcular Total 3
        const ganancia = parseFloat(document.getElementById('ganancia').value) / 100;
        const total3 = total2 + (total2 * ganancia);
        document.getElementById('total3').innerText = total3.toFixed(2).replace('.', ',');
        // Calcular Dólares basado en el total3
        const dolares = total3 / 524.64; // Aquí se usa el valor fijo de cambio de dólar
        document.getElementById('dolares').innerText = dolares.toFixed(2).replace('.', ',');
        // Calcular diferencia
        const diferencia = total3 - total2;
        document.getElementById('diferencia').innerText = diferencia.toFixed(2).replace('.', ',');
    }
    function calcularTotalMateriales() {
        // Aquí implementa la lógica para sumar los totales de cada tabla de materiales.
        // Retorna el total.
        return 234133.80; // Ejemplo, sustituye esto con la suma real
    }
    function calcularTotalManoObra() {
        // Aquí implementa la lógica para sumar los totales de cada tabla de mano de obra.
        // Retorna el total.
        return 3296.00; // Ejemplo, sustituye esto con la suma real
    }

})