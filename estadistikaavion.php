<?php
include "funciones.php";
include "arrays.php";
$select=$_POST["select"];
compañia($compañia,$select);
pajeros ($arraynumeropasajeros,$select);
destinos ($arraydestino,$select);
fabricantes ($arrayfabricante,$select);
minutosvuelo ($arrayduracionviaje,$select);
?>