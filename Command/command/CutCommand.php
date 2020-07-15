<?php


class CutCommand  extends Command
{
    public function __construct(Editor $editor, $start, $length){
        parent::__construct($editor, $start, $length);
    }

    public function execute(){
        $this->editor->cut($this->start, $this->length);
    }

    public function unExecute() {
        $this->editor->paste($this->start);
    }
}