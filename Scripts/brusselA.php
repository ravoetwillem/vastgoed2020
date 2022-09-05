<?php
try
{
    //********** Initialisatie
	$_srv = $_SERVER['PHP_SELF'];
  include("../php_lib/inlezen.inc.php"); 
  require_once("../Connections/pdo.inc.php");

    //variabelen voor aansturing data provincies
    $_provincieSelectie=2;
    $_arrondissementSelectie=4;
    $_arrondissementLimiet=4;
    $_provincie = 'svgBrussel';
    $_x='50%';
    $_y='50%';
    $_viewbox='-55 -35 450 370'; 
    $_provincieNaam="Brussels Hoofdstedelijk Gewest";

    //variabelen voor de tabellen
    $_transacties2020="d_transactiesA2020";
    $_prijzen2020="d_prijzenA2020";
    $_prijzen2019="d_prijzenA2019";
    $_prijzen2011="d_prijzenA2011";

    $_provincie_taal="d_provincie_NL";
    $_arrondissement_taal="d_arrondissementen_NL";
    $_gemeente_taal="d_gemeente_NL";

    $_titelKaartPrijzen="<p class='titKaart'>Brussels Hoofdstedelijk Gewest:<br>gemiddelde prijs per gemeente</p>";
    $_titelKaartTransacties="<p class='titKaart'>Brussels Hoofdstedelijk Gewest:<br>aantal transacties per gemeente</p>";

    require("../code/kaartPrijzenA.inc.php");
    require("../code/kaartTransactiesA.inc.php");
    require("../code/tabellenA.inc.php");
    require("../code/artikelA.inc.php");

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
    $_smarty->display('BVP_provinciesA.tpl');
  

}

 catch (Exception $_exception) //********** exception handling
 {
         include("../php_lib/myExceptionHandling.inc.php"); 
 }

 ?>