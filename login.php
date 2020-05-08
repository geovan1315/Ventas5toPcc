<?php
    include('Conexion.php');

    $con = new Conexion();
    
    $nom=$_POST['nombre'];
    $pass=$_POST['password'];

    $q="SELECT * FROM `user` WHERE `user`='$nom' AND `password`= '$pass'; ";
    $user=$con->query($q);
    $con->close();

    //var_dump($user);

    if($user->num_rows==1)
    {
        header('location:ventas.php');
    }
    else 
    {
	    header('location:index.html');
    }

  
?>
