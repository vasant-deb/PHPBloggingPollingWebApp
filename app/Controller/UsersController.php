<?php
App::uses('AppController', 'Controller');
class UsersController extends AppController {

var $components = array('Email');


////////////////////////////////////////////////////////////

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow(
		'login',
		'sociallogin',
		'sociallogout',
		'customer_login',
		'customer_forgot_password',
		'customer_register',
		'customer_myaccount',
		'customer_changepassword',
		'customer_orderhistory',
		'customer_orderdetails',
		'customer_logout');
    }

////////////////////////////////////////////////////////////


function __sendPasswordEmail($user, $password) {
   if ($user === false) {
     debug(__METHOD__." failed to retrieve User data for user.id: {$user['User']['id']}");
     return false;
  }
  $this->set('user', $user['User']);
  $this->set('password', $password);
  $to = $user['User']['email'];
  
  $username = $user['User']['first_name']. ' '.$user['User']['last_name'];
  
        $company_details = $this->Session->read('company_details');
		
		$company_name  = $company_details['company_name']; 
		$company_email = $company_details['company_email']; 
	    
			$CustomMessageText = "Dear $username,
			<br /><br />
			Your new password is  $password  <br />";
			 
			 
			$CustomMessageText .= "<br /><br />
			To your success!
			<br>
			$company_name.";
					
		$CustomMessageSubject = $company_name." - Your new password";  
	
		$subject = $CustomMessageSubject;
		$message = $CustomMessageText;

	
	
		App::import('Vendor', 'phpmailer', array('file' => 'phpmailer' . DS . 'class.phpmailer.php'));
	
  	    $mail = new PHPMailer();
        $mail->ContentType	= "text/html";
        $mail->From		= $company_email;  
        $mail->FromName		= $company_name;
        $mail->Host		= "localhost";
        $mail->Subject		= $subject;
        $mail->AltBody		= "";
        $mail->AddAddress(trim($to), '');
         $mail->Body	= $message;
        $mail->AddReplyTo("$company_email","$company_name");
	 	 		
		$mail->Send();
		
  $this->Session->setFlash('A new password has been sent to your email address.');

  return true;
}

    public function login() {

        // echo AuthComponent::password('admin');
			$this->layout = "login";

        if ($this->request->is('post')) {
            if($this->Auth->login()) {

                $this->User->id = $this->Auth->user('id');
                $this->User->saveField('logins', $this->Auth->user('logins') + 1);
                $this->User->saveField('last_login', date('Y-m-d H:i:s'));

                if ($this->Auth->user('role') == 'customer') {
                    return $this->redirect([
                        'controller' => 'products',
                        'action' => 'index',
                        'customer' => true,
                        'admin' => false
                    ]);
                } elseif ($this->Auth->user('role') == 'admin') {
                    return $this->redirect([
                        'controller' => 'users',
                        'action' => 'dashboard',
                        'manager' => false,
                        'admin' => true
                    ]);
                } else {
                    $this->Flash->danger('Login is incorrect');
                }
            } else {
                $this->Flash->danger('Login is incorrect');
            }
        }
    }

////////////////////////////////////////////////////////////

    public function logout() {
        $this->Flash->flash('Good-Bye');
        $_SESSION['KCEDITOR']['disabled'] = true;
        unset($_SESSION['KCEDITOR']);
        return $this->redirect($this->Auth->logout());
    }

////////////////////////////////////////////////////////////

function createTempPassword($len) {
   $pass = '';
   $lchar = 0;
   $char = 0;
   for($i = 0; $i < $len; $i++) {
     while($char == $lchar) {
       $char = rand(48, 109);
       if($char > 57) $char += 7;
       if($char > 90) $char += 6;
     }

     $pass .= chr($char);
     $lchar = $char;
   }

   return $pass;
}

