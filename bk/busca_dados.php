<?php
require("funcoes/conectdb.php");


$resultado = mysqli_query($conexao, "SELECT * FROM sep where cod_tumulo = '244'");

    /* fetch associative array */
    while ($dados = mysqli_fetch_assoc($resultado)) {
       echo $dados["falecido"]."<br>";
    }

    /* free result set */
    mysqli_free_result($result);

/* close connection */
mysqli_close($conexao);
?>