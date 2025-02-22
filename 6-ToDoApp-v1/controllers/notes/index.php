<?php
//this would be the configuration for the database that goes in the .env file
$config = require 'config.php';
$db = new Database($config['database']);

$heading = "MY NOTES";

$notes = $db->query("select * from notes where user_id = 3")->get();

require 'views/notes/index.view.php';
