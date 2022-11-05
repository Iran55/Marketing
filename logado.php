<?php
//Protegendo profile.php só para usuários logados
require_once 'session.php';
?>

<!-- TELA INICIAL -->
<!DOCTYPE html5>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="css/styles.css" />
  <title>MARKETING DIGITAL</title>

</head>

<body>
  <div class="navigation_header" id="navigation_header">

  <div class="img">
      <img src="./img/logo.png" alt="" />
      </div>

    <a href="profile.php">Olá, <?= $usuario ?></a>


  </div>
  <div class="search-box">
    <input class="search-txt" type="text" name="" placeholder="Pesquisar">
    <a class="search-btn" href="#"></a>
    <i class="fas fa-search"></i>
  </div>
  <header id="page-header">
    <div class="background-overlay"></div>
    <div class="container">
    
      <div id="page-header-content">
        <h2>APROVEITE O MUNDO DOS NEGÓCIOS CONOSCO</h2>
        <hr class="divider" />
        <h1>ALFA MARKETING</h1>

      </div>
    </div>
  </header>

  <main>
    <section id="quote">
      <div class="container">
        <div>
        </div>
        <div id="quote-content">
          <p>
            “A meta do marketing é conhecer e entender o consumidor de forma que o produto ou serviço se molde e se
            venda sozinho”
          </p>
          <p>- Peter Drucker</p>
        </div>
      </div>
    </section>

    
    <section id="upcoming-events">
      <div class="container">
        <h2 class="section-title">CONHEÇA</h2>
        <hr class="divider" />

        <div id="upcoming-events-content">
          <div class="event">
            <img style="width:300px; height:300px" src="./img/redessociais.png" alt="" />
            <h3>REDES SOCIAIS</h3>
            <p>
             Descubra como é o Marketing em suas redes sociais
            </p>
            <a href="#" class="btn">SAIBA MAIS</a>
          </div>

          <div class="event">
            <img style="width:300px; 
                  height:300px" src="./img/clientes.png" alt="" />
            <h3>ALCANCE NOVOS CLIENTES</h3>
            <p>
              Encontre o público certo para sua empresa através do marketing digital
            </p>
            <a href="#" class="btn">SAIBA MAIS </a>
          </div>

    
      <div class="event">

        <img style="width:300px; 
               height:300px" src="./img/adicione.png" alt="" />

        <h3>ADICIONE SEU MATERIAL</h3>
        <p>
          Adicione seu material e contribua com nosso site
        </p>
        <a href="./adiciona/?controller=alumno&action=register" class="btn">Adicionar</a>
      </div>
      </div>
      </div>
    </section>

    <section id="explore">
      <div class="background-overlay"></div>
      <div class="container">
        <div id="explore-content">
          <div>
            <h2 class="section-title"> CONHEÇA A HISTÓRIA DO MARKETING DIGITAL</h2>
            <hr class="divider" />
            <p>
              A HISTÓRIA DO MARKETING DIGITAL: SURGIMENTO, EVOLUÇÃO E MUDANÇAS
            </p>
            <a href="#" class="btn">SAIBA MAIS</a>
          </div>

          <div class="upcoming-tours-img">
          </div>
        </div>
    </section>

    <section id="upcoming-tours">
      <div class="container">
        <div>
          <h2 class="section-title">CASO DE SUCESSO </h2>
          <hr class="divider" />
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias aut nihil inventore, maxime est odio ipsam
            non minima, cupiditate debitis natus quae, et consequuntur. Maxime saepe eos nobis unde neque?
          </p>
          <a href="#" class="btn">SAIBA MAIS</a>
        </div>
        <div class="upcoming-tours-img">
          <img src="./img/uso.png" alt="" />
        </div>
        <div class="upcoming-tours-img">

        </div>
      </div>
    </section>
  </main>

  <footer id="page-footer">
    <div class="container" id="body">

    </div>
  </footer>


</body>

</html>