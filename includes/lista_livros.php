
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
    </td>

    <input type="hidden" name="id" value= <?php echo $id ?>>
    <td>
        <button type="submit" name="editar_livro" class="btn btn-warning">
            Editar
        </button>
        <button type="submit" name="excluir_livro" class="btn btn-danger">
            Excluir
        </button>
    </td>

</tr>

