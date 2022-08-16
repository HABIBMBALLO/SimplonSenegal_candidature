
@extends('layouts.app')

@section('content')
<div class="full_container">
         <div class="">
            <div class="row">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Liste des Candidats</h2>
                                 </div>
                              </div>    
                              <div class="table_section padding_infor_info">                           
                                 <div class="table-responsive-sm">
                                    <table class="table">
                                       <thead class="thead-dark ">
                                          <tr>
                                             <th>Nom</th>
                                             <th>Prenom</th>
                                             <th>CNI</th>
                                             <th></th>
                                             <th>Action</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                       @foreach($candidats as $cand)
                                          <tr>
                                             <td>{{$cand->nom}}</td>
                                             <td>{{$cand->prenom}}</td>
                                             <td>{{$cand->telephone}}</td>
                                             <td>{{$cand->sexe}}</td>
                                              <td>
                                                  <a href="{{route('candidats.show',['id'=>$cand->id])}}"><i class="bi bi-plus-circle" style="color: #03ECC7;"></i></a>
                                                  <a href="{{route('candidats.edit',['id'=>$cand->id])}}"><i class="bi bi-pencil-square" style="color:#FFEF00;"></i></a>
                                                  <a href="{{route('candidats.destroy',['id'=>$cand->id])}}"> <i class="bi bi-x-circle" style="color:#E40000;"></i></a>
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