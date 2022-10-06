<?php
App::uses('AppController', 'Controller');
/**
 * Blogs Controller
 *
 * @property Blog $Blog
 * @property PaginatorComponent $Paginator
 */
class ComplaintsController extends AppController {
/**
 * Components
 *
 * @var array
 */
public $components = array('Paginator');

public function index() {
 				
					
	$this->loadModel('Sitepage');	
   
    $page = $this->Sitepage->find('first', array(
			'recursive' => 0,
			'order' => array(
				
			),
			'conditions' => array(
			'Sitepage.id' => 11
			),
		));
		 
	if(!empty($page['Sitepage']['meta_title'])) {	
		$meta_title   = $page['Sitepage']['meta_title'];
	}
	if(!empty($page['Sitepage']['meta_keyword'])) {	
		$meta_keyword = $page['Sitepage']['meta_keyword'];
	}
	if(!empty($page['Sitepage']['meta_desc'])) {	
		$meta_desc   = $page['Sitepage']['meta_desc'];
	}
 
 	$this->set(compact('page','meta_title','meta_keyword','meta_desc'));
	
	$blogs = $this->Blog->find('all', array(
			'recursive' => 0,
			'order' => array(
				'Blog.blog_order' => 'ASC'
			),
			'conditions' => array(
		//	'Blog.active' => 1			
			),
		));
		
        $this->set(compact('blogs')); 
	}	
	
public function view($slug=null) {
 				
	$complaints = $this->Complaint->find('all', array(
			'recursive' => 0,
			'order' => array(
				'Complaint.id' => 'ASC'
			),
			'conditions' => array(
		//	'Complaint.active' => 1			
			),
		));
		
    $this->set(compact('complaints')); 
	$complaint = $this->Complaint->find('first', array(
			'recursive' => 0,
			'contain' => [
           
			'Category',
		

            ],
			'order' => array(
				'Complaint.id' => 'ASC'
			),
			'conditions' => array(
			'Complaint.slug' => $slug
		//	'Complaint.active' => 1			
			),
		));
		$this->set(compact('complaint','complaints')); 
		$views=$complaint['Complaint']['views']+1;

        $this->set(compact('complaint','views')); 
		
		$this->Complaint->id = $complaint['Complaint']['id'];
		$this->Complaint->saveField('views', $views);
		
		$complaint_id=$complaint['Complaint']['id'];
		
		$this->loadModel('Comment');
		$comments = $this->Comment->find('all', array(
			'recursive' => 0,
			'order' => array(
				'Comment.id' => 'DESC'
			),
			'conditions' => array(
			'Comment.complaint_id' => $complaint_id			
			),
		));
		$comments_count = $this->Comment->find('count', array(
			'recursive' => 0,
			'order' => array(
				'Comment.id' => 'DESC'
			),
			'conditions' => array(
			'Comment.complaint_id' => $complaint_id			
			),
		));
        $this->set(compact('comments','comments_count')); 	
		$meta_title1   = $complaint['Complaint']['title'];
	$meta_title=strip_tags($meta_title1);

		$meta_keyword = $complaint['Category']['name'];

	
		$meta_desc1=strip_tags($complaint['Complaint']['description']);
		 $meta_desc=substr($meta_desc1,0,160);
	$this->loadModel('Comment');
		$count_comments = $this->Comment->find('count', array(
			'recursive' => 0,
			'conditions' => array(
			'Comment.complaint_id' => $complaint_id		
			),
		)); 
 
 	$this->set(compact('count_comments','meta_title','meta_keyword','meta_desc'));
 	
 		if ($this->request->is(array('post', 'put'))) {
			 $this->loadModel('Comment');		
			$this->Comment->create();
			if ($this->Comment->save($this->request->data)) {
				$this->Session->setFlash(__('The Comment has been saved.'));
				return $this->redirect(array('controller' => 'pages', 'action' => 'index' ));
				
			} else {
				$this->Session->setFlash(__('The Comment could not be saved. Please, try again.'));
			}
		}	
		
		}	
		
