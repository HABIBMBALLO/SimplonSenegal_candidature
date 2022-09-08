<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simplon</title>
  <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
  <title>Carousel Template for Bootstrap</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/carousel/">
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('plugins/dist/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- CSS only -->
 <link href="{{ asset ('https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
 <link rel="stylesheet" href="{{ asset ('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/11.0.2/css/bootstrap-slider.min.css') }}" integrity="sha512-3q8fi8M0VS+X/3n64Ndpp6Bit7oXSiyCnzmlx6IDBLGlY5euFySyJ46RUlqIVs0DPCGOypqP8IRk/EyPvU28mQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom styles for this template -->
  <link href="carousel.css" rel="stylesheet">
  <link href="/resources/css/app.css" rel="stylesheet">

</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a href="https://senegal.simplon.co/" class="navbar-brand">
                <img src="dist/img/simplon.png" height="28" alt="logo">
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="https://senegal.simplon.co/" class="nav-link">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://senegal.simplon.co/about" class="nav-link">A propos</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://senegal.simplon.co/about" class="nav-link">Formation</a>
                    </li>
                    </li>    

                </div>
                <div class="navbar-nav ms-auto">
                    <a href="" class="nav-item nav-link btn-danger">Login</a>
                    <a href="{{url ('/Logout')}}" class="nav-item nav-link">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    </header>

    <main role="main">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="dist/img/IMG-20211104-WA0026.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Developpement web et web mobile</h5>
        <p>Le développeur web mobile est un concepteur spécialisé en application mobile.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="dist/img/christopher-gower-m_HRfLhgABo-unsplash.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Referent Digital</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="dist/img/alexandru-acea-XEB8y0nRRP4-unsplash.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>ADEFIPA</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev btn-danger" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next btn-danger" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="/dist/img/undraw_web_developer_re_h7ie.svg" alt="Generic placeholder image" width="140" height="140">
            <h2>Web Developper</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <p><a class="btn btn-secondary" href="{{route('candidats.create')}}" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="/dist/img/undraw_react_re_g3ui.svg" alt="Generic placeholder image" width="140" height="140">
            <h2>Referent Digital</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="/dist/img/undraw_firmware_re_fgdy.svg" alt="Generic placeholder image" width="140" height="140">
            <h2>ADEFIPA</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider"><br><br>

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">web developer<span class="text-muted"></span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.
               Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="/dist/img/undraw_web_developer_re_h7ie.svg">
          </div>
        </div>

        <hr class="featurette-divider">
        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Referent Digital<span class="text-muted"></span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis 
              euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac 
              cursus commodo.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto"  src="/dist/img/undraw_firmware_re_fgdy.svg" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">ADEFIPA<span class="text-muted"></span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, 
              vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="/dist/img/undraw_react_re_g3ui.svg" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->

        <!-- ======= Footer ======= -->
  <footer id="footer" class="bg-dark">

<div class="footer-top ">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact text-white">
        <h3>Presento<span>.</span></h3>
        <p>
          A108 Adam Street <br>
          New York, NY 535022<br>
          United States <br><br>
          <strong>Phone:</strong> +1 5589 55488 55<br>
          <strong>Email:</strong> info@example.com<br>
        </p>
      </div>

      <div class="col-lg-2 col-md-6 footer-links text-white">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right text-white"></i> <a href="#">Home</a></li>
          <li><i class="bx bx-chevron-right text-white"></i> <a href="#">About us</a></li>
          <li><i class="bx bx-chevron-right text-white"></i> <a href="#">Services</a></li>
          <li><i class="bx bx-chevron-right text-white"></i> <a href="#">Terms of service</a></li>
          <li><i class="bx bx-chevron-right text-white"></i> <a href="#">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links text-white">
        <h4>Our Services</h4>
        <ul>
          <li><i class="bx bx-chevron-right text-white"></i> <a href="#">Web Design</a></li>
          <li><i class="bx bx-chevron-right text-white"></i> <a href="#">Web Development</a></li>
          <li><i class="bx bx-chevron-right text-white"></i> <a href="#">Product Management</a></li>
          <li><i class="bx bx-chevron-right text-white"></i> <a href="#">Marketing</a></li>
          <li><i class="bx bx-chevron-right text-white"></i> <a href="#">Graphic Design</a></li>
        </ul>
      </div>

      <div class="col-lg-4 col-md-6 footer-newsletter text-white ">
        <h4>Join Our Newsletter</h4>
        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
        <form action="" method="post">
          <input type="email" name="email"><input type="submit" value="Subscribe">
        </form>
      </div>

    </div>
  </div>
</div>

<div class="container d-md-flex py-4 text-white">

  <div class="me-md-auto text-center text-md-start">
    <div class="copyright">
      &copy; Copyright <strong><span>Presento</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/presento-bootstrap-corporate-template/ -->
      Designed by <a href="https://senegal.simplon.co/">Simplon Senegal</a>
    </div>
  </div>
  <div class="social-links text-center text-md-end pt-3 pt-md-0">
    <a href="#" class="twitter"><i class=" bx bxl-twitter-danger"></i></a>
    <a href="#" class="facebook"><i class=" bx bxl-facebook-danger"></i></a>
    <a href="#" class="instagram"><i class=" bx bxl-instagram danger"></i></a>
    <a href="#" class="google-plus"><i class=" bx bxl-skype danger"></i></a>
    <a href="#" class="linkedin"><i class=" bx bxl-linkedin danger"></i></a>
  </div>
</div>
</footer><!-- End Footer -->
    </main>

   <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset ('https://code.jquery.com/jquery-3.2.1.slim.min.js')}}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="{{asset ('../../assets/js/vendor/popper.min.js') }}"></script>
    <!-- <script src="../../dist/js/bootstrap.min.js"></script> -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js')}}" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="{{ asset ('https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js')}}" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html>