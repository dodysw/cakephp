<?php
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {

	public $displayField = 'username';

    public $roleOptions = array('admin' => 'Administrator', 'author' => 'Author');

    public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A username is required',
            ),
            'alphanumeric' => array(
                'rule' => 'alphaNumeric',
                'message' => 'Username must only contain letters and numbers',
            ),
            'size' => array(
                'rule' => array('between', 1, 20),
                'message' => 'Username must be between 6 to 15 characters'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required',
            ),
            'size' => array(
                'rule' => array('between', 6, 20),
                'message' => 'Password must be between 6 to 256 characters'
            )
        ),
        'confirm_password' => array(
            'equaltofield' => array(
                'rule' => array('equaltofield', 'password'),
                'message' => 'Password confirmation must match',
                'on' => 'create'
            )
        ),
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('admin', 'author')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false,
            )
        )
    );

    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $passwordHasher = new BlowfishPasswordHasher();
            $this->data[$this->alias]['password'] = $passwordHasher->hash($this->data[$this->alias]['password']);
        }
        return true;
    }


    function equaltofield($check, $otherField) {
        $fname = '';
        foreach ($check as $k => $v) {
            $fname = $k;
        }
        return $this->data[$this->name][$otherField] === $this->data[$this->name][$fname];
    }


}
