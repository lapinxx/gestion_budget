<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of auth
 *
 * @author user
 */
class Controller_Auth extends Controller {
    
    public function action_login() { 
        
        if (Core_Auth::isConnected()) {
             
            Messages::warning('vous êtes déjà connecté(e)!');
          //  return Response::redirect('appli/dashboard');
     return       Response::redirect('appli/dashboard');
           //  return Response::forge(View::forge('appli/dashboard'));
         }
        $data = array(
            'title' => 'Connexion',
        );
        // Auth::create_user('jkonzack', 'jkonzack', 'jean.konzack@gmail.com', 1, array());
        // $user = Model_User::find('1');
        // $user = Model_User::query()->where('username', 'jkonzack')->get_one();
        // var_dump($user->email);
        // var_dump( $user);
        
        if (Input::post()) {
            $validation = Validation::forge();
            $validation->add_field('username', 'Username', 'required');// champ/ label/regle
            $validation->add_field('password', 'Password', 'required');
            
            if ($validation->run()) {// éxécuter ma validation
                // check the credentials.
                
                try {
                    Core_Auth::connect(Input::post('username'), Input::post('password'));
                                        
                //    Response::redirect('appli/dashboard');
                      return Response::forge(View::forge('appli/dashboard'));
                } catch (Exception $e) {
                    Messages::error($e->getMessage());
                }
            } else {
                // message d'erreur
                Messages::error('Erreurs de validation', $validation->error());
            }
            
            $data['connect'] = 'Je me connecte!!!';
        }
        
        View::set_global(array(
            'title' => 'Connexion',
        ), null, true);

        return View::forge('auth/login', $data, false);
    }

    //1 controller = plusieur class
public function action_logout() {
    // remove the remember-me cookie, we logged-out on purpose
    \Auth::dont_remember_me();

    // logout
    \Auth::logout();

    // inform the user the logout was successful <-- avoir avec nico ? fonction message ?
   // \Messages::success(__('login.logged-out'));

    // and go back to where you came from (or the application
    // homepage if no previous page can be determined)

    return \Response::redirect('auth/login');
    //return Response::forge(View::forge('auth/login'));
    }
 }
