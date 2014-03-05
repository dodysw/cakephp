<?php
App::uses('AppController', 'Controller');
/**
 * BpnCertificates Controller
 *
 * @property BpnCertificate $BpnCertificate
 * @property PaginatorComponent $Paginator
 */
class BpnCertificatesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

    public function isAuthorized($user) {
        if (in_array($this->action, array('add', 'index'))) {
            return true;
        }

        if (in_array($this->action, array('edit', 'delete', 'view'))) {
            $propertyId = (int) $this->request->params['pass'][0];
            if ($this->Property->isOwnedBy($propertyId, $user['id'])) {
                return true;
            }
        }

        return parent::isAuthorized($user);
    }

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->BpnCertificate->recursive = 0;
		$this->set('bpnCertificates', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->BpnCertificate->exists($id)) {
			throw new NotFoundException(__('Invalid bpn certificate'));
		}
		$options = array('conditions' => array('BpnCertificate.' . $this->BpnCertificate->primaryKey => $id));
		$this->set('bpnCertificate', $this->BpnCertificate->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$propertyId = (int)$this->request->params['pass'][0];
		$this->loadModel('Property');
		$options = array('conditions' => array('Property.' . $this->Property->primaryKey => $propertyId), 'Property.created_by' => AuthComponent::user('id'));
		$property = $this->Property->find('first', $options);
		if (!$property) {
			throw new NotFoundException(__('Invalid property'));
		}

		if ($this->request->is('post')) {
			$this->BpnCertificate->create();
            if (AuthComponent::user()) {
                $this->request->data['BpnCertificate']['created_by'] = AuthComponent::user('id');
            }
			$this->request->data['BpnCertificate']['property_id'] = $propertyId; 
			if ($this->BpnCertificate->save($this->request->data)) {
				$this->Session->setFlash(__('The certificate has been saved.'));
				return $this->redirect(array('controller' => 'properties', 'action' => 'view', $propertyId));
			} else {
				$this->Session->setFlash(__('The bpn certificate could not be saved. Please, try again.'));
			}
		}
		$this->set('property', $property);
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->BpnCertificate->exists($id)) {
			throw new NotFoundException(__('Invalid bpn certificate'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->BpnCertificate->save($this->request->data)) {
				$this->Session->setFlash(__('The bpn certificate has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bpn certificate could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('BpnCertificate.' . $this->BpnCertificate->primaryKey => $id));
			$this->request->data = $this->BpnCertificate->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->BpnCertificate->id = $id;
		if (!$this->BpnCertificate->exists()) {
			throw new NotFoundException(__('Invalid bpn certificate'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->BpnCertificate->delete()) {
			$this->Session->setFlash(__('The bpn certificate has been deleted.'));
		} else {
			$this->Session->setFlash(__('The bpn certificate could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
