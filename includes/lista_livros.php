
<tr>
    <td>
        <?php echo $titulo; ?>
    </td>
    <td>
        <?php echo $autores; ?>
    </td>
    <td>
        <?php echo $localizacao; ?>
    </td>
    <td>
        <?php echo $codigo; ?>
        <h1 hidden> <?php echo $id; ?>
    </td>
    <td>
        <!--
        <button type="submit" name="editar_livro" class="btn btn-warning">
            Editar
        </button>
        -->
        <a href="#ajax/edita_livro.php" class="botao">Editar | </a>
        <a href="edita_livro.php">Excluir </a>
    </td>
    
</tr>

