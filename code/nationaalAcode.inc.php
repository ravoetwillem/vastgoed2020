<?php

//Gemiddelde percentage 1 jaar in de provincie $_NAAM
  $_sql = "SELECT ROUND((((AVG(t_prijzen2020.d_prijzenA2020)-AVG(t_prijzen2019.d_prijzenA2019))/AVG(t_prijzen2019.d_prijzenA2019))*100),2) AS avgProvincie1j 
  FROM t_prijzen2020 
  INNER JOIN t_prijzen2019 
  ON t_prijzen2020.d_2020 = t_prijzen2019.d_2019 
  WHERE t_prijzen2020.td_indexProvincies = $_provSelectie
  AND d_prijzenA2020!='0'";
  $_result = $_conn->query($_sql);  
  if ($_result->num_rows > 0) {
      while($row = $_result->fetch_assoc()) {  
         $_aNAAM = $row["avgProvincie1j"];
      }
   
  }

  //Gemiddelde percentage 10 jaar in de provincie $_NAAM
  $_sql = "SELECT ROUND((((AVG(t_prijzen2020.d_prijzenA2020)-AVG(t_prijzen2011.d_prijzenA2011))/AVG(t_prijzen2011.d_prijzenA2011))*100),2) AS avgProvincie10j 
  FROM t_prijzen2020 
  INNER JOIN t_prijzen2011 
  ON t_prijzen2020.d_2020 = t_prijzen2011.d_2011 
  WHERE t_prijzen2020.td_indexProvincies = $_provSelectie
  AND d_prijzenA2020!='0'";
  $_result = $_conn->query($_sql);  
  if ($_result->num_rows > 0) {
      while($row = $_result->fetch_assoc()) {  
         $_bNAAM = $row["avgProvincie10j"];
      }
   //die("---$_aNAAM---");
  }

//Gemiddelde prijs in de provincie $_NAAM
     $_sql = "SELECT ROUND(AVG($_prijzen2020),0) AS avgPrijzen
     FROM t_prijzen2020 
     WHERE td_indexProvincies = $_provSelectie
     AND $_prijzen2020!='0'"; 
     $_result = $_conn->query($_sql);  
     if ($_result->num_rows > 0) {
         while($row = $_result->fetch_assoc()) {  
             $_pNAAM = number_format($row["avgPrijzen"], 0, '.','.');
             if($_provSelectie==1){$_pANTWERPEN=$_pNAAM;}
             if($_provSelectie==2){$_pPROVBRUSSEL=$_pNAAM;}
             if($_provSelectie==3){$_pPROVHAINAUT=$_pNAAM;}
             if($_provSelectie==4){$_pPROVLIMBURG=$_pNAAM;}
             if($_provSelectie==5){$_pPROVLIEGE=$_pNAAM;}
             if($_provSelectie==6){$_pPROVLUXEMBOURG=$_pNAAM;}
             if($_provSelectie==7){$_pPROVNAMUR=$_pNAAM;}
             if($_provSelectie==8){$_pPROVOOSTVLAANDEREN=$_pNAAM;}
             if($_provSelectie==9){$_pPROVVLAAMSBRABANT=$_pNAAM;}
             if($_provSelectie==10){$_pPROVBRABANTWALLON=$_pNAAM;}
             if($_provSelectie==11){$_pPROVWESTVLAANDEREN=$_pNAAM;}
          }  
          //die("$_PROVWESTVLAANDEREN");
     }


     //Aantal transacties in de provincie $_NAAM
    $_sql = "SELECT SUM($_transacties2020) AS sumTransacties 
     FROM t_prijzen2020 
     WHERE td_indexProvincies = $_provSelectie"; 
     $_result = $_conn->query($_sql);  
     if ($_result->num_rows > 0) {
         while($row = $_result->fetch_assoc()) {  
            $_tNAAM = $row["sumTransacties"];
         }
     }
    
     ?>