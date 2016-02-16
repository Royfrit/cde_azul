<?php
App::uses('Period', 'Model');

/**
 * Period Test Case
 */
class PeriodTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.period',
		'app.section',
		'app.subject',
		'app.user',
		'app.sede',
		'app.student',
		'app.students_section',
		'app.user_tlf',
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
		$this->Period = ClassRegistry::init('Period');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Period);

		parent::tearDown();
	}

}
