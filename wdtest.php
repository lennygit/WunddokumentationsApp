<?php declare(strict_types=1);
require "wdfunctions.php";
use PHPUnit\Framework\TestCase;

final class GroessenTest extends TestCase
{
    //function addgroesse($groessen, $groesse, $patient)
    //Array erstellen
    $testpatient = "p1";
    $testgroeße = 150;
    $arraygroeße = array(); //es wird ein multidimensionales Array erstellt
    $arraygroeße[0][flaeche] = 100; //mit Fläche
    $arraygroeße[0][aenderung] = 0; // die Änderung zu dem vorherigen
    $arraygroeße[0][patient] = $testpatient;

    public function testGroesse(): void
    {

      addgroesse($arraygroeße,$testgroeße,$testpatient)
      //Ergebnis: arraygroesse[1][aenderung] = 50
      $this->assertSame(50,arraygroesse[1][aenderung])
    }

}
