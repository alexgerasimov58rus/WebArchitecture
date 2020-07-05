<?php


abstract class Billing
{
    protected $bank;

    public function __construct(float $bank)
    {
        $this->bank = $bank;
    }

    public function pay(float $price, string $phoneNumber): bool
    {
        if( $this->bank >= $price){
            $this->bank -= $price;
            $this->accept($phoneNumber);
            return true;
        } else{
            $this->reject($phoneNumber);
            return false;
        }
    }

    protected abstract function accept(string $phoneNumber): void;
    protected abstract function reject(string $phoneNumber): void;
}