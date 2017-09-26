@extends('layouts.menu')

@section('content')
    <!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">

            <div class="row">
                <div class="col-lg-9 main-chart">


                </div>

            </div><!-- /row mt -->


            <div class="row">
                <!-- TWITTER PANEL -->
                <div class="col-md-4 mb">
                    <div class="darkblue-panel pn">
                        <div class="darkblue-header">
                            <h5>Le payement des éléves</h5>
                        </div>
                        <canvas id="serverstatus02" height="120" width="120"></canvas>
                        <script>
                            var doughnutData = [
                                {
                                    value: 60,
                                    color:"#68dff0"
                                },
                                {
                                    value : 40,
                                    color : "#444c57"
                                }
                            ];
                            var myDoughnut = new Chart(document.getElementById("serverstatus02").getContext("2d")).Doughnut(doughnutData);
                        </script>
                        <p>17 avril 2017</p>
                        <footer>
                            <div class="pull-right">
                                <h5>60% des payements effectuer</h5>
                            </div>
                        </footer>
                    </div><! -- /darkblue panel -->
                </div><!-- /col-md-4 -->


                <div class="col-md-4 col-sm-4 mb">
                    <div class="white-panel pn donut-chart">
                        <div class="white-header">
                            <h5>L'espace de Serveur</h5>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-xs-6 goleft">
                                <p><i class="fa fa-database"></i> 70%</p>
                            </div>
                        </div>
                        <canvas id="serverstatus01" height="120" width="120"></canvas>
                        <script>
                            var doughnutData = [
                                {
                                    value: 70,
                                    color:"#68dff0"
                                },
                                {
                                    value : 30,
                                    color : "#fdfdfd"
                                }
                            ];
                            var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
                        </script>
                    </div><! --/grey-panel -->
                </div><!-- /col-md-4-->

                <div class="col-md-4 col-sm-4 mb">
                    <!-- REVENUE PANEL -->
                    <div class="darkblue-panel pn">
                        <div class="darkblue-header">
                            <h5>Nombres des visites par semaine</h5>
                        </div>
                        <div class="chart mt">
                            <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,464,655]"></div>
                        </div>
                        <p class="mt"><b> 17,980</b><br/>visite ces dérnier semaine</p>
                    </div>
                </div><!-- /col-md-4 -->

            </div><!-- /row -->

            <div class="row mt">
                <!--CUSTOM CHART START -->
                <div class="border-head">
                    <h3>Total Monsuel</h3>
                </div>
                <div class="custom-bar-chart">
                    <ul class="y-axis">
                        <li><span>10.000</span></li>
                        <li><span>8.000</span></li>
                        <li><span>6.000</span></li>
                        <li><span>4.000</span></li>
                        <li><span>2.000</span></li>
                        <li><span>0</span></li>
                    </ul>
                    <div class="bar">
                        <div class="title">JAN</div>
                        <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top">85%</div>
                    </div>
                    <div class="bar ">
                        <div class="title">FEB</div>
                        <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top">50%</div>
                    </div>
                    <div class="bar ">
                        <div class="title">MAR</div>
                        <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top">60%</div>
                    </div>
                    <div class="bar ">
                        <div class="title">APR</div>
                        <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top">45%</div>
                    </div>
                    <div class="bar">
                        <div class="title">MAY</div>
                        <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top">32%</div>
                    </div>
                    <div class="bar ">
                        <div class="title">JUN</div>
                        <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top">62%</div>
                    </div>
                    <div class="bar">
                        <div class="title">JUL</div>
                        <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top">75%</div>
                    </div>
                </div>
                <!--custom chart end-->
            </div><!-- /row -->

            </div><!-- /col-lg-9 END SECTION MIDDLE -->


            <!-- **********************************************************************************************************************************************************
            RIGHT SIDEBAR CONTENT
            *********************************************************************************************************************************************************** -->


            </div><! --/row -->
        </section>
    </section>

    <!--main content end-->
    <!--footer start-->


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