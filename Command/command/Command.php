<?php


abstract class Command
{
    protected $editor;
    protected $start;
    protected $length;

    /**
     * Command constructor.
     * @param Editor $editor
     * @param $start
     * @param $length
     */
    public function __construct(Editor $editor, $start, $length)
    {
        $this->editor = $editor;
        $this->start = $start;
        $this->length = $length;
    }

    public abstract function execute();
    public abstract function unExecute();
}