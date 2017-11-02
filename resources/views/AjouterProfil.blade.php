@extends('layouts.menu')

@section('content')

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->

      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Ajouter nouveau profil</h3>

          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Crée nouveau profil</h4>

                        <ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" href="#prof">Profeseur</a></li>
                          <li><a data-toggle="tab" href="#SG">Surveillant général</a></li>
                          <li><a data-toggle="tab" href="#sec">Secrétaire</a></li>
                        </ul>
<!-- Professeur ************************************************************************************************ -->
                        <div class="tab-content">
                          <div id="prof" class="tab-pane fade in active">
                            <h3>Professeur</h3>
                              <form class="form-horizontal style-form" enctype="multipart/form-data" action="{{ url('profs') }}" method="post">

                                    {{ csrf_field() }}

                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Nom :</label>
                                        <div class="col-sm-10">
                                            <input name="nom" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Prénom :</label>
                                        <div class="col-sm-10">
                                            <input name="prenom" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Date de naissance :</label>
                                        <div class="col-sm-10">
                                            <input name="date_naissance" type="date" class="form-control" id="exampleInputDOB1" placeholder="Date of Birth">
                                        </div>
                                    </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Sexe</label>
                                      <div class="col-sm-10">
                                          <label class="radio-inline">
                                              <input name="sexe" type="radio" value=0 checked="checked">Homme
                                          </label>
                                          <label class="radio-inline">
                                              <input name="sexe" type="radio" value=1>Femme
                                          </label>
                                      </div>
                                  </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Adresse :</label>
                                        <div class="col-sm-10">
                                            <input name="adresse" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Email :</label>
                                        <div class="col-sm-10">
                                            <input name="email" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Telephone :</label>
                                        <div class="col-sm-10">
                                            <input name="tel" type="text" class="form-control">
                                        </div>
                                    </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Fixe :</label>
                                      <div class="col-sm-10">
                                          <input name="fixe" type="text" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Photo :</label>
                                      <div class="col-sm-10">
                                          <input name="photo" type="file" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Ville :</label>
                                      <div class="col-sm-10">
                                          <input name="ville" type="text" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Nationalité :</label>
                                      <div class="col-sm-10">
                                          <input name="nationalite" type="text" class="form-control">
                                      </div>
                                  </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">CIN :</label>
                                        <div class="col-sm-10">
                                            <input name="cin" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">date d'embauche :</label>
                                        <div class="col-sm-10">
                                            <input name="date_embauche" type="date" class="form-control" id="exampleInputDOB1">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Salaire :</label>
                                        <div class="col-sm-10">
                                          <input name="salaire" type="text" class="form-control" id="exampleInputDOB1">
                                        </div>
                                    </div>

                                    <input type="submit" class="btn btn-theme02" value="Enregistrer">
                                </form>

                          </div>
<!-- end Professeur *************************************************************************-->
<!-- SG *************************************************************************-->
                          <div id="SG" class="tab-pane fade">
                            <h3>Surveillant général</h3>
                              <form class="form-horizontal style-form" enctype="multipart/form-data" action="{{ url('sgs') }}" method="post">

                                  {{ csrf_field() }}

                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Nom :</label>
                                      <div class="col-sm-10">
                                          <input name="nom" type="text" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Prénom :</label>
                                      <div class="col-sm-10">
                                          <input name="prenom" type="text" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Date de naissance :</label>
                                      <div class="col-sm-10">
                                          <input name="date_naissance" type="date" class="form-control" id="exampleInputDOB1" placeholder="Date of Birth">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Sexe</label>
                                      <div class="col-sm-10">
                                          <label class="radio-inline">
                                              <input name="sexe" type="radio" value=0 checked="checked">Homme
                                          </label>
                                          <label class="radio-inline">
                                              <input name="sexe" type="radio" value=1>Femme
                                          </label>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Adresse :</label>
                                      <div class="col-sm-10">
                                          <input name="adresse" type="text" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Email :</label>
                                      <div class="col-sm-10">
                                          <input name="email" type="text" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Telephone :</label>
                                      <div class="col-sm-10">
                                          <input name="tel" type="text" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Fixe :</label>
                                      <div class="col-sm-10">
                                          <input name="fixe" type="text" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Photo :</label>
                                      <div class="col-sm-10">
                                          <input name="photo" type="file" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Ville :</label>
                                      <div class="col-sm-10">
                                          <input name="ville" type="text" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Nationalité :</label>
                                      <div class="col-sm-10">
                                          <input name="nationalite" type="text" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">CIN :</label>
                                      <div class="col-sm-10">
                                          <input name="cin" type="text" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">date d'embauche :</label>
                                      <div class="col-sm-10">
                                          <input name="date_embauche" type="date" class="form-control" id="exampleInputDOB1">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Salaire :</label>
                                      <div class="col-sm-10">
                                          <input name="salaire" type="text" class="form-control" id="exampleInputDOB1">
                                      </div>
                                  </div>

                                  <input type="submit" class="btn btn-theme02" value="Enregistrer">
                              </form>
                          </div>
<!-- end SG *************************************************************************-->
<!-- Secrétaire *************************************************************************-->
                          <div id="sec" class="tab-pane fade">
                            <h3>Secrétaire</h3>
                              <form class="form-horizontal style-form" enctype="multipart/form-data" action="{{ url('secretaires') }}" method="post">

                                  {{ csrf_field() }}

                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Nom :</label>
                                      <div class="col-sm-10">
                                          <input name="nom" type="text" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Prénom :</label>
                                      <div class="col-sm-10">
                                          <input name="prenom" type="text" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Date de naissance :</label>
                                      <div class="col-sm-10">
                                          <input name="date_naissance" type="date" class="form-control" id="exampleInputDOB1" placeholder="Date of Birth">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Sexe</label>
                                      <div class="col-sm-10">
                                          <label class="radio-inline">
                                              <input name="sexe" type="radio" value=0 checked="checked">Homme
                                          </label>
                                          <label class="radio-inline">
                                              <input name="sexe" type="radio" value=1>Femme
                                          </label>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Adresse :</label>
                                      <div class="col-sm-10">
                                          <input name="adresse" type="text" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Email :</label>
                                      <div class="col-sm-10">
                                          <input name="email" type="text" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Telephone :</label>
                                      <div class="col-sm-10">
                                          <input name="tel" type="text" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Fixe :</label>
                                      <div class="col-sm-10">
                                          <input name="fixe" type="text" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Photo :</label>
                                      <div class="col-sm-10">
                                          <input name="photo" type="file" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Ville :</label>
                                      <div class="col-sm-10">
                                          <input name="ville" type="text" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Nationalité :</label>
                                      <div class="col-sm-10">
                                          <input name="nationalite" type="text" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">CIN :</label>
                                      <div class="col-sm-10">
                                          <input name="cin" type="text" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">date d'embauche :</label>
                                      <div class="col-sm-10">
                                          <input name="date_embauche" type="date" class="form-control" id="exampleInputDOB1">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Salaire :</label>
                                      <div class="col-sm-10">
                                          <input name="salaire" type="text" class="form-control" id="exampleInputDOB1">
                                      </div>
                                  </div>

                                  <input type="submit" class="btn btn-theme02" value="Enregistrer">
                              </form>
                          </div>
<!-- end Secrétaire *************************************************************************-->
                        </div>

                  </div>
          		</div><!-- col-lg-12-->
          	</div><!-- /row -->



		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->



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