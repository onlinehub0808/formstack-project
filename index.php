<?php

require 'controllers/userController.php';

$view = array();

//test creating a new user
$userController = new UserController();

$newUser = $userController->createUserModel('janedoe@gmail.com', 'Jane', 'Doe', 'password');

//add the result of creating a new user, the ID, to the view array
$view['create_response'] = $newUser;

$showUser = $userController->showUserModel($newUser);

$view['read_response'] = $showUser;

$editedUser = $userController->updateUserModel($newUser, 'johndoe@gmail.com', 'John', 'Doe', 'newpassword');

$view['update_response'] = $editedUser;

$newUserToDelete = $userController->createUserModel('jilldoe@gmail.com', 'Jill', 'Doe', 'password');

$deletedUser = $userController->deleteUserModel($newUserToDelete);

$view['delete_response'] = $deletedUser;

echo json_encode($view);
