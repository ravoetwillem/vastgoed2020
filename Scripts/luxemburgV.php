<?php
try
{
    //********** Initialisatie
	$_srv = $_SERVER['PHP_SELF'];
  include("../php_lib/inlezen.inc.php"); 
  require_once("../Connections/pdo.inc.php");

    //variabelen voor aansturing data provincies
    $_provincieSelectie=6;
    $_arrondissementSelectie=19;
    $_arrondissementLimiet=23;
    $_provincie = 'svgLuxemburg';
    $_x='50%';
    $_y='50%';
    $_viewbox='-47 -20 450 490';
    $_provincieNaam='Luxemburg';

    //variabelen voor de tabellen
    $_transacties2020="d_transactiesV2020";
    $_prijzen2020="d_prijzenV2020";
    $_prijzen2019="d_prijzenV2019";
    $_prijzen2011="d_prijzenV2011";

    $_provincie_taal="d_provincie_NL";
    $_arrondissement_taal="d_arrondissementen_NL";
    $_gemeente_taal="d_gemeente_NL";
   
    $_titelKaartPrijzen="<p class='titKaart'>Provincie Luxemburg:<br>gemiddelde prijs per gemeente</p>";
    $_titelKaartTransacties="<p class='titKaart'>Provincie Luxemburg:<br>aantal transacties per gemeente</p>";

    //require("../code/provincieVariabelenV.inc.php");
    require("../code/kaartPrijzenV.inc.php");
    require("../code/kaartTransactiesV.inc.php");
    require("../code/tabellenV.inc.php");
    require("../code/artikelV.inc.php");

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
    $_smarty->display('BVP_provinciesV.tpl');

}

 catch (Exception $_exception) //********** exception handling
 {
         include("../php_lib/myExceptionHandling.inc.php"); 
 }

 ?>