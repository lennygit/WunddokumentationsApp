<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
require "wdrequire.php";

require "wdfunctions.php";

navbarlogin();
?>
<head>
  <link rel="stylesheet" href="wdcss.css">
</head>
<body>
 <div>
   <form class="form" action="/main.php" method="post">
   <label>
     <select class="form-control" name="patient" size="1">
       <option value = "p23">Patient P23</option>
       <option value = "p65">Patient P65</option>
       <option value = "p92">Patient P92</option>
       <option value = "p21">Patient P21</option>
       <option value = "p26">Patient P26</option>
     </select>
   </label>
   <!--<button class="submit entry" onclick="thanks()">Wählen</button>-->
 <!--</form>
   <form class="form" method="post" action="/main.php">-->

       <input type="hidden" name="action" class="form-control" value="add">

       <input name="groesse" type="number" class="name entry" placeholder="Wundgröße in cm²" />



       <button class="submit entry" onclick="thanks()">Bestätigen</button>
   </form>
 </div>


</body>
<?php

$patient = ( isset($_POST['patient']) ? $_POST['patient'] : NULL ); //hat die Value der selected option
//echo "Patient: ".$patient;
$groesse = ( isset($_POST['groesse']) ? $_POST['groesse'] : NULL ); //hat die eingegebene Größe
if (isset( $_POST['action']) && $_POST['action']==="add" ) { //wenn auf Bestätigen gedrückt wurde
  $groessen = $_SESSION['s_groessen']; //es wird die Session Variable genommen
    $groessen = addgroesse($groessen, $groesse, $patient); //es wird die Groesse der Liste hinzug
    $_SESSION['s_groessen'] = $groessen;} //Die Session-Variable wird überschrieben
else{ //wenn die Seite geladen wrude ohne das auf Bestätigen gedrückt wurde -> beim ersten mal

  $groessen = array(); //es wird ein multidimensionales Array erstellt
  $groessen[0][flaeche] = 0; //mit Fläche
  $groessen[0][aenderung] = 0; // die Änderung zu dem vorherigen
  $groessen[0][patient] = NULL; //zuwelchen Patient es gehört
  $_SESSION['s_groessen']=$groessen;

}

arrayausgeben($groessen, $patient);

 ?>
