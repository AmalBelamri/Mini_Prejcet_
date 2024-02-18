
<?php
$conx=mysqli_connect('localhost','root','','projet');
$reqSel=  "select * from client";
$n=mysqli_query($conx,$reqSel);
echo "<table border=1>
<tr><td>id</td><td>nom</td><td>ville</td><td>Supprimer</td><td>Update</td></tr>";

while($tab =mysqli_fetch_assoc($n)) {
   $id= $tab['id'];
   $nom= $tab['nom'];
   $ville= $tab['ville'];
    echo"<tr><td>".$tab['id']."</td><td>".$tab['nom']."</td> <td>".$tab['ville']."</td><td><a href='supp.php?id=$id'>supp</a></td><td><a href='form.php?name=$nom&num=$id&city=$ville'>update</a></td></tr>";
   

}
echo"</table>";

?>
<a href="formAdd.php">Ajouter un Client</a>;
