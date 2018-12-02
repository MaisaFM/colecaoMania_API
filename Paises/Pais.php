<?php

require_once './AcessoBD/BancoDeDados.php';

 function getPais()
{
    $banco = new BancoDeDados();
    $conn  = $banco->conectar();
    $resultado = $conn->query("SELECT * FROM tbpais");
    $data = array();

    while ($registro = mysqli_fetch_assoc($resultado)) {
      array_push($data, $registro);
    }

    $resultado->close();
    $conn->close();

    echo "{paises:".json_encode($data)."}";
}

 ?>
