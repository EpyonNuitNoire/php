<?php
$Calificación = 50;
 
if ($Calificación >= 90){
 echo "Tu Calificación es A.";
 
}elseif ($Calificación >= 80){
 echo "Tu Calificación es B.";

}elseif ($Calificación >= 70) {
  echo "Tu Calificación es C.";

}elseif ($Calificación < 70) {
echo "Tu Calificación es F.";      
}

?>

<?php
$Hora = 0;

if ($Hora < 12){
echo "Buenos dias.";

}elseif ($Hora >= 12){
echo "Buenas tardes.";

}elseif ($Hora > 18 ) {
  echo "Buenas noches.";
       
 }


?>


<?php
$Edad = 0;

if ($Edad < 18){
echo " Menor de edad.";

}elseif ($Edad >= 18){
echo "Adulto.";

}elseif ($Edad >= 65) {
  echo "Persona mayor.";
       
 }


?>