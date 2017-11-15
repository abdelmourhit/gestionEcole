@extends('layouts.menu')

@section('content')

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
    <!--main content start-->

    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Modification d'une Matière</h3>

            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">

                        <!-- Professeur ************************************************************************************************ -->
                        <div class="tab-content">

                            <h3>Matière</h3>
                            <form class="form-horizontal style-form" enctype="multipart/form-data" action="{{ url('matieres/'.$matiere->id) }}" method="post">

                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Nom :</label>
                                    <div class="col-sm-10">
                                        <input name="nom" type="text" class="form-control" value="{{ $matiere->nom }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Nom en arabe :</label>
                                    <div class="col-sm-10">
                                        <input name="nom_arab" type="text" class="form-control" value="{{ $matiere->nom_arab }}">
                                    </div>
                                </div>
                                
                                
                               <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Niveau :</label>
                                <div class="col-sm-10">
                                     
                                  <select class="form-control" name="classe">
                                    <option value="{{$matiere->classe}}" selected hidden>{{$matiere->classe}}</option>
                                    @foreach($classes as $classe)
                                        <option value="{{ $classe->libelle}}"> {{$classe->libelle}}</option>
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