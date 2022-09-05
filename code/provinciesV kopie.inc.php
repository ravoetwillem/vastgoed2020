<?php 

    //XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

    //TABEL TRANSACTIE-PRIJZEN

    //XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

    $_tabelPrijzen.="
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
        AND d_prijzenV2020!='0'"; 
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
                    $row["$_prijzen2020"]="-";
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
         
                if($row[$_prijzen2020]!=="-"){
                    $_formatPrijzen = number_format($row[$_prijzen2020], 0, '.','.');
                } 
                $_styleColor1 = $_berekening1j < 0 ? 'color:red' : 'color:#000000';
                $_styleColor2 = $_berekening10j < 0 ? 'color:red' : 'color:#000000';

                $_tabelPrijzen.= "<tr><td class='first'>&nbsp;".$row[$_gemeente_taal]."</td><td>".$row[$_transacties2020]."</td><td>".$_formatPrijzen."</td><td  style=$_styleColor1>".$_berekening1j."</td><td  style=$_styleColor2>".$_berekening10j."</td></tr>";   
            }
        } else {
            echo "0 results";
        }
    }

    $_tabelPrijzen.= "</table><br><br>"; 


    //XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

    //DUURSTE GEMEENTE

    //XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX       
 
    /*$_sql = "SELECT 
    t_gemeenten.d_gemeente_NL,t_prijzen2020.d_prijzenV2020
    FROM
    t_gemeenten
    JOIN t_prijzen2020
    ON t_gemeenten.d_indexGemeenten = t_prijzen2020.d_2020 
    WHERE t_gemeenten.td_indexProvincies=1
    order by t_prijzen2020.d_prijzenV2020 DESC
    limit 1";

    $_result = $_conn->query($_sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) { 
            //$_duursteGemeente="<p>".$row[$_gemeente_taal]."</p><p>".$_formatPrijzen."</p>";  
        $_duursteGemeente="<p>test</p><p>test</p>"; 
        }
    }*/


    $_conn->close(); 



    //XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

    //OUTPUT

    //XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX 


    //require("../code/output.inc.php");
    //echo($_tabelPrijzen);

    //$_smarty instantieren en initialiseren  
    require_once("../smarty/mySmarty.inc.php");
    //functie om "menu" samen te stellen
    //require_once("../php_lib/menu.inc.php");
    //functie om tekst/html in te lezen
    //require_once("../php_lib/inlezen.inc.php");

    // toekennen variabelen naar template
    $_smarty->assign('kaartPrijzen', $_kaartPrijzen);
    $_smarty->assign('kaartTransacties', $_kaartTransacties);
    $_smarty->assign('artikel', $_artikel);
    $_smarty->assign('tabelPrijzen', $_tabelPrijzen);
    $_smarty->assign('sterksteStijger', $_sterksteStijger);
    $_smarty->assign('sterksteDaler', $_sterksteDaler);
    $_smarty->assign('duursteGemeente', $_duursteGemeente);
    $_smarty->assign('goedkoopsteGemeente', $_goedkoopsteGemeente);
    $_smarty->assign('quote1', $_quote1);
    $_smarty->assign('quote2', $_quote2);
    $_smarty->assign('cijfer', $_cijfer);
    $_smarty->assign('kaderstuk', $_kaderstuk);

    // gebruikte template
    $_smarty->display('BVP_provinciesV.tpl');


    //localhost:8888/Scripts/ProvincieTabellen.php

    /*
    CREATE VIEW vDuursteGemeenteAntwerpen AS
    SELECT
    t_gemeenten.d_gemeente_NL,
    t_prijzen2020.d_prijzenV2020
    FROM
    t_gemeenten
    JOIN t_prijzen2020
    ON t_gemeenten.d_indexGemeenten = t_prijzen2020.d_2020 
    WHERE t_gemeenten.td_indexProvincies=1
    order by t_prijzen2020.d_prijzenV2020 DESC
    limit 1
    */

?>