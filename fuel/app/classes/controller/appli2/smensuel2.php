<?php

class Controller_Appli_Smensuel extends Controller {

    public function before() {
        View::set_global(array(
            'title' => 'Suivi Mensuel',
                ), null, true);
    }

    public function action_index() {

       // return Response::forge(Presenter::forge('appli/smensuel'));
       return  $presentation = Presenter::forge('appli/smensuel');
    }

}
