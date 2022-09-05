<?php
    $_polygon = 'd_gemeentePolygons';
    $_gemeenteNaam = 'd_gemeente_NL';
    $_prijzen2020 = 'd_prijzenH2020';
    $_prijzen2019 = 'd_prijzenH2019';
    $_prijzen2011 = 'd_prijzenH2011';
    $_infoNaam = 'd_idNaam';
    $_prijs0 = 1000;
    $_prijs1 = 100000;
    $_prijs2 = 125000;
    $_prijs3 = 150000;
    $_prijs4 = 175000;
    $_prijs5 = 200000;
    $_prijs6 = 225000;
    $_prijs7 = 250000;
    $_prijs8 = 275000;
    $_prijs9 = 300000;
    $_prijs10 = 325000;
    $_prijs11 = 350000;
    $_prijs12 = 375000;
    $_prijs13 = 400000;
    $_prijs14 = 450000;

//XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

//CREATE LIST

//XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX       


$_infoNaam = 'd_idNaam';

$_sql2 = "SELECT
t_gemeenten.d_gemeente_NL,t_gemeenten.d_idNaam,t_prijzen2020.d_prijzenH2020, t_prijzen2019.d_prijzenH2019, t_prijzen2011.d_prijzenH2011

FROM
t_gemeenten
JOIN t_prijzen2020 ON t_gemeenten.d_indexGemeenten = t_prijzen2020.d_2020 
JOIN t_prijzen2019 ON t_gemeenten.d_indexGemeenten = t_prijzen2019.d_2019 
JOIN t_prijzen2011 ON t_gemeenten.d_indexGemeenten = t_prijzen2011.d_2011 
WHERE t_gemeenten.td_indexProvincies= $_provincieSelectie";


$result = $_conn->query($_sql2);
if ($result->num_rows > 0) {   
  $_i=1;
  while($row = $result->fetch_assoc()) {   

    ${"_klikGemeente_$_i"}=$row['t_gemeente.d_idNaam'];
    if($row['d_prijzenH2019']==0 || $row['d_prijzenH2020']==0){ ${"_percent1j_$_i"}="-";}else{ ${"_percent1j_$_i"}= number_format(((($row['d_prijzenH2020']-$row['d_prijzenH2019']) / $row['d_prijzenH2019'])*100), 2, ',','.');}
    if($row['d_prijzenH2011']==0 || $row['d_prijzenH2020']==0){ ${"_percent10j_$_i"}="-";}else{ ${"_percent10j_$_i"}= number_format(((($row['d_prijzenH2020']-$row['d_prijzenH2011']) / $row['d_prijzenH2011'])*100), 2, ',','.');}
    if($row['d_prijzenH2020']==0){ ${"_klikPrijs_$_i"}="-";} else {${"_klikPrijs_$_i"}= number_format($row['d_prijzenH2020'], 0, '.','.');}
    if(${"_percent1j_$_i"}==-100){ ${"_percent1j_$_i"}="-";}
    if(${"_percent10j_$_i"}==-100){ ${"_percent10j_$_i"}="-";}

    $_i=$_i+1;
  }
}



require("../code/varInfoBox.inc.php");


