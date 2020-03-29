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
  echo 'Letzte Fläche: '.$letzteflaeche;

  $groessen[$count][flaeche] = $groesse;
  if($letzteflaeche != NULL){
    $groessen[$count][aenderung] =  (($groesse / $letzteflaeche) * 100) - 100;
  }
  return $groessen;
}
function arrayausgeben($groessen)
{
  $keys = array_keys($groessen);
  for($i = 1; $i < count($groessen); $i++) {
    echo $keys[$i] . ". Dokumentation<br>";
    foreach($groessen[$keys[$i]] as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }
    echo "}<br>";
}
}
?>
