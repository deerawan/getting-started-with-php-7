<?php

abstract class PaymentMethod {
    abstract protected function processPayment();
}