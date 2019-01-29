<?php

class Controller_Appli extends Controller {

    public function action_smensuel() {
        $presenter = Presenter::forge('appli/smensuel');
        
        $presenter->month = date('m');
        $presenter->year = date('Y');

        $validator = Validation::forge();
        $validator->add_field('mois', 'Mois', 'numeric_between[1,12]');
        $validator->add_field('annee', 'Année', 'numeric_between[2017,' . date('Y') . ']');

        if ($validator->run(Input::get()))
        {
            
            $presenter->month = $validator->validated('mois');
            $presenter->year = $validator->validated('annee');
        }
        
        return Response::forge($presenter);
    }

}
