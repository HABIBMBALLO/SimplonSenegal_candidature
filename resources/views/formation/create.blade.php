@extends('layouts.master')

@section('content')

              
<div class="container-fluid d-flex justify-content-center">
        <div class="row">
          <!-- left column -->
          <div class="col-md-10"><br><br>
            <!-- general form elements -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Formations</h3> 
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/formations/store" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1" required="titre formation">titre formation</label>
                    <input type="text" class="form-control" id="titre formation" placeholder="Enter titre formation" name="titreformation">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input type="text" class="form-control" id="exampleInputDescription" placeholder="Description" name="description">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Cible</label>
                    <input type="text" class="form-control" id="Cible" placeholder="Enter Cible" name="cible">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Duree</label>
                    <input type="number" class="form-control" id="Duree" placeholder="entrer duree" name="duree">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">type formation</label>
                    <input type="text" class="form-control" id="type formation" placeholder="Enter type formation" name="typeformation">
                  </div>
                  <!-- <div class="form-group">
                    <label for="exampleInputEmail1">appel_candidature_id</label>
                    <input type="number" class="form-control" id="type formation" placeholder="Enter type formation" name="appel_candidature_id">
                  </div> -->
    
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-danger">Envoyer</button>
                </div>
              </form>
            </div>

    

@endsection