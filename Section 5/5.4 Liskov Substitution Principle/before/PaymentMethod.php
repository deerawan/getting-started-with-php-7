<?php

interface PaymentMethod
{
    public function pay($amount);
    public function switchCurrency($currency);
}