<?php

$keyword = array("come","get","give","keep","after","before","against","among","through","between");
sort($keyword);

$html="";
$html.= "<ul>";

for($x= 0; $x < count($keyword); $x++) {
    $html.="<li>".$keyword[$x]."</li>";
  }

$html.= "</ul>";
echo $html;
exit;
?>