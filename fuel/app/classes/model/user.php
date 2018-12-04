<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user
 *
 * @author user
 */
class Model_User extends Orm\Model { //! 1 ligne 

    public function __toString() {
        return 'Bonjour, je suis ' . $this->username . ' et mon e-mail est ' . $this->email;
    }
    
    protected static $_properties = array(
        'id', // both validation & typing observers will ignore the PK
        'username' => array(
            'data_type' => 'varchar',
            'label' => 'username',
            'validation' => array('required', 'min_length' => array(3), 'max_length' => array(50)),
            'form' => array('type' => 'text'),
        ),
        'password' => array(
            'data_type' => 'varchar',
            'label' => 'password',
            'validation' => array('required', 'min_length' => array(3), 'max_length' => array(250)),
            'form' => array('type' => 'text'),
        ),
        'group' => array(
            'data_type' => 'tinyint',
            'label' => 'group',
            'validation' => array('required', 'min_length' => array(1), 'max_length' => array(1)),
        ),
        'email' => array(
            'data_type' => 'varchar',
            'label' => 'email',
            'validation' => array('required', 'min_length' => array(10), 'max_length' => array(250)),
            'form' => array('type' => 'text'),
        ),
        'last_login' => array(
            'data_type' => 'varchar',
            'label' => 'last_login',
            'validation' => array(),
        ),
        'login_hash' => array(
            'data_type' => 'varchar',
            'label' => 'login_hash',
            'validation' => array(),
        ),
        'profile_fields' => array(
            'data_type' => 'varchar',
            'label' => 'login_hash',
            'validation' => array(),
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
    
}
