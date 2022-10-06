<?php
App::uses('AppModel', 'Model');
class Answer extends AppModel {
 
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
        'Question' => array(
            'className' => 'Question',
            'foreignKey' => 'question_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ),
		  
    );
 
    public function updateViews($question) {

        if(!isset($blogs[0])) {
            $a = $blogs;
            unset($blogs);
            $blogs[0] = $a;
        }


        $blogIds = Set::extract('/Question/id', $questions);

        $this->updateAll(
            array(
                'Question.views' => 'Question.views + 1',
            ),
            array('Question.id' => $questionIds)
        );

    }

}