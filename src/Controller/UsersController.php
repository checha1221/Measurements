<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 */
class UsersController extends AppController{



	public function login(){

	if ($this->request->is('post')) {
		$user= $this->Auth->identify();
		if ($user) {
			$this->Auth->setUser($user);
			return $this->redirect($this->Auth->redirectUrl());
			# code...
		}else{
			$this->Flash->error('Datos son Invalidos, Intente Nuevamente',['key' =>'auth']);
		}
		
	}
}

	
	public function logout(){
		$this->redirect($this->Auth->logout());

	}

	public function home(){
       $this->render();
	}

	public function index(){
		
		$users = $this->paginate($this->Users);
		$this->set('users', $users);
	}


	public function view($name){
		echo "detalle usuario  ", $name;
		exit();
	}

	public function add(){
		$user = $this->Users->newEntity();

if ($this->request->is('post')) {

	$user = $this->Users->patchEntity($user, $this->request->data);
	if ($this->Users->save($user)) {
		$this->Flash->success("El Usuario Ha Sido Creaddo Correctamente");
		return $this->redirect(['controller' => 'Users', 'action' =>'index']);
		# code...
	}else{
		$this->Flash->error("El Usuario No Puso Ser Creado.Por Favor, Intente Nuevamente. ");
	}
}
		$this->set(compact('user'));
	}
}
