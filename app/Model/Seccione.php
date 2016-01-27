<?php
App::uses('AppModel', 'Model');
/**
 * Seccione Model
 *
 * @property Horario $Horario
 * @property Aula $Aula
 */
class Seccione extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'numero';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'horario_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'numero' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'aula_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Horario' => array(
			'className' => 'Horario',
			'foreignKey' => 'horario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Aula' => array(
			'className' => 'Aula',
			'foreignKey' => 'aula_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
