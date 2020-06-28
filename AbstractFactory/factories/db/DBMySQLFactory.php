<?php


class DBMySQLFactory extends AbstractDBFactory
{
    public function createDBConnection(): AbstractDBConnection
    {
        return new DBMySQLConnection();
    }

    public function createDBRecord(): AbstractDBRecord
    {
        return new DBMySQLRecord();
    }

    public function createDBQueryBuilder(): AbstractDBQueryBuilder
    {
        return new DBMySQLQueryBuilder();
    }
}