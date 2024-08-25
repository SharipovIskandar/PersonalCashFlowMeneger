<?php

namespace Controller;
use PM\User;
class AuthController
{
    public function signup()
    {
        if($_POST['name'] && $_POST['email'] && $_POST['password'] && $_POST['lastName']) {
            $user = new User();
            $newUser = $user->createUser($_POST['name'], $_POST['lastName'], $_POST['gender'], $_POST['email'], $_POST['password']);
            if($newUser) {
                $_SESSION['user'] = [
                    'email' => $_POST['email'],
                ];
                header('Location: /');
            }else{
                header('Location: /signup');
            }
        }
    }

    public function login()
    {
        if($_POST['email'] && $_POST['password']) {
            $user = new User();
            $newUser = $user->checkUser($_POST['email'], $_POST['password']);
            if($newUser) {
                $_SESSION['user'] = [
                    'email' => $_POST['email'],
                ];
                header('Location: /');
                exit();
            }else{
                header('Location: /login');
                exit();

            }
        }
    }

    public function logout()
    {
        session_destroy();
        header('Location: /login');
        exit();
    }
}