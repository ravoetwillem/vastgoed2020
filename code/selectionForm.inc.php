<?php

	 
$_inhoud.=
"<form  method='post' action='$_srv'>
<label>Naam</label>
<input type='text' name='naam'>
<label >Voornaam</label>
<input type='text' name='voornaam'>
<label >Gender</label>";
$_inhoud.= dropDown("gender","t_gender","d_gender","d_mnemonic",$_start);
$_inhoud.="<label >Soort lid</label>";
$_inhoud.= dropDown("soort","t_soortLid","d_soortLid","d_mnemonic",$_start);
$_inhoud.=" 
<label >Straat</label>
<input type='text' name='straat' size='20'>
<label >Nr + Extra</label>
<input type='text' name='nr' size='10'>
<input type='text' name='xtr' size='10'>
<label >Postcode</label>
<input type='text' name='postcode' size='10'>
<label >Gemeente</label>
<input type='text' name='gemnaam'size='20'><label>Telefoon</label>
 <input type='text' name='tel' size='10'>
<label >Mobiel</label>
<input type='text' name='mob' size='10'>
 <label>E-mail</label>
<input type='text' name='mail' size='40'> 
<input name='submit' id='submit' type='submit' value='verzenden'>
</form>";
?>