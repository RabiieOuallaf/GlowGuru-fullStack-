<?php 


    require_once './Users.php';

    $Login = new Users();

    if(!$_SESSION){

        $Login->Login();

    }

    