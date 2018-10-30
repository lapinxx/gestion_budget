<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of utilisateur
 *
 * @author user
 */
class Controller_Admin_Utilisateur extends Core_Controller_Admin {
    
    public function action_index() {
        
        $users =  Model_User::query()->get();
        
        var_dump($users);
        
        return '';
    }
    
}
