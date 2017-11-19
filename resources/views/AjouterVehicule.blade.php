@extends('layouts.menu')

@section('content')

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->

      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>Vehicules</h3>

          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">

                      @if(session()->has('success'))
                          <div class="alert alert-success">
                              <i class="fa fa-check" aria-hidden="true"></i>
                              {{ session()->get('success') }}
                          </div>
                      @endif

                  	  <h4 class="mb"><i class="fa fa-angle-right"></i>La liste des Vehicules</h4>
                      <form class="form-horizontal style-form" method="get">

<!-- Véhicule ************************************************************************************************ -->
                        <div class="tab-content">
                          <div id="prof" class="tab-pane fade in active">
                            <table class="table table-striped table-advance table-hover">
  	                  	  	  <hr>
                                <thead>
                                <tr>
                                    <th> ID</th>
                                    <th> Matricul</th>
                                    <th> Type</th>
                                    <th> Marque</th>
                                    <th> Nombre de place</th>
                                    <th> Carburant</th>
                                    <th> Prix</th>
                                    <th> Chauffeur</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                 @foreach($vehicules as $vehicule)
                                           <tr>
                                                <td><a href="#">{{ $vehicule->id }}</a></td>
                                                <td>{{ $vehicule->matricule }}</td>
                                                <td>{{ $vehicule->type }}</td>
                                                <td>{{ $vehicule->marque }}</td>
                                                <td>{{ $vehicule->nbr_place }}</td>
                                                <td>{{ $vehicule->carburant }}</td>
                                                <td>{{ $vehicule->prix }}</td>
                                                <td>{{ $vehicule->chauffeur }} </td>
                                                <td>
                                                  <form action="{{ url('vehicules/'.$vehicule->id)}}" method="post">
                                                      
                                                      {{ csrf_field() }}
                                                      {{ method_field('DELETE')}}
                                                    <button class="btn btn-success btn-xs"><i class="fa fa-plus"></i></button>
                                                    <a class="btn btn-primary btn-xs" href="{{ url('vehicules/'.$vehicule->id.'/edit') }}"><i class="fa fa-pencil"></i></a>
                                                    <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                                  </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                </tbody>
                            </table>

                          </div>
<!-- end Véhicule *************************************************************************-->

                        </div>
                      </form>
                  </div>
          		</div><!-- col-lg-12-->
          	</div><!-- /row -->


            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i> Ajouter une véhicule</h4>
                      <form class="form-horizontal style-form" method="post" action="{{url('vehicules')}}">
                        {{ csrf_field() }}
            <!-- véhicule ************************************************************************************************ -->

                          <div id="eleve" class="tab-pane fade in active">
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Matricul :</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="matricule">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Type :</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="type">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Marque :</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" name="marque">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Nombre Place :</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nbr_place">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Carburant :</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="carburant">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Prix :</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="prix"> 
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Chauffeur :</label>
                                <div class="col-sm-10">
                                  <select class="form-control" name="chauffeur">
                                    <option value="" hidden>Choisir un chauffeur</option>
                                    @foreach($chauffeurs as $chauffeur)
                                    <option value="{{$chauffeur->nom}}">{{$chauffeur->nom}} {{$chauffeur->prenom}}</option>
                                    @endforeach
                                  </select>
                                </div>
                            </div>

                              <button type="submit" class="btn btn-theme02"><i class="fa fa-check"></i> Enregistrer </button>
                          </div>
            <!-- end éléve *************************************************************************-->

                      </form>
                  </div>
              </div><!-- col-lg-12-->
            </div><!-- /row -->


		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->


      <!--main content end-->


    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>
	<script src="assets/js/zabuto_calendar.js"></script>

	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });

            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });


        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>


@endsection
