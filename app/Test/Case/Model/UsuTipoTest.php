<?php
App::uses('UsuTipo', 'Model');

/**
 * UsuTipo Test Case
 */
class UsuTipoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.usu_tipo',
		'app.usuarios'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UsuTipo = ClassRegistry::init('UsuTipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UsuTipo);

		parent::tearDown();
	}

}
