<?php

use Core\Validator;
use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$errors = [];

if (! Validator::string($_POST['body'], 1, 255)) {
    $errors['body'] = "Body is required and must be less than 255 characters";
}

if (!empty($errors)) {
    return view("notes/create.view.php", [
        'heading' => 'Create Note',
        'errors' => $errors
    ]);
}

$db->query("INSERT INTO `notes` (`body`, `user_id`) VALUES (:body, :user_id)", [
    'body' => $_POST['body'],
    'user_id' => 3
]);

header("Location: /notes");
exit;
