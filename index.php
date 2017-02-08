<?php
//VAR ZONE
$KEY="pagelanguage";
$ENGLISH="en";
$SPANISH="es";
$URI_EN="http://www.guillermocebollero.es/cv/en";
$URI_ES="http://www.guillermocebollero.es/cv/es";

if(!isset($_COOKIE[$KEY])) {
  //Si es la primera sesión, miramos que lenguajes acepta
  $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
  switch ($lang){
    //Ponemos la cookie y redirigimos
    case $ENGLISH:
      setcookie($KEY, $ENGLISH, time() + (10 * 365 * 24 * 60 * 60),"/");
      header("Location: ".$URI_EN);
    break;

    default:
      setcookie($KEY, $SPANISH, time() + (10 * 365 * 24 * 60 * 60),"/");
      header("Location: ".$URI_ES);
    break;
  }
}else{
  //Obtenemos el idioma y redirigimos
  switch ($_COOKIE[$KEY]) {
    case $ENGLISH:
      header("Location: ".$URI_EN);
    break;

    default:
      header("Location: ".$URI_ES);
    break;
  }
}
die();
?>
