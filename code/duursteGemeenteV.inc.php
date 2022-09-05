<?php


  //$_naamDuurste ="";
  //$_duurste="";

  $_duursteGemeente="";
    $_sql = "SELECT
    t_gemeenten.d_gemeente_NL,
    t_prijzen2020.d_prijzenV2020
    FROM
    t_gemeenten
    JOIN t_prijzen2020
    ON t_gemeenten.d_indexGemeenten = t_prijzen2020.d_2020 
    WHERE t_gemeenten.td_indexProvincies=1
    order by t_prijzen2020.d_prijzenV2020 DESC
    limit 1;

/*
    $_result = $_conn->query($_sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) { 


          $_duursteGemeente="Tis allemaal dezelfde zever";
          //$_duursteGemeente="$row['t_gemeenten.d_gemeente.NL'],$row['t_prijzen2020.d_prijzenV2020']";
          
          //$_duursteGemeente="$row[$_gemeente_taal],$row[$_prijzen2020]";
          //$_duursteGemeente="<p>DUURSTE GEMEENTE<br>".$row[$_gemeente_taal]."<br>een villa kost hier gemiddeld<br>".$row[$_prijzen2020]."€</p>";



           
        }
    }
    //echo($_duursteGemeente);

   // $_naamDuurste. = "LIER";    //'$row[$_gemeente_taal]';
    //$_duurste. = "200.000€";    //'number_format($row[$_prijzen2020], 0, '.','.')'; */
?>
