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

<<<<<<< HEAD

/*
 * index method
 *
 * @return void
 
=======
/**
 * index method
 *
 * @return void
 */
>>>>>>> origin/Lee-Backend
	public function index() {
		$this->Note->recursive = 0;
		$this->set('notes', $this->Paginator->paginate());
	}
<<<<<<< HEAD
*/
=======

>>>>>>> origin/Lee-Backend
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
<<<<<<< HEAD
				return $this->redirect(array('action' => 'mainmenu'));
=======
				return $this->redirect(array('action' => 'index'));
>>>>>>> origin/Lee-Backend
			} else {
				$this->Flash->error(__('The note could not be saved. Please, try again.'));
			}
		}
		$students = $this->Note->Student->find('list');
		$subjects = $this->Note->Subject->find('list');
		$periods = $this->Note->Period->find('list');
		$this->set(compact('students', 'subjects', 'periods'));
	}

<<<<<<< HEAD

=======
/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
>>>>>>> origin/Lee-Backend
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
<<<<<<< HEAD


		
		$ss = $this->Note->Section->SectionsSchedule->find('all');
		$schedules = $this->Note->Section->Schedule->find('all');
		$users = $this->Note->Student->User->find('list');
		$students = $this->Note->Student->find('list');
		$sections = $this->Note->Section->find('all');
		$subjects = $this->Note->Section->Subject->find('list');
		$periods = $this->Note->Section->Period->find('list');

		if ((!empty($id)) && (!empty($this->request->query['search']))) {
		$notes=$this->Note->find('first', array('conditions' => array('Section.subject_id' => $this->request->query['search'],'Note.student_id' => $id))); 
		//debug($notes);
		}

		$this->set(compact('students', 'subjects', 'periods','users','sections','schedules',"ss"));
		

=======
>>>>>>> origin/Lee-Backend
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
<<<<<<< HEAD
			$section = $this->Note->Section->find('all', array('recursive' => -1, 'conditions' => $conditions, 'limit' => 200));
=======
			$section = $this->Note->Subject->Section->find('all', array('recursive' => -1, 'conditions' => $conditions, 'limit' => 200));
>>>>>>> origin/Lee-Backend
			$terms1 = array_diff($terms1, array(''));
			//mandar los datos , los valores de nuestra busqueda terms1
			//debug($users[0]['User']);

			$opt=2;
<<<<<<< HEAD
			$this->set(compact('section', 'terms1','opt','notes','id'));
=======
			$this->set(compact('section', 'terms1','opt'));
>>>>>>> origin/Lee-Backend

		}
		$this->set(compact('search'));

<<<<<<< HEAD
	if (!empty($v)) {

			$data = array('student_id'=> $id,'section_id' => $v);
			
			$this->Note->create();
			if ($this->Note->save($data)) {
				$this->Flash->success(__('Se Inscribio la Materia.'));
				$opt=3;
			} else {
				$this->Flash->error(__('Error'));
			}
			

	}
	

	if ($opt==3) {
		$this->Note->Section->StudentsSection->create();
		if ($this->Note->Section->StudentsSection->save($data)) {
			$opt=4;	
		}
	}
	
	if ($opt==4) {
		
		$data1=$this->Note->Section->find('first',array('conditions' => array('Section.id' => $v)));
		$data2 = array('id' => $data1['Section']['id'] , 'quantity' => $data1['Section']['quantity']-'1');


		if ($this->Note->Section->save($data2)) {
			return $this->redirect(array('action' => 'own',$id));
		}
		
		
	}



	}



	public function owndelete($id=null,$v=null,$noteid=null) {
	
		
		if ($this->Note->delete($noteid)) {
			$opt=1;
		} else {
			$this->Flash->error(__('El Registro no pudo ser Eliminado'));
		}
	
		
		if ($opt==1) {
			$data1 = $this->Note->Section->find('first', array('conditions' => array('Section.id' => $v)));
			$data2 = array('id' => $data1['Section']['id'] , 'quantity' => $data1['Section']['quantity']+'1');

			if ($this->Note->Section->save($data2)) {
				$opt=2;
			
		}
		}
		
		
		if ($opt==2) {
			$data1 = $this->Note->Section->find('first', array('conditions' => array('Section.id' => $v)));
			$data2 = array('id' => $data1['Section']['id'] , 'quantity' => $data1['Section']['quantity']+'1');

			$data3 = $this->Note->Section->StudentsSection->find('first', array('conditions' => array('StudentsSection.section_id' => $v,'StudentsSection.student_id' => $id)));

			if ($this->Note->Section->StudentsSection->delete($data3['StudentsSection']['id'])) {
			$this->Flash->error(__('El Registro fue Eliminado'));
			return $this->redirect(array('action' => 'own',$id));
		} 


		}
	}


	public function profcharge($id=null){
		if(isset($id)){
			$sections = $this->Note->Section->find('first' , array('conditions' => array('Section.id'=>$id)));

			$notes= $this->Note->find('all' , array('conditions' => array('Note.section_id' => $id)));
			$students = $this->Note->Section->Student->find('all');

			$this->set(compact('id','sections','notes','students'));
		}

		if((!empty($this->request->query['student_id']))){

			$data = array('id' =>$this->request->query['id'],'student_id'=> $this->request->query['student_id'],'section_id' => $id, 'note' => $this->request->query['Update']);
			debug($data);
			if ($this->Note->save($data)) {
				return $this->redirect(array('action' => 'profcharge',$id));
			} else {
				$this->Flash->error(__('Error'));
			}
		}

		$Update = null;
		$this->set(compact('Update'));

	}

	public function pdf_estudio($id = null,$x = null) {
    // increase memory limit in PHP 
    ini_set('memory_limit', '512M');
 

    
	$users = $this->Note->Student->find('first', array('conditions' => array('Student.id' => $id)));


	$this->set(compact('id','users'));

}

	public function pdf_inscripcion($id = null,$x = null) {
    // increase memory limit in PHP 
    ini_set('memory_limit', '512M');
 

    
	$users = $this->Note->Student->find('first', array('conditions' => array('Student.id' => $id)));
	$sede = $this->Note->Student->User->Sede->find('first',array('conditions' => array('Sede.id' => $users['User']['sede_id'])));

	$student = $this->Note->Student->find('first',array('conditions' => array('Student.user_id' => $users['User']['id'])));

	$periods = $this->Note->Section->Period->find('first',array('conditions' => array('Period.id' => '1'))); //Ejemplo para el Periodo 1
	
	$subjects = $this->Note->Section->Subject->find('all');
	$this->set(compact('id','users','sede','student','periods','subjects'));

}

public function pdf_ownnotes($id = null,$x = null) {
    // increase memory limit in PHP 
    ini_set('memory_limit', '512M');
 

    
	$users = $this->Note->Student->find('first', array('conditions' => array('Student.id' => $id)));
	$sede = $this->Note->Student->User->Sede->find('first',array('conditions' => array('Sede.id' => $users['User']['sede_id'])));

	$student = $this->Note->Student->find('first',array('conditions' => array('Student.user_id' => $users['User']['id'])));

	$periods = $this->Note->Section->Period->find('first',array('conditions' => array('Period.id' => '1'))); //Ejemplo para el Periodo 1
	
	$subjects = $this->Note->Section->Subject->find('all');
	$this->set(compact('id','users','sede','student','periods','subjects'));

}

=======
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
>>>>>>> origin/Lee-Backend

}
