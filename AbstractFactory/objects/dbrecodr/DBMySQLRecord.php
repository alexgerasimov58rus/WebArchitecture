<?php


class DBMySQLRecord extends AbstractDBRecord
{
    public function record(): string
    {
        return $this->prepare() . " MySQL";
    }
}