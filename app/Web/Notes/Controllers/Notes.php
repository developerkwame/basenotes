<?php 

use Base\Controllers\WebController;

class Notes extends WebController
{
    public function __construct()
    {
        parent::__construct();

        use_form_validation(); // initialize form validation

        $this->use->model('NoteModel', 'notes'); // or use_model('NoteModel', 'notes');
    
    }

    public function index()
    {
        $this->data['notes'] = $this->notes->all();
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
        /**
         * you can also use
         * request()->post()
         */
        $note = input()->post(); // get all post request
        $note = clean($note); // clean xss

        validate()->formData($note); // set form input to validate
        validate()->input('title', 'trim|required|ucfirst');
        validate()->input('details', 'trim|required|min_length[10]|max_length[250]');

        if (!validate()->true()) {
            $this->create();
        }

        $saved = false;

        if (validate()->true()) {
    
            $note = (object) $note;

            $saved = $this->notes->insert([
                'id' => $this->notes->autoincrement(),
                'title' => $note->title,
                'details' => $note->details,
                'created_at' => datetime()
            ]);

            ($saved)
                ? route()->to('notes')->withSuccess('Note saved successfully')
                : route()->to('notes/create')->withError('Sorry note was saved');
        }

    }

    public function edit($id = '')
    {
        $id = clean($id);

        $note = $this->notes->select('*')->where(['id' => $id])->get();

        if (!$note[0]) {
            route()->to('notes')->withError('Note does not exist');
        }

        $this->data['note'] = $note[0];

        $this->setTitle('Edit Note');
        return layout('base-layout', 'edit-notes', $this->data);
    }

    public function update($id)
    {
        $id = clean($id);

        $note = input()->post(); // get all post request
        $note = clean($note); // clean xss

        validate()->formData($note); // set form input to validate
        validate()->input('title', 'trim|required|ucfirst');
        validate()->input('details', 'trim|required|min_length[10]|max_length[250]');

        if (!validate()->true()) {
            $this->edit($id);
        }

        if (validate()->true()) {
    
            $note = (object) $note;

            $updated = $this->notes->update([
                'title' => $note->title,
                'details' => $note->details,
                'created_at' => datetime()
            ])->where(['id' => $id])->execute();

            ($updated)
                ? route()->to('notes')->withSuccess('Note updated successfully')
                : route()->to('notes/edit', $id)->withError('Sorry note was updated');
        }

    }

    public function delete($id)
    {

        $id = clean($id);

        $note = $this->notes->select('*')->where(['id' => $id])->get();

        if (!$note[0]) {
            route()->to('notes')->withError('Note does not exist');
        }

        if ($note[0]) {

            $deleted = $this->notes->delete()
                ->where(['id' => $id])
                ->execute();

            ($deleted)
                ? route()->to('notes')->withSuccess('Note deleted successfully')
                : route()->to('notes')->withError('Sorry note deleted');
        }
    }
}
/* End of Notes file */
