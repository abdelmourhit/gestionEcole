@extends('layouts.menu')

@section('content')

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
<form class="form-horizontal style-form" method="get">
    
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Ajouter une nouvelle Matière</h3>

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

                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Crée une nouvelle Matière</h4>
                     <!-- <form class="form-horizontal style-form" method="post" action="{{url('index')}}">
                        {{ csrf_field() }}-->
                        <!--<ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" href="#eleve">Eléve</a></li>
                          <li><a data-toggle="tab" href="#parent">Parent</a></li>
                        </ul>-->
                        <!-- liste matière -->
                         <div class="tab-content">
                          <div id="prof" class="tab-pane fade in active">
                            <h3>Matiéres</h3>
                            <table class="table table-striped table-advance table-hover">
                              <hr>
                                <thead>
                                <tr>
                                    <th> ID</th>
                                    <th> Nom</th>
                                    <th> Nom Arabe</th>
                                    <th> Niveau</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                  @foreach($matieres as $matiere)
                                           <tr>
                                                <td><a href="#">{{ $matiere->id }}</a></td>
                                                <td>{{ $matiere->nom }}</td>
                                                <td>{{ $matiere->nom_arab }}</td>
                                                <td>{{ $matiere->classe }}</td>
                                                <td>
                                                  <form  action="{{url('matieres/'.$matiere->id)}}" method="post">
                                                  {{ csrf_field() }}
                                                  {{ method_field('DELETE')}}
                                                    <a href="" class="btn btn-success btn-xs"><i class="fa fa-plus"></i></a>
                                                   <a class="btn btn-primary btn-xs" href="{{ url('matieres/'.$matiere->id.'/edit') }}"><i class="fa fa-pencil"></i></a>
                                                    <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                                  </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                </tbody>
                            </table>

                          </div>
                        </form>
                        <!-- end liste matière -->
<!-- matière ************************************************************************************************ -->
                <form class="form-horizontal style-form" method="post" action="{{url('matieres')}}">
                        {{ csrf_field() }}
                        <div class="tab-content">
                          <div id="eleve" class="tab-pane fade in active">
                            <h3>Matière</h3>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Nom :</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nom">
                                </div>
                            </div>

                          <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Nom arabe :</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nom_arab">
                                </div>
                            </div>

                             <!--<div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Niveau :</label>
                                <div class="col-sm-10">
                                  <select class="form-control" name="classe">
                                    <option>C1</option>
                                    <option>C2</option>
                                    <option>C3</option>
                                  </select>
                                </div>
                            </div>-->
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Niveau :</label>
                                <div class="col-sm-10">
                                  <select class="form-control" name="classe">
                                    @foreach($classes as $classe)
                                        <option value="{{ $classe->libelle }}"> {{$classe->libelle}}</option>
                                    @endforeach
                                  </select>
                                </div>
                            </div>
                            
                            
                          </div>



<!-- end salle *************************************************************************-->


                        </div>
                        <button type="submit" class="btn btn-theme02"><i class="fa fa-check"></i> Enregistrer </button>
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
