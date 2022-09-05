<?php
try
{
    //********** Initialisatie
	$_srv = $_SERVER['PHP_SELF'];
  include("../php_lib/inlezen.inc.php"); 
  require_once("../Connections/pdo.inc.php");

    //variabelen voor aansturing data provincies
    $_provincieSelectie=4;
    $_arrondissementSelectie=12;
    $_arrondissementLimiet=14;
    $_provincie = 'svgLimburg';
    $_x='50%';
    $_y='50%';
    $_viewbox='-25 -30 580 460';
    $_provincieNaam="Limburg";

    //variabelen voor de tabellen
    $_transacties2020="d_transactiesH2020";
    $_prijzen2020="d_prijzenH2020";
    $_prijzen2019="d_prijzenH2019";
    $_prijzen2011="d_prijzenH2011";

    $_provincie_taal="d_provincie_NL";
    $_arrondissement_taal="d_arrondissementen_NL";
    $_gemeente_taal="d_gemeente_NL";
   
    $_titelKaartPrijzen="<p class='titKaart'>Provincie Limburg:<br>gemiddelde prijs per gemeente</p>";
    $_titelKaartTransacties="<p class='titKaart'>Provincie Limburg:<br>aantal transacties per gemeente</p>";

    //require("../code/provincieVariabelenH.inc.php");
    require("../code/kaartPrijzenH.inc.php");
    require("../code/kaartTransactiesH.inc.php");
    require("../code/tabellenH.inc.php");
    require("../code/artikelH.inc.php");

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
    $_smarty->display('BVP_provinciesH.tpl');

}

 catch (Exception $_exception) //********** exception handling
 {
         include("../php_lib/myExceptionHandling.inc.php"); 
 }

 ?>