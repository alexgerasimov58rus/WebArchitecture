<?php


class DBPostgreSQLConnection extends AbstractDBConnection
{
    public function connect(): string
    {
        return $this->prepare() . " PostgreSQL";
    }
}