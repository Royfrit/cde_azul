<?php
App::uses('Section', 'Model');

/**
 * Section Test Case
 */
class SectionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.section',
		'app.subject',
		'app.user',
		'app.sede',
		'app.student',
		'app.user_tlf',
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
		$this->Section = ClassRegistry::init('Section');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Section);

		parent::tearDown();
	}

}
