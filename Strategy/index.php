<?php

require_once 'shop/billing/Billing.php';
require_once 'shop/billing/Kiwi.php';
require_once 'shop/billing/WebMoney.php';
require_once 'shop/billing/YandexMoney.php';

require_once 'shop/SocksShop.php';
require_once 'shop/products/ISocks.php';
require_once 'shop/products/SocksBlack.php';
require_once 'shop/products/SocksWhite.php';

$phoneNumber = "+79991122333";

$shop = new SocksShop();
$shop->addSocks(new SocksBlack());
$shop->addSocks(new SocksWhite());

$shop->pay(new Kiwi(3), $phoneNumber);
$shop->pay(new WebMoney(6), $phoneNumber);
$shop->pay(new YandexMoney(8), $phoneNumber);

$shop->addSocks(new SocksWhite());

$shop->pay(new YandexMoney(8), $phoneNumber);
