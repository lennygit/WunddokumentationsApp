<?php
session_start();
require "wdrequire.php";

require "wdfunctions.php";

navbarlogin();

$groesse = ( isset($_POST['groesse']) ? $_POST['groesse'] : NULL );
if (isset( $_POST['action']) && $_POST['action']==="add" ) {
  $groessen = $_SESSION['s_groessen'];
    $groessen = addgroesse($groessen, $groesse);
    $_SESSION['s_groessen'] = $groessen;}
else{
  echo "Erstes Mal";
  $groessen = array();
  $groessen[0][flaeche] = 0;
  $groessen[0][aenderung] = 0;
  $_SESSION['s_groessen']=$groessen;

}

arrayausgeben($groessen);

 ?>

 <head>
   <link rel="stylesheet" href="wdcss.css">
 </head>
<body>
  <div>
    <form class="form" method="post" action="/main.php">

        <input type="hidden" name="action" class="form-control" value="add">

        <input name="groesse" type="number" class="name entry" placeholder="Wundgröße in cm²" />



        <button class="submit entry" onclick="thanks()">Bestätigen</button>
    </form>
  </div>


</body>
