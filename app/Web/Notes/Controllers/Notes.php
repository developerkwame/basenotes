<?php 

use Base\Controllers\WebController;

class Notes extends WebController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        use_model('NoteModel', 'notes');
        // dd($this->notes->get());
        // return view('basenotes', $this->data);
         $this->setTitle('List Notes');
        return layout('base-layout', 'list-notes', $this->data);
    }

    public function create()
    {
        $this->setTitle('Create Note');
        return layout('base-layout', 'create-notes', $this->data);
    }

    public function store()
    {
        // Sample Code Here ...
    }

    public function edit($id = '')
    {
        $id = clean($id);

        $this->setTitle('Edit Note');
        return layout('base-layout', 'edit-notes', $this->data);
    }

    public function update($id)
    {
        $id = clean($id);

        // Sample Code Here ...
    }

    public function delete($id)
    {
        $id = clean($id);
        
        // Sample Code Here ...
    }
}
/* End of Notes file */
