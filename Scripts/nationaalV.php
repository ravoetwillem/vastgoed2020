<?php
try
{
    //********** Initialisatie
	$_srv = $_SERVER['PHP_SELF'];
  include("../php_lib/inlezen.inc.php"); 
  require_once("../Connections/pdo.inc.php");

    require("../code/tabellenV.inc.php");

    //variabelen voor aansturing data provincies
    $_polygon = 'd_gemeentePolygons';
    $_infoNaam = 'd_idNaam';

    $_prijs0 = 1.000;
    $_prijs1 = 150.000;
    $_prijs2 = 200.000;
    $_prijs3 = 250.000;
    $_prijs4 = 300.000;
    $_prijs5 = 350.000;
    $_prijs6 = 400.000;
    $_prijs7 = 450.000;
    $_prijs8 = 500.000;
    $_prijs9 = 550.000;
    $_prijs10 = 600.000;
    $_prijs11 = 650.000;
    $_prijs12 = 700.000;
    $_prijs13 = 750.000;
    $_prijs14 = 800.000;

    $_transacties0 = 1000;
    $_transacties1 = 1.000;
    $_transacties2 = 2.000;
    $_transacties3 = 3.000;
    $_transacties4 = 4.000;

    $_provincieSelectie=12;
    $_arrondissementSelectie=44;
    $_arrondissementLimiet=44;
    $_provincie = 'svgNationaal';    
    $_x='50%';
    $_y='50%';
    $_viewbox='-50 -100 1600 1300';
    $_provincieNaam="Nationaal";

    //variabelen voor de tabellen
    $_transacties2020="d_transactiesV2020";
    $_prijzen2020="d_prijzenV2020";
    $_prijzen2019="d_prijzenV2019";
    $_prijzen2011="d_prijzenV2011";

    $_provincie_taal="d_provincie_NL";
    $_arrondissement_taal="d_arrondissementen_NL";
    $_gemeente_taal="d_gemeente_NL";
   
    $_titelKaartPrijzen="<p class='titKaart'>België:<br>gemiddelde prijs per provincie</p>";
    $_titelKaartTransacties="<p class='titKaart'>België:<br>aantal transacties per provincie</p>";


    //ANTWERPEN
    $_provSelectie=1;
    require("../code/nationaalVcode.inc.php");   
    $_pPROVANTWERPEN=$_pNAAM;
    $_tPROVANTWERPEN=$_tNAAM;
    $_aPROVANTWERPEN=$_aNAAM; 
    $_bPROVANTWERPEN=$_bNAAM;

    //BRUSSEL
    $_provSelectie=2;
    require("../code/nationaalVcode.inc.php");
    $_pPROVBRUSSEL=$_pNAAM;
    $_tPROVBRUSSEL=$_tNAAM;
    $_aPROVBRUSSEL=$_aNAAM; 
    $_bPROVBRUSSEL=$_bNAAM;

    //HENEGOUWEN
    $_provSelectie=3;
    require("../code/nationaalVcode.inc.php");
    $_pPROVHAINAUT=$_pNAAM;
    $_tPROVHAINAUT=$_tNAAM;
    $_aPROVHAINAUT=$_aNAAM;
    $_bPROVHAINAUT=$_bNAAM; 

    //LIMBURG
    $_provSelectie=4;
    require("../code/nationaalVcode.inc.php");
    $_pPROVLIMBURG=$_pNAAM;
    $_tPROVLIMBURG=$_tNAAM;
    $_aPROVLIMBURG=$_aNAAM; 
    $_bPROVLIMBURG=$_bNAAM;

    //LUIK
    $_provSelectie=5;
    require("../code/nationaalVcode.inc.php");
    $_pPROVLIEGE=$_pNAAM;
    $_tPROVLIEGE=$_tNAAM;
    $_aPROVLIEGE=$_aNAAM;
    $_bPROVLIEGE=$_bNAAM; 

    //LUXEMBURG
    $_provSelectie=6;
    require("../code/nationaalVcode.inc.php");
    $_pPROVLUXEMBOURG=$_pNAAM;
    $_tPROVLUXEMBOURG=$_tNAAM;
    $_aPROVLUXEMBOURG=$_aNAAM; 
    $_bPROVLUXEMBOURG=$_bNAAM;

    //NAMEN
    $_provSelectie=7;
    require("../code/nationaalVcode.inc.php");
    $_pPROVNAMUR=$_pNAAM;
    $_tPROVNAMUR=$_tNAAM;
    $_aPROVNAMUR=$_aNAAM;
    $_bPROVNAMUR=$_bNAAM; 

    //OOST-VLAANDEREN
    $_provSelectie=8;
    require("../code/nationaalVcode.inc.php");
    $_pPROVOOSTVLAANDEREN=$_pNAAM;
    $_tPROVOOSTVLAANDEREN=$_tNAAM;
    $_aPROVOOSTVLAANDEREN=$_aNAAM; 
    $_bPROVOOSTVLAANDEREN=$_bNAAM;

    //VLAAMS-BRABANT
    $_provSelectie=9;
    require("../code/nationaalVcode.inc.php");
    $_pPROVVLAAMSBRABANT=$_pNAAM;
    $_tPROVVLAAMSBRABANT=$_tNAAM;
    $_aPROVVLAAMSBRABANT=$_aNAAM; 
    $_bPROVVLAAMSBRABANT=$_bNAAM; 
    
    //WAALSBRABANT
    $_provSelectie=10;
    require("../code/nationaalVcode.inc.php");
    $_pPROVBRABANTWALLON=$_pNAAM;
    $_tPROVBRABANTWALLON=$_tNAAM;
    $_aPROVBRABANTWALLON=$_aNAAM; 
    $_bPROVBRABANTWALLON=$_bNAAM;    
   
    //WEST-VLAANDEREN
    $_provSelectie=11;
    require("../code/nationaalVcode.inc.php");
    $_pPROVWESTVLAANDEREN=$_pNAAM;
    $_tPROVWESTVLAANDEREN=$_tNAAM;
    $_aPROVWESTVLAANDEREN=$_aNAAM;
    $_bPROVWESTVLAANDEREN=$_bNAAM;   

    require("../code/varInfoBox.inc.php");

    
/*XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

Vormgeving Kaart Prijzen

XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX*/
   
    $_sql = "SELECT t_polygonen.d_gemeentePolygons,t_gemeenten.d_gemeente_NL,t_gemeenten.d_idNaam
    FROM t_polygonen 
    JOIN t_gemeenten ON t_polygonen.d_indexPolygons = t_gemeenten.d_indexGemeenten
    WHERE t_polygonen.td_indexProvincies=12";
   
    $_kaartPrijzen="<svg x='$_x' y='$_y' viewBox='$_viewbox' class='$_provincie' id='svgPolyP'> ";
    $result = $_conn->query($_sql);
    if ($result->num_rows > 0) {     
               
        while($row = $result->fetch_assoc()) {   
           $_kaartPrijzen.="<polygon class='prov' id=$row[$_infoNaam] onmouseover='showInfo(this.id)' onmouseleave='hideInfo()' points='$row[$_polygon]'/>";

           if($_pPROVANTWERPEN==0){$_kaartPrijzen.="<script>document.getElementById('PROVANTWERPEN').style.fill='#C8C8C8';document.getElementById('PROVANTWERPEN2').style.fill='#C8C8C8';</script>";}
           if($_pPROVANTWERPEN>=$_prijs0 && $_pPROVANTWERPEN<$_prijs1){$_kaartPrijzen.="<script>document.getElementById('PROVANTWERPEN').style.fill='darkgreen';document.getElementById('PROVANTWERPEN2').style.fill='darkgreen';</script>";};
           if($_pPROVANTWERPENL>=1.000001){$_kaartPrijzen.="<script>document.getElementById('PROVANTWERPEN').style.fill='maroon';document.getElementById('PROVANTWERPEN2').style.fill='maroon';</script>";} 
           if($_pPROVANTWERPEN>=$_prijs1 && $_pPROVANTWERPEN<$_prijs2){$_kaartPrijzen.="<script>document.getElementById('PROVANTWERPEN').style.fill='forestgreen';document.getElementById('PROVANTWERPEN2').style.fill='forestgreen';</script>";}; 
           if($_pPROVANTWERPEN>=$_prijs2 && $_pPROVANTWERPEN<$_prijs3){$_kaartPrijzen.="<script>document.getElementById('PROVANTWERPEN').style.fill='limegreen';document.getElementById('PROVANTWERPEN2').style.fill='limegreen';</script>";}; 
           if($_pPROVANTWERPEN>=$_prijs3 && $_pPROVANTWERPEN<$_prijs4){$_kaartPrijzen.="<script>document.getElementById('PROVANTWERPEN').style.fill='greenyellow';document.getElementById('PROVANTWERPEN2').style.fill='greenyellow';</script>";}; 
           if($_pPROVANTWERPEN>=$_prijs4 && $_pPROVANTWERPEN<$_prijs5){$_kaartPrijzen.="<script>document.getElementById('PROVANTWERPEN').style.fill='lightellow';document.getElementById('PROVANTWERPEN2').style.fill='lightyellow';</script>";}; 
           if($_pPROVANTWERPEN>=$_prijs5 && $_pPROVANTWERPEN<$_prijs6){$_kaartPrijzen.="<script>document.getElementById('PROVANTWERPEN').style.fill='#FFFF88';document.getElementById('PROVANTWERPEN2').style.fill='#FFFF88';</script>";}; 
           if($_pPROVANTWERPEN>=$_prijs6 && $_pPROVANTWERPEN<$_prijs7){$_kaartPrijzen.="<script>document.getElementById('PROVANTWERPEN').style.fill='#FAEE0a';document.getElementById('PROVANTWERPEN2').style.fill='#FAEE0a';</script>";}; 
           if($_pPROVANTWERPEN>=$_prijs7 && $_pPROVANTWERPEN<$_prijs8){$_kaartPrijzen.="<script>document.getElementById('PROVANTWERPEN').style.fill='gold';document.getElementById('PROVANTWERPEN2').style.fill='gold';</script>";}; 
           if($_pPROVANTWERPEN>=$_prijs8 && $_pPROVANTWERPEN<$_prijs9){$_kaartPrijzen.="<script>document.getElementById('PROVANTWERPEN').style.fill='orange';document.getElementById('PROVANTWERPEN2').style.fill='orange';</script>";}; 
           if($_pPROVANTWERPEN>=$_prijs9 && $_pPROVANTWERPEN<$_prijs10){$_kaartPrijzen.="<script>document.getElementById('PROVANTWERPEN').style.fill='darkorange';document.getElementById('PROVANTWERPEN2').style.fill='darkorange';</script>";}; 
           if($_pPROVANTWERPEN>=$_prijs10 && $_pPROVANTWERPEN<$_prijs11){$_kaartPrijzen.="<script>document.getElementById('PROVANTWERPEN').style.fill='orangered';document.getElementById('PROVANTWERPEN2').style.fill='orangered';</script>";}; 
           if($_pPROVANTWERPEN>=$_prijs11 && $_pPROVANTWERPEN<$_prijs12){$_kaartPrijzen.="<script>document.getElementById('PROVANTWERPEN').style.fill='crimson';document.getElementById('PROVANTWERPEN2').style.fill='crimson';</script>";}; 
           if($_pPROVANTWERPEN>=$_prijs12 && $_pPROVANTWERPEN<$_prijs13){$_kaartPrijzen.="<script>document.getElementById('PROVANTWERPEN').style.fill='chocolate';document.getElementById('PROVANTWERPEN2').style.fill='chocolate';</script>";}; 
           if($_pPROVANTWERPEN>=$_prijs13 && $_pPROVANTWERPEN<$_prijs14){$_kaartPrijzen.="<script>document.getElementById('PROVANTWERPEN').style.fill='sienna';document.getElementById('PROVANTWERPEN2').style.fill='sienna';</script>";}; 
           if($_pPROVANTWERPEN>=$_prijs14){$_kaartPrijzen.="<script>document.getElementById('PROVANTWERPEN').style.fill='maroon';document.getElementById('PROVANTWERPEN2').style.fill='maroon';</script>";}; 

           if($_pPROVBRUSSEL==0){$_kaartPrijzen.="<script>document.getElementById('PROVBRUSSEL').style.fill='#C8C8C8';</script>";}
           if($_pPROVBRUSSEL>=$_prijs0 && $_pPROVBRUSSEL<$_prijs1){$_kaartPrijzen.="<script>document.getElementById('PROVBRUSSEL').style.fill='darkgreen';</script>";}
           if($_pPROVBRUSSEL>=1.000001){$_kaartPrijzen.="<script>document.getElementById('PROVBRUSSEL').style.fill='maroon';</script>";} 
           if($_pPROVBRUSSEL>=$_prijs1 && $_pPROVBRUSSEL<$_prijs2){$_kaartPrijzen.="<script>document.getElementById('PROVBRUSSEL').style.fill='forestgreen';</script>";} 
           if($_pPROVBRUSSEL>=$_prijs2 && $_pPROVBRUSSEL<$_prijs3){$_kaartPrijzen.="<script>document.getElementById('PROVBRUSSEL').style.fill='limegreen';</script>";} 
           if($_pPROVBRUSSEL>=$_prijs3 && $_pPROVBRUSSEL<$_prijs4){$_kaartPrijzen.="<script>document.getElementById('PROVBRUSSEL').style.fill='greenyellow';</script>";} 
           if($_pPROVBRUSSEL>=$_prijs4 && $_pPROVBRUSSEL<$_prijs5){$_kaartPrijzen.="<script>document.getElementById('PROVBRUSSEL').style.fill='lightyellow';</script>";} 
           if($_pPROVBRUSSEL>=$_prijs5 && $_pPROVBRUSSEL<$_prijs6){$_kaartPrijzen.="<script>document.getElementById('PROVBRUSSEL').style.fill='#FFFF88';</script>";} 
           if($_pPROVBRUSSEL>=$_prijs6 && $_pPROVBRUSSEL<$_prijs7){$_kaartPrijzen.="<script>document.getElementById('PROVBRUSSEL').style.fill='#FAEE0a';</script>";}
           if($_pPROVBRUSSEL>=$_prijs7 && $_pPROVBRUSSEL<$_prijs8){$_kaartPrijzen.="<script>document.getElementById('PROVBRUSSEL').style.fill='gold';</script>";}
           if($_pPROVBRUSSEL>=$_prijs8 && $_pPROVBRUSSEL<$_prijs9){$_kaartPrijzen.="<script>document.getElementById('PROVBRUSSEL').style.fill='orange';</script>";} 
           if($_pPROVBRUSSEL>=$_prijs9 && $_pPROVBRUSSEL<$_prijs10){$_kaartPrijzen.="<script>document.getElementById('PROVBRUSSEL').style.fill='darkorange';</script>";} 
           if($_pPROVBRUSSEL>=$_prijs10 && $_pPROVBRUSSEL<$_prijs11){$_kaartPrijzen.="<script>document.getElementById('PROVBRUSSEL').style.fill='orangered';</script>";} 
           if($_pPROVBRUSSEL>=$_prijs11 && $_pPROVBRUSSEL<$_prijs12){$_kaartPrijzen.="<script>document.getElementById('PROVBRUSSEL').style.fill='crimson';</script>";} 
           if($_pPROVBRUSSEL>=$_prijs12 && $_pPROVBRUSSEL<$_prijs13){$_kaartPrijzen.="<script>document.getElementById('PROVBRUSSEL').style.fill='chocolate';</script>";} 
           if($_pPROVBRUSSEL>=$_prijs13 && $_pPROVBRUSSEL<$_prijs14){$_kaartPrijzen.="<script>document.getElementById('PROVBRUSSEL').style.fill='sienna';</script>";} 
           if($_pPROVBRUSSEL>=$_prijs14){$_kaartPrijzen.="<script>document.getElementById('PROVBRUSSEL').style.fill='maroon';</script>";} 
    
           if($_pPROVHAINAUT==0){$_kaartPrijzen.="<script>document.getElementById('PROVHAINAUT').style.fill='#C8C8C8';document.getElementById('PROVHAINAUT2').style.fill='#D8D8D8';</script>";}
           if($_pPROVHAINAUT>=$_prijs0 && $_pPROVHAINAUT<$_prijs1){$_kaartPrijzen.="<script>document.getElementById('PROVHAINAUT').style.fill='darkgreen';document.getElementById('PROVHAINAUT2').style.fill='darkgreen';</script>";}
           if($_pPROVHAINAUT>=1.000001){$_kaartPrijzen.="<script>document.getElementById('PROVHAINAUT').style.fill='maroon';document.getElementById('PROVHAINAUT2').style.fill='maroon';</script>";} 
           if($_pPROVHAINAUT>=$_prijs1 && $_pPROVHAINAUT<$_prijs2){$_kaartPrijzen.="<script>document.getElementById('PROVHAINAUT').style.fill='forestgreen';document.getElementById('PROVHAINAUT2').style.fill='forestgreen';</script>";} 
           if($_pPROVHAINAUT>=$_prijs2 && $_pPROVHAINAUT<$_prijs3){$_kaartPrijzen.="<script>document.getElementById('PROVHAINAUT').style.fill='limegreen';document.getElementById('PROVHAINAUT2').style.fill='limegreen';</script>";} 
           if($_pPROVHAINAUT>=$_prijs3 && $_pPROVHAINAUT<$_prijs4){$_kaartPrijzen.="<script>document.getElementById('PROVHAINAUT').style.fill='greenyellow';document.getElementById('PROVHAINAUT2').style.fill='greenyellow';</script>";} 
           if($_pPROVHAINAUT>=$_prijs4 && $_pPROVHAINAUT<$_prijs5){$_kaartPrijzen.="<script>document.getElementById('PROVHAINAUT').style.fill='lightyellow';document.getElementById('PROVHAINAUT2').style.fill='lightyellow';</script>";} 
           if($_pPROVHAINAUT>=$_prijs5 && $_pPROVHAINAUT<$_prijs6){$_kaartPrijzen.="<script>document.getElementById('PROVHAINAUT').style.fill='#FFFF88';document.getElementById('PROVHAINAUT2').style.fill='#FFFF88';</script>";} 
           if($_pPROVHAINAUT>=$_prijs6 && $_pPROVHAINAUT<$_prijs7){$_kaartPrijzen.="<script>document.getElementById('PROVHAINAUT').style.fill='#FAEE0a';document.getElementById('PROVHAINAUT2').style.fill='#FAEE0a';</script>";}
           if($_pPROVHAINAUT>=$_prijs7 && $_pPROVHAINAUT<$_prijs8){$_kaartPrijzen.="<script>document.getElementById('PROVHAINAUT').style.fill='gold';document.getElementById('PROVHAINAUT2').style.fill='gold';</script>";}
           if($_pPROVHAINAUT>=$_prijs8 && $_pPROVHAINAUT<$_prijs9){$_kaartPrijzen.="<script>document.getElementById('PROVHAINAUT').style.fill='orange';document.getElementById('PROVHAINAUT2').style.fill='orange';</script>";} 
           if($_pPROVHAINAUT>=$_prijs9 && $_pPROVHAINAUT<$_prijs10){$_kaartPrijzen.="<script>document.getElementById('PROVHAINAUT').style.fill='darkorange';document.getElementById('PROVHAINAUT2').style.fill='darkorange';</script>";} 
           if($_pPROVHAINAUT>=$_prijs10 && $_pPROVHAINAUT<$_prijs11){$_kaartPrijzen.="<script>document.getElementById('PROVHAINAUT').style.fill='orangered';document.getElementById('PROVHAINAUT2').style.fill='orangered';</script>";} 
           if($_pPROVHAINAUT>=$_prijs11 && $_pPROVHAINAUT<$_prijs12){$_kaartPrijzen.="<script>document.getElementById('PROVHAINAUT').style.fill='crimson';document.getElementById('PROVHAINAUT2').style.fill='crimson';</script>";} 
           if($_pPROVHAINAUT>=$_prijs12 && $_pPROVHAINAUT<$_prijs13){$_kaartPrijzen.="<script>document.getElementById('PROVHAINAUT').style.fill='chocolate';document.getElementById('PROVHAINAUT2').style.fill='chocolate';</script>";} 
           if($_pPROVHAINAUT>=$_prijs13 && $_pPROVHAINAUT<$_prijs14){$_kaartPrijzen.="<script>document.getElementById('PROVHAINAUT').style.fill='sienna';document.getElementById('PROVHAINAUT2').style.fill='sienna';</script>";} 
           if($_pPROVHAINAUT>=$_prijs14){$_kaartPrijzen.="<script>document.getElementById('PROVHAINAUT').style.fill='maroon';document.getElementById('PROVHAINAUT2').style.fill='maroon';</script>";} 

           if($_pPROVLIMBURG==0){$_kaartPrijzen.="<script>document.getElementById('PROVLIMBURG').style.fill='#C8C8C8';document.getElementById('PROVLIMBURG2').style.fill='#D8D8D8';</script>";}
           if($_pPROVLIMBURG>=$_prijs0 && $_pPROVLIMBURG<$_prijs1){$_kaartPrijzen.="<script>document.getElementById('PROVLIMBURG').style.fill='darkgreen';document.getElementById('PROVLIMBURG2').style.fill='darkgreen';</script>";}
           if($_pPROVLIMBURG>=1.000001){$_kaartPrijzen.="<script>document.getElementById('PROVLIMBURG').style.fill='maroon';document.getElementById('PROVLIMBURG2').style.fill='maroon';</script>";} 
           if($_pPROVLIMBURG>=$_prijs1 && $_pPROVLIMBURG<$_prijs2){$_kaartPrijzen.="<script>document.getElementById('PROVLIMBURG').style.fill='forestgreen';document.getElementById('PROVLIMBURG2').style.fill='forestgreen';</script>";} 
           if($_pPROVLIMBURG>=$_prijs2 && $_pPROVLIMBURG<$_prijs3){$_kaartPrijzen.="<script>document.getElementById('PROVLIMBURG').style.fill='limegreen';document.getElementById('PROVLIMBURG2').style.fill='limegreen';</script>";} 
           if($_pPROVLIMBURG>=$_prijs3 && $_pPROVLIMBURG<$_prijs4){$_kaartPrijzen.="<script>document.getElementById('PROVLIMBURG').style.fill='greenyellow';document.getElementById('PROVLIMBURG2').style.fill='greenyellow';</script>";} 
           if($_pPROVLIMBURG>=$_prijs4 && $_pPROVLIMBURG<$_prijs5){$_kaartPrijzen.="<script>document.getElementById('PROVLIMBURG').style.fill='lightyellow';document.getElementById('PROVLIMBURG2').style.fill='lightyellow';</script>";} 
           if($_pPROVLIMBURG>=$_prijs5 && $_pPROVLIMBURG<$_prijs6){$_kaartPrijzen.="<script>document.getElementById('PROVLIMBURG').style.fill='#FFFF88';document.getElementById('PROVLIMBURG2').style.fill='#FFFF88';</script>";} 
           if($_pPROVLIMBURG>=$_prijs6 && $_pPROVLIMBURG<$_prijs7){$_kaartPrijzen.="<script>document.getElementById('PROVLIMBURG').style.fill='#FAEE0a';document.getElementById('PROVLIMBURG2').style.fill='#FAEE0a';</script>";}
           if($_pPROVLIMBURG>=$_prijs7 && $_pPROVLIMBURG<$_prijs8){$_kaartPrijzen.="<script>document.getElementById('PROVLIMBURG').style.fill='gold';document.getElementById('PROVLIMBURG2').style.fill='gold';</script>";}
           if($_pPROVLIMBURG>=$_prijs8 && $_pPROVLIMBURG<$_prijs9){$_kaartPrijzen.="<script>document.getElementById('PROVLIMBURG').style.fill='orange';document.getElementById('PROVLIMBURG2').style.fill='orange';</script>";} 
           if($_pPROVLIMBURG>=$_prijs9 && $_pPROVLIMBURG<$_prijs10){$_kaartPrijzen.="<script>document.getElementById('PROVLIMBURG').style.fill='darkorange';document.getElementById('PROVLIMBURG2').style.fill='darkorange';</script>";} 
           if($_pPROVLIMBURG>=$_prijs10 && $_pPROVLIMBURG<$_prijs11){$_kaartPrijzen.="<script>document.getElementById('PROVLIMBURG').style.fill='orangered';document.getElementById('PROVLIMBURG2').style.fill='orangered';</script>";} 
           if($_pPROVLIMBURG>=$_prijs11 && $_pPROVLIMBURG<$_prijs12){$_kaartPrijzen.="<script>document.getElementById('PROVLIMBURG').style.fill='crimson';document.getElementById('PROVLIMBURG2').style.fill='crimson';</script>";} 
           if($_pPROVLIMBURG>=$_prijs12 && $_pPROVLIMBURG<$_prijs13){$_kaartPrijzen.="<script>document.getElementById('PROVLIMBURG').style.fill='chocolate';document.getElementById('PROVLIMBURG2').style.fill='chocolate';</script>";} 
           if($_pPROVLIMBURG>=$_prijs13 && $_pPROVLIMBURG<$_prijs14){$_kaartPrijzen.="<script>document.getElementById('PROVLIMBURG').style.fill='sienna';document.getElementById('PROVLIMBURG2').style.fill='sienna';</script>";} 
           if($_pPROVLIMBURG>=$_prijs14){$_kaartPrijzen.="<script>document.getElementById('PROVLIMBURG').style.fill='maroon';document.getElementById('PROVLIMBURG2').style.fill='maroon';</script>";} 

           if($_pPROVLIEGE==0){$_kaartPrijzen.="<script>document.getElementById('PROVLIEGE').style.fill='#C8C8C8';</script>";}
           if($_pPROVLIEGE>=$_prijs0 && $_pPROVLIEGE<$_prijs1){$_kaartPrijzen.="<script>document.getElementById('PROVLIEGE').style.fill='darkgreen';</script>";}
           if($_pPROVLIEGE>=1.000001){$_kaartPrijzen.="<script>document.getElementById('PROVLIEGE').style.fill='maroon';</script>";} 
           if($_pPROVLIEGE>=$_prijs1 && $_pPROVLIEGE<$_prijs2){$_kaartPrijzen.="<script>document.getElementById('PROVLIEGE').style.fill='forestgreen';</script>";} 
           if($_pPROVLIEGE>=$_prijs2 && $_pPROVLIEGE<$_prijs3){$_kaartPrijzen.="<script>document.getElementById('PROVLIEGE').style.fill='limegreen';</script>";} 
           if($_pPROVLIEGE>=$_prijs3 && $_pPROVLIEGE<$_prijs4){$_kaartPrijzen.="<script>document.getElementById('PROVLIEGE').style.fill='greenyellow';</script>";} 
           if($_pPROVLIEGE>=$_prijs4 && $_pPROVLIEGE<$_prijs5){$_kaartPrijzen.="<script>document.getElementById('PROVLIEGE').style.fill='lightyellow';</script>";} 
           if($_pPROVLIEGE>=$_prijs5 && $_pPROVLIEGE<$_prijs6){$_kaartPrijzen.="<script>document.getElementById('PROVLIEGE').style.fill='#FFFF88';</script>";} 
           if($_pPROVLIEGE>=$_prijs6 && $_pPROVLIEGE<$_prijs7){$_kaartPrijzen.="<script>document.getElementById('PROVLIEGE').style.fill='#FAEE0a';</script>";}
           if($_pPROVLIEGE>=$_prijs7 && $_pPROVLIEGE<$_prijs8){$_kaartPrijzen.="<script>document.getElementById('PROVLIEGE').style.fill='gold';</script>";}
           if($_pPROVLIEGE>=$_prijs8 && $_pPROVLIEGE<$_prijs9){$_kaartPrijzen.="<script>document.getElementById('PROVLIEGE').style.fill='orange';</script>";} 
           if($_pPROVLIEGE>=$_prijs9 && $_pPROVLIEGE<$_prijs10){$_kaartPrijzen.="<script>document.getElementById('PROVLIEGE').style.fill='darkorange';</script>";} 
           if($_pPROVLIEGE>=$_prijs10 && $_pPROVLIEGE<$_prijs11){$_kaartPrijzen.="<script>document.getElementById('PROVLIEGE').style.fill='orangered';</script>";} 
           if($_pPROVLIEGE>=$_prijs11 && $_pPROVLIEGE<$_prijs12){$_kaartPrijzen.="<script>document.getElementById('PROVLIEGE').style.fill='crimson';</script>";} 
           if($_pPROVLIEGE>=$_prijs12 && $_pPROVLIEGE<$_prijs13){$_kaartPrijzen.="<script>document.getElementById('PROVLIEGE').style.fill='chocolate';</script>";} 
           if($_pPROVLIEGE>=$_prijs13 && $_pPROVLIEGE<$_prijs14){$_kaartPrijzen.="<script>document.getElementById('PROVLIEGE').style.fill='sienna';</script>";} 
           if($_pPROVLIEGE>=$_prijs14){$_kaartPrijzen.="<script>document.getElementById('PROVLIEGE').style.fill='maroon';</script>";} 

           if($_pPROVLUXEMBOURG==0){$_kaartPrijzen.="<script>document.getElementById('PROVLUXEMBOURG').style.fill='#C8C8C8';</script>";}
           if($_pPROVLUXEMBOURG>=$_prijs0 && $_pPROVLUXEMBOURG<$_prijs1){$_kaartPrijzen.="<script>document.getElementById('PROVLUXEMBOURG').style.fill='darkgreen';</script>";}
           if($_pPROVLUXEMBOURG>=1.000001){$_kaartPrijzen.="<script>document.getElementById('PROVLUXEMBOURG').style.fill='maroon';</script>";} 
           if($_pPROVLUXEMBOURG>=$_prijs1 && $_pPROVLUXEMBOURG<$_prijs2){$_kaartPrijzen.="<script>document.getElementById('PROVLUXEMBOURG').style.fill='forestgreen';</script>";} 
           if($_pPROVLUXEMBOURG>=$_prijs2 && $_pPROVLUXEMBOURG<$_prijs3){$_kaartPrijzen.="<script>document.getElementById('PROVLUXEMBOURG').style.fill='limegreen';</script>";} 
           if($_pPROVLUXEMBOURG>=$_prijs3 && $_pPROVLUXEMBOURG<$_prijs4){$_kaartPrijzen.="<script>document.getElementById('PROVLUXEMBOURG').style.fill='greenyellow';</script>";} 
           if($_pPROVLUXEMBOURG>=$_prijs4 && $_pPROVLUXEMBOURG<$_prijs5){$_kaartPrijzen.="<script>document.getElementById('PROVLUXEMBOURG').style.fill='lightyellow';</script>";} 
           if($_pPROVLUXEMBOURG>=$_prijs5 && $_pPROVLUXEMBOURG<$_prijs6){$_kaartPrijzen.="<script>document.getElementById('PROVLUXEMBOURG').style.fill='#FFFF88';</script>";} 
           if($_pPROVLUXEMBOURG>=$_prijs6 && $_pPROVLUXEMBOURG<$_prijs7){$_kaartPrijzen.="<script>document.getElementById('PROVLUXEMBOURG').style.fill='#FAEE0a';</script>";}
           if($_pPROVLUXEMBOURG>=$_prijs7 && $_pPROVLUXEMBOURG<$_prijs8){$_kaartPrijzen.="<script>document.getElementById('PROVLUXEMBOURG').style.fill='gold';</script>";}
           if($_pPROVLUXEMBOURG>=$_prijs8 && $_pPROVLUXEMBOURG<$_prijs9){$_kaartPrijzen.="<script>document.getElementById('PROVLUXEMBOURG').style.fill='orange';</script>";} 
           if($_pPROVLUXEMBOURG>=$_prijs9 && $_pPROVLUXEMBOURG<$_prijs10){$_kaartPrijzen.="<script>document.getElementById('PROVLUXEMBOURG').style.fill='darkorange';</script>";} 
           if($_pPROVLUXEMBOURG>=$_prijs10 && $_pPROVLUXEMBOURG<$_prijs11){$_kaartPrijzen.="<script>document.getElementById('PROVLUXEMBOURG').style.fill='orangered';</script>";} 
           if($_pPROVLUXEMBOURG>=$_prijs11 && $_pPROVLUXEMBOURG<$_prijs12){$_kaartPrijzen.="<script>document.getElementById('PROVLUXEMBOURG').style.fill='crimson';</script>";} 
           if($_pPROVLUXEMBOURG>=$_prijs12 && $_pPROVLUXEMBOURG<$_prijs13){$_kaartPrijzen.="<script>document.getElementById('PROVLUXEMBOURG').style.fill='chocolate';</script>";} 
           if($_pPROVLUXEMBOURG>=$_prijs13 && $_pPROVLUXEMBOURG<$_prijs14){$_kaartPrijzen.="<script>document.getElementById('PROVLUXEMBOURG').style.fill='sienna';</script>";} 
           if($_pPROVLUXEMBOURG>=$_prijs14){$_kaartPrijzen.="<script>document.getElementById('PROVLUXEMBOURG').style.fill='maroon';</script>";} 

           if($_pPROVNAMUR==0){$_kaartPrijzen.="<script>document.getElementById('PROVNAMUR').style.fill='#C8C8C8';</script>";}
           if($_pPROVNAMUR>=$_prijs0 && $_pPROVNAMUR<$_prijs1){$_kaartPrijzen.="<script>document.getElementById('PROVNAMUR').style.fill='darkgreen';</script>";}
           if($_pPROVNAMUR>=1.000001){$_kaartPrijzen.="<script>document.getElementById('PROVBNAMUR').style.fill='maroon';</script>";} 
           if($_pPROVNAMUR>=$_prijs1 && $_pPROVNAMUR<$_prijs2){$_kaartPrijzen.="<script>document.getElementById('PROVNAMUR').style.fill='forestgreen';</script>";} 
           if($_pPROVNAMUR>=$_prijs2 && $_pPROVNAMUR<$_prijs3){$_kaartPrijzen.="<script>document.getElementById('PROVNAMUR').style.fill='limegreen';</script>";} 
           if($_pPROVNAMUR>=$_prijs3 && $_pPROVNAMUR<$_prijs4){$_kaartPrijzen.="<script>document.getElementById('PROVNAMUR').style.fill='greenyellow';</script>";} 
           if($_pPROVNAMUR>=$_prijs4 && $_pPROVNAMUR<$_prijs5){$_kaartPrijzen.="<script>document.getElementById('PROVNAMUR').style.fill='lightyellow';</script>";} 
           if($_pPROVNAMUR>=$_prijs5 && $_pPROVNAMUR<$_prijs6){$_kaartPrijzen.="<script>document.getElementById('PROVNAMUR').style.fill='#FFFF88';</script>";} 
           if($_pPROVNAMUR>=$_prijs6 && $_pPROVNAMUR<$_prijs7){$_kaartPrijzen.="<script>document.getElementById('PROVNAMUR').style.fill='#FAEE0a';</script>";}
           if($_pPROVNAMUR>=$_prijs7 && $_pPROVNAMUR<$_prijs8){$_kaartPrijzen.="<script>document.getElementById('PROVNAMUR').style.fill='gold';</script>";}
           if($_pPROVNAMUR>=$_prijs8 && $_pPROVNAMUR<$_prijs9){$_kaartPrijzen.="<script>document.getElementById('PROVNAMUR').style.fill='orange';</script>";} 
           if($_pPROVNAMUR>=$_prijs9 && $_pPROVNAMUR<$_prijs10){$_kaartPrijzen.="<script>document.getElementById('PROVNAMUR').style.fill='darkorange';</script>";} 
           if($_pPROVNAMUR>=$_prijs10 && $_pPROVNAMUR<$_prijs11){$_kaartPrijzen.="<script>document.getElementById('PROVNAMUR').style.fill='orangered';</script>";} 
           if($_pPROVNAMUR>=$_prijs11 && $_pPROVNAMUR<$_prijs12){$_kaartPrijzen.="<script>document.getElementById('PROVNAMUR').style.fill='crimson';</script>";} 
           if($_pPROVNAMUR>=$_prijs12 && $_pPROVNAMUR<$_prijs13){$_kaartPrijzen.="<script>document.getElementById('PROVNAMUR').style.fill='chocolate';</script>";} 
           if($_pPROVNAMUR>=$_prijs13 && $_pPROVNAMUR<$_prijs14){$_kaartPrijzen.="<script>document.getElementById('PROVNAMUR').style.fill='sienna';</script>";} 
           if($_pPROVNAMUR>=$_prijs14){$_kaartPrijzen.="<script>document.getElementById('PROVNAMUR').style.fill='maroon';</script>";} 

           if($_pPROVOOSTVLAANDEREN==0){$_kaartPrijzen.="<script>document.getElementById('PROVOOSTVLAANDEREN').style.fill='#C8C8C8';</script>";}
           if($_pPROVOOSTVLAANDEREN>=$_prijs0 && $_pPROVOOSTVLAANDEREN<$_prijs1){$_kaartPrijzen.="<script>document.getElementById('PROVOOSTVLAANDEREN').style.fill='darkgreen';</script>";}
           if($_pPROVOOSTVLAANDEREN>=1.000001){$_kaartPrijzen.="<script>document.getElementById('PROVOOSTVLAANDEREN').style.fill='maroon';</script>";} 
           if($_pPROVOOSTVLAANDEREN>=$_prijs1 && $_pPROVOOSTVLAANDEREN<$_prijs2){$_kaartPrijzen.="<script>document.getElementById('PROVOOSTVLAANDEREN').style.fill='forestgreen';</script>";} 
           if($_pPROVOOSTVLAANDEREN>=$_prijs2 && $_pPROVOOSTVLAANDEREN<$_prijs3){$_kaartPrijzen.="<script>document.getElementById('PROVOOSTVLAANDEREN').style.fill='limegreen';</script>";} 
           if($_pPROVOOSTVLAANDEREN>=$_prijs3 && $_pPROVOOSTVLAANDEREN<$_prijs4){$_kaartPrijzen.="<script>document.getElementById('PROVOOSTVLAANDEREN').style.fill='greenyellow';</script>";} 
           if($_pPROVOOSTVLAANDEREN>=$_prijs4 && $_pPROVOOSTVLAANDEREN<$_prijs5){$_kaartPrijzen.="<script>document.getElementById('PROVOOSTVLAANDEREN').style.fill='lightyellow';</script>";} 
           if($_pPROVOOSTVLAANDEREN>=$_prijs5 && $_pPROVOOSTVLAANDEREN<$_prijs6){$_kaartPrijzen.="<script>document.getElementById('PROVOOSTVLAANDEREN').style.fill='#FFFF88';</script>";} 
           if($_pPROVOOSTVLAANDEREN>=$_prijs6 && $_pPROVOOSTVLAANDEREN<$_prijs7){$_kaartPrijzen.="<script>document.getElementById('PROVOOSTVLAANDEREN').style.fill='#FAEE0a';</script>";}
           if($_pPROVOOSTVLAANDEREN>=$_prijs7 && $_pPROVOOSTVLAANDEREN<$_prijs8){$_kaartPrijzen.="<script>document.getElementById('PROVOOSTVLAANDEREN').style.fill='gold';</script>";}
           if($_pPROVOOSTVLAANDEREN>=$_prijs8 && $_pPROVOOSTVLAANDEREN<$_prijs9){$_kaartPrijzen.="<script>document.getElementById('PROVOOSTVLAANDEREN').style.fill='orange';</script>";} 
           if($_pPROVOOSTVLAANDEREN>=$_prijs9 && $_pPROVOOSTVLAANDEREN<$_prijs10){$_kaartPrijzen.="<script>document.getElementById('PROVOOSTVLAANDEREN').style.fill='darkorange';</script>";} 
           if($_pPROVOOSTVLAANDEREN>=$_prijs10 && $_pPROVOOSTVLAANDEREN<$_prijs11){$_kaartPrijzen.="<script>document.getElementById('PROVOOSTVLAANDEREN').style.fill='orangered';</script>";} 
           if($_pPROVOOSTVLAANDEREN>=$_prijs11 && $_pPROVOOSTVLAANDEREN<$_prijs12){$_kaartPrijzen.="<script>document.getElementById('PROVOOSTVLAANDEREN').style.fill='crimson';</script>";} 
           if($_pPROVOOSTVLAANDEREN>=$_prijs12 && $_pPROVOOSTVLAANDEREN<$_prijs13){$_kaartPrijzen.="<script>document.getElementById('PROVOOSTVLAANDEREN').style.fill='chocolate';</script>";} 
           if($_pPROVOOSTVLAANDEREN>=$_prijs13 && $_pPROVOOSTVLAANDEREN<$_prijs14){$_kaartPrijzen.="<script>document.getElementById('PROVOOSTVLAANDEREN').style.fill='sienna';</script>";} 
           if($_pPROVOOSTVLAANDEREN>=$_prijs14){$_kaartPrijzen.="<script>document.getElementById('PROVOOSTVLAANDEREN').style.fill='maroon';</script>";} 

           if($_pPROVVLAAMSBRABANT==0){$_kaartPrijzen.="<script>document.getElementById('PROVVLAAMSBRABANT').style.fill='#C8C8C8';</script>";}
           if($_pPROVVLAAMSBRABANT>=$_prijs0 && $_pPROVVLAAMSBRABANT<$_prijs1){$_kaartPrijzen.="<script>document.getElementById('PROVVLAAMSBRABANT').style.fill='darkgreen';</script>";}
           if($_pPROVVLAAMSBRABANT>=1.000001){$_kaartPrijzen.="<script>document.getElementById('PROVVLAAMSBRABANT').style.fill='maroon';</script>";} 
           if($_pPROVVLAAMSBRABANT>=$_prijs1 && $_pPROVVLAAMSBRABANT<$_prijs2){$_kaartPrijzen.="<script>document.getElementById('PROVVLAAMSBRABANT').style.fill='forestgreen';</script>";} 
           if($_pPROVVLAAMSBRABANT>=$_prijs2 && $_pPROVVLAAMSBRABANT<$_prijs3){$_kaartPrijzen.="<script>document.getElementById('PROVVLAAMSBRABANT').style.fill='limegreen';</script>";} 
           if($_pPROVVLAAMSBRABANT>=$_prijs3 && $_pPROVVLAAMSBRABANT<$_prijs4){$_kaartPrijzen.="<script>document.getElementById('PROVVLAAMSBRABANT').style.fill='greenyellow';</script>";} 
           if($_pPROVVLAAMSBRABANT>=$_prijs4 && $_pPROVVLAAMSBRABANT<$_prijs5){$_kaartPrijzen.="<script>document.getElementById('PROVVLAAMSBRABANT').style.fill='lightyellow';</script>";} 
           if($_pPROVVLAAMSBRABANT>=$_prijs5 && $_pPROVVLAAMSBRABANT<$_prijs6){$_kaartPrijzen.="<script>document.getElementById('PROVVLAAMSBRABANT').style.fill='#FFFF88';</script>";} 
           if($_pPROVVLAAMSBRABANT>=$_prijs6 && $_pPROVVLAAMSBRABANT<$_prijs7){$_kaartPrijzen.="<script>document.getElementById('PROVVLAAMSBRABANT').style.fill='#FAEE0a';</script>";}
           if($_pPROVVLAAMSBRABANT>=$_prijs7 && $_pPROVVLAAMSBRABANT<$_prijs8){$_kaartPrijzen.="<script>document.getElementById('PROVVLAAMSBRABANT').style.fill='gold';</script>";}
           if($_pPROVVLAAMSBRABANT>=$_prijs8 && $_pPROVVLAAMSBRABANT<$_prijs9){$_kaartPrijzen.="<script>document.getElementById('PROVVLAAMSBRABANT').style.fill='orange';</script>";} 
           if($_pPROVVLAAMSBRABANT>=$_prijs9 && $_pPROVVLAAMSBRABANT<$_prijs10){$_kaartPrijzen.="<script>document.getElementById('PROVVLAAMSBRABANT').style.fill='darkorange';</script>";} 
           if($_pPROVVLAAMSBRABANT>=$_prijs10 && $_pPROVVLAAMSBRABANT<$_prijs11){$_kaartPrijzen.="<script>document.getElementById('PROVVLAAMSBRABANT').style.fill='orangered';</script>";} 
           if($_pPROVVLAAMSBRABANT>=$_prijs11 && $_pPROVVLAAMSBRABANT<$_prijs12){$_kaartPrijzen.="<script>document.getElementById('PROVVLAAMSBRABANT').style.fill='crimson';</script>";} 
           if($_pPROVVLAAMSBRABANT>=$_prijs12 && $_pPROVVLAAMSBRABANT<$_prijs13){$_kaartPrijzen.="<script>document.getElementById('PROVVLAAMSBRABANT').style.fill='chocolate';</script>";} 
           if($_pPROVVLAAMSBRABANT>=$_prijs13 && $_pPROVVLAAMSBRABANT<$_prijs14){$_kaartPrijzen.="<script>document.getElementById('PROVVLAAMSBRABANT').style.fill='sienna';</script>";} 
           if($_pPROVVLAAMSBRABANT>=$_prijs14){$_kaartPrijzen.="<script>document.getElementById('PROVVLAAMSBRABANT').style.fill='maroon';</script>";} 

           if($_pPROVBRABANTWALLON==0){$_kaartPrijzen.="<script>document.getElementById('PROVBRABANTWALLON').style.fill='#C8C8C8';</script>";}
           if($_pPROVBRABANTWALLON>=$_prijs0 && $_pPROVBRABANTWALLON<$_prijs1){$_kaartPrijzen.="<script>document.getElementById('PROVBRABANTWALLON').style.fill='darkgreen';</script>";}
           if($_pPROVBRABANTWALLON>=1.000001){$_kaartPrijzen.="<script>document.getElementById('PROVBRABANTWALLON').style.fill='maroon';</script>";} 
           if($_pPROVBRABANTWALLON>=$_prijs1 && $_pPROVBRABANTWALLON<$_prijs2){$_kaartPrijzen.="<script>document.getElementById('PROVBRABANTWALLON').style.fill='forestgreen';</script>";} 
           if($_pPROVBRABANTWALLON>=$_prijs2 && $_pPROVBRABANTWALLON<$_prijs3){$_kaartPrijzen.="<script>document.getElementById('PROVBRABANTWALLON').style.fill='limegreen';</script>";} 
           if($_pPROVBRABANTWALLON>=$_prijs3 && $_pPROVBRABANTWALLON<$_prijs4){$_kaartPrijzen.="<script>document.getElementById('PROVBRABANTWALLON').style.fill='greenyellow';</script>";} 
           if($_pPROVBRABANTWALLON>=$_prijs4 && $_pPROVBRABANTWALLON<$_prijs5){$_kaartPrijzen.="<script>document.getElementById('PROVBRABANTWALLON').style.fill='lightyellow';</script>";} 
           if($_pPROVBRABANTWALLON>=$_prijs5 && $_pPROVBRABANTWALLON<$_prijs6){$_kaartPrijzen.="<script>document.getElementById('PROVBRABANTWALLON').style.fill='#FFFF88';</script>";} 
           if($_pPROVBRABANTWALLON>=$_prijs6 && $_pPROVBRABANTWALLON<$_prijs7){$_kaartPrijzen.="<script>document.getElementById('PROVBRABANTWALLON').style.fill='#FAEE0a';</script>";}
           if($_pPROVBRABANTWALLON>=$_prijs7 && $_pPROVBRABANTWALLON<$_prijs8){$_kaartPrijzen.="<script>document.getElementById('PROVBRABANTWALLON').style.fill='gold';</script>";}
           if($_pPROVBRABANTWALLON>=$_prijs8 && $_pPROVBRABANTWALLON<$_prijs9){$_kaartPrijzen.="<script>document.getElementById('PROVBRABANTWALLON').style.fill='orange';</script>";} 
           if($_pPROVBRABANTWALLON>=$_prijs9 && $_pPROVBRABANTWALLON<$_prijs10){$_kaartPrijzen.="<script>document.getElementById('PROVBRABANTWALLON').style.fill='darkorange';</script>";} 
           if($_pPROVBRABANTWALLON>=$_prijs10 && $_pPROVBRABANTWALLON<$_prijs11){$_kaartPrijzen.="<script>document.getElementById('PROVBRABANTWALLON').style.fill='orangered';</script>";} 
           if($_pPROVBRABANTWALLON>=$_prijs11 && $_pPROVBRABANTWALLON<$_prijs12){$_kaartPrijzen.="<script>document.getElementById('PROVBRABANTWALLON').style.fill='crimson';</script>";} 
           if($_pPROVBRABANTWALLON>=$_prijs12 && $_pPROVBRABANTWALLON<$_prijs13){$_kaartPrijzen.="<script>document.getElementById('PROVBRABANTWALLON').style.fill='chocolate';</script>";} 
           if($_pPROVBRABANTWALLON>=$_prijs13 && $_pPROVBRABANTWALLON<$_prijs14){$_kaartPrijzen.="<script>document.getElementById('PROVBRABANTWALLON').style.fill='sienna';</script>";} 
           if($_pPROVBRABANTWALLON>=$_prijs14){$_kaartPrijzen.="<script>document.getElementById('PROVBRABANTWALLON').style.fill='maroon';</script>";} 

           if($_pPROVWESTVLAANDEREN==0){$_kaartPrijzen.="<script>document.getElementById('PROVWESTVLAANDEREN').style.fill='#C8C8C8';</script>";}
           if($_pPROVWESTVLAANDEREN>=$_prijs0 && $_pPROVWESTVLAANDEREN<$_prijs1){$_kaartPrijzen.="<script>document.getElementById('PROVWESTVLAANDEREN').style.fill='darkgreen';</script>";}
           if($_pPROVWESTVLAANDEREN>=1.000001){$_kaartPrijzen.="<script>document.getElementById('PROVWESTVLAANDEREN').style.fill='maroon';</script>";} 
           if($_pPROVWESTVLAANDEREN>=$_prijs1 && $_pPROVWESTVLAANDEREN<$_prijs2){$_kaartPrijzen.="<script>document.getElementById('PROVWESTVLAANDEREN').style.fill='forestgreen';</script>";} 
           if($_pPROVWESTVLAANDEREN>=$_prijs2 && $_pPROVWESTVLAANDEREN<$_prijs3){$_kaartPrijzen.="<script>document.getElementById('PROVWESTVLAANDEREN').style.fill='limegreen';</script>";} 
           if($_pPROVWESTVLAANDEREN>=$_prijs3 && $_pPROVWESTVLAANDEREN<$_prijs4){$_kaartPrijzen.="<script>document.getElementById('PROVWESTVLAANDEREN').style.fill='greenyellow';</script>";} 
           if($_pPROVWESTVLAANDEREN>=$_prijs4 && $_pPROVWESTVLAANDEREN<$_prijs5){$_kaartPrijzen.="<script>document.getElementById('PROVWESTVLAANDEREN').style.fill='lightyellow';</script>";} 
           if($_pPROVWESTVLAANDEREN>=$_prijs5 && $_pPROVWESTVLAANDEREN<$_prijs6){$_kaartPrijzen.="<script>document.getElementById('PROVWESTVLAANDEREN').style.fill='#FFFF88';</script>";} 
           if($_pPROVWESTVLAANDEREN>=$_prijs6 && $_pPROVWESTVLAANDEREN<$_prijs7){$_kaartPrijzen.="<script>document.getElementById('PROVWESTVLAANDEREN').style.fill='#FAEE0a';</script>";}
           if($_pPROVWESTVLAANDEREN>=$_prijs7 && $_pPROVWESTVLAANDEREN<$_prijs8){$_kaartPrijzen.="<script>document.getElementById('PROVWESTVLAANDEREN').style.fill='gold';</script>";}
           if($_pPROVWESTVLAANDEREN>=$_prijs8 && $_pPROVWESTVLAANDEREN<$_prijs9){$_kaartPrijzen.="<script>document.getElementById('PROVWESTVLAANDEREN').style.fill='orange';</script>";} 
           if($_pPROVWESTVLAANDEREN>=$_prijs9 && $_pPROVWESTVLAANDEREN<$_prijs10){$_kaartPrijzen.="<script>document.getElementById('PROVWESTVLAANDEREN').style.fill='darkorange';</script>";} 
           if($_pPROVWESTVLAANDEREN>=$_prijs10 && $_pPROVWESTVLAANDEREN<$_prijs11){$_kaartPrijzen.="<script>document.getElementById('PROVWESTVLAANDEREN').style.fill='orangered';</script>";} 
           if($_pPROVWESTVLAANDEREN>=$_prijs11 && $_pPROVWESTVLAANDEREN<$_prijs12){$_kaartPrijzen.="<script>document.getElementById('PROVWESTVLAANDEREN').style.fill='crimson';</script>";} 
           if($_pPROVWESTVLAANDEREN>=$_prijs12 && $_pPROVWESTVLAANDEREN<$_prijs13){$_kaartPrijzen.="<script>document.getElementById('PROVWESTVLAANDEREN').style.fill='chocolate';</script>";} 
           if($_pPROVWESTVLAANDEREN>=$_prijs13 && $_pPROVWESTVLAANDEREN<$_prijs14){$_kaartPrijzen.="<script>document.getElementById('PROVWESTVLAANDEREN').style.fill='sienna';</script>";} 
           if($_pPROVWESTVLAANDEREN>=$_prijs14){$_kaartPrijzen.="<script>document.getElementById('PROVWESTVLAANDEREN').style.fill='maroon';</script>";} 
        }
    }

    require("../code/infoKaartPrijzen.inc.php");




/*XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

Vormgeving Kaart Transacties

XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX*/


    $_sql = "SELECT t_polygonen.d_gemeentePolygons,t_gemeenten.d_gemeente_NL,t_gemeenten.d_idNaam
    FROM t_polygonen 
    JOIN t_gemeenten ON t_polygonen.d_indexPolygons = t_gemeenten.d_indexGemeenten
    WHERE t_polygonen.td_indexProvincies=12";
   
    $_kaartTransacties="<svg x='$_x' y='$_y' viewBox='$_viewbox' class='$_provincie' id='svgPolyT'> ";
    $result = $_conn->query($_sql);
    if ($result->num_rows > 0) {     
               
        while($row = $result->fetch_assoc()) {   
        $_kaartTransacties.="<polygon class='prov' style='stroke:white;' id=t$row[$_infoNaam] onmouseover='showInfo2(this.id)' onmouseleave='hideInfo2()' points='$row[$_polygon]'/>";

        if($_tPROVANTWERPEN==0){$_kaartTransacties.="<script>document.getElementById('tPROVANTWERPEN').style.fill='#C8C8C8';document.getElementById('tPROVANTWERPEN2').style.fill='#C8C8C8';</script>";}
        if($_tPROVANTWERPEN>=$_transacties1 && $_tPROVANTWERPEN<$_transacties2){$_kaartTransacties.="<script>document.getElementById('tPROVANTWERPEN').style.fill='lightcoral';document.getElementById('tPROVANTWERPEN2').style.fill='lightcoral';</script>";}
        if($_tPROVANTWERPEN>=$_transacties2 && $_tPROVANTWERPEN<$_transacties3){$_kaartTransacties.="<script>document.getElementById('tPROVANTWERPEN').style.fill='orangered';document.getElementById('tPROVANTWERPEN2').style.fill='orangered';</script>";}
        if($_tPROVANTWERPEN>=$_transacties3 && $_tPROVANTWERPEN<$_transacties4){$_kaartTransacties.="<script>document.getElementById('tPROVANTWERPEN').style.fill='red';document.getElementById('tPROVANTWERPEN2').style.fill='red';</script>";}
        if($_tPROVANTWERPEN>=$_transacties4){$_kaartTransacties.="<script>document.getElementById('tPROVANTWERPEN').style.fill='firebrick';document.getElementById('tPROVANTWERPEN2').style.fill='firebrick';</script>";}
        if($_tPROVANTWERPEN<=$_transacties1){$_kaartTransacties.="<script>document.getElementById('tPROVANTWERPEN').style.fill='pink';document.getElementById('tPROVANTWERPEN2').style.fill='pink';</script>";}

        if($_tPROVBRUSSEL==0){$_kaartTransacties.="<script>document.getElementById('tPROVBRUSSEL').style.fill='#C8C8C8';</script>";}
        if($_tPROVBRUSSEL>=$_transacties1 && $_tPROVBRUSSEL<$_transacties2){$_kaartTransacties.="<script>document.getElementById('tPROVBRUSSEL').style.fill='lightcoral';</script>";}
        if($_tPROVBRUSSEL>=$_transacties2 && $_tPROVBRUSSEL<$_transacties3){$_kaartTransacties.="<script>document.getElementById('tPROVBRUSSEL').style.fill='orangered';</script>";}
        if($_tPROVBRUSSEL>=$_transacties3 && $_tPROVBRUSSEL<$_transacties4){$_kaartTransacties.="<script>document.getElementById('tPROVBRUSSEL').style.fill='red';</script>";}
        if($_tPROVBRUSSEL>=$_transacties4){$_kaartTransacties.="<script>document.getElementById('tPROVBRUSSEL').style.fill='firebrick';</script>";}
        if($_tPROVBRUSSEL<=$_transacties0 ){$_kaartTransacties.="<script>document.getElementById('tPROVBRUSSEL').style.fill='pink';document.getElementById('tPROVBRUSSEL2').style.fill='pink';</script>";}

        if($_tPROVHAINAUT==0){$_kaartTransacties.="<script>document.getElementById('tPROVHAINAUT').style.fill='#C8C8C8';document.getElementById('tPROVHAINAUT2').style.fill='#C8C8C8';</script>";}
        if($_tPROVHAINAUT>=$_transacties1 && $_tPROVHAINAUT<$_transacties2){$_kaartTransacties.="<script>document.getElementById('tPROVHAINAUT').style.fill='lightcoral';document.getElementById('tPROVHAINAUT2').style.fill='lightcoral';</script>";}
        if($_tPROVHAINAUT>=$_transacties2 && $_tPROVHAINAUT<$_transacties3){$_kaartTransacties.="<script>document.getElementById('tPROVHAINAUT').style.fill='orangered';document.getElementById('tPROVHAINAUT2').style.fill='orangered';</script>";}
        if($_tPROVHAINAUT>=$_transacties3 && $_tPROVHAINAUT<$_transacties4){$_kaartTransacties.="<script>document.getElementById('tPROVHAINAUT').style.fill='red';document.getElementById('tPROVHAINAUT2').style.fill='red';</script>";}
        if($_tPROVHAINAUT>=$_transacties4){$_kaartTransacties.="<script>document.getElementById('tPROVHAINAUT').style.fill='firebrick';document.getElementById('tPROVHAINAUT2').style.fill='firebrick';</script>";}
        if($_tPROVHAINAUT<=$_transacties1){$_kaartTransacties.="<script>document.getElementById('tPROVHAINAUT').style.fill='pink';document.getElementById('tPROVHAINAUT2').style.fill='pink';</script>";}

        if($_tPROVLIMBURG==0){$_kaartTransacties.="<script>document.getElementById('tPROVLIMBURG').style.fill='#C8C8C8';document.getElementById('tPROVLIMBURG2').style.fill='#C8C8C8';</script>";}
        if($_tPROVLIMBURG>=$_transacties1 && $_tPROVLIMBURG<$_transacties2){$_kaartTransacties.="<script>document.getElementById('tPROVLIMBURG').style.fill='lightcoral';document.getElementById('tPROVLIMBURG2').style.fill='lightcoral';</script>";}
        if($_tPROVLIMBURG>=$_transacties2 && $_tPROVLIMBURG<$_transacties3){$_kaartTransacties.="<script>document.getElementById('tPROVLIMBURG').style.fill='orangered';document.getElementById('tPROVLIMBURG2').style.fill='orangered';</script>";}
        if($_tPROVLIMBURG>=$_transacties3 && $_tPROVLIMBURG<$_transacties4){$_kaartTransacties.="<script>document.getElementById('tPROVLIMBURG').style.fill='red';document.getElementById('tPROVLIMBURG2').style.fill='red';</script>";}
        if($_tPROVLIMBURG>=$_transacties4){$_kaartTransacties.="<script>document.getElementById('tPROVLIMBURG').style.fill='firebrick';document.getElementById('tPROVLIMBURG2').style.fill='firebrick';</script>";}
        if($_tPROVLIMBURG<=$_transacties1){$_kaartTransacties.="<script>document.getElementById('tPROVLIMBURG').style.fill='pink';document.getElementById('tPROVLIMBURG2').style.fill='pink';</script>";}

        if($_tPROVLIEGE==0){$_kaartTransacties.="<script>document.getElementById('tPROVLIEGE').style.fill='#C8C8C8';</script>";}
        if($_tPROVLIEGE>=$_transacties1 && $_tPROVLIEGE<$_transacties2){$_kaartTransacties.="<script>document.getElementById('tPROVLIEGE').style.fill='lightcoral';</script>";}
        if($_tPROVLIEGE>=$_transacties2 && $_tPROVLIEGE<$_transacties3){$_kaartTransacties.="<script>document.getElementById('tPROVLIEGE').style.fill='orangered';</script>";}
        if($_tPROVLIEGE>=$_transacties3 && $_tPROVLIEGE<$_transacties4){$_kaartTransacties.="<script>document.getElementById('tPROVLIEGE').style.fill='red';</script>";}
        if($_tPROVLIEGE>=$_transacties4){$_kaartTransacties.="<script>document.getElementById('tPROVLIEGE').style.fill='firebrick';</script>";}
        if($_tPROVLIEGE<=$_transacties1){$_kaartTransacties.="<script>document.getElementById('tPROVLIEGE').style.fill='pink';document.getElementById('tPROVWLIEGE2').style.fill='pink';</script>";}

        if($_tPROVLUXEMBOURG==0){$_kaartTransacties.="<script>document.getElementById('tPROVLUXEMBOURG').style.fill='#C8C8C8';</script>";}
        if($_tPROVLUXEMBOURG>=$_transacties1 && $_tPROVLUXEMBOURG<$_transacties2){$_kaartTransacties.="<script>document.getElementById('tPROVLUXEMBOURG').style.fill='lightcoral';</script>";}
        if($_tPROVLUXEMBOURG>=$_transacties2 && $_tPROVLUXEMBOURG<$_transacties3){$_kaartTransacties.="<script>document.getElementById('tPROVLUXEMBOURG').style.fill='orangered';</script>";}
        if($_tPROVLUXEMBOURG>=$_transacties3 && $_tPROVLUXEMBOURG<$_transacties4){$_kaartTransacties.="<script>document.getElementById('tPROVLUXEMBOURG').style.fill='red';</script>";}
        if($_tPROVLUXEMBOURG>=$_transacties4){$_kaartTransacties.="<script>document.getElementById('tPROVLUXEMBOURG').style.fill='firebrick';</script>";}
        if($_tPROVLUXEMBOURG<=$_transacties1){$_kaartTransacties.="<script>document.getElementById('tPROVLUXEMBOURG').style.fill='pink';>document.getElementById('tPROVLUXEMBOURG2').style.fill='pink';</script>";}

        if($_tPROVNAMUR==0){$_kaartTransacties.="<script>document.getElementById('tPROVNAMUR').style.fill='#C8C8C8';</script>";}
        if($_tPROVNAMUR>=$_transacties1 && $_tPROVNAMUR<$_transacties2){$_kaartTransacties.="<script>document.getElementById('tPROVNAMUR').style.fill='lightcoral';</script>";}
        if($_tPROVNAMUR>=$_transacties2 && $_tPROVNAMUR<$_transacties3){$_kaartTransacties.="<script>document.getElementById('tPROVNAMUR').style.fill='orangered';</script>";}
        if($_tPROVNAMUR>=$_transacties3 && $_tPROVNAMUR<$_transacties4){$_kaartTransacties.="<script>document.getElementById('tPROVNAMUR').style.fill='red';</script>";}
        if($_tPROVNAMUR>=$_transacties4){$_kaartTransacties.="<script>document.getElementById('tPROVNAMUR').style.fill='firebrick';</script>";}
        if($_tPROVNAMUR<=$_transacties1){$_kaartTransacties.="<script>document.getElementById('tPROVNAMUR').style.fill='pink';>document.getElementById('tPROVNAMUR2').style.fill='pink'</script>";}

        if($_tPROVOOSTVLAANDEREN==0){$_kaartTransacties.="<script>document.getElementById('tPROVOOSTVLAANDEREN').style.fill='#C8C8C8';</script>";}
        if($_tPROVOOSTVLAANDEREN>=$_transacties1 && $_tPROVOOSTVLAANDEREN<$_transacties2){$_kaartTransacties.="<script>document.getElementById('tPROVOOSTVLAANDEREN').style.fill='lightcoral';</script>";}
        if($_tPROVOOSTVLAANDEREN>=$_transacties2 && $_tPROVOOSTVLAANDEREN<$_transacties3){$_kaartTransacties.="<script>document.getElementById('tPROVOOSTVLAANDEREN').style.fill='orangered';</script>";}
        if($_tPROVOOSTVLAANDEREN>=$_transacties3 && $_tPROVOOSTVLAANDEREN<$_transacties4){$_kaartTransacties.="<script>document.getElementById('tPROVOOSTVLAANDEREN').style.fill='red';</script>";}
        if($_tPROVOOSTVLAANDEREN>=$_transacties4){$_kaartTransacties.="<script>document.getElementById('tPROVOOSTVLAANDEREN').style.fill='firebrick';</script>";}
        if($_tPROVOOSTVLAANDEREN<=$_transacties1){$_kaartTransacties.="<script>document.getElementById('tPROVOOSTVLAANDEREN').style.fill='pink';>document.getElementById('tPROVOOSTVLAANDEREN2').style.fill='pink'</script>";}

        if($_tPROVVLAAMSBRABANT==0){$_kaartTransacties.="<script>document.getElementById('tPROVVLAAMSBRABANT').style.fill='#C8C8C8';</script>";}
        if($_tPROVVLAAMSBRABANT>=$_transacties1 && $_tPROVVLAAMSBRABANT<$_transacties2){$_kaartTransacties.="<script>document.getElementById('tPROVVLAAMSBRABANT').style.fill='lightcoral';</script>";}
        if($_tPROVVLAAMSBRABANT>=$_transacties2 && $_tPROVVLAAMSBRABANT<$_transacties3){$_kaartTransacties.="<script>document.getElementById('tPROVVLAAMSBRABANT').style.fill='orangered';</script>";}
        if($_tPROVVLAAMSBRABANT>=$_transacties3 && $_tPROVVLAAMSBRABANT<$_transacties4){$_kaartTransacties.="<script>document.getElementById('tPROVVLAAMSBRABANT').style.fill='red';</script>";}
        if($_tPROVVLAAMSBRABANT>=$_transacties4){$_kaartTransacties.="<script>document.getElementById('tPROVVLAAMSBRABANT').style.fill='firebrick';</script>";}
        if($_tPROVVLAAMSBRABANT>=$_transacties1){$_kaartTransacties.="<script>document.getElementById('tPROVVLAAMSBRABANT').style.fill='pink';>document.getElementById('tPROVVLAAMSBRABANT2').style.fill='pink'</script>";}

        if($_tPROVBRABANTWALLON==0){$_kaartTransacties.="<script>document.getElementById('tPROVBRABANTWALLON').style.fill='#C8C8C8';</script>";}
        if($_tPROVBRABANTWALLON>=$_transacties1 && $_tPROVBRABANTWALLON<$_transacties2){$_kaartTransacties.="<script>document.getElementById('tPROVBRABANTWALLON').style.fill='lightcoral';</script>";}
        if($_tPROVBRABANTWALLON>=$_transacties2 && $_tPROVBRABANTWALLON<$_transacties3){$_kaartTransacties.="<script>document.getElementById('tPROVBRABANTWALLON').style.fill='orangered';</script>";}
        if($_tPROVBRABANTWALLON>=$_transacties3 && $_tPROVBRABANTWALLON<$_transacties4){$_kaartTransacties.="<script>document.getElementById('tPROVBRABANTWALLON').style.fill='red';</script>";}
        if($_tPROVBRABANTWALLON>=$_transacties4){$_kaartTransacties.="<script>document.getElementById('tPROVBRABANTWALLON').style.fill='firebrick';</script>";}
        if($_tPROVBRABANTWALLON<=$_transacties1){$_kaartTransacties.="<script>document.getElementById('tPROVBRABANTWALLON').style.fill='pink';>document.getElementById('tPROVBRABANTWALLON2').style.fill='pink'</script>";}

        if($_tPROVWESTVLAANDEREN==0){$_kaartTransacties.="<script>document.getElementById('tPROVWESTVLAANDEREN').style.fill='#C8C8C8';</script>";}
        if($_tPROVWESTVLAANDEREN>=$_transacties1 && $_tPROVWESTVLAANDEREN<$_transacties2){$_kaartTransacties.="<script>document.getElementById('tPROVWESTVLAANDEREN').style.fill='lightcoral';</script>";}
        if($_tPROVWESTVLAANDEREN>=$_transacties2 && $_tPROVWESTVLAANDEREN<$_transacties3){$_kaartTransacties.="<script>document.getElementById('tPROVWESTVLAANDEREN').style.fill='orangered';</script>";}
        if($_tPROVWESTVLAANDEREN>=$_transacties3 && $_tPROVWESTVLAANDEREN<$_transacties4){$_kaartTransacties.="<script>document.getElementById('tPROVWESTVLAANDEREN').style.fill='red';</script>";}
        if($_tPROVWESTVLAANDEREN>=$_transacties4){$_kaartTransacties.="<script>document.getElementById('tPROVWESTVLAANDEREN').style.fill='firebrick';</script>";}
        if($_tPROVWESTVLAANDEREN<=$_transacties1){$_kaartTransacties.="<script>document.getElementById('tPROVWESTVLAANDEREN').style.fill='pink';>document.getElementById('tPROVWESTVLAANDEREN2').style.fill='pink';</script>";}

        }     
    } 
    
    require("../code/#infoKaartTransacties.inc.php");

    $_sterksteStijger = "";
    $_DESCASC='v1j DESC';
    $_classPijlen='cijfer1';
    $_selectie='v1j';
    $_resultaat='sterkste stijger';
    $_symbool='%';
    require("../code/codePijlenV.inc.php");
    if($_waarde<0){
        $_sterksteStijger.="<br><br><p class='tekstPijlen'>In België zijn er geen stijgers</p>";
     }
     else{
    $_sterksteStijger.="<p>$_provincie</p>";
     }

    $_sterksteDaler = "";
    $_DESCASC='v1j ASC';
    $_classPijlen='cijfer2';
    $_selectie='v1j';
    $_resultaat='sterkste daler';
    $_symbool='%';
    require("../code/codePijlenV.inc.php");
    if($_waarde>0){
        $_sterksteDaler.="<br><br><p class='tekstPijlen'>In België zijn er geen dalers</p>";
     }
     else{
    $_sterksteDaler.="<p>$_provincie</p>";
     }

    $_duursteGemeente = "";
    $_DESCASC='duursteGoedkoopste DESC';
    $_classPijlen='cijfer1';    
    $_selectie='duursteGoedkoopste';
    $_resultaat='duurste provincie';
    $_symbool='€';
    require("../code/codePijlenV.inc.php");
    $_duursteGemeente.="<p>$_provincie</p>";

    $_goedkoopsteGemeente = "";
    $_DESCASC='duursteGoedkoopste ASC';
    $_classPijlen='cijfer2';
    $_selectie='duursteGoedkoopste';
    $_resultaat='goedkoopste provincie';
    $_symbool='€';
    require("../code/codePijlenV.inc.php");
    $_goedkoopsteGemeente.="<p>$_provincie</p>";

    $_titel="d_titel_NL";
    $_inleiding="d_inleiding_NL";
    $_text="d_tekst_NL";
    $_kader="d_kaderstuk_NL";
    $_q1="d_quote1_NL";
    $_q2="d_quote2_NL";
    $_sql = "SELECT * FROM `t_artikels` WHERE `d_indexProvincies`=12 AND d_indexArtikels=12";

    $result = $_conn->query($_sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) { 
            $_artikel="$row[$_titel]";
            $_artikel.="$row[$_inleiding]";
            $_artikel.="$row[$_text]";
            $_kaderstuk="$row[$_kader]";
            $_quote1="$row[$_q1]";
            $_quote2="$row[$_q2]";
        }
    }

    //XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX SELECTIE TABEL NATIONAAL XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
    $_tabelPrijzen="";
    $_tabelPrijzen.="
    <table class='provincieTabel'>
    <tr><th class='first'>&nbsp;Gemeente</th><th class=tabelKopjes  style='text-align:center'>Aantal transacties</th><th class=tabelKopjes style='text-align:center';>Gemiddelde prijs (in €)</th><th class=tabelKopjes style='text-align:center'>% op 1 jaar</th><th class=tabelKopjes style='text-align:center'>% op 10 jaar</th></tr>";

    $_tabelPrijzen.="<tr class='provincieRij'><td class='first'>&nbsp;België</td>";
   
       //Aantal bekende transacties in België
       $_sql = "SELECT SUM($_transacties2020) AS sumTransacties 
       FROM t_prijzen2020 ";
      
       $_result = $_conn->query($_sql);
       if ($_result->num_rows > 0) {
           while($row = $_result->fetch_assoc()) {  
               $_tabelPrijzen.= "<td>".number_format($row['sumTransacties'], 0, ',','.')."</td>";  
               $_cijfer= "<p class=cijferV>".number_format($row['sumTransacties'], 0, ',','.')."</p><p class=cijferTekst>In Belgiê zijn er ".number_format($row['sumTransacties'], 0, ',','.')." villa's verkocht.</p>";  
           }
       }
         //Gemiddelde prijs in belgie
    $_sql = "SELECT ROUND(AVG($_prijzen2020),0) AS avgPrijzen 
    FROM t_prijzen2020 
    WHERE $_prijzen2020!='0'"; 
    $_result = $_conn->query($_sql);  
    if ($_result->num_rows > 0) {
        while($row = $_result->fetch_assoc()) {  
            $_tabelPrijzen.="<td>".number_format($row["avgPrijzen"], 0, '.','.')."€</td>";
        }
    }

    //% 1 jaar in België
    $_sql =   "SELECT ROUND((((AVG($_prijzen2020)-AVG($_prijzen2019))/AVG($_prijzen2019))*100),2) AS avgProvincie1j 
    FROM t_prijzen2020 
    INNER JOIN t_prijzen2019 
    ON t_prijzen2020.d_2020=t_prijzen2019.d_2019 
    WHERE $_prijzen2020!='0'";
    $_result = $_conn->query($_sql);
    if ($_result->num_rows > 0) {
        while($row = $_result->fetch_assoc()) {  
            $_styleColor = $row["avgProvincie1j"] < 0 ? 'color:red' : 'color:#FFFFFF'; 
            $_tabelPrijzen.="<td  style=$_styleColor>".number_format($row["avgProvincie1j"], 2, ',',',')."%</td>";
        }
    }
    
     //% 10 jaar in België
     $_sql =   "SELECT ROUND((((AVG($_prijzen2020)-AVG($_prijzen2011))/AVG($_prijzen2011))*100),2) AS avgProvincie10j 
     FROM t_prijzen2020 
     INNER JOIN t_prijzen2011 
     ON t_prijzen2020.d_2020=t_prijzen2011.d_2011 
     WHERE $_prijzen2020!='0'";
     $_result = $_conn->query($_sql);
     if ($_result->num_rows > 0) {
         while($row = $_result->fetch_assoc()) {  
             $_styleColor = $row["avgProvincie1j"] < 0 ? 'color:red' : 'color:#FFFFFF'; 
             $_tabelPrijzen.="<td  style=$_styleColor>".number_format($row["avgProvincie10j"], 2, ',',',')."%</td></tr>";
         }
     }


