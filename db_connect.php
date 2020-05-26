<?php
// Database name
$database_name = "my_sqlite.db";

// Database Connection
$db = new SQLite3($database_name);

// Create Table "students" into Database if not exists 
$query = "CREATE TABLE IF NOT EXISTS students (name STRING, sector STRING, profesion STRING, marmol STRING, cemento STRING, piedra STRING, madera STRING, metalico STRING, monocolor STRING)";
$db->exec($query);

?>