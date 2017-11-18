@extends('layouts.menu')

@section('content')

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->

      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>Livres</h3>

          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i>La liste des Livres</h4>
                      <form class="form-horizontal style-form" method="get">

<!-- Matiére ************************************************************************************************ -->
                        <div class="tab-content">
                          <div id="prof" class="tab-pane fade in active">
                            <table class="table table-striped table-advance table-hover">
  	                  	  	  <hr>
                                <thead>
                                <tr>
                                    <th> ID</th>
                                    <th> Titre</th>
                                    <th> Auteur</th>
                                    <th> Description</th>
                                    <th> Edition</th>
                                    <th> Date Edition</th>
                                    <th> prix</th>
                                    <th> Quantité</th>
                                    <th> Type</th>
                                    
                                    <th></th>
                                </thead>
                                <tbody>
                                 @foreach($livres as $livre)
                                            <tr>
                                                <td><a href="#">{{ $livre->id }}</a></td>
                                                <td>{{ $livre->titre }}</td>
                                                <td>{{ $livre->autheur }}</td>
                                                <td>{{ $livre->description }}</td>
                                                <td>{{ $livre->edition }}</td>
                                                <td>{{ $livre->date_edition }}</td>
                                                <td>{{ $livre->prix }}</td>
                                                <td>{{ $livre->quantite }}</td>
                                                <td>{{ $livre->type }}</td>
                                                
                                                

                                                
                                                <td>
                                                  <form action="{{ url('livres/'.$livre->id)}}" method="post">
                                                      
                                                      {{ csrf_field() }}
                                                      {{ method_field('DELETE')}}
                                                    <button class="btn btn-success btn-xs"><i class="fa fa-plus"></i></button>
                                                    <a class="btn btn-primary btn-xs" href="{{ url('livres/'.$livre->id.'/edit') }}"><i class="fa fa-pencil"></i></a>
                                                    <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                                  </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                </tbody>
                            </table>

                          </div>
<!-- end Matiére *************************************************************************-->

                        </div>
                      </form>
                  </div>
          		</div><!-- col-lg-12-->
          	</div><!-- /row -->


            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i> Ajouter un Livre</h4>
                      <form class="form-horizontal style-form"  method="post" action="{{url('livres')}}">
                        {{ csrf_field() }}
            <!-- éléve ************************************************************************************************ -->

                          <div id="eleve" class="tab-pane fade in active">
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Titre :</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="titre">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Autheur :</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="autheur">
                                </div>
                            </div>

                              <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label"> Description :</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="description">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label"> Edition :</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="edition">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Date Edition :</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="date_edition">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Prix :</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" name="prix">
                                </div>
                            </div>

                             <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Quantité :</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="quantite">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Type :</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" name="type">
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
