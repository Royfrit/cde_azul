<?php
App::uses('Student', 'Model');

/**
 * Student Test Case
 */
class StudentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.student',
		'app.user',
		'app.sede',
		'app.user_tlf',
		'app.section',
		'app.subject',
		'app.period',
		'app.schedule',
		'app.sections_schedule',
		'app.students_section'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Student = ClassRegistry::init('Student');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Student);

		parent::tearDown();
	}

}
