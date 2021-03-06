@extends('layouts.menu')

@section('content')

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->

      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>Chaufeurs</h3>

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

                  	  <h4 class="mb"><i class="fa fa-angle-right"></i>La liste des chaufeurs</h4>
                      <form class="form-horizontal style-form" method="get">

<!-- Véhicule ************************************************************************************************ -->
                        <div class="tab-content">
                          <div id="prof" class="tab-pane fade in active">
                            <table class="table table-striped table-advance table-hover">
  	                  	  	  <hr>
                                <thead>
                                <tr>
                                    <th> ID</th>
                                    <th> Nom</th>
                                    <th> Prénom</th>
                                    <th> sexe</th>
                                    <th> Type permis</th>
                                    <th> Véhicule</th>
                                    <th></th>
                                </thead>
                                <tbody>
                               @foreach($chauffeurs as $chauffeur)
                                            <tr>
                                                <td><a href="#">{{ $chauffeur->id }}</a></td>
                                                <td>{{ $chauffeur->nom }}</td>
                                                <td>{{ $chauffeur->prenom }}</td>
                                                

                                                @if( $chauffeur->sexe == 0)
                                                    <td> Homme </td>
                                                @elseif( $chauffeur->sexe == 1)
                                                    <td> Femme </td>
                                                @endif

                                                <td>{{ $chauffeur->type_permi }}</td>
                                                <td>{{ $chauffeur->vehicule }}</td>
                                                <td>
                                                   <form action="{{ url('chauffeurs/'.$chauffeur->id)}}" method="post">
                                                      
                                                      {{ csrf_field() }}
                                                      {{ method_field('DELETE')}}
                                                    <button class="btn btn-success btn-xs"><i class="fa fa-plus"></i></button>
                                                    <a class="btn btn-primary btn-xs" href="{{ url('chauffeurs/'.$chauffeur->id.'/edit') }}"><i class="fa fa-pencil"></i></a>
                                                    <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                                  </form>
                                                </td>
                                            </tr>
                                        @endforeach
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
                      <h4 class="mb"><i class="fa fa-angle-right"></i> Ajouter un chaufeur</h4>
                      <form class="form-horizontal style-form" method="post" action="{{url('chauffeurs')}}">
                        {{ csrf_field() }}
            <!-- éléve ************************************************************************************************ -->

                          <div id="eleve" class="tab-pane fade in active">
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Nom :</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nom">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Prénom :</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="prenom">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">sexe :</label>
                                <div class="col-sm-10">
                                  <label class="radio-inline">
                                    <input type="radio" name="sexe" value=1>Homme
                                  </label>
                                  <label class="radio-inline">
                                    <input type="radio" name="sexe" value=0>Femme
                                  </label>
                                </div>
                            </div>

                             <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Date de naissance :</label>
                                <div class="col-sm-10">
                                  <input type="date" class="form-control" name="date_naiss">
                                </div>
                            </div>

                             <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Lieu de naissance :</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" name="lieu_naiss">
                                </div>
                            </div>

                             <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Téléphone :</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="tel">
                                </div>
                            </div>

                             <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Nationnalité :</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nationnalite">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Adresse :</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="adresse">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Ville :</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="ville">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">CIN :</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" name ="cin">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Date de recrutement :</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="date_recrutement">
                                </div>
                            </div>
                            
                           
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Type de permis :</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="type_permi">
                                </div>
                            </div>

                             <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Véhicule :</label>
                                <div class="col-sm-10">
                                  <select class="form-control" name="vehicule">
                                    @foreach($vehicules as $vehicule)
                                    <option value="">{{$vehicule->marque}}</option>
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
