<?php
/**
 * Materia Fixture
 */
class MateriaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => false, 'key' => 'primary'),
		'seccion_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => false),
		'nombre' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 100, 'unsigned' => false),
		'status' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 15, 'unsigned' => false),
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
			'seccion_id' => 1,
			'nombre' => 1,
			'status' => 1
		),
	);

}
