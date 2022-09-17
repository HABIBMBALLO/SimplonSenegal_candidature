@extends('layouts.master')

@section('content')

              
<div class="container-fluid d-flex justify-content-center">
        <div class="row">
          <!-- left column -->
          <div class="col-md-10"><br><br>
            <!-- general form elements -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Appel Candidature</h3> 
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/appels/store" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Titre</label>
                    <input type="text" class="form-control" id="titre" placeholder="Enter titre" name="titre" value="{{Auth::user()->name}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                   <textarea  class="form-control" id="description" placeholder="description" name="description"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">date debut </label>
                    <input type="date" class="form-control" id="dateDebut" placeholder="Enter datedebut" name="dateDebut">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">date fin</label>
                    <input type="date" class="form-control" id="dateFin" placeholder="entrer date naissance" name="dateFin">
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
            </div>
@endsection