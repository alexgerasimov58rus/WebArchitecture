<?php


class DBPostgreSQLQueryBuilder extends AbstractDBQueryBuilder
{
    public function builder(): string
    {
        return $this->prepare() . " PostgreSQL";
    }
}