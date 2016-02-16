<?php
App::uses('UserTlf', 'Model');

/**
 * UserTlf Test Case
 */
class UserTlfTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user_tlf',
		'app.user',
		'app.sede',
		'app.student',
		'app.users_user_tlf'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UserTlf = ClassRegistry::init('UserTlf');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserTlf);

		parent::tearDown();
	}

}
