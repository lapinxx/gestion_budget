<?php

class Model_Tableau extends Orm\Model { //! 1 ligne 

    protected static $_properties = array(
        'id', // both validation & typing observers will ignore the PK
        'tableau' => array(
            'data_type' => 'varchar',
            'label' => 'tableau',
        ),
        'typeTableau' => array(
            'data_type' => 'int',
            'label' => 'typeTableau',
        ),
        'ordre' => array(
            'data_type' => 'int',
            'label' => 'ordre',
        ),
        'actif' => array(
            'data_type' => 'int',
            'label' => 'actif',
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
    // truc qui ce compléte tout seul ! 
    protected static $_observers = array(
        'Orm\\Observer_CreatedAt',
        'Orm\\Observer_UpdatedAt',
        'Orm\\Observer_Validation',
        'Orm\\Observer_Typing',
    );
    protected static $_has_many = array(
        'tdepenses' => [
            'key_from' => 'id',
            'model_to' => 'Model_Tdepense',
            'key_to' => 'id_type_de_depense',
            'cascade_save' => false,
            'cascade_delete' => false,
        ]
    );

}
