﻿<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>zadanie7</title>

    <link href="https://fonts.googleapis.com/css2?family=Croissant+One&display=swap">
</head>



<body style="background-color:gray; font-family: 'Croissant One', cursive; color:purple;">
<b>
    <table style=" text-shadow: 2px 2px #000000; border-style: dashed; border-color: purple; background-image: url('storm.jpg'); background-size:cover; padding-top: 5px; padding-bottom: 5px; width: 600px; height: 300px;">
    
    <?php
$con = new mysqli("localhost","root","","jakosa");

$q = "SELECT * FROM bedzie";

 
if($wynik=$con->query($q))
while($row=$wynik->fetch_array())
echo "<tr> <th>" . $row["nazwa"] . "</th> <th>" . $row["cena"] . "</th> <th>" . $row["opis"] . "</th></tr>";
else
echo $con->errno . " " . $con->error;

$random = rand(10,20);

$q = "INSERT INTO bedzie (nazwa, cena, opis) VALUES ('NOWE'," . $random . ", 'losowa cena')";
$wynik = $con->query($q);
?>
        
    </table>
</b>
</body>
</html>