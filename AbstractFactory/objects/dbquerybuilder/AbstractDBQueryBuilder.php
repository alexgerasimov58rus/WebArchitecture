<?php


abstract class AbstractDBQueryBuilder
{
    public function prepare(): string{
        return "Конструируем запрос к БД";
    }
    abstract public function builder(): string;
}