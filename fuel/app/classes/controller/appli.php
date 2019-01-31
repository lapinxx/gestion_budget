<?php

class Controller_Appli extends Controller {

    public function action_smensuel() {
        $presenter = Presenter::forge('appli/smensuel');

        $presenter->month = date('m');
        $presenter->year = date('Y');

        $validator = Validation::forge();
        $validator->add_field('mois', 'Mois', 'numeric_between[1,12]');
        $validator->add_field('annee', 'Année', 'numeric_between[2017,' . date('Y') . ']');

        if ($validator->run(Input::get())) {

            $presenter->month = $validator->validated('mois');
            $presenter->year = $validator->validated('annee');
        }

        return Response::forge($presenter);
    }

    public function action_import() {
        $presenter = Presenter::forge('appli/import');
        return Response::forge($presenter);
    }

    public function action_dashboard() {
        $presenter = Presenter::forge('appli/dashboard');
        return Response::forge($presenter);
    }

    public function action_parametre() {
        $presenter = Presenter::forge('appli/parametre');
        return Response::forge($presenter);
    }

    public function action_profil() {
        $presenter = Presenter::forge('appli/profil');
        return Response::forge($presenter);
    }

    public function action_saisi() {
        $presenter = Presenter::forge('appli/saisi');
        return Response::forge($presenter);
    }

    public function action_sprofessionnel() {
        $presenter = Presenter::forge('appli/sprofessionnel');
        return Response::forge($presenter);
    }

    public function action_statistique() {
        $presenter = Presenter::forge('appli/statistique');
        return Response::forge($presenter);
    }

}
