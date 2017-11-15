@extends('layouts.menu')

@section('content')

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
    <!--main content start-->

    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Modification d'un contrôle</h3>

            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">

                        <!-- Professeur ************************************************************************************************ -->
                        <div class="tab-content">

                            <h3>Contôle</h3>
                            <form class="form-horizontal style-form" enctype="multipart/form-data" action="{{ url('chauffeurs/'.$chauffeur->id) }}" method="post">

                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Nom :</label>
                                    <div class="col-sm-10">
                                        <input name="nom" type="text" class="form-control" value="{{ $chauffeur->nom }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Prenom :</label>
                                    <div class="col-sm-10">
                                        <input name="prenom" type="text" class="form-control" value="{{ $chauffeur->prenom }}">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Sexe</label>
                                        <div class="col-sm-10" >
                                            @if( $chauffeur->sexe == 0 )
                                            <label class="radio-inline">
                                                <input name="sexe" type="radio" value=0 checked="checked">Homme
                                            </label>
                                            <label class="radio-inline">
                                                <input name="sexe" type="radio" value=1>Femme
                                            </label>
                                            @else
                                                <label class="radio-inline">
                                                    <input name="sexe" type="radio" value=0>Homme
                                                </label>
                                                <label class="radio-inline">
                                                    <input name="sexe" type="radio" value=1 checked="checked">Femme
                                                </label>
                                            @endif
                                        </div>
                                    </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Date de naissance :</label>
                                    <div class="col-sm-10">
                                        <input name="date_naiss" type="date" class="form-control" value="{{ $chauffeur->date_naiss }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Lieu de naissance :</label>
                                    <div class="col-sm-10">
                                        <input name="lieu_naiss" type="text" class="form-control" value="{{ $chauffeur->lieu_naiss }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Téléphone :</label>
                                    <div class="col-sm-10">
                                        <input name="tel" type="text" class="form-control" value="{{ $chauffeur->tel }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Nationnalité :</label>
                                    <div class="col-sm-10">
                                        <input name="nationnalite" type="text" class="form-control" value="{{ $chauffeur->nationnalite }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Adresse :</label>
                                    <div class="col-sm-10">
                                        <input name="adresse" type="text" class="form-control" value="{{ $chauffeur->adresse }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Ville :</label>
                                    <div class="col-sm-10">
                                        <input name="ville" type="text" class="form-control" value="{{ $chauffeur->ville }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">CIN :</label>
                                    <div class="col-sm-10">
                                        <input name="cin" type="text" class="form-control" value="{{ $chauffeur->cin }}">
                                    </div>
                                </div>

                                   <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Date d'embauche :</label>
                                    <div class="col-sm-10">
                                        <input name="date_recrutement" type="date" class="form-control" value="{{ $chauffeur->date_recrutement }}">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Type de permi :</label>
                                    <div class="col-sm-10">
                                        <input name="type_permi" type="text" class="form-control" value="{{ $chauffeur->type_permi }}">
                                    </div>
                                </div>

                                
                                 

                                <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Véhicule :</label>
                                <div class="col-sm-10">
                                     
                                  <select class="form-control" name="vehicule">
                                    <option value="{{$chauffeur->vehicule}}" selected hidden>{{$chauffeur->vehicule}}</option>
                                    @foreach($vehicules as $vehicule)
                                        <option value="{{$vehicule->marque}}">{{$vehicule->marque}}</option>
                                    @endforeach
                                  </select>
                                </div>
                            </div>
                            
                             
                                
                                
                              
                                
                               
                               

                                <input type="submit" class="btn btn-theme04" value="Modifier">
                            </form>
                        </div>
                        <!-- end Professeur *************************************************************************-->


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