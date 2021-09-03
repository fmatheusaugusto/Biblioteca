<?PHP
       $conexao = mysqli_connect('localhost','jp','131018');
       $banco = mysqli_select_db($conexao,'cislap');
        mysqli_set_charset($conexao,'utf8');

       $sql = mysqli_query($conexao,"select * from teste") or die("Erro");
            while($dados=mysqli_fetch_assoc($sql))
                {
                    echo $dados['id'].'<br>';
                    echo $dados['nome'].'<br>';
                    echo $dados['documento'].'<br>';
                }
 ?>