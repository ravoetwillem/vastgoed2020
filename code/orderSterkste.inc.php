<?php
$_sql = "
for($_i=1;$_i<11;$_i++){
SELECT
ROUND((((AVG(t_prijzen2020.d_prijzenA2020)-AVG(t_prijzen2019.d_prijzenA2019))/AVG(t_prijzen2019.d_prijzenA2019))*100),2) AS v1j,
AVG(t_prijzen2020.d_prijzenA2020) AS duurste,
t_prijzen2020.td_indexProvincies AS Provincie
FROM t_prijzen2020 
INNER JOIN t_prijzen2019 
ON t_prijzen2020.d_2020=t_prijzen2019.d_2019 
WHERE t_prijzen2020.td_indexProvincies = $_i
AND t_prijzen2020.d_prijzenA2020!='0'
UNION
}
SELECT
ROUND((((AVG(t_prijzen2020.d_prijzenA2020)-AVG(t_prijzen2019.d_prijzenA2019))/AVG(t_prijzen2019.d_prijzenA2019))*100),2) AS v1j,
AVG(t_prijzen2020.d_prijzenA2020) AS duurste,
t_prijzen2020.td_indexProvincies AS Provincie
FROM t_prijzen2020 
INNER JOIN t_prijzen2019 
ON t_prijzen2020.d_2020=t_prijzen2019.d_2019 
WHERE t_prijzen2020.td_indexProvincies = 11
AND t_prijzen2020.d_prijzenA2020!='0'

order by $_order
limit 1
";
$_result = $_conn->query($_sql);
if ($_result->num_rows > 0) {
    while($row = $_result->fetch_assoc()) {  
        //$_provincie='test';
        if($row["Provincie"]==1){$_provincie="<p class='cijfer1'>".$row['v1j']."%</p><p class='tekstPijlen'>In België is de <strong><br>provincie Antwerpen</strong><br> met ".$row['v1j']."%<br> de $_sterkste";}
        if($row["Provincie"]==2){$_provincie="<p class='cijfer1'>".$row['v1j']."%</p><p class='tekstPijlen'>In België is het <strong><br>Brussels Hoofdstedelijk Gewest</strong><br> met ".$row['v1j']."%<br> de $_sterkste";}
        if($row["Provincie"]==3){$_provincie="<p class='cijfer1'>".$row['v1j']."%</p><p class='tekstPijlen'>In België is de <strong><br>provincie Henegouwen</strong><br> met ".$row['v1j']."%<br> de $_sterkste";}
        if($row["Provincie"]==4){$_provincie="<p class='cijfer1'>".$row['v1j']."%</p><p class='tekstPijlen'>In België is de <strong><br>provincie Limburg</strong><br> met ".$row['v1j']."%<br> de $_sterkste";}
        if($row["Provincie"]==5){$_provincie="<p class='cijfer1'>".$row['v1j']."%</p><p class='tekstPijlen'>In België is de <strong><br>provincie Luik</strong><br> met ".$row['v1j']."%<br> de $_sterkste";}
        if($row["Provincie"]==6){$_provincie="<p class='cijfer1'>".$row['v1j']."%</p><p class='tekstPijlen'>In België is de <strong><br>provincie Luxemburg</strong><br> met ".$row['v1j']."%<br> de $_sterkste";}
        if($row["Provincie"]==7){$_provincie="<p class='cijfer1'>".$row['v1j']."%</p><p class='tekstPijlen'>In België is de <strong><br>provincie Namen</strong><br> met ".$row['v1j']."%<br> de $_sterkste";}
        if($row["Provincie"]==8){$_provincie="<p class='cijfer1'>".$row['v1j']."%</p><p class='tekstPijlen'>In België is de <strong><br>provincie Oost-Vlaanderen</strong><br> met ".$row['v1j']."%<br> de sterkste $_stijger";}
        if($row["Provincie"]==9){$_provincie="<p class='cijfer1'>".$row['v1j']."%</p><p class='tekstPijlen'>In België is de <strong><br>provincie Vlaams-Brabant</strong><br> met ".$row['v1j']."%<br> de $_sterkste";}
        if($row["Provincie"]==10){$_provincie="<p class='cijfer1'>".$row['v1j']."%</p><p class='tekstPijlen'>In België is de <strong><br>provincie Waals-Brabant</strong><br> met ".$row['v1j']."%<br> de $_sterkste";}
        if($row["Provincie"]==11){$_provincie="<p class='cijfer1'>".$row['v1j']."%</p><p class='tekstPijlen'>In België is de <strong><br>provincie West-Vlaaderen</strong><br> met ".$row['v1j']."%<br> de $_sterkste";}
        $_sterksteStijgerDaler="<p>$_provincie</p>";
    }
}

?>

