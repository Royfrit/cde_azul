<?php
App::uses('AppController', 'Controller');
/**
 * Horarios Controller
 *
 * @property Horario $Horario
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class HorariosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Horario->recursive = 0;
		$this->set('horarios', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Horario->exists($id)) {
			throw new NotFoundException(__('Invalid horario'));
		}
		$options = array('conditions' => array('Horario.' . $this->Horario->primaryKey => $id));
		$this->set('horario', $this->Horario->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Horario->create();
			if ($this->Horario->save($this->request->data)) {
				$this->Flash->success(__('The horario has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The horario could not be saved. Please, try again.'));
			}
		}
		$seccions = $this->Horario->Seccion->find('list');
		$aulas = $this->Horario->Aula->find('list');
		$materias = $this->Horario->Materium->find('list');
		$this->set(compact('seccions', 'aulas', 'materias'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Horario->exists($id)) {
			throw new NotFoundException(__('Invalid horario'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Horario->save($this->request->data)) {
				$this->Flash->success(__('The horario has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The horario could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Horario.' . $this->Horario->primaryKey => $id));
			$this->request->data = $this->Horario->find('first', $options);
		}
		$seccions = $this->Horario->Seccion->find('list');
		$aulas = $this->Horario->Aula->find('list');
		$materias = $this->Horario->Materium->find('list');
		$this->set(compact('seccions', 'aulas', 'materias'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Horario->id = $id;
		if (!$this->Horario->exists()) {
			throw new NotFoundException(__('Invalid horario'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Horario->delete()) {
			$this->Flash->success(__('The horario has been deleted.'));
		} else {
			$this->Flash->error(__('The horario could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
