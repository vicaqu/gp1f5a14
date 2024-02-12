<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Detalls de la Reserva</title>
</head>
<body>

<?php
$roomType = $_POST['roomType'];
$numRooms = $_POST['numRooms'];
$numPeople = $_POST['numPeople'];
$numDoubleBeds = $_POST['numDoubleBeds'];
$numSingleBeds = $_POST['numSingleBeds'];
$numNights = $_POST['numNights'];
$name = $_POST['name'];
$creditCard = $_POST['creditCard'];

if ($roomType == 'basic') {
  $pricePerNight = 40;
} else {
  $pricePerNight = 50;
}

$pricePerDoubleBed = 15;
$pricePerSingleBed = 10;

$totalPrice = ($pricePerNight * $numPeople + $pricePerDoubleBed * $numDoubleBeds + $pricePerSingleBed * $numSingleBeds) * $numRooms * $numNights;

echo "<h2>Detalls de la Reserva</h2>";
echo "<p>Nom i cognoms: $name</p>";
echo "<p>Número de VISA: $creditCard</p>";
echo "<p>Preu total de la reserva: $totalPrice €</p>";
echo '<p><a href="index.html">Tornar al Formulari</a></p>';
?>

</body>
</html>
