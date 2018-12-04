<?php

class Controller_Appli extends Controller {

    public function action_smensuel() {

        return Response::forge(Presenter::forge('appli/smensuel'));
    }

}
