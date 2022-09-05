<?php

$_sql = "
SELECT
ROUND((((AVG(t_prijzen2020.d_prijzenA2020)-AVG(t_prijzen2019.d_prijzenA2019))/AVG(t_prijzen2019.d_prijzenA2019))*100),2) AS v1j,
AVG(t_prijzen2020.d_prijzenA2020) AS duursteGoedkoopste,
t_prijzen2020.td_indexProvincies AS Provincie
FROM t_prijzen2020 
INNER JOIN t_prijzen2019 
ON t_prijzen2020.d_2020=t_prijzen2019.d_2019 
WHERE t_prijzen2020.td_indexProvincies = 1
AND t_prijzen2020.d_prijzenA2020!='0'
UNION


SELECT
ROUND((((AVG(t_prijzen2020.d_prijzenA2020)-AVG(t_prijzen2019.d_prijzenA2019))/AVG(t_prijzen2019.d_prijzenA2019))*100),2) AS v1j,
AVG(t_prijzen2020.d_prijzenA2020) AS duursteGoedkoopste,
t_prijzen2020.td_indexProvincies AS Provincie
FROM t_prijzen2020 
INNER JOIN t_prijzen2019 
ON t_prijzen2020.d_2020=t_prijzen2019.d_2019 
WHERE t_prijzen2020.td_indexProvincies = 2
AND t_prijzen2020.d_prijzenA2020!='0'
UNION

SELECT
ROUND((((AVG(t_prijzen2020.d_prijzenA2020)-AVG(t_prijzen2019.d_prijzenA2019))/AVG(t_prijzen2019.d_prijzenA2019))*100),2) AS v1j,
AVG(t_prijzen2020.d_prijzenA2020) AS duursteGoedkoopste,
t_prijzen2020.td_indexProvincies AS Provincie
FROM t_prijzen2020 
INNER JOIN t_prijzen2019 
ON t_prijzen2020.d_2020=t_prijzen2019.d_2019 
WHERE t_prijzen2020.td_indexProvincies = 3
AND t_prijzen2020.d_prijzenA2020!='0'
UNION

SELECT
ROUND((((AVG(t_prijzen2020.d_prijzenA2020)-AVG(t_prijzen2019.d_prijzenA2019))/AVG(t_prijzen2019.d_prijzenA2019))*100),2) AS v1j,
AVG(t_prijzen2020.d_prijzenA2020) AS duursteGoedkoopste,
t_prijzen2020.td_indexProvincies AS Provincie
FROM t_prijzen2020 
INNER JOIN t_prijzen2019 
ON t_prijzen2020.d_2020=t_prijzen2019.d_2019 
WHERE t_prijzen2020.td_indexProvincies = 4
AND t_prijzen2020.d_prijzenA2020!='0'
UNION

SELECT
ROUND((((AVG(t_prijzen2020.d_prijzenA2020)-AVG(t_prijzen2019.d_prijzenA2019))/AVG(t_prijzen2019.d_prijzenA2019))*100),2) AS v1j,
AVG(t_prijzen2020.d_prijzenA2020) AS duursteGoedkoopste,
t_prijzen2020.td_indexProvincies AS Provincie
FROM t_prijzen2020 
INNER JOIN t_prijzen2019 
ON t_prijzen2020.d_2020=t_prijzen2019.d_2019 
WHERE t_prijzen2020.td_indexProvincies = 5
AND t_prijzen2020.d_prijzenA2020!='0'
UNION

SELECT
ROUND((((AVG(t_prijzen2020.d_prijzenA2020)-AVG(t_prijzen2019.d_prijzenA2019))/AVG(t_prijzen2019.d_prijzenA2019))*100),2) AS v1j,
AVG(t_prijzen2020.d_prijzenA2020) AS duursteGoedkoopste,
t_prijzen2020.td_indexProvincies AS Provincie
FROM t_prijzen2020 
INNER JOIN t_prijzen2019 
ON t_prijzen2020.d_2020=t_prijzen2019.d_2019 
WHERE t_prijzen2020.td_indexProvincies = 6
AND t_prijzen2020.d_prijzenA2020!='0'
UNION

