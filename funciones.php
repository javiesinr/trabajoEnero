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


function destinos($arraydestino,$select){
    echo "ultimos destinos";
    foreach ($arraydestino as $destinos){
        $arraydestino as $destinosu){
            $destino=$destinosu['Destino'];
            $if ($vuelo==$selector){
                echo$destino.;
                }
        }
        

        function fabricantes ($arrayfabricante,$select){
            foreach ($arrayfabricante as $fbra){
            $fabricante=$fbra["Fabricante avion"];
            $vuelo=$fbra["Vuelo"]:
            ($vuelo==-$select){
   echo "El fabricante es:". $fabricante ;
             }
         }
       }


       function minutosvuelo($arrayduracionviaje,$select){
        $n=0;
        foreach 
        ($arrayduracionviaje as $dura){
        $duracionvia=$duravia1["Duración viaje"];
        $vuelo=$duravia1("Vuelo");
        if ($vuelo=$selector){
        $n=$duravia;
        }
    } echo "Minutos totales:";  


    function destinos($arraydestino,$select){
        echo"Los destinos son:"
         foreach ($arraydestino as $destino) {
        $destino=$destino1["Destino"];
        $vuelo=$destino1["Vuelo"]
        if
        ($vuelo==$select){
            echo $destino;
        }
    }

    function media ($arrayduracionviaje, $select){
        $n=0:
        $contador=0;
        foreach ($arrayfabricante as $duracion) {
        $vuelo==$duravia1("Vuelo"];
        $duracion1==$duracionvia['Duracion del viaje'];

        if ($vuelo==$selector){
        $i=$i+$duracionvia;
        $incremento++;
        }
    }

$i=$i/$incremento;
$n=$n/60;
echo "la media de hora es " .$i/$contador
    }
 
    function ($pasajerosarraynumeropasajeros,$select){

$i=0;
foreach ($pasajerosarraynumeropasajeros as $pasajeros1){
    $pasajerostotal=$pasajeros1["Numero de pasajeros"];
    $vuelo=$pasajeros1['Vuelo'];
    if ($vuelo==$select){
        $i=$i+$pasajerostotal1:
    }
}
echo "Numero de pasajero totales es ".$b;

  }
?>