		public function search(){
			if(!empty($this->request->data['Complaint']['keyword'])){
						
					  $cond=array();
					  $cond['Complaint.title LIKE'] = "%" . trim($this->request->data['Complaint']['keyword']) . "%";
					  $cond['Complaint.description LIKE'] = "%" . trim($this->request->data['Complaint']['keyword']) . "%";
					  $cond['Complaint.category_id'] = $this->request->data['Complaint']['keyword'];
					  $conditions['OR'] = $cond;
					  $this->request->params['named']['Complaint.keyword'] = $this->request->data['Complaint']['keyword'];
					 }
					$this->paginate=array('conditions'=>$conditions,'limit'=>'10');
					$result = $this->paginate('Complaint');
					$this->set(compact('result'));
					$numResults = sizeof($result);
					 $this->set(compact('numResults')); 
		
		}
/**

 * admin_index method
 *
 * @return void
 */
 
 	public function userview() {

 	$uid=$this->Session->read('User.id');
			 $userspeaks = $this->Complaint->find('all', [   
			'contain' => ['Category', ],         
            'conditions' => [
               
				'Complaint.user_id' => $uid,
            ],
            'order' => [
                'Complaint.views' => 'DESC'
            ],
			//'limit' => 6
        ]);
				
 $this->set(compact('userspeaks'));
		
	}
	
 	public function admin_index() {

 
		$speaks = $this->Complaint->find('all', array(
		 	'recursive' => 0,	
			'order' => array(
				'Complaint.id' => 'desc'
			),
			'conditions' => array(
			),
		));
				
		$this->set(compact('speaks'));
		
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Blog->exists($id)) {
			throw new NotFoundException(__('Invalid banner'));
		}
		$options = array('conditions' => array('Blog.' . $this->Blog->primaryKey => $id));
		$this->set('banner', $this->Blog->find('first', $options));
	}

		 
	
/**
 * admin_add method
 *
 * @return void
 */
	public function add() {
 
		if ($this->request->is(array('post', 'put'))) {
			 
					 $filename = "";
					 
					$service_slug = $this->generateSlug($this->request->data['Complaint']['title']);
					 
				$this->request->data['Complaint']['slug'] = $service_slug;
				
				if(!empty($this->request->data['Complaint']['user_ip'])){	
			$this->Complaint->create();
			if ($this->Complaint->save($this->request->data)) {
				$this->Session->setFlash(__('The Complaint has been saved.'));
				return $this->redirect(array('controller' => 'pages', 'action' => 'index' ));
			} else {
				$this->Session->setFlash(__('The Complaint could not be saved. Please, try again.'));
			}
				}
				else{
				    
				return $this->redirect(array('controller' => 'pages', 'action' => 'index' ));	    
				}
		}	


		$categories = $this->Category->generateTreeList(null, null, null, ' -- ');
	
		$this->set(compact('categories'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Complaint->exists($id)) {
			throw new NotFoundException(__('Invalid Complaint'));
		}
		
		$options = array('conditions' => array('Complaint.' . $this->Complaint->primaryKey => $id));
		$banner_details = $this->Complaint->find('first', $options);
	
		
		if ($this->request->is(array('post', 'put'))) {
 		
		 

					$service_slug = $this->generateSlug($this->request->data['Complaint']['title']);
					 
				$this->request->data['Complaint']['slug'] = $service_slug;
					 
			 
			
					
				
		
 					  
					
	 
						 
			if ($this->Complaint->save($this->request->data)) {
				$this->Session->setFlash(__('The Complaint has been saved.'));
				return $this->redirect(array('controller' => 'complaints', 'action' => 'index' ));
			} else {
				$this->Session->setFlash(__('The Complaint could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Complaint.' . $this->Complaint->primaryKey => $id));
			$this->request->data = $this->Complaint->find('first', $options);
		}		
		 	 
		$categories = $this->Complaint->Category->find('list', array(
		'conditions' => array('Category.parent_id' => '0')
		)
		);
		$this->set(compact('categories'));
		}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Blog->id = $id;
		if (!$this->Blog->exists()) {
			throw new NotFoundException(__('Invalid Blog'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Blog->delete()) {
			$this->Session->setFlash(__('The Blog has been deleted.'));
		} else {
			$this->Session->setFlash(__('The Blog could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
