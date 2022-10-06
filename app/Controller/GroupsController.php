<?php

App::uses('AppController', 'Controller');

/**
 * Enquiries Controller
 *
 * @property Enquiry $Enquiry
 * @property PaginatorComponent $Paginator
 */
 
class GroupsController extends AppController {

/**
 * Components
 *
 * @var array
 */
 public $components = array('Session','Paginator');

 
	public function admin_index() {

 
		$groups = $this->Group->find('all', array(
		 	'recursive' => 0,	
			'order' => array(
				'Group.id' => 'desc'
			),
			'conditions' => array(
			),
		));
				
		$this->set(compact('groups'));
	}
	 public function admin_change_group_status()
    {
        if(!$this->request->is('AJAX'))
        {
            return $this->redirect(array('controller'=>'groups', 'action'=>'index'));
        }
        
        if(!$this->Group->save(array('id'=>$this->request->data['id'], 'status'=>$this->request->data['status'])))
        {
            echo json_encode(array('status'=>'failure', 'message'=>'Unable to update status at the moment.'));
            die;
        }
        
        echo json_encode(array('status'=>'success', 'message'=>'Testimonial status updated.'));
        die;
    }

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */

		 
	
/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
  
		if ($this->request->is(array('post', 'put'))) {
			 
					 
					$service_slug = $this->generateSlug($this->request->data['Group']['name']);
					 
				$this->request->data['Group']['slug'] = $service_slug;
				
	
 					  
					 

					
			$this->Group->create();
			if ($this->Group->save($this->request->data)) {
				$this->Session->setFlash(__('The Group has been saved.'));
				return $this->redirect(array('controller' => 'groups', 'action' => 'index' ));
			} else {
				$this->Session->setFlash(__('The Group could not be saved. Please, try again.'));
			}
		}	
	
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Group->exists($id)) {
			throw new NotFoundException(__('Invalid Group'));
		}
		
		$options = array('conditions' => array('Group.' . $this->Group->primaryKey => $id));
		$banner_details = $this->Group->find('first', $options);
	
		$filename = $banner_details['Group']['image'];
		
		if ($this->request->is(array('post', 'put'))) {
 		
		 

					$service_slug = $this->generateSlug($this->request->data['Group']['name']);
					 
				$this->request->data['Group']['slug'] = $service_slug;
					 
			 
		
 					  
					
	 
						 
			if ($this->Group->save($this->request->data)) {
				$this->Session->setFlash(__('The Group has been saved.'));
				return $this->redirect(array('controller' => 'groups', 'action' => 'index' ));
			} else {
				$this->Session->setFlash(__('The Group could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Group.' . $this->Group->primaryKey => $id));
			$this->request->data = $this->Group->find('first', $options);
		}		
		 	 
	
		}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Group->id = $id;
		if (!$this->Group->exists()) {
			throw new NotFoundException(__('Invalid Blog'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Group->delete()) {
			$this->Session->setFlash(__('The Group has been deleted.'));
		} else {
			$this->Session->setFlash(__('The Group could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}



	public function add() {
	     $uid=$this->request->data['user_id'];
		   	$count_groups = $this->Group->find('count', array(
			'recursive' => 0,
			'conditions' => array(
			'Group.user_id' => $uid	
			),
		)); 
 
 	$this->set(compact('count_groups'));
 
		 
		    if ($this->request->is('ajax')) {
			   
			   $this->request->data['formrequest']  = 'ajax';
		   }
		   else {
			   
			   $this->request->data['formrequest']  = 'post';
		   }
		  
 	if($count_groups<1){
		   
		if ($this->request->is('post')) {
			
			$this->request->data['ip_address'] = $_SERVER['REMOTE_ADDR'];
			$this->Group->create();
			
			if ($this->Group->save($this->request->data)) {
				
					if($this->request->data['formrequest'] == 'post') { 
					    $this->Session->setFlash('Your Group Has been Sent for Verification', 'success', array(), 'form1');
					return $this->redirect(array('controller' => 'users', 'action' => 'profile' ));  }
		
	 
				 
				
		} 
		else {
			die;
			 
		}
		}
 	}
 	else{
 	    $this->Session->setFlash('Your Group Limit reached', 'danger', array(), 'form1');

   
 	  	return $this->redirect(array('controller' => 'users', 'action' => 'profile' ));
 	}
 	
	}
}