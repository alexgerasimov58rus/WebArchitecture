<?php


class DBMySQLConnection extends AbstractDBConnection
{
    public function connect(): string
    {
        return $this->prepare() . " MySQL";
    }
}