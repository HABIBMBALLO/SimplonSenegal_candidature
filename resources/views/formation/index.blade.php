@extends ('layouts.master')

@section ('content')

<style>

table  {
    border-collapse: collapse;
    width: 140%;
    border-radius: 18rem;
    margin: 1em auto;
    border: 1px solid #ccc;
    border-box: 6px;
    text-decoration: none;
    font-size: 1em;
    
}

th, td {
    text-align: auto;
    padding: 10px;
    border-bottom: 1px solid #ddd;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #ce0033;
    color: white;
    bordered: 1px solid #ce0033;
    
    
}

</style>
<div class="full_container d-flex justify-content-center">
         <div class="">
            <div class="row-sm">
                <div class="white_shd full margin_bottom_30 ">
                  <div class="table-formations rounded">
                      <div class="header ">Formations</div>
                        <table cellspacing="0">
                          <thead class="rounded">
                            <tr>
                              <th width="50">titre Formation</th>
                              <th width="310">Description</th>
                              <th width="40">Cible</th>
                              <th width="30">Duree</th>
                            </tr>
                          </thead>
                        <tbody>
                          @foreach ($formations as $formation)
                          <tr>
                            <td>{{ $formation->titreformation }}</td>
                            <td>{{ $formation->description }}</td>
                            <td>{{ $formation->cible }}</td>
                            <td>{{ $formation->duree }}</td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                  </div>
                </div>
            </div>
        </div>
    </div>    

@endsection

