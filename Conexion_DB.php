<?php
$conexion = mysqli_connect("localhost","root","","php_db");

if($conexion){
    echo "Todo Correcto";

}

else{
    echo "conexion perdida";
}


?>
