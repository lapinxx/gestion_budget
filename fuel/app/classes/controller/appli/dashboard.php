<?php

class Controller_Appli_Dashboard extends Controller {

    public function before() {
        View::set_global(array(
            'title' => 'Tableau de bord',
                ), null, true);
    }

    public function action_index() {

        return Response::forge(View::forge('appli/dashboard'));
    }

}
