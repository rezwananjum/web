<?php
mysql_connect("localhost","root","");
mysql_select_db("test");
$data=mysql_query("select * from scores");
$arry_to_store=mysql_fetch_row($data);

echo <<<abc
<h4 style='color:black'>Runs:$arry_to_store[1]</h4>
<h4 style='color:black'>Wickers:$arry_to_store[2]</h4>
<h4 style='color:black'>Overs:$arry_to_store[3]</h4>
abc;
?>