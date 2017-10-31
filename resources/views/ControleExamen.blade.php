@extends('layouts.menu')

@section('content')
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->

      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Contrôles et Examens</h3>

            <!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">

                        <ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" href="#controle">Contrôle</a></li>
                          <li><a data-toggle="tab" href="#examen">Examens</a></li>
                        </ul>
<!-- Controle ************************************************************************************************ -->

                        <div class="tab-content">
 
                          <div id="controle" class="tab-pane fade in active">
                            <h3>Contrôles</h3>

                            <table class="table table-striped table-advance table-hover">
  	                  	  	  <hr>
                                <thead>
                                <tr>
                                    <th> ID</th>
                                    <th> Libelle</th>
                                    <th> Date</th>
                                    <th>Durée</th>
                                    <th> Période</th>
                                    <th> Matiére</th>
                                    <th> Professeur</th>
                                    <th> Classe</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><a href="#">1</a></td>
                                    <td>Controle numero 1</td>
                                    <td>12/1/2017</td>
                                    <td>90</td>
                                    <td>S1</td>
                                    <td>Français</td>
                                    <td>AYOUB</td>
                                    <td>C1</td>
                                    <td>
                                        <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                        <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">2</a></td>
                                     <td>Controle numero 2</td>
                                    <td>12/1/2017</td>
                                    <td>90</td>
                                    <td>S1</td>
                                    <td>العربية</td>
                                    <td>YASSER</td>
                                    <td>C1</td>
                                    <td>
                                        <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                        <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">3</a></td>
                                     <td>Controle numero 1</td>
                                    <td>12/1/2017</td>
                                    <td>60</td>
                                    <td>S2</td>
                                    <td>Math</td>
                                    <td>Yasser</td>
                                    <td>C2</td>
                                    <td>
                                        <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                        <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <h4 class="mb"><i class="fa fa-angle-right"></i> Ajouter un Contrôle</h4>
                          <!--  <form class="form-horizontal style-form" method="get">-->
                          <form class="form-horizontal style-form" method="post" action="{{url('controles')}}">
                            {{ csrf_field() }}

                                <div id="eleve" class="tab-pane fade in active">
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Libelle :</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" id="exampleInputDOB1" name="libelle" placeholder="Entrée le libelle">
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Date :</label>
                                      <div class="col-sm-10">
                                          <input type="date" class="form-control" id="exampleInputDOB1" name="date" placeholder="Entrée la date">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Durée :</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" id="exampleInputDOB1" name="duree" placeholder="Entrée la durée">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Période :</label>
                                      <div class="col-sm-10">
                                        <select class="form-control" name="periode">
                                          <option>S1</option>
                                          <option>S2</option>
                                        </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Matiére :</label>
                                      <div class="col-sm-10">
                                        <select class="form-control" name="matiere">
                                          <option>Français</option>
                                          <option>العربية</option>
                                          <option>Math</option>
                                        </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Professeur :</label>
                                      <div class="col-sm-10">
                                        <select class="form-control" name="prof">
                                          <option>Ayoub</option>
                                          <option>Yasser</option>
                                          <option>Abdelmourhit</option>
                                        </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Classe :</label>
                                      <div class="col-sm-10">
                                        <select class="form-control" name="classe">
                                          <option>C1</option>
                                          <option>C2</option>
                                          <option>C3</option>
                                        </select>
                                      </div>
                                  </div>
                                    <button type="submit" class="btn btn-theme02"><i class="fa fa-check"></i> Enregistrer </button>
                                </form>
                                </div>
            
                          </div>
                          
<!-- end Controle *************************************************************************-->
<!-- Examens *************************************************************************-->

                          <div id="examen" class="tab-pane fade">
                            <h3>Examens</h3>

                            <table class="table table-striped table-advance table-hover">
  	                  	  	  <hr>
                                <thead>
                                <tr>
                                    <th> ID</th>
                                    <th> Libelle</th>
                                    <th> Date</th>
                                    <th>Durée</th>
                                    <th> Période</th>
                                    <th> Matiére</th>
                                    <th> Professeur</th>
                                    <th> Classe</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><a href="#">1</a></td>
                                    <td>Examen 1</td>
                                    <td>19/1/2017</td>
                                    <td>90</td>
                                    <td>S1</td>
                                    <td>Français</td>
                                    <td>AYOUB</td>
                                    <td>C1</td>
                                    <td>
                                        <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                        <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">2</a></td>
                                    <td>Examen 1</td>
                                    <td>19/1/2017</td>
                                    <td>90</td>
                                    <td>S1</td>
                                    <td>Français</td>
                                    <td>AYOUB</td>
                                    <td>C1</td>
                                    <td>
                                        <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                        <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">3</a></td>
                                   <td>Examen 3</td>
                                    <td>19/1/2017</td>
                                    <td>90</td>
                                    <td>S1</td>
                                    <td>Français</td>
                                    <td>AYOUB</td>
                                    <td>C1</td>
                                    <td>
                                        <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                        <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <h4 class="mb"><i class="fa fa-angle-right"></i> Ajouter un Examen</h4>
                           <!-- <form class="form-horizontal style-form" method="get">-->
                           <form class="form-horizontal style-form" method="post" action="{{url('examens')}}">
                            {{ csrf_field() }}

                                <div id="eleve" class="tab-pane fade in active">
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Libelle :</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" id="exampleInputDOB1"  name="libelle" placeholder="Date of Birth">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Date :</label>
                                      <div class="col-sm-10">
                                          <input type="date" class="form-control" id="exampleInputDOB1" name="date" placeholder="Date of Birth">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Durée :</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" id="exampleInputDOB1" name="duree" placeholder="Date of Birth">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Période :</label>
                                      <div class="col-sm-10">
                                        <select class="form-control" name="periode">
                                          <option>S1</option>
                                          <option>S2</option>
                                        </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Matiére :</label>
                                      <div class="col-sm-10">
                                        <select class="form-control" name="matiere">
                                          <option>Français</option>
                                          <option>العربية</option>
                                          <option>Math</option>
                                        </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Professeur :</label>
                                      <div class="col-sm-10">
                                        <select class="form-control" name="prof">
                                          <option>Ayoub</option>
                                          <option>Yasser</option>
                                          <option>Abdelmourhit</option>
                                        </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Classe :</label>
                                      <div class="col-sm-10">
                                        <select class="form-control" name="classe">
                                          <option>C1</option>
                                          <option>C2</option>
                                          <option>C3</option>
                                        </select>
                                      </div>
                                  </div>

                            <button type="submit" class="btn btn-theme02"><i class="fa fa-check"></i> Enregistrer </button>
                          </form>
                          </div>
<!-- end Examens *************************************************************************-->
                        </div>

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
