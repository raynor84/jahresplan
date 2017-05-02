<?php
echo "test";
$pdo = new PDO('mysql:host=localhost;dbname=scripting', 'root', 'root');

if((empty($_GET["id"]))||($_GET["id"]=="")) {
echo "test";
	throw new Exception("Please provide a unique identifier");
}
?>
<?php
$statement = $pdo->prepare("DELETE FROM monatsblatt WHERE id = ?");
$statement->execute(array($_GET["id"]));

header('location: monatsplan_overview.php');
?>

