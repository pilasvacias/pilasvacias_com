<?
$link = mysqli_connect("mysql51-105.perso","pilasvacias","G7cpcUUkCkdk","pilasvacias") or die("Error " . mysqli_error($link));

$query = "SELECT * FROM encuesta_musica";

//execute the query.

$result = $link->query($query);

//display information:

while($row = mysqli_fetch_array($result)) {
	echo $row["id"] . ": " . $row["age"] . ", " . $row["question1"] . $row["question4"] . $row["question5"] . $row["question6"] . " <br>";
} 



?>