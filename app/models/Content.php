<?php

class Content extends Model {

    public function __construct($contentType) {
        parent::__construct();
        $this->mapper=$this->getMapper($contentType);
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

    public function delete($id) {
        $this->mapper->load(array('id=?',$id));
        $this->mapper->erase();
    }
}

?>