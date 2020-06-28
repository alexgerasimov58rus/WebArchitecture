<?php


abstract class AbstractDBRecord
{
    public function prepare(): string{
        return "Запись таблицы в БД";
    }
    abstract public function record(): string;
}