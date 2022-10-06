<?php
/*
 * CakePHP Ajax Chat Plugin (using jQuery);
 * Copyright (c) 2008 Matt Curry
 * www.PseudoCoder.com
 * http://github.com/mcurry/cakephp/tree/master/plugins/chat
 * http://sandbox2.pseudocoder.com/demo/chat
 *
 * @author      Matt Curry <matt@pseudocoder.com>
 * @license     MIT
 *
 */
 App::uses('AppController', 'Controller');
class ChatsController extends AppController {
 
	var $components = array('RequestHandler');

  
public	function update($key) {
		$this->set('messages', $this->Chat->find('latest', $key));
	}
	public function index($id) {
	    $uid=$this->Session->read('User.id');	
	    $this->loadModel('Group');
			
			$group = $this->Group->find('first', array(
			'recursive' => 0,
			'conditions' => array(
			'Group.id' => $id	
			),
		)); 
		$this->set(compact('group'));
		
		if(empty($group)){
		   $this->loadModel('Group');
			
			$group = $this->Group->find('first', array(
			'recursive' => 0,
			'conditions' => array(
			'Group.id' => $id	
			),
		)); 
		$this->set(compact('group'));  
		}
		
		$this->loadModel('User');
	    $mark=explode(',', $group['Group']['members']);
   $i=1;foreach($mark as $out) {
		  	$memberslist = $this->User->find('all', array(
			'recursive' => 0,
			'conditions' => array(
			'User.email LIKE' => "%" . $out . "%"	
			),
		)); 
	$i++; 
   }
		$this->set(compact('memberslist'));	
	}
	
function getchat() {
    
    $id=$this->request->data['group_id'];
   	$messages = $this->Chat->find('all', array(
			'recursive' => 0,
            'contain' => [
            'User',
            ],
			'conditions' => array(
			'Chat.group_id' => $id	
			),
		)); 
		$this->set(compact('messages'));
		  
			   
	    foreach($messages as $mess){
	       
	        $chat_user_id=$mess['Chat']['user_id'];
	      
		   $image=$mess['Chat']['image'];
		  $chat_email=$mess['Chat']['email'];
		  
		   $created_at=$mess['Chat']['created'];
	    $message=$mess['Chat']['message'];
	  
	    echo "<div class='chat-msg owner'><div class='chat-msg-profile'>
      <img class='chat-msg-img' src='".$image."' alt='".$image."' title='".$chat_email."' />
      <div class='chat-msg-date'>$created_at</div>
     </div>
     <div class='chat-msg-content'>
      <div class='chat-msg-text'>$message</div>
   
     </div>
    </div>";
	     
     
	    
	    
	  //  echo print_r($mess);
    
    } 
    die(); 
}
	public function addmembers() {
	     $group_name=$this->request->data['group_name'];
	     $id=$this->request->data['group_id'];
	     $members=$this->request->data['members'];
	       $user_id=$this->request->data['user_id'];
	     $this->loadModel('User');
			
			$checkuser = $this->User->find('first', array(
			'recursive' => 0,
			'conditions' => array(
			'User.email' => $members	
			),
		)); 
		$this->set(compact('checkuser'));
		
		if(!empty($checkuser))
		{
		   $this->loadModel('Group');   
		   	$previousmember = $this->Group->find('first', array(
			'recursive' => 0,
			'conditions' => array(
			'Group.id' => $id	
			),
		)); 
		$this->set(compact('previousmember'));
		
		if(!empty($previousmember['Group']['members'])){
		    $newmember=$previousmember['Group']['members'].",".$members;
		  
		}
		else{
		    
		    $newmember=$members;
		}
		     $this->Group->id = $id;
		    
		     $this->Group->group_name = $group_name;
		     $this->request->data['Group']['members']=$newmember;
		     
		     $this->Group->user_id = $this->Session->read('User.id');
        if (!$this->Group->exists()) {
            throw new NotFoundException('Invalid user');
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Group->save($this->request->data)) {
                $this->Flash->flash('The group has been saved');
                	return $this->redirect(array('controller' => 'chats', 'action' => 'index',$id ));
            } else {
                $this->Flash->flash('The user could not be saved. Please, try again.');
            }
        } else {
            $this->request->data = $this->Group->read(null, $id);
        }
		}
		else{
		    
		    
		}
		
		}
	    
	    
	
		public function add() {
		 $this->layout = "ajax";
		 	     $id=$this->request->data['group_id'];
		    if ($this->request->is('ajax')) {
			   
			   $this->request->data['formrequest']  = 'ajax';
		   }
		   else {
			   
			   $this->request->data['formrequest']  = 'post';
		   }
		   
		if ($this->request->is('post')) {
			
		
			$this->Chat->create();
			
			if ($this->Chat->save($this->request->data)) {
				
					if($this->request->data['formrequest'] == 'post') { 
					    	return $this->redirect(array('controller' => 'chats', 'action' => 'index',$id ));
					    die; }
		} 
		else {
			die;
			 
		}
		}
	}
}


?>