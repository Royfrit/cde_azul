<?php
App::uses('Semestre', 'Model');

/**
 * Semestre Test Case
 */
class SemestreTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.semestre',
		'app.materia',
		'app.seccion',
		'app.horario',
		'app.aula',
		'app.estudiante',
		'app.user',
		'app.nota'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Semestre = ClassRegistry::init('Semestre');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Semestre);

		parent::tearDown();
	}

}
