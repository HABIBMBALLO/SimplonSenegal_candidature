<div class="container-fluid d-flex justify-content-center">
        <div class="row">
          <!-- left column -->
          <div class="col-md-10"><br><br>
            <!-- general form elements -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Appel a Candidature </h3> 
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route ('appelCandidatures.create')}}" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Titre</label>
                    <input type="text" class="form-control" id="nom" placeholder="Enter nom" name="nom">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input type="text" class="form-control" id="exampleInputPrenom1" placeholder="prenom" name="nom">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">date debut</label>
                    <input type="number" class="form-control" id="cni" placeholder="Enter CNI" name="cni">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">date fin</label>
                    <input type="date" class="form-control" id="dateNaissance" placeholder="entrer date naissance" name="dateNaissance">
                  </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-danger">creer</button>
                </div>
              </form>
            </div>