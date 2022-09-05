<?php
$_titel="d_titel_NL";
$_inleiding="d_inleiding_NL";
$_text="d_tekst_NL";
$_kader="d_kaderstuk_NL";
$_q1="d_quote1_NL";
$_q2="d_quote2_NL";
$_sql = "SELECT * FROM `t_artikels` WHERE `d_indexProvincies`='$_provincieSelectie' AND d_indexArtikels>12 AND d_indexArtikels<=24";

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
?>


