<?php
//test commit
class Presenter_Appli_Smensuel extends Presenter {

    public $month = null;
    public $year = null;
    
    public function view() {
        
       //var_dump($this->month);exit;
      $this->mont=$this->month;
       $this->annee=$this->year;   
// filtre sur la liste de tableau
        $tableauxFraisFixe = Model_Tableau::query()
                ->where('typeTableau', 1)
                ->get();
        // filtre sur la liste de tableau
        $tableauxFraisVariable = Model_Tableau::query()
                ->where('typeTableau', 2)
                ->get();
        // filtre sur la liste de tableau
        $tableauxRevenue = Model_Tableau::query()
                ->where('typeTableau', 3)
                ->get();


        $this->tableauxRevenue = []; //initialise mes tableaux de dépenses
        $this->tableauxFraisVariable = []; //initialise mes tableaux de dépenses
        $this->tableauxFraisFixe = []; //initialise mes tableaux de dépenses

        foreach ($tableauxFraisFixe as $tableau) { //boucle sur chacun des tableaux
            $tableauTypeDepense = Model_Tdepense::query()
                    ->related('comptas')
                    ->related('tableaus')
                    ->where('tableaus.tableau', $tableau['tableau'])
                    ->get();


            $typesDepense = [];
            foreach ($tableauTypeDepense as $habitation) {
                $typesDepense[] = (object) [
                            'type' => $habitation->type,
                            'somme' => array_reduce($habitation->comptas, function($carry, $compta) {
                                        return $carry + $compta->debit;
                                    }, 0),
                ];
            }

            $this->tableauxFraisFixe[] = View::forge('partials/tableau_depense', [
                        'titre' => $tableau['tableau'],
                        'typesDepense' => $typesDepense
                            ], false);
        }

        //------------------------------------------------2
        foreach ($tableauxFraisVariable as $tableau) { //boucle sur chacun des tableaux
            $tableauTypeDepense = Model_Tdepense::query()
                    ->related('comptas')
                    ->related('tableaus')
                    ->where('tableaus.tableau', $tableau['tableau'])
                    ->get();


            $typesDepense = [];
            foreach ($tableauTypeDepense as $habitation) {
                $typesDepense[] = (object) [
                            'type' => $habitation->type,
                            'somme' => array_reduce($habitation->comptas, function($carry, $compta) {
                                        return $carry + $compta->debit;
                                    }, 0),
                ];
            }



            $this->tableauxFraisVariable[] = View::forge('partials/tableau_depense', [
                        'titre' => $tableau['tableau'],
                        'typesDepense' => $typesDepense
                            ], false);
        }
        //------------------------------------------------3
        foreach ($tableauxRevenue as $tableau) { //boucle sur chacun des tableaux
            $tableauTypeDepense = Model_Tdepense::query()
                    ->related('comptas')
                    ->related('tableaus')
                    ->where('tableaus.tableau', $tableau['tableau'])
                    ->get();


            $typesDepense = [];
            foreach ($tableauTypeDepense as $habitation) {
                $typesDepense[] = (object) [
                            'type' => $habitation->type,
                            'somme' => array_reduce($habitation->comptas, function($carry, $compta) {
                                        return $carry + $compta->debit;
                                    }, 0),
                ];
            }



            $this->tableauxRevenue[] = View::forge('partials/tableau_depense', [
                        'titre' => $tableau['tableau'],
                        'typesDepense' => $typesDepense
                            ], false);
        }
    }

}
