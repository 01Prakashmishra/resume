<?php

if(isset($_POST['login']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    if($email=="prakash12596mishra@gmail.com" && $password=="007")

{
    header("location:profil.php");
}
else
{
    echo"ENTER CORRECT PASSWORD";
    
}


}

?>