<?php


class DBPostgreSQLFactory extends AbstractDBFactory
{
    public function createDBConnection(): AbstractDBConnection
    {
        return new DBPostgreSQLConnection();
    }

    public function createDBRecord(): AbstractDBRecord
    {
        return new DBPostgreSQLRecord();
    }

    public function createDBQueryBuilder(): AbstractDBQueryBuilder
    {
        return new DBPostgreSQLQueryBuilder();
    }
}