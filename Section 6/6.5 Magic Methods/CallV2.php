<?php

class Payment {
    public function setAmount($amount) {
        $this->amount = $amount;
    }

    protected function getAmount() {
        return $this->amount;
    }

    public function __call($method, $arguments) {
      if (in_array($method, array('getAmount'))) {
        return call_user_func_array(array($this, $method), $arguments);
      }
    }
}

$todayPayment = new Payment();
$todayPayment->setAmount(1000);
echo $todayPayment->getAmount();