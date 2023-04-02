<?php 

use Base\Json\Db;
use Base\Json\Interfaces\Model;

class NoteModel extends Db implements Model
{
    public $file = 'notes'; // a json file name
    public $database = 'notesdb'; // a folder to store json file

    public function __construct()
    {
        parent::__construct($this->database);
        $this->useTable();
    }

    public function useTable()
    {
        $this->from($this->file);
    }

}
/* End of NoteModel file */
