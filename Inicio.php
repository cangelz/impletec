<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php include 'inc/encabezado.php'; ?>
    <title>lMPLETEC SAS.-Menú</title>


</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body background="img/FondoIndex.jpg" id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

  <!-- Barra Principal -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-2" style="margin-top: 20px;">
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand page-scroll" href="#page-top" style="margin-top: -30px;"><img src="img/logos/LogoPeq2.png" style="width: 150px; height: 95px; margin-left: 0px;"></a>
                    </div>
                </div>


                <div class="col-md-7 col-sm-6">
                <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">
                            <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                            <li class="hidden">
                                <a class="page-scroll" href="#page-top"></a>
                            </li>
                            <li>
                                <a class="page-scroll" href="#productos" style="font-size: 15px;">Productos</a>
                            </li>
                            <li>
                                <a class="page-scroll" href="#contacto" style="font-size: 15px;">Contactenos</a>
                            </li>
                            <li>
                                <a class="page-scroll" href="#proveedores" style="font-size: 15px;"">Proveedores</a>
                            </li>
                            <li>
                                <a class="page-scroll" href="#pedidos" style="font-size: 15px;">Comprar</a>
                            </li>
                            <li>
                                <a class="page-scroll" href="#nosotros" style="font-size: 15px;">Nosotros</a>
                            </li>
                            <li>
                                <a class="page-scroll" href="#novedades" style="font-size: 15px;">Novedades</a>
                            </li>

                        </ul>
                    </div>
                <!-- /.navbar-collapse -->
                </div>

                <div class="col-md-3 col-sm-4">
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

    <div class="container">

        <!--Carrousel_Intro-section-->
        <div class="row">
            <div class="col-md-12">
                <section id="intro" class="intro-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <img src="img/soldador.jpg" alt="lmpletecSAS1">
                                            <div class="carousel-caption">
                                                <!--<h2>Proveedores</h2>
                                                <h3>Contamos con una gran gama de proveedores</h3>-->
                                            </div>
                                        </div>

                                        <div class="item">
                                            <img src="img/soldador.jpg" alt="lmpletecSAS2">
                                            <div class="carousel-caption">
                                                <!--<h2>Productos</h2>
                                                <h3>Tenemos todo lo que usted necesita</h3>-->                         
                                            </div>
                                        </div>

                                        <div class="item">
                                            <img src="img/soldador.jpg" alt="lmpletecSAS2">
                                            <div class="carousel-caption">
                                                <!--<h2>Productos</h2>
                                                <h3>Tenemos todo lo que usted necesita</h3>-->                         
                                            </div>
                                        </div>                         
                                    </div>
                                </div>

                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <!--productos-section-->
        <div class="row">
            <div class="col-md-12">
                <section id="productos" class="productos-section">
                    <div class="container">
                        <!--<h1 style="color: black;">Servicios</h1>-->
                        <div class="row ">
                            <div class="col-md-4">
                                <div class="contenedor-img ejemplo-2">  
                                     <img src="img/soldador.jpg" style="width: 300px; height: 200px;">  
                                     <div class="mascara"></div> 
                                     <div class="contenido">
                                         <h2>Soldadura</h2>  
                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tortor diam  in ullamcorper malesuada.</p>
                                         <a href="productos_soldaduras.php" class="link"><span class="glyphicon glyphicon-check"></span> Ver</a>  
                                     </div>
                                </div>
                            </div>




                            <div class="col-md-4">
                                <div class="contenedor-img ejemplo-2">  
                                     <img src="img/soldador.jpg" style="width: 300px; height: 200px;">  
                                     <div class="mascara"></div> 
                                     <div class="contenido">
                                         <h2>Equipos</h2>  
                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tortor diam  in ullamcorper malesuada.</p>
                                         <a href="#" class="link"><span class="glyphicon glyphicon-check"></span> Ver</a>
                                     </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="contenedor-img ejemplo-2">  
                                     <img src="img/soldador.jpg" style="width: 300px; height: 200px;">  
                                     <div class="mascara"></div> 
                                     <div class="contenido">
                                         <h2>Herramientas</h2>  
                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tortor diam  in ullamcorper malesuada.</p>
                                         <a href="#" class="link"><span class="glyphicon glyphicon-check"></span> Ver</a>
                                     </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="contenedor-img ejemplo-2">  
                                     <img src="img/soldador.jpg" style="width: 300px; height: 200px;">  
                                     <div class="mascara"></div> 
                                     <div class="contenido">
                                         <h2>Accesorios</h2>  
                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tortor diam  in ullamcorper malesuada.</p>
                                         <a href="#" class="link"><span class="glyphicon glyphicon-check"></span> Ver</a>
                                     </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="contenedor-img ejemplo-2">  
                                     <img src="img/soldador.jpg" style="width: 300px; height: 200px;">  
                                     <div class="mascara"></div> 
                                     <div class="contenido">
                                         <h2>Seg. Industrial</h2>  
                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tortor diam  in ullamcorper malesuada.</p>
                                         <a href="#" class="link"><span class="glyphicon glyphicon-check"></span> Ver</a>
                                     </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="contenedor-img ejemplo-2">  
                                     <img src="img/soldador.jpg" style="width: 300px; height: 200px;">  
                                     <div class="mascara"></div> 
                                     <div class="contenido">
                                         <h2>Abrasivos</h2>  
                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tortor diam  in ullamcorper malesuada.</p>
                                         <a href="#" class="link"><span class="glyphicon glyphicon-check"></span> Ver</a>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <!--Contacto-section-->
        <div class="row">
            <div class="col-md-12">
                <section id="contacto" class="contacto-section">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-offset-1 col-md-5">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                      <label class="control-label col-sm-2" for="email">Empresa:</label>
                                      <div class="col-sm-offset-1 col-sm-9">
                                        <input type="text" class="form-control" id="email" placeholder="Ingresa el nombre de tu empresa">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label col-sm-2" for="email">E-mail:</label>
                                      <div class="col-sm-offset-1 col-sm-9">
                                        <input type="email" class="form-control" id="email" placeholder="Ingresa tu correo de contacto">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label col-sm-2" for="email">Ciudad:</label>
                                      <div class="col-sm-offset-1 col-sm-3">
                                        <input type="text" class="form-control" id="ciudad" placeholder="Ingresa la ciudad donde te encuentras">
                                      </div>
                                      <label class="control-label col-sm-2" for="email">Telefono:</label>
                                      <div class="col-sm-offset-1 col-sm-3">
                                        <input type="text" class="form-control" id="telefono" placeholder="Ingresa telefono">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label col-sm-2" for="email">Dirección:</label>
                                      <div class="col-sm-offset-1 col-sm-9">
                                        <input type="text" class="form-control" id="direccion" placeholder="Ingresa la dirección de tu empresa">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label col-sm-2" for="email">Solicitud:</label>
                                      <div class="col-sm-offset-1 col-sm-9">
                                        <select class="form-control">
                                            <option selected value="0"> Elige una opción </option>
                                                <option value="1">Compra</option> 
                                                <option value="2">Cotización</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-sm-12">
                                        <textarea class="form-control" rows="2" placeholder="Ingresa aca tu solicitud"></textarea>
                                      </div>
                                    </div>

                                  <button type="submit" class="btn btn-default"><b>Enviar</b></button>
                                </form>
                            </div>

                            <div class="col-md-6">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.917291577765!2d-74.11610578612873!3d4.608826243732816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f99483f731cb9%3A0x3521c7bacd125f84!2sCl.+1g+%2340a-15%2C+Bogot%C3%A1%2C+Colombia!5e0!3m2!1ses!2ses!4v1474336997299" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                         
                        <div class="row">   
                            <div class="col-md-12">
                                <div class="social">
                                    <ul>
                                        <div class="caja-redes">
                                           <a href="#contacto" class="icon-button linkedin"><i class="icon-linkedin"></i><span></span></a>
                                           <!--<a href="#" class="icon-button pinterest"><i class="icon-pinterest"></i><span></span></a>-->
                                           <a href="#contacto" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
                                           <a href="#contacto" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
                                           <a href="#contacto" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>    
                    </div>
                </section>
            </div>
        </div>


        <!--Proveedores-section-->
        <div class="row">
            <div class="col-md-12">
                <section id="proveedores" class="proveedores-section">
                    <div class="container">
                        <!--<h1 style="color: white;">Proveedores</h1>-->
                        <div class="row">
                            <div class="col-md-3">
                                <div class="contenedor-img ejemplo-3">  
                                     <img src="img/soldador.jpg" style="width: 300px; height: 200px;">  
                                     <div class="mascara">
                                         <h2>West-arco</h2>  
                                         <p>Gran experiencia y confiabilidad.</p>
                                         <a href="http://www.westarco.com/westarco/sp/index.cfm" class="link" target="_blank">Ver más</a>  
                                     </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="contenedor-img ejemplo-3">  
                                     <img src="img/soldador.jpg" style="width: 300px; height: 200px;">  
                                     <div class="mascara">
                                         <h2>Bosh</h2>  
                                         <p>Gran experiencia y confiabilidad.</p>
                                         <a href="http://www.colombia.bosch.com.co/es/co/startpage_4/country-landingpage.php" class="link" target="_blank">Ver más</a>  
                                     </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="contenedor-img ejemplo-3">  
                                     <img src="img/soldador.jpg" style="width: 300px; height: 200px;">  
                                     <div class="mascara">
                                         <h2>LINCOLN ELECTRIC</h2>  
                                         <p>Gran experiencia y confiabilidad.</p>
                                         <a href="http://www.lincolnelectric.com.co/" class="link" target="_blank">Ver más</a>  
                                     </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="contenedor-img ejemplo-3">  
                                     <img src="img/soldador.jpg" style="width: 300px; height: 200px;">  
                                     <div class="mascara">
                                         <h2>DeWALT</h2>  
                                         <p>Gran experiencia y confiabilidad.</p>
                                         <a href="http://www.dewalt.com.co/" class="link" target="_blank">Ver más</a>  
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <!--pedidos-section-->
        <div class="row">
            <div class="col-md-12">
                <section id="pedidos" class="pedidos-section">
                    <div class="container">
                        <div class="row ">
                            <div class="col-md-12">
                                
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>


        <!--nosotros-section-->
        <div class="row">
            <div class="col-md-12">
                <section id="nosotros" class="nosotros-section">
                    <div class="container">
                        <div class="row ">
                            <div class="col-md-12">
                                
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <!--novedades-section-->
        <div class="row">
            <div class="col-md-12">
                <section id="novedades" class="novedades-section">
                    <div class="container">
                        <div class="row ">
                            <div class="col-md-12">
                                
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

            
    </div>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="bootstrap/js/jquery.easing.min.js"></script>
    <script src="bootstrap/js/scrolling-nav.js"></script>



</body>


</html>
