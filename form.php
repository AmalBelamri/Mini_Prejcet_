<?php
$ville=$_GET['city'];
$nom=$_GET['name'];
$id=$_GET['num'];

echo"<form action=updClt.php method=GET>
<input  name=id value=$id type=hidden ><br><br>
<label>Nom:</label><br>
<input  name=nom value=$nom  ><br><br>
<label>Ville:</label><br>
<input name=ville value=$ville ><br><br>

<input type=submit value=Ok name= sub>

</form>";




?>