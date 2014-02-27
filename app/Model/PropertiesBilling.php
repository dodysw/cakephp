<?php
App::uses('AppModel', 'Model');
/**
 * PropertiesBilling Model
 *
 * @property Property $Property
 */
class PropertiesBilling extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'billing_type';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'billing_type' => array(
			'inList' => array(
				'rule' => array('inList', array('TELKOM', 'PLN', 'FIRSTMEDIA', 'INDOVISION', 'LINGKUNGAN', 'KEBERSIHAN')),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'period' => array(
			'inList' => array(
				'rule' => array('inList', array('YEARLY', 'MONTHLY', 'WEEKLY', 'DAILY')),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Property' => array(
			'className' => 'Property',
			'foreignKey' => 'property_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
