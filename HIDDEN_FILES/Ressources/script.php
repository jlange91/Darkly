<?php
$array = array();
$ip = "10.12.1.122";

function searchReadMe($link) {

  global $array;

  $t = file_get_contents($link);
  $regex = '/<a href="(.+)">/';
  preg_match_all($regex, $t, $matches);
  $urls = $matches[1];

  foreach($urls as $url) {
    if ($url == "../")
      continue ;
    if ($url == "README") {
      $c = file_get_contents($link.$url);
      $c = trim($c);
      if ( !in_array($c, $array) ) {
        print_r($ru.$url." => ".$c."\n");
        $array[$c] = $c;
      }
    } else {
      getReadMe($ru . $url);
    }
  }
}
searchReadMe("http://" . $ip . "/.hidden/");

?>
