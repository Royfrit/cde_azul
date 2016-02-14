<?php
App::uses('AppController', 'Controller');
/**
 * Notes Controller
 *
 * @property Note $Note
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class NotesController extends AppController {

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
		$this->Note->recursive = 0;
		$this->set('notes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Note->exists($id)) {
			throw new NotFoundException(__('Invalid note'));
		}
		$options = array('conditions' => array('Note.' . $this->Note->primaryKey => $id));
		$this->set('note', $this->Note->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Note->create();
			if ($this->Note->save($this->request->data)) {
				$this->Flash->success(__('The note has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The note could not be saved. Please, try again.'));
			}
		}
		$students = $this->Note->Student->find('list');
		$subjects = $this->Note->Subject->find('list');
		$periods = $this->Note->Period->find('list');
		$this->set(compact('students', 'subjects', 'periods'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Note->exists($id)) {
			throw new NotFoundException(__('Invalid note'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Note->save($this->request->data)) {
				$this->Flash->success(__('The note has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The note could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Note.' . $this->Note->primaryKey => $id));
			$this->request->data = $this->Note->find('first', $options);
		}
		$students = $this->Note->Student->find('list');
		$subjects = $this->Note->Subject->find('list');
		$periods = $this->Note->Period->find('list');
		$this->set(compact('students', 'subjects', 'periods'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Note->id = $id;
		if (!$this->Note->exists()) {
			throw new NotFoundException(__('Invalid note'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Note->delete()) {
			$this->Flash->success(__('The note has been deleted.'));
		} else {
			$this->Flash->error(__('The note could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function own($id=null,$v=null)
	{
		$search=null;
		$opt=1;
		$this->set(compact('opt'));

		if((!empty($this->request->query['search'])))
		{
		$search = $this->request->query['search'];
			// preg_replace, lo que hace este metodo , es realizar una busqueda y sustitucion de un valor especial, '' patron a remplazar que no es ninguno, y usamos en la search que es lo que viene de la consulta.
			$search = preg_replace('/[^a-zA-ZñÑáéíóúÁÉÍÓÚ0-9 ]/', '', $search);
			$terms = explode(' ', trim($search));
			$terms = array_diff($terms, array(''));

			foreach($terms as $term)
			{
				$terms1[] = preg_replace('/[^a-zA-ZñÑáéíóúÁÉÍÓÚ0-9 ]/', '', $term);
				$conditions[] = array('Section.subject_id LIKE' => '%' . $term . '%');
			}
			$section = $this->Note->Subject->Section->find('all', array('recursive' => -1, 'conditions' => $conditions, 'limit' => 200));
			$terms1 = array_diff($terms1, array(''));
			//mandar los datos , los valores de nuestra busqueda terms1
			//debug($users[0]['User']);

			$opt=2;
			$this->set(compact('section', 'terms1','opt'));

		}
		$this->set(compact('search'));

	debug($v);
	if (!empty($v)) {

		$options = array('conditions' => array('Subject.id' => $search));
		$id3 = $this->Note->Subject->find('first', $options);

		$options = array('conditions' => array('Section.id' => $v));
		$id4 = $this->Note->Subject->Section->find('first', $options);

			$data[] = array('student_id'=> $id,'subject_id' => $id3['Subject']['id'], 'period_id' => $id4['Section']['period_id']);
			debug($data[0]);

			$this->Note->create();
			if ($this->Note->save($data[0])) {
				$this->Flash->success(__('Se Inscribio la Materia.'));
				//return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('Error'));
			}

	}


		$schedules = $this->Note->Subject->Section->Schedule->find('all');
		$users = $this->Note->Student->User->find('list');
		$students = $this->Note->Student->find('list');
		$sections = $this->Note->Subject->Section->find('all');
		$subjects = $this->Note->Subject->find('list');
		$periods = $this->Note->Period->find('list');
		$this->set(compact('students', 'subjects', 'periods','users','sections','schedules'));
		//debug($sections);
	}

}
