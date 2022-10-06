<?php
App::uses('AppController', 'Controller');
/**
 * Blogs Controller
 *
 * @property Blog $Blog
 * @property PaginatorComponent $Paginator
 */
class PollsController extends AppController {
/**
 * Components
 *
 * @var array
 */
 public $components = array('Session','Paginator');

	public function index() {
 				
					
	$this->loadModel('Sitepage');	
   
    $page = $this->Sitepage->find('first', array(
			'recursive' => 0,
			'order' => array(
				
			),
			'conditions' => array(
			'Sitepage.slug' => 'poll'
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
	
	$polls = $this->Poll->find('all', array(
			'recursive' => 0,
			'order' => array(
				'Poll.id' => 'ASC'
			),
			'conditions' => array(
		'Poll.status' => 1			
			),
		));
		
        $this->set(compact('polls')); 
	}	
	
	public function view($slug=null) {
		$message="";
		
	$poll = $this->Poll->find('first', array(
			'recursive' => 0,
			'order' => array(
				'Poll.id' => 'ASC'
			),
			'conditions' => array(
			'Poll.slug' => $slug
		//	'Blog.active' => 1			
			),
		));
		
        $this->set(compact('poll'));
       
         $str= $poll['Poll']['polldata'];

preg_match('/Question:(.*?),Option1:(.*?),Option1Img:(.*?),Option2:(.*),Option2Img:(.*?),Option3:(.*),Option3Img:(.*?),Option4:(.*),Option4Img:(.*)/', $str, $m);

 $question=$m[1].PHP_EOL;
 $option1=$m[2].PHP_EOL;
  $option1img=$m[3].PHP_EOL;
  $option2=$m[4].PHP_EOL;
  $option2img=$m[5].PHP_EOL;
  $option3=$m[6].PHP_EOL;
  $option3img=$m[7].PHP_EOL;
  $option4=$m[8].PHP_EOL;
  $option4img=$m[9].PHP_EOL;
$this->set(compact('question','option1','option1img','option2','option2img','option3','option3img','option4','option4img'));

   
  if ($this->request->is(array('post', 'put'))) {
         $this->loadModel('Pollcount');
      $checkvote=$this->Pollcount->find('count', array(
			'recursive' => 0,
			'order' => array(
			//	'Poll.id' => 'ASC'
			),
			'conditions' => array(
			'Pollcount.poll_id' => $poll['Poll']['id'],
			'Pollcount.user_ip' => getUserIP()
		//	'Blog.active' => 1			
			),
		));
		if(empty($this->request->data['user_id']))
		{
		    
		    $this->request->data['user_id']=0;
		}
		 $this->loadModel('Pollcount');
		 $checkvote2=$this->Pollcount->find('count', array(
			'recursive' => 0,
			'order' => array(
			//	'Poll.id' => 'ASC'
			),
			'conditions' => array(
			'Pollcount.poll_id' => $poll['Poll']['id'],
			'Pollcount.user_id' => $this->request->data['user_id']
		//	'Blog.active' => 1			
			),
		));
        $this->set(compact('checkvote2','checkvote'));

if($checkvote<1||$checkvote2<1)
{

$count=$this->request->data['count'];
if($count=="count1"){
$count1=$poll['Poll']['count1']+1;
		$this->Poll->id = $poll['Poll']['id'];
		$this->Poll->saveField('count1', $count1);
}
if($count=="count2"){
$count2=$poll['Poll']['count2']+1;
		$this->Poll->id = $poll['Poll']['id'];
		$this->Poll->saveField('count2', $count2);

}
if($count=="count3"){
$count3=$poll['Poll']['count3']+1;
		$this->Poll->id = $poll['Poll']['id'];
		$this->Poll->saveField('count3', $count3);

}
if($count=="count4"){
$count4=$poll['Poll']['count4']+1;
		$this->Poll->id = $poll['Poll']['id'];
		$this->Poll->saveField('count4', $count4);

}
$this->loadModel('Pollcount');
	$this->Pollcount->create();
$this->request->data['Pollcount']['poll_id']=$poll['Poll']['id'];
$this->request->data['Pollcount']['user_id']=$this->request->data['user_id'];
$this->request->data['Pollcount']['user_ip']=$this->request->data['user_ip'];
			if ($this->Pollcount->save($this->request->data)) {
			    $message="<script type='text/javascript'>toastr.success('Have Fun')</script>";
			 $this->Session->setFlash('Your Vote has been submited', 'success', array(), 'form1');
	
			} else {
				$this->Session->setFlash(__('The Vote could not be saved. Please, try again.'));
			}
}

else      {
     
      $this->Session->setFlash('You Already Voted', 'danger', array(), 'form1');
  
			}	    

}
 
       $views=$poll['Poll']['views']+1;
		$this->Poll->id = $poll['Poll']['id'];
		$this->Poll->saveField('views', $views);
		$this->set(compact('message'));
	}
	
		
		public function add() {
		    
		    if ($this->request->is(array('post', 'put'))) {
		    		
					 
					$service_slug = $this->generateSlug($this->request->data['Poll']['poll_question']);
					 
			
				 $filename1 = "";
		if(!empty($this->data['Poll']['poll_photo1']['name']))
                    {
					
					  $filename1 = $this->process_image($this->request->data['Poll']['poll_photo1'], 'img-1'.$service_slug,'polls/');
					}
					
						$this->request->data['Poll']['poll_photo1'] = $filename1;
		    
		     $filename2 = "";
		if(!empty($this->data['Poll']['poll_photo2']['name']))
                    {
					
					  $filename2 = $this->process_image($this->request->data['Poll']['poll_photo2'], 'img-2'.$service_slug,'polls/');
					}
					
						$this->request->data['Poll']['poll_photo2'] = $filename2;
						
						  $filename3 = "";
		if(!empty($this->data['Poll']['poll_photo3']['name']))
                    {
					
					  $filename3 = $this->process_image($this->request->data['Poll']['poll_photo3'], 'img-3'.$service_slug,'polls/');
					}
					
						$this->request->data['Poll']['poll_photo3'] = $filename3;
						  $filename4 = "";
		if(!empty($this->data['Poll']['poll_photo4']['name']))
                    {
					
					  $filename4 = $this->process_image($this->request->data['Poll']['poll_photo4'], 'img-4'.$service_slug,'polls/');
					}
					
						$this->request->data['Poll']['poll_photo4'] = $filename4;
        
        	
            $this->request->data['Poll']['polldata']="'Question:".$this->request->data['Poll']['poll_question'].
            ",Option1:".$this->request->data['Poll']['poll_answer1'].",Option1Img:".$filename1.
		",Option2:".$this->request->data['Poll']['poll_answer2'].",Option2Img:".$filename2.
		",Option3:".$this->request->data['Poll']['poll_answer3'].",Option3Img:".$filename3.
		",Option4:".$this->request->data['Poll']['poll_answer4'].",Option4Img:".$filename4;
	
	if(!empty($this->request->data['Poll']['user_id'])){
	    
	    $this->request->data['Poll']['status']=1;
	}
	
		$this->Poll->create();
			if ($this->Poll->save($this->request->data)) {
				$this->Session->setFlash(__('The Poll has been saved.'));
				return $this->redirect(array('controller' => 'polls', 'action' => 'index' ));
			} else {
				$this->Session->setFlash(__('The Poll could not be saved. Please, try again.'));
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
