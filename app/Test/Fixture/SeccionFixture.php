<?php
/**
 * Seccion Fixture
 */
class SeccionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'horario_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'numero' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'aula_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_spanish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'horario_id' => 1,
			'numero' => 1,
			'aula_id' => 1
		),
	);

}
