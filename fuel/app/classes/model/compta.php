<?php

class Model_Compta extends Orm\Model { //! 1 ligne 

    protected static $_properties = array(
        'id', // both validation & typing observers will ignore the PK
        'date_retrait' => array(
            'data_type' => 'date',
            'label' => 'date_retrait',
        ),
        'libelle' => array(
            'data_type' => 'varchar',
            'label' => 'libelle',
        ),
        'numero_opration' => array(
            'data_type' => 'varchar',
            'label' => 'numero_opration',
        ),
        'debit' => array(
            'data_type' => 'decimal',
            'label' => 'debit',
        ),
        'credit' => array(
            'data_type' => 'decimal',
            'label' => 'credit',
        ),
        'detail' => array(
            'data_type' => 'varchar',
            'label' => 'detail',
        ),
        'professionel' => array(
            'data_type' => 'int',
            'label' => 'professionel',
        ),
        'id_type_de_depense' => array(
            'data_type' => 'int',
            'label' => 'id_type_de_depense',
        ),
        'date_facturation' => array(
            'data_type' => 'date',
            'label' => 'date_facturation',
        ),
        'num_compte' => array(
            'data_type' => 'text',
            'label' => 'num_compte',
        ),
        'actif' => array(
            'data_type' => 'int',
            'label' => 'actif',
        ),
    );
    protected static $_belongs_to = array(
        'tdepense' => array(
            'key_from' => 'id_type_de_depense',
            'model_to' => 'Model_Tdepense',
            'key_to' => 'id',
            'cascade_save' => true,
            'cascade_delete' => false,
        )

   
        
    );

}