SELECT
ROUND((((AVG(t_prijzen2020.d_prijzenA2020)-AVG(t_prijzen2019.d_prijzenA2019))/AVG(t_prijzen2019.d_prijzenA2019))*100),2) AS v1j,
AVG(t_prijzen2020.d_prijzenA2020) AS duursteGoedkoopste,
t_prijzen2020.td_indexProvincies AS Provincie
FROM t_prijzen2020 
INNER JOIN t_prijzen2019 
ON t_prijzen2020.d_2020=t_prijzen2019.d_2019 
WHERE t_prijzen2020.td_indexProvincies = 7
AND t_prijzen2020.d_prijzenA2020!='0'
UNION

SELECT
ROUND((((AVG(t_prijzen2020.d_prijzenA2020)-AVG(t_prijzen2019.d_prijzenA2019))/AVG(t_prijzen2019.d_prijzenA2019))*100),2) AS v1j,
AVG(t_prijzen2020.d_prijzenA2020) AS duursteGoedkoopste,
t_prijzen2020.td_indexProvincies AS Provincie
FROM t_prijzen2020 
INNER JOIN t_prijzen2019 
ON t_prijzen2020.d_2020=t_prijzen2019.d_2019 
WHERE t_prijzen2020.td_indexProvincies = 8
AND t_prijzen2020.d_prijzenA2020!='0'
UNION

SELECT
ROUND((((AVG(t_prijzen2020.d_prijzenA2020)-AVG(t_prijzen2019.d_prijzenA2019))/AVG(t_prijzen2019.d_prijzenA2019))*100),2) AS v1j,
AVG(t_prijzen2020.d_prijzenA2020) AS duursteGoedkoopste,
t_prijzen2020.td_indexProvincies AS Provincie
FROM t_prijzen2020 
INNER JOIN t_prijzen2019 
ON t_prijzen2020.d_2020=t_prijzen2019.d_2019 
WHERE t_prijzen2020.td_indexProvincies = 9
AND t_prijzen2020.d_prijzenA2020!='0'
UNION

SELECT
ROUND((((AVG(t_prijzen2020.d_prijzenA2020)-AVG(t_prijzen2019.d_prijzenA2019))/AVG(t_prijzen2019.d_prijzenA2019))*100),2) AS v1j,
AVG(t_prijzen2020.d_prijzenA2020) AS duursteGoedkoopste,
t_prijzen2020.td_indexProvincies AS Provincie
FROM t_prijzen2020 
INNER JOIN t_prijzen2019 
ON t_prijzen2020.d_2020=t_prijzen2019.d_2019 
WHERE t_prijzen2020.td_indexProvincies = 10
AND t_prijzen2020.d_prijzenA2020!='0'
UNION

SELECT
ROUND((((AVG(t_prijzen2020.d_prijzenA2020)-AVG(t_prijzen2019.d_prijzenA2019))/AVG(t_prijzen2019.d_prijzenA2019))*100),2) AS v1j,
AVG(t_prijzen2020.d_prijzenA2020) AS duursteGoedkoopste,
t_prijzen2020.td_indexProvincies AS Provincie
FROM t_prijzen2020 
INNER JOIN t_prijzen2019 
ON t_prijzen2020.d_2020=t_prijzen2019.d_2019 
WHERE t_prijzen2020.td_indexProvincies = 11
AND t_prijzen2020.d_prijzenA2020!='0'

order by $_DESCASC
limit 1
";

