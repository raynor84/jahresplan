
<html>
	<head>
			<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">

	</head>
<body>
<form action="create_monat.php" method="GET">
	<input name="name" type="text" placeholder="Name" /><br /><br /><br />
	1&nbsp; <input name="monat[]" placeholder="monat" class="datepicker" type="text" />&nbsp;&nbsp;
	<input name="aufgabe[]" placeholder="aufgabe" type="text" value="" /><br /><br />
	2&nbsp; <input name="monat[]" placeholder="monat" class="datepicker" type="text" />&nbsp;&nbsp;
	<input name="aufgabe[]" placeholder="aufgabe" type="text" value="" /><br /><br />
	3&nbsp; <input name="monat[]" placeholder="monat" class="datepicker" type="text" />&nbsp;&nbsp;
	<input name="aufgabe[]" placeholder="aufgabe" type="text" value="" /><br /><br />
	4&nbsp; <input name="monat[]" placeholder="monat" class="datepicker" type="text" />&nbsp;&nbsp;
	<input name="aufgabe[]" placeholder="aufgabe" type="text" value="" /><br /><br />
	5&nbsp; <input name="monat[]" placeholder="monat" class="datepicker" type="text" />&nbsp;&nbsp;
	<input name="aufgabe[]" placeholder="aufgabe" type="text" value="" /><br /><br />
	6&nbsp; <input name="monat[]" placeholder="monat" class="datepicker" type="text" />&nbsp;&nbsp;
	<input name="aufgabe[]" placeholder="aufgabe" type="text" value="" /><br /><br />
	7&nbsp; <input name="monat[]" placeholder="monat" class="datepicker" type="text" />&nbsp;&nbsp;
	<input name="aufgabe[]" placeholder="aufgabe" type="text" value="" /><br /><br />
	8&nbsp; <input name="monat[]" placeholder="monat" class="datepicker" type="text" />&nbsp;&nbsp;
	<input name="aufgabe[]" placeholder="aufgabe" type="text" value="" /><br /><br />
	9&nbsp; <input name="monat[]" placeholder="monat" class="datepicker" type="text" />&nbsp;&nbsp;
	<input name="aufgabe[]" placeholder="aufgabe" type="text" value="" /><br /><br />
	10 <input name="monat[]" placeholder="monat" class="datepicker" type="text" />&nbsp;&nbsp;
	<input name="aufgabe[]" placeholder="aufgabe" type="text" value="" /><br /><br />
	11 <input name="monat[]" placeholder="monat" class="datepicker" type="text" />&nbsp;&nbsp;
	<input name="aufgabe[]" placeholder="aufgabe" type="text" value="" /><br /><br />
	12 <input name="monat[]" placeholder="monat"  class="datepicker" type="text" />&nbsp;&nbsp;
	<input name="aufgabe[]" placeholder="aufgabe" type="text" value="" /><br /><br />
	<input type="submit" value="Submit" />

</form>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>
    <script>
  $(function() {
    $(".datepicker").datepicker();
  });
  </script>

</body>
</html>
