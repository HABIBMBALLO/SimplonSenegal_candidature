<!-- 
<!DOCTYPE html>
<head>
  <link />{rel: "stylesheet", type:"text/css", href:"https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"}
  <link />{rel: "stylesheet", type:"text/css", href:"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css"}
  <link />{rel: "stylesheet", type:"text/css", href:"//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/css/bootstrap-switch.css"}
  <link />{rel: "stylesheet", type:"text/css", href:"https://davidstutz.github.io/bootstrap-multiselect/css/bootstrap-multiselect.css"}
  <script>{type: "text/javascript",src: "//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"}</script>
  <script>{type: "text/javascript",src: "//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0/js/bootstrap.min.js"}</script>
  <script>{type: "text/javascript",src: "//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"}</script>
  <script>{type: "text/javascript",src: "//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/js/bootstrap-switch.min.js"}</script>
  <script>{type: "text/javascript",src: "https://davidstutz.github.io/bootstrap-multiselect/js/bootstrap-multiselect.js"}</script>
</head>

<style>
.indent-small {
	 margin-left: 5px;
}
 .form-group.internal {
	 margin-bottom: 0;
}
 .dialog-panel {
	 margin: 10px;
}
 .datepicker-dropdown {
	 z-index: 200 !important;
}
 .panel-body {
	 background: #e5e5e5;
	 background: -moz-radial-gradient(center,ellipse cover,#e5e5e5 0%,#ffffff 100%);
	 background: -webkit-gradient(radial,center center,0px,center center,100%,color-stop(0%,#e5e5e5),color-stop(100%,#ffffff));
	 background: -webkit-radial-gradient(center,ellipse cover,#e5e5e5 0%,#ffffff 100%);
	 background: -o-radial-gradient(center,ellipse cover,#e5e5e5 0%,#ffffff 100%);
	 background: -ms-radial-gradient(center,ellipse cover,#e5e5e5 0%,#ffffff 100%);
	 background: radial-gradient(ellipse at center,#e5e5e5 0%,#ffffff 100%);
	 filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=&#39;
	#e5e5e5&#39;
	,endColorstr=&#39;
	#ffffff&#39;
	,GradientType=1);
	 font: 600 15px &#34;
	Open Sans&#34;
	, Arial, sans-serif;
}
 label.control-label {
	 font-weight: 600;
	 color: #777;
}
</style>
<body>
  <div class="container">
    <div class="panel panel-primary dialog-panel">
      <div class="panel-heading">
        <h5>Almaguin Campground - Reservation</h5>
      </div>
      <div class="panel-body">
        <form class="form-horizontal">{role: "form"}
          <div class="form-group">
            <label class="control-label col-md-2 col-md-offset-2">{for: "id_accomodation"} Accomodation</label>
            <div class="col-md-2">
              <select class="form-control">{id: "id_accomodation"}
                <option>RV</option>
                <option>Tent</option>
                <option>Cabin/Lodging</option></select>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-2 col-md-offset-2">{for: "id_title"} Name</label>
            <div class="col-md-8">
              <div class="col-md-3 indent-small">
                <div class="form-group internal">
                  <input class="form-control" />{id: "id_first_name", type: "text", placeholder: "First Name"}</div>
              </div>
              <div class="col-md-3 indent-small">
                <div class="form-group internal">
                  <input class="form-control" />{id: "id_last_name", type: "text", placeholder: "Last Name"}</div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-2 col-md-offset-2">{for: "id_adults"} Guests</label>
            <div class="col-md-8">
              <div class="col-md-2">
                <div class="form-group internal">
                  <input class="form-control col-md-8" />{id: "id_adults", type: "number", placeholder: "18+ years"}</div>
              </div>
              <div class="col-md-3 indent-small">
                <div class="form-group internal">
                  <input class="form-control" />{id: "id_children", type: "number", placeholder: "2-17 years"}</div>
              </div>
              <div class="col-md-3 indent-small">
                <div class="form-group internal">
                  <input class="form-control" />{id: "id_children_free", type: "number", placeholder: "< 2 years"}</div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-2 col-md-offset-2">{for: "id_email"} Contact</label>
            <div class="col-md-6">
              <div class="form-group">
                <div class="col-md-11">
                  <input class="form-control" />{id: "id_email", type: "text", placeholder: "E-mail"}</div>
              </div>
              <div class="form-group internal">
                <div class="col-md-11">
                  <input class="form-control" />{id: "id_phone", type: "text", placeholder: "Phone: (xxx) - xxx xxxx"}</div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-2 col-md-offset-2">{for: "id_checkin"} Checkin</label>
            <div class="col-md-8">
              <div class="col-md-3">
                <div class="form-group internal input-group">
                  <input class="form-control datepicker" />{id: "id_checkin"}<span class="input-group-addon">
                    <i class="glyphicon glyphicon-calendar"></i>
                  </span>
                </div>
              </div>
              <label class="control-label col-md-2">{for: "id_checkout"} Checkout</label>
              <div class="col-md-3">
                <div class="form-group internal input-group">
                  <input class="form-control datepicker" />{id: "id_checkout"}<span class="input-group-addon">
                    <i class="glyphicon glyphicon-calendar"></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-2 col-md-offset-2">{for: "id_equipment"} Equipment type</label>
            <div class="col-md-8">
              <div class="col-md-3">
                <div class="form-group internal">
                  <select class="form-control">{id: "id_equipment"}
                    <option>Travel trailer</option>
                    <option>Fifth wheel</option>
                    <option>RV/Motorhome</option>
                    <option>Tent trailer</option>
                    <option>Pickup camper</option>
                    <option>Camper van</option></select>
                </div>
              </div>
              <div class="col-md-9">
                <div class="form-group internal">
                  <label class="control-label col-md-3">{for:"id_slide"} Slide-outs</label>
                  <div class="make-switch">{id:"id_slide_switch","data-on-label" => "YES", "data-off-label"=> "NO"}
                    <input />{type:"checkbox", value:"chk_hydro", id: "id_slide"}</div>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-2 col-md-offset-2">{for: "id_service"} Required Service</label>
            <div class="col-md-8">
              <select class="multiselect">{multiple:"multiple",id:"id_service"}
                <option>{value:"hydro"} Hydro</option>
                <option>{value:"water"} Water</option>
                <option>{value:"sewer"} Sewer</option></select>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-2 col-md-offset-2">{for: "id_pets"} Pets</label>
            <div class="col-md-8">
              <div class="make-switch">{id:"id_pets_switch", "data-on-label" => "YES", "data-off-label"=> "NO"}
                <input />{type:"checkbox", value:"chk_hydro", id: "id_pets"}</div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-2 col-md-offset-2">{for: "id_comments"} Comments</label>
            <div class="col-md-6">
              <textarea class="form-control">{id: "id_comments", rows: "3", placeholder: "Additional comments"}</textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-offset-4 col-md-3">
              <button class="btn-lg btn-primary">{type: "submit"} Request Reservation</button>
            </div>
            <div class="col-md-3">
              <button class="btn-lg btn-danger">{type: "submit", style: "float:right"} Cancel</button>
            </div>
          </div></form>
      </div>
    </div>
  </div>
</body>

<script>
  $(document).ready(function() {  
  $('.multiselect').multiselect();
  $('.datepicker').datepicker();  
});
</script> -->

<!-- <div class="container-fluid d-flex justify-content-center">
        <div class="row"> -->
          <!-- left column -->
          <!-- <div class="col-md-10"><br><br> -->
            <!-- general form elements -->
            <!-- <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Appel a Candidature </h3> 
              </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <!-- <form action="{{route ('appelCandidatures.create')}}" method="POST">
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
            </div> -->