//Vlaanderen
$_tabelPrijzen.="<tr class='arrondissementRij'><td class='first'>&nbsp;Vlaams gewest</td>";

//Antwerpen
$_provincieSelectie='1';
$_provincieNaam='antwerpen';
require("../code/codeTabelNationaal.inc.php");
//Limburg
$_provincieSelectie='4';
$_provincieNaam='limburg';
require("../code/codeTabelNationaal.inc.php");
//Oost-Vlanderen
$_provincieSelectie='8';
$_provincieNaam='oostvlaanderen';
require("../code/codeTabelNationaal.inc.php");
//Vlaams-Brabant
$_provincieSelectie='9';
$_provincieNaam='vlaamsbrabant';
require("../code/codeTabelNationaal.inc.php");
//West-Vlaanderen
$_provincieSelectie='11';
$_provincieNaam='westvlaanderen';
require("../code/codeTabelNationaal.inc.php");


      $_sum=number_format(($_tantwerpen+$_tlimburg+$_toostvlaanderen+$_tvlaamsbrabant+$_twestvlaanderen), 0, ',','.');
      $_tabelPrijzen.="<td>$_sum</td>";
      $_pSum=number_format((($_pantwerpen+$_plimburg+$_poostvlaanderen+$_pvlaamsbrabant+$_pwestvlaanderen)/5), 0, ',','.');
      $_tabelPrijzen.="<td>".$_pSum."€</td>";
      $_aSum=number_format((($_aantwerpen+$_alimburg+$_aoostvlaanderen+$_avlaamsbrabant+$_awestvlaanderen)/5), 2, ',','.');
      $_tabelPrijzen.="<td>".$_aSum."%</td>";
      $_bSum=number_format((($_bantwerpen+$_blimburg+$_boostvlaanderen+$_bvlaamsbrabant+$_bwestvlaanderen)/5), 2, ',','.');
      $_tabelPrijzen.="<td>".$_bSum."%</td></tr>";

      $_tabelPrijzen.= "<tr><td class='first'>&nbsp;Provincie Antwerpen</td><td>".number_format(($_tantwerpen), 0, ',','.')."</td><td>".number_format(($_pantwerpen), 0, '.','.')."€</td><td  style='$_styleColor1'>".number_format(($_aantwerpen), 2, ',','.')."%</td><td  style='$_styleColor2'>".number_format(($_bantwerpen), 2, ',','.')."%</td></tr>";   
      $_tabelPrijzen.= "<tr><td class='first'>&nbsp;Provincie Limburg</td><td>".number_format(($_tlimburg), 0, ',','.')."</td><td>".number_format(($_plimburg), 0, '.','.')."€</td><td  style='$_styleColor1'>".number_format(($_alimburg), 2, ',','.')."%</td><td  style='$_styleColor2'>".number_format(($_blimburg), 2, ',','.')."%</td></tr>";   
      $_tabelPrijzen.= "<tr><td class='first'>&nbsp;Provincie Oost-Vlaanderen</td><td>".number_format(($_toostvlaanderen), 0, ',','.')."</td><td>".number_format(($_poostvlaanderen), 0, '.','.')."€</td><td  style='$_styleColor1'>".number_format(($_aoostvlaanderen), 2, ',','.')."%</td><td  style='$_styleColor2'>".number_format(($_boostvlaanderen), 2, ',','.')."%</td></tr>";   
      $_tabelPrijzen.= "<tr><td class='first'>&nbsp;Provincie Vlaams-Brabant</td><td>".number_format(($_tvlaamsbrabant), 0, ',','.')."</td><td>".number_format(($_pvlaamsbrabant), 0, '.','.')."€</td><td  style='$_styleColor1'>".number_format(($_avlaamsbrabant), 2, ',','.')."%</td><td  style='$_styleColor2'>".number_format(($_bvlaamsbrabant), 2, ',','.')."%</td></tr>";   
      $_tabelPrijzen.= "<tr><td class='first'>&nbsp;Provincie West-Vlaanderen</td><td>".number_format(($_twestvlaanderen), 0, ',','.')."</td><td>".number_format(($_pwestvlaanderen), 0, '.','.')."€</td><td  style='$_styleColor1'>".number_format(($_awestvlaanderen), 2, ',','.')."%</td><td  style='$_styleColor2'>".number_format(($_bwestvlaanderen), 2, ',','.')."%</td></tr>";   

