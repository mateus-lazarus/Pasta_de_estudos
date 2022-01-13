<?php
    require_once 'Autenticacao.php';
    
    $crud = new CriaEAutentica();

    if (isset($_POST['usuario']) ) {
        $crud->autenticarConta($_POST['usuario'], $_POST['senha']);
    }

    if (isset($_POST['criarusuario']) ) {
        $crud->criarConta($_POST['criarusuario'], $_POST['criarsenha']);
    }

?>


<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="reset.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Crud - Senhas</title>
        <meta name="description" content="descrição que google mostra">
    </head>





    <body>
        <main>
            <div class="container-fluid">
                <h1>
                    Tela de Login
                </h1>
                <div class="row">
                    <div class="col-2">
                        <h4>
                            Usuário
                        </h4>
                        <h4>
                            Senha
                        </h4>
                    </div>
                </div>
                <form method="POST">
                    <input type="text" name="usuario" required>
                    <input type="password" name="senha" required>
                    <input type="submit" value="Confirmar">
                </form>
            </div>


            <div class="container-fluid">

            </div>



            <div class="container-fluid">
                <h1>
                    Tela de Criação
                </h1>
                <div class="row">
                    <div class="col-2">
                        <h4>
                            Usuário
                        </h4>
                        <h4>
                            Senha
                        </h4>
                    </div>
                </div>
                <form method="POST">
                    <input type="text" name="criarusuario" required>
                    <input type="password" name="criarsenha" required>
                    <input type="submit" value="Confirmar">
                </form>
            </div>
    
    
            <div class="container-fluid">
    
            </div>
        </main>

        <footer>
            
        </footer>
    </body>
</html>