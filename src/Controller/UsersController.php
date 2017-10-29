<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 */
class UsersController extends AppController{


	public function index(){
		
		$users = $this->paginate($this->Users);
		$this->set('users', $users);
	}


	public function view($name){
		echo "detalle usuario  ", $name;
		exit();
	}

	public function add(){
		echo " agregar usuario";
		exit();
	}
}
