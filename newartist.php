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

<form id="insert" name="insert" method="post" action="dbprocess.php" enctype="multipart/form-data">
<fieldset class="subtleSet">
    <h2>Insert new artist:</h2>
    <p>
      <label for="name">Name: </label><br>
      <input type="text" name="name" id="name" >
    </p>
    <p>
      <label for="summary">Summary: </label><br>
<textarea name="summary" rows="5" cols="30" id="details" ></textarea> 
    </p>
    <p>
      <label for="details">Details:</label><br>
      <textarea name="details" rows="5" cols="30" id="details" ></textarea> 
        
        
    </p>
    <p>
      <label for="webpage">Artist webpage:</label><br>
      <input type="text" name="webpage" id="webpage" >
    </p>
    <p>
      <label for="phone">Artist phone:</label><br>
      <input type="text" name="phone" id="phone" >
    </p>
    <p>
      <label for="mobile">Artist mobile:</label><br>
      <input type="text" name="mobile" id="mobile" >
    </p>
    <p>
      <label for="fax">Artist fax:</label><br>
      <input type="text" name="fax" id="fax" >
    </p>
        <p>
      <label for="email">Artist email:</label><br>
      <input type="text" name="email" id="email" >
    </p>
    <p>
      <label for="fileToUpload">photo:</label><br>
      <input type="file" name="fileToUpload" id="fileToUpload">
    </p>
    <p>
      <input type="submit" name="submit" id="submit" value="Insert Entry">
    </p>
</fieldset>
</form>


</body>
</html>