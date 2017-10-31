@extends('layouts.menu')

@section('content')

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->

      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> La liste des profils</h3>

          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <a href="{{ url('profs/create') }}"><h4 class="mb"><i class="fa fa-angle-right"></i> Crée nouveau profil</h4></a>
                      <form class="form-horizontal style-form" method="get">
                        <ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" href="#prof">Profeseur</a></li>
                          <li><a data-toggle="tab" href="#SG">Surveillant général</a></li>
                          <li><a data-toggle="tab" href="#sec">Secrétaire</a></li>
                        </ul>
<!-- Professeur ************************************************************************************************ -->
                        <div class="tab-content">
                          <div id="prof" class="tab-pane fade in active">
                            <h3>Professeur</h3>
                            <table class="table table-striped table-advance table-hover">
  	                  	  	  <hr>
                                <thead>
                                <tr>
                                    <th> ID</th>
                                    <th> Nom</th>
                                    <th> Prénom</th>
                                    <th> Date de naissance</th>
                                    <th> Sexe</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($profs as $prof)
                                <tr>
                                    <td><a href="#">{{ $prof->id }}</a></td>
                                    <td>{{ $prof->nom }}</td>
                                    <td>{{ $prof->prenom }}</td>
                                    <td>{{ $prof->date_naissance }}</td>

                                    @if( $prof->sexe == 0)
                                    <td> Homme </td>
                                    @elseif( $prof->sexe == 1)
                                        <td> Femme </td>
                                    @endif
                                    <td>
                                        <button class="btn btn-success btn-xs"><i class="fa fa-plus"></i></button>
                                        <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                        <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>

                          </div>
<!-- end Professeur *************************************************************************-->
<!-- SG *************************************************************************-->
                          <div id="SG" class="tab-pane fade">
                            <h3>Surveillant général</h3>

                            <table class="table table-striped table-advance table-hover">
  	                  	  	  <hr>
                                <thead>
                                <tr>
                                    <th> ID</th>
                                    <th> Nom</th>
                                    <th> Prénom</th>
                                    <th> Date de naissance</th>
                                    <th> Sexe</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($secretaires as $secretaire)
                                    <tr>
                                        <td><a href="#">{{ $secretaire->id }}</a></td>
                                        <td>{{ $secretaire->nom }}</td>
                                        <td>{{ $secretaire->prenom }}</td>
                                        <td>{{ $secretaire->date_naissance }}</td>

                                        @if( $secretaire->sexe == 0)
                                            <td> Homme </td>
                                        @elseif( $secretaire->sexe == 1)
                                            <td> Femme </td>
                                        @endif
                                        <td>
                                            <button class="btn btn-success btn-xs"><i class="fa fa-plus"></i></button>
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                          </div>
<!-- end SG *************************************************************************-->
<!-- Secrétaire *************************************************************************-->
                          <div id="sec" class="tab-pane fade">
                            <h3>Secrétaire</h3>

                            <table class="table table-striped table-advance table-hover">
  	                  	  	  <hr>
                                <thead>
                                <tr>
                                    <th> ID</th>
                                    <th> Nom</th>
                                    <th> Prénom</th>
                                    <th> Date de naissance</th>
                                    <th> Sexe</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($sgs as $sg)
                                    <tr>
                                        <td><a href="#">{{ $sg->id }}</a></td>
                                        <td>{{ $sg->nom }}</td>
                                        <td>{{ $sg->prenom }}</td>
                                        <td>{{ $sg->date_naissance }}</td>

                                        @if( $sg->sexe == 0)
                                            <td> Homme </td>
                                        @elseif( $sg->sexe == 1)
                                            <td> Femme </td>
                                        @endif
                                        <td>
                                            <button class="btn btn-success btn-xs"><i class="fa fa-plus"></i></button>
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                          </div>
<!-- end Secrétaire *************************************************************************-->
                        </div>
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
