<?php

class Presenter_Appli_Smensuel extends Presenter {

    public $tableaux = array(
        array(
            'titre' => 'Habitation',
            'flag' => 'habilitation',
        ),
        array(
            'titre' => 'Assurance',
            'flag' => 'assurance',
        ),
        array(
            'titre' => 'Impot',
            'flag' => 'impot',
        ),
        array(
            'titre' => 'Divertissement',
            'flag' => 'divertissement',
        ),
        array(
            'titre' => 'Soin',
            'flag' => 'soin',
        ),
        array(
            'titre' => 'Animaux',
            'flag' => 'animaux',
        ),
        array(
            'titre' => 'Alimentation',
            'flag' => 'alimentation',
        ),
        array(
            'titre' => 'Travaux',
            'flag' => 'travaux',
        ),
        array(
            'titre' => 'Transport',
            'flag' => 'transport',
        ),
        array(
            'titre' => 'Salaire',
            'flag' => 'salaire',
        ),
        array(
            'titre' => 'Remise',
            'flag' => 'remise',
        ),
        array(
            'titre' => 'Epargne',
            'flag' => 'epargne',
        ),
        array(
            'titre' => 'Deplacement',
            'flag' => 'deplacement',
        ),
    );
    
    public $tableauxDepense = [];
    
    public function view() {
        $this->date_retrait = Model_Compta::find(1)->date_retrait;

        $this->libelle = Model_Compta::find(1)->libelle;

        $this->numero_opration = Model_Compta::find(1)->numero_opration;

        // $this->lol = Model_Compta::find('all');

        // $this->lol2 = Model_Compta::query()->where('id_type_de_depense', 2)->get();


        // $this->lol = Model_Compta ::query()->related('tdepense')->where('tdepense.tableau', 'Habitation')->get();
        $this->tableau_habilitation = Model_Tdepense::query()
                ->related('comptas')
                ->where('tableau', 'Habitation')->get();

//        echo '<pre>';
//        var_dump($this->tableau_habilitation);
//        echo '</pre>';
//        exit;
        
        //------------------------------------------------------ ligne de test
        
        $this->tableau2 = [];

        foreach ($this->tableau_habilitation as $habitation) {
            $this->tableau2[] = (object)[
                'type' => $habitation->type,
                'somme' => array_reduce($habitation->comptas, function($carry, $compta) {
                    return $carry + $compta->debit;
                }, 0),
            ];
            
//            $typeDepense->type = $habitation->type;
//            $typeDepense->somme = array_reduce($habitation->comptas, function($carry, $compta) {
//                return $carry + $compta->debit;
//            }, 0);
            
//            $this->tableau2[] = $typeDepense;
            
//            $this->tableau2->type= $toto['type'];
//
//            $query = Model_Compta ::query()->related('tdepense')->where('tdepense.type', $toto['type'])->get();
//            $somme = 0;
//            foreach ($query as $tata) {
//                $somme = $somme + $tata['debit'];
//            };
//
//            $this->tableau2->somme = $somme;
        }

        //-----fin de ligne de test
        
        foreach ($this->tableaux as $tableau) {
            $tableauTypeDepense = Model_Tdepense::query()
                ->related('comptas')
                ->where('tableau', $tableau['titre'])->get();
            
            $typesDepense = [];
            
            $this->tableauxDepense[] = View::forge('partials/tableau_depense', [
                'titre' => $tableau['titre'],
                'typesDepense' => $typesDepense
            ], false);
        }
        
    }

}
