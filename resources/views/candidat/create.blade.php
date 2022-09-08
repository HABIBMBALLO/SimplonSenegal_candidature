@extends('layouts.master')

@section('content')

              
<div class="container-fluid d-flex justify-content-center">
        <div class="row">
          <!-- left column -->
          <div class="col-md-10"><br><br>
            <!-- general form elements -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Candidater</h3> 
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/candidats/store" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nom</label>
                    <input type="text" class="form-control" id="nom" placeholder="Enter nom" name="nom" value="{{Auth::user()->name}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Prenom</label>
                    <input type="text" class="form-control" id="exampleInputPrenom1" placeholder="prenom" name="prenom">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">CNI</label>
                    <input type="number" class="form-control" id="cni" placeholder="Enter CNI" name="cni">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">dateNaissance</label>
                    <input type="date" class="form-control" id="dateNaissance" placeholder="entrer date naissance" name="dateNaissance">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">lieuNaissance</label>
                    <input type="text" class="form-control" id="lieuNaissance" placeholder="Enter lieuNaissance" name="lieuNaissance">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">niveauEtude</label>
                    <input type="text" class="form-control" id="niveauEtude" placeholder="niveauEtude" name="niveauEtude">
                  </div>
                </div>
                 <div class="col-md-4">
                    <label for="typeformation" class="form-label"></label>
                    <select id="inputState" class="form-select" name="formation_id">
                        @foreach($formations as $formation)
                            <option  value="{{$formation->id}}">{{$formation->typeformation}}</option> 
        
                        @endforeach
                    </select>
                  </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-danger">Envoyer</button>
                </div>
              </form>
            </div>

    

@endsection