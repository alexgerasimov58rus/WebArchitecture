<?php


class SocksShop
{
    private $socks = [];

    public function addSocks(ISocks $type){
        $this->socks[] = $type;
    }

    public function pay(Billing $billing, string $phoneNumber): void{
        $totalPrice = 0;

        if( count($this->socks) <= 0) {
            echo "Корзина пуста" . PHP_EOL;
            return;
        }

        foreach ($this->socks as $sock){
            $totalPrice += $sock->getPrice();
        }

        if( $billing->pay($totalPrice, $phoneNumber) == true){
            $this->socks = [];
        }
    }
}