$_result = $_conn->query($_sql);
if ($_result->num_rows > 0) {
    while($row = $_result->fetch_assoc()) {  

        if($_selectie=='v1j'){
            if($row["Provincie"]==1){$_provincie="<p class='$_classPijlen'>".number_format($row[$_selectie], 2, ',','.')."$_symbool</p><p class='tekstPijlen'>In België is de <strong><br>provincie Antwerpen</strong><br> met ".number_format($row[$_selectie], 2, ',','.')."$_symbool<br> de <strong>$_resultaat</strong>.";}
            if($row["Provincie"]==2){$_provincie="<p class='$_classPijlen'>".number_format($row[$_selectie], 2, ',','.')."$_symbool</p><p class='tekstPijlen'>In België is het <strong><br>Brussels Hoofdstedelijk Gewest</strong><br> met ".number_format($row[$_selectie], 2, ',','.')."$_symbool<br> de <strong>$_resultaat</strong>.";}
            if($row["Provincie"]==3){$_provincie="<p class='$_classPijlen'>".number_format($row[$_selectie], 2, ',','.')."$_symbool</p><p class='tekstPijlen'>In België is de <strong><br>provincie Henegouwen</strong><br> met ".number_format($row[$_selectie], 2, ',','.')."$_symbool<br> de <strong>$_resultaat</strong>.";}
            if($row["Provincie"]==4){$_provincie="<p class='$_classPijlen'>".number_format($row[$_selectie], 2, ',','.')."$_symbool</p><p class='tekstPijlen'>In België is de <strong><br>provincie Limburg</strong><br> met ".number_format($row[$_selectie], 2, ',','.')."$_symbool<br> de <strong>$_resultaat</strong>.";}
            if($row["Provincie"]==5){$_provincie="<p class='$_classPijlen'>".number_format($row[$_selectie], 2, ',','.')."$_symbool</p><p class='tekstPijlen'>In België is de <strong><br>provincie Luik</strong><br> met ".number_format($row[$_selectie], 2, ',','.')."$_symbool<br> de <strong>$_resultaat</strong>.";}
            if($row["Provincie"]==6){$_provincie="<p class='$_classPijlen'>".number_format($row[$_selectie], 2, ',','.')."$_symbool</p><p class='tekstPijlen'>In België is de <strong><br>provincie Luxemburg</strong><br> met ".number_format($row[$_selectie], 2, ',','.')."$_symbool<br> de <strong>$_resultaat</strong>.";}
            if($row["Provincie"]==7){$_provincie="<p class='$_classPijlen'>".number_format($row[$_selectie], 2, ',','.')."$_symbool</p><p class='tekstPijlen'>In België is de <strong><br>provincie Namen</strong><br> met ".number_format($row[$_selectie], 2, ',','.')."$_symbool<br> de <strong>$_resultaat</strong>.";}
            if($row["Provincie"]==8){$_provincie="<p class='$_classPijlen'>".number_format($row[$_selectie], 2, ',','.')."$_symbool</p><p class='tekstPijlen'>In België is de <strong><br>provincie Oost-Vlaanderen</strong><br> met ".number_format($row[$_selectie], 2, ',','.')."$_symbool<br> de <strong>$_resultaat</strong>.";}
            if($row["Provincie"]==9){$_provincie="<p class='$_classPijlen'>".number_format($row[$_selectie], 2, ',','.')."$_symbool</p><p class='tekstPijlen'>In België is de <strong><br>provincie Vlaams-Brabant</strong><br> met ".number_format($row[$_selectie], 2, ',','.')."$_symbool<br> de <strong>$_resultaat</strong>.";}
            if($row["Provincie"]==10){$_provincie="<p class='$_classPijlen'>".number_format($row[$_selectie], 2, ',','.')."$_symbool</p><p class='tekstPijlen'>In België is de <strong><br>provincie Waals-Brabant</strong><br> met ".number_format($row[$_selectie], 2, ',','.')."$_symbool<br> de <strong>$_resultaat</strong>.";}
            if($row["Provincie"]==11){$_provincie="<p class='$_classPijlen'>".number_format($row[$_selectie], 2, ',','.')."$_symbool</p><p class='tekstPijlen'>In België is de <strong><br>provincie West-Vlaaderen</strong><br> met ".number_format($row[$_selectie], 2, ',','.')."$_symbool<br> de <strong>$_resultaat</strong>.";}
            $_waarde=number_format($row[$_selectie], 2, ',','.');
        }
        if($_selectie=='duursteGoedkoopste'){
            if($row["Provincie"]==1){$_provincie="<p class='$_classPijlen'>".number_format($row[$_selectie], 0, ',','.')."$_symbool</p><p class='tekstPijlen'>In België is de <strong><br>provincie Antwerpen</strong><br> met ".number_format($row[$_selectie], 0, ',','.')."$_symbool<br> de <strong>$_resultaat</strong>.";}
            if($row["Provincie"]==2){$_provincie="<p class='$_classPijlen'>".number_format($row[$_selectie], 0, ',','.')."$_symbool</p><p class='tekstPijlen'>In België is het <strong><br>Brussels Hoofdstedelijk Gewest</strong><br> met ".number_format($row[$_selectie], 0, ',','.')."$_symbool<br> de <strong>$_resultaat</strong>.";}
            if($row["Provincie"]==3){$_provincie="<p class='$_classPijlen'>".number_format($row[$_selectie], 0, ',','.')."$_symbool</p><p class='tekstPijlen'>In België is de <strong><br>provincie Henegouwen</strong><br> met ".number_format($row[$_selectie], 0, ',','.')."$_symbool<br> de <strong>$_resultaat</strong>.";}
            if($row["Provincie"]==4){$_provincie="<p class='$_classPijlen'>".number_format($row[$_selectie], 0, ',','.')."$_symbool</p><p class='tekstPijlen'>In België is de <strong><br>provincie Limburg</strong><br> met ".number_format($row[$_selectie], 0, ',','.')."$_symbool<br> de <strong>$_resultaat</strong>.";}
            if($row["Provincie"]==5){$_provincie="<p class='$_classPijlen'>".number_format($row[$_selectie], 0, ',','.')."$_symbool</p><p class='tekstPijlen'>In België is de <strong><br>provincie Luik</strong><br> met ".number_format($row[$_selectie], 0, ',','.')."$_symbool<br> de <strong>$_resultaat</strong>.";}
            if($row["Provincie"]==6){$_provincie="<p class='$_classPijlen'>".number_format($row[$_selectie], 0, ',','.')."$_symbool</p><p class='tekstPijlen'>In België is de <strong><br>provincie Luxemburg</strong><br> met ".number_format($row[$_selectie], 0, ',','.')."$_symbool<br> de <strong>$_resultaat</strong>.";}
            if($row["Provincie"]==7){$_provincie="<p class='$_classPijlen'>".number_format($row[$_selectie], 0, ',','.')."$_symbool</p><p class='tekstPijlen'>In België is de <strong><br>provincie Namen</strong><br> met ".number_format($row[$_selectie], 0, ',','.')."$_symbool<br> de <strong>$_resultaat</strong>.";}
            if($row["Provincie"]==8){$_provincie="<p class='$_classPijlen'>".number_format($row[$_selectie], 0, ',','.')."$_symbool</p><p class='tekstPijlen'>In België is de <strong><br>provincie Oost-Vlaanderen</strong><br> met ".number_format($row[$_selectie], 0, ',','.')."$_symbool<br> de <strong>$_resultaat</strong>.";}
            if($row["Provincie"]==9){$_provincie="<p class='$_classPijlen'>".number_format($row[$_selectie], 0, ',','.')."$_symbool</p><p class='tekstPijlen'>In België is de <strong><br>provincie Vlaams-Brabant</strong><br> met ".number_format($row[$_selectie], 0, ',','.')."$_symbool<br> de <strong>$_resultaat</strong>.";}
            if($row["Provincie"]==10){$_provincie="<p class='$_classPijlen'>".number_format($row[$_selectie], 0, ',','.')."$_symbool</p><p class='tekstPijlen'>In België is de <strong><br>provincie Waals-Brabant</strong><br> met ".number_format($row[$_selectie], 0, ',','.')."$_symbool<br> de <strong>$_resultaat</strong>.";}
            if($row["Provincie"]==11){$_provincie="<p class='$_classPijlen'>".number_format($row[$_selectie], 0, ',','.')."$_symbool</p><p class='tekstPijlen'>In België is de <strong><br>provincie West-Vlaaderen</strong><br> met ".number_format($row[$_selectie], 0, ',','.')."$_symbool<br> de <strong>$_resultaat</strong>.";}
        }
    }
}
?>

