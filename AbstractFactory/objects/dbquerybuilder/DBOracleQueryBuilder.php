<?php


class DBOracleQueryBuilder extends AbstractDBQueryBuilder
{
    public function builder(): string
    {
        return $this->prepare() . " Oracle";
    }
}