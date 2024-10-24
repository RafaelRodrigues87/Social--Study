<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="icon" href="img/icon.jpg">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/style_login-cadastro.css">
    <script>
        window.addEventListener('beforeunload', event => 
        {
            event.preventDefault(); 
            event.returnValue = ''
        })
        </script>
    <title>SocialStudy</title>
</head>
<body>
    
    <div class="main-login">
        <div class="left-login">
            <h1>Cadastre-se,<br>e tenha acesso aos conteúdos</h1>
            <img src="/img/animação.svg" class="left-img" width="35vw" height="100%" alt="Animação">
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>CADASTRO</h1>
                    <a href="\">Voltar</a>
                <div class="textfield">
                    <label for="first-name">Nome</label>
                    <input type="text" name="usuario" placeholder="Usuário">
                </div>

                <div class="textfield">
                    <label for="last-name">Email</label>
                    <input type="text" name="email" placeholder="Email">
            </div>
            <div class="textfield">
                <label for="password">Senha</label>
                <input type="password" name="senha" placeholder="Senha">
             </div>
             <button class="btn-register">Cadastrar</button>
    </div>

</body>
</html>