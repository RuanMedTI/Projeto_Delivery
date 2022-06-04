<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if(session_id() == '' || !isset($_SESSION)){session_start();}


?>

<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sobre nós || Ruan Lanches</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">Ruan Lanches</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li class="active"><a href="about.php">Sobre nós</a></li>
          <li><a href="products.php">Produtos</a></li>
          <li><a href="cart.php">Carrinho</a></li>
          <li><a href="orders.php">Pedidos</a></li>
          <li><a href="contact.php">Reclame Aqui</a></li>
          <?php
    
          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">Minha conta</a></li>';
            echo '<li><a href="logout.php">Logout</a></li>';
          }
          else{
            echo '<li><a href="login.php">Login</a></li>';
            echo '<li><a href="register.php">Registrar</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>

    <div class="row" style="margin-top:30px;">
      <div class="small-12">
        <p>A lanchonete Ruan Lanches foi criada com a finalidade de levar até você os melhores lanches da região serrana. 
          Devido a alta procura e o aumento de vendas pela internet notou-se 
          a necessidade de criação de um novo veículo de comunicação e vendas com o cliente.
        </p>

        <footer style="margin-top:10px;">
           <p style="text-align:center; font-size:0.8em;">&copy; Ruan Lanches. Todos os direitos reservados.</p>
        </footer>

        <footer style="margin-top:10px;">
           <p style="text-align:center; font-size:0.8em;">
            Rua Lages,
            Nº111,
            Lages - SC - 
            (49) 9999-9999
          </p>
        </footer>

      </div>
    </div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