public function customer_forgot_password() {
	 			$this->layout = "default";
				
	  if ($this->request->is('post') && $this->request->data['mode'] == 'forgot') {
	 	
     $this->User->contain();
     $user = $this->User->findByEmail($this->data['email']);
 	
     if($user) {
       $user['User']['tmp_password'] = $this->createTempPassword(7);
       $user['User']['password'] = $user['User']['tmp_password'];

       if($this->User->save($user, false)) {
		
		$this->Session->delete('Flash');

         $this->__sendPasswordEmail($user, $user['User']['tmp_password']);
           $this->Flash->success('An email has been sent with your new password.');
         //$this->redirect($this->referer());
       }
     } else {
		
		$this->Session->delete('Flash');

         $this->Flash->danger('No user was found with the submitted email address.');
     }
   }
 	}

	
	
	public function registeremail($user) {
				 
	 
			
		  $to = $user['User']['email'];
			
		//$login_username1 = $user['User']['username'];		
		$login_username = $user['User']['email'];
		$login_password = $user['User']['password'];
  
        $username = $user['User']['first_name']. ' '.$user['User']['last_name'];
  
        $company_details = $this->Session->read('company_details');
		
		$company_name  = $company_details['company_name']; 
		$company_email = $company_details['company_email']; 
	    
			$CustomMessageText = "Dear $username,
			<br /><br />
			Thank you for registering with $company_name <br /><br />";
			
			$CustomMessageText .= "Your Login Details are as follows :<br />";
			 			
			$CustomMessageText .= "User Name : $login_username <br />";
			$CustomMessageText .= "Password  : $login_password <br /><br />";
			
			
			$CustomMessageText .= "<a href=''>Click Here</a> to Login.<br />";
						
			$CustomMessageText .= "<br /><br />
			To your success!
			<br>
			$company_name.";
					
		$CustomMessageSubject = $company_name." - Thank you for registering with ".$company_name;  
	
		$subject = $CustomMessageSubject;
		 $message = $CustomMessageText;
		
		 
	
		App::import('Vendor', 'phpmailer', array('file' => 'phpmailer' . DS . 'class.phpmailer.php'));
	
  	    $mail = new PHPMailer();
        $mail->ContentType	= "text/html";
        $mail->From		= $company_email;  
        $mail->FromName		= $company_name;
        $mail->Host		= "localhost";
        $mail->Subject		= $subject;
        $mail->AltBody		= "";
        $mail->AddAddress(trim($to), '');
         $mail->Body	= $message;
        $mail->AddReplyTo("$company_email","$company_name");
	 	 		
		$mail->Send();
		 
		 
		 
		
	/*************************** Admin Email *****************************************************/
		
 		 
        $username = ucwords($username);
		
        $company_details = $this->Session->read('company_details');
		
		$company_name  = $company_details['company_name']; 
		$company_email = $company_details['company_email']; 
	    
			$CustomMessageText2 = "Dear Admin,
			<br /><br />
			A new customer registered on $company_name <br /><br />";
			
			$CustomMessageText2 .= "Following are Details : <br /><br />";			
			$CustomMessageText2 .= "Name : $username <br />";
			$CustomMessageText2 .= "Email : $login_username <br />";
			$CustomMessageText2 .= "<br /><br />";
			 
					
		$CustomMessageSubject2 = "A New Customer  $username registered on $company_name";  
	
		$subject2 = $CustomMessageSubject2;
		$message2 = $CustomMessageText2;

		$to2 = $company_email; 
	
		App::import('Vendor', 'phpmailer', array('file' => 'phpmailer' . DS . 'class.phpmailer.php'));
	
  	    $mail = new PHPMailer();
        $mail->ContentType	= "text/html";
        $mail->From		= $company_email;  
        $mail->FromName		= $company_name;
        $mail->Host		= "localhost";
        $mail->Subject		= $subject2;
        $mail->AltBody		= "";
        //$mail->AddAddress(trim($to2), '');
		$mail->AddAddress("support@confessiondiary.com", "");

						
        $mail->Body	= $message2;
        $mail->AddReplyTo("$company_email","$company_name");	 	 		 										
		
		$mail->Send();
		
	/*************************** Admin Email *****************************************************/
	
		 return true;
		
	}
	
	
 public function customer_register() {
	 
	 			$this->layout = "default";

				        $shop = $this->Session->read('Shop');

	  if ($this->request->is('post') && $this->request->data['mode'] == 'register') {
		  
		  $this->request->data['User']['role']   = 'customer';
		  $this->request->data['User']['active'] = '1';
		  $this->request->data['User']['user_password'] = $this->request->data['User']['password'];
		  		  
            $this->User->create();
            if ($this->User->save($this->request->data)) {
				
				$this->registeremail($this->request->data);

                $this->Flash->flash('You have successfully registered.');
				$customer_data = $this->User->find('first', array('order' => 'User.id DESC', 'conditions' => array('email' => $this->request->data['User']['email'])));

 
			  
		if ($customer_data['User']['password'] == Security::hash($this->request->data['User']['password'], 'sha1', true)) {

					  
		$this->Session->write('customer_data', $customer_data);

		$this->Session->write('User.id', $customer_data['User']['id']);
		$this->Session->write('User.name', $customer_data['User']['name']);
		
		}
			 
		if(@$this->Session->read('custom_purl') != '') {	
		 
		 return $this->redirect($this->Session->read('custom_purl'));
		 
		}	 
 			 
					 if($this->Session->read('Shop')) {

				return 	$this->redirect('/shop/address');
			}
			else {
				 $this->Flash->success('Thank you for registring with us.');
				return 	$this->redirect('/customer/register');
			}



            } else {
                $this->Flash->flash('The user could not be saved. Please, try again.');
            }
        }
	 
    }

 public function customer_login() {
	     if(@$this->Session->read('User.id') != '') {			
			return 	$this->redirect('/customer/myaccount');
		 }
	 			$this->layout = "default";
		        $shop = $this->Session->read('Shop');
	  if ($this->request->is('post') && $this->request->data['mode'] == 'login') {
		App::uses('Sanitize', 'Utility');
		$clean = new Sanitize();
		$clean->clean($_POST);
		$customer_data = $this->User->find('first', array('order' => 'User.id DESC', 'conditions' => array('email' => $this->request->data['email'])));
		if ($customer_data['User']['password'] == Security::hash($this->request->data['password'], 'sha1', true)) {
		$this->Session->write('customer_data', $customer_data);
		$this->Session->write('User.id', $customer_data['User']['id']);
		$this->Session->write('User.name', $customer_data['User']['name']);
		if(@$this->Session->read('custom_purl') != '') {	
		 return $this->redirect($this->Session->read('custom_purl'));
		}	 
		 if($this->Session->read('Shop')) {
			return 	$this->redirect('/shop/cart');
		 }
else {
	return 	$this->redirect('/customer/myaccount');
    }
	} 
	else {
    	$this->Session->delete('Flash');
		$this->Flash->danger('Login error. Check your email and/or password!');
		}
	  }
    }

	
	 public function customer_changepassword() {

    	 $this->layout = "default";

		 if(@$this->Session->read('User.id') == '') {
				
				        return $this->redirect('/customer/register');
			}			
		
	
        if ($this->request->is('post') || $this->request->is('put')) {
			
			$this->request->data['id'] = $this->Session->read('User.id');

			
            if ($this->User->save($this->request->data)) {
                $this->Flash->flash('Your Password has been updated successfully.');
						$this->Session->write('customer_data', $this->User->read(null, $this->Session->read('User.id')));

             		//  return $this->redirect('/customer/myaccount');

            } else {
                $this->Flash->flash('The Profile could not be updated. Please, try again.');
            }
        } 
		
		 $customer_data = $this->Session->read('customer_data');
         $this->set(compact('customer_data'));

 
    }
	
	 public function sociallogin() {
	     if(!@$this->Session->read('User.id') == '') {
				
				        return $this->redirect('/');
			}
	     $this->layout = false;
	   App::import('Vendor', 'autoload', array('file' => 'googleAuth/autoload.php'));  
	     //Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('829165204442-3n2a8gpfvou4o2eckq6i4iu638vrf0qn.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('kQvUSmqfQ0rzpaOqTtq57Ald');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('https://www.confessiondiary.com/sociallogin');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//This $_GET["code"] variable value received after user has login into their Google Account redirct to PHP script then this variable value has been received
if(!empty($_GET["code"]))
{
   $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
	
 //It will Attempt to exchange a code for an valid authentication token.

	
		  $_SESSION['access_token'] = $token['access_token'];

  //Create Object of Google Service OAuth 2 class
  $google_service = new Google_Service_Oauth2($google_client);

  //Get user profile data from google
  $user = $google_service->userinfo->get();

 //This condition will check there is any error occur during geting authentication token. If there is no any error occur then it will execute if block of code/
		try {
			if(!empty($user)){
				$result = $this->User->findByEmail( $user['email'] );
				if(!empty( $result )){
				    $this->Session->write('data', $result);
				    
		$this->Session->write('User.id', $result['User']['id']);
		$this->Session->write('User.name', $result['User']['first_name']);
		$this->Session->write('User.email', $result['User']['email']);
		$this->Session->write('User.gender', $result['User']['gender']);
		$this->Session->write('User.image', $result['User']['image']);
			$this->Session->write('User.username', $result['User']['username']);
					if($this->Auth->login($result['User'])){
					$this->Flash->flash('GOOGLE_LOGIN_Success');
						$this->redirect('/users/profile');
					}else{
					$this->Flash->flash('GOOGLE_LOGIN_Failded');
						$this->redirect('/sociallogin');
					}
						
				}else{
					$data = array();
					$data['User']['email'] = $user['email'];
					$data['User']['first_name'] = $user['given_name'];
					$data['User']['last_name'] = $user['family_name'];
				//	$data['social_id'] = $user['id'];
			    	$data['User']['image'] = $user['picture'];
					$data['User']['gender'] = $user['gender'];
					$data['User']['role'] ='user';
					$uid=$this->User->find('first',array('order'=>'id DESC'));
					$uid=$uid['User']['id']+10;
					$data['User']['username'] =$user['given_name'].$uid;
			    
					$this->User->save( $data );
						
					if($this->User->save( $data )){
						$data['User']['id'] = $this->User->getLastInsertID();
						$this->Session->write('data', $data);
					
		$this->Session->write('User.id', $data['User']['id']);
		$this->Session->write('User.name', $data['User']['first_name']);
		$this->Session->write('User.email', $data['User']['email']);
		$this->Session->write('User.gender', $data['User']['gender']);
		$this->Session->write('User.image', $data['User']['image']);
		$this->Session->write('User.username', $data['User']['username']);
						if($this->Auth->login($data)){
						  $this->Flash->flash('GOOGLE_LOGIN_Success');
							$this->redirect('/users/profile');
						}else{
						  $this->Flash->flash('GOOGLE_LOGIN_FAILURE');
							$this->redirect('/sociallogin');
						}
							
					}else{
						  $this->Flash->flash('GOOGLE_LOGIN_FAILURE');
						$this->redirect('/sociallogin');
					}
					}
					
			}else{
			  $this->Flash->flash('GOOGLE_LOGIN_FAILURE');
			$this->redirect('/sociallogin');
			}
		}
		catch (Exception $e) {
		     $this->Flash->flash('GOOGLE_LOGIN_FAILURE');
		
			$this->redirect('/sociallogin');
		}
 
}
$login_button = '<a href="'.$google_client->createAuthUrl().'"><img src="https://user-images.githubusercontent.com/1531669/41761606-83b5bd42-762a-11e8-811a-b78fdf68bc04.png" /></a>';
 $this->set(compact('login_button'));

	     
	 }
	 
	 
	 
	 
	 ///////////////////////////////////
	 //////////////////////////////////
	  public function sociallogout() {
	      	   
	   App::import('Vendor', 'autoload', array('file' => 'googleAuth/autoload.php'));  
	     //Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('829165204442-3n2a8gpfvou4o2eckq6i4iu638vrf0qn.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('kQvUSmqfQ0rzpaOqTtq57Ald');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('https://www.confessiondiary.com/sociallogin');

//
$google_client->addScope('email');

$google_client->addScope('profile');

	    $google_client->revokeToken();
$this->Session->write('data', '');
	$this->Session->write('User.id', '');
	$this->Session->write('User.email', '');
	$this->Session->write('User.name', '');
	$this->Session->write('User.gender', '');
		$this->Session->write('User.image', '');
		$this->Session->write('User.username', '');

session_destroy();
//redirect page to index.php
 return $this->redirect('/');
  
	  }
	  
	   public function profile() {

    	 $this->layout = "default";

		 if(@$this->Session->read('User.id') == '') {
				
				        return $this->redirect('/');
			}
		$uid=$this->Session->read('User.id');	
		$this->loadModel('Group');
			
			$groupname = $this->Group->find('first', array(
			'recursive' => 0,
			'conditions' => array(
			'Group.user_id' => $uid	
			),
		)); 
		$this->set(compact('groupname'));
			$this->loadModel('Complaint');
			
			$complaintcount = $this->Complaint->find('count', array(
			'recursive' => 0,
			'conditions' => array(
			'Complaint.user_id' => $uid	
			),
		)); 
		$this->set(compact('complaintcount'));
		
		$this->loadModel('Comment');
			
			$commentcount = $this->Comment->find('count', array(
			'recursive' => 0,
			'conditions' => array(
			'Comment.user_id' => $uid	
			),
		)); 
		$this->set(compact('commentcount'));
			$this->loadModel('Question');
			
			$questioncount = $this->Question->find('count', array(
			'recursive' => 0,
			'conditions' => array(
			'Question.user_id' => $uid	
			),
		)); 
		$this->set(compact('questioncount'));
		$this->loadModel('Answer');
			
			$answercount = $this->Answer->find('count', array(
			'recursive' => 0,
			'conditions' => array(
			'Answer.user_id' => $uid	
			),
		)); 
		$this->set(compact('answercount'));
		
		$total_points=$answercount+$questioncount+$commentcount+$complaintcount;
			$this->set(compact('total_points'));
			
			
					
						
					 
					  	$this->loadModel('Group');
					  		$resultsubscribe = $this->Group->find('all', array(
			'recursive' => 0,
			'conditions' => array(
			'Group.members LIKE' =>"%" . $this->Session->read('User.email') . "%"	
			),
		)); 
		
		$this->set(compact('resultsubscribe'));
	
	   }
	 public function customer_myaccount() {

    	 $this->layout = "default";

		 if(@$this->Session->read('User.id') == '') {
				
				        return $this->redirect('/customer/register');
			}			
		
	
        if ($this->request->is('post') || $this->request->is('put')) {
			
			$this->request->data['id'] = $this->Session->read('User.id');

			
            if ($this->User->save($this->request->data)) {
                $this->Flash->flash('Your Profile has been updated successfully.');
						$this->Session->write('customer_data', $this->User->read(null, $this->Session->read('User.id')));

             		  return $this->redirect('/customer/myaccount');

            } else {
                $this->Flash->flash('The Profile could not be updated. Please, try again.');
            }
        } 
		
		 $customer_data = $this->Session->read('customer_data');
         $this->set(compact('customer_data'));
$details = $this->User->find('first', array(
		 	'recursive' => 0,	
			'order' => array(
				'User.id' => 'asc'
			),
			'conditions' => [
				'User.id' =>$this->Session->read('User.id'),
               
            ],
		));
 $this->set(compact('details'));
    }
	
	
	
	 public function customer_logout() {
		 
		$this->layout = "default";

		$this->Session->write('customer_data', '');

		$this->Session->write('User.id', '');
		$this->Session->write('User.name', '');
        $this->Session->write('Shop','');

		return 	$this->redirect('/');

    }
	
 	
 public function customer_orderdetails($id) {
	 
	 	 	$this->layout = "default";
					
			$this->loadModel('Order');
			
			$order_data = $this->Order->find('first', [
			'contain' => array('OrderItem.Product'),
            'recursive' => 1,
            'conditions' => [
                'Order.id' => $id
            ]
        ]);
				
		if (empty($order_data)) {
            return $this->redirect('/customer/myaccount');
        }
       		
	    $this->set(compact('order_data'));

	}

    public function customer_orderhistory() {
		
			 			$this->layout = "default";

		
		 if(@$this->Session->read('User.id') == '') {
				
				        return $this->redirect('/customer/register');

			}
		
		    $this->loadModel('Order');
			
			$order_data = $this->Order->find('all',
			array(			
 			'conditions' => array(
				'Order.user_id' => $this->Session->read('User.id'),
			),
			'order' => array(
                    'Order.created' => 'desc'
                ),
		));
		
 		
	        $this->set(compact('order_data'));

					
    }



    public function customer_dashboard() {
    }

 

    public function admin_dashboard() {
		
		$this->loadModel('Order');
			
		$orders = $this->Order->find('all',
			array(
 			'conditions' => array(
			 
			),
			'order' => array(
                    'Order.created' => 'desc'
                ),
		));
		
		$this->set(compact('orders'));

		$total_orders = $this->Order->find('count');
		
		$this->loadModel('Enquiry');					 
		$total_enquiries = $this->Enquiry->find('count');
		
		$this->loadModel('Product');					 
		$total_products = $this->Product->find('count');
		
		$this->loadModel('User');					 
		$total_users = $this->User->find('count');
		
		$this->set(compact('total_orders','total_enquiries','total_products','total_users'));
    }

 
 
	 public function Xadmin_index() { 	
   
	   $id = 1;		
	   $this->User->id = $id;	
	   
	   if (!$this->User->exists()) {		
			throw new NotFoundException('Invalid user');		
	   }	
	   if ($this->request->is('post') || $this->request->is('put')) {	
	   if ($this->User->save($this->request->data)) {			
			$this->Session->setFlash('Password changed success!');			
			$this->redirect(array('action' => 'index'));			
	   } else {		
			$this->Session->setFlash('The Password could not be saved. Please, try again.');		
	   }	
	   } 
	   else {	
	   $this->request->data = $this->User->read(null, $id);	
	   }
	}
	

  

    public function admin_index() {
  	
		$users = $this->User->find('all', array(
		 	'recursive' => 0,	
			'order' => array(
				'User.id' => 'desc'
			),
			'conditions' => array(
			'User.id != 1',
			),
		));
				
		$this->set(compact('users'));
    }
	
	 public function X2admin_index() { 	
   
	   $id = 1;		
	   $this->User->id = $id;	
	   
	   if (!$this->User->exists()) {		
			throw new NotFoundException('Invalid user');		
	   }	
	   if ($this->request->is('post') || $this->request->is('put')) {	
	   if ($this->User->save($this->request->data)) {			
			$this->Session->setFlash('Password changed success!');			
			$this->redirect(array('action' => 'index'));			
	   } else {		
			$this->Session->setFlash('The Password could not be saved. Please, try again.');		
	   }	
	   } 
	   else {	
	   $this->request->data = $this->User->read(null, $id);	
	   }
	}
	
