<?php
error_reporting(E_ERROR | E_PARSE);


function addgroesse($groessen, $groesse, $patient)
{
  $count = count($groessen);

  //Alle Groessen durch gehen
  //Die letze Groesse mit dem Patient $patient nehmen
  $i = 0;
  foreach ($groessen as $value)
  {
    if($groessen[$i][patient] ==$patient )
    $letzteflaeche = $groessen[$i][flaeche];
    $i++;
  }
  //$letzteflaeche = end($groessen)['flaeche'];
  //echo 'Letzte Fläche: '.$letzteflaeche;

  $groessen[$count][flaeche] = $groesse;
  if($letzteflaeche != NULL){
    $groessen[$count][aenderung] =  round(((($groesse / $letzteflaeche) * 100) - 100),2);
  }
  $groessen[$count][patient] = $patient;
  return $groessen;
}
function arrayausgeben($groessen,$patient)
{

  $keys = array_keys($groessen);
  for($i = 1; $i < count($groessen); $i++) {
    if($groessen[$i][patient] === $patient)
    {
      echo "<div style ='margin-left: 5%;'><b>".$keys[$i] . ". Dokumentation<br></b>";
      foreach($groessen[$keys[$i]] as $key => $value) {
          echo $key . " : " . $value . "<br>";
      }
      echo "<br></div>";
    }

}
}


?>
