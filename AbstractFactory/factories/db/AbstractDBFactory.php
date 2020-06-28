<?php


abstract class AbstractDBFactory
{
    abstract public function createDBConnection(): AbstractDBConnection;
    abstract public function createDBRecord(): AbstractDBRecord;
    abstract public function createDBQueryBuilder(): AbstractDBQueryBuilder;
}