////////////////////////////////////////////////////////////

    public function admin_view($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException('Invalid user');
        }
        $this->set('user', $this->User->read(null, $id));
    }

////////////////////////////////////////////////////////////

    public function admin_add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Flash->flash('The user has been saved');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->flash('The user could not be saved. Please, try again.');
            }
        }
    }

////////////////////////////////////////////////////////////

    public function admin_edit($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException('Invalid user');
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Flash->flash('The user has been saved');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->flash('The user could not be saved. Please, try again.');
            }
        } else {
            $this->request->data = $this->User->read(null, $id);
        }
    }

////////////////////////////////////////////////////////////

    public function admin_password($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException('Invalid user');
        }
        if ($this->request->is('post') || $this->request->is('put')) {
			
			$this->request->data['User']['user_password'] = $this->request->data['User']['password'];

            if ($this->User->save($this->request->data)) {
                $this->Flash->flash('The user has been saved');
                $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->flash('The user could not be saved. Please, try again.');
            }
        } else {
            $this->request->data = $this->User->read(null, $id);
        }
    }

////////////////////////////////////////////////////////////

    public function admin_delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException('Invalid user');
        }
        if ($this->User->delete()) {
            $this->Flash->flash('User deleted');
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->flash('User was not deleted');
        return $this->redirect(['action' => 'index']);
    }

////////////////////////////////////////////////////////////

}
