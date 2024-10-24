<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="icon" href="img/icon.jpg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/style_login-cadastro.css">
    
    <!-- Script para confirmar se o usuário quer sair da página de login, informando que as alterações feitas não serão salvas-->
    <script>
        window.addEventListener('beforeunload', event => 
        {
            event.preventDefault(); 
            event.returnValue = ''
        })
        </script>

    <title>Social Study</title>
</head>

<body>

    <div class="main-login">

        <div class="left-login">
            <h1>Faça login,<br>e tenha acesso aos conteúdos</h1>
            <img src="\img\animação.svg" class="left-img" width="35vw" height="100%" alt="Animação">
        </div>
        
        <div class="right-login">

            <div class="card-login">

                <h1>LOGIN</h1>

                <a href="\">Voltar</a>

                <div class="erro">
                    <p>ERRO: Usuário ou senha inválidos.</p>
                </div>

                <div class="textfield">
                    <label for="usurario">Email</label>
                    <input type="text" name="usuario" placeholder="Email">
                </div>

                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Senha">
                </div>

                <!--Adicionei esse "onclick" para quando clicar em "Entrar", ele levar para a página inicial do site. Então isso é uma questão temporária, pois é necessário bem mais script's para lidar com isso e validar se o login está correto.-->
                <button class="btn-login" onclick="window.location.href='index.html'">Entrar</button>
                <a href ="\cadastro">Ainda não é inscrito? <strong>Cadastre-se!</strong></a>

            </div>

      </div>

    </div>
    
</body>
</html>