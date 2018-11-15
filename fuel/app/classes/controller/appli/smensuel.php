<?php

class Controller_Appli_smensuel extends Controller {

    public function before() {
        View::set_global(array(
            'title' => 'Suivi Mensuel',
                ), null, true);
    }

    
    public function action_index() {

        return Response::forge(View::forge('appli/smensuel'));
    }

}
