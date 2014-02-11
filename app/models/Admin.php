<?php 

	class Admin extends Model {

		public function __construct($table=NULL) {
	        parent::__construct();
	        if($table==NULL)
	        	$this->mapper=$this->getMapper('currentUser');
	        else
	        	$this->mapper=$this->getMapper($table);
	    }

	    public function getUser($user) {
	        $res = $this->mapper->find(array('username=? and password=?', $user['username'], md5($user['password'])));        
	        return ($res!=null);
	    }

	    public function all($limit) {
	        return $this->mapper->find(array(), array('limit' => $limit, "order" => 'RAND()'));
	    }

	    public function add() {
	        $this->mapper->copyFrom('POST');
	        $this->mapper->save();
	    }

	    public function getById($id) {
	        $this->mapper->load(array('id=?',$id));
	        $this->mapper->copyTo('POST');
	    }

	    public function edit($id) {
	        $this->mapper->load(array('id=?',$id));
	        $this->mapper->copyFrom('POST');
	        $this->mapper->update();
	    }

	    public function deleteAll() {
	        return $this->mapper->erase(array('content!=?','NULL'));
	    }

	}

?>