<?php

interface MoneyPaymentMethod
{
    public function switchCurrency($currency);
}