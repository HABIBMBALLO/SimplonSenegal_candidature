<!-- Main Sidebar Container -->
<aside class="main-sidebar bg-danger text-white elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="{{ asset('/dist/img/logo simplon.png')}}"  class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"> Simplon Senegal</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar ">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex text-white">
        <div class="image">
          <img src="{{ asset ('/dist/img/profile.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block color-white text-white">{{Auth::user()->name}}</a>
        </div>
      </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu" data-accordion="false">
      
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy text-white"></i>
              <p class="text-white">
               Gestion des candidats
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('candidats.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon text-white"></i>
                  <p class="text-white">Liste des candidats</p>
                </a>
              </li>       
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie text-white"></i>
              <p class="text-white">
                Gestion des appelCandidatures
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route ('appels.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon text-white"></i>
                  <p class="text-white">Lancer un appelCandidatures</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-white"></i>
                  <p class="text-white">Liste des appelCandidatures</p>
                </a>
              </li> -->
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy text-white"></i>
              <p class="text-white">
               Gestion des Formations
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('formations.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon text-white"></i>
                  <p class="text-white">Ajouter une Formations</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('formations.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon text-white"></i>
                  <p class="text-white">Liste des Formations</p>
                </a>
              </li>
         
          <li class="nav-header"></li>
          <li class="nav-item">
            <form method="POST" action="{{route('logout')}}">
                @csrf
                <input type="submit" class="btn text-white" value="Déconnexion">
            </form>
            <i class="bi bi-box-arrow-right"></i>
              
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
