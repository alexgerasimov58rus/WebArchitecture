<?php


abstract class AbstractDBConnection
{
    public function prepare(): string{
        return "Соединение с БД";
    }
    abstract public function connect(): string;
}