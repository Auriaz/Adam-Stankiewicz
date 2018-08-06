<?php
class Note extends Controller {
	function __construct() {
		parent::__construct(); 
		Auth::handleLogin();
	}
	/**
	 * [Index description]
	 */
	public function Index() {
		$this->View->title = 'Notes';
		$this->View->noteList = $this->Model->noteList();
		$this->View->Render('Header');
		$this->View->Render("Note/Index");	
		$this->View->Render('Panel');
	}

	public function Create() {
		$data = array();
		$data['title'] = $_POST['title'];
		$data['content'] = $_POST['content'];

		$this->Model->Create($data);
		header('location: '. URL .'Note');
	}

	public function Edit($id) {
		$this->View->Note = $this->Model->noteSingleList($id);
		$this->View->Render('Header');
	    $this->View->Render("Note/Edit");
	    $this->View->Render('Panel');
	    Session::set('edit', true);
	}

	public function editSave($id) {
		$this->View->title = 'Edit Note';
		$data = array();
		$data['id'] = $id;
		$data['title'] = $_POST['title'];
		$data['content'] = $_POST['content']; 
	

		Session::unsets('edit');
		$this->Model->editSave($data);
		header('location: '. URL .'Note');	
	}

	public function Delete($id) {
		$this->Model->Delete($id);
		header('location: '. URL .'Note');		
	}
}	
