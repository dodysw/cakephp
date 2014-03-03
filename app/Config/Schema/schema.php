<?php 
class AppSchema extends CakeSchema {

	public function before($event = array()) {
		return true;
	}

	public function after($event = array()) {
	}

	public $acos = array(
		'id' => array('type' => 'integer', 'null' => false, 'length' => 11, 'key' => 'primary'),
		'parent_id' => array('type' => 'integer', 'null' => true),
		'model' => array('type' => 'string', 'null' => true),
		'foreign_key' => array('type' => 'integer', 'null' => true),
		'alias' => array('type' => 'string', 'null' => true),
		'lft' => array('type' => 'integer', 'null' => true),
		'rght' => array('type' => 'integer', 'null' => true),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id')
		),
		'tableParameters' => array()
	);

	public $aros = array(
		'id' => array('type' => 'integer', 'null' => false, 'length' => 11, 'key' => 'primary'),
		'parent_id' => array('type' => 'integer', 'null' => true),
		'model' => array('type' => 'string', 'null' => true),
		'foreign_key' => array('type' => 'integer', 'null' => true),
		'alias' => array('type' => 'string', 'null' => true),
		'lft' => array('type' => 'integer', 'null' => true),
		'rght' => array('type' => 'integer', 'null' => true),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id')
		),
		'tableParameters' => array()
	);

	public $aros_acos = array(
		'id' => array('type' => 'integer', 'null' => false, 'length' => 11, 'key' => 'primary'),
		'aro_id' => array('type' => 'integer', 'null' => false),
		'aco_id' => array('type' => 'integer', 'null' => false),
		'_create' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 2),
		'_read' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 2),
		'_update' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 2),
		'_delete' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 2),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id'),
			'aro_aco_key' => array('unique' => true, 'column' => array('aro_id', 'aco_id'))
		),
		'tableParameters' => array()
	);

	public $bpn_certificate_histories = array(
		'id' => array('type' => 'integer', 'null' => false, 'length' => 11, 'key' => 'primary'),
		'bpn_certificate_id' => array('type' => 'integer', 'null' => false),
		'event_date' => array('type' => 'date', 'null' => true),
		'event_type' => array('type' => 'string', 'null' => true, 'length' => 50),
		'description' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'created' => array('type' => 'datetime', 'null' => true),
		'modified' => array('type' => 'datetime', 'null' => true),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id'),
			'bpn_certificate_id' => array('unique' => false, 'column' => 'bpn_certificate_id')
		),
		'tableParameters' => array()
	);

	public $bpn_certificates = array(
		'id' => array('type' => 'integer', 'null' => false, 'length' => 11, 'key' => 'primary'),
		'cert_num' => array('type' => 'integer', 'null' => false),
		'cert_num_full' => array('type' => 'string', 'null' => true, 'length' => 50),
		'province' => array('type' => 'string', 'null' => false, 'length' => 50),
		'regency' => array('type' => 'string', 'null' => false, 'length' => 50),
		'district' => array('type' => 'string', 'null' => false, 'length' => 50),
		'village' => array('type' => 'string', 'null' => false, 'length' => 50),
		'ownership_type' => array('type' => 'string', 'null' => false, 'length' => 20),
		'area' => array('type' => 'integer', 'null' => false),
		'owner_name' => array('type' => 'string', 'null' => false),
		'property_id' => array('type' => 'integer', 'null' => true),
		'created_by' => array('type' => 'integer', 'null' => false),
		'created' => array('type' => 'datetime', 'null' => true),
		'modified' => array('type' => 'datetime', 'null' => true),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id'),
			'cert_num' => array('unique' => false, 'column' => 'cert_num'),
			'cert_num_full' => array('unique' => false, 'column' => 'cert_num_full')
		),
		'tableParameters' => array()
	);

	public $media = array(
		'id' => array('type' => 'integer', 'null' => false, 'length' => 11, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false),
		'description' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'file_name' => array('type' => 'string', 'null' => false),
		'file_path' => array('type' => 'string', 'null' => false),
		'order_num' => array('type' => 'integer', 'null' => true),
		'created' => array('type' => 'datetime', 'null' => true),
		'modified' => array('type' => 'datetime', 'null' => true),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id')
		),
		'tableParameters' => array()
	);

	public $notaries = array(
		'id' => array('type' => 'integer', 'null' => false, 'length' => 11, 'key' => 'primary'),
		'notary_name' => array('type' => 'string', 'null' => false, 'length' => 200),
		'address' => array('type' => 'string', 'null' => true),
		'phone' => array('type' => 'string', 'null' => true, 'length' => 100),
		'created_by' => array('type' => 'integer', 'null' => false),
		'created' => array('type' => 'datetime', 'null' => true),
		'modified' => array('type' => 'datetime', 'null' => true),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id')
		),
		'tableParameters' => array()
	);

	public $properties = array(
		'id' => array('type' => 'integer', 'null' => false, 'length' => 11, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false),
		'description' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'parent_property_id' => array('type' => 'integer', 'null' => true),
		'loc_long' => array('type' => 'float', 'null' => true),
		'loc_lat' => array('type' => 'float', 'null' => true),
		'created_by' => array('type' => 'integer', 'null' => false),
		'created' => array('type' => 'datetime', 'null' => true),
		'modified' => array('type' => 'datetime', 'null' => true),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id')
		),
		'tableParameters' => array()
	);

	public $properties_billings = array(
		'id' => array('type' => 'integer', 'null' => false, 'length' => 11, 'key' => 'primary'),
		'billing_type' => array('type' => 'string', 'null' => false, 'length' => 20),
		'customer_num' => array('type' => 'string', 'null' => true, 'length' => 100),
		'period' => array('type' => 'string', 'null' => true, 'length' => 10),
		'description' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'property_id' => array('type' => 'integer', 'null' => true),
		'created' => array('type' => 'datetime', 'null' => true),
		'modified' => array('type' => 'datetime', 'null' => true),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id')
		),
		'tableParameters' => array()
	);

	public $users = array(
		'id' => array('type' => 'integer', 'null' => false, 'length' => 11, 'key' => 'primary'),
		'username' => array('type' => 'string', 'null' => true, 'length' => 50),
		'password' => array('type' => 'string', 'null' => true, 'length' => 254),
		'role' => array('type' => 'string', 'null' => true, 'length' => 20),
		'fullname' => array('type' => 'string', 'null' => true),
		'created' => array('type' => 'datetime', 'null' => true),
		'modified' => array('type' => 'datetime', 'null' => true),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id'),
			'username' => array('unique' => true, 'column' => 'username')
		),
		'tableParameters' => array()
	);

}
