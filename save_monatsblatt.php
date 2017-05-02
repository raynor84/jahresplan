<pre>
	<?php print_r($_GET); ?>
</pre>
<?php
$pdo = new PDO('mysql:host=localhost;dbname=scripting', 'root', 'root');

if((empty($_GET["id"]))||($_GET["id"]=="")) {
	throw new Exception("Please provide an id");
}
if((empty($_GET["monate"]))||($_GET["monate"]=="")) {
	throw new Exception("Please provide an array monate");
}
if((empty($_GET["aufgaben"]))||($_GET["aufgaben"]=="")) {
	throw new Exception("Please provide an array aufgaben");
}
?>
<?php
//update Monatsblatt
$statement = $pdo->prepare("Update monatsblatt SET name = ? where id=". $_GET["id"]);
$statement->execute(array($_GET['name']));	
echo $statement->rowCount() . "<br />";

//update Monatsplan
$monate = $_GET["monate"];
$aufgaben = $_GET["aufgaben"];
$month_id = $_GET["month_id"];
$statement = $pdo->prepare("Update monatsplan SET monat = ?, aufgabe = ? where id= ?");
	echo "<br />";
for($i=0; $i<sizeof($monate); $i++) {
	echo $month_id[$i].": ".$monate[$i]." ".$aufgaben[$i]."<br />";
	$date = date('Y-m-d H:i:s', strtotime($monate[$i]));
	
	$statement->execute(array($date, $aufgaben[$i], $month_id[$i]));	
}

 header('location: monatsplan_overview.php');
?>

