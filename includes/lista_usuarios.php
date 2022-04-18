<tr>
    <input type="hidden" name="id" value= <?php echo $id ?>>
    <td>
        <?php echo $nome; ?>
    </td>
    <td>
        <?php
            echo $endereco_rua;
            echo ", ";
            echo $endereco_numero; 
        ?>
    </td>
    <td>
        <?php echo $telefone; ?>
    </td>
    <td>
        <?php echo $cpf; ?>
    </td>
    <td>
        <button type="submit" name="editar_usuario"  class="btn btn-warning">
            Editar
        </button>
        <button type="submit" name="excluir_usuario" class="btn btn-danger">
            Excluir
        </button>
    </td>
</tr>
