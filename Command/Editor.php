<?php


class Editor
{
    protected $text;
    protected $clipboard;
    /**
     * Editor constructor.
     * @param $text
     */
    public function __construct($text){
        $this->text = $text;
    }

    public function getText() : string {
        return $this->text;
    }

    public function getClipboard() : string {
        return $this->clipboard;
    }

    public function cut(int $start, int $length){
        $this->copy($start, $length);
        $this->text = substr($this->text, $start + $length, strlen($this->text) - $start - $length);
    }

    public function copy(int $start, int $length){
        $this->clipboard= substr($this->text, $start, $length);
    }

    public function paste(int $start){
        $this->text = substr_replace($this->text, $this->clipboard, $start, 0);
    }

    public function remove(int $start, int $length){
        $this->text= substr_replace($this->text, "", $start, $length);
    }

}