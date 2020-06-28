<?php


class DBOracleFactory extends AbstractDBFactory
{
    public function createDBConnection(): AbstractDBConnection
    {
        return new DBOracleConnection();
    }

    public function createDBRecord(): AbstractDBRecord
    {
        return new DBOracleRecord();
    }

    public function createDBQueryBuilder(): AbstractDBQueryBuilder
    {
        return new DBOracleQueryBuilder();
    }
}