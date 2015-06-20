<?php
// model.php
function open_database_connection()
{
    $db = mysql_connect('localhost', 'root', '');
    mysql_select_db('symfony_book', $db);

    return $db;
}

function close_database_connection($db)
{
    mysql_close($db);
}

function get_all_posts()
{
    $db = open_database_connection();

    $result = mysql_query('SELECT id, title FROM post', $db);
    $posts = array();
    while ($row = mysql_fetch_assoc($result)) {
        $posts[] = $row;
    }
    close_database_connection($db);

    return $posts;
}