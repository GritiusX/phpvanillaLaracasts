<?php

use Core\Database;
use Core\Validator;

require base_path('Core/Validator.php');
$config = require base_path('config.php');
$db = new Database($config['database']);

$errors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {

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
}

view("notes/create.view.php", [
    'heading' => 'Create Note',
    'errors' => $errors
]);
