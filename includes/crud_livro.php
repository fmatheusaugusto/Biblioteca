<?php
    if(isset($_POST['excluir_livro'])){
        include("funcoes.php");
        deleta_livros();
    }
    else if(isset($_POST['editar_livro'])){
        include("funcoes.php");
        edita_usuarios();
    }
?>
<script>
    window.location.replace("http://prefeituradecassiamg.com.br/sistemas/Biblioteca/#ajax/pesquisa_livro.php");
</script>

