<?php
require 'Validator.php';
$config = require 'config.php';
$db = new Database($config['database']);

$heading = "CREATE A NEW NOTE";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    //$validator = new Validator();
    $errors = [];
    // Since string function is static, we can call it directly with Validator::string
    if (! Validator::string($_POST['body'], 1, 255)) {
        $errors['body'] = "Body is required and must be less than 255 characters";
    }

    if (empty($errors)) {
        $db->query("INSERT INTO `notes` (`body`, `user_id`) VALUES (:body, :user_id)", [
            'body' => $_POST['body'],
            'user_id' => 3
        ]);
    }

    header("Location: /notes");
    exit;
    //dd($_POST);
}
require "views/notes/create.view.php";
