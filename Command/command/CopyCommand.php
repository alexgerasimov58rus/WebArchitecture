<?php


class CopyCommand extends Command
{
    public function __construct(Editor $editor, $start, $length){
        parent::__construct($editor, $start, $length);
    }

    public function execute(){
        $this->editor->copy($this->start, $this->length);
    }

    public function unExecute() { }
}