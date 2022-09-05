<?php 

    //XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

    //TABEL PRIJZEN-TRANSACTIES APPARTEMENTEN

    //XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
    
    $_tabelPrijzen="
    <table class='provincieTabel'>
    <tr><th class='first'>&nbsp;Gemeente</th><th class=tabelKopjes  style='text-align:center'>Aantal transacties</th><th class=tabelKopjes style='text-align:center';>Gemiddelde prijs (in €)</th><th class=tabelKopjes style='text-align:center'>% op 1 jaar</th><th class=tabelKopjes style='text-align:center'>% op 10 jaar</th></tr>";


    //XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX SELECTIE VAN DE PROVINCIE XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
    
    //provincienaam
    $_sql = "SELECT  $_provincie_taal 
    FROM t_provincies 
    WHERE d_indexProvincies = '$_provincieSelectie'";
    $_result = $_conn->query($_sql);
    if ($_result->num_rows > 0) {
        while($row = $_result->fetch_assoc()) {  
            $_tabelPrijzen.="<tr class='provincieRij'><td class='first'>&nbsp;".$row[$_provincie_taal]."</td>";
        }
    }
    //Aantal bekende transacties in de provincie
    $_sql = "SELECT SUM($_transacties2020) AS sumTransacties 
    FROM t_prijzen2020 
    WHERE td_indexProvincies = '$_provincieSelectie'";
    $_result = $_conn->query($_sql);
    if ($_result->num_rows > 0) {
        while($row = $_result->fetch_assoc()) {  
            $_tabelPrijzen.= "<td>".number_format($row["sumTransacties"], 0, '.','.')."</td>";  
            if($_provincieSelectie==2){
                $_cijfer= "<p class=cijferA>".number_format($row["sumTransacties"], 0, '.','.')."</p><p class=cijferTekst>In het Brussels Hoofdstedelijk Gewest zijn er ".number_format($row["sumTransacties"], 0, '.','.')." appartementen verkocht.</p>";  
            }
            else
            {
                $_cijfer= "<p class=cijferA>".number_format($row["sumTransacties"], 0, '.','.')."</p><p class=cijferTekst>In provincie $_provincieNaam zijn er ".number_format($row["sumTransacties"], 0, '.','.')." appartementen verkocht.</p>";  
            }
        }
    }



    //Gemiddelde prijs in de provincie
    $_sql = "SELECT ROUND(AVG($_prijzen2020),0) AS avgPrijzen 
    FROM t_prijzen2020 
    WHERE td_indexProvincies = '$_provincieSelectie' 
    AND $_prijzen2020!='0'"; 
    $_result = $_conn->query($_sql);  
    if ($_result->num_rows > 0) {
        while($row = $_result->fetch_assoc()) {  
            $_tabelPrijzen.="<td>".number_format($row["avgPrijzen"], 0, '.','.')."</td>";
        }
    }
    //% 1 jaar in de provincie
    $_sql =   "SELECT ROUND((((AVG($_prijzen2020)-AVG($_prijzen2019))/AVG($_prijzen2019))*100),2) AS avgProvincie1j 
    FROM t_prijzen2020 
    INNER JOIN t_prijzen2019 
    ON t_prijzen2020.d_2020=t_prijzen2019.d_2019 
    WHERE t_prijzen2020.td_indexProvincies = '$_provincieSelectie' 
    AND $_prijzen2020!='0'";
    $_result = $_conn->query($_sql);
    if ($_result->num_rows > 0) {
        while($row = $_result->fetch_assoc()) {  
            $_styleColor = $row["avgProvincie1j"] < 0 ? 'color:red' : 'color:#FFFFFF'; 
            $_tabelPrijzen.="<td  style=$_styleColor>".number_format($row["avgProvincie1j"], 2, ',',',')."%</td>";
            //$_aNAAM=number_format($row["avgProvincie1j"], 2, ',',',');
        }
    }
    //% 10 jaar in de provincie
    $_sql =   "SELECT ROUND((((AVG($_prijzen2020)-AVG($_prijzen2011))/AVG($_prijzen2011))*100),2) AS avgProvincie10j 
    FROM t_prijzen2020 
    INNER JOIN t_prijzen2011 
    ON t_prijzen2020.d_2020=t_prijzen2011.d_2011 
    WHERE t_prijzen2020.td_indexProvincies = '$_provincieSelectie' 
    AND $_prijzen2020!='0'";
    $_result = $_conn->query($_sql);
    if ($_result->num_rows > 0) {
        while($row = $_result->fetch_assoc()) {  
            $_styleColor = $row["avgProvincie1j"] < 0 ? 'color:red' : 'color:#FFFFFF'; 
            $_tabelPrijzen.="<td  style=$_styleColor>".number_format($row["avgProvincie10j"], 2, ',',',')."%</td>";
        }
    }

    //XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX SELECTIE VAN DE ARRONDISSEMENTEN XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
    
    //forloop om door de arrondissemlenten en gemeenten te gaan
    for ($_i=$_arrondissementSelectie; $_i<=$_arrondissementLimiet; $_i++) {

        //arrondissementnaam
        $_sql = "SELECT $_arrondissement_taal 
        FROM t_arrondissementen 
        WHERE d_indexArrondissementen = '$_i'";  
        $_result = $_conn->query($_sql);
        if ($_result->num_rows > 0) {
            while($row = $_result->fetch_assoc()) {  
                $_tabelPrijzen.="<tr class='arrondissementRij'><td class='first'>&nbsp;".$row["$_arrondissement_taal"]."</td>";
            }
        }
        //Aantal bekende transacties in arrondissement
        $_sql = "SELECT SUM($_transacties2020) AS sumTransacties 
        FROM t_prijzen2020 
        WHERE td_indexArrondissementen = '$_i'"; 
        $_result = $_conn->query($_sql);
        if ($_result->num_rows > 0) {
            while($row = $_result->fetch_assoc()) {  
                $_tabelPrijzen.= "<td>".number_format($row["sumTransacties"], 0, '.','.')."</td>";  
            }
        }
        //Gemiddelde prijs in arrondissement
        $_sql = "SELECT ROUND(AVG($_prijzen2020),0) AS avgPrijzen 
        FROM t_prijzen2020 
        WHERE td_indexArrondissementen = '$_i' 
        AND d_prijzenA2020!='0'"; 
        $_result = $_conn->query($_sql);  
        if ($_result->num_rows > 0) {
            while($row = $_result->fetch_assoc()) {  
                $_tabelPrijzen.="<td>".number_format($row["avgPrijzen"], 0, '.','.')."</td>";
            }
        }
        //% 1 jaar in arrondissement
        $_sql = "SELECT ROUND(((AVG($_prijzen2020)-AVG($_prijzen2019))/AVG($_prijzen2019)*100),2) AS avgArrondissement1j 
        FROM t_prijzen2020 
        INNER JOIN t_prijzen2019 
        ON t_prijzen2020.d_2020=t_prijzen2019.d_2019 
        WHERE t_prijzen2020.td_indexArrondissementen = '$_i' 
        AND $_prijzen2020!='0'"; 
        $_result = $_conn->query($_sql);
        if ($_result->num_rows > 0) {
            while($row = $_result->fetch_assoc()) {  
                $_styleColor = $row["avgArrondissement1j"] < 0 ? 'color:red' : 'color:#000000'; 
                $_tabelPrijzen.="<td  style=$_styleColor>".number_format($row["avgArrondissement1j"], 2, ',',',')."%</td>";
            }
        }
        //% 10 jaar in arrondissement
        $_sql = "SELECT ROUND(((AVG($_prijzen2020)-AVG($_prijzen2011))/AVG($_prijzen2011)*100),2) AS avgArrondissement10j 
        FROM t_prijzen2020 
        INNER JOIN t_prijzen2011 
        ON t_prijzen2020.d_2020=t_prijzen2011.d_2011 
        WHERE t_prijzen2020.td_indexArrondissementen = '$_i' 
        AND $_prijzen2020!='0'"; 
        $_result = $_conn->query($_sql);
        if ($_result->num_rows > 0) {
            while($row = $_result->fetch_assoc()) { 
                $_styleColor = $row["avgArrondissement10j"] < 0 ? 'color:red' : 'color:#000000'; 
                $_tabelPrijzen.="<td  style=$_styleColor>".number_format($row["avgArrondissement10j"], 2, ',',',')."%</td></tr>";
            }
        }

        //XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX SELECTIE VAN DE GEMEENTEN XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
    
        //Gemeentenaam, aantal bekende transacties in gemeente, gemiddelde prijs in gemeente, % 1 jaar in arrondissement, % 10 jaar in arrondissement
        $_sql = "SELECT $_gemeente_taal,$_transacties2020,$_prijzen2020,$_prijzen2019,$_prijzen2011 
        FROM t_gemeenten 
        INNER JOIN t_prijzen2020 
        ON t_gemeenten.d_indexGemeenten = t_prijzen2020.d_2020 
        INNER JOIN t_prijzen2019 
        ON t_gemeenten.d_indexGemeenten = t_prijzen2019.d_2019 
        INNER JOIN t_prijzen2011 
        ON t_gemeenten.d_indexGemeenten = t_prijzen2011.d_2011 
        WHERE t_gemeenten.td_indexArrondissementen  = '$_i' 
        AND t_gemeenten.td_indexProvincies = '$_provincieSelectie'  
        ORDER BY d_gemeente_NL ASC";  
  
        $result = $_conn->query($_sql);
        if ($result->num_rows > 0) {
            
            while($row = $result->fetch_assoc()) {  
                if($row[$_gemeente_taal]!=="Elsene2") { 

                //berekening verschil 1 jaar
                //Vermits men niet kan delen door 0 -> 0 vervangen door 1
                if($row[$_prijzen2019]==="0"){
                    $row[$_prijzen2019]=1;
                } 
                $_berekening1j=number_format(ROUND(((($row[$_prijzen2020] - $row[$_prijzen2019]) / $row[$_prijzen2019]) * 100),2), 2, ',',',')."%"; 
               
                //berekening verschil 10 jaar
                //Vermits men niet kan delen door 0 -> 0 vervangen door 1 
                if($row[$_prijzen2011]==="0"){
                    $row[$_prijzen2011]=1;
                } 
                $_berekening10j=number_format(ROUND(((($row[$_prijzen2020] - $row[$_prijzen2011]) / $row[$_prijzen2011]) * 100),2), 2, ',',',')."%";

                if($row[$_transacties2020]==="0"){
                    $row[$_transacties2020]="-";
                } 
               
                //omzetten van 0 naar - voor niet gekende cijfers van 2020
                if($row[$_prijzen2020]==="0"){
                    $row[$_prijzen2020]="1";
                    $_berekening1j="-";
                    $_berekening10j="-";
                } 
                //omzetten van 1 naar - voor niet gekende cijfers van 2019
                if($row[$_prijzen2019]===1){
                    $row[$_prijzen2019]="-";
                    $_berekening1j="-";
                    $_berekening10j="-";
                } 
                //omzetten van 1 naar - voor niet gekende cijfers van 2011
                if($row[$_prijzen2011]===1){
                    $row[$_prijzen2011]="-";
                    $_berekening1j="-";
                    $_berekening10j="-";
                } 

               
                
                $_formatPrijzen = number_format($row[$_prijzen2020], 0, '.','.');
                $_styleColor1 = $_berekening1j < 0 ? 'color:red' : 'color:#000000';
                $_styleColor2 = $_berekening10j < 0 ? 'color:red' : 'color:#000000';

                /*if($row[$_prijzen2020]=="-"){
                    $_formatPrijzen = "-";
                    $_styleColor1 = $_berekening1j < 0 ? 'color:#000000' : 'color:#000000';
                    $_styleColor2 = $_berekening10j < 0 ? 'color:#000000' : 'color:#000000';
                } */
                
                if( $_formatPrijzen==="1"){
                    $_formatPrijzen="-";
                    $_styleColor1 = $_berekening1j == '-' ? 'color:#000000' : 'color:#000000';
                    $_styleColor2 = $_berekening10j =='-' ? 'color:#000000' : 'color:#000000';
                } 
                if( $_berekening10j=="-"){
                    $_styleColor1 = $_berekening1j == '-' ? 'color:#000000' : 'color:#000000';
                    $_styleColor2 = $_berekening10j =='-' ? 'color:#000000' : 'color:#000000';
                } 
                if( $_berekening1j=="-"){
                    $_styleColor1 = $_berekening1j == '-' ? 'color:#000000' : 'color:#000000';
                    $_styleColor2 = $_berekening10j =='-' ? 'color:#000000' : 'color:#000000';
                } 
                
                $_tabelPrijzen.= "<tr><td class='first'>&nbsp;".$row[$_gemeente_taal]."</td><td>".$row[$_transacties2020]."</td><td>".$_formatPrijzen."</td><td  style='$_styleColor1'>".$_berekening1j."</td><td  style='$_styleColor2'>".$_berekening10j."</td></tr>";   
            }
        } 
        }


    }//einde for

    $_tabelPrijzen.= "</table>";


    //XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

    //STERKSTE STIJGER

    //XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX       
   

    $_sterksteStijger = "";

    $_sql = "SELECT
    t_gemeenten.d_gemeente_NL,
    ROUND(( ((t_prijzen2020.d_prijzenA2020)-(t_prijzen2019.d_prijzenA2019)) / (t_prijzen2019.d_prijzenA2019)*100),2) AS percentage
    FROM
    t_gemeenten
    JOIN t_prijzen2020
    ON t_gemeenten.d_indexGemeenten = t_prijzen2020.d_2020 
    JOIN t_prijzen2019
    ON t_gemeenten.d_indexGemeenten = t_prijzen2019.d_2019
    WHERE t_gemeenten.td_indexProvincies= $_provincieSelectie
    AND t_prijzen2020.d_prijzenA2020 != 0
    AND t_prijzen2019.d_prijzenA2019 != 0
    order by percentage DESC
    limit 1";

    $result = $_conn->query($_sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) { 
            if ($_provincieSelectie == 2){  
                if($row['percentage']<0){
                    $_sterksteStijger="<p class='tekstPijlen'><br>In het Brussels Hoofdstedelijk Gewest zijn er geen stijgers.</p>";
                }
                else
                {
                    $_sterksteStijger="<p class='cijfer1'>".number_format($row["percentage"], 2, ',',',')."%</p><p class='tekstPijlen'>In het Brussels Hoofdstedelijk Gewest is <strong>".$row[$_gemeente_taal]."</strong> met een gemiddeld percentage van ".number_format($row["percentage"], 2, ',',',')."% de sterkste stijger.";
                }
            }
            else
            {
                if($row['percentage']<0){
                    $_sterksteStijger="<p class='tekstPijlen'>In de provincie $_provincieNaam zijn er geen stijgers.</p>";
                }
                else
                {
                    $_sterksteStijger="<p class='cijfer1'>".number_format($row["percentage"], 2, ',',',')."%</p><p class='tekstPijlen'>In provincie $_provincieNaam is <strong>".$row[$_gemeente_taal]."</strong> met een gemiddeld percentage van ".number_format($row["percentage"], 2, ',',',')."% de sterkste stijger.";
                }
            }
        }
    }



    //XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

    //STERKSTE DALER

    //XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX       
   

    $_sterksteDaler = "";

    $_sql = "SELECT
    t_gemeenten.d_gemeente_NL,
    ROUND(( ((t_prijzen2020.d_prijzenA2020)-(t_prijzen2019.d_prijzenA2019)) / (t_prijzen2019.d_prijzenA2019)*100),2) AS percentage
    FROM
    t_gemeenten
    JOIN t_prijzen2020
    ON t_gemeenten.d_indexGemeenten = t_prijzen2020.d_2020 
    JOIN t_prijzen2019
    ON t_gemeenten.d_indexGemeenten = t_prijzen2019.d_2019
    WHERE t_gemeenten.td_indexProvincies= $_provincieSelectie
    AND t_prijzen2020.d_prijzenA2020 != 0
    AND t_prijzen2019.d_prijzenA2019 != 0
    order by percentage ASC
    limit 1";


    $result = $_conn->query($_sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) { 
            if ($_provincieSelectie == 2){ 
                if($row['percentage']>0){
                    $_sterksteDaler="<p class='tekstPijlen'><br>In het Brussels Hoofdstedelijk Gewest zijn er geen dalers.</p>";
                }
                else
                {
                    $_sterksteDaler="<p class='cijfer2'>".number_format($row["percentage"], 2, ',',',')."%</p><p class='tekstPijlen'>In het Brussels Hoofdstedelijk Gewest is <strong>".$row[$_gemeente_taal]."</strong> met een gemiddeld percentage van ".number_format($row["percentage"], 2, ',',',')."% de sterkste daler.";
                }
            }
            else
            {
                if($row['percentage']>0){
                    $_sterksteDaler="<p class='tekstPijlen'><br>In de<br>provincie $_provincieNaam zijn er geen dalers.</p>";
                }
                else
                {
                    $_sterksteDaler="<p class='cijfer2'>".number_format($row["percentage"], 2, ',',',')."%</p><p class='tekstPijlen'>In provincie $_provincieNaam is <strong>".$row[$_gemeente_taal]."</strong> met een gemiddeld percentage van ".number_format($row["percentage"], 2, ',',',')."% de sterkste daler.";
                }
             }
         }
    }


    //XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

    //DUURSTE GEMEENTE

    //XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX       

    $_duursteGemeente = "";

    $_sql = "SELECT
    t_gemeenten.d_gemeente_NL,
    t_prijzen2020.d_prijzenA2020
    FROM
    t_gemeenten
    INNER JOIN t_prijzen2020
    ON t_gemeenten.d_indexGemeenten = t_prijzen2020.d_2020 
    WHERE t_gemeenten.td_indexProvincies= $_provincieSelectie
    order by t_prijzen2020.d_prijzenA2020 DESC
    limit 1";

    $result = $_conn->query($_sql);
    if ($result->num_rows > 0) {  
        while($row = $result->fetch_assoc()) { 
            $_formatPrijzen = number_format($row['d_prijzenA2020'], 0, '.','.'); 
            if ($_provincieSelectie == 2){ 
                $_duursteGemeente="<p class='cijfer1'>".$_formatPrijzen."€</p><p class='tekstPijlen'>In het Brussels Hoofdstedelijk Gewest is <strong>".$row[$_gemeente_taal]."</strong> met een gemiddelde prijs van ".$_formatPrijzen."€ de duurste gemeente.";
            }
            else
            {
                $_duursteGemeente="<p class='cijfer1'>".$_formatPrijzen."€</p><p class='tekstPijlen'>In provincie $_provincieNaam is <strong>".$row[$_gemeente_taal]."</strong> met een gemiddelde prijs van ".$_formatPrijzen."€ de duurste gemeente.";
            }
        }
    }


    //XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

    //GOEDKOOPSTE GEMEENTE

    //XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX       
   
    $_goedkoopsteGemeente = "";

    $_sql = "SELECT
    t_gemeenten.d_gemeente_NL,
    t_prijzen2020.d_prijzenA2020
    FROM
    t_gemeenten
    INNER JOIN t_prijzen2020
    ON t_gemeenten.d_indexGemeenten = t_prijzen2020.d_2020 
    WHERE t_gemeenten.td_indexProvincies= $_provincieSelectie
    AND t_prijzen2020.d_prijzenA2020 != 0
    order by t_prijzen2020.d_prijzenA2020 ASC
    limit 1";

    $result = $_conn->query($_sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) { 
            if ($_provincieSelectie == 2){ 
                $_formatPrijzen = number_format($row['d_prijzenA2020'], 0, '.','.'); 
                $_goedkoopsteGemeente="<p class='cijfer2'>".$_formatPrijzen."€</p><p class='tekstPijlen'>In Brussels Hoofdstedelijk Gewest is <strong>".$row[$_gemeente_taal]."</strong> met een gemiddelde prijs van ".$_formatPrijzen."€ de goedkoopste gemeente.";
            }
            else
            {
                $_formatPrijzen = number_format($row['d_prijzenA2020'], 0, '.','.');
                $_goedkoopsteGemeente="<p class='cijfer2'>".$_formatPrijzen."€</p><p class='tekstPijlen'>In provincie $_provincieNaam is <strong>".$row[$_gemeente_taal]."</strong> met een gemiddelde prijs van ".$_formatPrijzen."€ de goedkoopste gemeente."; 
            }
        }
    }
    
    ?>

