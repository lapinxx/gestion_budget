<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admin
 *
 * @author user
 */
class Core_Controller_Admin extends Controller {
    
    public function before() {
        parent::before();
        
        if (!Core_Auth::isConnected()) {
            // yes, so go back to the page the user came from, or the
            // application dashboard if no previous page can be detected
            // Message::info(__('login.already-logged-in'));
            Response::redirect('auth/login');
        }
    }
    
}
