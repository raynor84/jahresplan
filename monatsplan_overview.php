<?php
$pdo = new PDO('mysql:host=localhost;dbname=scripting', 'root', 'root');
?>
<a href="new_monat.php">Add</a><br /><br />
<?php
$sql = "SELECT * FROM monatsblatt";
foreach ($pdo->query($sql) as $row) {
   echo $row['name']."<br />";
   echo "Action: ".'<a href="view_monatsblatt.php?id='.$row['id'].'">view</a> <a href="delete_monatsblatt.php?id='.$row['id'].'" onclick="return confirm(\'Are you sure?\')">delete</a> ';
   echo '<a href="update_monatsblatt.php?id='.$row['id'].'">update</a>';
   echo "<br /><br />";
}


?>

