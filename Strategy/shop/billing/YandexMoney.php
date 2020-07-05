<?php


class YandexMoney extends Billing
{
    public function __construct(float $bank)
    {
        parent::__construct($bank);
    }

    protected function accept(string $phoneNumber): void
    {
        echo "YandexMoney: платеж пользователя $phoneNumber проведен, на балансе: $this->bank" . PHP_EOL;;
    }

    protected function reject(string $phoneNumber): void
    {
        echo "YandexMoney: платеж пользователя $phoneNumber отклонен" . PHP_EOL;;
    }
}