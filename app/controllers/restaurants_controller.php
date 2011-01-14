<?php
class RestaurantsController extends AppController {

	var $name = 'Restaurants';

	function index() {
		$this->Restaurant->recursive = 0;
		$this->set('restaurants', $this->paginate());
	}
	
	function random()
	{
			$random = $this->Restaurant->find('first',array(
						'order' => 'rand()',
					));
				$this->view($random['Restaurant']['id']);
				$this->render('view');
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid restaurant', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('restaurant', $this->Restaurant->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Restaurant->create();
			if ($this->Restaurant->save($this->data)) {
				$this->Session->setFlash(__('The restaurant has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The restaurant could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid restaurant', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Restaurant->save($this->data)) {
				$this->Session->setFlash(__('The restaurant has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The restaurant could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Restaurant->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for restaurant', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Restaurant->delete($id)) {
			$this->Session->setFlash(__('Restaurant deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Restaurant was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>