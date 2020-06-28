<?php


class DBOracleRecord extends AbstractDBRecord
{
    public function record(): string
    {
        return $this->prepare() . " Oracle";
    }
}