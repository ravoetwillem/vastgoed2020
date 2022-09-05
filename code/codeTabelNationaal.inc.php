<?php
      $_sql = "SELECT SUM( $_transacties2020) AS sumTransacties
      FROM t_prijzen2020
      WHERE t_prijzen2020.td_indexProvincies = $_provincieSelectie";
          $_result = $_conn->query($_sql);
          if ($_result->num_rows > 0) {
              while($row = $_result->fetch_assoc()) {  
                ${"_t$_provincieNaam"}=$row['sumTransacties'];
              }
          }
          $_sql = "SELECT ROUND(AVG($_prijzen2020),0) AS avgPrijzen,ROUND((((AVG($_prijzen2020)-AVG($_prijzen2019))/AVG($_prijzen2019))*100),2) AS avgProvincie1j,ROUND((((AVG($_prijzen2020)-AVG($_prijzen2011))/AVG($_prijzen2011))*100),2) AS avgProvincie10j   
         FROM t_prijzen2020
          INNER JOIN t_prijzen2019 
      ON t_prijzen2020.d_2020=t_prijzen2019.d_2019
      INNER JOIN t_prijzen2011 
      ON t_prijzen2020.d_2020=t_prijzen2011.d_2011
      WHERE t_prijzen2020.td_indexProvincies = $_provincieSelectie
      AND $_prijzen2020!='0'";
      $_result = $_conn->query($_sql);
      if ($_result->num_rows > 0) {
          while($row = $_result->fetch_assoc()) {  
            ${"_p$_provincieNaam"}=$row["avgPrijzen"]; 
            ${"_a$_provincieNaam"}=$row["avgProvincie1j"]; 
            ${"_b$_provincieNaam"}=$row["avgProvincie10j"]; 
          }
      }


?>