<?php
/* Smarty version 3.1.31, created on 2022-08-20 05:52:51
  from "/Users/willemravoet/BESTANDEN/MAMP/Project/smarty/templates/BVP_nationaalV.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_630076b398a304_18183536',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cb9f07b782e73a123bb32766159e48d58cde5fb' => 
    array (
      0 => '/Users/willemravoet/BESTANDEN/MAMP/Project/smarty/templates/BVP_nationaalV.tpl',
      1 => 1660974555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_630076b398a304_18183536 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="nl">

<head>
        <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <link href="../css/bootstrap-grid.css" rel="stylesheet" type="text/css">
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="../css/stijlblad.css" rel="stylesheet" type="text/css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://use.typekit.net/rzm1xcy.css">
    
        <title>VILLA'S</title>
    </head>
    
    <body>
        <div class="container-fluid ">
            
                <div class="container-fluid order-1 row no-gutters  header">
                    <div id="header" class="col-sm-12 "><h1 class="titHeader">De Belgische <span class="bold t1span">Vastgoedprijzen <span class="boldRed">2020</span></span></h1></div>
                </div>

                <div class="row no-gutters navbarSafari">                  
                   <nav class="navbar navbar-expand-lg navbar-dark bg-dark nav">
                        <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Villa's
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="../scripts/nationaalV.php">Nationaal</a></li>
                                            <li><a class="dropdown-item" href="../scripts/antwerpenV.php">Antwerpen</a></li>
                                            <li><a class="dropdown-item" href="../scripts/brusselV.php">Brussel</a></li>
                                            <li><a class="dropdown-item" href="../scripts/henegouwenV.php">Henegouwen</a></li>
                                            <li><a class="dropdown-item" href="../scripts/limburgV.php">Limburg</a></li>
                                            <li><a class="dropdown-item" href="../scripts/luikV.php">Luik</a></li>
                                            <li><a class="dropdown-item" href="../scripts/luxemburgV.php">Luxemburg</a></li>
                                            <li><a class="dropdown-item" href="../scripts/namenV.php">Namen</a></li>
                                            <li><a class="dropdown-item" href="../scripts/oostVlaanderenV.php">Oost-Vlaanderen</a></li>
                                            <li><a class="dropdown-item" href="../scripts/vlaamsBrabantV.php">Vlaams-Brabant</a></li>
                                            <li><a class="dropdown-item" href="../scripts/waalsBrabantV.php">Waals-Brabant</a></li>
                                            <li><a class="dropdown-item" href="../scripts/westVlaanderenV.php">West-Vlaanderen</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle inactive" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Huizen
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="../scripts/nationaalH.php">Nationaal</a></li>
                                            <li><a class="dropdown-item" href="../scripts/antwerpenH.php">Antwerpen</a></li>
                                            <li><a class="dropdown-item" href="../scripts/brusselH.php">Brussel</a></li>
                                            <li><a class="dropdown-item" href="../scripts/henegouwenH.php">Henegouwen</a></li>
                                            <li><a class="dropdown-item" href="../scripts/limburgH.php">Limburg</a></li>
                                            <li><a class="dropdown-item" href="../scripts/luikH.php">Luik</a></li>
                                            <li><a class="dropdown-item" href="../scripts/luxemburgH.php">Luxemburg</a></li>
                                            <li><a class="dropdown-item" href="../scripts/namenH.php">Namen</a></li>
                                            <li><a class="dropdown-item" href="../scripts/oostVlaanderenH.php">Oost-Vlaanderen</a></li>
                                            <li><a class="dropdown-item" href="../scripts/vlaamsBrabantH.php">Vlaams-Brabant</a></li>
                                            <li><a class="dropdown-item" href="../scripts/waalsBrabantH.php">Waals-Brabant</a></li>
                                            <li><a class="dropdown-item" href="../scripts/westVlaanderenH.php">West-Vlaanderen</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle inactive" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Appartementen
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="../scripts/nationaalA.php">Nationaal</a></li>
                                            <li><a class="dropdown-item" href="../scripts/antwerpenA.php">Antwerpen</a></li>
                                            <li><a class="dropdown-item" href="../scripts/brusselA.php">Brussel</a></li>
                                            <li><a class="dropdown-item" href="../scripts/henegouwenA.php">Henegouwen</a></li>
                                            <li><a class="dropdown-item" href="../scripts/limburgA.php">Limburg</a></li>
                                            <li><a class="dropdown-item" href="../scripts/luikA.php">Luik</a></li>
                                            <li><a class="dropdown-item" href="../scripts/luxemburgA.php">Luxemburg</a></li>
                                            <li><a class="dropdown-item" href="../scripts/namenA.php">Namen</a></li>
                                            <li><a class="dropdown-item" href="../scripts/oostVlaanderenA.php">Oost-Vlaanderen</a></li>
                                            <li><a class="dropdown-item" href="../scripts/vlaamsBrabantA.php">Vlaams-Brabant</a></li>
                                            <li><a class="dropdown-item" href="../scripts/waalsBrabantA.php">Waals-Brabant</a></li>
                                            <li><a class="dropdown-item" href="../scripts/westVlaanderenA.php">West-Vlaanderen</a></li>
                                        </ul>
                                    </li>
                                        <!--<li class="nav-item">
                                            <a class="nav-link inactive" aria-current="page" href="#">Methodologie</a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link active" href="#" tabindex="-1" aria-disabled="true">nl</a>
                                        </li>
                                        <li class="nav-item ml-auto ">
                                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">fr</a>
                                        </li>-->
                                      
                                     
                                     
                                </ul>
                            
                                 
                              
                               <!-- <form class="d-flex">
                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>-->
                            </div>
                        </div>
                    </nav>
                </div>
              
            
            <div class="wrap">
                
            <div class="row no-gutters kaarten kaartenSafari">
                <div class=" col-md-6 kaart container-fluid" id="kaartKP">
                        <?php echo $_smarty_tpl->tpl_vars['titelKaartPrijzen']->value;?>

                        <div id="infoVeld"> </div>
                        <div class="divKaart">
                        <?php echo $_smarty_tpl->tpl_vars['kaartPrijzen']->value;?>

                        <br>
                        <svg version="1.0" id="legendePrijsV" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;"
	                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 579.952 125.364"
	                        enable-background="new 0 0 579.952 125.364" xml:space="preserve">

                            <rect x="5.229" y="28.145" fill="darkgreen" stroke="#FFFFFF" stroke-miterlimit="10" width="31.354" height="13.143"/>
                            <rect x="41.194" y="28.145" fill="forestgreen" stroke="#FFFFFF" stroke-miterlimit="10" width="31.354" height="13.143"/>
                            <rect x="77.158" y="28.145" fill="limegreen" stroke="#FFFFFF" stroke-miterlimit="10" width="31.354" height="13.143"/>
                            <rect x="113.123" y="28.145" fill="greenyellow" stroke="#FFFFFF" stroke-miterlimit="10" width="31.354" height="13.143"/>
                            <rect x="149.087" y="28.145" fill="lightyellow" stroke="#FFFFFF" stroke-miterlimit="10" width="31.354" height="13.143"/>
                            <rect x="185.052" y="28.145" fill="#FFFFBB" stroke="#FFFFFF" stroke-miterlimit="10" width="31.354" height="13.143"/>
                            <rect x="221.017" y="28.145" fill="#FAEE0a" stroke="#FFFFFF" stroke-miterlimit="10" width="31.354" height="13.143"/>
                            <rect x="256.981" y="28.145" fill="gold" stroke="#FFFFFF" stroke-miterlimit="10" width="31.354" height="13.143"/>
                            <rect x="292.946" y="28.145" fill="orange" stroke="#FFFFFF" stroke-miterlimit="10" width="31.354" height="13.143"/>
                            <rect x="328.91" y="28.145" fill="darkorange" stroke="#FFFFFF" stroke-miterlimit="10" width="31.354" height="13.143"/>
                            <rect x="364.875" y="28.145" fill="orangered" stroke="#FFFFFF" stroke-miterlimit="10" width="31.354" height="13.143"/>
                            <rect x="400.839" y="28.145" fill="crimson" stroke="#FFFFFF" stroke-miterlimit="10" width="31.354" height="13.143"/>
                            <rect x="436.804" y="28.145" fill="chocolate" stroke="#FFFFFF" stroke-miterlimit="10" width="31.354" height="13.143"/>
                            <rect x="472.768" y="28.145" fill="sienna" stroke="#FFFFFF" stroke-miterlimit="10" width="31.354" height="13.143"/>
                            <rect x="508.733" y="28.145" fill="maroon" stroke="#FFFFFF" stroke-miterlimit="10" width="31.354" height="13.143"/>
                            <rect x="544.697" y="28.145" fill="#C0C0C0" stroke="#FFFFFF" stroke-miterlimit="10" width="31.354" height="13.143"/>
                            <rect x="15.945" y="46.288" fill="none" width="16.271" height="60.164"/>
                            <text transform="matrix(4.489659e-11 -1 1 4.489659e-11 24.8112 101.7455)" font-family="'RegulatorNova-medium'!important" font-size="14px">&lt; 150.000</text>
                            <rect x="52.001" y="56.288" fill="none" width="16.271" height="60.164"/>
                            <text transform="matrix(4.489659e-11 -1 1 4.489659e-11 60.8665 92.7528)" font-family="'RegulatorNova-medium'!important" font-size="14px"> 150.000</text>
                            <rect x="8.056" y="46.288" fill="none" width="16.271" height="60.164"/>
                            <text transform="matrix(4.489659e-11 -1 1 4.489659e-11 96.9218 94.8954)" font-family="'RegulatorNova-medium'!important" font-size="14px">200.000</text>
                            <rect x="124.111" y="46.288" fill="none" width="16.271" height="60.164"/>
                            <text transform="matrix(4.489659e-11 -1 1 4.489659e-11 132.9772 94.1151)" font-family="'RegulatorNova-medium'!important" font-size="14px">250.000</text>
                            <rect x="160.167" y="46.288" fill="none" width="16.271" height="60.164"/>
                            <text transform="matrix(4.489659e-11 -1 1 4.489659e-11 169.0325 94.5702)" font-family="'RegulatorNova-medium'!important" font-size="14px">300.000</text>
                            <rect x="196.222" y="46.288" fill="none" width="16.271" height="60.164"/>
                            <text transform="matrix(4.489659e-11 -1 1 4.489659e-11 205.0878 93.8158)" font-family="'RegulatorNova-medium'!important" font-size="14px">350.000</text>
                            <rect x="232.277" y="46.288" fill="none" width="16.271" height="60.164"/>
                            <text transform="matrix(4.489659e-11 -1 1 4.489659e-11 241.1432 95.5448)" font-family="'RegulatorNova-medium'!important" font-size="14px">400.000</text>
                            <rect x="268.333" y="46.288" fill="none" width="16.271" height="60.164"/>
                            <text transform="matrix(4.489659e-11 -1 1 4.489659e-11 277.1985 94.7128)" font-family="'RegulatorNova-medium'!important" font-size="14px">450.000</text>
                            <rect x="304.388" y="46.288" fill="none" width="16.271" height="60.164"/>
                            <text transform="matrix(4.489659e-11 -1 1 4.489659e-11 313.2538 94.6742)" font-family="'RegulatorNova-medium'!important" font-size="14px">500.000</text>
                            <rect x="340.443" y="46.288" fill="none" width="16.271" height="60.164"/>
                            <text transform="matrix(4.489659e-11 -1 1 4.489659e-11 349.3092 93.8939)" font-family="'RegulatorNova-medium'!important" font-size="14px">550.000</text>
                            <rect x="376.499" y="46.288" fill="none" width="16.271" height="60.164"/>
                            <text transform="matrix(4.489659e-11 -1 1 4.489659e-11 385.3645 95.0121)" font-family="'RegulatorNova-medium'!important" font-size="14px">600.000</text>
                            <rect x="412.554" y="46.288" fill="none" width="16.271" height="60.164"/>
                            <text transform="matrix(4.489659e-11 -1 1 4.489659e-11 421.4198 94.2059)" font-family="'RegulatorNova-medium'!important" font-size="14px">650.000</text>
                            <rect x="448.609" y="46.288" fill="none" width="16.271" height="60.164"/>
                            <text transform="matrix(4.489659e-11 -1 1 4.489659e-11 457.4752 93.7899)" font-family="'RegulatorNova-medium'!important" font-size="14px">700.000</text>
                            <rect x="484.665" y="46.288" fill="none" width="16.271" height="60.164"/>
                            <text transform="matrix(4.489659e-11 -1 1 4.489659e-11 493.5305 93.1136)" font-family="'RegulatorNova-medium'!important" font-size="14px">750.000</text>
                            <rect x="520.72" y="46.288" fill="none" width="16.271" height="60.164"/>
                            <text transform="matrix(4.489659e-11 -1 1 4.489659e-11 529.5858 104.4501)" font-family="'RegulatorNova-medium'!important" font-size="14px">&gt; 800.000</text>
                            <rect x="556.775" y="46.288" fill="none" width="16.271" height="76.735"/>
                            <text transform="matrix(4.489659e-11 -1 1 4.489659e-11 565.6406 119.3832)" font-family="'RegulatorNova-medium'!important" font-size="14px">onbekend</text>
                            <rect x="5.341" y="7.388" fill="none" width="230.4" height="19.2"/>
                            <text transform="matrix(1 0 0 1 5.3414 17.618)" font-family="'RegulatorNova-bold'!important" font-size="16px">Legende prijzen villa's (in ???)</text>
                        </svg>
                        
                    </div>
                </div>
                    
                <div class=" col-md-6 kaart container-fluid" id="kaartKT">
                            <?php echo $_smarty_tpl->tpl_vars['titelKaartTransacties']->value;?>

                            <div id="infoVeld2"> </div>
                            <div class="divKaart">
                            <?php echo $_smarty_tpl->tpl_vars['kaartTransacties']->value;?>

                            <br>
                            <svg version="1.0" id="legendeTransactiesV" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 579.952 125.364"
                            enable-background="new 0 0 579.952 125.364" xml:space="preserve">
                                <rect x="5.229" y="28.145" fill="pink" stroke="#FFFFFF" stroke-miterlimit="10" width="31.354" height="13.143"/>
                                <rect x="41.194" y="28.145" fill="lightcoral" stroke="#FFFFFF" stroke-miterlimit="10" width="31.354" height="13.143"/>
                                <rect x="77.158" y="28.145" fill="orangered" stroke="#FFFFFF" stroke-miterlimit="10" width="31.354" height="13.143"/>
                                <rect x="113.123" y="28.145" fill="red" stroke="#FFFFFF" stroke-miterlimit="10" width="31.354" height="13.143"/>
                                <rect x="149.087" y="28.145" fill="firebrick" stroke="#FFFFFF" stroke-miterlimit="10" width="31.354" height="13.143"/>
                                <rect x="185.052" y="28.145" fill="#C0C0BF" stroke="#FFFFFF" stroke-miterlimit="10" width="31.354" height="13.143"/>
                                <rect x="15.945" y="46.288" fill="none" width="16.271" height="60.164"/>
                                <text transform="matrix(4.489659e-11 -1 1 4.489659e-11 24.8112 73)" font-family="'RegulatorNova-Medium'!important" font-size="13px">0-15</text>
                                <rect x="52.001" y="46.288" fill="none" width="16.271" height="73"/>
                                <text transform="matrix(4.489659e-11 -1 1 4.489659e-11 60.8665 81)" font-family="'RegulatorNova-Medium'!important" font-size="14px">16-70</text>
                                <rect x="88.056" y="46.288" fill="none" width="16.271" height="73"/>
                                <text transform="matrix(4.489659e-11 -1 1 4.489659e-11 96.9218 85)" font-family="'RegulatorNova-Medium'!important" font-size="14px">71-100</text>
                                <rect x="124.111" y="46.288" fill="none" width="16.271" height="73"/>
                                <text transform="matrix(4.489659e-11 -1 1 4.489659e-11 132.9772 91)" font-family="'RegulatorNova-Medium'!important" font-size="14px">101-150</text>
                                <rect x="160.167" y="46.288" fill="none" width="16.271" height="73"/>
                                <text transform="matrix(4.489659e-11 -1 1 4.489659e-11 169.0325 80)" font-family="'RegulatorNova-Medium'!important" font-size="14px">&gt; 150</text>
                                <rect x="196.222" y="46.288" fill="none" width="16.271" height="73"/>
                                <text transform="matrix(4.489659e-11 -1 1 4.489659e-11 205.0873 121.3832)" font-family="'RegulatorNova-Medium'!important" font-size="14px">onbekend</text>
                                <rect x="5.341" y="7.388" fill="none" width="215.675" height="19.2"/>
                                <text transform="matrix(1 0 0 1 5.3414 17.618)"><tspan x="0" y="0" font-family="'RegulatorNova-Bold'!important" font-size="16px">Legende transacties villa's</text>
                        </svg>
                    </div>
                </div>
            </div>   

            <div class="wrap">

            <div class="row no-gutters">
                <div class="col-12 col-md-12 col-lg-3 order-3 order-md-4 order-lg-1 container-fluid blok2 blok1">
                    <div class="row no-gutters">
                        <div class="col-12 col-xs-6 col-sm-6 col-md-3 col-lg-12 order-sm-1 order-md-1" id="sterksteStijger"><div class="pijlPositive"><?php echo $_smarty_tpl->tpl_vars['sterksteStijger']->value;?>
</div></div>
                        <div class="col-12 col-xs-6 col-sm-6 col-md-3 col-lg-12 order-sm-3 order-md-2" id="sterksteDaler"><div class="pijlNegative"><?php echo $_smarty_tpl->tpl_vars['sterksteDaler']->value;?>
</div></div>
                        <div class="col-12 col-xs-6 col-sm-6 col-md-3 col-lg-12 order-sm-2 order-md-3" id="duursteGemeente"><div class="pijlPositive"><?php echo $_smarty_tpl->tpl_vars['duursteGemeente']->value;?>
</div></div>
                        <div class="col-12 col-xs-6 col-sm-6 col-md-3 col-lg-12 order-sm-4 order-md-4" id="goedkoopsteGemeente"><div class="pijlNegative"><?php echo $_smarty_tpl->tpl_vars['goedkoopsteGemeente']->value;?>
</div></div>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-6 order-1 order-md-1 order-lg-2 container-fluid blok2"> 
                    <div class="row no-gutters">
                        <div class="col-12  col-lg-12" id="artikel"><?php echo $_smarty_tpl->tpl_vars['artikel']->value;?>
</div>
                        <div class="col-12  col-lg-12" id="tabelPrijzen"><?php echo $_smarty_tpl->tpl_vars['tabelPrijzen']->value;?>
</div>
                    </div>
                </div>    
                <div class="col-12 col-md-3 col-lg-3 order-2 order-md-2 order-lg-3 container-fluid blok2 blok3">
                    <div class="row no-gutters">
                        <div class="col-12  col-sm-4 col-md-12 order-2 order-md-1" id="quote1"><?php echo $_smarty_tpl->tpl_vars['quote1']->value;?>
</div>
                        <div class="col-12 col-sm-4 col-md-12 order-3 order-md-2" id="quote2"><?php echo $_smarty_tpl->tpl_vars['quote2']->value;?>
</div>
                        <div class="col-12 col-sm-4 col-md-12  order-4 order-md-3" id="cijfer"><?php echo $_smarty_tpl->tpl_vars['cijfer']->value;?>
</div>
                        <div class="col-12 order-1 order-md-4" id="kaderstuk"><?php echo $_smarty_tpl->tpl_vars['kaderstuk']->value;?>
</div>
                    </div>
                </div>
            </div>

            <div>
                <br>
            </div>
            </div>
        </div>

       <!--<div class="infoP" id="infoP">text</div>
    <?php echo '<script'; ?>
>

    <?php echo '</script'; ?>
> -->
        <br><br><br>
        
            <div class="row no-gutters">
                <div class="voetnoot container-fluid col-12  ">
                    &copy;  <?php echo '<script'; ?>
 language="JavaScript" type="text/javascript">var nu = new Date();document.writeln( nu.getFullYear());<?php echo '</script'; ?>
> - Vormgeving en Programatie: Willem Ravoet - Bron cijfers: Statbel
                </div>
            </div>

        </div>
     
    </body>
</html>

<!--
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
            </ul>
            <ul class="navbar-nav">
               
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
        
        </div>
    </div>
</nav>
--><?php }
}
