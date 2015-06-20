<?php
//index.php
$db = mysql_connect("localhost", "root", "");
mysql_select_db("symfony_book", $db);

$result = mysql_query('SELECT id, title FROM post', $db);

$posts = array();
while ($row = mysql_fetch_assoc($result)) {
    $posts[] = $row;
}

mysql_close($db);

require 'templates/list.php';

