<?php
$pdo = new PDO('mysql:host=localhost;dbname=scripting', 'root', 'root');
	
?>
<pre>
<?php print_r($_GET); ?>
</pre>
<?php

//Insert Name and fetch ID
$statement = $pdo->prepare("Insert into monatsblatt (name) VALUES (?)");
$statement->execute(array($_GET['name']));
$monatsplan_id = $pdo->lastInsertId();
echo $monatsplan_id;
//insert month and task and store id of name
$monate = $_GET["monat"];
$aufgaben = $_GET["aufgabe"];
for($i=0; $i< sizeof($monate); $i++) {
  $date = new DateTime($monate[$i]);
  $mysql_date = $date->format('Y-m-d H:i:s');	
  $statement = $pdo->prepare("Insert into monatsplan (monat, aufgabe, monatsblatt_id) VALUES (?,?, ?)");
  $statement->execute(array($mysql_date, $aufgaben[$i], $monatsplan_id ));
  echo $mysql_date." <br />";
  echo $aufgaben[$i];
  echo "<br />";
}




die();
 header('location: sportactivity_overview.php');
?>

