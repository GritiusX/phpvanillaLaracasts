<?php
require "functions.php";
require "Database.php";
// Connect to the database, and execute a query

//this would be the configuration for the database that goes in the .env file

$config = require 'config.php';

$db = new Database($config['database']);

//WARNING: MAJOR VULNERABILITY -> BEWARE OF SQL INJECTION
//$id = isset($_GET['id']) ? (int) $_GET['id'] : 1; //ternario como en javascript isset=> chequea que haya un valor y que no sea null
//$query = "SELECT * FROM posts WHERE ID = $id";
//$posts = $db->query($query)->fetchAll();


// CALL 1: using the ?
//$id = isset($_GET['id']) ? (int) $_GET['id'] : 1; //ternario como en javascript isset=> chequea que haya un valor y que no sea null
//$query = "SELECT * FROM posts WHERE ID = ?";
//$posts = $db->query($query, [$id])->fetchAll();

// CALL 2: using the named parameters
$id = isset($_GET['id']) ? (int) $_GET['id'] : 1; //ternario como en javascript isset=> chequea que haya un valor y que no sea null
$query = "SELECT * FROM posts WHERE ID = :id";
$posts = $db->query($query, ['id' => $id])->fetchAll();

dd($posts);
