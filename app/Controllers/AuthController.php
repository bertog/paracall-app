<?php


namespace App\Controllers;


use Paracall\Authentication\Auth;
use Paracall\Authentication\UserCredentials;
use Paracall\Controllers\Controller;

class AuthController extends Controller {

    public function index()
    {

        $credentials = new UserCredentials('cugno', 'secret'); //UserCredentials is a simple DTO Class

        try {

            Auth::attempt($credentials); //Attempt to login the user with the provided credentials

        } catch (\Exception $e) {
            echo $e->getMessage();
        }

        $auth_data = [
            'check' => Auth::check(), //Check if the current session has someone logged in
            'password_hashed' => Auth::hash('superpippo'), //Hash Helper for password by default using the PASSWORD_DEFAUTL Method
            'loggedUser' => Auth::$LoggedUser, //Return the current logged User as Eloquent Object
        ];

        return $this->renderView('auth', compact('auth_data'));

    }

}