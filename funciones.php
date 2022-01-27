<?php

include 'arrays.php';

function compañias($compañia,$selct){
    foreach ($compañias as $compañi){
        $compañia2=$compañi['Compañias'];
        $vuelo=$compañi['Vuelos'];
        if ($vuelo==$select){
            echo "Su compañia es:".$compañia2."<br>";
           }
        }
    }

function pajeros($arraynumeropasajeros,$select){
    $n=0; //esto no se porque lo pongo pero me lo han dicho
    $contador=0;
    foreach($arraynumeropasajeros as $pajeros){
        $vuelo=$pajeros['vuelo'];
        $pajero=$pajero1['Numero de pasajeros'];//tampoco se porque va este aqui
if ($vuelo==$select){
    $n=$n+$pajero;
    $contador++;
}
    }

echo "La media de los pasajeros es: " .$n/$contador;
















?>