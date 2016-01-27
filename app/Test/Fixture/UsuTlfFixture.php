<?php
/**
 * UsuTlf Fixture
 */
class UsuTlfFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'usu_tlfs';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'id_usu' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'num_tlf' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 15, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'tipo_tlf' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 6, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
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
			'id_usu' => 1,
			'num_tlf' => 'Lorem ipsum d',
			'tipo_tlf' => 'Lore'
		),
	);

}