//Wallonië
$_tabelPrijzen.="<tr class='arrondissementRij'><td class='first'>&nbsp;Waals gewest</td>";

//Henegouwen
$_provincieSelectie='3';
$_provincieNaam='hainaut';
require("../code/codeTabelNationaal.inc.php");
//Limburg
$_provincieSelectie='5';
$_provincieNaam='liege';
require("../code/codeTabelNationaal.inc.php");
//Oost-Vlanderen
$_provincieSelectie='6';
$_provincieNaam='luxembourg';
require("../code/codeTabelNationaal.inc.php");
//Vlaams-Brabant
$_provincieSelectie='7';
$_provincieNaam='namur';
require("../code/codeTabelNationaal.inc.php");
//West-Vlaanderen
$_provincieSelectie='10';
$_provincieNaam='brabantwallon';
require("../code/codeTabelNationaal.inc.php");

$_sum=number_format(($_thainaut+$_tliege+$_tluxembourg+$_tnamur+$_tbrabantwallon), 0, ',','.');
$_tabelPrijzen.="<td>$_sum</td>";
$_pSum=number_format((($_phainaut+$_pliege+$_pluxembourg+$_pnamur+$_pbrabantwallon)/5), 0, ',','.');
$_tabelPrijzen.="<td>".$_pSum."€</td>";
$_aSum=number_format((($_ahainaut+$_aliege+$_aluxembourg+$_anamur+$_abrabantwallon)/5), 2, ',','.');
$_tabelPrijzen.="<td>".$_aSum."%</td>";
$_bSum=number_format((($_bhainaut+$_bliege+$_bluxembourg+$_bnamur+$_bbrabantwallon)/5), 2, ',','.');
$_tabelPrijzen.="<td>".$_bSum."%</td>";

