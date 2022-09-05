<?php
    $_polygon = 'd_gemeentePolygons';
    $_gemeenteNaam = 'd_gemeente_NL';
    $_prijzen2020 = 'd_prijzenA2020';
    $_transactie = 'd_transactiesA2020';
    $_infoNaam =  'd_idNaam';
    $_transactie1 = 1;
    $_transactie2 = 1000;
    $_transactie3 = 2000;
    $_transactie4 = 3500;
    $_transactie5 = 8000;

    $_tList=array($_tPROVANTWERPEN,$_tPROVHAINAUT,$_tPROVLIMBURG,$_tPROVLIEGE,$_tPROVLUXEMBOURG,$_tPROVNAMUR,$_tPROVOOSTVLAANDEREN,$_tPROVVLAAMSBRABANT,$_tPROVBRABANTWALLON,$_tPROVWESTVLAANDEREN,$_tPROVBRUSSEL);

//XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

 //CREATE LIST

 //XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX       


$_infoNaam = 'd_idNaam';

$_sql3 = "SELECT
t_gemeenten.d_gemeente_NL,t_gemeenten.d_idNaam,t_prijzen2020.d_transactiesA2020

FROM
t_gemeenten
JOIN t_prijzen2020 ON t_gemeenten.d_indexGemeenten = t_prijzen2020.d_2020 
WHERE t_gemeenten.td_indexProvincies= $_provincieSelectie";


$result = $_conn->query($_sql3);
if ($result->num_rows > 0) {   
  $_i=1;
  while($row = $result->fetch_assoc()) {   

  ${"_klikGemeente_$_i"}='t'.$row['t_gemeente.d_idNaam'];

  //if($row['d_prijzenA2020']==0){ ${"_klikTransactie_$_i"}="-";} else {${"_klikTransactie_$_i"}= number_format($row['d_transactiesA2020'], 0, '.','.');}
  if($row['d_transactiesA2020']==0){ ${"_klikTransactie_$_i"}="-";} else {${"_klikTransactie_$_i"}= $row['d_transactiesA2020'];}
    
 $_i=$_i+1;
  }
}

require("../code/varInfoBox.inc.php");

//die("-- $_tAARTSELAAR --");



 //XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

 //SELECT GEMEENTE

 //XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX       

    $_sql = "SELECT d_gemeentePolygons,t_gemeenten.$_gemeenteNaam,t_gemeenten.$_infoNaam,t_prijzen2020.$_prijzen2020,t_prijzen2020.$_transactie,t_prijzen2019.$_prijzen2019,t_prijzen2011.$_prijzen2011
    FROM t_polygonen 
    JOIN t_gemeenten
    ON t_polygonen.d_indexPolygons = t_gemeenten.d_indexGemeenten
    JOIN t_prijzen2020
    ON t_polygonen.d_indexPolygons = t_prijzen2020.d_2020
    JOIN t_prijzen2019
    ON t_polygonen.d_indexPolygons = t_prijzen2019.d_2019
    JOIN t_prijzen2011
    ON t_polygonen.d_indexPolygons = t_prijzen2011.d_2011
    WHERE t_polygonen.td_indexProvincies= $_provincieSelectie order by t_gemeenten.d_gemeente_NL";

    $_kaartTransacties="<svg x='$_x' y='$_y' viewBox='$_viewbox' class='$_provincie' id='svgPolyT'>";

    $result = $_conn->query($_sql);
    if ($result->num_rows > 0) {         
        
        

        
                        
      /*  while($row = $result->fetch_assoc()) {               
            if($row[$_transactie]==0){$_kaartTransacties.="<polygon class='pOnbekend' id='t$row[$_infoNaam]'  onmouseover='showInfo2(this.id)' onmouseleave='hideInfo2()' points='$row[$_polygon]'/>";}    
            if($row[$_transactie]>=$_transactie1 && $row[$_transactie]<$_transactie2){$_kaartTransacties.="<polygon style='stroke:white;' class=' tTransactie1A' id=t$row[$_infoNaam]  onmouseover='showInfo2(this.id)' onmouseleave='hideInfo2()' points='$row[$_polygon]'/>";}
            if($row[$_transactie]>=$_transactie2 && $row[$_transactie]<$_transactie3){$_kaartTransacties.="<polygon style='stroke:white;' class=' tTransactie2A' id=t$row[$_infoNaam]  onmouseover='showInfo2(this.id)' onmouseleave='hideInfo2()' points='$row[$_polygon]'/>";}
            if($row[$_transactie]>=$_transactie3 && $row[$_transactie]<$_transactie4){$_kaartTransacties.="<polygon style='stroke:white;' class=' tTransactie3A' id=t$row[$_infoNaam]  onmouseover='showInfo2(this.id)' onmouseleave='hideInfo2()' points='$row[$_polygon]'/>";}
            if($row[$_transactie]>=$_transactie4 && $row[$_transactie]<$_transactie5){$_kaartTransacties.="<polygon style='stroke:white;' class=' tTransactie4A' id=t$row[$_infoNaam]  onmouseover='showInfo2(this.id)' onmouseleave='hideInfo2()' points='$row[$_polygon]'/>";}
            if($row[$_transactie]>=$_transactie5) {$_kaartTransacties.="<polygon style='stroke:white;'  class=' tTransactie5A' id=t$row[$_infoNaam]  onmouseover='showInfo2(this.id)' onmouseleave='hideInfo2()' points='$row[$_polygon]'/>";}
        }*/
//die("--$_tList[2]---");
    for($_i=0;$_i<13;$_i++){
        while($row = $result->fetch_assoc()) {               
            if($_tList[$_i]==0){$_kaartTransacties.="<polygon class='pOnbekend' id='t$row[$_infoNaam]'  onmouseover='showInfo2(this.id)' onmouseleave='hideInfo2()' points='$row[$_polygon]'/>";}    
            if($_tList[$_i]>=$_transactie1 && $_tList[$_i]<$_transactie2){$_kaartTransacties.="<polygon style='stroke:white;' class=' tTransactie1A' id=t$row[$_infoNaam]  onmouseover='showInfo2(this.id)' onmouseleave='hideInfo2()' points='$row[$_polygon]'/>";}
            if($_tList[$_i]>=$_transactie2 && $_tList[$_i]<$_transactie3){$_kaartTransacties.="<polygon style='stroke:white;' class=' tTransactie2A' id=t$row[$_infoNaam]  onmouseover='showInfo2(this.id)' onmouseleave='hideInfo2()' points='$row[$_polygon]'/>";}
            if($_tList[$_i]>=$_transactie3 && $_tList[$_i]<$_transactie4){$_kaartTransacties.="<polygon style='stroke:white;' class=' tTransactie3A' id=t$row[$_infoNaam]  onmouseover='showInfo2(this.id)' onmouseleave='hideInfo2()' points='$row[$_polygon]'/>";}
            if($_tList[$_i]>=$_transactie4 && $_tList[$_i]<$_transactie5){$_kaartTransacties.="<polygon style='stroke:white;' class=' tTransactie4A' id=t$row[$_infoNaam]  onmouseover='showInfo2(this.id)' onmouseleave='hideInfo2()' points='$row[$_polygon]'/>";}
            if($_tList[$_i]>=$_transactie5) {$_kaartTransacties.="<polygon style='stroke:white;'  class=' tTransactie5A' id=t$row[$_infoNaam]  onmouseover='showInfo2(this.id)' onmouseleave='hideInfo2()' points='$row[$_polygon]'/>";}
        }


    }    

    }
   require("../code/#infoKaartTransacties.inc.php");


   
?>

