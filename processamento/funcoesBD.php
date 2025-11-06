<?php
function conectarBD(){

    $conexao = mysqli_connect("localhost","root","","cineprime");
    return($conexao);
}

?>