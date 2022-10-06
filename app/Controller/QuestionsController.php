<?php
App::uses('AppController', 'Controller');
/**
 * Blogs Controller
 *
 * @property Blog $Blog
 * @property PaginatorComponent $Paginator
 */
class QuestionsController extends AppController {

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
 				
	$questions = $this->Question->find('all', array(
			'recursive' => 0,
			'order' => array(
				'Question.id' => 'DESC'
			),
			'conditions' => array(
		//	'Question.active' => 1			
			),
		));
		
        $this->set(compact('questions')); 
		
	$question = $this->Question->find('first', array(
			'recursive' => 0,
			'contain' => [
           
			'Category',
		

            ],
			'order' => array(
				'Question.id' => 'ASC'
			),
			'conditions' => array(
			'Question.slug' => $slug
		//	'Question.active' => 1			
			),
		));
		$this->set(compact('question','questions')); 
		$views=$question['Question']['views']+1;

        $this->set(compact('question','views')); 
		
		$this->Question->id = $question['Question']['id'];
		$this->Question->saveField('views', $views);
$ques_id=$question['Question']['id'];
		
		$this->loadModel('Answer');
		$answers = $this->Answer->find('all', array(
			'recursive' => 0,
			'order' => array(
				'Answer.id' => 'DESC'
			),
			'conditions' => array(
			'Answer.question_id' => $ques_id			
			),
		));
		$answers_count = $this->Answer->find('count', array(
			'recursive' => 0,
			'order' => array(
				'Answer.id' => 'DESC'
			),
			'conditions' => array(
			'Answer.question_id' => $ques_id			
			),
		));
        $this->set(compact('answers','answers_count')); 
		
				$meta_title   = $question['Question']['title'];
	

		$meta_keyword = $question['Category']['name'];

	
		$meta_desc   = $question['Question']['description'];

 
 	$this->set(compact('meta_title','meta_keyword','meta_desc'));
		if ($this->request->is(array('post', 'put'))) {
			 $this->loadModel('Answer');		
			$this->Answer->create();
			if ($this->Answer->save($this->request->data)) {
				$this->Session->setFlash(__('The Answer has been saved.'));
				
			} else {
				$this->Session->setFlash(__('The Answer could not be saved. Please, try again.'));
			}
		}		
		
		}	

/**
 * admin_index method
 *
 * @return void
 */
 
 	public function admin_index() {

 
		$questions = $this->Question->find('all', array(
		 	'recursive' => 0,	
			'order' => array(
				'Question.id' => 'desc'
			),
			'conditions' => array(
			),
		));
				
		$this->set(compact('questions'));
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
			 
					 
					 
					$service_slug = $this->generateSlug($this->request->data['Question']['title']);
					 
				$this->request->data['Question']['slug'] = $service_slug;
				
				if($this->request->data['Question']['user_ip']!=""){		
			$this->Question->create();
			if ($this->Question->save($this->request->data)) {
				$this->Session->setFlash(__('The Question has been saved.'));
				return $this->redirect(array('controller' => 'questions', 'action' => 'index' ));
			} else {
				$this->Session->setFlash(__('The Question could not be saved. Please, try again.'));
			}
			
				}
				else{
				 	return $this->redirect(array('controller' => 'questions', 'action' => 'index' ));   
				    
				}
		}	

$categories = $this->Question->Category->find('list', array(
		'conditions' => array('Category.parent_id' => '0',
		'not' => array('Category.name' => null))
		)
		);
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
		if (!$this->Blog->exists($id)) {
			throw new NotFoundException(__('Invalid Blog'));
		}
		
		$options = array('conditions' => array('Blog.' . $this->Blog->primaryKey => $id));
		$banner_details = $this->Blog->find('first', $options);
	
		$filename = $banner_details['Blog']['image'];
		
		if ($this->request->is(array('post', 'put'))) {
 		
		 

					$service_slug = $this->generateSlug($this->request->data['Blog']['name']);
					 
				$this->request->data['Blog']['slug'] = $service_slug;
					 
			 
			 if(!empty($this->data['Blog']['image']['name']))
                    {
					
					    $filename = $this->process_image($this->request->data['Blog']['image'], 'img-'.$service_slug,'blogs/');  
					}
					
				
			$this->request->data['Blog']['image'] = $filename;
 					  
					
	 
						 
			if ($this->Blog->save($this->request->data)) {
				$this->Session->setFlash(__('The Blog has been saved.'));
				return $this->redirect(array('controller' => 'blogs', 'action' => 'index' ));
			} else {
				$this->Session->setFlash(__('The Blog could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Blog.' . $this->Blog->primaryKey => $id));
			$this->request->data = $this->Blog->find('first', $options);
		}		
		 	 
		$categories = $this->Blog->Category->find('list', array(
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
