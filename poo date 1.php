<?php

$dat=array( date("l",mktime(00,00,00,05,01,2005)),
date("l",mktime(00,00,00,05,01,2006)),
date("l",mktime(00,00,00,05,01,2007)),
date("l",mktime(00,00,00,05,01,2008)),
date("l",mktime(00,00,00,05,01,2009)),
date("l",mktime(00,00,00,05,01,2010)));
foreach ($dat as $day){
if( $day== 'Sunday'||$day== 'Saturday')
echo'  « Désolé !».<br> ';
if(( $day== 'Friday'||$day== 'Monday'))
echo' « Week-end prolongé !».<br>';
}
?>
 */