<?php

//this would be the configuration for the database that goes in the .env file
$config = require 'config.php';
$db = new Database($config['database']);

$heading = "NOTE:";
$currentUserId = 3;

$note = $db->query("select * from notes where id = :id", ['id' => $_GET['id']])->findOrFail();

authorize($note['user_id'] === $currentUserId);

require 'views/notes/show.view.php';
