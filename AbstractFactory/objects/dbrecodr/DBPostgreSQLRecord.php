<?php


class DBPostgreSQLRecord extends AbstractDBRecord
{
    public function record(): string
    {
        return $this->prepare() . " PostgreSQL";
    }
}