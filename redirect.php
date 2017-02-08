<?php
//VAR ZONE
$KEY="pagelanguage";
$ENGLISH="en";
$SPANISH="es";
$URI_EN="http://www.guillermocebollero.es/cv/en";
$URI_ES="http://www.guillermocebollero.es/cv/es";

if(!isset($_COOKIE[$KEY])) {
  //Error, debería estar puesta, redirigimos a default es
  setcookie($KEY, $SPANISH, time() + (10 * 365 * 24 * 60 * 60),"/");
  header("Location: ".$URI_ES);
}else{
  //Obtenemos el idioma, invertims y redirigimos
  switch ($_COOKIE[$KEY]) {
    case $ENGLISH:
      setcookie($KEY, $SPANISH, time() + (10 * 365 * 24 * 60 * 60),"/");
      header("Location: ".$URI_ES);
    break;

    default:
      setcookie($KEY, $ENGLISH, time() + (10 * 365 * 24 * 60 * 60),"/");
      header("Location: ".$URI_EN);
    break;
  }
}
die();
?>
