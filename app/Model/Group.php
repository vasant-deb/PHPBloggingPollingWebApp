<?php
App::uses('AppModel', 'Model');
class Group extends AppModel {

////////////////////////////////////////////////////////////

    public $validate = array(
        'name' => array(
            'rule1' => array(
                'rule' => array('lengthBetween', 3, 60),
                'message' => 'Name is required',
                'allowEmpty' => false,
                'required' => false,
            ),
            'rule2' => array(
                'rule' => array('isUnique'),
                'message' => 'Name already exists',
                'allowEmpty' => false,
                'required' => false,
            ),
        ),
       
    );

////////////////////////////////////////////////////////////

    public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ),
       
    );

    public $hasMany = array(	   
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ), 	
    	   
        
    );
  
////////////////////////////////////////////////////////////



////////////////////////////////////////////////////////////

}