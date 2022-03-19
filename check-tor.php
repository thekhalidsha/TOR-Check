<?php
$file = 'http://check.torproject.org/';
$searchfor = 'Congratulations. This browser is configured to use Tor.';

$contents = file_get_contents($file);
$pattern = preg_quote($searchfor, '/');
$pattern = "/^.*$pattern.*\$/m";

if(preg_match_all($pattern, $contents, $matches)){
   echo "\nTor is Configured!!\n";
}
else{
   echo "\nTor Not Configured!!\n";
}
?>
