<?php
//error_reporting(0);
//session_start();
require("connect_db.php");

@mysql_query($link, "SET NAMES 'utf8'");
if ($_POST['user'] == null || $_POST['pass'] == null)
    {
        echo "<span>Por favor complete todos los campos.</span>";
    }
else
    {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $sql =  "SELECT * FROM cliente WHERE user = '$user' AND pass = '$pass'";
    $result = mysqli_query($link,$sql);
    if (!$result){
            $my_error = mysqli_error($result);
            echo "Ha habido un error: $my_error";            
        } else {
            if (mysqli_num_rows($result) > 0) {
                    session_start();
                    $_SESSION["usuario"] = $user;
                    echo "<span style='color: green'>Bienvenido $user</span>";
                    echo '<meta http-equiv="refresh" content="1; url=cartaPedido.php" /> ';        
                } else {
                    echo "<span>El usuario y/o la contraseña no son correctos.</span>";
                } 
    }

}
?>