<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
  <link rel="icon" type="image/png" href="img/cerdo.png"> <!-- img/favicon.png -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>COVID-19 INFO</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="scss/paper-dashboard.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/nuevos.css"/>
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="demo/demo.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="https://gistcdn.githack.com/javierlopeza/89efdfe9bde99ce638706b0e632fa110/raw/fad2f254369fb54250260077a4c87391a6280c52/gotham.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
  

  <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="http://code.highcharts.com/highcharts.js"></script>
  <script src="http://code.highcharts.com/modules/exporting.js"></script>
</head>

<body class="">
    
  <!-- RECOLECCION DE DATOS -->
            <?php
                $url = "https://raw.githubusercontent.com/javierlopeza/datos-coronavirus-chile/production/data/chile.json";
                $json = file_get_contents($url);
                $datos = json_decode($json,true);
                //$region = $_GET["region"];
                //$comuna = $_GET["comuna"];

                $fallecidos = $datos["regiones"]["Valparaíso"]["fallecidos"]["value"];
                $fecha = $datos["regiones"]["Valparaíso"]["fallecidos"]["date"];
                $poblacion = $datos["regiones"]["Valparaíso"]["poblacion"];
                $confirmados = $datos["regiones"]["Valparaíso"]["confirmados"]["value"];
                $activos = $datos["regiones"]["Valparaíso"]["activos"]["value"];
                $activos_fecha = $datos["regiones"]["Valparaíso"]["activos"]["date"];
            ?>
            <!-- FIN RECOLECCION DE DATOS -->
    <div class="wrapper ">
      <!-- SIDEBAR -->
        <div class="sidebar" data-color="white" data-active-color="danger">
            <div class="logo">
                <a href="http://localhost/covid/pagina_covid/dashboard.php" class="simple-text logo-mini">
                    <div class="logo-image-small">
                        <img src="img/Virus Icon.png">
                    </div>
                </a>
                <a href="./dashboard.php" class="simple-text logo-normal">
                    COVID-19 INFO
                </a>
            </div>

            <div class="sidebar-wrapper">
                
            <ul class="nav">
            <button class="accordion">Provincia de Los Andes</button>
          <div class="panel">
          <div class="botonoes-selec">
          <a class="boton" href="http://localhost/covid/pagina_covid/regionycomunas.php?region=Valparaíso&comuna=Los Andes" class="button">Los Andes</a>
          <a class="boton" href="http://localhost/covid/pagina_covid/regionycomunas.php?region=Valparaíso&comuna=Calle Larga" class="button">Calle Larga</a>
          <a class="boton" href="http://localhost/covid/pagina_covid/regionycomunas.php?region=Valparaíso&comuna=Rinconada" class="button">Rinconada</a>
          <a class="boton" href="http://localhost/covid/pagina_covid/regionycomunas.php?region=Valparaíso&comuna=San Esteban" class="button">San Esteban</a>
          </div></div>

          <button class="accordion">Provincia de San Felipe</button>
          <div class="panel">
          <div class="botonoes-selec">
          <a class="boton" href="http://localhost/covid/pagina_covid/regionycomunas.php?region=Valparaíso&comuna=San Felipe" class="button">San Felipe</a>
          <a class="boton" href="http://localhost/covid/pagina_covid/regionycomunas.php?region=Valparaíso&comuna=Llaillay" class="button">Llaillay</a>
          <a class="boton" href="http://localhost/covid/pagina_covid/regionycomunas.php?region=Valparaíso&comuna=Putaendo" class="button">Putaendo</a>
          <a class="boton" href="http://localhost/covid/pagina_covid/regionycomunas.php?region=Valparaíso&comuna=Santa María" class="button">Santa María</a>
          <a class="boton" href="http://localhost/covid/pagina_covid/regionycomunas.php?region=Valparaíso&comuna=Catemu" class="button">Catemu</a>
          <a class="boton" href="http://localhost/covid/pagina_covid/regionycomunas.php?region=Valparaíso&comuna=Panquehue" class="button">Panquehue</a>
          </div></div>

          <button class="accordion">Provincia de Valparaíso</button>
          <div class="panel">
          <div class="botonoes-selec">
          <a class="boton" href="http://localhost/covid/pagina_covid/regionycomunas.php?region=Valparaíso&comuna=Valparaíso" class="button">Valparaíso</a>
          <a class="boton" href="http://localhost/covid/pagina_covid/regionycomunas.php?region=Valparaíso&comuna=Viña del Mar" class="button">Viña del Mar</a>
          <a class="boton" href="http://localhost/covid/pagina_covid/regionycomunas.php?region=Valparaíso&comuna=Concón" class="button">Concón</a>
          <a class="boton" href="http://localhost/covid/pagina_covid/regionycomunas.php?region=Valparaíso&comuna=Quintero" class="button">Quintero</a>
          <a class="boton" href="http://localhost/covid/pagina_covid/regionycomunas.php?region=Valparaíso&comuna=Puchuncaví" class="button">Puchuncaví</a>
          <a class="boton" href="http://localhost/covid/pagina_covid/regionycomunas.php?region=Valparaíso&comuna=Casablanca" class="button">Casablanca</a>
          <a class="boton" href="http://localhost/covid/pagina_covid/regionycomunas.php?region=Valparaíso&comuna=Juan Fernández" class="button">Juan Fernández</a>
          </div></div>      

          <button class="accordion">Provincia de Marga Marga</button>
          <div class="panel">
          <div class="botonoes-selec">
          <a class="boton" href="http://localhost/covid/pagina_covid/regionycomunas.php?region=Valparaíso&comuna=Quilpué" class="button">Quilpué</a>
          <a class="boton" href="http://localhost/covid/pagina_covid/regionycomunas.php?region=Valparaíso&comuna=Villa Alemana" class="button">Villa Alemana</a>
          <a class="boton" href="http://localhost/covid/pagina_covid/regionycomunas.php?region=Valparaíso&comuna=Limache" class="button">Limache</a>
          <a class="boton" href="http://localhost/covid/pagina_covid/regionycomunas.php?region=Valparaíso&comuna=Olmué" class="button">Olmué</a>
          </div></div>

          <button class="accordion">Provincia de San Antonio</button>
          <div class="panel">
          <div class="botonoes-selec">
          <a class="boton" href="http://localhost/covid/pagina_covid/regionycomunas.php?region=Valparaíso&comuna=San Antonio" class="button">San Antonio</a>
          <a class="boton" href="http://localhost/covid/pagina_covid/regionycomunas.php?region=Valparaíso&comuna=Cartagena" class="button">Cartagena</a>
          <a class="boton" href="http://localhost/covid/pagina_covid/regionycomunas.php?region=Valparaíso&comuna=El Tabo" class="button">El Tabo</a>
          <a class="boton" href="http://localhost/covid/pagina_covid/regionycomunas.php?region=Valparaíso&comuna=El Quisco" class="button">El Quisco</a>
          <a class="boton" href="http://localhost/covid/pagina_covid/regionycomunas.php?region=Valparaíso&comuna=Algarrobo" class="button">Algarrobo</a>
          <a class="boton" href="http://localhost/covid/pagina_covid/regionycomunas.php?region=Valparaíso&comuna=Santo Domingo" class="button">Santo Domingo</a>
          </div></div>

          <button class="accordion">Provincia de Quillota</button>
          <div class="panel">
          <div class="botonoes-selec">
          <a class="boton" href="http://localhost/covid/pagina_covid/regionycomunas.php?region=Valparaíso&comuna=Quillota" class="button">Quillota</a>
          <a class="boton" href="http://localhost/covid/pagina_covid/regionycomunas.php?region=Valparaíso&comuna=La Cruz" class="button">La Cruz</a>
          <a class="boton" href="http://localhost/covid/pagina_covid/regionycomunas.php?region=Valparaíso&comuna=Calera" class="button">Calera</a>
          <a class="boton" href="http://localhost/covid/pagina_covid/regionycomunas.php?region=Valparaíso&comuna=Nogales" class="button">Nogales</a>
          <a class="boton" href="http://localhost/covid/pagina_covid/regionycomunas.php?region=Valparaíso&comuna=Hijuelas" class="button">Hijuelas</a>
          </div></div>

          <button class="accordion">Provincia de Petorca</button>
          <div class="panel">
          <div class="botonoes-selec">
          <a class="boton" href="http://localhost/covid/pagina_covid/regionycomunas.php?region=Valparaíso&comuna=Petorca" class="button">Petorca</a>
          <a class="boton" href="http://localhost/covid/pagina_covid/regionycomunas.php?region=Valparaíso&comuna=La Ligua" class="button">La Ligua</a>
          <a class="boton" href="http://localhost/covid/pagina_covid/regionycomunas.php?region=Valparaíso&comuna=Cabildo" class="button">Cabildo</a>
          <a class="boton" href="http://localhost/covid/pagina_covid/regionycomunas.php?region=Valparaíso&comuna=Zapallar" class="button">Zapallar</a>
          <a class="boton" href="http://localhost/covid/pagina_covid/regionycomunas.php?region=Valparaíso&comuna=Papudo" class="button">Papudo</a>
          </div></div>

          <button class="accordion">Isla de Pascua</button>
          <div class="panel">
          <div class="botonoes-selec">
          <a class="boton" href="http://localhost/covid/pagina_covid/regionycomunas.php?region=Valparaíso&comuna=Isla de Pascua" class="button">Isla de Pascua</a>
          </div></div>
                </ul>
            </div>
        </div>
      <!-- FIN SIDEBAR -->

        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                    <button type="button" class="navbar-toggler">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>
                    </div>
                    <a class="navbar-brand">Región de Valparaíso</a>
                   
                </div>

                <div class="row">
                        <div class="col-md-12 justify-content-right">
                            <button class="redondo" id="btnSubmit"></button>
                            <div id= "myAlert" class="alert alert-info collapse">
                                Se han actualizado los datos al 
                                <?php 
                                    setlocale(LC_TIME, 'spanish');
                                    echo strftime('%e de %B', strtotime($activos_fecha));
                                ?> 
                            </div>
                        </div>
                </div>
            </div>
            </nav>
            <!-- End Navbar -->


            <div class="content">

            <!-- TARJETAS DE INFORMACION -->
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                            <i class="nc-icon nc-globe text-warning"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">     
                            <div class='numbers'>
                            <p class='card-category'>Población</p>
                            <?php  echo "<p class='card-title'>".$poblacion."</p>";?>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                        
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                            <i class="nc-icon nc-check-2 text-success"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                        
                        <div class="numbers">
                            <p class="card-category">Confirmados</p>
                            <?php echo  "<p class='card-title'>".$confirmados."<p>";?>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                        
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                            <i class="nc-icon nc-ambulance text-danger"></i>
                            </div>
                        </div>
                        
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                            <p class="card-category">Casos activos</p>
                            <?php echo "<p class='card-title'>".$activos."<p>";?>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                    
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                            <i class="nc-icon nc-simple-remove text-primary"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                            <p class="card-category">Fallecidos</p>
                            <?php echo "<p class='card-title'>".$fallecidos."<p>";?>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                        
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <!-- FIN TARJETAS DE INFORMACION -->
            
            <!-- GRAFICO -->
            <div class="row">
                <div class="col-md-12">
                <div class="card">
                    <div id="grafica"></div>
                        <script>
                            $(function($){
                                $('#grafica').highcharts({
                                    title:{text:'Casos Activos'},
                                    xAxis:{categories:[
                                        <?php
                                            setlocale(LC_TIME, 'spanish');
                                            $url = "https://raw.githubusercontent.com/javierlopeza/datos-coronavirus-chile/production/data/chile.json";
                                            $json = file_get_contents($url);
                                            $datos = json_decode($json,true);
                                            $file = [];
                                            $serie = $datos ["regiones"]["Valparaíso"]["series"]["activos"];
                                            foreach($serie as $data=>$d){
                                                while(list($ind,$val)=each($d)){
                                                    if($ind=="date"){
                                                    $file[] = [$val];
                                                    }
                                                }
                                            }
                                            $r1= str_replace('[','',json_encode($file));
                                        ?>
                                        <?php 
            
                                            $r2= str_replace(']','',$r1);
                                            echo $r2;
                                            //echo strftime('%d%Y', strtotime($r2));
                                        ?>
                    
                                    ]},
                                    yAxis:{className:'linea',title:'Porcentaje %',plotLines:[{value:0,width:1,color:'#808080'}]},
                                    //tooltip:{valueSuffix:'%'},
                                    chart: {
                                        //width:950,
                                        style: {
                                        fontFamily: 'GothamPro'
                                        }
                                    },
                
                
                                    plotOptions: {
                                        series:{
                                          color: "#748dee"
                                        },
                                        area: {
                                            marker: {
                                                enabled: false,
                                                symbol: 'circle',
                                                radius: 3,
                                                states: {
                                                    hover: {
                                                        enabled: true,
                                                        fillColor: '#748dee',
                                                        lineColor: '#FFFFFF'
                                                    }
                                                }
                                            }
                                        }
                                    },
        
                                    legend:{layout:'vertical',align:'right',verticalAlign:'middle',borderWidth:0},

                                    series:[{type: 'area',name: 'Casos activos',
                                        data:[
                                            <?php
                                                $url = "https://raw.githubusercontent.com/javierlopeza/datos-coronavirus-chile/production/data/chile.json";
                                                $json = file_get_contents($url);
                                                $datos = json_decode($json,true);
                                                $file = [];
                                                $serie = $datos ["regiones"]["Valparaíso"]["series"]["activos"];
                                                foreach($serie as $data=>$d){
                                                    while(list($ind,$val)=each($d)){
                                                        if($ind=="value"){
                                                            $file[] = [$val];
                                                        }
                                                    }
                                                }
                                                $r1= str_replace('[','',json_encode($file));
                                            ?>
                                            <?php 
                                                echo str_replace(']','',$r1);
                                            ?>
                                        ],

                                        fillColor: {
                                            linearGradient: {
                                                x1: 0,
                                                x2: 0,
                                                y1: 0,
                                                y2: 1
                                            },
                                            stops: [
                                                [0, '#5b78ff'],
                                                [1, '#f2f6ff']
                                            ]
                                        }
                                    }],  
                                    
                                    responsive: {
                                        rules: [{
                                            condition: {
                                            
                                            maxWidth: 950
                                            },
                                            chartOptions: {
                                                legend: {
                                                    align: 'center',
                                                    verticalAlign: 'bottom',
                                                    layout: 'horizontal'
                                                },
                                                yAxis: {
                                                    labels: {
                                                        align: 'left',
                                                        x: 0,
                                                        y: -5
                                                    },
                                                    title: {
                                                        text: null
                                                    }
                                                },
                                                subtitle: {
                                                    text: null
                                                },
                                                credits: {
                                                    enabled: false
                                                }
                                            }
                                        }]
                                    }

                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
            <!--FIN GRAFICO -->
            
            <!-- BOTONES -->
            
            <!-- FIN BOTONES -->                

            
            <!-- INICIO FOOTER -->                 
            <footer class="footer footer-black  footer-white ">
              <div class="container-fluid">
                
                <div class="copyright pull-right">
                    Fuente: <a href="https://www.gob.cl/coronavirus/cifrasoficiales/">Cifras Oficiales, Gobierno de Chile</a>
                    </br>
                    <a href="http://localhost/covid/pagina_covid/preguntas_F.php">Preguntas Frecuentes</a>
                  
                </div>
                
              </div>
            </footer>
            <!-- FIN FOOTER -->




        </div>
    </div>
   
    <script>
        $(document).ready(function(){
            setTimeout(function() {
        $(".redondo").fadeOut(0);
    },0);
    setTimeout(function() {
        $(".redondo").fadeIn(1500);
    },5000);
            $("#myAlert").show('fade');
            setTimeout(function(){
            $("#myAlert").hide('fade');
           },5000);

            $("#btnSubmit").click(function(){
                $("#myAlert").show('fade');
                setTimeout(function(){
            $("#myAlert").hide('fade');
            },5000);
            setTimeout(function() {
                $(".redondo").fadeOut(0);
            },0);
            setTimeout(function() {
            $(".redondo").fadeIn(1500);
            },5500);
            
            });
            
        })
    </script>      
  <!--Acordeon js -->
  <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}
</script>
  <!--   Core JS Files   -->
  <script src="js/core/jquery.min.js"></script>
  <script src="js/core/popper.min.js"></script>
  <script src="js/core/bootstrap.min.js"></script>
  <script src="js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>
</html>