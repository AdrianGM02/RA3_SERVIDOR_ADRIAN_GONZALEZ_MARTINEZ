 <?php
/**
 * Autor: Adrián González Martínez
 * Fecha: 29/09/2023
 * Enunciado: Tablas de multiplicar del 1 al 10. Aplicar estilos en filas/columnas
 *
 */

echo "<table border = '1'>";
echo "<tr><th>X</th>";
for ($i=1; $i <= 10 ; $i++) { 
    echo "<th>$i</th>";
}
echo "</tr>";


for ($i=1; $i <= 10; $i++) {
    echo "<tr><th>$i</th>";
    for ($j=1; $j <= 10 ; $j++) { 
        echo "<td>" . $i*$j . "</td>";
    }

    echo "</tr>";

    
}

?>