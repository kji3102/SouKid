function edit($id = null) {
    $this->Post->id = $id;
    if ($this->request->is('get')) {
        $this->request->data = $this->Post->findById($id));
    } else {
        if ($this->Post->save($this->request->data)) {
            $this->Flash->success('Your post has been updated.');
            $this->redirect(array('action' => 'index'));
        }
    }
}