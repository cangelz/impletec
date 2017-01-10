<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="author" content="">

        <?php include 'inc/encabezado.php'; ?>
        <title>lMPLETEC SAS.-Soldadura</title>

        <script type="text/javascript">
            $(document).ready(function() {
               $('#div-btn1').click(function(){
                  $.ajax({
                    type: "POST",
                    url: "inc/prueba1.php",
                    success: function(a) {
                            $('#div-results').html(a);
                    }
                   });
               });
            });
        </script>

    </head>

    <body background="img/FondoIndex.jpg" id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


  <!-- Barra Principal -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="padding: 5px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-2" style="margin-top: 10px;">
                        <div class="navbar-header page-scroll">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand page-scroll" href="Inicio.php" style="margin-top: -30px;"><img src="img/logos/LogoPeq2.png" style="width: 150px; height: 95px;"></a>
                        </div>
                    </div>


                    <div class="col-md-7 col-sm-8">
                    <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                            <ul class="nav navbar-nav">
                                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                                <li class="hidden">
                                    <a class="page-scroll" href="#page-top"></a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="#productos" style="font-size: 15px;">Equipos</a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="#productos" style="font-size: 15px;">Herramientas</a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="#productos" style="font-size: 15px;"">Accesorios</a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="#productos" style="font-size: 15px;">Seg. Industrial</a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="#productos" style="font-size: 15px;">Abrasivos</a>
                                </li>
                            </ul>
                        </div>
                    <!-- /.navbar-collapse -->
                    </div>

                    <div class="col-md-3 col-sm-2">
                        <p style="margin-top: 10px;">
                            <b> 
                            Calle 1g No. 40a-15 Bogota-Colombia<br>
                            <span class="glyphicon glyphicon-earphone"></span> (57)-2038430<br>
                            <span class="glyphicon glyphicon-envelope"></span> <a href="mailto:impletec.sas@gmail.com" class="a">impletec.sas@gmail.com</a><br>
                            <span class="glyphicon glyphicon-time"></span> Lunes - Viernes: 7:00 AM a 5:30 PM
                            </b>
                        </p>
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </nav>


        <div class="container" style="margin-top:3cm;">
            <div class="row">
                <div class="col-md-3">
                    <div class="panel-group" id="accordion">
                    <!--Menu Electrodo Revestido-->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#menu1"><span class="glyphicon glyphicon-wrench">
                                    </span>Electrodo Revestido</a>
                                </h4>
                            </div>
                            <div id="menu1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#menu11"><span class="glyphicon glyphicon-circle-arrow-right"></span>Aceros al carbono</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#menu11"><span class="glyphicon glyphicon-circle-arrow-right"></span>Aceros aleados</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#menu11"><span class="glyphicon glyphicon-circle-arrow-right"></span>Aceros inoxidables</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#menu11"><span class="glyphicon glyphicon-circle-arrow-right"></span>Aluminio</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#menu11"><span class="glyphicon glyphicon-circle-arrow-right"></span>Recubrimientos duros</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#menu11"><span class="glyphicon glyphicon-circle-arrow-right"></span>Niquel</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div id="menu11" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#menu111"><span class="glyphicon glyphicon-globe"></span>West Arco</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#menu111"><span class="glyphicon glyphicon-globe"></span>ESAB</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#menu111"><span class="glyphicon glyphicon-globe"></span>Soldarco</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div id="menu111" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#"><span class="glyphicon glyphicon-check"></span>7018</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#"><span class="glyphicon glyphicon-check"></span>6010</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#"><span class="glyphicon glyphicon-check"></span>6013</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                        <!--Menu Alambres solidos-->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#menu2"><span class="glyphicon glyphicon-wrench">
                                    </span>Alambres Solidos</a>
                                </h4>
                            </div>
                            <div id="menu2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#menu22"><span class="glyphicon glyphicon-circle-arrow-right"></span>Aceros al carbono</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#menu22"><span class="glyphicon glyphicon-circle-arrow-right"></span>Aceros aleados</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#menu22"><span class="glyphicon glyphicon-circle-arrow-right"></span>Aceros inoxidables T16</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#menu22"><span class="glyphicon glyphicon-circle-arrow-right"></span>Aceros inoxidables M16</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#menu22"><span class="glyphicon glyphicon-circle-arrow-right"></span>Aluminicos T19</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#menu22"><span class="glyphicon glyphicon-circle-arrow-right"></span>Aluminicos M15  </a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div id="menu22" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#menu222"><span class="glyphicon glyphicon-globe"></span>West Arco</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#menu222"><span class="glyphicon glyphicon-globe"></span>ESAB</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#menu222"><span class="glyphicon glyphicon-globe"></span>Soldarco</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div id="menu222" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#"><span class="glyphicon glyphicon-check"></span>7018</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#"><span class="glyphicon glyphicon-check"></span>6010</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#"><span class="glyphicon glyphicon-check"></span>6013</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!--Menu Alambres ?-->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#menu3"><span class="glyphicon glyphicon-wrench">
                                    </span>Alambres ?</a>
                                </h4>
                            </div>
                            <div id="menu3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#menu33"><span class="glyphicon glyphicon-circle-arrow-right"></span>Aceros al carbono</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#menu33"><span class="glyphicon glyphicon-circle-arrow-right"></span>Aceros aleados</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#menu33"><span class="glyphicon glyphicon-circle-arrow-right"></span>Aceros inoxidables</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div id="menu33" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#menu333"><span class="glyphicon glyphicon-globe"></span>ESAB</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#menu333"><span class="glyphicon glyphicon-globe"></span>HOBART</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div id="menu333" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#"><span class="glyphicon glyphicon-check"></span>7018</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#"><span class="glyphicon glyphicon-check"></span>6010</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#"><span class="glyphicon glyphicon-check"></span>6013</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!--Menu Especiales-->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#menu4"><span class="glyphicon glyphicon-wrench">
                                    </span>Especiales</a>
                                </h4>
                            </div>
                            <div id="menu4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#menu44"><span class="glyphicon glyphicon-circle-arrow-right"></span>Arcos Sumergido</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div id="menu44" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#menu444"><span class="glyphicon glyphicon-globe"></span>West Arco</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#menu444"><span class="glyphicon glyphicon-globe"></span>HOBART</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#menu444"><span class="glyphicon glyphicon-globe"></span>Otros</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div id="menu444" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <a id="div-btn1" data-toggle="collapse" data-parent="#accordion" href="#"><span class="glyphicon glyphicon-check"></span>7018</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#"><span class="glyphicon glyphicon-check"></span>6010</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#"><span class="glyphicon glyphicon-check"></span>6013</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-offset-1 col-md-8">
                <div id="div-results"></div>
                </div>
            </div>
        </div>
   </body>
</html>