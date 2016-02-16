<?php
App::uses('StudentsSection', 'Model');

/**
 * StudentsSection Test Case
 */
class StudentsSectionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.students_section',
		'app.section',
		'app.subject',
		'app.user',
		'app.sede',
		'app.student',
		'app.user_tlf',
		'app.period',
		'app.schedule',
		'app.sections_schedule'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->StudentsSection = ClassRegistry::init('StudentsSection');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->StudentsSection);

		parent::tearDown();
	}

}
