<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Core_Auth
 *
 * @author user
 */
class Core_Auth {
    
    private static $auth;
    
    private static $utilisateur;

    public static function connect($login, $password) {
        $instance = Auth::instance();
        
        if (!$instance->validate_user($login, $password)) {
            throw new Exception('Utilisateur inconnu', 401);
        }
        
        if (!$instance->login($login, $password)) {
            throw new Exception('Connexion impossible', 401);
        }
        
        self::$utilisateur = Model_User::find($instance->get_user_id());
    }
    
    public static function getUtilisateur() {
        return self::$utilisateur;
    }
    
    public static function isConnected() {
        return Auth::check();
    }
    
    
}
