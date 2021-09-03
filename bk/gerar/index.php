<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
<form method="post" action="index.php">
									<fieldset>
									<div>
                                        <section>
											<label>Nome</label>
												<label> 
													<input type="text" name="nome" autofocus>
													
												</label>
									    </section>
                                        <section>
											<label>Senha</label>
												<label> 
													<input type="text" name="senha">
													
												</label>
									    </section>
									</div>
									</fieldset>
									<fieldset>
										<div>
										</div>
                                    </fieldset>
                                    <footer>
										<button type="submit" name="gerar" value="gerar">Gerar</button>
									</footer>
</form>
<?php

    if(isset($_POST['gerar'])){
        $usuario = $_POST['nome'];
        $senha = $_POST['senha'];

        echo "<br>".$usuario.":".hash('sha256', $senha);
    }

?>

</body>
</html>