$_tabelPrijzen.= "<tr><td class='first'>&nbsp;Provincie Henegouwen</td><td>".number_format(($_thainaut), 0, ',','.')."</td><td>".number_format(($_phainaut), 0, '.','.')."€</td><td  style='$_styleColor1'>".number_format(($_ahainaut), 2, ',','.')."%</td><td  style='$_styleColor2'>".number_format(($_bhainaut), 2, ',','.')."%</td></tr>";   
$_tabelPrijzen.= "<tr><td class='first'>&nbsp;Provincie Luik</td><td>".number_format(($_tliege), 0, ',','.')."</td><td>".number_format(($_pliege), 0, '.','.')."€</td><td  style='$_styleColor1'>".number_format(($_aliege), 2, ',','.')."%</td><td  style='$_styleColor2'>".number_format(($_bliege), 2, ',','.')."%</td></tr>";   
$_tabelPrijzen.= "<tr><td class='first'>&nbsp;Provincie Luxemburg</td><td>".number_format(($_tluxembourg), 0, ',','.')."</td><td>".number_format(($_pluxembourg), 0, '.','.')."€</td><td  style='$_styleColor1'>".number_format(($_aluxembourg), 2, ',','.')."%</td><td  style='$_styleColor2'>".number_format(($_bluxembourg), 2, ',','.')."%</td></tr>";   
$_tabelPrijzen.= "<tr><td class='first'>&nbsp;Provincie Namen</td><td>".number_format(($_tnamur), 0, ',','.')."</td><td>".number_format(($_pnamur), 0, '.','.')."€</td><td  style='$_styleColor1'>".number_format(($_anamur), 2, ',','.')."%</td><td  style='$_styleColor2'>".number_format(($_bnamur), 2, ',','.')."%</td></tr>";   
$_tabelPrijzen.= "<tr><td class='first'>&nbsp;Provincie Waals-Brabant</td><td>".number_format(($_tbrabantwallon), 0, ',','.')."</td><td>".number_format(($_pbrabantwallon), 0, '.','.')."€</td><td  style='$_styleColor1'>".number_format(($_abrabantwallon), 2, ',','.')."%</td><td  style='$_styleColor2'>".number_format(($_bbrabantwallon), 2, ',','.')."%</td></tr>";   

