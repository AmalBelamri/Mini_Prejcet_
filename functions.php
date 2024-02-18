<?php
function {
    echo"je suis la pg addclient".'<br><br>';
    $name=$_GET['nom'];
    $city=$_GET['ville'];
    
    echo"le nom est: ".$name." et la ville: ".$city;
    
    $conx=mysqli_connect('localhost','root','','projet');
    $reqInsert="insert into client values (null,'$name','$city')";
    $x=mysqli_query($conx,$reqInsert);
    header("Location:client.php");
}

function UpdateClt(){
    echo"je suis la pg update".'<br><br>';

    $conx=mysqli_connect('localhost','root','','projet');
    $id=$_GET['id'];
    $nom=$_GET['nom'];
    $ville=$_GET['ville'];
       
        $reqUpd="Update client SET nom='$nom',ville='$ville'  where id=$id";
        mysqli_query($conx,$reqUpd);
        header("Location:client.php");
}

function SuppClt(){
   
    echo"je suis la pg supp".'<br><br>';
    
    $conx=mysqli_connect('localhost','root','','projet');
    $n=$_GET['id'];
    
        echo "le nombre supprime est:".$n;
        $reqDel="delete from client  where id=$n";
        $x=mysqli_query($conx, $reqDel);
      
    
}

?>