<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses ( 'Controller', 'Controller' );

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	public $components = array (
			'Session',
			 
			'Security'=>array('csrfExpires'=>'+1 hour'),
			'Paginator',
			'Auth' => array (
					'loginAction' => array (
							'controller' => 'users',
							'action' => 'login' 
					),
					'authError' => 'Did you really think you are allowed to see that?',
					'authenticate' => array (
							'Form' => array (
									'fields' => array (
											'username' => 'email',
											'password' => 'password' 
									),
									'passwordHasher' => 'Simple',
									'userModel' => 'User' 
							// 'passwordHasher' => 'Blowfish'
														) 
					) 
			) 
	);
	
	// ...
	public $helpers = array (
			'Session',
			 
			'Html',
			'Time',
			'Paginator' 
		 
	);
	public function beforeFilter() {
		parent::beforeFilter ();
		if (! $this->Session->read ( 'firstVisit' ) || $this->Session->read ( 'firstVisit' ) == null) {
			$this->Session->write ( 'firstVisit', 0 );
		} 

		else {
			// $this->Session->delete('firstVisit');
		}
		//$this->set ( 'LatestEvents', $this->getLatestEvents () );
		 
		
		if ($this->Auth->user ( 'role' ) == 'staff') {
			$this->layout = 'gotni_staff';
		}
		$this->Auth->allow ( 'index', 'view', 'display' );
	}
	private function getLatestEvents() {
		$this->loadModel ( 'Event' );
		$this->Event->recursive = 0;
		
		$latestEvents = $this->Event->find ( 'all', array (
				//'conditions' => array (
					//	'startdate >=' => date ( 'Y-m-d' ) 
				//),
				
				'limit' => 5,
				'order' => array (
						'Event.startdate' => 'desc' 
				) 
		) );
		
		return $latestEvents;
	}
	
	
 
}
