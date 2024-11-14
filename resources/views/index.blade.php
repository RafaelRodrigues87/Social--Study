<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@1,700&family=Nunito&family=Yellowtail&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="\css\normalize.css">
  <link rel="stylesheet" type="text/css" href="\css\style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device=width, initial-scale=1.0">
  <link rel="icon" href="img/icon.jpg">
  <title>Social Study</title>
</head>
<body>



@if (session('message'))
    <div class="alert-success-custom"  id="success-message">
        {{ session('message') }}
    </div>
@endif


   

<nav>
      <a href="/">Social Study</a>
      <ul>
        <li> <a href="#sobre">Sobre</a></li>
        <li> <a href="#materias">Disciplinas</a></li>
        <li> <a href="#contato">Contato</a></li>
        <li> <a href="\provas">Provas anteriores</a></li>
        @if (auth()->check())
        <li class="user-profile">
                <a href="">Olá, {{ auth()->user()->name }}!</a>
                <form action="{{ route('logout') }}" method="POST" class="logout-form">
                    @csrf
                    <button type="submit" class="logout-button">Sair</button>
                </form>
        @else
          <li> <a href="\login">Login</a></li>
        
        
        @endif
        
      </ul>
  </nav>

  <header id="topo">
      <h1 class="titulo">Social Study</h1>
      <p></p>
      <p></p>
      <p></p>
      <a href="#materias" class="botao">Ver mais</a>
  </header>

  <section id="sobre">

      <h2>Sobre</h2>
      <p>Somos um grupo de estudantes da Uninassau, desenvolvendo um projeto para oferecer materiais gratuitos e de qualidade para ajudar na preparação para vestibulares. Nosso objetivo é facilitar o acesso ao conhecimento e contribuir para o sucesso acadêmico, independentemente da condição financeira dos estudantes.<p>
      <a href="#contato" class="botao"> Contate Agora </a>
  </section>

    @if (auth()->check())
      <section id="materias">
        <h2>Escolha a disciplina e veja os assuntos mais cobrados no ENEM e SSA.</h2>
        <a href="\matematica"> <img src="\img\matematica.jpeg" alt="Matemática"></a>
        <a href="\portugues"> <img src="img\portugues.jpeg" alt="Português"></a>
        <a href="\historia"> <img src="img\historia.jpeg" alt="História"></a>
        <a href="\geografia"> <img src="img\geografia.jpeg" alt="Geografia"></a>
        <a href="\fisica"> <img src="img\fisica.jpeg" alt="Física"></a>
        <a href="\quimica"> <img src="img\quimica.jpeg" alt="Química"></a>
        <a href="\biologia"> <img src="img\biologia.jpeg" alt="Biologia"></a>
        <a href="\filosofia"> <img src="img\filosofia.jpeg" alt="Filosofia"></a>
        <a href="\sociologia"> <img src="img\sociologia.jpeg" alt="Sociologia"></a>
      </section>
    
    @else
      <section id="materias">
        <h2>Escolha a disciplina e veja os assuntos mais cobrados no ENEM e SSA.</h2>
        <a href="\login"> <img src="\img\matematica.jpeg" alt="Matemática"></a>
        <a href="\login"> <img src="img\portugues.jpeg" alt="Português"></a>
        <a href="\login"> <img src="img\historia.jpeg" alt="História"></a>
        <a href="\login"> <img src="img\geografia.jpeg" alt="Geografia"></a>
        <a href="\login"> <img src="img\fisica.jpeg" alt="Física"></a>
        <a href="\login"> <img src="img\quimica.jpeg" alt="Química"></a>
        <a href="\login"> <img src="img\biologia.jpeg" alt="Biologia"></a>
        <a href="\login"> <img src="img\filosofia.jpeg" alt="Filosofia"></a>
        <a href="\login"> <img src="img\sociologia.jpeg" alt="Sociologia"></a>
      </section>
      @endif

      <section id="contato">
        <h2>Contato: </h2>
        <p>Vem falar conosco!</p>

        <div>
          <img src="img/tel.png" alt="telefone">
          <p> <a href="tel: 81986817852">(81)9999-9999</a></p>
         
        </div>

        <div>
          <img src="img/mail.png" alt="email">
          <p><a href="mailto: contatosocialstudy@hotmail.com">teste@gmail.com</a></p>
         
        </div>

      </section>


      <footer>
        <a href="#topo">VOLTAR</a>
      </footer>
  <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>