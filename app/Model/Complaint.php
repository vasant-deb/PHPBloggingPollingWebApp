<?php
App::uses('AppModel', 'Model');
class Complaint extends AppModel {
 
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

    public $belongsTo = array(
        'Category' => array(
            'className' => 'Category',
            'foreignKey' => 'category_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ),
		  
    );
 
    public function updateViews($complaints) {

        if(!isset($blogs[0])) {
            $a = $blogs;
            unset($blogs);
            $blogs[0] = $a;
        }


        $blogIds = Set::extract('/Complaint/id', $complaints);

        $this->updateAll(
            array(
                'Complaint.views' => 'Complaint.views + 1',
            ),
            array('Complaint.id' => $complaintIds)
        );

    }

}