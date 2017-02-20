<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Guillermo Cebollero</title>
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="/cv/css/font-awesome.min.css" rel="Stylesheet">
  <link href="/cv/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="/cv/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="/cv/css/widget.css" type="text/css" rel="stylesheet" />
</head>
<body>
  <!--    <div class="navbar-fixed">-->
  <nav class="white nav-top" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">CV Online</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="/resources/Guillermo Cebollero CV-ES.pdf"><i class="material-icons left">file_download</i>Descargar en PDF</a></li>
        <li><a href="http://www.guillermocebollero.es/redirect.php"><i class="material-icons left">translate</i> Change to English version</a></li>
      </ul>
      <ul id="nav-mobile" class="side-nav show-on-medium-and-down">
        <li><div class="userView">
          <div class="background">
            <img src="/cv/images/wood-background.jpg">
          </div>
          <a href="#!user"><img class="circle" src="../images/profilePic.jpg"></a>
          <a href="#!name"><span class="white-text name">Guillermo Cebollero</span></a>
          <a href="#!email"><span class="white-text email">guillermocebollero@gmail.com</span></a>
        </div></li>
        <li id="menu_about" class="active"><a href="#"><i class="material-icons left">portrait</i>Sobre mí</a></li>
        <li id="menu_language"><a href="#language"><i class="material-icons left">language</i>Idiomas</a></li>
        <li id="menu_abilities" ><a href="#abilities"><i class="material-icons left">attach_file</i>Habilidades</a></li>
        <li id="menu_contact"><a href="#contact"><i class="material-icons left">contact_mail</i>Contacto</a></li>
        <li id="menu_social"><a href="#social"><i class="material-icons left">share</i>Redes sociales</a></li>
        <li><a href="../../resources/Guillermo Cebollero CV-ES.pdf"><i class="material-icons left">file_download</i>Descargar en PDF</a></li>
        <li><div class="divider"></div></li>
        <li><a href="http://www.guillermocebollero.es/redirect.php"><i class="material-icons left">translate</i> Change to English version</a></li>
        <li><div class="divider"></div></li>
        <li><a href="404/"><i class="material-icons left">error</i>Página 404</a></li>
        <li><div class="divider"></div></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse show-on-large show-on-medium"><i class="material-icons indigo-text">menu</i></a>
    </div>
  </nav>
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div id="abilities" class="container">
        <div class="row center">
          <div class="chip chip-big col s8 offset-s2 left-align">
            <i class="material-icons left big-chip-icon">attach_file</i> Habilidades
          </div>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="/cv/images/background2.jpg" alt="Unsplashed background img 2"></div>
  </div>
  <div class="container">
    <br><br>
    <div class="col s12 m7">
      <p class="flow-text center">La escala va desde 1 (Conocimiento básico) hasta 5 (Experto).</p>
    </div>
    <div class="section">
      <!--   Icon Section   -->
      <div class="row">
      <?php
      //VAR ZONE
      $KEY="pagelanguage";
      $SPANISH="es";

      $jsonfile = file_get_contents('./abilities.json');
      $json = json_decode($jsonfile);
      $i = 0;
      foreach ($json as $ability) {
        ?>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="<?echo $ability->imageURI;?>">
            </div>
            <div class="card-content">
              <span class="card-title grey-text text-darken-4">
                <? if $_COOKIE[$KEY]===$SPANISH ? echo $ability->name_ES; : echo $ability->name_EN?>
                <i class="material-icons right">code</i></span>
                <ul class="pagination center">
                  <li <? if ($ability->value>0){ echo 'class="active indigo"';}?>><a>1</a></li>
                  <li <? if ($ability->value>1){ echo 'class="active indigo"';}?>><a>2</a></li>
                  <li <? if ($ability->value>2){ echo 'class="active indigo"';}?>><a>3</a></li>
                  <li <? if ($ability->value>3){ echo 'class="active indigo"';}?>><a>4</a></li>
                  <li <? if ($ability->value>4){ echo 'class="active indigo"';}?>><a>5</a></li>
                </ul>
              </div>
              <div class="card-action">
                <a href="javaScript:void(0);" class="activator">Mas info</a>
              </div>
              <div class="card-reveal center">
                <span class="card-title grey-text text-darken-4">C++<i class="material-icons right">close</i></span>
                <p class="flow-text">Experiencia en proyecto pequeños y medios. Uso de estructuras de datos y manejo de ficheros.</p>
              </div>
            </div>
          </div>
          <?
        }
        ?>
        <br><br>
      </div>
    </div>
  </div>
  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h5 class="white-text">Agradecimientos</h5>
          <h6 class="white-text"> Página web desarrollada con <a class="orange-text" href="http://www.materializecss.com">MaterializeCSS</a> y fotos de <a class="orange-text" href="http://www.freepik.es/onlyyouqj">@onlyyouqj</a></h6>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        Última modificación: <span id="footerLastModified">DATE</span>
        <span id="cookies" class="right"><a href="#" data-toggle="modal" data-target="modalCookies" class="orange-text bold"><h6>Política de cookies</h6></a></span>
        <div id="modalCookies" class="modal">
          <div class="modal-content black-text">
            <h4>Política de cookies</h4>
            <p class="flow-text">Cookie es un fichero que se descarga en su ordenador al acceder a determinadas páginas web. Las cookies permiten a una página web, entre otras cosas, almacenar y recuperar información sobre los hábitos de navegación de un usuario o de su equipo y, dependiendo de la información que contengan y de la forma en que utilice su equipo, pueden utilizarse para reconocer al usuario.. El navegador del usuario memoriza cookies en el disco duro solamente durante la sesión actual ocupando un espacio de memoria mínimo y no perjudicando al ordenador. Las cookies no contienen ninguna clase de información personal específica, y la mayoría de las mismas se borran del disco duro al finalizar la sesión de navegador (las denominadas cookies de sesión).</p>
            <br>
            <p class="flow-text">La mayoría de los navegadores aceptan como estándar a las cookies y, con independencia de las mismas, permiten o impiden en los ajustes de seguridad las cookies temporales o memorizadas.</p>
            <br>
            <h4>¿Qué tipos de cookies utiliza esta página web?</h4>
            <p class="flow-text"> Cookies técnicas: Son aquéllas que permiten al usuario la navegación a través de una página web, plataforma o aplicación y la utilización de las diferentes opciones o servicios que en ella existan como, por ejemplo, controlar el tráfico y la comunicación de datos, identificar la sesión, acceder a partes de acceso restringido, recordar los elementos que integran un pedido, realizar el proceso de compra de un pedido, realizar la solicitud de inscripción o participación en un evento, utilizar elementos de seguridad durante la navegación, almacenar contenidos para la difusión de videos o sonido o compartir contenidos a través de redes sociales.</p>
            <br>
            <p class="flow-text"> Cookies de personalización: Son aquéllas que permiten al usuario acceder al servicio con algunas características de carácter general predefinidas en función de una serie de criterios en el terminal del usuario como por ejemplo serian el idioma, el tipo de navegador a través del cual accede al servicio, la configuración regional desde donde accede al servicio, etc.</p>
            <br>
            <p class="flow-text"> Cookies de análisis: Son aquéllas que bien tratadas por nosotros o por terceros, nos permiten cuantificar el número de usuarios y así realizar la medición y análisis estadístico de la utilización que hacen los usuarios del servicio ofertado. Para ello se analiza su navegación en nuestra página web con el fin de mejorar la oferta de productos o servicios que le ofrecemos.</p>
            <br>
            <p class="flow-text"> Cookies de terceros: La Web de guillermocebollero.es puede utilizar servicios de terceros que, por cuenta de guillermocebollero.es, recopilaran información con fines estadísticos, de uso del Site por parte del usuario y para la prestacion de otros servicios relacionados con la actividad del Website y otros servicios de Internet. </p>
          </div>
          <div class="modal-footer">
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Aceptar</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="/cv/js/materialize.min.js"></script>
  <script src="/cv/js/init.js"></script>
  <script src="/cv/js/widget.js"></script>
  <script src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
  <script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
</body>
</html>
