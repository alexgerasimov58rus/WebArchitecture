<?php


class DBMySQLQueryBuilder extends AbstractDBQueryBuilder
{
    public function builder(): string
    {
        return $this->prepare() . " MySQL";
    }
}