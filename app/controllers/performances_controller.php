<?php
class PerformancesController extends AppController {

	var $name = 'Performances';
	
	function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allowedActions = array('schedule', 'add');
		/*$this->Performance->recursive = 0;
		$this->set('performances', $this->paginate());*/
	}
	
	function index() {
		$this->set('performances', $this->Performance->find('all', array('order' => 'Performance.begin_time ASC')));
	}
	
	function view($id = null) {
		$this->Performance->id = $id;
		$this->set('performance', $this->Performance->read());
	}
	
	function add() {
		if (!empty($this->data)) {
			if ($this->Performance->save($this->data)) {
				$this->Session->setFlash('Saved your information.');
				$this->redirect(array('action' => 'schedule'));
			}
		}
	}
	
	function delete($id) {
		$this->Performance->delete($id);
		$this->Session->setFlash('Performance deleted.');
		$this->redirect(array('action'=>'index'));
	}
	
	function edit($id = null) {
		$this->Performance->id = $id;
		
		$this->set('performance', $this->Performance->read());
		
		if (empty($this->data)) {
			$this->data = $this->Performance->read();
		} else {
			if ($this->Performance->save($this->data)) {
				$this->Session->setFlash('Performance info updated.');
				$this->redirect(array('action' => 'view', $id));
			}
		}
	}
	
	function schedule() {
		$this->set('performances', $this->Performance->find('all', array('order' => 'Performance.begin_time ASC', 'conditions' => array('Performance.live' => 1))));
	}
	
}
?>