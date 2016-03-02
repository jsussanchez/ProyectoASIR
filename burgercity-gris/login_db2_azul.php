<?php
error_reporting(0);
session_start();
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
        $sql =  "SELECT * FROM usuarios WHERE nick = '$user' AND pass = '$pass'";
        $consulta = mysql_query($sql,$link);
        
        if (mysql_num_rows($consulta) > 0){
                $_SESSION["usuario"] = $user;
                echo '<script>location.href = "welcome.php"</script>';        
            }
            else 
            {
                echo "<span>El usuario y/o la contraseña no son correctos, vuelva a intentarlo.</span>";
            } 

    }
?>