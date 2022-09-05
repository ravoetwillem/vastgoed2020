<?php

$_kaartPrijzen.="<svg x='$_x' y='$_y' viewBox='$_viewbox' class='$_provincie' id='svgPolyP'> ";
$_sql = "SELECT t_polygonen.d_gemeentePolygons,t_gemeenten.d_gemeente_NL,t_gemeenten.d_idNaam AS idNaam
FROM t_polygonen 
JOIN t_gemeenten ON t_polygonen.d_indexPolygons = t_gemeenten.d_indexGemeenten
WHERE d_indexPolygons=$_indexProvincie1";

$result = $_conn->query($_sql);
if ($result->num_rows > 0) {     
           
    while($row = $result->fetch_assoc()) {   
       $_kaartPrijzen.="<polygon class='prov' id=$row[$_infoNaam] onmouseover='showInfo(this.id)' onmouseleave='hideInfo()' points='$row[$_polygon]'/>";
    }
}

require("../code/infoKaartPrijzen.inc.php");

$_sql = "SELECT t_polygonen.d_gemeentePolygons,t_gemeenten.d_gemeente_NL,t_gemeenten.d_idNaam
FROM t_polygonen 
JOIN t_gemeenten ON t_polygonen.d_indexPolygons = t_gemeenten.d_indexGemeenten
WHERE t_polygonen.td_indexProvincies=12";

$_kaartTransacties.="<svg x='$_x' y='$_y' viewBox='$_viewbox' class='$_provincie' id='svgPolyT'> ";
$result = $_conn->query($_sql);
if ($result->num_rows > 0) {     
           
    while($row = $result->fetch_assoc()) {   
    $_kaartTransacties.="<polygon class='prov' style='stroke:white;' id=t$row[$_infoNaam] onmouseover='showInfo2(this.id)' onmouseleave='hideInfo2()' points='$row[$_polygon]'/>";

    if($_tNAAM==0){$_kaartTransacties.="<script>document.getElementById('tNAAM').style.fill='#C8C8C8';document.getElementById('tNAAM2').style.fill='#C8C8C8';</script>";}
    if($_tNAAM>=$_transacties0 && $_tNAAM<$_transacties1){$_kaartTransacties.="<script>document.getElementById('tNAAM').style.fill='aqua';>document.getElementById('tNAAM2').style.fill='aqua';</script>";}
    if($_tNAAM>=$_transacties1 && $_tNAAM<$_transacties2){$_kaartTransacties.="<script>document.getElementById('tNAAM').style.fill='deepskyblue';document.getElementById('tNAAM2').style.fill='deepskyblue';</script>";}
    if($_tNAAM>=$_transacties2 && $_tNAAM<$_transacties3){$_kaartTransacties.="<script>document.getElementById('tNAAM').style.fill='dodgerblue';document.getElementById('tNAAM2').style.fill='dodgerblue';</script>";}
    if($_tNAAM>=$_transacties3 && $_tNAAM<$_transacties4){$_kaartTransacties.="<script>document.getElementById('tNAAM').style.fill='blue';document.getElementById('tNAAM2').style.fill='blue';</script>";}
    if($_tNAAM>=$_transacties4){$_kaartTransacties.="<script>document.getElementById('tNAAM').style.fill='darkblue';document.getElementById('tNAAM2').style.fill='darkblue';</script>";}    
    }   
} 

    require("../code/infoKaartPrijzen.inc.php");
       ?>
