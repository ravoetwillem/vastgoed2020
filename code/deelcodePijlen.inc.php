<?php
"
SELECT
ROUND((((AVG(t_prijzen2020.d_prijzenA2020)-AVG(t_prijzen2019.d_prijzenA2019))/AVG(t_prijzen2019.d_prijzenA2019))*100),2) AS v1j,
AVG(t_prijzen2020.d_prijzenA2020) AS duursteGoedkoopste,
t_prijzen2020.td_indexProvincies AS Provincie
FROM t_prijzen2020 
INNER JOIN t_prijzen2019 
ON t_prijzen2020.d_2020=t_prijzen2019.d_2019 
WHERE t_prijzen2020.td_indexProvincies = $_1
AND t_prijzen2020.d_prijzenA2020!='0'"
?>