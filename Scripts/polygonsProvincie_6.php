<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/stijlblad.css" rel="stylesheet" type="text/css">
    <title>TestDoc_ImmoBelgie</title>
</head>
<body>

<?php
    //********** Initialisatie
	$_srv = $_SERVER['PHP_SELF'];
	// database connection en selection
	require_once("../connections/pdo.inc.php");
    $_polygon = 'd_gemeentePolygons';
    $_provincie = 'provAntwerpen';


 $_sql = "SELECT d_gemeentePolygons
 FROM t_polygonen 
 
 WHERE td_provincies=1 "; //INNER JOIN t_gemeenten.d_gemeente_NL ON t_polygonen.td_gemeenten = t_gemeenten.d_indexGemeenten


 //INNER JOIN t_gemeenten.d_gemeente_NL ON t_polygonen.d_indexPolygons = t_gemeenten.d_indexGemeenten
 //INNER JOIN t_prijzen2020.d_prijzenV2020 ON t_polygonen.d_indexPolygons = t_prijzen2020.d_2020  //

 $_gemeenteNaam = $row['t_gemeenten.d_gemeente_NL'];

$_output.=" 
<div id='kaarten'>
<div class='kaartPrijzen inline'>
<svg class='$_provincie'>";
$result = $_conn->query($_sql);
if ($result->num_rows > 0) {
    $_i=1;
while($row = $result->fetch_assoc()) { 
   $_output.="<polygon class='gemeentenProvincie' id='p".$_i."' points='$row[$_polygon]'/>"; 
   //$_output.="<polygon id='p".$_gemeenteNaam."' points='$row[$_polygon]'/>"; 
   $_i=$_i+1;
}}
$_output.="<
/svg>
</div>

<div class='kaartTransacties inline'>
<svg class='$_provincie'>";
$result = $_conn->query($_sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) { 
    $_output.="<polygon class='gemeentenProvincie' id='t".$_i."' points='$row[$_polygon]'/>"; 
    //$_output.="<polygon id='t".$_gemeenteNaam."' points='$row[$_polygon]'/>"; 
    $_i=$_i+1; 
}}
$_output.="<
/svg>
</div>
</div>
";
echo($_output);
//localhost:8888/scripts/polygonsProvincie_6.php

/*create view Antwerpen AS
SELECT d_gemeentePolygons,t_gemeenten.d_gemeente_NL,t_prijzen2020.d_prijzenV2020
FROM t_polygonen 
INNER JOIN t_gemeenten.d_gemeente_NL ON t_polygonen.d_indexPolygons = t_gemeenten.d_indexGemeenten
INNER JOIN t_prijzen2020.d_prijzenV2020 ON t_polygonen.d_indexPolygons = t_prijzen2020.d_2020
WHERE td_indexProvincies=1 ;*/
?>


</body>
</html>

