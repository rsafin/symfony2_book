<?php
require_once("model.php");
$db = open_database_connection();

$sqlCreateTable = "CREATE TABLE post
                (
                    id int PRIMARY KEY NOT NULL,
                    title VARCHAR(255) NOT NULL,
                    body text NOT NULL,
                    date DATETIME DEFAULT now() NOT NULL
                )";
mysql_query($sqlCreateTable);

$sqlInsertRow = "INSERT INTO post (title, body) VALUES ('Hello world!', 'Hello world!')";

mysql_query($sqlInsertRow);

close_database_connection($db);