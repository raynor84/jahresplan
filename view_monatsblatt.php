<?php
	$pdo = new PDO('mysql:host=localhost;dbname=scripting', 'root', 'root');
	$statement = $pdo->prepare("Select * from monatsblatt where id = ?");
	$statement->execute(array($_GET['id']));
	$row = $statement->fetch();
	
	$name = $row["name"];
	$monatsplan_id = $_GET['id'];
	$sql = "Select * from monatsplan where monatsblatt_id=".$monatsplan_id; 
?>

<html>
	<head>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="/resources/demos/style.css">

	</head>
<body>
<form action="save_monatsblatt.php" method="GET">
	<input name="name" readonly type="text" value="<?php echo $name; ?>" placeholder="Name" /><br /><br /><br />
	
	<?php foreach($pdo->query($sql) as $row):?>
	
		1&nbsp; <input name="monat[]" readonly value="<?php echo $row["monat"]; ?>" placeholder="monat"  type="text" />&nbsp;&nbsp;
		<input name="aufgabe[]"  readonly value="<?php echo $row["aufgabe"]; ?>" placeholder="aufgabe" type="text" value="" /><br /><br />
		
	<?php endforeach; ?>
	
	<input type="submit" value="Submit" />

</form>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>
    <script>


</body>
</html>

