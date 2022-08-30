<?php
namespace app\service\strategy;

abstract class Payment {

    public abstract function getName(): string;


    public abstract function queryBalance(): float;


    public abstract function pay(): array;


}



class Alipay extends Payment
{

    public function getName(): string
    {
        return  '支付宝';
    }

    public function queryBalance(): float
    {
        return 0.01;
    }

    public function pay(): array
    {
        return  ['code' => '', 'msg' => '', 'data' => ''];
    }

}


class Wxpay extends Payment
{

    public function getName(): string
    {
        return  '微信';
    }

    public function queryBalance(): float
    {
        return 0.01;
    }

    public function pay(): array
    {
        return  ['code' => '', 'msg' => '', 'data' => ''];
    }

}


class Order  {

    protected $payment = Alipay::class;

    public function setPayment(string $payment)
    {
        $this->payment = $payment;
        return new $this->payment();
    }

    public function getName()
    {
        return $this->setPayment($this->payment)->getName();
    }


    public function queryBalance()
    {
        return $this->setPayment(Wxpay::class)->queryBalance();
    }


    public function orderPay()
    {
        return $this->setPayment(Wxpay::class)->pay();
    }


}












