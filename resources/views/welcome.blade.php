<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Ecommerce</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="assets/css/app.css">
  {{-- <link rel="stylesheet" type="text/css" href="bootstrap-icons-1.10.5/font/bootstrap-icons.css"> --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <style type="text/css">
    @media only screen and (min-width: 767px){
      .dropdown:hover .dropdown-menu{
      display: block;
    };
  }
  </style>
</head>
<body style="min-width: 280px;">

  <header class="py-3 mb-2 border-bottom bg-dark">
    <div class="container d-flex flex-wrap justify-content-center">
      <a href="/" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none text-white">
        <img src="images/icons8-shop-100.png" alt="" style="width:40px" class="rounded-4-pill bg-white me-1">
        <span class="fs-4">Nome da loja</span>
      </a>
      <form class="col-12 col-lg-8 mb-3 mb-lg-0" role="search">
        <input type="search" class="form-control" placeholder="Buscar produto..." aria-label="Buscar">
      </form>
    </div>
  </header>

  <nav class="navbar navbar-expand-md bg-dark">
    <div class="container-fluid">
      <span type="button" class="navbar-toggler bg-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <span class="navbar-toggler-icon"></span>
        {{-- <span class="text-dark">Menu</span> --}}
      </span>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categorias
            </a>
            <ul class="dropdown-menu dropdown-menu-custom">
              <li><a class="dropdown-item text-dark" href="#">Informática</a></li>
              <li><a class="dropdown-item text-dark" href="#">Utilidades domésticas</a></li>
              {{-- <li><hr class="dropdown-divider"></li> --}}
              <li><a class="dropdown-item text-dark" href="#">Eletrodomésticos</a></li>
            </ul>
          </li>
          <li class="nav-item d-none d-md-block">
            <a class="nav-link btn btn-outline-primary text-white" aria-current="page" href="#">Informática</a>
          </li>
          <li class="nav-item d-none d-md-block">
            <a class="nav-link btn btn-outline-primary text-white" href="#">Utilidades domésticas</a>
          </li>
          <li class="nav-item d-none d-md-block">
            <a class="nav-link btn btn-outline-primary text-white">Eletrodomésticos</a>
          </li>
        </ul>
      </div>
      {{-- Modal para telas menores --}}
      <!-- Modal -->
      <div class="limitModal d-block d-md-none">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Categorias</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="list-group">
                  <a href="#" class="list-group-item list-group-item-action">Informática</a>
                  <a href="#" class="list-group-item list-group-item-action">Utilidades domésticas</a>
                  <a href="#" class="list-group-item list-group-item-action">Eletrodomésticos</a>
                  <a href="#" class="list-group-item list-group-item-action">Móveis</a>
                  <a href="#" class="list-group-item list-group-item-action">Telefones & Celulares</a>
                  <a href="#" class="list-group-item list-group-item-action">Brinquedos</a>
                  <a href="#" class="list-group-item list-group-item-action">Games</a>
                  <a href="#" class="list-group-item list-group-item-action">Gift Cards</a>
                  <a href="#" class="list-group-item list-group-item-action">Livros</a>
                  <a href="#" class="list-group-item list-group-item-action">Instrumentos Musicais</a>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>

    
    
    <!-- ========================= SECTION MAIN ========================= -->
    
    <!-- ========================= SECTION MAIN END// ========================= -->
    
    <!-- ========================= SECTION  ========================= -->
    <section class="section-name padding-y-sm">
    <div class="container">
    
    <header class="section-heading">
        <h3 class="section-title my-4">Mais vendidos</h3>
    </header><!-- sect-heading -->
    
    <!-- ========================= SECTION  END// ========================= -->

    <section class="section-products">
      <div class="">
          <div class="row justify-content-center text-center">
              <div class="col-md-8 col-lg-6">
                  <div class="header">
                      <h3>Todos produtos</h3>
                      <h2>Mais populares</h2>
                  </div>
              </div>
          </div>
          {{-- sessão reservada para produtos --}}

          {{-- responsividade dos cards na classe row --}}
          {{-- row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 --}}
          <div class="row row-cols-sm-12 row-cols-md-6 row-cols-lg-4 row-cols-xl-3">
              <!-- Card produto com desconto -->
              {{-- responsividade dos cards na div do card --}}
              {{-- col-md-6 col-lg-4 col-xl-3 --}}
              <div class="col-md-6 col-lg-4 col-xl-3">
                  <div id="product-1" class="single-product rounded-4">
                      <div class="product_card_icons">
                        <img src="images/product-example/notebook.webp" alt="" class="product_thumbnail">
                        <span class="discount rounded-2">-15%</span>
                          <ul>
                              <li><a href="#"><i class="bi bi-cart-fill"></i></i></a></li>
                              <li><a href="#"><i class="bi bi-heart-fill"></i></a></li>
                              <li><a href="#"><i class="bi bi-plus-square-fill"></i></a></li>
                              <li><a href="#"><i class="bi bi-fullscreen"></i></a></li>
                          </ul>
                      </div>
                      <div class="product_card_info">
                          <h3 class="product-title"><a href="/product_details">Notebook Samsung Book X20 Np550 Core I5-10210u Ram 4gb Hd 1tb Ssd 120gb Tela 15.6'</a></h3>
                          <h4 class="product-old-price">R$3.999.99</h4>
                          <h4 class="product-price">R$3.399.00</h4>
                      </div>
                  </div>
              </div>
              <!-- Card produto padrão -->
              <div class="col-md-6 col-lg-4 col-xl-3">
                  <div id="product-2" class="single-product rounded-4">
                      <div class="product_card_icons">
                        <img src="images/fone-sf.webp" alt="" class="product_thumbnail">
                          <ul>
                            <li><a href="#"><i class="bi bi-cart-fill"></i></i></a></li>
                            <li><a href="#"><i class="bi bi-heart-fill"></i></a></li>
                            <li><a href="#"><i class="bi bi-plus-square-fill"></i></a></li>
                            <li><a href="#"><i class="bi bi-fullscreen"></i></a></li>
                          </ul>
                      </div>
                      <div class="product_card_info">
                          <h3 class="product-title">Fone ouvido sem fio BLUETOOTH Celular PEQUENO DISCRETO ALTO</h3>
                          <h4 class="product-price">R$55.10</h4>
                      </div>
                  </div>
              </div>
              <!-- Card produto com desconto -->
              <div class="col-md-6 col-lg-4 col-xl-3">
                  <div id="product-3" class="single-product rounded-4">
                      <div class="product_card_icons">
                        <img src="images/carregador.webp" alt="" class="product_thumbnail">
                        <span class="discount rounded-2">-30%</span>
                          <ul>
                            <li><a href="#"><i class="bi bi-cart-fill"></i></i></a></li>
                            <li><a href="#"><i class="bi bi-heart-fill"></i></a></li>
                            <li><a href="#"><i class="bi bi-plus-square-fill"></i></a></li>
                            <li><a href="#"><i class="bi bi-fullscreen"></i></a></li>
                          </ul>
                      </div>
                      <div class="product_card_info">
                          <h3 class="product-title">CARREGADOR TURBO ALTOMEX USB</h3>
                          <h4 class="product-old-price">R$24.99</h4>
                          <h4 class="product-price">R$17.49</h4>
                      </div>
                  </div>
              </div>
              <!-- Card produto novo -->
              <div class="col-md-6 col-lg-4 col-xl-3">
                  <div id="product-4" class="single-product rounded-4">
                      <div class="product_card_icons">
                        <img src="images/cx-de-som.webp" alt="" class="product_thumbnail">
                          <span class="new rounded-2">Novo</span>
                          <ul>
                            <li><a href="#"><i class="bi bi-cart-fill"></i></i></a></li>
                            <li><a href="#"><i class="bi bi-heart-fill"></i></a></li>
                            <li><a href="#"><i class="bi bi-plus-square-fill"></i></a></li>
                            <li><a href="#"><i class="bi bi-fullscreen"></i></a></li>
                          </ul>
                      </div>
                      <div class="product_card_info">
                          <h3 class="product-title">CAIXA DE SOM SABALA DR-102</h3>
                          <h4 class="product-price">R$461.25</h4>
                      </div>
                  </div>
              </div>
              <!-- Card produto padrão -->
              <div class="col-md-6 col-lg-4 col-xl-3">
                <div id="product-1" class="single-product rounded-4">
                    <div class="product_card_icons">
                      <img src="images/smartwatch.jpg" alt="" class="product_thumbnail">
                        <ul>
                            <li><a href="#"><i class="bi bi-cart-fill"></i></i></a></li>
                            <li><a href="#"><i class="bi bi-heart-fill"></i></a></li>
                            <li><a href="#"><i class="bi bi-plus-square-fill"></i></a></li>
                            <li><a href="#"><i class="bi bi-fullscreen"></i></a></li>
                        </ul>
                    </div>
                    <div class="product_card_info">
                        <h3 class="product-title">Smartband HUAWEI Band 8, Design Ultra-fino, 14 dias de duração da bateria</h3>
                        <h4 class="product-price">R$229.00</h4>
                    </div>
                </div>
            </div>
            <!-- Card produto padrão -->
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div id="product-2" class="single-product rounded-4">
                    <div class="product_card_icons">
                      <img src="images/controle.jpg" alt="" class="product_thumbnail">
                        <ul>
                          <li><a href="#"><i class="bi bi-cart-fill"></i></i></a></li>
                          <li><a href="#"><i class="bi bi-heart-fill"></i></a></li>
                          <li><a href="#"><i class="bi bi-plus-square-fill"></i></a></li>
                          <li><a href="#"><i class="bi bi-fullscreen"></i></a></li>
                        </ul>
                    </div>
                    <div class="product_card_info">
                        <h3 class="product-title">Controle remoto universal para todos os televisores Samsung, substituição para todos os televisores LCD LED HDTV 3D Smart Samsung</h3>
                        <h4 class="product-price">R$19.99</h4>
                    </div>
                </div>
            </div>
            <!-- Card produto novo -->
            <div class="col-md-6 col-lg-4 col-xl-3">
              <div id="product-4" class="single-product rounded-4">
                  <div class="product_card_icons">
                    <img src="images/furadeira.jpg" alt="" class="product_thumbnail">
                      <span class="new rounded-2">Novo</span>
                      <ul>
                        <li><a href="#"><i class="bi bi-cart-fill"></i></i></a></li>
                        <li><a href="#"><i class="bi bi-heart-fill"></i></a></li>
                        <li><a href="#"><i class="bi bi-plus-square-fill"></i></a></li>
                        <li><a href="#"><i class="bi bi-fullscreen"></i></a></li>
                      </ul>
                  </div>
                  <div class="product_card_info">
                      <h3 class="product-title">Skil Furadeira De Impacto 6600 570W 220V Com Chave De Mandril</h3>
                      <h4 class="product-price">R$170.00</h4>
                  </div>
              </div>
          </div>
            <!-- Card produto com desconto -->
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div id="product-3" class="single-product rounded-4">
                    <div class="product_card_icons">
                      <img src="images/teclado-mouse.jpg" alt="" class="product_thumbnail">
                      <span class="discount rounded-2">-20%</span>
                        <ul>
                          <li><a href="#"><i class="bi bi-cart-fill"></i></i></a></li>
                          <li><a href="#"><i class="bi bi-heart-fill"></i></a></li>
                          <li><a href="#"><i class="bi bi-plus-square-fill"></i></a></li>
                          <li><a href="#"><i class="bi bi-fullscreen"></i></a></li>
                        </ul>
                    </div>
                    <div class="product_card_info">
                        <h3 class="product-title">Teclado e Mouse Sem Fio 2.4 Ghz Multimídia USB Slim - TC202</h3>
                        <h4 class="product-old-price">R$199.99</h4>
                        <h4 class="product-price">R$159.99</h4>
                    </div>
                </div>
            </div>
          </div>
      </div>
  </section>
    
    
    <!-- ========================= SECTION  ========================= -->
    <section class="section-name padding-y bg text-white lower-section">
    <div class="container">
    
    <div class="row">
    <div class="col-md-6">
        <h3 class="fw-bold">Baixe nosso app</h3>
        <p class="fw-bold">Compre com mais facilidade e fique por dentro das novidades</p>
    </div>
    <div class="col-md-6 text-md-end">
        <a href="#"><img src="images/playstore-icon.webp" height="40"></a>
        <a href="#"><img src="images/app-store.png" height="40"></a>
    </div>
    </div> <!-- row.// -->
    </div><!-- container // -->
    </section>
    <!-- ========================= SECTION  END// ======================= -->
    
    
    
    <!-- ========================= FOOTER ========================= -->
  <footer class="section-footer border-top bg-dark text-white">
    <div class="container">
      <section class="footer-top  padding-y">
        <div class="row">
          <aside class="col-md col-6">
            <h6 class="ft-title">Marcas</h6>
            <ul class="list-unstyled">
              <li> <a href="#">Samsung</a></li>
              <li> <a href="#">Apple</a></li>
              <li> <a href="#">JBL</a></li>
              <li> <a href="#">Sony</a></li>
            </ul>
          </aside>
          <aside class="col-md col-6">
            <h6 class="ft-title">Nome da loja</h6>
            <ul class="list-unstyled">
              <li> <a href="#">Página inicial</a></li>
              <li> <a href="#">Sobre nós</a></li>
              <li> <a href="#">Find a store</a></li>
              <li> <a href="#">Termos e condiçoes</a></li>
              <li> <a href="#">Contato</a></li>
            </ul>
          </aside>
          <aside class="col-md col-6">
            <h6 class="ft-title">Ajuda</h6>
            <ul class="list-unstyled">
              <li> <a href="#">Contato</a></li>
              <li> <a href="#">Avaliações</a></li>
              <li> <a href="#">Reclamações</a></li>
              <li> <a href="#">Sugestões</a></li>
            </ul>
          </aside>
          <aside class="col-md col-6">
            <h6 class="ft-title">Conta</h6>
            <ul class="list-unstyled">
              <li> <a href="#"> Entrar </a></li>
              <li> <a href="#"> Cadastrar-se </a></li>
              <li> <a href="#"> Seu perfil </a></li>
              <li> <a href="#"> Seus pedidos </a></li>
            </ul>
          </aside>
          <aside class="col-md">
            <h6 class="ft-title">Social</h6>
            <ul class="list-unstyled">
              <li><a href="#"> <i class="bi bi-facebook icon-facebook"></i> Facebook </a></li>
              <li><a href="#"> <i class="bi bi-instagram icon-instagram"></i> Instagram </a></li>
              <li><a href="#"> <i class="bi bi-youtube icon-youtube"></i> Youtube </a></li>
            </ul>
          </aside>
        </div> <!-- row.// -->
      </section>  <!-- footer-top.// -->
  
      <section class="footer-bottom row">
        <div class="col-md-2">
          <p class="text-muted"> 2023 Nome da loja </p>
        </div>
        <div class="col-md-8 text-md-center">
          <span  class="px-2">nomedaloja@com</span>
          <span  class="px-2">+000-000-0000</span>
          <span  class="px-2">Endereço, Brasil, RS</span>
        </div>
        <div class="col-md-2 text-md-end text-muted">
          <i class="fab fa-lg fa-cc-visa"></i> 
          <i class="bi bi-paypal"></i>
          <i class="fab fa-lg fa-cc-mastercard"></i>
        </div>
      </section>
    </div><!-- //container -->
  </footer>
  <!-- ========================= FOOTER END // ========================= -->

</body>
</html>