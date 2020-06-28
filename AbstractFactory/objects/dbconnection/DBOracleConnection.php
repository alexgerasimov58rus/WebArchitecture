<?php


class DBOracleConnection extends AbstractDBConnection
{
    public function connect(): string
    {
        return $this->prepare() . " Oracle";
    }
}