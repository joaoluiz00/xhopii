<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="shortcut icon" href="img/logo.png"/>   
</head>
<body>
    <section class="laranja">
        <img class="logo" src="img/logo.png"><h1 class="xhopii">Xhopii</h1>
        <a class="sair" href="login.html">Sair</a>
    </section>
   <nav class="nav">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="view/cadcliente.php">Cadastro Cliente</a></li>
            <li><a href="view/cadfuncionario.php">Cadastro Funcionario</a></li>
            <li><a href="view/cadproduto.php">Cadastro Produto</a></li>
            <li><a href="view/cliente.php">Ver Cliente</a></li>
            <li><a href="view/funcionario.php">Ver Funcionario</a></li>
            <li><a href="view/verproduto.php">Ver Produto</a></li>
        </ul>
    </nav> 
    <div class="container">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>
      
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="img/carousel-1.jpg" alt="img1" style="width:100%;">
            </div>
      
            <div class="item">
              <img src="img/carousel-2.jpg" alt="img2" style="width:100%;">
            </div>
          
            <div class="item">
              <img src="img/carousel-3.jpg" alt="img3" style="width:100%;">
            </div>
            <div class="item">
                <img src="img/carousel-4.jpg" alt="img4" style="width:100%;">
              </div>
          </div>
      
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <section class="abaixo">
        <img src="img/home-promocao.png" alt="promocao">
      </section>
      <section class="descoberta">
        <H4>DESCOBERTA DO DIA</H4>
      </section>
      <section class="linha">
        <a><hr></a>
      </section>

      <div class="grid-container">
        <div class="grid-item"><a href="#"><img src="img/home.PNG" alt="Imagem 1"></a></div>
        <div class="grid-item"><a href="#"><img src="img/home.PNG" alt="Imagem 2"></a></div>
        <div class="grid-item"><a href="#"><img src="img/home.PNG" alt="Imagem 3"></a></div>
        <div class="grid-item"><a href="#"><img src="img/home.PNG" alt="Imagem 4"></a></div>
        <div class="grid-item"><a href="#"><img src="img/home.PNG" alt="Imagem 5"></a></div>
        <div class="grid-item"><a href="#"><img src="img/home.PNG" alt="Imagem 6"></a></div>
        <div class="grid-item"><a href="#"><img src="img/home.PNG" alt="Imagem 7"></a></div>
        <div class="grid-item"><a href="#"><img src="img/home.PNG" alt="Imagem 8"></a></div>
        <div class="grid-item"><a href="#"><img src="img/home.PNG" alt="Imagem 9"></a></div>
        <div class="grid-item"><a href="#"><img src="img/home.PNG" alt="Imagem 10"></a></div>
      </div>

      <footer>
        <section>
            <nav>
                <h2>ATENDIMENTO AO CLIENTE</h2>
                <a href="#">Central de Ajuda</a>
                <a href="#">Como Comprar</a>
                <a href="#">Métodos de Pagamento</a>
                <a href="#">Garantia Xhoppi</a>
                <a href="#">Devolução e Reembolso</a>
                <a href="#">Fale Conosco</a>
                <a href="#">Ouvidoria</a>
            </nav>
            <nav>
                <h2>SOBRE A XHOPPI</h2>
                <a href="#">Sobre Nós</a>
                <a href="#">Políticas Xhopii</a>
                <a href="#">Política de Privacidade</a>
                <a href="#">Programas de Filiados da Xhopii</a>
                <a href="#">Seja um Entregador Xhoppi</a>
                <a href="#">Ofertas Relâmpago</a>
                <a href="#">Xhopii Blog</a>
                <a href="#">Impresa</a>
            </nav>
            <nav class="imagens">
                <h2>PAGAMENTO</h2>
                <section>
                    <img src="img/pix.png">
                    <img src="img/boleto.png">
                    <img src="img/americane.png">
                    <img src="img/vsa.png">
                    <img src="img/master.png">
                    <img src="img/hper.png">
                    <img src="img/elo.png">
                </section>
            </nav>
            <nav>
                <h2>SIGA-NOS</h2>
                <div>
                    <i class='bx bxl-instagram-alt'></i>
                    <span>Instagram</span>
                </div>
                <div>
                    <i class='bx bxl-twitter'></i>
                    <span>Twitter</span>
                </div>
                <div>
                    <i class='bx bxl-facebook-square'></i>
                    <span>Facebook</span>
                </div>
                <div>
                    <i class='bx bxl-youtube'></i>
                    <span>Youtube</span>
                </div>
                <div>
                    <i class='bx bxl-linkedin-square' ></i>
                    <span>LinkedIn</span>
                </div>
            </nav>
            <nav class="qr-code">
                <h2>ATENDIMENTO AO CLIENTE</h2>
                <img src="img/qr-code.png" class="image-qr">
                <img src="img/play.png">
                <img src="img/appstore.png">
            </nav>
        </section>
        <div class="copyright">
            <hr>
            <div>&copy 2023 Xhoppi. Todos Direitos Acadêmicos Reservados</div>
        </div>
    </footer>
    
    
</body>
</html>