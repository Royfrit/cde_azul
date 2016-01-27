<?php
App::uses('UsuTlf', 'Model');

/**
 * UsuTlf Test Case
 */
class UsuTlfTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.usu_tlf',
		'app.usuarios'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UsuTlf = ClassRegistry::init('UsuTlf');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UsuTlf);

		parent::tearDown();
	}

}
