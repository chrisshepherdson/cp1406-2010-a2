<?php
include("dbconnect.php")

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>artist database</title>
<style type="text/css">
.subtleSet {
	border-radius:25px;
	width: 30em;
}
.deleteButton {
	color: red;
}
</style>
</head>

<body>
<h1>artist Database</h1>
<form id="insert" name="insert" method="post" action="dbprocess.php">
<fieldset class="subtleSet">
    <h2>Insert new artist:</h2>
    <p>
      <label for="name">Name: </label>
      <input type="text" name="name" id="name">
    </p>
    <p>
      <label for="summary">Summary: </label>
      <input type="text" name="summary" id="summary">
    </p>
    <p>
      <label for="imageUrl">Image Url:</label>
      <input type="text" name="imageUrl" id="imageUrl">
    </p>
    <p>
      <label for="details">Details:</label>
      <input type="text" name="details" id="details">
    </p>
    <p>
      <input type="submit" name="submit" id="submit" value="Insert Entry">
    </p>
</fieldset>
</form>


</body>
</html>