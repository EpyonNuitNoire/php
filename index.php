<?php
echo "¡Hola, mundo!";
?>
<?php
$edad = 18;
if ($edad >= 18) {
    echo "Eres mayor de edad.";
} else {
    echo "Eres menor de edad.";  
}
?>
<?php
$indice = 0;
while ($indice < 30 ) {
    echo '<p>Vuelta: ' . ++$indice . '</p>';
}

$numero = 1;
?>

<?php
do {
    echo "Número: ~$numero <br>";
    $numero++;
} while ($numero <= 10);
?>

<?php
for ($i = 1; $i <= 10; $i++) {
    echo "Número: $i<br>";
}
?>
    <?php
    $frutas = array("Manzana", "Banana", "Cereza", "Durazno");

    
 foreach ($frutas as $fruta) {
    echo "Fruta: $fruta<br>";

 }   
 ?>

 <?php
 $dia = 3;

 switch ($dia) {
    case 1:
        echo "Hoy es Lunes";
        break;
    case 2:
        echo "Hoy es Martes";
        break;
    case 3:
        echo "Hoy es Miercoles";
        break; 
    case 4:
        echo "Hoy es Jueves";
        break;
    case 5:
        echo "Hoy es Viernes";
        break;
    case 6:
        echo "Hoy es Sabado";
        break;  
    case 7:
        echo "Hoy es Domingo";
        break;
    default:
        echo "Número de día no válido";
        break;
                      
 }
 ?>
  <?php
 function saludar($nombre) {
    echo "¡Holo, $nombre!"; 
 }
 saludar ("Pedro");
 ?>
 <?php
 define("PI", 3.1416);
 echo "El valor de PI es: " . PI;
?>