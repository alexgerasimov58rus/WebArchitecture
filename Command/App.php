<?php


class App
{
    private $current = -1;
    private $history = [];

    public function executeCommand(Command $command){
        $command->execute();
        $this->current++;
        $this->history[] = $command;
    }

    public function undo(){
        $this->history[$this->current]->unexecute();
        $this->current--;
    }

    public function redo(){
        $this->current++;
        $this->history[$this->current]->execute();
    }
}