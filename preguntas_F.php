<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
  <link rel="icon" type="image/png" href="img/cerdo.png"> <!-- img/favicon.png -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>COVID-19 INFO - <?php echo  $_GET["comuna"]; ?></title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="scss/paper-dashboard.css" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="demo/demo.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="https://gistcdn.githack.com/javierlopeza/89efdfe9bde99ce638706b0e632fa110/raw/fad2f254369fb54250260077a4c87391a6280c52/gotham.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
  <link rel="stylesheet" href="css/nuevos.css"/>
  <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="http://code.highcharts.com/highcharts.js"></script>
  <script src="http://code.highcharts.com/modules/exporting.js"></script>
</head>

<body class="">
        
    <div class="main-panel2">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <p class="sc-jhAzac eYPMpWw">
                <a href="http://localhost/covid/pagina_covid/dashboard.php" class="simple-text logo-normal">
                    COVID-19 INFO
                </a>
            </p>
          </div>
           
      </nav>
      <!-- End Navbar -->

        <div class="content">
            <div class="sc-hzDkRC kgAJCP">
                <p class="sc-jhAzac eYPMpW">Preguntas Frecuentes</p>

                <div class="sc-fBuWsC jQOCBP">
                    <p class="sc-fMiknA jTCLOH">¿De dónde se obtienen los datos?</p>
                    <p class="sc-dVhcbM hbLuBi">El Ministerio de Salud publica 2 documentos. El Reporte Diario, que informa la situación a nivel nacional y el Informe Epidemiológico, publicado 2 veces por semana, que informa la situación a nivel comunal. Estos documentos oficiales los puedes encontrar&nbsp;
                    <a href="https://www.gob.cl/coronavirus/cifrasoficiales/" target="_blank" class="sc-eqIVtm deIXJj">aquí</a>    
                    </p>
                </div>

                <div class="sc-fBuWsC jQOCBP">
                    <p class="sc-fMiknA jTCLOH">¿Cada cúanto se actualizan los casos por comuna?</p>
                    <p class="sc-dVhcbM hbLuBi">El Informe Epidemiológico se publica 2 veces por semana, lunes y viernes generalmente, por lo que los casos activos por comuna se están actualizando cada 3-4 días aproximadamente. A medida que el Ministerio de Salud aumente la frecuencia de publicación de estos informes, los datos en la página también se verán actualizados.
                    </p>
                </div>

                <div class="sc-fBuWsC jQOCBP">
                    <p class="sc-fMiknA jTCLOH">¿Qué es la tasa de incidencia?</p>
                    <p class="sc-dVhcbM hbLuBi">La tasa de incidencia se define como el número de casos nuevos de una enfermedad u otra condición de salud dividido por la población en riesgo de la enfermedad (población expuesta) en un lugar específico y durante un período especifico.
                    </p></br>
                    <p class="sc-dVhcbM jTCLOH">Calculo:</p>
                    <p class="sc-dVhcbM hbLuBi">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Número de casos nuevos ocurridos en un período dado  </p>
                    <p class="sc-dVhcbM hbLuBi">_____________________________________________________   *  100000 <p>     
                    <p class="sc-dVhcbM hbLuBi">Total de personas de la población en riesgo y en el período dado  </p>
                </div>
            </div>

            
        </div>

        


       
            
            
             <!-- INICIO FOOTER -->                 
            <footer class="footer footer-black  footer-white ">
              <div class="container-fluid">
                
              <div class="copyright pull-right">
                    Fuente: <a href="https://www.gob.cl/coronavirus/cifrasoficiales/">Cifras Oficiales, Gobierno de Chile</a>
                </div>
                
              </div>
            </footer>
            <!-- FIN FOOTER -->
    </div>
  </div>


  <script>
        $(document).ready(function(){
            

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
            },5000);
            
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