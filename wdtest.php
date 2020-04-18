<?php
require "wdfunctions.php";
use PHPUnit\Framework\TestCase;

 class GroessenTest extends TestCase
{

    public function testGroesse()
    {
      $testpatient = "p1";
      $testgroeße = 150;
      $arraygroeße = array(); //es wird ein multidimensionales Array erstellt
      $arraygroeße[0][flaeche] = 100; //mit Fläche
      $arraygroeße[0][aenderung] = 0; // die Änderung zu dem vorherigen
      $arraygroeße[0][patient] = $testpatient;
      $array = array();
      $array=addgroesse($arraygroeße,$testgroeße,$testpatient);

      //Ergebnis der Funktion
      //array[[100][0]["p1"]][[150][50]["p1"]]
      //Ergebnis: arraygroesse[1][aenderung] = 50

      $this->assertEquals(50,$array[1][aenderung]);
    }

}