//die("--$_pHerentals--");

 //XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

 //SELECT GEMEENTE

 //XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX       


    $_sql = "SELECT t_polygonen.d_gemeentePolygons,t_gemeenten.d_gemeente_NL,t_gemeenten.d_idNaam,t_prijzen2020.d_prijzenH2020,t_prijzen2019.d_prijzenH2019,t_prijzen2011.d_prijzenH2011 
    FROM t_polygonen 
    JOIN t_gemeenten ON t_polygonen.d_indexPolygons = t_gemeenten.d_indexGemeenten 
    JOIN t_prijzen2020 ON t_polygonen.d_indexPolygons = t_prijzen2020.d_2020 
    JOIN t_prijzen2019 ON t_polygonen.d_indexPolygons = t_prijzen2019.d_2019 
    JOIN t_prijzen2011 
    ON t_polygonen.d_indexPolygons = t_prijzen2011.d_2011 
    WHERE t_polygonen.td_indexProvincies=$_provincieSelectie";


    //samenstellen van de gemeenten volgens de prijslijst
    //die("--$_sql--");
    $_kaartPrijzen="<svg x='$_x' y='$_y' viewBox='$_viewbox' class='$_provincie' id='svgPolyP'>";
    $result = $_conn->query($_sql);
    if ($result->num_rows > 0) { 
      $_infoNaam = 'd_idNaam';     
       //die("65") ;                    
         
        while($row = $result->fetch_assoc()) {              
            if($row[$_prijzen2020]==0){$_kaartPrijzen.="<polygon style='stroke:white;' class=pOnbekend id=$row[$_infoNaam] onmouseover='showInfo(this.id)' onmouseleave='hideInfo()' points='$row[$_polygon]'/>";}
            if($row[$_prijzen2020]>=$_prijs0 && $row[$_prijzen2020]<$_prijs1){$_kaartPrijzen.="<polygon style='stroke:white;' class='pGroter0' id=$row[$_infoNaam] onmouseover='showInfo(this.id)' onmouseleave='hideInfo()' points='$row[$_polygon]'/>";}
            if($row[$_prijzen2020]>=$_prijs1 && $row[$_prijzen2020]<$_prijs2){$_kaartPrijzen.="<polygon style='stroke:white;' class='pGroter1' id=$row[$_infoNaam] onmouseover='showInfo(this.id)' onmouseleave='hideInfo()' points='$row[$_polygon]'/>";}
            if($row[$_prijzen2020]>=$_prijs2 && $row[$_prijzen2020]<$_prijs3){$_kaartPrijzen.="<polygon style='stroke:white;' class='pGroter2' id=$row[$_infoNaam] onmouseover='showInfo(this.id)' onmouseleave='hideInfo()' points='$row[$_polygon]'/>";}
            if($row[$_prijzen2020]>=$_prijs3 && $row[$_prijzen2020]<$_prijs4){$_kaartPrijzen.="<polygon style='stroke:white;' class='pGroter3' id=$row[$_infoNaam] onmouseover='showInfo(this.id)' onmouseleave='hideInfo()' points='$row[$_polygon]'/>";}
            if($row[$_prijzen2020]>=$_prijs4 && $row[$_prijzen2020]<$_prijs5){$_kaartPrijzen.="<polygon style='stroke:white;' class='pGroter4' id=$row[$_infoNaam] onmouseover='showInfo(this.id)' onmouseleave='hideInfo()' points='$row[$_polygon]'/>";}
            if($row[$_prijzen2020]>=$_prijs5 && $row[$_prijzen2020]<$_prijs6){$_kaartPrijzen.="<polygon style='stroke:white;' class='pGroter5' id=$row[$_infoNaam] onmouseover='showInfo(this.id)' onmouseleave='hideInfo()' points='$row[$_polygon]'/>";}
            if($row[$_prijzen2020]>=$_prijs6 && $row[$_prijzen2020]<$_prijs7){$_kaartPrijzen.="<polygon style='stroke:white;' class='pGroter6' id=$row[$_infoNaam] onmouseover='showInfo(this.id)' onmouseleave='hideInfo()' points='$row[$_polygon]'/>";}
            if($row[$_prijzen2020]>=$_prijs7 && $row[$_prijzen2020]<$_prijs8){$_kaartPrijzen.="<polygon style='stroke:white;' class='pGroter7' id=$row[$_infoNaam] onmouseover='showInfo(this.id)' onmouseleave='hideInfo()' points='$row[$_polygon]'/>";}
            if($row[$_prijzen2020]>=$_prijs8 && $row[$_prijzen2020]<$_prijs9){$_kaartPrijzen.="<polygon style='stroke:white;' class='pGroter8' id=$row[$_infoNaam] onmouseover='showInfo(this.id)' onmouseleave='hideInfo()' points='$row[$_polygon]'/>";}
            if($row[$_prijzen2020]>=$_prijs9 && $row[$_prijzen2020]<$_prijs10){$_kaartPrijzen.="<polygon style='stroke:white;' class='pGroter9' id=$row[$_infoNaam] onmouseover='showInfo(this.id)' onmouseleave='hideInfo()' points='$row[$_polygon]'/>";}
            if($row[$_prijzen2020]>=$_prijs10 && $row[$_prijzen2020]<$_prijs11){$_kaartPrijzen.="<polygon style='stroke:white;' class='pGroter10' id=$row[$_infoNaam] onmouseover='showInfo(this.id)' onmouseleave='hideInfo()' points='$row[$_polygon]'/>";}
            if($row[$_prijzen2020]>=$_prijs11 && $row[$_prijzen2020]<$_prijs12){$_kaartPrijzen.="<polygon style='stroke:white;' class='pGroter11' id=$row[$_infoNaam] onmouseover='showInfo(this.id)' onmouseleave='hideInfo()' points='$row[$_polygon]'/>";}
            if($row[$_prijzen2020]>=$_prijs12 && $row[$_prijzen2020]<$_prijs13){$_kaartPrijzen.="<polygon style='stroke:white;' class='pGroter12' id=$row[$_infoNaam] onmouseover='showInfo(this.id)' onmouseleave='hideInfo()' points='$row[$_polygon]'/>";}
            if($row[$_prijzen2020]>=$_prijs13 && $row[$_prijzen2020]<$_prijs14){$_kaartPrijzen.="<polygon style='stroke:white;' class='pGroter13' id=$row[$_infoNaam] onmouseover='showInfo(this.id)' onmouseleave='hideInfo()' points='$row[$_polygon]'/>";}
            if($row[$_prijzen2020]>=$_prijs14){$_kaartPrijzen.="<polygon style='stroke:white;' class='pGroter14' id=$row[$_infoNaam] onmouseover='showInfo(this.id)' onmouseleave='hideInfo()' points='$row[$_polygon]'/>";}    
        }
    }

//die("--$_nHeistopdenberg--");
require("../code/infoKaartPrijzen.inc.php");

?>
