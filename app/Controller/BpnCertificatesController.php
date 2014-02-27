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
	public $components = array('Paginator');

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
		if ($this->request->is('post')) {
			$this->BpnCertificate->create();
			if ($this->BpnCertificate->save($this->request->data)) {
				$this->Session->setFlash(__('The bpn certificate has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bpn certificate could not be saved. Please, try again.'));
			}
		}
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
