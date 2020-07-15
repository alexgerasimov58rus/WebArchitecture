<?php


class PasteCommand extends Command
{
    public function __construct(Editor $editor, $start){
        parent::__construct($editor, $start, 0);
    }

    public function execute(){
        $this->editor->paste($this->start);
        $this->length = strlen($this->editor->getClipboard());
    }

    public function unExecute() {
        $this->editor->remove($this->start, $this->length);
    }
}