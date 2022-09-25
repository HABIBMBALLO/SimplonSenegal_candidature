<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simplon</title>
  <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
  <title>Carousel Template for Bootstrap</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                  <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                    @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-1 py-1 sm:block">
                    @auth
                        <a href="{{ url('/master') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Connecté</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                    </div>
                    @endif       
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
        <div class="col-md  col-sm-12 row row-cols-1 row-cols-sm-2 row-cols-lg-3c x ">
          @foreach ($appelCandidatures as $appelCandidature)
          <div class="col-lg-4 shadow-sm h-100  sp-rounded-top-15 sp-rounded-bottom-15">
            <img class="rounded-circle" src="/dist/img/undraw_web_developer_re_h7ie.svg" alt="Generic placeholder image" width="140" height="140">
            <h2>{{$appelCandidature->titre}}</h2>
            <p>{{$appelCandidature->description}}<p>
            <p><span>Date Fin :</span>{{$appelCandidature->dateDebut}}</p>
            <p><span>Date Fin :</span>{{$appelCandidature->dateFin}}</p>
              <a class="btn btn-secondary" href="{{route('candidats.create')}}" role="button">Postuler &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          @endforeach
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
<!-- =============================== Nous contacter =============================== -->
<section class="container contact">
  <h2 class="sec-title">Nous Contacter</h2>
  <div class="row">
    <form class="col-lg me-lg-5" action="#">
      <div class="d-lg-flex justify-content-between mb-lg-3">
        <input class="champ me-lg-5" type="text" name="firstname" id="firstname" placeholder="Prénom *">
        <input class="champ" type="text" name="lastname" id="lastname" placeholder="Nom *">
      </div>
      <div class="d-lg-flex justify-content-between mb-lg-3">
        <input class="champ me-lg-5" type="email" name="email" id="email" placeholder="Email *">
        <input class="champ" type="tel" name="tel" id="tel" placeholder="Téléphone *">
      </div>
      <textarea class="champ" placeholder="Message" name="message" id="message">
      </textarea>
      <input class="me-2" type="checkbox" name="check" id="check">
      <label for="check">I agree to <span class="terms">terms et policy</span></label>
      <input class="btn d-block my-4" type="submit" value="Envoyer">
      <p class="indications">* These fields are required</p>
    </form>

    <div class="col-lg-4 ms-lg-5 mt-5 coord">
      <div class="adress d-flex mb-5">
        <i class="fas fa-map-marker-alt fa-2x mt-1"></i>
        <div class="ms-lg-5">
          <h4 class="mb-lg-3">Adresse</h4>
          <p>Cité keur Goor Gi <br>
            Dakar, Sicap, Libeté 2 <br>
            Senegal
          </p>
        </div>
      </div>
      <div class="tel d-flex mb-5">
        <i class="fas fa-phone-alt fa-2x mt-1" aria-hidden="true"></i>
        <div class="ms-lg-5">
          <h4 class="mb-lg-3">Téléphone</h4>
          <p>(221) 77 456 78 90 <br>
            (221) 77 654 32 10  <br>
          </p>
        </div>
      </div>
      <div class="email d-flex mb-5">
        <i class="fas fa-envelope fa-2x mt-1" aria-hidden="true"></i>
        <div class="ms-lg-5">
          <h4 class="mb-3">E-mail</h4>
          <p>simplon@email.com <br>
            help@simplon.com
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
    <!-- Section footer -->
    <footer class="sp-footer ">
        <div class="row pt-5 mt-5 text-white d-inline-block row-cols-1 row-cols-sm-2 row-cols-lg-4 d-sm-flex justfy-sm-content-around w-100 gap-0 gap-sm-0 ps-5">
            <div class="logo-icons col col ps-md-0 px-lg-0  my-2 d-lg-flex text-sm-start">
                <img src="./formations/img/logoWhiteSimplon.svg"  class="mx-lg-auto mx-auto mx-sm-0" alt="Logo simplon format blanc" width="150">
                <div class="icons my-5 mx-0 mx-auto mx-sm-0 mx-lg-auto">
                    <i class="bi bi-facebook  facebook-color"></i>
                    <i class="bi bi-twitter twitter-color"></i>
                    <i class="bi bi-youtube youtube-color"></i>
                    <i class="bi bi-instagram instagram-color"></i>
                </div>
            </div>
            <div class="col px-ms-0 my-2 my-lg-0 text-sm-start">
                <p>
                    <a href="" class="d-block sp-link-light fs-4">Voir plus</a>
                </p>
                <p>
                    <a href="" class="d-block sp-link-light my-2">Conditions d'utilisation</a>
                    <a href="" class="d-block sp-link-light my-2">Notre Histoire</a>
                    <a href="" class="d-block sp-link-light my-2">Politique de confidentialite</a>
                    <a href="" class="d-block sp-link-light my-2">FAQ</a>
                </p>
            </div>
            <div class="col px-lg-0 my-2 my-lg-0 text-center text-sm-start">
                <p class="d-block sp-link-light fs-4">Cordonnees</p>
                <p class="d-block sp-link-light ">Cite Keur Goor Gui ,<br> Sicap Liberte 6,<br> Dakar Senegal</p>
                <p>
                    <a href="" class="d-block sp-link-light my-2">simplon@gmail.com</a>
                    <a href="" class="d-block sp-link-light my-2">simplon@contactgmail.com</a>
                </p>
                <p class="d-block ">(+221) 33 234 43 32 <br> (+221) 88 348 98 43 32</p>
            </div>
            <div class="col px-lg-0 my-2 my-lg-0 text-center text-sm-start ">
                <p class="d-block sp-link-light fs-4">Notre Newsletter</p>
                <p id="newsletter-text">Souscrivez vous à notre newsletter pour ne pas manquer aucune de nos acticites
                </p>
                <p class="sp-input-group">
                    <input type="email" placeholder="email@gmail.com" id="email">
                    <input type="button" value="S'abonner" class="sp-btn-danger" id="btn-submit">
                </p>
            </div>
        </div>
        <div
            class="copyright text-white p-3 d-flex align-items-center flex-column flex-sm-row justify-content-between">
            <span>© 2021 Simplon. All rights reserved.</span>
            <span class=" ">made with <i class="bi bi-suit-heart-fill text-black"></i> <strong> by
                    SimplonP4</strong></span>
        </div>
    </footer>
    <!-- End Section footer -->

    <!-- ********************************************* -->
    <!-- Comment Scripts under Usage 1 if you use bootstrap with CDN -->
    <!-- Comment Scripts under Usage 2 if you use bootstrap on local -->
    <!-- ********************************************* -->

    <!-- ============Usage 1: Local bootstrap JavaScript ressource file! ============= -->
    <!-- <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./formations/js/script.js"></script> -->
    
    <!-- ============Usage 2: Online bootstrap JavaScript ressource file! ============= -->
    <!--                jQuery first, then Popper.js, then Bootstrap JS                 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="./formations/js/script.js"></script>
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