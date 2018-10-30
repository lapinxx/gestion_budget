<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dashboard
 *
 * @author user
 */
class Controller_Admin_Dashboard extends Core_Controller_Admin {
    
    public function action_index() {
        
        
        return '<a href="' . Uri::base() . 'admin/utilisateur">Utilisateur</a>';
    }
    
}
