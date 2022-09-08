
@extends('layouts.master')

@section('content')
<div class="full_container d-flex justify-content-center">
         <div class="">
            <div class="row-sm">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Liste des Candidats</h2>
                                 </div>
                              </div>    
                              <div class="table_section padding_infor_info">                           
                                 <div class="table-responsive-sm">
                                    <table class="table table-bordered  table-striped table-hover">
                                       <thead class="thead-dark">
                                          <tr>
                                             <th>Nom</th>
                                             <th>Prenom</th>
                                             <th>CNI</th>
                                             <th>date naissance</th>
                                             <th>niveau Etude</th>
                                             <th>lieu naissance</th>
                                             <th>Action</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                       @foreach($candidats as $cand)
                                          <tr>
                                             <td>{{$cand->nom}}</td>
                                             <td>{{$cand->prenom}}</td>
                                             <td>{{$cand->cni}}</td> 
                                             <td>{{$cand->dateNaissance}}</td>
                                             <td>{{$cand->lieuNaissance}}</td>
                                             <td>{{$cand->niveauEtude}}</td>
                                              <td>
                                                  <a href="{{route('candidats.modifier',['id'=>$cand->id])}}" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-plus-circle" style="color: #00fff;"></i></a>
                                                                                                   <!-- Modal -->
                                                   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                   <div class="modal-dialog">
                                                      <div class="modal-content">
                                                         <div class="modal-header bg-dark">
                                                         <h5 class="modal-title " id="exampleModalLabel">Information Candidat</h5>
                                                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                         </div>
                                                         <div class="modal-body d-flex justify-content-center">
                                                         <table>  
                                                            <tbody>
                                                               <tr>
                                                                  <td>Nom</td>
                                                                  <td>{{$cand->nom}}</td>
                                                               </tr>
                                                               <tr>
                                                                  <td>Prenom</td>
                                                                  <td>{{$cand->prenom}}</td>
                                                               </tr>
                                                               <tr>
                                                                  <td>CNI</td>
                                                                  <td>{{$cand->cni}}</td>
                                                               </tr>
                                                               <tr>
                                                                  <td>Date Naissance</td>
                                                                  <td>{{$cand->dateNaissance}}</td>
                                                               </tr>
                                                               <tr>
                                                                  <td>Niveau Etude</td>
                                                                  <td>{{$cand->niveauEtude}}</td>
                                                               </tr>
                                                               <tr>
                                                                  <td>Lieu Naissance</td>
                                                                  <td>{{$cand->lieuNaissance}}</td>
                                                            </tbody>
                                                         </table>
                                                         </div>
                                                         <div class="modal-footer">
                                                         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   </div>
                                                   
                                                  <a href="{{route('candidats.modifier',['id'=>$cand->id])}}"><i class="bi bi-check2-circle" style="color:#00FF00;"></i></a>
                                                  <a href="{{route('candidats.delete',['id'=>$cand->id])}}"> <i class="bi bi-x-circle" style="color:#E40000;"></i></a>
                                                  <a href="{{route('candidats.delete',['id'=>$cand->id])}}"> <i class="bi bi-circle-half" style="color:#000;"></i></a>
                                              </td>
                                          </tr>


                                          @endforeach
                                       </tbody>
                                          
                                    </table>
                                 </div>
                                 
                              </div>
                           </div>
                        </div>
                       
         </div>
      </div>
      @endsection