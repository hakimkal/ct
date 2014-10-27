<?php
App::uses ( 'CakeEmail', 'Network/Email' );
// app/Controller/UsersController.php
class UsersController extends AppController {
	
	public function beforeFilter() {
		 
	//parent::beforeFilter ();
		// Allow Members to register and logout.
		if ($this->Auth->user ( 'role' ) == 'staff') {
			$this->layout = 'dashboard';
		}
		$this->Auth->allow (   'processContact', 'login', 'logout', 'facebookRegister' );
	}
	public function login() {
		$this->set ( "title_for_layout", "Login" );
		
		if ($this->request->is ( 'post' ) || $this->Auth->user ( 'id' ) != null) {
			//debug ( $this->request->data );
			if ($this->Auth->login ()) {
				$_SESSION['USER_ID'] =$this->Auth->user('id');
				// return $this->redirect($this->Auth->redirect());
				return $this->redirect ( '/dashboard' );
			} else {
				// debug($this->data);
				$this->Session->setFlash ( __ ( 'Invalid username or password, try again' ), 'flash_custom' );
				$this->redirect('/users/login');
			}
		}
	}
	public function logout() {
		$this->Session->setFlash ( 'Goodbye, See you soon' );
		// return $this->redirect($this->Auth->logout());
		
		$this->Auth->logout ();
		$_SESSION['USER_ID'] ="";
		$this->Session->destroy();
		return $this->redirect ( '/' );
	}
	public function index() {
		 
		$this->User->recursive = 1;
		$Users = $this->User->find('all');
		$this->set('Users',$Users);
		$typeOfUsers = 'All Staff';
		$this->set('type_of_users',$typeOfUsers);
		
		
	 
			
		
	}
	public function view($id = null) {
		$this->User->id = $id;
		if (! $this->User->exists ()) {
			throw new NotFoundException ( __ ( 'Invalid user' ) );
		}
		$this->set ( 'user', $this->User->read ( null, $id ) );
	}
	public function add() {
		$this->set ( 'title_for_layout', 'GOTNI User - Create' );
		Configure::write ( 'debug', 2 );
		if ($this->request->is ( 'post' )) {
			// debug($this->data);
			if ($this->request->data ['User'] ['password'] == $this->request->data ['User'] ['password_verify']) {
				$unencrypted_password = $this->request->data ['User'] ['password'];
			}
			$this->User->create ();
			if ($this->User->saveAll ( $this->request->data, array (
					'validates' => true 
			) )) {
				
				$this->Session->setFlash ( __ ( 'Successfully saved User.' ) );
				/*
				 * return $this->redirect ( array ( 'action' => 'index' ) );
				 */
				return $this->redirect ( '/users' );
			}
			$errors = 'Please correct the following errors.' . "\\n";
			// debug($this->User->validationErrors);
			foreach ( $this->User->validationErrors as $v => $k ) {
				foreach ( $k as $value ) {
					// debug($value);
					$errors .= $value . "\\n";
				}
			}
			// debug($errors);
			$this->Session->setFlash ( $errors, 'flash_custom' );
		}
	}
	public function edit($id = null) {
		$this->User->id = $id;
		if (! $this->User->exists ()) {
			throw new NotFoundException ( __ ( 'Invalid user' ) );
		}
		if ($this->request->is ( 'post' ) || $this->request->is ( 'put' )) {
			if ($this->User->save ( $this->request->data )) {
				$this->Session->setFlash ( __ ( 'The user has been saved' ) );
				return $this->redirect ( array (
						'action' => 'index' 
				) );
			}
			$this->Session->setFlash ( __ ( 'The user could not be saved. Please, try again.' ) );
		} else {
			$this->request->data = $this->User->read ( null, $id );
			unset ( $this->request->data ['User'] ['password'] );
		}
	}
	public function delete($id = null) {
		$this->request->onlyAllow ( 'post' );
		
		$this->User->id = $id;
		if (! $this->User->exists ()) {
			throw new NotFoundException ( __ ( 'Invalid user' ) );
		}
		if ($this->User->delete ()) {
			$this->Session->setFlash ( __ ( 'User deleted' ) );
			return $this->redirect ( array (
					'action' => 'index' 
			) );
		}
		$this->Session->setFlash ( __ ( 'User was not deleted' ) );
		return $this->redirect ( array (
				'action' => 'index' 
		) );
	}
	public function processContact() {
		if ($this->request->is ( 'post' )) {
			
			if ($this->sendEmail ( array (
					$this->request->data ['User'] ['email'] 
			), $this->request->data ['User'] ['name'], $this->request->data ['User'] ['subject'], $this->request->data ['User'] ['message'] )) {
				$this->Session->setFlash ( 'Thank you for reaching out to us. A  representative will contact you shortly.' );
				return $this->redirect ( '/contact' );
			} else {
				$this->Session->setFlash ( 'We could not process your contact message, sorry!' );
				return $this->redirect ( '/contact' );
			}
		}
	}
	private function sendEmail($emailFrom = array(), $name, $subject, $message) {
		$email = new CakeEmail ();
		$email->config ( 'mandrill' );
		$email->emailFormat ( 'html' );
		
		$to = array (
				'info@agapefoundation.org.ng' 
		);
		
		$from = $emailFrom [0];
		$viewVars = array (
				'name' => $name,
				'message' => $message,
				'email' => $from,
				'subject' => $subject 
		);
		$email->addHeaders ( array (
				'X-Tags' => array (
						'test' 
				),
				'Reply-To' => $from,
				'track_opens' => true,
				'X-SubAccount' => 'agape-contact',
				'X-GlobalVars' => array (
						array (
								'name' => 'date',
								'content' => date ( 'Y-m-d' ) 
						) 
				),
				'X-Vars' => array (
						array (
								'rcpt' => 'info@agapefoundation.org.ng',
								'vars' => array (
										array (
												'name' => 'email',
												'content' => 'info@agapefoundation.org.ng' 
										),
										array (
												'name' => 'name',
												'content' => 'AGAPE Info Desk' 
										) 
								) 
						) 
				) 
		) );
		
		$email->template ( 'contact', 'default' );
		$email->viewVars ( $viewVars );
		$email->to ( $to );
		$email->bcc ( array (
				"gabriel@agapefoundation.org.ng" => "Gabriel Odom",
				 
				"hakimkal@gmail.com" => "Abdulhakim Haliru"
				 
		) );
		$email->from ( $from, $name );
		$email->subject ( 'Website Visitor Contacted You' );
		
		if ($email->send ()) {
			return true;
		} else {
			return false;
		}
	}
}

?>