<?php
 
$serverName = "DESKTOP-OKC6PDG\SQLEXPRESS"; 

$connectionInfo = array( "Database"=>"Excel");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

/*if( $conn ) {
     echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_erro(), true));
}*/

?>