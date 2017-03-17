
<?php
echo("<pre>");

$url='https://www.flipkart.com/moto-g5-plus-lunar-grey-32-gb/p/itmes2zjvwfncxxr';

$lines_string=file_get_contents($url);

$str= htmlspecialchars($lines_string);
echo $str;

preg_match_all ("/(<a(.*)>(.*)<\/a>)|<p>(.*)<\/p>/U", $lines_string, $pat_array);

echo "<h2>these are anchor tags</h2><br>";
print_r($pat_array[1]);


echo "<h2>these are paragraph tags</h2><br>";
print_r($pat_array[4]);



preg_match_all('/<ul(.*)data-reactid=(.*)>(.*)<\/ul>/U', $lines_string, $pat_array1);

echo "<h2>these are phone features</h2><br>";
print_r($pat_array1[3][10]);

echo("</pre>");

?>