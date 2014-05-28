<?php

class cheesesController extends AppController {
    public $helpers = array('Html', 'Form');

    public $components = array('Session');

    public function index() {
        $this->set('cheeses', $this->cheese->find('all'));
    }

     public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid cheese'));
        }

        $cheese = $this->cheese->findById($id);
        if (!$cheese) {
            throw new NotFoundException(__('Invalid cheese'));
        }
        $this->set('cheese', $cheese);
    }

    public function add() {
        if ($this->request->is('POST')) {
            $this->cheese->create();
            if ($this->cheese->save($this->request->data)) {
                $this->Session->setFlash(__('Your cheese has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your cheese.'));
        }
    }


    public function edit($id = null) {
	    if (!$id) {
	        throw new NotFoundException(__('Invalid cheese'));
	    }

	    $cheese = $this->cheese->findById($id);
	    if (!$cheese) {
	        throw new NotFoundException(__('Invalid cheese'));
	    }

	    if ($this->request->is(array('cheese', 'put'))) {
	        $this->cheese->id = $id;
	        if ($this->cheese->save($this->request->data)) {
	            $this->Session->setFlash(__('Your cheese has been updated.'));
	            return $this->redirect(array('action' => 'index'));
	        }
	        $this->Session->setFlash(__('Unable to update your cheese.'));
	    }

	    if (!$this->request->data) {
	        $this->request->data = $cheese;
	    }
	}

	public function delete($id) {
	    if ($this->request->is('get')) {
	        throw new MethodNotAllowedException();
	    }

	    if ($this->cheese->delete($id)) {
	        $this->Session->setFlash(
	            __('The cheese with id: %s has been deleted.', h($id))
	        );
	        return $this->redirect(array('action' => 'index'));
	    }
	}
}

?>