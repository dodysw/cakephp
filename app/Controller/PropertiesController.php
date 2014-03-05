<?php
App::uses('AppController', 'Controller');
/**
 * Properties Controller
 *
 * @property Property $Property
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PropertiesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
	public $paginate = array(
		'limit' => 5
	);

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
		$this->Property->recursive = 0;
		$this->Paginator->settings = $this->paginate;
		$this->set('properties', $this->Paginator->paginate('Property', array('Property.created_by = ' => AuthComponent::user('id'))));
	}

	public function admin_index() {
		$this->Property->recursive = 0;
		$this->set('properties', $this->Paginator->paginate('Property'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Property->exists($id)) {
			throw new NotFoundException(__('Invalid property'));
		}
		$options = array('conditions' => array('Property.' . $this->Property->primaryKey => $id));
		$this->set('property', $this->Property->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Property->create();
            if (AuthComponent::user()) {
                $this->request->data['Property']['created_by'] = AuthComponent::user('id');
            }
			if ($this->Property->save($this->request->data)) {
				$this->Session->setFlash(__('The property has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The property could not be saved. Please, try again.'));
			}
		}
		$parentProperties = $this->Property->ParentProperty->find('list', array('conditions' => array('ParentProperty.created_by =' => AuthComponent::user('id'))));
		$this->set(compact('parentProperties'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Property->exists($id)) {
			throw new NotFoundException(__('Invalid property'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Property->save($this->request->data)) {
				$this->Session->setFlash(__('The property has been saved.'));
				return $this->redirect(array('action' => 'view', $id));
			} else {
				$this->Session->setFlash(__('The property could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Property.' . $this->Property->primaryKey => $id));
			$this->request->data = $this->Property->find('first', $options);
		}
		$parentProperties = $this->Property->ParentProperty->find('list');
		$this->set(compact('parentProperties'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Property->id = $id;
		if (!$this->Property->exists()) {
			throw new NotFoundException(__('Invalid property'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Property->delete()) {
			$this->Session->setFlash(__('The property has been deleted.'));
		} else {
			$this->Session->setFlash(__('The property could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
