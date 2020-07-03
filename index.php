<?php

require 'controllers/userController.php';

$userController = new UserController();

$url  = rtrim($_SERVER['REQUEST_URI'], '/');

switch ($url) {
    case '/user-create':
        $userController->createUserModel('janedoe@gmail.com', 'Jane', 'Doe', 'password');
        break;

    case '/user-read':
        $userController->showUserModel(1);
        break;

    case '/user-update':
        $userController->updateUserModel(1, 'johndoe@gmail.com', 'Jill', 'Doe', 'password');
        break;

    case '/user-delete':
        $userController->deleteUserModel(1);
        break;
    default:
        $data = array(
            "error" => "URL not found",
        );
        require 'views/showData.php';
        break;
}
