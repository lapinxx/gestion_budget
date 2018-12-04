<?php
class Model_Test extends Orm\Model { //! 1 ligne 
    
    public function __toString() {
        return $this->animal;
    }
        protected static $_properties = array(
        'id', // both validation & typing observers will ignore the PK
        'animal' => array(
            'data_type' => 'varchar',
            'label' => 'animal',
            'validation' => array('required', 'min_length' => array(3), 'max_length' => array(20)),
            'form' => array('type' => 'text'),
            'default' => 'animal',
        )
            );
}