//Brussel
$_provincieSelectie='2';
$_provincieNaam='brussel';
require("../code/codeTabelNationaal.inc.php");

$_tabelPrijzen.="<tr class='arrondissementRij'><td class='first'>&nbsp;Brussels Hoofdstedelijk Gewest</td>";
$_sum=number_format(($_tbrussel), 0, ',','.');
$_tabelPrijzen.="<td>$_sum</td>";
$_pSum=number_format(($_pbrussel), 0, ',','.');
$_tabelPrijzen.="<td>".$_pSum."€</td>";
$_aSum=number_format(($_abrussel), 2, ',','.');
$_tabelPrijzen.="<td>".$_aSum."%</td>";
$_bSum=number_format(($_bbrussel), 2, ',','.');
$_tabelPrijzen.="<td>".$_bSum."%</td></tr>";


       $_tabelPrijzen.= "</tr></table>";

  
/*XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

Smarty

XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX*/


    require("../smarty/mySmarty.inc.php");
    $_smarty->assign('titelKaartPrijzen', $_titelKaartPrijzen);
    $_smarty->assign('titelKaartTransacties', $_titelKaartTransacties);
    $_smarty->assign('kaartPrijzen', $_kaartPrijzen);
    $_smarty->assign('kaartTransacties', $_kaartTransacties);
    $_smarty->assign('tabelPrijzen', $_tabelPrijzen);
    $_smarty->assign('artikel', $_artikel);
    $_smarty->assign('kaderstuk', $_kaderstuk);
    $_smarty->assign('quote1', $_quote1);
    $_smarty->assign('quote2', $_quote2);
    $_smarty->assign('sterksteStijger', $_sterksteStijger);
    $_smarty->assign('sterksteDaler', $_sterksteDaler);
    $_smarty->assign('duursteGemeente', $_duursteGemeente);
    $_smarty->assign('goedkoopsteGemeente', $_goedkoopsteGemeente);
    $_smarty->assign('cijfer', $_cijfer);
    $_smarty->display('BVP_nationaalV.tpl');
}

catch (Exception $_exception) //********** exception handling
{
    include("../php_lib/myExceptionHandling.inc.php"); 
}
 
?>