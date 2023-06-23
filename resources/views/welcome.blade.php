<!DOCTYPE html>
<html lang="en">
<head>
<title>Ecommerce</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="assets/css/app.css">
  <style type="text/css">
    @media only screen and (min-width: 767px){
      .dropdown:hover .dropdown-menu{
      display: block;
    };
  }
  </style>
</head>
<body style="min-width: 372px;">

  <header class="py-3 mb-2 border-bottom bg-dark">
    <div class="container d-flex flex-wrap justify-content-center">
      <a href="/" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none text-white">
        <img src="images/icons8-shop-100.png" alt="" style="width:40px" class="rounded-pill bg-white me-1">
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
            <ul class="dropdown-menu col-xxl-8 col-xl-8 col-lg-8 col-md-4 col-sm-4">
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
      <div class="container">
          <div class="row justify-content-center text-center">
              <div class="col-md-8 col-lg-6">
                  <div class="header">
                      <h3>Featured Product</h3>
                      <h2>Popular Products</h2>
                  </div>
              </div>
          </div>
          <div class="row">
              <!-- Single Product -->
              <div class="col-md-6 col-lg-4 col-xl-3">
                  <div id="product-1" class="single-product">
                      <div class="part-1">
                          <ul>
                              <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                              <li><a href="#"><i class="fas fa-heart"></i></a></li>
                              <li><a href="#"><i class="fas fa-plus"></i></a></li>
                              <li><a href="#"><i class="fas fa-expand"></i></a></li>
                          </ul>
                      </div>
                      <div class="part-2">
                          <h3 class="product-title">Notebook Samsung Book X20 Np550 Core I5-10210u Ram 4gb Hd 1tb Ssd 120gb Tela 15.6'</h3>
                          <h4 class="product-old-price">$79.99</h4>
                          <h4 class="product-price">$49.99</h4>
                      </div>
                  </div>
              </div>
              <!-- Single Product -->
              <div class="col-md-6 col-lg-4 col-xl-3">
                  <div id="product-2" class="single-product">
                      <div class="part-1">
                          <span class="discount">15% off</span>
                          <ul>
                              <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                              <li><a href="#"><i class="fas fa-heart"></i></a></li>
                              <li><a href="#"><i class="fas fa-plus"></i></a></li>
                              <li><a href="#"><i class="fas fa-expand"></i></a></li>
                          </ul>
                      </div>
                      <div class="part-2">
                          <h3 class="product-title">Here Product Title</h3>
                          <h4 class="product-price">$49.99</h4>
                      </div>
                  </div>
              </div>
              <!-- Single Product -->
              <div class="col-md-6 col-lg-4 col-xl-3">
                  <div id="product-3" class="single-product">
                      <div class="part-1">
                          <ul>
                              <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                              <li><a href="#"><i class="fas fa-heart"></i></a></li>
                              <li><a href="#"><i class="fas fa-plus"></i></a></li>
                              <li><a href="#"><i class="fas fa-expand"></i></a></li>
                          </ul>
                      </div>
                      <div class="part-2">
                          <h3 class="product-title">Here Product Title</h3>
                          <h4 class="product-old-price">$79.99</h4>
                          <h4 class="product-price">$49.99</h4>
                      </div>
                  </div>
              </div>
              <!-- Single Product -->
              <div class="col-md-6 col-lg-4 col-xl-3">
                  <div id="product-4" class="single-product">
                      <div class="part-1">
                          <span class="new">new</span>
                          <ul>
                              <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                              <li><a href="#"><i class="fas fa-heart"></i></a></li>
                              <li><a href="#"><i class="fas fa-plus"></i></a></li>
                              <li><a href="#"><i class="fas fa-expand"></i></a></li>
                          </ul>
                      </div>
                      <div class="part-2">
                          <h3 class="product-title">Here Product Title</h3>
                          <h4 class="product-price">$49.99</h4>
                      </div>
                  </div>
              </div>
              <!-- Single Product -->
              <div class="col-md-6 col-lg-4 col-xl-3">
                  <div id="product-1" class="single-product">
                      <div class="part-1">
                          <ul>
                              <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                              <li><a href="#"><i class="fas fa-heart"></i></a></li>
                              <li><a href="#"><i class="fas fa-plus"></i></a></li>
                              <li><a href="#"><i class="fas fa-expand"></i></a></li>
                          </ul>
                      </div>
                      <div class="part-2">
                          <h3 class="product-title">Here Product Title</h3>
                          <h4 class="product-old-price">$79.99</h4>
                          <h4 class="product-price">$49.99</h4>
                      </div>
                  </div>
              </div>
              <!-- Single Product -->
              <div class="col-md-6 col-lg-4 col-xl-3">
                  <div id="product-2" class="single-product">
                      <div class="part-1">
                          <span class="discount">15% off</span>
                          <ul>
                              <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                              <li><a href="#"><i class="fas fa-heart"></i></a></li>
                              <li><a href="#"><i class="fas fa-plus"></i></a></li>
                              <li><a href="#"><i class="fas fa-expand"></i></a></li>
                          </ul>
                      </div>
                      <div class="part-2">
                          <h3 class="product-title">Here Product Title</h3>
                          <h4 class="product-price">$49.99</h4>
                      </div>
                  </div>
              </div>
              <!-- Single Product -->
              <div class="col-md-6 col-lg-4 col-xl-3">
                  <div id="product-3" class="single-product">
                      <div class="part-1">
                          <ul>
                              <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                              <li><a href="#"><i class="fas fa-heart"></i></a></li>
                              <li><a href="#"><i class="fas fa-plus"></i></a></li>
                              <li><a href="#"><i class="fas fa-expand"></i></a></li>
                          </ul>
                      </div>
                      <div class="part-2">
                          <h3 class="product-title">Here Product Title</h3>
                          <h4 class="product-old-price">$79.99</h4>
                          <h4 class="product-price">$49.99</h4>
                      </div>
                  </div>
              </div>
              <!-- Single Product -->
              <div class="col-md-6 col-lg-4 col-xl-3">
                  <div id="product-4" class="single-product">
                      <div class="part-1">
                          <span class="new">new</span>
                          <ul>
                              <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                              <li><a href="#"><i class="fas fa-heart"></i></a></li>
                              <li><a href="#"><i class="fas fa-plus"></i></a></li>
                              <li><a href="#"><i class="fas fa-expand"></i></a></li>
                          </ul>
                      </div>
                      <div class="part-2">
                          <h3 class="product-title">Here Product Title</h3>
                          <h4 class="product-price">$49.99</h4>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
    
    
    <!-- ========================= SECTION  ========================= -->
    <section class="section-name padding-y bg">
    <div class="container">
    
    <div class="row">
    <div class="col-md-6">
        <h3>Download app demo text</h3>
        <p>Get an amazing app  to make Your life easy</p>
    </div>
    <div class="col-md-6 text-md-end">
        <a href="#"><img src="assets/images/misc/appstore.png" height="40"></a>
        <a href="#"><img src="assets/images/misc/appstore.png" height="40"></a>
    </div>
    </div> <!-- row.// -->
    </div><!-- container // -->
    </section>
    <!-- ========================= SECTION  END// ======================= -->
    
    
    
    <!-- ========================= FOOTER ========================= -->
  <footer class="section-footer border-top bg">
    <div class="container">
      <section class="footer-top  padding-y">
        <div class="row">
          <aside class="col-md col-6">
            <h6 class="title">Brands</h6>
            <ul class="list-unstyled">
              <li> <a href="#">Adidas</a></li>
              <li> <a href="#">Puma</a></li>
              <li> <a href="#">Reebok</a></li>
              <li> <a href="#">Nike</a></li>
            </ul>
          </aside>
          <aside class="col-md col-6">
            <h6 class="title">Company</h6>
            <ul class="list-unstyled">
              <li> <a href="#">About us</a></li>
              <li> <a href="#">Career</a></li>
              <li> <a href="#">Find a store</a></li>
              <li> <a href="#">Rules and terms</a></li>
              <li> <a href="#">Sitemap</a></li>
            </ul>
          </aside>
          <aside class="col-md col-6">
            <h6 class="title">Help</h6>
            <ul class="list-unstyled">
              <li> <a href="#">Contact us</a></li>
              <li> <a href="#">Money refund</a></li>
              <li> <a href="#">Order status</a></li>
              <li> <a href="#">Shipping info</a></li>
              <li> <a href="#">Open dispute</a></li>
            </ul>
          </aside>
          <aside class="col-md col-6">
            <h6 class="title">Account</h6>
            <ul class="list-unstyled">
              <li> <a href="#"> User Login </a></li>
              <li> <a href="#"> User register </a></li>
              <li> <a href="#"> Account Setting </a></li>
              <li> <a href="#"> My Orders </a></li>
            </ul>
          </aside>
          <aside class="col-md">
            <h6 class="title">Social</h6>
            <ul class="list-unstyled">
              <li><a href="#"> <i class="fab fa-facebook"></i> Facebook </a></li>
              <li><a href="#"> <i class="fab fa-twitter"></i> Twitter </a></li>
              <li><a href="#"> <i class="fab fa-instagram"></i> Instagram </a></li>
              <li><a href="#"> <i class="fab fa-youtube"></i> Youtube </a></li>
            </ul>
          </aside>
        </div> <!-- row.// -->
      </section>  <!-- footer-top.// -->
  
      <section class="footer-bottom row">
        <div class="col-md-2">
          <p class="text-muted">   2021 Company name </p>
        </div>
        <div class="col-md-8 text-md-center">
          <span  class="px-2">info@com</span>
          <span  class="px-2">+000-000-0000</span>
          <span  class="px-2">Street name 123, ABC</span>
        </div>
        <div class="col-md-2 text-md-end text-muted">
          <i class="fab fa-lg fa-cc-visa"></i> 
          <i class="fab fa-lg fa-cc-paypal"></i> 
          <i class="fab fa-lg fa-cc-mastercard"></i>
        </div>
      </section>
    </div><!-- //container -->
  </footer>
  <!-- ========================= FOOTER END // ========================= -->

</body>
</html>