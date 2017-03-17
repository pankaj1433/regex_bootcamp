<?php
$x=file_get_contents("https://www.flipkart.com/samsung-galaxy-on5-gold-8-gb/p/itmedhx3uy3qsfks?pid=MOBECCA5FHQD43KA&srno=b_1_1&otracker=nmenu_sub_Electronics_0_Samsung&lid=LSTMOBECCA5FHQD43KAIOIURP");
echo "<pre>";
//echo $x;
//$my=htmlspecialchars($x);
//echo "<pre>".$my."</pre>";
preg_match_all("/<ul data-reactid=\"(.*)\">(.*)<\/a>/",$x,$res);
//echo $my."<br>";
print_r($res);
//$len=implode($res[0]);
//echo $len;
echo "</pre>";
?>
