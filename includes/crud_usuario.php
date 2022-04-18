<?php
    if(isset($_POST['excluir_usuario'])){
        include("funcoes.php");
        deleta_usuarios();
    }
    else if(isset($_POST['editar_usuario'])){
        include("funcoes.php");
        edita_usuarios();
    }
?>
<script>
    window.location.replace("http://prefeituradecassiamg.com.br/sistemas/Biblioteca/#ajax/pesquisa_usuario.php");
</script>

