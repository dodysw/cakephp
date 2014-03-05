<?php
App::uses('AppController', 'Controller');

class GramtController extends AppController {

	public $components = array('Paginator', 'Session');

	public function home() {
		if ($this->Auth->loggedin()) {
			return $this->render('../Pages/welcomeback');
		} else {
			return $this->render('../Pages/welcome');
		}
	}

    public function beforeFilter() {
        $this->Auth->allow();
    }

}
