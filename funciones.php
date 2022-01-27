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

?>