<?php

function redirect ($target) {

?>

    <meta http-equiv = "refresh" content = "0; url = http://pas18294.webspace.spengergasse.at/<?=$target?>.php">

<?php
}

function addgroesse($groessen, $groesse)
{
  $count = count($groessen);
  $letzteflaeche = end($groessen)['flaeche'];


  $groessen[$count][flaeche] = $groesse;
  $groessen[$count][aenderung] = ($groesse / $letzteflaeche) * 100 - 100;
  return $groessen;
}

?>
