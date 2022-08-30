<?php
namespace app\service\abstructfactory;

// 冰箱
interface ProductA {
    public function getPrice(): float;
}

//洗衣机
interface ProductB {
    public function getPrice(): float;
}


//产品抽象工厂
interface ProductFactory {

    public function createProductA();
    public function createProductB();

}


//美的冰箱
class MeiDiA implements ProductA {

    protected $price;

    public function getPrice(): float
    {
        return  $this->price;
    }

}

//美的洗衣机
class MeiDiB implements ProductB {

    protected $price;

    public function getPrice(): float
    {
        return  $this->price;
    }

}


//海尔冰箱
class HaiErA implements ProductA {

    protected $price;

    public function getPrice(): float
    {
        return  $this->price;
    }

}

//海尔洗衣机
class HaiErB implements ProductB {

    protected $price;

    public function getPrice(): float
    {
        return  $this->price;
    }

}




//美的产品簇 包含美的牌冰箱、美的牌洗衣机
class ProductFactoryA implements ProductFactory
{
    public function createProductA()
    {
        return new MeiDiA();
    }

    public function createProductB()
    {
        return new MeiDiB();
    }
}

//海尔产品簇 包含海尔牌冰箱、海尔牌洗衣机
class ProductFactoryB implements ProductFactory
{
    public function createProductA()
    {
        return new HaiErA();
    }

    public function createProductB()
    {
        return new HaiErB();
    }
}


class client {

    public function test()
    {
        $mei_di = new ProductFactoryA();
        $mei_di->createProductA(); //美的牌冰箱
        $mei_di->createProductB(); //美的牌洗衣机

        $hai_er = new ProductFactoryB();
        $hai_er->createProductA(); //海尔牌冰箱
        $hai_er->createProductB(); //海尔牌洗衣机

    }

}