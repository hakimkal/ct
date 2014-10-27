<?php

// app/Model/User.php
App::uses ( 'AppModel', 'Model' );
App::uses ( 'SimplePasswordHasher', 'Controller/Component/Auth' );

class User extends AppModel {
	public $validate = array (
			'email' => array (
					'required' => array (
							'rule' => array (
									'notEmpty' 
							),
							'message' => 'A username is required' 
					) ,
					
					'requireEmail'=>array(
							'rule'=>'email',
							'message'=>'Provded Email is not a valid email'
					)
			),
			'password' => array (
					'required' => array (
							'rule' => array (
									'notEmpty' 
							),
							'message' => 'A password is required' 
					) 
			),
			'role' => array (
					'valid' => array (
							'rule' => array (
									'inList',
									array (
											'staff',
											'member' 
									) 
							),
							'message' => 'Please enter a valid role',
							'allowEmpty' => false 
					) 
			) 
	);
	
	
	public function beforeFind($query){
		if (isset($query['conditions'][$this->alias]['email'])) {
			$query['conditions'][$this->alias] ['email'] = strtolower( $query['conditions'][$this->alias] ['email'] );
				
		}  
		return $query;
	
	}
	public function beforeSave($options = array()) {
		if (isset ( $this->data [$this->alias] ['password'] )) {
		 
			$passwordHasher = new SimplePasswordHasher ();
			
			$this->data [$this->alias] ['password'] = $passwordHasher->hash ( $this->data [$this->alias] ['password'] );
			$this->data [$this->alias] ['email'] = strtolower( $this->data [$this->alias] ['email'] );
				
			
		 
		}
		return true;
	}
}

?>