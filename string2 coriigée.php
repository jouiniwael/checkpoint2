<?php
$str3='php 5';
$str5='hbcda ';
$str6='bcdac';
$str='ZERTYU llkjh SDFGHJK MLkjHGfDfghjk KjhgffyUIOPP';
/// 1//////
$str1= strtolower($str);

echo ucwords($str1).'<br>';
///2/ ////
for ($i=0;$i<strlen($str3);$i++){
    echo($str3[$i]).'<br>';
}
//3
/////
$resultat=((strcmp( $str5 ,$str6 ))<1)? $str5 .'<br>' . $str6 : $str6 .'<br>' .$str5 ;
echo $resultat;