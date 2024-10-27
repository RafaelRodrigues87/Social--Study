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
                    <form action="{{ route('user.store') }}" method="POST">
                    @csrf
                    <div class="textfield">
                        <label for="name">Nome</label>
                        <input type="text" name="name" placeholder="name" required>
                    </div>

                    <div class="textfield">
                        <label for="last-name">Email</label>
                        <input type="email" name="email" placeholder="email" required>
                </div>
                <div class="textfield">
                    <label for="password">Senha</label>
                    <input type="password" name="password" placeholder="Senha" required>
                </div>
                <input  type="submit" class="btn btn-primary" value="Cadastrar">
             </form>
             
    </div>

</body>
</html>