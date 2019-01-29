<?php

class Model_Tdepense extends Orm\Model { //! 1 ligne 

    protected static $_properties = array(
        'id', // both validation & typing observers will ignore the PK
        'type' => array(
            'data_type' => 'varchar',
            'label' => 'type',
        ),
        'ordre' => array(
            'data_type' => 'int',
            'label' => 'ordre',
        ),

        'actif' => array(
            'data_type' => 'int',
            'label' => 'actif',
        ),
        'Professionel' => array(
            'data_type' => 'int',
            'label' => 'Professionel',
        ),
        'idTableau' => array(
            'data_type' => 'int',
            'label' => 'idTableau',
        ),
        'created_at' => array(
            'data_type' => 'int',
            'label' => 'Created At',
            'form' => array(
                'type' => false, // this prevents this field from being rendered on a form
            ),
        ),
        'updated_at' => array('data_type' => 'int', 'label' => 'Updated At')
    );
    protected static $_has_many = array(
        'comptas' => [
            'key_from' => 'id',
            'model_to' => 'Model_Compta',
            'key_to' => 'id_type_de_depense',
            'cascade_save' => false,
            'cascade_delete' => false,
        ]
    ,
            'tableaus' => [
            'key_from' => 'idTableau',
            'model_to' => 'Model_Tableau',
            'key_to' => 'id',
            'cascade_save' => false,
            'cascade_delete' => false,
        ]
            
            );

}
